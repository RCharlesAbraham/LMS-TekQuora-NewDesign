<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet | IL2 RMUTTO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo.png')); ?>">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f4f6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content { display: flex; flex-direction: column; gap: 24px; }

        .wallet-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .wallet-balance-card {
            background: #fff;
            border-radius: 20px;
            padding: 32px 36px;
            border: 1px solid #e8ecf1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            min-height: 180px;
        }

        .wallet-balance-info h3 {
            font-size: 16px;
            font-weight: 700;
            color: #1e293b;
            margin: 0 0 4px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .wallet-balance-info h3 svg { color: #3b82f6; }

        .wallet-balance-label {
            display: inline-block;
            margin-top: 16px;
            padding: 4px 10px;
            border: 1.5px solid #ef4444;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            color: #ef4444;
        }

        .wallet-balance-amount {
            font-size: 28px;
            font-weight: 800;
            color: #1e293b;
            margin-top: 8px;
        }

        .wallet-illustration {
            width: 140px;
            height: auto;
            flex-shrink: 0;
        }

        .wallet-recharge-card {
            background: #fff;
            border-radius: 20px;
            padding: 32px 36px;
            border: 1px solid #e8ecf1;
            min-height: 180px;
        }

        .recharge-input-row {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
        }

        .recharge-input-row input {
            flex: 1;
            height: 46px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 0 18px;
            font-size: 15px;
            font-weight: 600;
            color: #1e293b;
            outline: none;
            font-family: inherit;
        }

        .recharge-input-row input:focus { border-color: #3b82f6; }

        .btn-recharge {
            height: 46px;
            padding: 0 28px;
            background: #22c55e;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
            white-space: nowrap;
        }

        .btn-recharge:hover { background: #16a34a; }

        .quick-amounts {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .quick-amount-pill {
            padding: 8px 18px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            background: #fff;
            font-size: 13px;
            font-weight: 600;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }

        .quick-amount-pill:hover,
        .quick-amount-pill.active {
            border-color: #3b82f6;
            color: #3b82f6;
            background: #eff6ff;
        }

        .promo-link {
            font-size: 13px;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 10px;
        }

        .promo-row {
            display: flex;
            gap: 12px;
        }

        .promo-row input {
            flex: 1;
            height: 42px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 13px;
            color: #475569;
            outline: none;
            font-family: inherit;
        }

        .btn-apply {
            height: 42px;
            padding: 0 28px;
            background: #22c55e;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-apply:hover { background: #16a34a; }

        .transactions-card {
            background: #fff;
            border-radius: 20px;
            padding: 32px 36px;
            border: 1px solid #e8ecf1;
        }

        .transactions-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .transactions-header h3 {
            font-size: 18px;
            font-weight: 800;
            color: #1e293b;
            margin: 0;
        }

        .export-link {
            font-size: 14px;
            font-weight: 600;
            color: #64748b;
            text-decoration: none;
            cursor: pointer;
        }

        .export-link:hover { color: #1e293b; }

        .transactions-table {
            width: 100%;
            border-collapse: collapse;
        }

        .transactions-table thead th {
            text-align: left;
            font-size: 12px;
            font-weight: 700;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 12px 16px;
            border-bottom: 1px solid #f1f5f9;
        }

        .transactions-table thead th svg {
            vertical-align: middle;
            margin-left: 4px;
            color: #cbd5e1;
        }

        .transactions-table tbody td {
            padding: 16px;
            font-size: 14px;
            color: #475569;
            border-bottom: 1px solid #f8fafc;
        }

        .transactions-table tbody tr:hover { background: #fafbfc; }

        @media (max-width: 1100px) {
            .wallet-top { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .shared-shell { padding: 80px 15px 30px; }
            .wallet-balance-card {
                flex-direction: column;
                text-align: center;
                padding: 24px 20px;
            }
            .wallet-recharge-card { padding: 24px 20px; }
            .transactions-card { padding: 24px 20px; }
            .quick-amounts { justify-content: center; }
            .transactions-table { font-size: 12px; }
        }
    </style>
</head>
<body>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="shared-shell">
        <?php echo $__env->make('partials.sidebar', ['activePage' => 'wallet'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main class="content">
            <div class="wallet-top">
                <div class="wallet-balance-card">
                    <div class="wallet-balance-info">
                        <h3>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="M2 10h20"/><path d="M16 14h2"/></svg>
                            Your Wallet
                        </h3>
                        <div class="wallet-balance-label">Balance</div>
                        <div class="wallet-balance-amount">&#8377; 2,000.00</div>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png" alt="Wallet" class="wallet-illustration">
                </div>

                <div class="wallet-recharge-card">
                    <div class="recharge-input-row">
                        <input type="text" id="rechargeAmount" value="&#8377; 2000" placeholder="&#8377; Amount">
                        <button class="btn-recharge" onclick="recharge()">Recharge</button>
                    </div>
                    <div class="quick-amounts">
                        <button class="quick-amount-pill active" onclick="setAmount(2000, this)">&#8377; 2000</button>
                        <button class="quick-amount-pill" onclick="setAmount(3000, this)">&#8377; 3000</button>
                        <button class="quick-amount-pill" onclick="setAmount(4000, this)">&#8377; 4000</button>
                        <button class="quick-amount-pill" onclick="setAmount(5000, this)">&#8377; 5000</button>
                        <button class="quick-amount-pill" onclick="setAmount(10000, this)">&#8377; 10000</button>
                    </div>
                    <a class="promo-link" onclick="document.getElementById('promoRow').style.display='flex'">Have a Promocode?</a>
                    <div class="promo-row" id="promoRow" style="display: none;">
                        <input type="text" placeholder="Enter coupon code">
                        <button class="btn-apply">Apply</button>
                    </div>
                </div>
            </div>

            <div class="transactions-card">
                <div class="transactions-header">
                    <h3>Credit Transactions</h3>
                    <a class="export-link" href="#">Export</a>
                </div>
                <table class="transactions-table">
                    <thead>
                        <tr>
                            <th>Date <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></th>
                            <th>Debit <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg></th>
                            <th>Credit <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg></th>
                            <th>Balance</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27 Mar 2024 16:52 PM</td>
                            <td>&#8377; 1,500</td>
                            <td>0</td>
                            <td>&#8377; 500</td>
                            <td>Debit for International AWB No. 322 ...</td>
                        </tr>
                        <tr>
                            <td>27 Mar 2024 12:59 PM</td>
                            <td>&#8377; 2,200</td>
                            <td>0</td>
                            <td>&#8377; 2,000</td>
                            <td>Debit for International AWB No. 926 ...</td>
                        </tr>
                        <tr>
                            <td>27 Mar 2024 11:03 AM</td>
                            <td>&#8377; 800</td>
                            <td>0</td>
                            <td>&#8377; 4,200</td>
                            <td>Debit for International AWB No. 272 ...</td>
                        </tr>
                        <tr>
                            <td>26 Mar 2024 09:30 AM</td>
                            <td>0</td>
                            <td>&#8377; 5,000</td>
                            <td>&#8377; 5,000</td>
                            <td>Wallet Recharge via UPI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
    function setAmount(amount, btn) {
        document.getElementById('rechargeAmount').value = 'â‚¹ ' + amount;
        document.querySelectorAll('.quick-amount-pill').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
    }
    function recharge() {
        alert('Recharge initiated!');
    }
    </script>
</body>
</html>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/main/wallet-address.blade.php ENDPATH**/ ?>