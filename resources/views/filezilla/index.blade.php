@extends('layouts.app')

@section('title', 'FileZilla SFTP Guide - DevCommands')

@section('content')
<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-cyan" style="color: #0dcaf0 !important;">📂 FileZilla SFTP & Local Workflow</h1>
    <p class="text-muted">Kumpletong gabay para sa visual file management gamit ang FileZilla at ang tamang hakbang para mag-transfer ng specific folders at mag-migrate gamit ang PowerShell.</p>
</div>

<!-- SECTION 1: INSTALLATION & QUICKCONNECT -->
<div class="mb-5">
    <h2 class="section-title">🛠️ Seksyon 1: Pag-install at Pag-connect sa Hostinger</h2>
    <p class="text-muted mb-4">Paano i-setup ang libreng FileZilla Client gamit ang iyong secure credentials nang walang sabit sa Windows Defender.</p>
    
    <div class="card mb-4">
        <h4 class="card-title">1. Ligtas na Pag-install (Windows SmartScreen Bypass)</h4>
        <p class="card-text">Kapag nagda-download galing sa browser at lumabas ang asul na box na <em>"Windows protected your PC"</em>, huwag matakot dahil 100% safe ang FileZilla. I-click lang ang <strong>"More info"</strong> tapos piliin ang <strong>"Run anyway"</strong>. Sa installer, piliin ang <strong>"Anyone who uses this computer"</strong> para standard ang setup.</p>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. Quickconnect Configuration Settings</h4>
        <p class="card-text">Buksan ang FileZilla at i-type ang credentials sa pinaka-itaas na Quickconnect bar gamit ang saktong format na ito:</p>
        <pre><code>Host:     <span class="ans">sftp://145.79.28.207</span> (🚨 Dapat may sftp:// sa unahan!)
Username: <span class="ans">u180948312</span>
Password: <span class="ans">iyong_hostinger_ssh_password</span>
Port:     <span class="ans">65002</span></code></pre>
        <p class="text-muted" style="font-size: 14px; margin-top: 5px;">💡 I-click ang <strong>Quickconnect</strong> at i-check ang <em>"Always trust this host"</em> kapag nagtanong ng authorization pop-up.</p>
    </div>
</div>

<!-- SECTION 2: SINGLE FILE / FOLDER TRANSFER -->
<div class="mb-5">
    <h2 class="section-title">🔄 Seksyon 2: Pag-transfer ng Isang Folder o Isang File Lang</h2>
    <p class="text-muted mb-4">🚨 <strong>VERY IMPORTANT DEV RULE:</strong> Huwag na huwag mong i-o-upload ang buong project folder o ang <code>.env</code> file ng local mo sa server dahil masisira ang live connection ng database ng client.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. Paano Mag-upload ng Isang File Lang (Halimbawa: Controller)</h4>
        <p class="card-text">Upang hindi magbura o mag-overlap ang ibang live files, i-upload lang kung anong file ang mismong ginalaw mo sa local PC mo:</p>
        <p class="text-light" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #0dcaf0; margin: 10px 0;">
            ➔ Sa <strong>Kaliwang Bahagi (PC)</strong>, mag-navigate sa: <code>xampp/htdocs/practice_laravel_app/app/Http/Controllers/</code><br>
            ➔ Sa <strong>Kanang Bahagi (Hosting)</strong>, pumasok sa kaparehong folder: <code>practice_laravel_app/app/Http/Controllers/</code><br>
            ➔ I-right click ang <code>ProductController.php</code> sa kaliwa at piliin ang <strong>Upload</strong> (o i-drag pakanan gamit ang mouse).
        </p>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. Paano Mag-upload ng Isang Buong Folder Lang (Halimbawa: Views)</h4>
        <p class="card-text">Kapag gumawa ka ng bagong folder para sa mga bagong blade files ng iyong module, pwede mo itong ihagis nang buo:</p>
        <p class="text-light" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #0dcaf0; margin: 10px 0;">
            ➔ Sa <strong>Kaliwa (PC)</strong>, pumunta sa: <code>resources/views/</code><br>
            ➔ Sa <strong>Kanan (Hosting)</strong>, pumunta rin sa: <code>resources/views/</code><br>
            ➔ I-right click ang bagong gawang folder (hal. <code>product</code> folder) sa kaliwa at piliin ang <strong>Upload</strong>.<br>
            ➔ Awtomatikong makokopya ang folder kasama ang lahat ng blade files sa loob nito nang hindi nagagalaw ang ibang views ng server.
        </p>
    </div>
</div>

<!-- SECTION 3: MIGRATIONS & CACHE VIA POWERSHELL -->
<div class="mb-5">
    <h2 class="section-title">💾 Seksyon 3: Pagpapatakbo ng Migrations at Cache Clear</h2>
    <p class="text-muted mb-4">Matapos mai-transfer ang mga binagong files via FileZilla, kailangan mong gamitin ang Windows PowerShell para sa huling dalawang selyo dahil hindi kaya ng FileZilla na magpatakbo ng database commands.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. Patakbuhin ang Bagong Database Tables (Migrate)</h4>
        <p class="card-text">Dahil nag-upload ka ng bagong migration file para sa Product Module, i-execute ito sa PowerShell para magawa ang totoong table sa MySQL server ng Hostinger nang hindi nabubura ang mga lumang records:</p>
        <pre><code>ssh -p 65002 u180948312@145.79.28.207
cd ~/practice_laravel_app
php artisan migrate</code></pre>
        <p class="text-muted" style="font-size: 14px; margin-top: 5px;">⚠️ Kapag nagtanong ng <code>Are you sure you want to run this command?</code>, i-type ang <code>yes</code> at mag-enter.</p>
    </div>

    <div class="card mb-4 border-warning" style="border: 1px solid #ffc107 !important;">
        <h4 class="card-title" style="color: #ffc107;">2. I-clear ang Optimization Cache (MANDATORY)</h4>
        <p class="card-text">Madalas na na-ca-cache ng Hostinger ang mga lumang controllers kaya hindi agad lumilitaw ang bago mong inupload na Product Module. Patakbuhin ito para piliting basahin ng internet ang bago mong lines ng code:</p>
        <pre><code>php artisan optimize:clear</code></pre>
    </div>
</div>
@endsection
