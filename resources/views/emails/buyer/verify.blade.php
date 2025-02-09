<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verifikasi Alamat Email Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://i.ibb.co/HnvWxZm" alt="{{ config('app.name') }} Logo" class="logo">
        <h1>Selamat Datang di {{ config('app.name') }}!</h1>
    </div>

    <p>Hai {{ $buyer->name }},</p>

    <p>Terima kasih telah membuat akun di {{ config('app.name') }}. Untuk menyelesaikan pendaftaran dan mulai membeli tiket, silakan verifikasi alamat email Anda dengan mengklik tombol di bawah ini:</p>

    <div style="text-align: center;">
        <a href="{{ $verificationUrl }}" class="button">Verifikasi Email</a>
    </div>

    <p>Jika tombol di atas tidak berfungsi, Anda juga dapat menyalin dan menempelkan tautan berikut ke browser Anda:</p>
    <p style="word-break: break-all;">{{ $verificationUrl }}</p>

    <p>Tautan verifikasi ini akan kedaluwarsa dalam 60 menit.</p>

    <p>Jika Anda tidak membuat akun ini, Anda tidak perlu melakukan apa pun.</p>

    <div class="footer">
        <p>{{ date('Y') }} {{ config('app.name') }}. Hak Cipta Dilindungi.</p>
        <p>Ini adalah email otomatis, mohon tidak membalas email ini.</p>
    </div>
</body>
</html>
