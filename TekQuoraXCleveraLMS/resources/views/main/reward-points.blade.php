<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reward Points | IL2</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
</head>
<body>
    @include('partials.header')
    <div class="shared-shell">
        @include('partials.sidebar')
        <main class="shared-content">
            <div style="background: #fff; padding: 60px; border-radius: 26px; border: 1px solid #e2e8f0; text-align: center;">
                <h1 style="font-size: 24px; font-weight: 800; margin-bottom: 15px;">Reward Points</h1>
                <p style="color: #64748b;">Your total reward points: 0. Keep learning to earn more!</p>
            </div>
        </main>
    </div>
</body>
</html>
