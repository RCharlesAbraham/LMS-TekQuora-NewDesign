<?php

namespace App\Services\Legacy;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LegacyHttpBridgeService implements LegacyBridgeInterface
{
    public function fetchDashboard(array $context = []): array
    {
        return $this->getJson(
            config('legacy.endpoints.dashboard', '/api/dashboard.php'),
            $context
        );
    }

    public function fetchUsers(array $filters = []): array
    {
        return $this->getJson(
            config('legacy.endpoints.users', '/api/users.php'),
            $filters
        );
    }

    protected function getJson(string $endpoint, array $query = []): array
    {
        $baseUrl = rtrim((string) config('legacy.base_url', ''), '/');
        if ($baseUrl === '') {
            return [];
        }

        $url = $baseUrl.'/'.ltrim($endpoint, '/');

        try {
            $response = Http::acceptJson()
                ->timeout((int) config('legacy.timeout', 5))
                ->retry((int) config('legacy.retries', 1), 200)
                ->get($url, $query);

            if (! $response->ok()) {
                Log::warning('Legacy HTTP bridge returned non-success status.', [
                    'url' => $url,
                    'status' => $response->status(),
                ]);

                return [];
            }

            $json = $response->json();

            return is_array($json) ? $json : [];
        } catch (\Throwable $exception) {
            Log::warning('Legacy HTTP bridge request failed.', [
                'url' => $url,
                'error' => $exception->getMessage(),
            ]);

            return [];
        }
    }
}
