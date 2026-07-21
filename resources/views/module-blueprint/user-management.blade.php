@extends('layouts.app')

@section('title', 'User Management Module Blueprint - DevCommands')

@section('content')

<div class="container">

    <!-- MAIN PAGE TITLE FOR INVENTORY SALES STRUCTURE -->
    <div class="mb-5 text-center" style="margin-top: 50px;">
        <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
            📂 Project Inventory Sales
        </h1>
        <p class="text-muted" style="font-size: 15px; margin-top: 5px; color: #a5a5a5 !important;">
            Master cheat sheet para sa mga files at folder structures ng aming application.
        </p>
    </div>

    <!-- === USER MANAGEMENT COMPONENT BOX === -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ff79c6 !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 18px; font-weight: 700; color: #ff79c6 !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            👥 User Management Feature
        </h3>
        
        <!-- 💡 SIMPLE EXPLANATION BOX -->
        <div style="background: #24141e; padding: 12px; border-radius: 6px; border: 1px solid rgba(255, 121, 198, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-top: -10px; margin-bottom: 25px;">
            <span style="color: #ff79c6; font-weight: bold; display: block; margin-bottom: 4px;">🧠 Ano ang User Management Module?</span>
            <p style="margin: 0; color: #b3b3b3;">
                Ito ang namamahala sa pag-create, update, view, at delete (CRUD) ng mga system users. Dito rin ikinakabit ang mga ginawang Posisyon (Roles) sa mga partikular na account upang malaman kung ano ang maaari nilang galawin sa buong web application.
            </p>
        </div>

        <!-- THE COMPLETE FILES LIST -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px;">
            📄 Mga Files na Ginalaw at Ginawa:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626;">
            <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Dito nilagay ang route papuntang User Management)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/UserController.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Resource Controller para sa User CRUD)</span></div>
            <div style="color: #ffc107;">Document 📄 database/seeders/PermissionSeeder.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Nagdagdag ng mga bagong permission para sa mga users)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/users/index.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang mismong UI page para sa listahan ng mga users)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/users/create.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang UI form page para sa pag-create ng bagong User)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/users/edit.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang UI form page para sa pag-edit ng detalye ng existing User)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/users/reset-password.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang UI page para sa pag-reset ng password ng User)</span></div>

            <div style="color: #bd93f9;">Document 📄 app/Http/Requests/UserStoreRequest.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Dito nakalagay ang mga validation rules para sa pag-store ng bagong User)</span></div>
            <div style="color: #bd93f9;">Document 📄 app/Http/Requests/UserUpdateRequest.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Dito nakalagay ang mga validation rules para sa pag-update ng existing User)</span></div>
            <div style="color: #bd93f9;">Document 📄 app/Http/Requests/ResetPasswordRequest.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Dito nakalagay ang mga validation rules para sa pag-reset ng password ng User)</span></div>

        </div>

        <!-- ARTISAN COMMANDS -->
        <h4 style="color: #2ecc71; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            💻 Artisan Commands:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Resource Controller ng mga Users:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:controller UserController --resource</code></pre>
            </div>
            
            <div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Form Request Validation file:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:request UserStoreRequest</code></pre>
</div>


<div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Form Request Validation file para sa pag-update:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:request UserUpdateRequest</code></pre>
</div>

<div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Form Request Validation file para sa password reset:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:request ResetPasswordRequest</code></pre>
</div>

        </div>

        <!-- NAVIGATION BACK HOME -->
        <div style="border-top: 1px solid #2d2d2d; padding-top: 20px; text-align: left;">
            <a href="/" style="font-size: 13px; color: #a5a5a5; text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#a5a5a5'">
                ⬅️ Bumalik sa Main Menu
            </a>
        </div>

    </div>

</div>

@endsection
