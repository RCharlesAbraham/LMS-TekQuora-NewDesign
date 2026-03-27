<!DOCTYPE html>
<html lang="{{ app()->getLocale() === 'th' ? 'th' : 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('lms_ui::course_flow.title_detail') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}?v={{ time() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <style>
        :root {
            --primary: #003a70;
            --primary-dark: #002b55;
            --orange: #f97316;
            --bg: #eff3f7;
            --text-dark: #1e293b;
            --text-muted: #94a3b8;
            --white: #ffffff;
            --tab-border: #e2e8f0;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: var(--bg); color: var(--text-dark); overflow-x: hidden; }

        /* â€ HEADER â€ */
        header { 
            background: transparent; padding: 25px 30px 10px; display: flex; justify-content: center; 
            position: relative; z-index: 1000;
        }
        .header-pill {
            width: 100%; max-width: 1600px; display: flex; align-items: center; justify-content: space-between;
            background: #fff; padding: 12px 30px; border-radius: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }
        .h-left { display: flex; align-items: center; gap: 25px; }
        .logo img { height: 42px; display: block; }
        .cat-dropdown { 
            display: flex; align-items: center; gap: 10px; background: #f1f5f9; padding: 12px 22px; 
            border-radius: 30px; font-size: 14px; font-weight: 500; color: #64748b; border: 1.5px solid #e2e8f0; cursor: pointer; text-decoration: none;
        }
        .search-wrap { position: relative; width: 320px; }
        .search-wrap input { 
            width: 100%; height: 48px; background: #f1f5f9; border: none; border-radius: 30px; 
            padding: 0 15px 0 45px; font-size: 14px; outline: none; transition: 0.2s;
        }
        .search-wrap svg { position: absolute; left: 18px; top: 16px; color: #94a3b8; }
        .search-wrap input:focus { background: #fff; box-shadow: 0 0 0 2px #e2e8f0; }

        .h-right { display: flex; align-items: center; gap: 20px; }
        .h-icon { color: #64748b; display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; position: relative; text-decoration: none; }
        .notif-badge { 
            position: absolute; top: 4px; right: 4px; background: var(--orange); color: #fff; 
            font-size: 9px; font-weight: 800; width: 15px; height: 15px; border-radius: 50%; 
            display: flex; align-items: center; justify-content: center; border: 2px solid #fff; 
        }
        .profile-btn { 
            display: flex; align-items: center; gap: 12px; padding: 6px 18px 6px 6px; 
            border-radius: 40px; background: #f8fafc; border: 1.5px solid #e2e8f0; text-decoration: none; color: inherit; font-weight: 700; font-size: 14px;
        }
        .avatar-circle { width: 36px; height: 36px; border-radius: 50%; background-image: url('{{ asset("images/logo.png") }}'); background-size: contain; background-repeat: no-repeat; background-position: center; background-color: #f1f5f9; border: 1px solid #e2e8f0; }

        /* â€ LAYOUT â€ */
        .wrapper { display: flex; max-width: 1600px; margin: 15px auto 40px; padding: 0 30px; gap: 30px; }

        /* â€ SIDEBAR â€ */
        .sidebar { 
            width: 200px; padding: 20px 0; height: fit-content; flex-shrink: 0;
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

        /* LEARN LIST */
        .learn-list { list-style: none; }
        .learn-list li { 
            position: relative; padding-left: 20px; margin-bottom: 12px; font-size: 14px; color: #475569; font-weight: 500; line-height: 1.6;
        }
        .learn-list li::before { content: '\2022'; position: absolute; left: 0; color: #000; font-weight: 900; }

        /* PILL TAGS */
        .pill-group { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px; }
        .pill-tag { 
            background: #f1f5f9; padding: 8px 20px; border-radius: 30px; 
            font-size: 13px; font-weight: 600; color: #475569; border: 1.5px solid #e2e8f0;
        }
        .pill-tag.blue { color: #2563eb; }
        .show-all-link { color: #2563eb; font-weight: 800; font-size: 13px; margin-left: 10px; cursor: pointer; text-decoration: none; }

        /* RIGHT SIDEBAR */
        .sidebar-right { display: flex; flex-direction: column; gap: 40px; }
        .about-course h3 { font-size: 16px; font-weight: 900; color: #0f172a; margin-bottom: 8px; }
        .course-id { font-size: 12px; color: #94a3b8; font-family: monospace; }
        
        .free-banner { 
            background: #f1f7fe; padding: 25px; border-radius: 20px; margin-top: 20px;
            display: flex; justify-content: space-between; align-items: center; border: 1px solid #e2e8f0;
        }
        .free-text h4 { font-size: 14px; font-weight: 900; color: #0f172a; margin-bottom: 5px; }
        .free-text p { font-size: 12px; color: #64748b; font-weight: 500; }
        .btn-free { background: #003a70; color: #fff; padding: 10px 25px; border-radius: 10px; font-size: 13px; font-weight: 800; text-decoration: none; }

        /* FEATURE ICONS GRID */
        .feature-v-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px; }
        .fv-item { background: #f8fafc; padding: 25px 20px; border-radius: 20px; display: flex; flex-direction: column; gap: 12px; }
        .fv-item img { width: 32px; height: 32px; }
        .fv-item .lab { font-size: 14px; font-weight: 800; color: #0f172a; }
        .fv-item .val { font-size: 12px; color: #94a3b8; font-weight: 600; }

    </style>
</head>
<body>

    <!--  HEADER  -->
    @include('partials.header')

    <div class="shared-shell">
        <!--  SIDEBAR  -->
        @include('partials.sidebar', ['activePage' => 'courses'])

        <!--  MAIN CONTENT  -->
        <main class="content">
            <!-- HERO -->
            <div class="hero">
                <div class="hero-left">
                    <div class="teacher-meta">
                        <div class="t-profile">
                            <div class="avatar-circle" style="width:44px; height:44px;"></div>
                            <div class="t-labels">
                                <p>{{ __('lms_ui::course_flow.created_by') }} <span>{{ __('lms_ui::course_flow.teacher') }}</span></p>
                                <div class="t-stats-row"><span>{{ __('lms_ui::course_flow.ratings_zero') }}</span> <span>{{ __('lms_ui::course_flow.students_zero') }}</span></div>
                            </div>
                        </div>
                        <div class="t-actions-wrap">
                            <a href="#" class="btn-pill-small">{{ __('lms_ui::course_flow.save') }}</a>
                            <a href="#" class="btn-pill-small">{{ __('lms_ui::course_flow.share') }}</a>
                        </div>
                    </div>

                    <div class="title-row">
                        <h1>{{ __('lms_ui::course_flow.course_title_vet') }}</h1>
                        <span class="price-text">{{ __('lms_ui::course_flow.free') }}</span>
                    </div>
                    <div class="updated-date">{{ __('lms_ui::course_flow.updated_date') }}</div>
                    <p class="course-summary">{{ __('lms_ui::course_detail.summary_short') }}</p>
                    <div class="dates-flex" style="display: flex; gap: 30px; font-size: 13px; color: #64748b; margin-bottom: 35px;">
                        <p>{{ __('lms_ui::course_flow.course_start') }} <span style="color: #2563eb; font-weight: 800;">{{ __('lms_ui::course_flow.date_march_26') }}</span></p>
                        <p>{{ __('lms_ui::course_flow.course_end') }} <span style="color: #2563eb; font-weight: 800;">{{ __('lms_ui::course_flow.date_june_26') }}</span></p>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('shopping.cart') }}" class="btn-cart">{{ __('lms_ui::course_flow.add_to_cart') }}</a>
                    </div>
                </div>

                <div class="hero-right">
                    <div class="video-box">
                        <div class="play-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABS -->
            <div class="tab-strip">
                <div class="tab-item active">{{ __('lms_ui::course_flow.tab_about') }}</div>
                <a href="{{ route('courses') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_outcomes') }}</a>
                <a href="{{ route('modules') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_modules') }}</a>
                <a href="{{ route('recommendations') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_recommendations') }}</a>
                <a href="{{ route('testimonials') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_testimonials') }}</a>
                <a href="{{ route('reviews') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_reviews') }}</a>
            </div>

            <!-- SECTION CONTAINER -->
            <div class="section-container">
                <div class="content-left">
                    <div class="content-section">
                        
                        <p style="color: #475569; line-height: 1.8; font-size: 15px;">
                            {{ __('lms_ui::course_detail.about_long') }}
                        </p>
                    </div>
                    <div class="content-section">
                        <h2>{{ __('lms_ui::course_detail.skills_heading') }}</h2>
                        <ul class="learn-list">
                            @foreach(__('lms_ui::course_detail.skills') as $skill)
                            <li>{{ $skill }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="sidebar-right">
                    <div class="about-course">
                        <h3>{{ __('lms_ui::course_detail.about_course') }}</h3>
                        <span class="course-code">34765879709809</span>
                        
                        <div class="free-banner">
                            <div class="free-text">
                                <h4>{{ __('lms_ui::course_detail.free_banner_title') }}</h4>
                                <p>{{ __('lms_ui::course_detail.free_banner_desc') }}</p>
                            </div>
                            <a href="#" class="btn-free">{{ __('lms_ui::course_flow.free') }}</a>
                        </div>

                        <div class="feature-v-grid">
                            <div class="fv-item">
                                <img src="{{ asset('assets/images/icons/duration.png') }}" alt="">
                                <span class="lab">{{ __('lms_ui::course_detail.duration') }}</span>
                                <span class="val">{{ __('lms_ui::course_detail.duration_val') }}</span>
                            </div>
                            <div class="fv-item">
                                <img src="{{ asset('assets/images/icons/weelkly.png') }}" alt="">
                                <span class="lab">{{ __('lms_ui::course_detail.weekly_study') }}</span>
                                <span class="val">{{ __('lms_ui::course_detail.weekly_val') }}</span>
                            </div>
                            <div class="fv-item">
                                <img src="{{ asset('assets/images/icons/100%.png') }}" alt="">
                                <span class="lab">{{ __('lms_ui::course_detail.online_100') }}</span>
                                <span class="val">{{ __('lms_ui::course_detail.online_val') }}</span>
                            </div>
                            <div class="fv-item">
                                <img src="{{ asset('assets/images/icons/quiz.png') }}" alt="">
                                <span class="lab">{{ __('lms_ui::course_detail.quiz') }}</span>
                                <span class="val">{{ __('lms_ui::course_detail.quiz_val') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>

