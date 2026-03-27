<?php

namespace App\Http\Controllers\LmsUi;

use App\Http\Controllers\Controller;
use App\Services\Combined\CombinedDashboardService;
use Illuminate\Http\Request;

class CombinedController extends Controller
{
    public function __construct(
        protected CombinedDashboardService $combinedService
    ) {
    }

    public function index()
    {
        $dashboard = $this->combinedService->getDashboardData();

        return view('lms-ui.combined.index', [
            'viewMode' => 'dashboard',
            ...$dashboard,
        ]);
    }

    public function users(Request $request)
    {
        $validated = $request->validate([
            'q' => ['nullable', 'string', 'max:100'],
        ]);

        $usersData = $this->combinedService->getUserList($validated);
        $dashboard = $this->combinedService->getDashboardData();

        return view('lms-ui.combined.index', [
            'viewMode' => 'users',
            'filters' => $validated,
            ...$dashboard,
            ...$usersData,
        ]);
    }
}
