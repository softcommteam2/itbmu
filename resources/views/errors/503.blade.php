<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Under Maintenance | ITBMU</title>
    {{-- Inline styles only: this page is shown while the site is down, so it must not depend on other assets --}}
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
            font-family: "Segoe UI", "Pyidaungsu", "Myanmar Text", Arial, sans-serif;
            background: #f4f1ea;
            color: #333;
        }
        .card {
            width: 100%;
            max-width: 640px;
            background: #fff;
            border-top: 6px solid #b8860b;
            border-radius: 8px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, .08);
            padding: 32px 28px;
            text-align: center;
        }
        .logo { max-width: 100%; height: auto; margin-bottom: 28px; }
        h1 { margin: 0 0 12px; font-size: 26px; color: #1f2d5a; }
        h2 { margin: 24px 0 12px; font-size: 20px; color: #1f2d5a; line-height: 1.8; }
        p { margin: 0; font-size: 16px; line-height: 1.8; color: #555; }
        hr { border: 0; border-top: 1px solid #eee; margin: 24px 0 0; }
        .footer { margin-top: 24px; font-size: 13px; color: #999; }
    </style>
</head>
<body>
    <div class="card">
        <img class="logo" src="{{ asset('images/adminlogonew1.png') }}" alt="International Theravāda Buddhist Missionary University">

        <h1>We'll be back soon</h1>
        <p>The website is currently undergoing scheduled maintenance.<br>Please check back again shortly.</p>

        <hr>

        <h2>ဝက်ဘ်ဆိုက်ကို ပြုပြင်ထိန်းသိမ်းနေပါသည်</h2>
        <p>ခေတ္တစောင့်ဆိုင်းပြီး နောက်မှ ပြန်လည်ဝင်ရောက်ပေးပါရန်။</p>

        <div class="footer">&copy; {{ date('Y') }} ITBMU</div>
    </div>
</body>
</html>
