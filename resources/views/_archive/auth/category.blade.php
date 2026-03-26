<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category | IL² RMUTTO</title>
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
        }

        /* ─── LAYOUT ─── */
        .shell {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 25px;
            max-width: 1450px;
            margin: 0 auto;
            padding: 90px 30px 50px;
            flex: 1;
            width: 100%;
        }

        /* ─── SIDEBAR FILTERS ─── */
        .filter-sidebar {
            background: #fff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
            position: sticky; top: 80px; align-self: start;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
        }
        .filter-sidebar::-webkit-scrollbar { width: 5px; }
        .filter-sidebar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }

        .sidebar-header { font-size: 15px; font-weight: 700; color: #1e293b; margin-bottom: 20px; }
        
        .filter-group { margin-bottom: 24px; }
        .filter-title {
            display: flex; align-items: center; justify-content: space-between;
            font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 12px; cursor: pointer;
        }
        .filter-content { display: flex; flex-direction: column; gap: 10px; }
        .filter-item {
            display: flex; align-items: center; justify-content: space-between;
            cursor: pointer;
        }
        .filter-item label {
            display: flex; align-items: center; gap: 10px; font-size: 13px; color: #64748b; font-weight: 500; cursor: pointer;
        }
        .filter-item input {
            width: 18px; height: 18px; border-radius: 4px; border: 2px solid #e2e8f0; 
            appearance: none; cursor: pointer; background: #fff; transition: 0.2s;
        }
        .filter-item input:checked { background: #003a70; border-color: #003a70; }
        .filter-count { font-size: 12px; color: #94a3b8; font-weight: 500; }

        /* ─── MAIN CONTENT ─── */
        .main-card {
            background: #fff;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 4px 25px rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .main-header {
            display: flex; align-items: center; justify-content: space-between;
        }
        .main-header h2 { font-size: 18px; font-weight: 700; color: #1e293b; }
        
        .sort-wrap { display: flex; align-items: center; gap: 12px; }
        .sort-label { font-size: 13.5px; color: #64748b; font-weight: 500; }
        .sort-select {
            padding: 8px 16px; border-radius: 20px; border: 1px solid #e2e8f0;
            background: #fff; color: #1e293b; font-size: 13px; font-weight: 600; outline: none; cursor: pointer;
        }

        .cat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .cat-card {
            position: relative;
            aspect-ratio: 16/10;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            transition: 0.3s;
        }
        .cat-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .cat-card img { width: 100%; height: 100%; object-fit: cover; }
        
        .cat-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.4));
            display: flex; flex-direction: column; justify-content: flex-end;
        }
        .cat-blur {
            backdrop-filter: blur(8px);
            background: rgba(255,255,255,0.1);
            border-top: 1px solid rgba(255,255,255,0.3);
            padding: 16px 20px;
        }
        .cat-name { font-size: 16px; font-weight: 700; color: #fff; letter-spacing: 0.5px; }

    </style>
</head>
<body>

    @include('partials.header')

    <!-- ── SHELL ─────────────────────── -->
    <div class="shell">

        <!-- Filters Sidebar -->
        <aside class="filter-sidebar">
            <div class="sidebar-header">Filters:</div>

            <div class="filter-group">
                <div class="filter-title">Category <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m6 9 6 6 6-6"/></svg></div>
                <div class="filter-content">
                    <div class="filter-item">
                        <label><input type="checkbox"> Category 1</label>
                        <span class="filter-count">0</span>
                    </div>
                    <div class="filter-item">
                        <label><input type="checkbox"> Category 1</label>
                        <span class="filter-count">4</span>
                    </div>
                    <div class="filter-item">
                        <label><input type="checkbox"> Category 1</label>
                        <span class="filter-count">4</span>
                    </div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Sub-Category <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m6 9 6 6 6-6"/></svg></div>
                <div class="filter-content">
                    <div class="filter-item"><label><input type="checkbox"> Lorem Ipsum</label></div>
                    <div class="filter-item"><label><input type="checkbox"> Lorem Ipsum</label></div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Subject <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>
            
            <div class="filter-group">
                <div class="filter-title">Class <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Tutor <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m6 9 6 6 6-6"/></svg></div>
                <div class="filter-content">
                    <div class="filter-item"><label><input type="checkbox"> Verified</label></div>
                    <div class="filter-item"><label><input type="checkbox"> Experienced</label></div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Course Price <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Ratings <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>

            <div class="filter-group">
                <div class="filter-title">Duration <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>

            <div class="filter-group" style="margin-bottom:0">
                <div class="filter-title">Language <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="transform: rotate(-90deg)"><path d="m6 9 6 6 6-6"/></svg></div>
            </div>
        </aside>

        <!-- Main Categories -->
        <main class="main-card">
            <div class="main-header">
                <h2>Categories</h2>
                <div class="sort-wrap">
                    <span class="sort-label">Sort by</span>
                    <select class="sort-select">
                        <option>Default</option>
                        <option>Most Popular</option>
                        <option>Most Rated</option>
                        <option>Date</option>
                    </select>
                </div>
            </div>

            <div class="cat-grid">
                @for ($i = 0; $i < 9; $i++)
                <a href="{{ route('courses') }}" class="cat-card" style="text-decoration:none;">
                    <img src="{{ asset('images/learning.png') }}" alt="Category">
                    <div class="cat-overlay">
                        <div class="cat-blur">
                            <span class="cat-name">Business</span>
                        </div>
                    </div>
                </a>
                @endfor
            </div>
        </main>
    </div>

</body>
</html>
