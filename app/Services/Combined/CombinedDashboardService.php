<?php

namespace App\Services\Combined;

use App\Models\User;
use App\Services\Legacy\LegacyBridgeInterface;
use Illuminate\Support\Facades\Auth;

class CombinedDashboardService
{
    public function __construct(
        protected LegacyBridgeInterface $legacyBridge
    ) {
    }

    public function getDashboardData(): array
    {
        $user = Auth::user() ?? (object) ['name' => 'Student'];

        if ((bool) config('legacy.features.dashboard_native', true)) {
            $native = $this->getNativeDashboardData();
            if (! empty($native['courses'])) {
                return [
                    'source' => 'new',
                    'user' => $user,
                    ...$native,
                ];
            }
        }

        $legacy = $this->legacyBridge->fetchDashboard([
            'user_id' => Auth::id(),
        ]);

        return [
            'source' => 'old',
            'user' => $user,
            'stats' => $legacy['stats'] ?? $this->defaultStats(),
            'courses' => $legacy['courses'] ?? [],
            'notifications' => $legacy['notifications'] ?? [],
        ];
    }

    public function getUserList(array $filters = []): array
    {
        if ((bool) config('legacy.features.users_native', true)) {
            $query = User::query()->select(['id', 'name', 'email', 'role']);

            if (! empty($filters['q'])) {
                $search = $filters['q'];
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            }

            return [
                'source' => 'new',
                'users' => $query->limit(20)->get()->toArray(),
            ];
        }

        return [
            'source' => 'old',
            'users' => $this->legacyBridge->fetchUsers($filters)['users'] ?? [],
        ];
    }

    protected function getNativeDashboardData(): array
    {
        $courses = User::query()
            ->select(['name'])
            ->limit(3)
            ->get()
            ->map(function ($user, $index) {
                $progress = [35, 60, 85][$index] ?? 50;

                return [
                    'name' => $user->name."'s Learning Track",
                    'duration' => '12 hours',
                    'progress' => $progress,
                ];
            })
            ->toArray();

        return [
            'stats' => $this->defaultStats(),
            'courses' => $courses,
            'notifications' => [],
        ];
    }

    protected function defaultStats(): array
    {
        return [
            'mon' => 0,
            'tue' => 60,
            'wed' => 20,
            'thu' => 60,
            'fri' => 50,
            'sat' => 35,
            'sun' => 45,
        ];
    }
}
