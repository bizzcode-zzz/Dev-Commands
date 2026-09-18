@extends('layouts.app')

@section('title', 'Dashboard - DevCommands')

@section('content')
<div class="text-center mb-5">
    
    <h1 class="page-title animated-logo" style="-webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 42px;">🚀 Welcome to DevCommands for Ajman_Bizz</h1>

    <p class="text-muted" style="font-size: 18px; max-width: 700px; margin: 20px auto 0;">
        Isang malinis at madaling cheat sheet para sa iyong development workflows. Gamitin ang mga button sa navigation bar sa itaas o ang mga card sa ibaba para magsimula.
    </p>
</div>

<div class="card-grid">
    <!-- Git Card -->
    <div class="card">
        <h3 class="card-title text-cyan">📁 GITHUB REVIEWER</h3>
        <p class="card-text">I-review ang mga mahahalagang commands para sa branch management, staging, commits, at remote repositories.</p>
        <a href="/github" class="card-btn cyan">Buksan ang GITHUB Sheets</a>
    </div>

    <!-- SSH Card -->
    <div class="card">
        <h3 class="card-title text-green">🔑 SSH COMMANDS</h3>
        <p class="card-text">Gabay para sa pag-generate ng SSH keys, pag-configure ng config files, at ligtas na pagkonekta sa mga remote servers.</p>
        <a href="/ssh" class="card-btn green">Buksan ang SSH Sheets</a>
    </div>

    <!-- Laravel Card -->
    <div class="card">
        <h3 class="card-title text-red">🔥 LARAVEL INSTALLATION</h3>
        <p class="card-text">Hakbang-hakbang na gabay sa pag-setup ng Laravel framework gamit ang Composer at pagpapatakbo sa iba't ibang ports.</p>
        <a href="/laravel-install" class="card-btn red">Buksan ang Installation Guide</a>
    </div>
    <!-- FileZilla Card -->
<div class="card">
    <h3 class="card-title text-cyan">📂 FILEZILLA SFTP SETUP</h3>
    <p class="card-text">Visual interface workflow kung paano mag-transfer ng specific folders o files at mag-migrate sa server kapag walang GitHub ang kliyente.</p>
    <a href="/filezilla" class="card-btn cyan">Buksan ang FileZilla Guide</a>
</div>
<!-- Fresh PC Setup Card -->
<div class="card">
    <h3 class="card-title text-red" style="color: #ff4d4d !important;">💻 FRESH PC SETUP SETUP</h3>
    <p class="card-text">Ang kumpletong checklist ng limang core software sa Windows at apat na VS Code extensions para sa mabilisang pag-setup ng bagong laptop.</p>
    <a href="/fresh-setup" class="card-btn red">Buksan ang Setup Checklist</a>
</div>

<!-- System Health Card -->
<div class="card">
    <h3 class="card-title text-cyan" style="color: #0dcaf0 !important;">🛡️ PC HEALTH & SECURITY</h3>
    <p class="card-text">Malupitang terminal commands para sa pag-scan ng virus, hacker network watch, at awtomatikong pagkumpuni ng mga sirang operating system files.</p>
    <a href="/system-health" class="card-btn cyan">Buksan ang Security Tools</a>
</div>
<!-- CI/CD Automation Card -->
<div class="card">
    <h3 class="card-title text-green" style="color: #198754 !important;">🤖 CI/CD WORKFLOWS</h3>
    <p class="card-text">Awtomatikong pagpapatakbo ng mga pagsusuri (Laravel tests) sa cloud gamit ang GitHub Actions Runner bago tuluyang isama o i-merge ang code ng team.</p>
    <a href="/cicd" class="card-btn green">Buksan ang Automation Guide</a>
</div>

    <!-- Laravel CRUD Module Card -->
    <div class="card">
        <h3 class="card-title text-cyan" style="color: #b23cfd !important;">🗂️ MODULE BLUEPRINT</h3>
        <p class="card-text">Universal checklist ng mga files at folders na kailangang likhain tuwing gagawa ng bagong CRUD feature gaya ng Products module.</p>
        <a href="/module-blueprint" class="card-btn cyan" style="background-color: #b23cfd !important; color: #ffffff !important;">Buksan ang Module Guide</a>
    </div>

        <!-- React + Inertia Card -->
    <div class="card" style="border: 1px solid #2d2d2d; background: #1a1a1a; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        <h3 class="card-title" style="color: #61dafb !important;">⚛️ REACT & INERTIA</h3>
        <p class="card-text">Gabay sa pag-setup ng modernong SPA stack gamit ang Laravel backend, Inertia.js routing, at React frontend components.</p>
        <a href="/react-inertia" class="card-btn" style="background: #15232d; color: #61dafb; border: 1px solid #61dafb; display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; transition: all 0.2s;" onmouseover="this.style.background='#61dafb'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#15232d'; this.style.color='#61dafb';">Buksan ang REACT Sheets</a>
    </div>

    <!-- WordPress Dev Card -->
    <div class="card" style="border: 1px solid #2d2d2d; background: #1a1a1a; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        <h3 class="card-title" style="color: #21759b !important;">🎛️ WORDPRESS DEVELOPMENT</h3>
        <p class="card-text">Gabay sa custom theme development, plugin configuration, actions/filters hooks, at local execution workflows para sa WordPress platform.</p>
        <a href="/wordpress" class="card-btn" style="background: #142129; color: #21759b; border: 1px solid #21759b; display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; transition: all 0.2s;" onmouseover="this.style.background='#21759b'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#142129'; this.style.color='#21759b';">Buksan ang WORDPRESS Sheets</a>
    </div>

        <!-- REST API Tutorial Card -->
    <div class="card" style="border: 1px solid #2d2d2d; background: #1a1a1a; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        <h3 class="card-title" style="color: #ffaa00 !important;">🌐 REST API STEP-BY-STEP</h3>
        <p class="card-text">Kompletong gabay mula sa instalasyon, pag-setup ng routes/api.php, paggawa ng controllers, at pag-secure gamit ang Laravel Sanctum tokens.</p>
        <a href="/rest-api" class="card-btn" style="background: #261c10; color: #ffaa00; border: 1px solid #ffaa00; display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; transition: all 0.2s;" onmouseover="this.style.background='#ffaa00'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#261c10'; this.style.color='#ffaa00';">Buksan ang API Tutorial</a>
    </div>

    <!-- Developer Checks Card -->
<div class="card" style="border: 1px solid #2d2d2d; background: #1a1a1a; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
    <h3 class="card-title" style="color: #ff4d4d !important;">💻 DEV CHECKS &amp; TOOLS</h3>
    <p class="card-text">Ang kumpletong checklist para sa panimulang pag-setup ng Postman settings, workspace configs, at diagnostics para sa unibersal na API HTTP Server Status Codes [INDEX].</p>
    <a href="/dev-checks" class="card-btn" style="background: #2b1515; color: #ff4d4d; border: 1px solid #ff4d4d; display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; transition: all 0.2s;" onmouseover="this.style.background='#ff4d4d'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#2b1515'; this.style.color='#ff4d4d';">Buksan ang Dev Checklist</a>
</div>

</div>
@endsection
