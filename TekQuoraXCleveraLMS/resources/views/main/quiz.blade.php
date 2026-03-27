<!DOCTYPE html>
<html lang="{{ app()->getLocale() === 'th' ? 'th' : 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('lms_ui::quiz.page_title') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f4f6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content { display: flex; flex-direction: column; gap: 24px; }

        .quiz-tabs {
            display: flex;
            justify-content: center;
            gap: 0;
            background: #f8fafc;
            border-radius: 14px;
            padding: 6px;
            max-width: 520px;
            margin: 0 auto;
            border: 1px solid #e8ecf1;
        }

        .quiz-tab {
            flex: 1;
            padding: 12px 24px;
            text-align: center;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #64748b;
            background: transparent;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.25s ease;
            font-family: inherit;
        }

        .quiz-tab:hover { color: #1e293b; }

        .quiz-tab.active {
            background: linear-gradient(135deg, #e11d48, #f43f5e);
            color: #fff;
            box-shadow: 0 4px 14px rgba(225, 29, 72, 0.3);
        }

        .quiz-tab-content { display: none; }
        .quiz-tab-content.active { display: block; }

        .contest-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        .contest-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #e8ecf1;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .contest-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        }

        .contest-banner {
            height: 180px;
            overflow: hidden;
            padding: 12px;
        }

        .contest-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .contest-body { padding: 16px 20px 8px; }

        .contest-title {
            font-size: 16px;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 6px 0;
        }

        .contest-desc {
            font-size: 13px;
            color: #94a3b8;
            margin: 0 0 16px 0;
            line-height: 1.5;
        }

        .contest-stats {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-top: 1px solid #f1f5f9;
            padding: 14px 0 0;
        }

        .contest-stat { text-align: center; }

        .contest-stat-label {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 500;
            display: block;
            margin-bottom: 4px;
        }

        .contest-stat-value {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
        }

        .contest-footer { padding: 12px 20px 20px; }

        .btn-play {
            width: 100%;
            padding: 12px;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }

        .btn-play:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #94a3b8;
            font-size: 15px;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .shared-shell { padding: 80px 15px 30px; }
            .quiz-tabs { max-width: 100%; }
            .contest-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="shared-shell">
        @include('partials.sidebar', ['activePage' => 'quiz'])

        <main class="content">
            <!-- Tabs -->
            <div class="quiz-tabs" role="tablist">
                <button class="quiz-tab" data-tab="finished" role="tab">Finished</button>
                <button class="quiz-tab active" data-tab="ongoing" role="tab">Ongoing</button>
                <button class="quiz-tab" data-tab="upcoming" role="tab">Upcoming</button>
            </div>

            <!-- Finished -->
            <div class="quiz-tab-content" id="tab-finished">
                <div class="empty-state">No finished contests yet.</div>
            </div>

            <!-- Ongoing -->
            <div class="quiz-tab-content active" id="tab-ongoing">
                <div class="contest-grid">
                    <div class="contest-card">
                        <div class="contest-banner" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                            <img src="{{ asset('assets/images/learning.png') }}" alt="Technology Contest">
                        </div>
                        <div class="contest-body">
                            <h4 class="contest-title">Technology Contest</h4>
                            <p class="contest-desc">A technology contest is a competition where...</p>
                            <div class="contest-stats">
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Entry Fees</span>
                                    <span class="contest-stat-value">5 Coins</span>
                                </div>
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Ends On</span>
                                    <span class="contest-stat-value">05-Sep</span>
                                </div>
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Players</span>
                                    <span class="contest-stat-value">176</span>
                                </div>
                            </div>
                        </div>
                        <div class="contest-footer">
                            <button class="btn-play">Play</button>
                        </div>
                    </div>

                    <div class="contest-card">
                        <div class="contest-banner" style="background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);">
                            <img src="{{ asset('assets/images/learning.png') }}" alt="Trivia Quiz">
                        </div>
                        <div class="contest-body">
                            <h4 class="contest-title">Trivia Quiz</h4>
                            <p class="contest-desc">A trivia quiz contest is a competition where...</p>
                            <div class="contest-stats">
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Entry Fees</span>
                                    <span class="contest-stat-value">5 Coins</span>
                                </div>
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Ends On</span>
                                    <span class="contest-stat-value">21-Nov</span>
                                </div>
                                <div class="contest-stat">
                                    <span class="contest-stat-label">Players</span>
                                    <span class="contest-stat-value">278</span>
                                </div>
                            </div>
                        </div>
                        <div class="contest-footer">
                            <button class="btn-play">Play</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming -->
            <div class="quiz-tab-content" id="tab-upcoming">
                <div class="empty-state">No upcoming contests scheduled.</div>
            </div>
        </main>
    </div>

    <script>
    document.querySelectorAll('.quiz-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.quiz-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.quiz-tab-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById('tab-' + tab.dataset.tab).classList.add('active');
        });
    });
    </script>
</body>
</html>

