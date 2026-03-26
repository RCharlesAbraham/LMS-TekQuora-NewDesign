<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | IL² RMUTTO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f4f6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            scroll-behavior: smooth;
        }

        /* ─── LAYOUT ─── */
        .shell {
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 25px;
            max-width: 1450px;
            margin: 0 auto;
            padding: 90px 30px 50px;
            flex: 1;
            width: 100%;
        }

        /* ─── SIDEBAR ─── */
        .sidebar {
            background: #fff;
            border-radius: 20px;
            padding: 20px 10px 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
            position: sticky;
            top: 80px;
            align-self: start;
        }
        .nav-item {
            display: flex; align-items: center; gap: 14px; padding: 12px 18px;
            border-radius: 12px; text-decoration: none; color: #64748b;
            font-size: 14px; font-weight: 500; margin-bottom: 2px; transition: 0.2s;
        }
        .nav-item:hover { background: #f1f5f9; color: #0f172a; }
        .nav-item.active { background: #f1f5f9; color: #003a70; font-weight: 700; }
        .nav-item img { width: 22px; height: 22px; opacity: 0.7; }
        .nav-item.active img { opacity: 1; }

        /* ─── MAIN CONTENT ─── */
        .content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .page-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .form-card {
            background: #fff;
            border-radius: 16px;
            padding: 36px 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            min-height: 600px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            font-size: 13.5px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .form-group label span { color: #e53e3e; margin-left: 1px; }

        .input-wrap {
            position: relative;
        }

        .input-wrap input {
            width: 100%;
            max-width: 340px;
            height: 46px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 0 44px 0 16px;
            font-size: 14px;
            color: #4a5568;
            outline: none;
            transition: border-color 0.2s;
            font-family: 'Inter', sans-serif;
        }

        .input-wrap input:focus { border-color: #003a70; }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
            padding: 0;
            display: flex;
            align-items: center;
            /* Adjust right since input is max-width 340px */
        }

        /* Position toggle relative to input max-width */
        .input-wrap {
            display: inline-block;
            width: 100%;
            max-width: 340px;
            position: relative;
        }

        .btn-change {
            height: 46px;
            background: #003a70;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 0 32px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 10px;
            font-family: 'Inter', sans-serif;
            transition: background 0.2s;
        }
        .btn-change:hover { background: #002a55; }

        /* ─── FOOTER ─── */
        footer {
            grid-column: 2;
            border-radius: 26px;
            background: #fff;
            padding: 50px 30px;
            border-top: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
            margin-top: 10px;
        }
        .f-brand { flex: 1; min-width: 220px; }
        .f-logo-circle {
            width: 58px; height: 58px; border-radius: 50%; background: #f8fafc;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 16px; box-shadow: 0 4px 10px rgba(0,0,0,0.04);
        }
        .f-logo-circle img { height: 34px; }
        .f-brand p { color: #64748b; font-size: 13.5px; line-height: 1.6; max-width: 240px; }
        .f-col { flex: 0.6; min-width: 140px; }
        .f-col ul { list-style: none; padding: 0; margin: 0; }
        .f-col ul li { margin-bottom: 14px; }
        .f-col ul li a { text-decoration: none; color: #475569; font-size: 14px; transition: 0.2s; }
        .f-col ul li a:hover { color: #003a70; }
        .f-right { flex: 1; min-width: 220px; display: flex; flex-direction: column; align-items: flex-end; gap: 18px; }
        .f-lang-select {
            padding: 9px 14px; border-radius: 25px; border: 1px solid #e2e8f0;
            background: #fff; color: #475569; font-size: 13.5px; outline: none; cursor: pointer; min-width: 130px;
        }
        .f-socials { display: flex; gap: 10px; }
        .f-socials a {
            width: 36px; height: 36px; border-radius: 50%; background: #f1f5f9;
            display: flex; align-items: center; justify-content: center; transition: 0.2s;
        }
        .f-socials a:hover { transform: translateY(-2px); background: #e2e8f0; }
        .f-socials a img { height: 17px; width: 17px; object-fit: contain; }
        .f-apps { display: flex; gap: 10px; }
        .f-apps a img { height: 36px; }
    </style>
</head>
<body>

    @include('partials.header')

    <!-- ── SHELL ─────────────────────── -->
    <div class="shell">

        <!-- Sidebar -->
        <aside class="sidebar">
            <a href="{{ route('dashboard.1') }}" class="nav-item">
                <img src="{{ asset('images/icons/1.png') }}" style="width: 22px; height: 22px;">
                Dashboard
            </a>
            <a href="{{ route('calendar') }}" class="nav-item">
                <img src="{{ asset('images/icons/2.png') }}" style="width: 22px; height: 22px;">
                Calendar
            </a>
            <a href="{{ route('learning') }}" class="nav-item">
                <img src="{{ asset('images/icons/3.png') }}" style="width: 22px; height: 22px;">
                Learning
            </a>
            <a href="{{ route('courses') }}" class="nav-item">
                <img src="{{ asset('images/icons/4.png') }}" style="width: 22px; height: 22px;">
                Exam
            </a>
            <a href="{{ route('quiz') }}" class="nav-item">
                <img src="{{ asset('images/icons/5.png') }}" style="width: 22px; height: 22px;">
                Quiz
            </a>
            <a href="{{ route('account.new') }}" class="nav-item active">
                <img src="{{ asset('images/icons/6.png') }}" style="width: 22px; height: 22px;">
                Account
            </a>
            <a href="{{ route('wallet.address') }}" class="nav-item">
                <img src="{{ asset('images/icons/7.png') }}" style="width: 22px; height: 22px;">
                Wallet Address
            </a>
            <a href="{{ route('transaction') }}" class="nav-item">
                <img src="{{ asset('images/icons/8.png') }}" style="width: 22px; height: 22px;">
                Transaction
            </a>
            <a href="{{ route('payment.method') }}" class="nav-item">
                <img src="{{ asset('images/icons/9.png') }}" style="width: 22px; height: 22px;">
                Payment
            </a>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <h2 class="page-title">Change Password</h2>

            <div class="form-card">
                @if(session('success'))
                    <div style="background:#f0fdf4; color:#16a34a; border: 1px solid #bbf7d0; border-radius: 10px; padding: 12px 18px; margin-bottom: 20px; font-size: 14px; font-weight: 600;">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div style="background:#fef2f2; color:#dc2626; border: 1px solid #fecaca; border-radius: 10px; padding: 12px 18px; margin-bottom: 20px; font-size: 14px; font-weight: 600;">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="#" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Old Password<span>*</span></label>
                        <div class="input-wrap">
                            <input type="password" name="old_password" id="old_password" required placeholder="">
                            <button type="button" class="toggle-password" onclick="toggleVisibility('old_password', this)">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>New Password<span>*</span></label>
                        <div class="input-wrap">
                            <input type="password" name="new_password" id="new_password" required placeholder="">
                            <button type="button" class="toggle-password" onclick="toggleVisibility('new_password', this)">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password<span>*</span></label>
                        <div class="input-wrap">
                            <input type="password" name="confirm_password" id="confirm_password" required placeholder="">
                            <button type="button" class="toggle-password" onclick="toggleVisibility('confirm_password', this)">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn-change">Change Password</button>
                </form>
            </div>
        </main>

        <!-- ── FOOTER ─────────────────────── -->
        <footer>
            <div class="f-brand">
                <div class="f-logo-circle"><img src="{{ asset('images/icons/logo.svg') }}" alt="Logo"></div>
                <p>Learn anytime and anywhere from IL2 career skills</p>
            </div>
            <div class="f-col">
                <ul>
                    <li><a href="{{ route('info.page', ['topic' => 'teach']) }}">Teach on IL2</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'about']) }}">About Us</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'contact']) }}">Contact Us</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'support']) }}">Help and Support</a></li>
                </ul>
            </div>
            <div class="f-col">
                <ul>
                    <li><a href="{{ route('info.page', ['topic' => 'terms']) }}">Terms</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'privacy']) }}">Privacy Policy</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'cookies']) }}">Cookies Policy</a></li>
                    <li><a href="{{ route('info.page', ['topic' => 'careers']) }}">Career</a></li>
                </ul>
            </div>
            <div class="f-right">
                <select class="f-lang-select"><option>English</option><option>Thai</option></select>
                <div class="f-socials">
                    <a href="https://www.facebook.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"></a>
                    <a href="https://www.instagram.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg"></a>
                    <a href="https://x.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Twitter_Logo.png"></a>
                </div>
                <div class="f-apps">
                    <a href="https://play.google.com/store"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"></a>
                    <a href="https://www.apple.com/app-store/"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"></a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        function toggleVisibility(id, btn) {
            const input = document.getElementById(id);
            if (input.type === 'password') {
                input.type = 'text';
                btn.innerHTML = '<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>';
            } else {
                input.type = 'password';
                btn.innerHTML = '<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>';
            }
        }
    </script>
</body>
</html>
