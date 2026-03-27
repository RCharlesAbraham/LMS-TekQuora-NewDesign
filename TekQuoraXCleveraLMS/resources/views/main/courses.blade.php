<!DOCTYPE html>
<html lang="{{ app()->getLocale() === 'th' ? 'th' : 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('lms_ui::course_flow.title_outcomes') }} - TekQuora</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <style>
        /* HERO SECTION */
        .course-hero { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; margin-bottom: 40px; }
        .hero-left .teacher-row { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 25px; }
        .t-info { display: flex; align-items: center; gap: 12px; }
        .t-avatar { width: 44px; height: 44px; border-radius: 50%; background: #f1f5f9 url('{{ asset('assets/images/logo.png') }}') no-repeat center; background-size: contain; border: 1.5px solid #e2e8f0; }
        .t-content p { font-size: 11px; color: #94a3b8; margin: 0; }
        .t-content span { color: #2563eb; font-weight: 700; cursor: pointer; }
        .t-meta { display: flex; gap: 15px; margin-top: 4px; font-size: 11px; color: #94a3b8; }
        .hero-left-actions { display: flex; gap: 10px; }
        .btn-outline-sm { padding: 6px 20px; border: 1px solid #e2e8f0; border-radius: 20px; font-size: 11px; font-weight: 700; color: #64748b; text-decoration: none; }
        .title-price-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        .title-price-row h1 { font-size: 32px; font-weight: 800; margin: 0; color: #1e293b; }
        .price-text { font-size: 28px; font-weight: 800; color: #f97316; }
        .update-date { font-size: 11px; color: #94a3b8; margin-bottom: 20px; }
        .course-short-desc { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 25px; }
        .date-info { font-size: 12px; color: #64748b; margin-top: 15px; }
        .date-info span { color: #2563eb; font-weight: 700; margin-right: 15px; }
        .hero-btns { display: flex; gap: 12px; margin-top: 30px; }
        .btn-dark-blue { padding: 12px 30px; border-radius: 10px; font-size: 14px; font-weight: 700; color: #fff; background: #003a70; text-decoration: none; border: none; cursor: pointer; }
        .hero-right .video-preview { border: 1px solid #94a3b8; width: 100%; aspect-ratio: 1.6; background: url('{{ asset('assets/images/9. Animal care.jpg') }}') center/cover no-repeat; border-radius: 20px; position: relative; display: flex; align-items: center; justify-content: center; }
        .play-btn { background: #e11d1d; border-radius: 50px; width: 72px; height: 36px; display: flex; align-items: center; justify-content: center; gap: 6px; cursor: pointer; box-shadow: 0 4px 15px rgba(225,29,29,0.4); transition: transform 0.2s ease; }
        .play-btn:hover { transform: scale(1.08); }

        /* --- TAB NAVIGATION --- */
        .tab-strip { display: flex; justify-content: center; gap: 60px; border-bottom: 1px solid #f1f5f9; margin-bottom: 50px; }
        .tab-item { padding: 15px 0; font-size: 13px; font-weight: 500; color: #94a3b8; border-bottom: 3px solid transparent; cursor: pointer; transition: 0.2s; text-decoration: none; }
        .tab-item:hover { color: #1e293b; }
        .tab-item.active { color: #1e293b; border-bottom-color: var(--primary); font-weight: 600; background: #fff; border-radius: 10px 10px 0 0; box-shadow: 0 -4px 10px rgba(0,0,0,0.02); padding-left: 30px; padding-right: 30px; position: relative; bottom: -1px; }

        /* OUTCOMES CONTENT */
        .outcomes-section h2 { font-size: 16px; font-weight: 800; color: #1e293b; margin-bottom: 25px; }
        .outcomes-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .outcome-item { display: flex; align-items: flex-start; gap: 12px; font-size: 14px; color: #475569; line-height: 1.5; }
        .outcome-item svg { flex-shrink: 0; margin-top: 2px; }

        @media (max-width: 1024px) {
            .course-hero { grid-template-columns: 1fr; gap: 30px; }
            .hero-right { order: -1; } /* Video first on mobile */
        }

        @media (max-width: 768px) {
            .main-card { padding: 20px 15px; border-radius: 20px; width: 100%; box-sizing: border-box; }
            .title-price-row { flex-direction: column; align-items: flex-start; gap: 10px; }
            .title-price-row h1 { font-size: 24px; }
            .price-text { font-size: 22px; }
            
            .teacher-row { flex-direction: column; gap: 15px; }
            .hero-left-actions { width: 100%; justify-content: space-between; }
            
            .tab-strip { 
                gap: 20px; 
                overflow-x: auto; 
                justify-content: flex-start; 
                padding-bottom: 5px;
                margin-bottom: 30px;
            }
            .tab-item { white-space: nowrap; font-size: 12px; }
            .hero-btns .btn-dark-blue { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="shared-shell">
        @include('partials.sidebar', ['activePage' => 'courses'])

        <main class="shared-content main-card" style="background: #fff; border-radius: 30px; padding: 40px; box-shadow: 0 4px 25px rgba(0,0,0,0.02);">
            <div class="course-hero">
                <div class="hero-left">
                    <div class="teacher-row">
                        <div class="t-info">
                            <div class="t-avatar"></div>
                            <div class="t-content">
                                <p>Created by : <span>Teacher</span></p>
                                <div class="t-meta" style="display: flex; gap: 15px; align-items: center; margin-top: 4px;">
                                    <span style="display: inline-flex; align-items: center; font-size: 11px; color: #94a3b8;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#f59e0b" style="margin-right: 4px;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg> 0 Ratings
                                    </span>
                                    <span style="display: inline-flex; align-items: center; font-size: 11px; color: #94a3b8;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" style="margin-right: 4px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> 0 Students
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="hero-left-actions">
                            <a href="#" class="btn-outline-sm">{{ __('lms_ui::course_flow.save') }}</a>
                            <a href="#" class="btn-outline-sm">{{ __('lms_ui::course_flow.share') }}</a>
                        </div>
                    </div>
                    <div class="title-price-row">
                        <h1>Veterinary Nursing Assistant Course</h1>
                        <span class="price-text">Free</span>
                    </div>
                    <div class="update-date" style="display: flex; align-items: center; gap: 8px; font-size: 11px; color: #94a3b8; margin-bottom: 20px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        Updated date : 26 march 2026
                    </div>
                    <p class="course-short-desc">To ensure the content is up-to-date with technology or aligns with learning outcomes.</p>
                    <div class="date-info" style="font-size: 13px; color: #64748b; margin-top: 15px;">
                        {{ __('lms_ui::course_flow.course_start') }} <span style="color: #2563eb; font-weight: 700; margin-right: 25px;">{{ __('lms_ui::course_flow.date_march_26') }}</span>
                        {{ __('lms_ui::course_flow.course_end') }} <span style="color: #2563eb; font-weight: 700;">{{ __('lms_ui::course_flow.date_june_26') }}</span>
                    </div>
                    <div class="hero-btns" style="margin-top:25px;">
                        <button class="btn-dark-blue">{{ __('lms_ui::course_flow.add_to_cart') }}</button>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="video-preview">
                        <div class="play-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-strip">
                <a href="{{ route('course.detail') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_about') }}</a>
                <div class="tab-item active">{{ __('lms_ui::course_flow.tab_outcomes') }}</div>
                <a href="{{ route('modules') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_modules') }}</a>
                <a href="{{ route('recommendations') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_recommendations') }}</a>
                <a href="{{ route('testimonials') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_testimonials') }}</a>
                <a href="{{ route('reviews') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_reviews') }}</a>
            </div>

            <div class="outcomes-section">
                <h2>{{ __('lms_ui::outcomes_page.intro_title') }}</h2>
                <div class="outcomes-grid">
                    @foreach(__('lms_ui::outcomes_page.outcomes') as $outcome)
                    <div class="outcome-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        {{ $outcome }}
                    </div>
                    @endforeach
                </div>
            </div>
        </main>

        @include('partials.footer')
    </div>
</body>
</html>
