<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LmsUi\AccountController;
use App\Http\Controllers\LmsUi\CombinedController;
use App\Http\Controllers\LmsUi\DashboardController;
use App\Http\Controllers\LmsUi\LocaleController;
use App\Http\Middleware\SetLmsUiLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Small helper to disable caching on sensitive pages like login/register.
$noCacheView = function (string $view) {
    return response()
        ->view($view)
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');
};

Route::middleware([SetLmsUiLocale::class])->group(function () use ($noCacheView) {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::get('/home', function () {
        return view('main.home');
    })->name('home');

    Route::post('/set-language/{locale}', [LocaleController::class, 'setLocale'])->name('locale.set');

    Route::get('/login', function () use ($noCacheView) {
        return $noCacheView('main.login');
    })->name('login');

    Route::get('/forgot-password', function () use ($noCacheView) {
        return $noCacheView('main.forgot-password');
    })->name('password.request');

    Route::get('/register', function () use ($noCacheView) {
        return $noCacheView('main.register');
    })->name('register');

    Route::get('/account', function () {
        return view('main.account');
    })->name('account');

    Route::get('/account-new', [AccountController::class, 'index'])->name('account.new');
    Route::post('/account-update', [AccountController::class, 'update'])->name('account.update');
    Route::post('/account-password', [AccountController::class, 'changePassword'])->name('account.password');

    Route::get('/dashboard-1', [DashboardController::class, 'index'])->name('dashboard.1');

    Route::get('/dashboard', function () {
        return redirect()->route('dashboard.1');
    });

    Route::get('/dashboard-2', function () {
        return view('main.dashboard-2');
    })->name('dashboard.2');

    Route::get('/combined', [CombinedController::class, 'index'])->name('combined.index');
    Route::get('/combined/users', [CombinedController::class, 'users'])->name('combined.users');

    Route::get('/quiz', function () {
        return view('main.quiz');
    })->name('quiz');

    Route::get('/wallet-address', function () {
        return view('main.wallet-address');
    })->name('wallet.address');

    Route::get('/favorites', function () {
        return view('main.wishlist');
    })->name('favorites');

    Route::get('/wishlist', function () {
        return view('main.wishlist');
    })->name('wishlist');

    Route::get('/info/{topic}', function (string $topic) {
        $pages = [
            'teach' => ['title' => 'Teach on IL2', 'description' => 'Share your knowledge as an IL2 instructor and create impactful courses.'],
            'about' => ['title' => 'About Us', 'description' => 'Learn how IL2 helps students and professionals grow with practical learning.'],
            'contact' => ['title' => 'Contact Us', 'description' => 'Get in touch with our team for account, course, or technical support.'],
            'support' => ['title' => 'Help and Support', 'description' => 'Find answers to common questions and support resources.'],
            'terms' => ['title' => 'Terms', 'description' => 'Review the terms that govern your use of the IL2 platform.'],
            'privacy' => ['title' => 'Privacy Policy', 'description' => 'Understand how IL2 collects, uses, and protects your data.'],
            'cookies' => ['title' => 'Cookies Policy', 'description' => 'See how cookies are used to improve your IL2 experience.'],
            'careers' => ['title' => 'Career', 'description' => 'Explore opportunities to join and grow with the IL2 team.'],
        ];

        if (! array_key_exists($topic, $pages)) {
            abort(404);
        }

        return view('main.info', [
            'title' => $pages[$topic]['title'],
            'description' => $pages[$topic]['description'],
        ]);
    })->name('info.page');

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');

    Route::get('/calendar', function () {
        return view('main.calendar');
    })->name('calendar');

    Route::get('/learning', function () {
        return view('main.learning');
    })->name('learning');

    Route::get('/learning-p2', function () {
        return view('main.learning-p2');
    })->name('learning.p2');

    Route::get('/payment-method', function () {
        return view('main.payment-method');
    })->name('payment.method');

    Route::get('/shopping-cart', function () {
        return view('main.shopping-cart');
    })->name('shopping.cart');

    Route::get('/transaction', function () {
        return view('main.transaction');
    })->name('transaction');

    Route::get('/certificate', function () {
        return view('main.certificate');
    })->name('certificate');

    Route::get('/reward-points', function () {
        return view('main.reward-points');
    })->name('reward.points');

    Route::get('/devices', function () {
        return view('main.devices');
    })->name('devices');

    Route::get('/refund', function () {
        return view('main.refund');
    })->name('refund');

    Route::get('/courses', function () {
        return view('main.courses');
    })->name('courses');

    Route::get('/search', function () {
        return view('main.search');
    })->name('search');

    Route::get('/free-courses', function () {
        return view('main.free-courses');
    })->name('free.courses');

    Route::get('/course-detail', function () {
        return view('main.course-detail');
    })->name('course.detail');

    Route::get('/change-password', function () {
        return view('main.change-password');
    })->name('password.change');

    Route::get('/reset-password', function () {
        return view('main.reset-password');
    })->name('password.reset');

    Route::get('/verify', function () {
        return view('main.verify');
    })->name('verification.notice');

    Route::get('/category', function () {
        $courses = [
            ['img' => 'learning.png', 'title' => 'Veterinary Nursing Assistant Course'],
            ['img' => 'learning.png', 'title' => 'Digital Marketing Essentials'],
            ['img' => 'learning.png', 'title' => 'Beginner Mathematics Refresher'],
            ['img' => 'learning.png', 'title' => 'Introduction to Programming'],
            ['img' => 'learning.png', 'title' => 'Business Communication Skills'],
            ['img' => 'learning.png', 'title' => 'Creative Design Basics'],
            ['img' => 'learning.png', 'title' => 'Language & Communication'],
            ['img' => 'learning.png', 'title' => 'STEM Exploration Series'],
        ];
        return view('main.category', compact('courses'));
    })->name('category');

    Route::get('/all', function () {
        return redirect()->route('courses');
    })->name('all');

    Route::get('/modules', function () {
        return view('main.modules');
    })->name('modules');

    Route::get('/recommendations', function () {
        return view('main.recommendations');
    })->name('recommendations');

    Route::get('/testimonials', function () {
        return view('main.testimonials');
    })->name('testimonials');

    Route::get('/reviews', function () {
        return view('main.reviews');
    })->name('reviews');

    // POST Routes — Authentication
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::post('/forgot-password', [AuthController::class, 'forgotPasswordPost'])->name('password.email');

    // You can add the full registration handler here later if needed.
});
