<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TekQuora LMS - Choose Design</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Instrument Sans', system-ui, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0a0a0a;
            color: #ededec;
            padding: 2rem;
        }
        .container {
            max-width: 720px;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #6366f1, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .subtitle {
            color: #a1a09a;
            font-size: 1rem;
            margin-bottom: 3rem;
        }
        .cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        @media (max-width: 600px) {
            .cards { grid-template-columns: 1fr; }
        }
        .card {
            background: #161615;
            border: 1px solid #2a2a28;
            border-radius: 1rem;
            padding: 2.5rem 2rem;
            text-decoration: none;
            color: inherit;
            transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
        .card:hover {
            border-color: #6366f1;
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(99, 102, 241, 0.15);
        }
        .card .icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        .card.old .icon { background: linear-gradient(135deg, #1e1b4b, #312e81); }
        .card.new .icon { background: linear-gradient(135deg, #134e4a, #065f46); }
        .card h2 { font-size: 1.25rem; font-weight: 600; }
        .card p { color: #a1a09a; font-size: 0.875rem; line-height: 1.5; }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .card.old .badge { background: #1e1b4b; color: #818cf8; }
        .card.new .badge { background: #064e3b; color: #34d399; }
        footer {
            margin-top: 3rem;
            color: #706f6c;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TekQuora LMS</h1>
        <p class="subtitle">Choose which design to view</p>

        <div class="cards">
            <a href="/old" class="card old">
                <div class="icon">
                    <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="#818cf8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <span class="badge">Infix LMS</span>
                <h2>Original Design</h2>
                <p>Full-featured Infix LMS with modules, quizzes, virtual classes, and admin panel.</p>
            </a>

            <a href="/new" class="card new">
                <div class="icon">
                    <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" stroke="#34d399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <span class="badge">New Design</span>
                <h2>Current Design</h2>
                <p>Modern, clean UI built with Tailwind CSS 4 and Vite. The new TekQuora experience.</p>
            </a>
        </div>

        <footer>Both applications run side by side for comparison and integration.</footer>
    </div>
</body>
</html>
