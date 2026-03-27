<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale() === 'th' ? 'th' : 'en'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__('lms_ui::home.page_title')); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo e(asset('lms-ui/images/logo.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lms-ui/css/layout.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lms-ui/css/style.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lms-ui/css/home.css')); ?>?v=<?php echo e(time()); ?>">
    <style>
        .vertical-course-card, .free-session-card, .category-card-custom {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease !important;
        }
        .vertical-course-card:hover, .free-session-card:hover, .category-card-custom:hover {
            transform: translateY(-4px) scale(1.01) !important;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08) !important;
            z-index: 10;
        }
    </style>
</head>
<body class="home-page">
    <!-- Header / Navigation -->
    <?php echo $__env->make('lms-ui.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Mobile Sidebar Nav -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
    <div class="mobile-side-nav" id="mobileSideNav">
        <div class="mobile-nav-header">
            <img src="<?php echo e(asset('lms-ui/images/logo.png')); ?>" alt="Logo" class="logo">
            <button class="close-mobile-nav" id="closeMobileNav">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <div class="mobile-nav-body">
            <div class="mobile-search-box">
                <form action="<?php echo e(route('search')); ?>" method="GET">
                    <input type="text" placeholder="<?php echo e(__('lms_ui::home.mobile_search_placeholder')); ?>" name="q">
                </form>
            </div>
            <div class="home-lang-switch" style="padding: 0 20px 16px; justify-content: center;">
                <form method="POST" action="<?php echo e(route('locale.set', ['locale' => 'en'])); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="home-lang-btn <?php echo e(app()->getLocale() === 'en' ? 'active' : ''); ?>"><?php echo e(__('lms_ui::home.lang_english')); ?></button>
                </form>
                <form method="POST" action="<?php echo e(route('locale.set', ['locale' => 'th'])); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="home-lang-btn <?php echo e(app()->getLocale() === 'th' ? 'active' : ''); ?>"><?php echo e(__('lms_ui::home.lang_thai')); ?></button>
                </form>
            </div>
            <ul class="mobile-nav-links">
                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('lms_ui::home.mobile_home')); ?></a></li>
                <li><a href="<?php echo e(route('category')); ?>"><?php echo e(__('lms_ui::home.mobile_courses')); ?></a></li>
                <li><a href="<?php echo e(route('courses')); ?>"><?php echo e(__('lms_ui::home.mobile_all_courses')); ?></a></li>
                <li><a href="<?php echo e(route('free.courses')); ?>"><?php echo e(__('lms_ui::home.mobile_free_courses')); ?></a></li>
                <li><a href="<?php echo e(route('dashboard.1')); ?>"><?php echo e(__('lms_ui::home.mobile_dashboard')); ?></a></li>
            </ul>
            <div class="mobile-nav-footer">
                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn-step-1"><?php echo e(__('lms_ui::home.login')); ?></a>
                    <a href="<?php echo e(route('register')); ?>" class="btn-step-1" style="background: transparent; color: #0f3c6e; border: 1px solid #0f3c6e;"><?php echo e(__('lms_ui::home.signup')); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('account.new')); ?>" class="mobile-user-profile">
                        <div class="avatar-circle"></div>
                        <span><?php echo e(__('lms_ui::home.student_profile')); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- HERO SECTION - STEP 1: CLEARING AND RESTRUCTURING -->
    <section class="hero-section hero-step-1-wrapper">
        <div class="hero-step-1-container">
            
            <!-- LEFT SIDE: Image + Gradients -->
            <!-- LEFT SIDE: Image + Gradients -->
            <div class="hero-left-column">
                <img src="<?php echo e(asset('lms-ui/images/math_bg.png')); ?>" alt="Hero Image" class="hero-img-math">
            </div>
            
            <!-- RIGHT SIDE: Text Content -->
            <div class="hero-right-column">
                <h1 class="hero-title-main"><?php echo e(__('lms_ui::home.hero_title')); ?></h1>
                <p class="hero-desc-main"><?php echo e(__('lms_ui::home.hero_desc')); ?></p>
                <div class="hero-action-btns">
                    <a href="<?php echo e(route('login')); ?>" class="btn-step-1"><?php echo e(__('lms_ui::home.login')); ?></a>
                    <a href="<?php echo e(route('register')); ?>" class="btn-step-1"><?php echo e(__('lms_ui::home.signup')); ?></a>
                </div>
            </div>

            <!-- Removed marked decoration -->

        </div>
    </section>

    <!-- FEATURES ROW -->
    <section class="features-section">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon" style="background: #ff8000;">
                    <img src="<?php echo e(asset('lms-ui/images/icons/badge 1.svg')); ?>" alt="<?php echo e(__('lms_ui::home.feature_1_alt')); ?>">
                </div>
                <div>
                    <h4><?php echo e(__('lms_ui::home.feature_1_title')); ?></h4>
                    <p><?php echo e(__('lms_ui::home.feature_1_desc')); ?></p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background: #a2d2ff;">
                    <img src="<?php echo e(asset('lms-ui/images/icons/video streaming 1.svg')); ?>" alt="<?php echo e(__('lms_ui::home.feature_2_alt')); ?>">
                </div>
                <div>
                    <h4><?php echo e(__('lms_ui::home.feature_2_title')); ?></h4>
                    <p><?php echo e(__('lms_ui::home.feature_2_desc')); ?></p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background: #40ffff;">
                    <img src="<?php echo e(asset('lms-ui/images/icons/video call 1.svg')); ?>" alt="<?php echo e(__('lms_ui::home.feature_3_alt')); ?>">
                </div>
                <div>
                    <h4><?php echo e(__('lms_ui::home.feature_3_title')); ?></h4>
                    <p><?php echo e(__('lms_ui::home.feature_3_desc')); ?></p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background: #20a0a0;">
                    <img src="<?php echo e(asset('lms-ui/images/icons/study 1.svg')); ?>" alt="<?php echo e(__('lms_ui::home.feature_4_alt')); ?>">
                </div>
                <div>
                    <h4><?php echo e(__('lms_ui::home.feature_4_title')); ?></h4>
                    <p><?php echo e(__('lms_ui::home.feature_4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDE RANGE SECTION -->
    <section class="wide-range-section">
        <div class="wide-range-inner">
            <!-- Left Side: Heading and Staggered Images -->
            <div class="wide-range-left">
                <h2 class="section-heading"><?php echo e(__('lms_ui::home.wide_range_l1')); ?><br><?php echo e(__('lms_ui::home.wide_range_l2')); ?><br><?php echo e(__('lms_ui::home.wide_range_l3')); ?></h2>
                <div class="wide-range-images-custom">
                    <!-- Girl Image -->
                    <div class="wr-img-block wr-img-1">
                        <img src="<?php echo e(asset('lms-ui/images/learning.png')); ?>" alt="<?php echo e(__('lms_ui::home.alt_learning')); ?>">
                    </div>
                    <!-- Boy Image (Staggered) -->
                    <div class="wr-img-block wr-img-2">
                        <img src="<?php echo e(asset('lms-ui/images/testing1.png')); ?>" alt="<?php echo e(__('lms_ui::home.alt_deep_focus')); ?>">
                    </div>
                </div>
            </div>

            <!-- Right Side: Category Cards and CTA -->
            <div class="wide-range-right">
                <div class="category-cards-grid">
                    <div class="category-card-item">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('lms-ui/images/icons/007-vectors 1.svg')); ?>" alt="<?php echo e(__('lms_ui::home.cat_1_alt')); ?>">
                        </div>
                        <div class="cat-text">
                            <h5><?php echo e(__('lms_ui::home.cat_1_h5')); ?></h5>
                            <p><?php echo e(__('lms_ui::home.cat_1_p')); ?></p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('lms-ui/images/icons/Group.svg')); ?>" alt="<?php echo e(__('lms_ui::home.cat_2_alt')); ?>">
                        </div>
                        <div class="cat-text">
                            <h5><?php echo e(__('lms_ui::home.cat_2_h5')); ?></h5>
                            <p><?php echo e(__('lms_ui::home.cat_2_p')); ?></p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('lms-ui/images/icons/science 1 (1).svg')); ?>" alt="<?php echo e(__('lms_ui::home.cat_3_alt')); ?>">
                        </div>
                        <div class="cat-text">
                            <h5><?php echo e(__('lms_ui::home.cat_3_h5')); ?></h5>
                            <p><?php echo e(__('lms_ui::home.cat_3_p')); ?></p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon">
                            <img src="<?php echo e(asset('lms-ui/images/icons/Group (1).svg')); ?>" alt="<?php echo e(__('lms_ui::home.cat_4_alt')); ?>">
                        </div>
                        <div class="cat-text">
                            <h5><?php echo e(__('lms_ui::home.cat_4_h5')); ?></h5>
                            <p><?php echo e(__('lms_ui::home.cat_4_p')); ?></p>
                        </div>
                    </div>
                </div>

                <ul class="wr-points">
                    <li><?php echo e(__('lms_ui::home.wr_point_1')); ?></li>
                    <li><?php echo e(__('lms_ui::home.wr_point_2')); ?></li>
                </ul>

                <a href="<?php echo e(route('register')); ?>" class="btn-get-started"><?php echo e(__('lms_ui::home.get_started')); ?></a>
            </div>
        </div>
    </section>

    <!-- CAREER PERSPECTIVE SECTION -->
    <section class="career-section">
        <div class="career-inner">
            <h2 class="section-heading-center"><?php echo e(__('lms_ui::home.career_heading')); ?></h2>
            <p class="section-sub-center"><?php echo e(__('lms_ui::home.career_sub')); ?></p>
            
            <div class="live-classes-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
                <?php
                $live_course_imgs = ['9. Animal care.jpg', '10. Create a startup.jpg', '1. Identity.png'];
                $live_course_titles = __('lms_ui::home.live_course_titles');
                ?>
                <?php $__currentLoopData = $live_course_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $course = ['img' => $img, 'title' => $live_course_titles[$idx] ?? '']; ?>
                <div class="free-session-card">
                    <div class="free-session-thumb">
                        <img src="<?php echo e(asset('lms-ui/images/' . $course['img'])); ?>" alt="<?php echo e(__('lms_ui::home.alt_live_class')); ?>">
                    </div>
                    <div class="free-session-info">
                        <div class="free-card-meta">
                            <span class="teacher-tag"><?php echo e(__('lms_ui::home.teacher')); ?></span>
                            <div class="live-badge-target">
                                <div class="target-icon"></div>
                                <?php echo e(__('lms_ui::home.live')); ?>

                            </div>
                        </div>
                        <h4><?php echo e(\Illuminate\Support\Str::limit($course['title'], 35, '...')); ?></h4>
                        <p class="topic-text"><?php echo e(__('lms_ui::home.topic_description')); ?></p>
                        <div class="free-card-footer">
                            <div class="footer-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <?php echo e(__('lms_ui::home.live_date')); ?>

                            </div>
                            <div class="footer-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <?php echo e(__('lms_ui::home.live_time')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- FREE SESSION COURSES -->

    <section class="course-section">
        <div class="course-section-header">
            <div>
                <h2 class="section-heading"><?php echo e(__('lms_ui::home.free_session_l1')); ?><br><?php echo e(__('lms_ui::home.free_session_l2')); ?></h2>
                <p class="section-sub"><?php echo e(__('lms_ui::home.free_session_sub')); ?></p>
            </div>
            <div style="display: flex; align-items: center; gap: 20px;">
                <a href="<?php echo e(route('free.courses')); ?>" style="font-size: 14px; font-weight: 700; color: #003a70; text-decoration: none;"><?php echo e(__('lms_ui::home.view_all')); ?></a>
                <div class="carousel-arrows" style="display: flex; gap: 12px;">
                    <button class="arrow-btn" style="width: 32px; height: 32px; border-radius: 50%; border: 1.5px solid #dbeafe; background: #eff6ff; color: #3b82f6; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>
                    <button class="arrow-btn" style="width: 32px; height: 32px; border-radius: 50%; border: 1.5px solid #dbeafe; background: #eff6ff; color: #3b82f6; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="course-cards-row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px">
            <?php
            $free_course_imgs = ['9. Animal care.jpg', '10. Create a startup.jpg', '1. Identity.png', '2. Relationship building digital business base.png'];
            $free_course_titles = __('lms_ui::home.free_course_titles');
            ?>
            <?php $__currentLoopData = $free_course_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $course = ['img' => $img, 'title' => $free_course_titles[$index] ?? '']; ?>
            <?php if($index == 0): ?>
            <a href="<?php echo e(route('courses')); ?>" class="vertical-course-card" style="text-decoration:none; color:inherit; display:block;">
            <?php else: ?>
            <div class="vertical-course-card" style="color:inherit;">
            <?php endif; ?>
                <div class="card-image-wrap">
                    <img src="<?php echo e(asset('lms-ui/images/' . $course['img'])); ?>" alt="<?php echo e(__('lms_ui::home.alt_course')); ?>">
                    <span class="badge-orange-free"><?php echo e(__('lms_ui::home.badge_free')); ?></span>
                </div>
                <div class="vertical-card-body">
                    <h4 class="vertical-card-title"><?php echo e(\Illuminate\Support\Str::limit($course['title'], 35, '...')); ?></h4>
                    <p class="vertical-card-desc"><?php echo __('lms_ui::home.vertical_card_desc'); ?></p>
                    <div class="vertical-card-footer">
                        <div class="footer-stats-wrap">
                            <img src="<?php echo e(asset('lms-ui/images/logo.png')); ?>" class="instructor-avatar-circle" style="object-fit: contain; background: #f1f5f9; padding: 3px; border: 1px solid #e2e8f0;">
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                4k
                            </div>
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                200
                            </div>
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                4.5
                            </div>
                        </div>
                        <div class="heart-action-wrap" style="position: relative;">
                            <?php if($index == 2): ?>
                            <div class="tooltip-added"><?php echo e(__('lms_ui::home.wishlist_added')); ?></div>
                            <svg class="heart-action-btn active" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            <?php else: ?>
                            <svg class="heart-action-btn" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php if($index == 0): ?>
            </a>
            <?php else: ?>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>

    

    <!-- POPULAR COURSES -->
    <section class="course-section" style=" border-top: none;">
        <div class="course-section-header">
            <h2 class="section-heading"><?php echo e(__('lms_ui::home.popular_courses')); ?></h2>
            <div class="carousel-arrows" style="display: flex; gap: 12px;">
                <button class="arrow-btn" style="width: 32px; height: 32px; border-radius: 50%; border: 1.5px solid #dbeafe; background: #eff6ff; color: #3b82f6; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
                </button>
                <button class="arrow-btn" style="width: 32px; height: 32px; border-radius: 50%; border: 1.5px solid #dbeafe; background: #eff6ff; color: #3b82f6; display: flex; align-items: center; justify-content: center; cursor: pointer; padding: 0;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </button>
            </div>
        </div>
        <div class="course-cards-row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px">
            <?php
            $popular_imgs = ['3. drinks.jpg', '4. Business.jpg', '5. Customer management and satisfaction.jpg', '6. Camping tourism education and camping business.png'];
            $popular_titles = __('lms_ui::home.popular_course_titles');
            ?>
            <?php $__currentLoopData = $popular_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pidx => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $course = ['img' => $img, 'title' => $popular_titles[$pidx] ?? '']; ?>
            <div class="vertical-course-card" style="color:inherit;">
                <div class="card-image-wrap">
                    <img src="<?php echo e(asset('lms-ui/images/' . $course['img'])); ?>" alt="<?php echo e(__('lms_ui::home.alt_course')); ?>">
                    <span class="badge-orange-free"><?php echo e(__('lms_ui::home.badge_free')); ?></span>
                </div>
                <div class="vertical-card-body">
                    <h4 class="vertical-card-title"><?php echo e(\Illuminate\Support\Str::limit($course['title'], 35, '...')); ?></h4>
                    <p class="vertical-card-desc"><?php echo __('lms_ui::home.vertical_card_desc'); ?></p>
                    <div class="vertical-card-footer">
                        <div class="footer-stats-wrap">
                            <img src="<?php echo e(asset('lms-ui/images/logo.png')); ?>" class="instructor-avatar-circle" style="object-fit: contain; background: #f1f5f9; padding: 3px; border: 1px solid #e2e8f0;">
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                4k
                            </div>
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                200
                            </div>
                            <div class="stat-v-item">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                4.5
                            </div>
                        </div>
                        <svg class="heart-action-btn" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    

    <!-- FOOTER -->
    <footer class="home-footer">
        <div class="home-footer-inner">
            <div class="footer-brand-section">
                <div class="footer-logo-circle">
                    <img src="<?php echo e(asset('lms-ui/images/icons/logo.svg')); ?>" alt="IL2 Logo">
                </div>
                <p><?php echo e(__('lms_ui::home.footer_tagline')); ?></p>
            </div>
            
            <div class="footer-links-column">
                <ul>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_teach')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_about')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_contact')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_help')); ?></a></li>
                </ul>
            </div>

            <div class="footer-links-column">
                <ul>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_terms')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_privacy')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_cookies')); ?></a></li>
                    <li><a href="#"><?php echo e(__('lms_ui::home.footer_career')); ?></a></li>
                </ul>
            </div>

            <div class="footer-right-section">
                <form method="POST" id="home-footer-lang-form" action="<?php echo e(route('locale.set', ['locale' => app()->getLocale()])); ?>" class="footer-lang-form" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <select class="footer-lang-select" onchange="document.getElementById('home-footer-lang-form').action='<?php echo e(url('/set-language')); ?>/'+this.value; document.getElementById('home-footer-lang-form').submit();">
                        <option value="en" <?php if(app()->getLocale() === 'en'): echo 'selected'; endif; ?>><?php echo e(__('lms_ui::home.lang_english')); ?></option>
                        <option value="th" <?php if(app()->getLocale() === 'th'): echo 'selected'; endif; ?>><?php echo e(__('lms_ui::home.lang_thai')); ?></option>
                    </select>
                </form>
                
                <div class="footer-socials">
                    <a href="#" class="social-icon facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="social-icon instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" class="social-icon twitter">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                </div>

                <div class="app-btns">
                    <a href="#" class="app-btn-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                    </a>
                    <a href="#" class="app-btn-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const closeMobileNav = document.getElementById('closeMobileNav');
        const mobileSideNav = document.getElementById('mobileSideNav');
        const mobileNavOverlay = document.getElementById('mobileNavOverlay');

        function toggleMobileNav() {
            mobileSideNav.classList.toggle('active');
            mobileNavOverlay.classList.toggle('active');
            document.body.style.overflow = mobileSideNav.classList.contains('active') ? 'hidden' : '';
        }

        if(mobileMenuToggle) mobileMenuToggle.addEventListener('click', toggleMobileNav);
        if(closeMobileNav) closeMobileNav.addEventListener('click', toggleMobileNav);
        if(mobileNavOverlay) mobileNavOverlay.addEventListener('click', toggleMobileNav);

        // Search dropdown toggle
        const searchInput = document.getElementById('homeSearchInput');
        const searchDropdown = document.getElementById('searchDropdown');
        if(searchInput) {
            searchInput.addEventListener('focus', () => { if(searchDropdown) searchDropdown.style.display = 'block'; });
        }
        document.addEventListener('click', (e) => {
            if (searchInput && !e.target.closest('.search-bar')) {
                if(searchDropdown) searchDropdown.style.display = 'none';
            }
        });
        // Search tabs
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.main-app-header');
            if (header && window.scrollY > 50) {
                header.classList.add('scrolled');
            } else if (header) {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/lms-ui/home.blade.php ENDPATH**/ ?>