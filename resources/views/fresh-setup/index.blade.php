@extends('layouts.app')

@section('title', 'Fresh PC Setup Checklist - DevCommands')

@section('content')
<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-red" style="color: #ff4d4d !important;">💻 Fresh PC Setup Checklist</h1>
    <p class="text-muted">Kumpletong gabay, official download links, at Terminal Installation commands para sa pag-setup ng isang bagong laptop o fresh Windows OS upang maging isang ganap na Laravel at Git/GitHub Development Station.</p>
</div>

<!-- SECTION 1: WINDOWS CORE SOFTWARE -->
<div class="mb-5">
    <h2 class="section-title">📥 Seksyon 1: Limang (5) Core Software sa Windows (Detailed Guide)</h2>
    <p class="text-muted mb-4">I-click ang mga links sa ibaba para i-download ang mga installers, at sundin ang saktong step-by-step wizard instructions para sa tamang configuration:</p>
    
    <!-- 1. GIT -->
    <div class="card mb-4">
        <h4 class="card-title">1. Git for Windows</h4>
        <p class="card-text"><strong>Para saan:</strong> Ito ang pinaka-pundasyon upang gumana ang mga commands na git init, git clone, at git push sa terminal mo.</p>
        <p class="card-text">🔗 <strong>Official Website:</strong> <a href="https://git-scm.com" target="_blank" class="ans" style="text-decoration: underline;">://git-scm.com</a></p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ff4d4d; margin-top: 10px; color: #ffffff !important;">
            🛠️ <strong>Detailed Steps sa Wizard:</strong><br>
            ➔ Buksan ang na-download na <code>.exe</code> file at i-click ang <strong>Next</strong>.<br>
            ➔ Sa bahagi ng <em>"Choosing the default editor used by Git"</em>, piliin sa dropdown ang <strong>"Use Visual Studio Code as Git's default editor"</strong>.<br>
            ➔ Sa bahagi ng <em>"Adjusting the name of the initial branch"</em>, piliin ang <strong>"Override the default branch name for new repositories"</strong> at siguraduhing nakasulat ay <span class="ans">main</span>.<br>
            ➔ I-click lang ang <strong>Next</strong> sa lahat ng mga kasunod na pahina hanggang marating ang <strong>Install</strong>.
        </p>
    </div>

    <!-- 2. XAMPP -->
    <div class="card mb-4">
        <h4 class="card-title">2. XAMPP (Piliin ang pinakabagong PHP Version)</h4>
        <p class="card-text"><strong>Para saan:</strong> Nagbibigay ng local Apache server at MySQL phpMyAdmin para sa local database testing mo.</p>
        <p class="card-text">🔗 <strong>Official Website:</strong> <a href="https://apachefriends.org" target="_blank" class="ans" style="text-decoration: underline;">apachefriends.org/download.html</a></p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ff4d4d; margin-top: 10px; color: #ffffff !important;">
            🛠️ <strong>Detailed Steps sa Wizard:</strong><br>
            ➔ Kung may lumabas na babala tungkol sa <em>User Account Control (UAC)</em>, i-click lang ang <strong>OK</strong>.<br>
            ➔ I-click ang <strong>Next</strong>. Sa pagpili ng components, siguraduhing naka-check ang <strong>Apache</strong> at <strong>MySQL</strong> (Pwede mo nang i-uncheck ang iba gaya ng Tomcat o FileZilla FTP server).<br>
            ➔ I-click ang <strong>Next</strong> hanggang matapos ang installation.<br>
            ➔ 🚨 <strong>Verification:</strong> Buksan ang XAMPP Control Panel at i-click ang <strong>Start</strong> button sa tabi ng Apache at MySQL hanggang maging kulay green ang mga ito.
        </p>
    </div>

    <!-- 3. COMPOSER -->
    <div class="card mb-4">
        <h4 class="card-title">3. Composer Client</h4>
        <p class="card-text"><strong>Para saan:</strong> Ang PHP dependency manager. Kung wala ito, hindi mo mapatatakbo ang composer install at composer create-project para sa mga Laravel apps.</p>
        <p class="card-text">🔗 <strong>Official Website:</strong> <a href="https://getcomposer.org" target="_blank" class="ans" style="text-decoration: underline;">getcomposer.org/download</a></p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ff4d4d; margin-top: 10px; color: #ffffff !important;">
            🛠️ <strong>Detailed Steps sa Wizard:</strong><br>
            ➔ Buksan ang installer at piliin ang <strong>"Install for all users"</strong>.<br>
            ➔ Sa <em>Installation Options</em> page, HUWAG i-check ang Developer Mode, i-click lang agad ang <strong>Next</strong>.<br>
            ➔ Sa <em>Settings Check</em>, awtomatikong hahanapin ng Composer ang <code>php.exe</code> mo (Dapat nakaturo ito sa: <code>C:\xampp\php\php.exe</code>). I-click ang <strong>Next</strong>.<br>
            ➔ Laktawan ang Proxy Settings (I-next lang) at i-click ang <strong>Install</strong> hanggang sa matapos.
        </p>
    </div>

    <!-- 4. VS CODE -->
    <div class="card mb-4">
        <h4 class="card-title">4. Visual Studio Code (VS Code)</h4>
        <p class="card-text"><strong>Para saan:</strong> Ang iyong pangunahing code editor kung saan mo bubuksan ang iyong mga proyekto at dito ka magta-type sa terminal.</p>
        <p class="card-text">🔗 <strong>Official Website:</strong> <a href="https://visualstudio.com" target="_blank" class="ans" style="text-decoration: underline;">://visualstudio.com</a></p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ff4d4d; margin-top: 10px; color: #ffffff !important;">
            🛠️ <strong>Detailed Steps sa Wizard:</strong><br>
            ➔ I-accept ang License Agreement at i-click ang <strong>Next</strong>.<br>
            ➔ 🚨 <strong>VERY IMPORTANT PATH CHECK:</strong> Sa pahina ng <em>"Select Additional Tasks"</em>, siguraduhing lagyan mo ng check ang dalawang ito:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☑️ <strong>"Add 'Open with Code' action to Windows Explorer file context menu"</strong><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;☑️ <strong>"Add 'Open with Code' action to Windows Explorer directory context menu"</strong><br>
            *(Para kapag nag-right click ka sa kahit anong folder sa Windows mo, may shortcut agad na Open with Code).*<br>
            ➔ Siguraduhing naka-check din ang <strong>"Add to PATH"</strong>, tapos i-click ang <strong>Next</strong> at <strong>Install</strong>.
        </p>
    </div>

    <!-- 5. NODE.JS -->
    <div class="card mb-4">
        <h4 class="card-title">5. Node.js (Piliin ang LTS Version)</h4>
        <p class="card-text"><strong>Para saan:</strong> Kailangan ng Laravel para sa Vite frontend engine. Kung wala ito, mag-e-error ang terminal mo kapag pinatakbo ang mga npm commands gaya ng npm run dev.</p>
        <p class="card-text">🔗 <strong>Official Website:</strong> <a href="https://nodejs.org" target="_blank" class="ans" style="text-decoration: underline;">nodejs.org</a></p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ff4d4d; margin-top: 10px; color: #ffffff !important;">
            🛠️ <strong>Detailed Steps sa Wizard:</strong><br>
            ➔ I-run ang installer, i-click ang <strong>Next</strong>, tanggapin ang terms, at i-next lang ulit.<br>
            ➔ Sa pahina ng <em>"Tools for Native Modules"</em>, <strong>HUWAG mong i-check</strong> ang box na nag-aalok na mag-install ng Chocolatey at Python (Masyadong mabigat iyon at hindi natin kailangan sa ngayon).<br>
            ➔ I-click ang <strong>Next</strong> at tapusin ang installation sa pamamagitan ng pag-click sa <strong>Install</strong> at <strong>Finish</strong>.
        </p>
    </div>
</div>

<!-- SECTION 2: VS CODE TERMINAL EXTENSIONS INSTALLATION -->
<div class="mb-5">
    <h2 class="section-title">🧩 Seksyon 2: Mabilisang Pag-install ng Extensions (Via VS Code Terminal)</h2>
    <p class="text-muted mb-4"><strong>Paano gagawin?</strong> Buksan ang VS Code terminal ng bago mong laptop, i-copy at i-paste mo lang itong mga sumusunod na commands isa-isa, at mag-enter para pumasok ang extensions nang hindi gumagamit ng mouse:</p>

    <!-- Extension 1 -->
    <div class="card mb-4">
        <h4 class="card-title" style="color: #ffc107;">1. PHP Intelephense (MANDATORY)</h4>
        <p class="card-text">Inaalis nito ang mga huwad na pulang guhit o fake errors sa code mo sa pamamagitan ng pagbasa ng lahat ng Laravel classes at JSON structures.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">bmewburn.vscode-intelephense</span></code></pre>
    </div>

    <!-- Extension 2 -->
    <div class="card mb-4">
        <h4 class="card-title">2. Laravel Blade Snippets</h4>
        <p class="card-text">Nagbibigay ng automatic autocomplete at tamang kulay kapag nagta-type ka ng extends, section, at endsection sa iyong blade files.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">onecentlin.laravel-blade</span></code></pre>
    </div>

    <!-- Extension 3 -->
    <div class="card mb-4">
        <h4 class="card-title">3. Laravel Extra Intellisense</h4>
        <p class="card-text">Nag-u-autocomplete ng mga saktong pangalan ng routes at controllers kapag nagta-type ka sa routes/web.php para iwas sa typo error.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">amiralazimi.laravel-extra-intellisense</span></code></pre>
    </div>

    <!-- Extension 4 -->
    <div class="card mb-4">
        <h4 class="card-title">4. GitLens - Git supercharged</h4>


<!-- SECTION 2: VS CODE TERMINAL EXTENSIONS INSTALLATION -->
<div class="mb-5">
    <h2 class="section-title">🧩 Seksyon 2: Mabilisang Pag-install ng Extensions (Via VS Code Terminal)</h2>
    <p class="text-muted mb-4"><strong>Paano gagawin?</strong> Buksan ang VS Code terminal ng bago mong laptop, i-copy at i-paste mo lang itong mga sumusunod na commands isa-isa, at mag-enter para pumasok ang extensions nang hindi gumagamit ng mouse:</p>

    <!-- Extension 1 -->
    <div class="card mb-4">
        <h4 class="card-title" style="color: #ffc107;">1. PHP Intelephense (MANDATORY)</h4>
        <p class="card-text">Inaalis nito ang mga huwad na pulang guhit o fake errors sa code mo sa pamamagitan ng pagbasa ng lahat ng Laravel classes at JSON structures.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">bmewburn.vscode-intelephense</span></code></pre>
    </div>

    <!-- Extension 2 -->
    <div class="card mb-4">
        <h4 class="card-title">2. Laravel Blade Snippets</h4>
        <p class="card-text">Nagbibigay ng automatic autocomplete at tamang kulay kapag nagta-type ka ng extends, section, at endsection sa iyong blade files.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">onecentlin.laravel-blade</span></code></pre>
    </div>

    <!-- Extension 3 -->
    <div class="card mb-4">
        <h4 class="card-title">3. Laravel Extra Intellisense</h4>
        <p class="card-text">Nag-u-autocomplete ng mga saktong pangalan ng routes at controllers kapag nagta-type ka sa routes/web.php para iwas sa typo error.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">amiralazimi.laravel-extra-intellisense</span></code></pre>
    </div>

    <!-- Extension 4 -->
    <div class="card mb-4">
        <h4 class="card-title">4. GitLens - Git supercharged</h4>
        <p class="card-text">Solid na tracking tool kapag dalawa kayong dev na nagtutulungan. Ipapakita nito sa gilid ng bawat linya kung sinong tao ang huling sumulat ng code.</p>
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ I-copy at i-run ito sa terminal para mag-install:</p>
        <pre><code>code --install-extension <span class="ans">eamodio.gitlens</span></code></pre>
    </div>
</div>

<!-- SECTION 3: INITIAL VERIFICATION & GITHUB LOGIN -->
<div class="mb-5">
    <h2 class="section-title">🔑 Seksyon 3: Unang Terminal Check at GitHub Login</h2>
    <p class="text-muted mb-4">Mga commands para masigurong selyado ang mga tools mo at paano mag-login sa GitHub sa unang pagkakataon.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. I-verify ang mga Install sa Terminal</h4>
        <p class="card-text">Buksan ang terminal sa iyong fresh VS Code at itakbo ito upang masigurong nakikita ng laptop mo ang core software:</p>
        <pre><code>git --version
php -v
composer --version</code></pre>
    </div>

    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">2. Unang GitHub Login Authorization Popup</h4>
        <p class="card-text">Dahil bago ang laptop mo, sa pinaka-unang pagkakataon na mag-git push ka paitaas sa GitHub website, magtatanong si VS Code ng pahintulot. Sundin mo ito:</p>
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ffc107; margin-top: 10px; color: #ffffff !important;">
            ➔ May lalabas na Windows popup box, i-click ang Sign in with your browser<br>
            ➔ Awtomatikong bubukas ang iyong browser, i-click ang green button na Authorize GitCredentialManager<br>
            ➔ Mag-type ng Windows pin o password kung hihilingin ng PC mo.<br>
            ➔ Pagkatapos nito, magkakakilala na ang bagong laptop mo at ang online GitHub profile mo habang-buhay!
        </p>
    </div>
</div>
@endsection
