@extends('lms-ui.layouts.app')

@section('title', 'Combined LMS')

@push('styles')
    <style>
        .combined-wrap { max-width: 1100px; margin: 24px auto; padding: 0 16px; }
        .combined-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; margin-bottom: 16px; }
        .combined-title { margin: 0 0 6px; color: #0f172a; }
        .combined-muted { color: #64748b; font-size: 14px; }
        .chip { display: inline-block; padding: 2px 10px; border-radius: 999px; font-size: 12px; font-weight: 600; }
        .chip-old { background: #ffedd5; color: #9a3412; }
        .chip-new { background: #dcfce7; color: #166534; }
        .stats-grid { display: grid; grid-template-columns: repeat(7, minmax(70px, 1fr)); gap: 8px; margin-top: 14px; }
        .stat-box { background: #f8fafc; border-radius: 10px; padding: 10px; text-align: center; }
        .course-item { padding: 10px 0; border-bottom: 1px dashed #e2e8f0; }
        .course-item:last-child { border-bottom: 0; }
        .users-table { width: 100%; border-collapse: collapse; margin-top: 12px; }
        .users-table th, .users-table td { text-align: left; border-bottom: 1px solid #e2e8f0; padding: 10px 8px; }
        .actions { display: flex; gap: 10px; margin-top: 12px; }
        .btn-link { text-decoration: none; background: #0f3c6e; color: #fff; padding: 8px 12px; border-radius: 8px; font-size: 13px; }
        .search-input { padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 8px; width: 260px; }
    </style>
@endpush

@section('content')
    <div class="combined-wrap">
        <div class="combined-card">
            <h1 class="combined-title">Combined LMS Bridge</h1>
            <div class="combined-muted">Main framework: Laravel + NEW UI. Source:
                @if(($source ?? 'new') === 'old')
                    <span class="chip chip-old">OLD bridge</span>
                @else
                    <span class="chip chip-new">Laravel native</span>
                @endif
            </div>
            <div class="actions">
                <a class="btn-link" href="{{ route('combined.index') }}">Dashboard</a>
                <a class="btn-link" href="{{ route('combined.users') }}">Users</a>
            </div>
        </div>

        @if(($viewMode ?? 'dashboard') === 'dashboard')
            <div class="combined-card">
                <h2 class="combined-title">Welcome, {{ $user->name ?? 'Student' }}</h2>
                <div class="combined-muted">Dashboard module using fallback-ready service.</div>
                @php
                    $orderedStats = $stats ?? [];
                @endphp
                <div class="stats-grid">
                    @foreach($orderedStats as $day => $value)
                        <div class="stat-box">
                            <div>{{ strtoupper($day) }}</div>
                            <strong>{{ $value }}</strong>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="combined-card">
                <h3 class="combined-title">Courses</h3>
                @forelse(($courses ?? []) as $course)
                    <div class="course-item">
                        <strong>{{ $course['name'] ?? 'Untitled' }}</strong>
                        <div class="combined-muted">
                            {{ $course['duration'] ?? '-' }} | Progress: {{ $course['progress'] ?? 0 }}%
                        </div>
                    </div>
                @empty
                    <div class="combined-muted">No courses found. Legacy fallback can fill this during migration.</div>
                @endforelse
            </div>
        @else
            <div class="combined-card">
                <h2 class="combined-title">Users (First Migrated Module)</h2>
                <form method="GET" action="{{ route('combined.users') }}">
                    <input
                        type="text"
                        class="search-input"
                        name="q"
                        value="{{ $filters['q'] ?? '' }}"
                        placeholder="Search by name or email"
                    >
                    <button type="submit" class="btn-link" style="border:0; cursor:pointer;">Search</button>
                </form>
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(($users ?? []) as $row)
                            <tr>
                                <td>{{ $row['id'] ?? '-' }}</td>
                                <td>{{ $row['name'] ?? '-' }}</td>
                                <td>{{ $row['email'] ?? '-' }}</td>
                                <td>{{ $row['role'] ?? '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="combined-muted">No users returned for current source.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
