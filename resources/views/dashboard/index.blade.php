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


</div>
@endsection
