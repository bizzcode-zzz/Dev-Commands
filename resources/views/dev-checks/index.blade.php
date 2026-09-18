@extends('layouts.app')

@section('title', 'Developer Checks - DevCommands')

@section('content')

<!-- THE BLOCKER WRAPPER: Tamang spacing para sa navbar mo -->
<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', sans-serif;">

    <div style="max-width: 800px; margin: 0 auto;">

        <!-- HEADER -->
        <div class="text-center" style="margin-bottom: 40px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #ff4d4d; margin-bottom: 10px;">
                💻 My Developer Checks & Tools
            </h1>
            <p style="font-size: 15px; color: #a5a5a5;">
                Aking mga palatandaan kapag may natatanggap na error at listahan ng mga importanteng tools.
            </p>
        </div>

        <!-- ================= CHAPTER 1: HTTP STATUS CODES (MGA PALATANDAAN NG ERROR) ================= -->
        <h2 style="color: #ffaa00; font-size: 16px; font-weight: 800; margin: 30px 0 15px 0; text-transform: uppercase; border-bottom: 2px solid #2d2d2d; padding-bottom: 8px;">
            🚦 API Response Status Codes
        </h2>

        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; padding: 20px; border-radius: 6px; margin-bottom: 20px; font-size: 14px; line-height: 1.8; color: #e0e0e0;">
            🟢 <strong style="color: #2ecc71; font-size: 16px;">200 OK</strong> — Tagumpay! Nakuha o na-update ang data.<br>
            🟢 <strong style="color: #2ecc71; font-size: 16px;">201 Created</strong> — Tagumpay! Na-save at nagawa ang bagong data.<br>
            🟡 <strong style="color: #ffaa00; font-size: 16px;">400 Bad Request</strong> — May maling syntax sa pagkakasulat ng JSON mo.<br>
            🟡 <strong style="color: #ffaa00; font-size: 16px;">401 Unauthorized</strong> — Walang valid na Token / Hindi naka-login.<br>
            🟡 <strong style="color: #ffaa00; font-size: 16px;">403 Forbidden</strong> — Naka-login ka pero wala kang permiso sa feature na ito.<br>
            🟡 <strong style="color: #ffaa00; font-size: 16px;">404 Not Found</strong> — Hindi mahanap ang link o ID. May typo sa URL.<br>
            🟡 <strong style="color: #ffaa00; font-size: 16px;">422 Validation Error</strong> — Hinarang ng Request file dahil may maling data (ex. blangkong name).<br>
            🔴 <strong style="color: #ff4d4d; font-size: 16px;">500 Server Error</strong> — May totoong bug o crash sa mismong Laravel/PHP code mo.
        </div>


        <!-- ================= NEW CHAPTER: PHP ENVIRONMENT SWITCHING (REACTION/INERTIA) ================= -->
        <h2 style="color: #a55eea; font-size: 16px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; border-bottom: 2px solid #2d2d2d; padding-bottom: 8px;">
            ⚡ PHP Version Switching & Running React Inertia
        </h2>

        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; padding: 20px; border-radius: 6px; margin-bottom: 20px; font-size: 14px; line-height: 1.8; color: #e0e0e0;">
            📌 <strong style="color: #0dcaf0;">Default Version ng PC:</strong> PHP 8.2<br>
            ⚠️ <strong style="color: #ff4d4d;">BABALA:</strong> Huwag kalimutang mag-switch muna ng PHP version sa terminal bago patakbuhin ang project kapag ang gamit ay PHP 8.5!

            <div style="margin-top: 15px; background: #111; padding: 12px; border-radius: 4px; border: 1px solid #333;">
                <span style="color: #ffaa00; font-weight: bold;">PowerShell Switch Command:</span>
                <code style="display: block; background: #000; padding: 6px; margin-top: 5px; color: #2ecc71; border-radius: 3px;">$env:Path = "C:\tools\php-8.5;$env:Path"</code>
            </div>

            <div style="margin-top: 10px; background: #111; padding: 12px; border-radius: 4px; border: 1px solid #333;">
                <span style="color: #ffaa00; font-weight: bold;">CMD Switch Command:</span>
                <code style="display: block; background: #000; padding: 6px; margin-top: 5px; color: #2ecc71; border-radius: 3px;">set PATH=C:\tools\php-8.5;%PATH%</code>
            </div>

            <div style="margin-top: 15px; background: #111; padding: 12px; border-radius: 4px; border: 1px solid #333;">
                🔍 <span style="color: #2ecc71; font-weight: bold;">MANDATORY CHECK:</span> Pagka-switch, i-verify muna ang aktibong bersyon:
                <code style="display: block; background: #000; padding: 6px; margin-top: 5px; color: #e67e22; border-radius: 3px;">php -v</code>
            </div>

            <div style="margin-top: 15px;">
                🚀 <span style="font-weight: bold; color: #ffffff;">Standard React Inertia Execution Commands:</span>
                <ul style="margin: 5px 0 0 20px; padding: 0; list-style-type: square;">
                    <li>Backend: <code style="color: #e67e22;">php artisan serve</code></li>
                    <li>Frontend: <code style="color: #e67e22;">npm run dev</code></li>
                </ul>
            </div>
        </div>


        <!-- ================= CHAPTER 2: MY DEV TOOLS (FUTURE STORAGE) ================= -->
        <h2 style="color: #0dcaf0; font-size: 16px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; border-bottom: 2px solid #2d2d2d; padding-bottom: 8px;">
            🛠️ My Core Tools Checklist
        </h2>

        <!-- BLANGKONG RECEPTACLE LANG PARA SA MGA TOOLS MO SA HINAHARAP -->
        <div style="border: 1px dashed #444; background: #141414; padding: 25px; border-radius: 6px; text-align: center; margin-bottom: 25px;">
            <p style="font-size: 13px; color: #666; font-style: italic; margin: 0;">
                "Naka-abang... Sa susunod, kapag may mga bagong tools ka nang gustong ilagay at i-notes dito para hindi mo malimutan ang setups nila, paisa-isa natin silang igagawa ng card dito, bro!"
            </p>
        </div>


        <!-- BACK BUTTON -->
        <div class="text-center" style="margin-top: 30px; margin-bottom: 50px;">
            <a href="/" style="display: inline-block; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #3c3c3c; padding: 10px 20px; border-radius: 4px; background: #222;">
                ← Bumalik sa Dashboard
            </a>
        </div>

    </div>
</div>
@endsection
