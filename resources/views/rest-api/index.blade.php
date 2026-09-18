@extends('layouts.app')

@section('title', 'REST API Progress - DevCommands')

@section('content')

<!-- THE BLOCKER WRAPPER: Para sa spacing ng navbar mo -->
<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', sans-serif;">

    <div style="max-width: 800px; margin: 0 auto;">

        <!-- HEADER -->
        <div class="text-center" style="margin-bottom: 40px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #ffaa00; margin-bottom: 10px;">
                🌐 My REST API Progress Notes
            </h1>
           
        </div>

        <!-- STEP 1 -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #198754 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #198754 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                📌 STEP 1: API Environment Setup
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-run ang command na ito sa terminal ng iyong proyekto para ihanda ang Laravel sa paggawa ng API:
            </p>
            <pre style="position: relative; background: #111; padding: 15px; border-radius: 4px; overflow-x: auto;"><code style="color: #198754; font-family: monospace;">php artisan install:api</code></pre>
            <div style="margin-top: 15px; background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.6; color: #c9d1d9;">
                💡 <strong>Ano ang ginagawa nito?</strong><br>
                1. Gagawa ito ng bagong file: 📄 <span style="color: #61dafb;">routes/api.php</span><br>
                2. I-se-setup nito ang Laravel Sanctum para sa security tokens.
            </div>
        </div>

        <!-- STEP 2: POSTMAN SETUP (INSTALLATION, ACCOUNT & INITIAL CONFIG) -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0dcaf0 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0dcaf0 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                🚀 STEP 2: Postman Software & Account Installation
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Para ma-test kung gumagana ang mga gagawin nating API endpoints, kailangan ng desktop testing tool. Narito ang buong kronolohiya ng aming pag-setup:
            </p>

            <!-- DOWNLOAD LINK -->
            <div style="background: #15232d; padding: 12px; border: 1px solid rgba(0, 210, 240, 0.2); border-radius: 6px; margin-bottom: 15px; font-size: 13px;">
                🔗 <strong>Official Source Portal:</strong>
                <a href="https://postman.com" target="_blank" style="color: #0dcaf0; font-weight: bold; text-decoration: underline;">
                    Download Postman Desktop App
                </a>
            </div>

            <!-- LOGGED WORKFLOWS -->
            <div style="background: #111; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.7; color: #c9d1d9; margin-bottom: 15px;">
                <span style="color: #0dcaf0; font-weight: bold; display: block; margin-bottom: 6px;">🛠 Beaumont A. Software Download & Registration:</span>
                1. I-download ang official Windows <code style="color: #ffffff;">.exe</code> installer at patakbuhin ito sa PC.<br>
                2. Sa login window, unang pinindot ang <strong style="color: #ffffff;">"Continue without account"</strong>.<br>
                3. Pagpasok sa loob, pinili ang opsyong <strong style="color: #0dcaf0;">"Sign up for free"</strong> upang gumawa ng permanenteng account gamit ang <strong style="color: #ffffff;">Gmail</strong>.
            </div>

            <div style="background: #111; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.7; color: #c9d1d9;">
                <span style="color: #ffaa00; font-weight: bold; display: block; margin-bottom: 6px;">⚙️ B. Initial Configuration Screens (1 of 4 Steps):</span>
                • <strong>Prompt ng System:</strong> <em>"Connect a local project folder?"</em><br>
                • <strong>Ang Aming Pinili:</strong> <strong style="color: #ff4d4d;">NO</strong> <span style="color: #888;">(Dahil mas malinis ang cloud workspace syncing ng Postman para sa API testing)</span>
            </div>

                <div style="background: #111; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.7; color: #c9d1d9; margin-top: 15px;">
        <span style="color: #b23cfd; font-weight: bold; display: block; margin-bottom: 6px;">🎯 C. Workspace Personalization Screen (2 of 4 Steps):</span>
        • <strong>Prompt ng System:</strong> <em>"What best describes what you’d like to do in Postman and your role?"</em><br>
        • <strong>I'd like to:</strong> <strong style="color: #ffffff;">Build APIs 🛠️</strong><br>
        • <strong>As a:</strong> <strong style="color: #ffffff;">Full-stack developer 🧠</strong><br>
        • <strong>How big is your team?</strong> <strong style="color: #b23cfd;">Just me / 1 person 👤</strong>
    </div>

        </div>

        <!-- STEP 4: API VALIDATION & ERROR SIMULATION IN POSTMAN -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ff4d4d !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #ff4d4d !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        🧪 STEP 4: API Validation & Error Simulation Test
    </h3>
    <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
        <strong>Layunin ng Test:</strong> Sinasadya nating magpadala ng maling data sa server upang makita kung paano ito hahawakan ng Laravel API, at upang masiguradong magbabalik ito ng malinis na error message sa format na JSON [INDEX].
    </p>

    <!-- TAB FLOW CHART -->
    <div style="background: #111; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.7; color: #c9d1d9; margin-bottom: 15px;">
        <span style="color: #0dcaf0; font-weight: bold; display: block; margin-bottom: 6px;">📋 Bahagi A: Pagtatakda ng API Headers (Ang Susi sa JSON Response)</span>
        1. Sa ilalim ng URL bar ng Postman, i-click ang tab ng <strong style="color: #ffffff;">Headers</strong>.<br>
        2. Tiyaking nakalagay o huwag burahin ang awtomatikong row na:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;• <strong>Key:</strong> <code style="color: #61dafb;">Content-Type</code> &nbsp;|&nbsp; <strong>Value:</strong> <code style="color: #9cdcfe;">application/json</code><br>
        3. Magdagdag ng bagong empty row at i-type ang pinakamahalagang parameter:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;• <strong>Key:</strong> <code style="color: #ffaa00;">Accept</code> &nbsp;|&nbsp; <strong>Value:</strong> <code style="color: #9cdcfe;">application/json</code>
    </div>

    <!-- CRITICAL TIP BOX -->
    <div style="background: #241c10; padding: 12px; border-radius: 6px; border: 1px solid rgba(255, 170, 0, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-bottom: 15px;">
        <span style="color: #ffaa00; font-weight: bold; display: block; margin-bottom: 4px;">💡 BAKIT KAILANGAN ANG "ACCEPT: APPLICATION/JSON"?</span>
        Kung wala itong header na ito, kapag nag-error ang Laravel, ang ibabalik nito sa Postman ay isang buong **HTML structure/web page** (yung pulang error page ng Laravel) [INDEX]. Kapag may <code style="color: #ffffff;">Accept: application/json</code>, pinupwersa natin si Laravel na magbabalik lang siya ng maayos na text array ng mga errors [INDEX].
    </div>

    <!-- INVALID DATA SIMULATION -->
    <div style="background: #111; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.7; color: #c9d1d9;">
        <span style="color: #ff4d4d; font-weight: bold; display: block; margin-bottom: 6px;">📦 Bahagi B: Pagpapadala ng Invalid (Maling) Data Payload</span>
        1. Lumipat sa tab na <strong style="color: #ffffff;">Body</strong>, piliin ang opsyong <strong style="color: #0dcaf0;">raw</strong>, at ibagay ang dropdown sa <strong style="color: #0dcaf0;">JSON</strong>.<br>
        2. I-paste ang sadyang maling dataset na ito para subukan ang validator ng system:
        
        <pre style="position: relative; background: #0d1117; padding: 12px; border: 1px solid #2d2d2d; border-radius: 4px; overflow-x: auto; margin-top: 10px;"><code style="color: #ff4d4d; font-family: monospace;">{
    "name": "",             // Bawal na walang pangalan
    "price": "hello",        // Bawal ang letra sa presyo
    "stock": -10,           // Bawal ang negative na bilang
    "reorder_level": 5,
    "category_id": 999      // Bawal ang ID na hindi umiiral
}</code></pre>
        3. Pindutin ang pindutan ng <strong style="color: #198754;">Send</strong> at suriin ang tugon ng server sa ibaba!
    </div>
</div>

<!-- CHAPTER 3: ANG STRUKTURA AT WORKFLOW NG REST API -->
<h2 style="color: #ffaa00; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
    📁 REST API Chapter 3 — Complete Files Structure & Execution Workflow
</h2>

<!-- SECTION A: FILE MAP -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ffaa00 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #ffaa00 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        🗺️ Part A: Ang Mapa ng mga Ginawang Files at Folder
    </h3>
    <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
        Narito ang kumpletong listahan ng mga files na ginamit at binuo ninyo sa training, kasama ang kanilang mga simpleng tungkulin:
    </p>

    <div style="background: #0d1117; padding: 16px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', 'Courier New', monospace; font-size: 13px; line-height: 1.8; color: #c9d1d9;">
        <!-- ROUTES -->
        🌐 <span style="color: #61dafb; font-weight: bold;">routes/api.php</span><br>
        <span style="color: #888; padding-left: 20px; display: block; margin-bottom: 8px;">↳ <strong>Ang Gwardya ng URL:</strong> Dito nakalista ang lahat ng endpoints (URLs) na tinatawag mo sa Postman (gaya ng /api/login o /api/products).</span>

        <!-- CONTROLLER -->
        🎮 <span style="color: #0dcaf0; font-weight: bold;">app/Http/Controllers/Api/ProductController.php</span><br>
        <span style="color: #888; padding-left: 20px; display: block; margin-bottom: 8px;">↳ <strong>Ang Utak/Traffic Cop:</strong> Ito ang nagpapasya kung anong data ang kukunin, ise-save, o babaguhin base sa request ng Postman.</span>

        <!-- REQUESTS -->
        🛡️ <span style="color: #ff4d4d; font-weight: bold;">app/Http/Requests/Api/ProductRequest.php</span> &amp; <span style="color: #ff4d4d; font-weight: bold;">UpdateProductRequest.php</span><br>
        <span style="color: #888; padding-left: 20px; display: block; margin-bottom: 8px;">↳ <strong>Ang Bouncer / Filter ng Data:</strong> Sila ang sumusuri kung tama ba ang format ng ipinadala mong data sa Body (gaya ng bawal ang blangkong pangalan).</span>

        <!-- MODELS -->
        🗄️ <span style="color: #198754; font-weight: bold;">app/Models/User.php</span> &amp; <span style="color: #198754; font-weight: bold;">Product.php</span><br>
        <span style="color: #888; padding-left: 20px; display: block; margin-bottom: 8px;">↳ <strong>Ang Tulay sa Database:</strong> Sila ang may direktang linya sa database para kumuha o mag-save ng totoong records ng Users at Products.</span>

        <!-- RESOURCES -->
        💎 <span style="color: #b23cfd; font-weight: bold;">app/Http/Resources/ProductResource.php</span><br>
        <span style="color: #888; padding-left: 20px; display: block;">↳ <strong>Ang Make-up Artist ng JSON:</strong> Siya ang nag-aayos ng itsura ng data bago ito tuluyang ibalik sa Postman (tinatago ang mga sensitibong column gaya ng password o timestamps).</span>
    </div>
</div>

<!-- SECTION B: WORKFLOW SIMULATION -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #198754 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #198754 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        🔄 Part B: Paano Sila Nag-uusap sa Likod ng mga Success Tests Mo?
    </h3>
    <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
        Narito ang eksaktong kuwento sa likod ng bawat tagumpay (Success) na nakita mo sa Postman screen:
    </p>

    <!-- FLOW 1: LOGIN -->
    <div style="background: #111; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.6; margin-bottom: 15px; color: #dcdcdc;">
        <strong style="color: #0dcaf0;">🔐 1. Ang Login & Token Workflow (Success Login)</strong><br>
        • Nagpadala ka ng email at password sa Postman.<br>
        • Binasa ito ng <code style="color: #61dafb;">api.php</code> at ipinasa sa Controller.<br>
        • Sinuri ng Controller gamit ang <code style="color: #198754;">User Model</code> kung tugma ang records sa database.<br>
        • Noong nag-match, gumawa si Laravel ng isang random encrypted string o **Token** (via Sanctum) at ibinalik ito sa Postman mo bilang JSON.
    </div>

    <!-- FLOW 2: BEARER TOKEN -->
    <div style="background: #111; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.6; margin-bottom: 15px; color: #dcdcdc;">
        <strong style="color: #b23cfd;">🛡️ 2. Ang Paggamit ng Token (Bearer Token Authentication)</strong><br>
        • Kinuha mo ang Token at inilagay sa **Authorization (Bearer Token)** tab sa Postman.<br>
        • Noong nag-request ka ng <code style="color: #ffffff;">GET /api/products</code>, nakita ng middleware na may pass card (Token) ka.<br>
        • Binigyan ka ng permiso na makapasok at makita ang listahan ng mga produkto. Kung wala kang token, bibigyan ka nito ng `419` o `401 Unauthorized` block page.
    </div>

    <!-- FLOW 3: FULL CRUD -->
    <div style="background: #111; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
        <strong style="color: #ffaa00;">📦 3. Ang CRUD Lifecycle (GET, POST, PATCH)</strong><br>
        • <strong>GET:</strong> Humingi ka ng data ➡️ dumaan sa Model ➡️ inayusan ni <code style="color: #b23cfd;">ProductResource</code> ➡️ lumabas ang malinis na JSON sa Postman.<br>
        • <strong>POST / PATCH:</strong> Nagpadala ka ng bagong data o update ➡️ sinalo ito ni <code style="color: #ff4d4d;">ProductRequest</code> para suriin kung valid ➡️ kapag nakapasa, in-update o ni-save ng Model sa database ➡️ nagbalik ng `201 Created` o `200 OK` status message.
    </div>
</div>

  

        <!-- NEXT STEP PLACEHOLDER -->
        <div style="border: 1px dashed #444; background: #141414; padding: 20px; border-radius: 6px; text-align: center; margin-bottom: 25px;">
            <p style="font-size: 13px; color: #666; font-style: italic; margin: 0;">
                Aantayin ko ang karugtong mo, bro! Sabihin mo sa akin kung ano pa ang mga sumunod na pinili at ginawa ninyo para gawan natin agad ng STEP 4 dito.
            </p>
        </div>

        <!-- BACK BUTTON -->
        <div class="text-center" style="margin-top: 30px;">
            <a href="/" style="display: inline-block; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #3c3c3c; padding: 10px 20px; border-radius: 4px; background: #222;">
                ← Bumalik sa Dashboard
            </a>
        </div>

    </div>


    
</div>
@endsection