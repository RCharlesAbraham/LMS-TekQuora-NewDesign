<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Old LMS - TekQuora</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background: #0f0f10;
            color: #ededec;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        }
        .bar {
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 14px;
            border-bottom: 1px solid #2a2a2d;
            background: #171719;
        }
        .bar a {
            color: #a5b4fc;
            text-decoration: none;
            font-size: 14px;
        }
        .frame {
            width: 100%;
            height: calc(100% - 48px);
            border: 0;
            display: block;
            background: #fff;
        }
    </style>
</head>
<body>
@php
    $oldLmsUrl = rtrim((string) config('services.old_lms.url', 'http://127.0.0.1:8001'), '/');
@endphp
<div class="bar">
    <strong>Old LMS (Infix)</strong>
    <a href="/" title="Back to selector">Back</a>
</div>
<iframe class="frame" src="{{ $oldLmsUrl }}/"></iframe>
</body>
</html>
