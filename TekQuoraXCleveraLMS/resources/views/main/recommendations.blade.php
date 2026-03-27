<!DOCTYPE html>
<html lang="{{ app()->getLocale() === 'th' ? 'th' : 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('lms_ui::course_flow.title_recommendations') }} - TekQuora</title>
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

        /* RECOMMENDATIONS CONTENT */
        .recom-header { margin-bottom: 40px; }
        .recom-header h2 { font-size: 16px; font-weight: 800; color: #1e293b; }
        .recom-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .recom-card { background: #fff; border: 1.5px solid #f1f5f9; border-radius: 24px; overflow: hidden; transition: 0.3s; }
        .recom-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .rc-thumb { width: 100%; aspect-ratio: 1.6; background: #f1f5f9; position: relative; }
        .rc-badge { position: absolute; top: 15px; left: 15px; background: #fff; padding: 4px 12px; border-radius: 12px; font-size: 11px; font-weight: 700; color: #003a70; }
        .rc-content { padding: 20px; }
        .rc-cat { font-size: 11px; font-weight: 700; color: #f97316; text-transform: uppercase; margin-bottom: 10px; display: block; }
        .rc-title { font-size: 14px; font-weight: 800; color: #1e293b; line-height: 1.4; margin-bottom: 12px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .rc-meta { display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #94a3b8; }
        .rc-meta div { display: flex; align-items: center; gap: 5px; }
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
                    <div class="hero-btns">
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
                <a href="{{ route('courses') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_outcomes') }}</a>
                <a href="{{ route('modules') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_modules') }}</a>
                <div class="tab-item active">{{ __('lms_ui::course_flow.tab_recommendations') }}</div>
                <a href="{{ route('testimonials') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_testimonials') }}</a>
                <a href="{{ route('reviews') }}" class="tab-item">{{ __('lms_ui::course_flow.tab_reviews') }}</a>
            </div>

            <div class="recom-header">
                <!-- Course 1 -->
                <div class="c-card">
                    <div class="c-img-wrap">
                        <span class="badge-free">Free</span>
                        <img src="{{ asset('assets/images/9. Animal care.jpg') }}">
                    </div>
                    <div class="c-body">
                        <h3>Veterinary Nursing Assistant Course</h3>
                        <p>Learn essential skills for pet care and management in this comprehensive course.</p>
                        <div class="c-footer">
                            <div class="cf-left">
                                <div class="cf-avatar"></div>
                                <div class="cf-meta">
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg> 4.2k</span>
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> 250</span>
                                </div>
                            </div>
                            <svg class="heart-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="c-card">
                    <div class="c-img-wrap">
                        <span class="badge-free">Free</span>
                        <img src="{{ asset('assets/images/10. Create a startup.jpg') }}">
                    </div>
                    <div class="c-body">
                        <h3>Building a Sustainable Startup: Strategies for Success</h3>
                        <p>Master the strategies needed to build and scale your successful startup business.</p>
                        <div class="c-footer">
                            <div class="cf-left">
                                <div class="cf-avatar"></div>
                                <div class="cf-meta">
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg> 3.8k</span>
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> 180</span>
                                </div>
                            </div>
                            <svg class="heart-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="c-card">
                    <div class="c-img-wrap">
                        <span class="badge-free">Free</span>
                        <img src="{{ asset('assets/images/1. Identity.png') }}">
                    </div>
                    <div class="c-body">
                        <h3>Rajamangala Identity Course</h3>
                        <p>Explore the cultural identity and values of Rajamangala University.</p>
                        <div class="c-footer">
                            <div class="cf-left">
                                <div class="cf-avatar"></div>
                                <div class="cf-meta">
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg> 5.1k</span>
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> 420</span>
                                </div>
                            </div>
                            <svg class="heart-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="c-card">
                    <div class="c-img-wrap">
                        <span class="badge-free">Free</span>
                        <img src="{{ asset('assets/images/2. Relationship building digital business base.png') }}">
                    </div>
                    <div class="c-body">
                        <h3>Building Relationships to Create a Digital Business Foundation</h3>
                        <p>Learn how to forge strong professional relationships in the digital business era.</p>
                        <div class="c-footer">
                            <div class="cf-left">
                                <div class="cf-avatar"></div>
                                <div class="cf-meta">
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg> 2.9k</span>
                                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> 150</span>
                                </div>
                            </div>
                            <svg class="heart-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-inner">
                <div class="f-brand">
                    <div class="f-logo-circle"><img src="{{ asset('assets/images/icons/logo.svg') }}"></div>
                    <p>{{ __('lms_ui::home.footer_tagline') }}</p>
                </div>
                <div class="f-col">
                    <ul>
                        <li><a href="#">{{ __('lms_ui::home.footer_teach') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_about') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_contact') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_help') }}</a></li>
                    </ul>
                </div>
                <div class="f-col">
                    <ul>
                        <li><a href="#">{{ __('lms_ui::home.footer_terms') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_privacy') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_cookies') }}</a></li>
                        <li><a href="#">{{ __('lms_ui::home.footer_career') }}</a></li>
                    </ul>
                </div>
                <div class="f-right-col">
                    <form method="POST" id="recom-footer-lang" action="{{ route('locale.set', ['locale' => app()->getLocale()]) }}" style="display:inline;">
                        @csrf
                        <select class="lang-picker" onchange="document.getElementById('recom-footer-lang').action='{{ url('/set-language') }}/'+this.value; document.getElementById('recom-footer-lang').submit();">
                            <option value="en" @selected(app()->getLocale() === 'en')>{{ __('lms_ui::home.lang_english') }}</option>
                            <option value="th" @selected(app()->getLocale() === 'th')>{{ __('lms_ui::home.lang_thai') }}</option>
                        </select>
                    </form>
                    <div class="social-row">
                        <div class="s-link"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"></div>
                        <div class="s-link"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg"></div>
                        <div class="s-link"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Twitter_Logo.png"></div>
                    </div>
                    <div class="app-badges">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

