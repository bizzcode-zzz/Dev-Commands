@extends('layouts.app')

@section('title', 'Logs Module Blueprint - DevCommands')

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

    <!-- === LOGS COMPONENT BOX === -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ff6e4a !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 18px; font-weight: 700; color: #ff6e4a !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🛡️ Logs Feature
        </h3>
        
        <!-- 💡 SIMPLE EXPLANATION BOX -->
        <div style="background: #241814; padding: 12px; border-radius: 6px; border: 1px solid rgba(255, 110, 74, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-top: -10px; margin-bottom: 25px;">
            <span style="color: #ff6e4a; font-weight: bold; display: block; margin-bottom: 4px;">🧠 Ano ang Logs Module?</span>
            <p style="margin: 0; color: #b3b3b3;">
                Ito ang nagtatala ng mga aktibidad at mahahalagang pangyayari (Activity Logs) sa loob ng system upang malaman kung sino, kailan, at anong aksyon ang ginawa sa mga data [INDEX].
            </p>
        </div>

        <!-- THE COMPLETE FILES LIST -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px;">
            📄 Mga Files na Ginalaw at Ginawa:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626;">
            <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Dito nilagay ang route papuntang Logs Module)</span></div>
            
            <div style="color: #2ecc71;">Document 📄 app/Models/ActivityLog.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Eloquent Model para sa records ng logs)</span></div>
            <div style="color: #ffc107;">Document 📄 database/migrations/xxxx_xx_xx_xxxxxx_create_activity_logs_table.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Migration file para sa istraktura ng logs table)</span></div>
            <div style="color: #f1fa8c;">Document 📄 app/Services/ActivityLogger.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Custom Service file na may central logic para sa pag-record ng system logs)</span></div>
            <div style="color: #f1fa8c;">Document 📄 app/Services/AuditTrailService.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Custom Service file para sa karagdagang logic at tracking ng Audit Trails)</span></div>

            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ProductController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/CategoryController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/SupplierController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/PurchaseController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/SalesController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/UserController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>use App\Services\ActivityLogger;</code> sa itaas at naglagay ng logging code sa loob ng mga functions para mag-record ng aksyon)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ActivityLogController.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Controller na kukuha ng mga logs mula sa database para i-display sa UI)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/activity-logs/index.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang mismong pangunahing UI page kung saan ipapakita ang listahan ng mga system logs)</span></div>

        </div>

        <!-- ARTISAN COMMANDS -->
        <h4 style="color: #2ecc71; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            💻 Artisan Commands:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Model kasama ang Migration table:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:model ActivityLog -m</code></pre>
            </div>
            <div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang custom Service class para sa logger logic:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:class Services/ActivityLogger</code></pre>
</div>

<div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Controller ng Activity Logs:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:controller ActivityLogController</code></pre>
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
