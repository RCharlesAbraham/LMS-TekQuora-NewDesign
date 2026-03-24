<?php

use App\Http\Controllers\LmsUi\AccountController;
use App\Http\Controllers\LmsUi\DashboardController;
use App\Http\Controllers\LmsUi\LocaleController;
use App\Http\Middleware\SetLmsUiLocale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::middleware(['web', SetLmsUiLocale::class])
    ->prefix('lms')
    ->name('lms.')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('home');
        })->name('home');

        Route::post('/set-language/{locale}', [LocaleController::class, 'setLocale'])->name('locale.set');

        Route::get('/home', function () {
            return redirect()->route('home');
        })->name('home.redirect');

        Route::get('/login', function () {
            return view('lms-ui.login');
        })->name('login');

        Route::get('/forgot-password', function () {
            return view('lms-ui.forgot-password');
        })->name('password.request');

        Route::get('/register', function () {
            return view('lms-ui.register');
        })->name('register');

        Route::get('/account', function () {
            return view('lms-ui.account');
        })->name('account');

        Route::get('/account-new', [AccountController::class, 'index'])->name('account.new');
        Route::post('/account-update', [AccountController::class, 'update'])->name('account.update');
        Route::post('/account-password', [AccountController::class, 'changePassword'])->name('account.password');

        Route::get('/dashboard-1', [DashboardController::class, 'index'])->name('dashboard.1');

        Route::get('/dashboard-2', function () {
            return view('lms-ui.dashboard-2');
        })->name('dashboard.2');

        Route::get('/calendar', function () {
            return view('lms-ui.calendar');
        })->name('calendar');

        Route::get('/learning', function () {
            return view('lms-ui.learning');
        })->name('learning');

        Route::get('/learning-p2', function () {
            return view('lms-ui.learning-p2');
        })->name('learning.p2');

        Route::get('/payment-method', function () {
            return view('lms-ui.payment-method');
        })->name('payment.method');

        Route::get('/shopping-cart', function () {
            return view('lms-ui.shopping-cart');
        })->name('shopping.cart');

        Route::get('/transaction', function () {
            return view('lms-ui.transaction');
        })->name('transaction');

        Route::get('/refund', function () {
            return view('lms-ui.refund');
        })->name('refund');

        Route::get('/courses', function () {
            return view('lms-ui.courses');
        })->name('courses');

        Route::get('/quiz', function () {
            return view('lms-ui.quiz');
        })->name('quiz');

        Route::get('/wallet-address', function () {
            return view('lms-ui.wallet-address');
        })->name('wallet.address');

        Route::get('/search', function () {
            return view('lms-ui.search');
        })->name('search');

        Route::get('/free-courses', function () {
            return view('lms-ui.free-courses');
        })->name('free.courses');

        Route::get('/course-detail', function () {
            return view('lms-ui.course-detail');
        })->name('course.detail');

        Route::get('/change-password', function () {
            return view('lms-ui.change-password');
        })->name('password.change');

        Route::get('/reset-password', function () {
            return view('lms-ui.reset-password');
        })->name('password.reset');

        Route::get('/wishlist', function () {
            return view('lms-ui.wishlist');
        })->name('wishlist');

        Route::get('/verify', function () {
            return view('lms-ui.verify');
        })->name('verification.notice');

        Route::post('/login', function (Request $request) {
            $credentials = $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
            ]);

            $loginField = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

            if (Auth::attempt([$loginField => $credentials['username'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();

                return redirect()->route('lms.dashboard.1');
            }

            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
        })->name('login.post');

        Route::post('/forgot-password', function () {
            return redirect()->route('lms.verification.notice');
        })->name('password.email');

        Route::post('/verify', function () {
            return redirect()->route('lms.password.reset');
        })->name('verification.verify');

        Route::post('/reset-password', function () {
            return redirect()->route('lms.login');
        })->name('password.update');

        Route::post('/register', function (Request $request) {
            $validated = $request->validate([
                'role' => ['required', 'in:learner,guide'],
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'dob' => ['required', 'date'],
                'address' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:30'],
                'id_number' => ['required', 'string', 'max:255'],
                'country' => ['required', 'string', 'max:100'],
                'password' => ['required', 'confirmed', 'min:8'],
                'education_level' => ['nullable', 'string', 'max:50'],
                'educational_institution' => ['nullable', 'string', 'max:255'],
                'subject_faculty' => ['nullable', 'string', 'max:255'],
                'interest_category' => ['nullable', 'string', 'max:50'],
                'learning_objectives' => ['nullable', 'string'],
                'knowledge_level' => ['nullable', 'string', 'max:50'],
                'payment_info' => ['nullable', 'string'],
                'receipt_info' => ['nullable', 'string'],
                'current_position' => ['nullable', 'string', 'max:255'],
                'organization' => ['nullable', 'string', 'max:255'],
                'teaching_experience' => ['nullable', 'integer', 'min:0'],
                'bio' => ['nullable', 'string'],
                'teaching_subjects' => ['nullable', 'string', 'max:100'],
                'teaching_language' => ['nullable', 'string', 'max:50'],
                'certificates' => ['nullable', 'string', 'max:255'],
                'portfolio' => ['nullable', 'string'],
                'id_copy' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
                'profile_photo' => ['nullable', 'image', 'max:4096'],
                'qualification_cert' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
                'bank_account' => ['nullable', 'string'],
                'tax_id' => ['nullable', 'string', 'max:255'],
                'taxpayer_type' => ['nullable', 'string', 'max:30'],
                'approve_policy' => ['accepted'],
            ]);

            if ($validated['role'] === 'learner') {
                $request->validate([
                    'education_level' => ['required', 'string', 'max:50'],
                    'interest_category' => ['required', 'string', 'max:50'],
                    'learning_objectives' => ['required', 'string'],
                ]);
            }

            if ($validated['role'] === 'guide') {
                $request->validate([
                    'current_position' => ['required', 'string', 'max:255'],
                    'teaching_experience' => ['required', 'integer', 'min:0'],
                    'bio' => ['required', 'string'],
                    'teaching_subjects' => ['required', 'string', 'max:100'],
                    'teaching_language' => ['required', 'string', 'max:50'],
                    'certificates' => ['required', 'string', 'max:255'],
                    'id_copy' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
                    'profile_photo' => ['required', 'image', 'max:4096'],
                    'qualification_cert' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
                    'bank_account' => ['required', 'string'],
                    'tax_id' => ['required', 'string', 'max:255'],
                    'taxpayer_type' => ['required', 'string', 'max:30'],
                ]);
            }

            $name = trim($validated['first_name'].' '.$validated['last_name']);
            $emailLocal = Str::before($validated['email'], '@');

            User::create([
                'name' => $name,
                'email' => $validated['email'],
                'password' => $validated['password'],
                'role' => $validated['role'],
                'username' => Str::slug($emailLocal).'_'.Str::lower(Str::random(4)),
                'phone' => $validated['phone'],
                'dob' => $validated['dob'],
                'country' => $validated['country'],
            ]);

            return redirect()->route('lms.login')->with('status', 'Account created successfully. Please sign in.');
        })->name('register.post');

        Route::get('/all-courses', function () {
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

            return view('lms-ui.category', compact('courses'));
        })->name('category');

        Route::get('/all', function () {
            return redirect()->route('lms.courses');
        })->name('all');

        Route::get('/modules', function () {
            return view('lms-ui.modules');
        })->name('modules');

        Route::get('/recommendations', function () {
            return view('lms-ui.recommendations');
        })->name('recommendations');

        Route::get('/testimonials', function () {
            return view('lms-ui.testimonials');
        })->name('testimonials');

        Route::get('/reviews', function () {
            return view('lms-ui.reviews');
        })->name('reviews');
    });
