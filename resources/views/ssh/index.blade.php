@extends('layouts.app')

@section('title', 'Laravel Hostinger Deployment Cheat Sheet - DevCommands')

@section('content')

<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-green">🔑 Laravel Hostinger Deployment Guide</h1>
    <p class="text-muted">Laravel Installation Cheat Sheet v1.0 — Propesyonal na gabay para sa pag-deploy ng application mula sa GitHub patungong Hostinger Premium Shared Hosting gamit ang Windows PowerShell.</p>
</div>


<!-- SEKSYON 0: PRE-DEPLOYMENT SETUP (HOSTINGER hPANEL) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #ffc107;">🌐 Seksyon 0: Pre-Deployment Setup sa Hostinger hPanel</h2>
    <p class="text-muted mb-4">Ito ang pinaka-unang hakbang sa browser (Hostinger Dashboard) bago buksan ang PowerShell. Kung laktawan ito, magkakaroon ng error na <em>Connection Refused</em>.</p>
    
    <!-- Step 1: Enable SSH -->
    <div class="card mb-4">
        <h4 class="card-title">1. I-enable ang SSH Access</h4>
        <p class="card-text">Naka-disable ang SSH sa Hostinger sa simula. Kailangan itong buhayin sa browser settings mo:</p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ffc107; margin-top: 10px; color: #ffffff !important;">
            ➔ Mag-login sa Hostinger hPanel (://hostinger.com)<br>
            ➔ Pumunta sa Websites ➔ I-click ang Manage sa tabi ng iyong domain<br>
            ➔ Sa kaliwang menu, hanapin at i-click ang Advanced ➔ SSH Access<br>
            ➔ I-click ang button na "Enable" para maging kulay green o Enabled ang status nito
        </p>
    </div>

    <!-- Step 2: Database Creation -->
    <div class="card mb-4">
        <h4 class="card-title">2. Gumawa ng Bagong MySQL Database</h4>
        <p class="card-text">Gumawa agad ng database sa Hostinger panel para may paglagyan ng tables sa Seksyon 3:</p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #666; margin-top: 10px; color: #ffffff !important;">
            ➔ Sa kaliwang menu ng hPanel, pumunta sa Databases ➔ Management<br>
            ➔ Sa ilalim ng "Create a New MySQL Database", ilagay ang mga detalye:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;• MySQL Database: <span class="ans">inventory</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;• MySQL Username: <span class="ans">bizzadmin</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;• Password: <span class="ans">iyong_secure_password</span><br>
            ➔ I-click ang Create. Tandaan ang nabuong buong database name (hal. u180948312_inventory).
        </p>
    </div>
</div>


 

<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-green">🔑 Laravel Hostinger Deployment Guide</h1>
    <p class="text-muted">Laravel Installation Cheat Sheet v1.0 — Propesyonal na gabay para sa pag-deploy ng application mula sa GitHub patungong Hostinger Premium Shared Hosting gamit ang Windows PowerShell.</p>
</div>

<!-- SECTION 1: SERVER ACCESS & PRACTICE CLONING -->
<div class="mb-5">
    <h2 class="section-title">🖥️ Seksyon 1: Server Access at Pag-clone ng Proyekto</h2>
    <p class="text-muted mb-4">Mga unang hakbang para makapasok sa Hostinger terminal via PowerShell at paghanda sa hiwalay na practice environment.</p>
    
    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 1 - SSH Login</h4>
        <p class="card-text">Buksan ang Windows PowerShell sa iyong PC at i-run ang login command gamit ang iyong Hostinger Port at credentials. ✅ Pareho lang.</p>
        <pre><code>ssh -p <span class="ans">65002</span> <span class="ans">u180948312</span>@<span class="ans">145.79.28.207</span></code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 2 - Go to Home Directory</h4>
        <p class="card-text">Siguraduhing nasa pinaka-root o home directory ka ng iyong hosting account. ✅ Pareho lang.</p>
        <pre><code>cd ~</code></pre>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 3 - Tingnan muna ang laman ng Home</h4>
        <p class="card-text"><strong>Bakit?</strong> Para makita mo muna kung nandiyan pa ang <code>laravel_app</code> at para hindi tayo magkamali ng folder.</p>
        <pre><code>ls</code></pre>
    </div>

    <!-- Step 4 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 4 - Create Practice Folder</h4>
        <p class="card-text">Hindi ito <code>mkdir laravel_app</code> ❌ (Dahil iyon ang live). Ito ang tama: ✅</p>
        <pre><code>mkdir <span class="ans">practice_laravel_app</span></code></pre>
    </div>

    <!-- Step 5 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 5 - Enter Practice Folder</h4>
        <p class="card-text">Pumasok sa loob ng bagong gawang directory. ✅</p>
        <pre><code>cd ~/<span class="ans">practice_laravel_app</span></code></pre>
    </div>

    <!-- Step 6 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 6 - Clone Repository</h4>
        <p class="card-text">I-download ang iyong repository code mula sa GitHub. Ang tuldok (<code>.</code>) sa dulo ay mahalaga. ✅ Pareho lang.</p>
        <pre><code>git clone <span class="ans">https://github.com/bizzcode-zzz/BizzSoft-Inventory-Management-System-V4.git</span> .</code></pre>
    </div>
</div>

<!-- SECTION 2: DEPENDENCIES & ENVIRONMENT SETUP -->
<div class="mb-5">
    <h2 class="section-title">⚙️ Seksyon 2: Dependencies at Environment Setup (.env)</h2>
    <p class="text-muted mb-4">Pag-install ng core PHP packages at pag-configure ng application settings para sa practice environment.</p>

    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 7 - Install Composer</h4>
        <p class="card-text">I-install ang lahat ng PHP dependencies nang walang testing packages para sa optimized configuration. ✅ Pareho lang.</p>
        <pre><code>composer install --no-dev --optimize-autoloader</code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 8 - Verify Laravel</h4>
        <p class="card-text">I-check kung gumagana nang maayos ang framework at tingnan ang bersyon nito. ✅</p>
        <pre><code>php artisan --version</code></pre>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 9 - Create .env</h4>
        <p class="card-text">Kopyahin ang template file para gumawa ng iyong aktwal na configuration file. ✅</p>
        <pre><code>cp .env.example .env</code></pre>
    </div>

    <!-- Step 4 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 10 - Edit .env</h4>
        <p class="card-text">Buksan ang editor sa terminal para baguhin ang mga settings ng iyong app.</p>
        <pre><code>nano .env</code></pre>
    </div>

    <!-- Instructions Inside Nano -->
    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">📝 Paano I-edit ang .env (VERY IMPORTANT!!)</h4>
        <p class="card-text">Dito ilalagay mo ang mga bagong setup values na nakaturo sa practice domains at database credentials mo:</p>
        <pre><code>APP_NAME=Laravel
APP_ENV=<span class="ans">production</span>
APP_KEY=...
APP_DEBUG=<span class="ans">true</span>
APP_URL=<span class="ans">https://practice.bizzsoft.dev</span> <small class="text-muted">(dapat ingon ani gyod kong lahi ang domain alisdan pod ni)</small>

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=<span class="ans">u180948312_practice</span>
DB_USERNAME=<span class="ans">u180948312_practice</span>
DB_PASSWORD=<span class="ans">iyong_practice_db_password</span></code></pre>
        <p class="text-muted" style="font-size: 14px; margin-top: 10px;">💡 <em>Tip sa Nano:</em> Pagkatapos mag-edit, pindutin ang <code>Ctrl + O</code> tapos <code>Enter</code> para i-save, at <code>Ctrl + X</code> para lumabas.</p>
    </div>
</div>

<!-- SECTION 3: DATABASE CONFIGURATION & MIGRATION -->
<div class="mb-5">
    <h2 class="section-title">💾 Seksyon 3: Database Configuration at Migrations</h2>
    <p class="text-muted mb-4">Pagbuo ng app security definitions at pagkakarga ng database schemas.</p>

    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 11 - Generate App Key</h4>
        <p class="card-text">Gumawa ng natatanging security encryption key para sa seguridad ng core system. ✅</p>
        <pre><code>php artisan key:generate</code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 12 - Run Migrations</h4>
        <p class="card-text"><strong>Ngayon mo mararamdaman ang advantage ng SSH!</strong> Hindi mo na kailangang: Export SQL / Import SQL 😂 Isang command lang. ✅</p>
        <pre><code>php artisan migrate</code></pre>
        <p class="text-muted" style="font-size: 14px; margin-top: 5px;">⚠️ Kapag nagtanong ng: <code>Are you sure you want to run this command?</code>, i-type ang <code>yes</code> at pindutin ang Enter.</p>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 13 - (Optional) Seed Database</h4>
        <p class="card-text">Kung may seeders para sa dummy or initial system content, i-run ang isa sa mga sumusunod:</p>
        <pre><code>php artisan db:seed</code></pre>
        <p class="card-text text-muted my-2">O kaya ay sabay na migration at seeding sa isang bagsakan:</p>
        <pre><code>php artisan migrate --seed</code></pre>
    </div>
</div>

<!-- SECTION 4: SUBDOMAIN PATH CONFIGURATION -->
<div class="mb-5">
    <h2 class="section-title">🚀 Seksyon 4: Public Routing at Domain Linking</h2>
    <p class="text-muted mb-4">Pangwakas na hakbang para itulay ang iyong subdomain folder patungong core app system directory.</p>

    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 14 - Copy Public Files</h4>
        <p class="card-text">Kopyahin ang file paths <strong>Mula sa:</strong> <code>practice_laravel_app/public</code> ➔ <strong>Papunta sa:</strong> <code>public_html/practice</code>. Contents lang ang kopyahin, hindi ang buong public folder.</p>
        <pre><code>cp -r ~/practice_laravel_app/public/* ~/public_html/practice/</code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 15 - Edit index.php</h4>
        <p class="card-text">Buksan ang index configuration file ng iyong public subdomain directory:</p>
        <pre><code>nano ~/public_html/practice/index.php</code></pre>
    </div>

    <!-- Index.php Path Changes -->
    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">📝 Paano Baguhin ang Paths sa index.php</h4>
        <p class="card-text">Magbubukas ang file sa loob mismo ng PowerShell. Gamitin mo lang ang Arrow Keys (Up, Down, Left, Right) sa keyboard mo para itapat ang cursor sa linyang babaguhin.</p>
        <pre><code>require <span class="ans">'/home/u180948312/practice_laravel_app/vendor/autoload.php'</span>;

$app = require_once <span class="ans">'/home/u180948312/practice_laravel_app/bootstrap/app.php'</span>;</code></pre>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 16 - (Optional)Storage Link</h4>
        <p class="card-text">I-execute ito kung gumagamit ang iyong application ng file or image uploads sa user engine setup.</p>
        <pre><code>php artisan storage:link</code></pre>
    </div>

    <!-- Step 4 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 17 - Optimize</h4>
        <p class="card-text">I-cache ang system rules at variables para sa mabilis na integration performance load.</p>
        <pre><code>php artisan optimize</code></pre>
    </div>

    <!-- Step 5 -->
    <div class="card mb-4">
        <h4 class="card-title">STEP 18 - Test Project</h4>
        <p class="card-text">Buksan ang web browser at i-access ang practice app subdomain address link.</p>
        <pre><code><span class="ans">https://practice.bizzsoft.dev</span></code></pre>
    </div>
</div>

<div class="alert text-center py-4" style="background-color: #1a3a2a; border: 1px solid #2ecc71; border-radius: 8px;">
    <h3 style="color: #2ecc71; font-weight: bold; margin-bottom: 5px;">✅ Installation Complete!</h3>
    <p class="text-light" style="font-size: 15px;">Konektado, plantsado, at 100% nang live ang iyong Laravel Application sa Hostinger server!</p>
</div>

<!-- SECTION 5: CODE UPDATES WORKFLOW -->
<div class="mb-5">
    <h2 class="section-title" style="color: #34e771;">🔄 Seksyon 5: Tamang Flow ng Pag-update ng Code (Maintenance)</h2>
    <p class="text-muted mb-4">Gabay kung paano mag-akyat ng mga bagong binago mong code mula sa iyong Local Computer patungo sa live Hostinger website nang hindi nagre-reinstall o nagbubura ng configuration.</p>

    <div class="card mb-4">
        <h4 class="card-title" style="color: #0dcaf0;">PART A — SA LOOB NG IYONG LOCAL PC (VS Code Terminal)</h4>
        <p class="card-text">Kapag may binago, inayos, o idinagdag kang feature sa code mo sa iyong computer, i-run ang mga ito para umakyat ang update sa GitHub repository mo:</p>
        <pre><code>git add .
git commit -m <span class="ans">"Inupdate ko ang code"</span>
git push origin main</code></pre>
    </div>

        <!-- PART B: POWERSHELL WORKFLOW WITH SSH ZIP BACKUP & EMERGENCY RESTORE -->
    <div class="card mb-4 border-success">
        <h4 class="card-title" style="color: #198754;">PART B — SA LOOB NG WINDOWS POWERSHELL (Naka-SSH sa Hosting)</h4>
        <p class="card-text">Ngayong nasa GitHub na ang bago mong code, mag-login sa PowerShell, gumawa ng mabilisang server-side backup, at i-run ang pull para sipsipin ng Hostinger ang mga updates:</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 5px;">1. Mag-login via SSH at pumasok sa Home Directory (Tilde <code>~</code>):</p>
        <pre><code>ssh -p 65002 u180948312@145.79.28.207
cd ~</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 5px;">2. (🚀 MANDATORY BACKUP) I-zip o ibalot ang buong folder ng application bago humila ng kahit anong update para may 'save point' ka sa loob ng server kung sakaling mag-error ang site:</p>
        <pre><code>zip -r <span class="ans">practice_laravel_backup.zip</span> practice_laravel_app</code></pre>
        <p class="text-muted" style="font-size: 13px;">💡 Ang flags na <code>-r</code> ay ibig sabihin 'recursive' para isama ang lahat ng subfolders sa loob. May mabubuo ka nang solid na backup file na nakatago nang ligtas sa server mo.</p>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 5px;">3. Pumasok sa iyong working practice application folder:</p>
        <pre><code>cd ~/practice_laravel_app</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 5px;">4. (Optional pero recommended) I-check kung nandoon ka ba sa tamang 'main' branch bago mag-pull:</p>
        <pre><code>git branch</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 5px;">5. Hilahin ang mga bagong lines ng code mula sa GitHub nang hindi nagagalaw ang live .env file mo:</p>
        <pre><code>git pull origin main</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 5px;">6. I-clear at i-refresh ang memory cache para piliting basahin agad ng website ang bagong files:</p>
        <pre><code>php artisan optimize:clear</code></pre>

        <!-- EMERGENCY RESTORATION SUB-CARD INSIDE PART B -->
        <div style="margin-top: 25px; padding: 15px; background-color: #2b1616; border: 1px solid #ff4d4d; border-radius: 6px;">
            <h5 style="color: #ff4d4d; font-size: 16px; margin-bottom: 8px;">🚨 EMERGENCY RESTORATION PROTOCOL (Kung Sakaling Mag-error Pagka-pull)</h5>
            <p class="text-muted" style="font-size: 14px; margin-bottom: 12px;">Kung biglang nag-crash, nag-white screen, o nag-500 server error ang website pagkatapos mong mag-update, i-run itong sunod-sunod na commands sa PowerShell para i-restore ang ginawa nating ZIP backup sa Step 2:</p>
            
            <p class="text-light" style="font-size: 13px; margin-bottom: 3px;">➔ Bumalik sa pinaka-home directory ng Hostinger server:</p>
            <pre style="background-color: #121212;"><code>cd ~</code></pre>
            
            <p class="text-light" style="font-size: 13px; margin-top: 10px; margin-bottom: 3px;">➔ Pwersahang burahin ang folder na nag-e-error galing sa git pull (recursive force):</p>
            <pre style="background-color: #121212;"><code>rm -rf practice_laravel_app</code></pre>
            
            <p class="text-light" style="font-size: 13px; margin-top: 10px; margin-bottom: 3px;">➔ I-extract o i-unzip ang malinis mong orihinal na backup file:</p>
            <pre style="background-color: #121212;"><code>unzip practice_laravel_backup.zip</code></pre>
            
            <p class="text-light" style="font-size: 13px; margin-top: 10px; margin-bottom: 3px;">➔ Pumasok sa binalik na folder at i-flush ang cache para mabuhay agad ang live site:</p>
            <pre style="background-color: #121212;"><code>cd ~/practice_laravel_app
php artisan optimize:clear</code></pre>
            <p class="text-muted" style="font-size: 13px; margin-top: 5px;">🎉 Pagkatapos nito, instant na babalik sa 100% ligtas na estado ang system ng client na parang walang nangyari!</p>
        </div>
    </div>

</div>

@endsection
