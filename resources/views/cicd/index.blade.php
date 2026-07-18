@extends('layouts.app')

@section('title', 'CI/CD Automation - DevCommands')

@section('content')

<div class="container">

    <!-- HERO HEADER SECTION (MUTED & LOW-GLARE) -->
    <div class="mb-5 text-center" style="margin-top: 50px;">
        <h1 style="font-size: 36px; font-weight: 800; letter-spacing: -0.5px; margin-bottom: 15px; color: #ffffff;">
            🤖 <span style="color: #0dcaf0;">Laravel CI/CD</span> Deployment Robot
        </h1>
        <p class="text-muted" style="font-size: 15px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.7; color: #a5a5a5 !important;">
            Mabilisang review at master cheat sheet para sa automated pipeline gamit ang <strong style="color: #0dcaf0; font-weight: 600;">GitHub Actions</strong>. Isang simpleng <code>git push</code> mo lang mula sa iyong local terminal, awtomatikong gigising ang robot para i-update ang iyong live web hosting server nang walang manual FTP upload!
        </p>
    </div>

    <!-- MODERN TECH WORKFLOW CARD (LOW CONTRAST & MATTE STYLE) -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #3d3d3d !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        <h4 class="card-title" style="color: #ffffff; font-size: 16px; font-weight: 700; letter-spacing: 0.5px; margin-bottom: 25px; text-transform: uppercase; border-bottom: 1px solid #2d2d2d; padding-bottom: 10px;">
            ⚙️ Ang Lifecycle ng Automation Pipeline:
        </h4>
        
        <!-- STEP BY STEP WITH SOFT TECH COLORS -->
        <div style="display: flex; flex-direction: column; gap: 18px; font-size: 14px; line-height: 1.6;">
            <!-- Step 1 -->
            <div style="display: flex; align-items: flex-start; gap: 15px;">
                <span style="background: #2d2d2d; color: #a5a5a5; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-family: monospace;">01</span>
                <p style="margin: 0; color: #dcdcdc;">Magpapasok ka ng bagong features o pagbabago sa iyong code sa local PC (<span class="ans">VS Code Terminal</span>).</p>
            </div>
            
            <!-- Step 2 -->
            <div style="display: flex; align-items: flex-start; gap: 15px;">
                <span style="background: #2d2d2d; color: #0dcaf0; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-family: monospace;">02</span>
                <p style="margin: 0; color: #dcdcdc;">I-ti-type mo ang <code style="color: #0dcaf0; background: #111; padding: 2px 6px; border-radius: 4px; border: 1px solid #222;">git push origin main</code> pataas sa iyong GitHub repository online.</p>
            </div>
            
            <!-- Step 3 -->
            <div style="display: flex; align-items: flex-start; gap: 15px;">
                <span style="background: #2d2d2d; color: #ffc107; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-family: monospace;">03</span>
                <p style="margin: 0; color: #dcdcdc;">Babasahin ng GitHub ang nakatagong <span style="color: #ffc107;">.yml file</span> mo at agad na gigisingin ang <strong>Deployment Robot</strong>.</p>
            </div>
            
            <!-- Step 4 -->
            <div style="display: flex; align-items: flex-start; gap: 15px;">
                <span style="background: #2d2d2d; color: #2ecc71; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-family: monospace;">04</span>
                <p style="margin: 0; color: #dcdcdc;">Gagamitin ng robot ang iyong mga encrypted <span style="color: #2ecc71;">SSH Keys</span> para ligtas na makapasok sa iyong web hosting account.</p>
            </div>
            
            <!-- Step 5 -->
            <div style="display: flex; align-items: flex-start; gap: 15px;">
                <span style="background: #2d2d2d; color: #0dcaf0; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-family: monospace;">05</span>
                <p style="margin: 0; color: #dcdcdc;">Siya na ang kusang magpapatakbo ng <span class="ans">git pull</span>, <span class="ans">composer install</span>, at <span class="ans">php artisan migrate</span> sa server para sa iyo!</p>
            </div>
        </div>
    </div>

</div>





<!-- === BUONG HAKBANG 1 CONTAINER (WALA NANG HIWALAY NA PARTS) === -->
<div class="mb-5" style="background: #161616; border: 1px solid #333; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
    
    <!-- HIGH-VISIBILITY COMPACT CYAN TITLE -->
    <div style="background: #101c22; border-left: 4px solid #0dcaf0; padding: 10px 15px; margin-bottom: 20px; border-radius: 0 4px 4px 0;">
        <h3 style="font-size: 18px; font-weight: 700; color: #0dcaf0 !important; margin: 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🔑 Hakbang 1: Pag-generate ng SSH Keys (No-Brainer Step-by-Step)
        </h3>
    </div>

    <p class="text-muted mb-4">Bago natin kausapin ang GitHub at Hostinger, kailangan muna nating gumawa ng selyadong "Key Pair" (magkapares na susi) sa loob ng iyong computer gamit ang terminal.</p>

    <!-- [INSIDE HAKBANG 1] GENERATION COMMAND CARD -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title" style="color: #ffc107; font-size: 15px; text-transform: uppercase;">🏗️ Patakbuhin ang Susi Generator sa VS Code Terminal</h4>
        <p class="card-text" style="font-size: 13px; margin-bottom: 12px;">Buksan ang iyong terminal sa local PC (VS Code) at i-type itong unibersal na command para mag-generate ng mabilis at ligtas na key pair:</p>
        <pre style="margin-top: 5px; margin-bottom: 15px; padding: 10px;"><code style="color: #a5a5a5; font-size: 14px;">ssh-keygen -t ed25519 -C "github-actions"</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        
        <!-- QUESTION & ANSWER FLOW -->
        <div class="mt-2 p-3" style="background: #131313; border-radius: 4px; border: 1px solid #2d2d2d; font-size: 13px; line-height: 1.6;">
            <p style="margin-bottom: 6px; font-weight: bold; color: #0dcaf0;">❓ Ano ang mangyayari pagkapindot ng Enter?</p>
            <p class="text-muted" style="margin-bottom: 10px; margin-left: 10px;">Lalabas ang mensaheng: <span class="ans">Generating public/private ed25519 key pair.</span></p>
            
            <p style="margin-bottom: 4px;" class="text-light">➔ <strong>Tanong 1:</strong> <em>"Enter file in which to save the key..."</em></p>
            <p class="text-muted" style="margin-bottom: 10px; margin-left: 15px;"><strong>Sagot:</strong> Pindutin mo lang agad ang <span class="text-warning" style="font-weight: bold;">ENTER</span> para mapunta ito sa default folder ng PC mo.</p>
            
            <p style="margin-bottom: 4px;" class="text-light">➔ <strong>Tanong 2:</strong> <em>"Enter passphrase..."</em></p>
            <p class="text-muted" style="margin-bottom: 0; margin-left: 15px;"><strong>Sagot:</strong> Dahil ito ay para sa automated robot, iwanan mo lang itong <strong>blanko</strong>! Pindutin mo lang ulit nang dalawang beses ang: <span class="text-warning" style="font-weight: bold;">ENTER ➔ ENTER</span>.</p>
        </div>
    </div>

    <!-- [INSIDE HAKBANG 1] THE RESULT BOX -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px; border-left: 4px solid #2ecc71 !important;">
        <h4 class="card-title" style="color: #2ecc71; font-size: 15px; text-transform: uppercase;">🎉 THE RESULT: Dalawang (2) Selyadong Susi</h4>
        <p class="card-text" style="font-size: 13px; margin-bottom: 5px;">Matapos ang proseso, awtomatikong gagawa ang computer mo ng dalawang mahahalagang files sa iyong local user folder:</p>
        <ul style="color: #b3b3b3; font-size: 13px; line-height: 1.8; padding-left: 20px; margin-top: 5px; margin-bottom: 0;">
            <li>📁 <strong style="color: #ffffff;">id_ed25519</strong> ➔ Ito ang iyong <strong>Private Key</strong> (Ang itatago at ilalagay mo sa GitHub Secrets mamaya).</li>
            <li>📁 <strong style="color: #ffffff;">id_ed25519.pub</strong> ➔ Ito ang iyong <strong>Public Key</strong> (Ang ipapamigay at ititanim mo sa Hostinger SSH keys section).</li>
        </ul>
    </div>

    <!-- [INSIDE HAKBANG 1] UNIVERSAL REUSE REMINDER -->
    <div style="background: #2b2216; padding: 12px; border-radius: 4px; border: 1px solid #ffc107; font-size: 13px; line-height: 1.6;" class="mb-4">
        <p style="color: #ffffff; margin-bottom: 0;">
            ⚠️ <strong style="color: #ffc107;">MAHALAGANG PATAKARAN SA PAG-REUSE (ISANG BESES LANG GAWIN!):</strong> Ang susing ito ay Universal para sa iyong buong GitHub account. Ibig sabihin, kapag may bago kang repository o ibang Laravel projects sa hinaharap, <strong>HINDI mo na kailangang mag-generate ulit</strong>. Gagamitin mo lang ulit itong parehong files na ito para sa iba mo pang projects!
        </p>
    </div>

    <!-- [INSIDE HAKBANG 1] NOTEPAD++ OPENING GUIDE -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title text-cyan" style="font-size: 15px; text-transform: uppercase;">📋 PAANO BUKSAN AT KOPYAHIN ANG MGA SUSI GAMIT ANG NOTEPAD++</h4>
        <p class="card-text" style="font-size: 13px; margin-bottom: 12px;">Sundin ang mga simpleng hakbang na ito para makita ang purong code ng mga keys mo nang walang error:</p>
        
        <div style="background: #131313; padding: 12px; border-radius: 4px; font-size: 13px; line-height: 1.5; color: #e0e0e0;">
            <p style="margin-bottom: 6px;">1. Pumunta sa folder directory ng iyong computer: <code style="color: #0dcaf0;">C:\Users\iyong-pc-username\.ssh\</code></p>
            <p style="margin-bottom: 6px;">2. Hanapin ang dalawang selyadong files na nagawa sa itaas (<span style="color: #ffc107;">id_ed25519</span> at <span style="color: #ffc107;">id_ed25519.pub</span>).</p>
            <p style="margin-bottom: 6px;">3. I-right-click ang file na nais mong kopyahan ng code.</p>
            <p style="margin-bottom: 6px;">4. I-click ang opsyong <strong>"Open with Notepad++"</strong> mula sa dropdown panel.</p>
            <p style="margin-bottom: 0;">5. Magpa-pop-up ang file at maaari mo nang i-copy ang buong selyadong code nito!</p>
        </div>
    </div>
</div>
<!-- === END OF HAKBANG 1 === -->





<!-- === BUONG HAKBANG 2 CONTAINER (WALA NANG HIWALAY NA PARTS) === -->
<div class="mb-5" style="background: #161616; border: 1px solid #333; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
    
    <!-- HIGH-VISIBILITY COMPACT YELLOW TITLE -->
    <div style="background: #221c10; border-left: 4px solid #ffc107; padding: 10px 15px; margin-bottom: 20px; border-radius: 0 4px 4px 0;">
        <h3 style="font-size: 18px; font-weight: 700; color: #ffc107 !important; margin: 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🔑 Hakbang 2: Pagtatanim ng mga Susi sa Hostinger at GitHub
        </h3>
    </div>

    <p class="text-muted mb-4">Upang makapasok ang robot sa iyong live server nang ligtas at hindi lantad ang mga passwords mo sa code, kailangan mong itanim ang Public Key sa iyong Hosting at ang Private Key naman sa selyadong vault ng GitHub.</p>

    <!-- [INSIDE HAKBANG 2] CONCEPT BOX -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title" style="color: #ff4d4d; font-size: 15px; text-transform: uppercase;">💡 Pag-unawa sa SSH Key Pair (Public vs Private Key):</h4>
        <p class="card-text mb-3" style="font-size: 13px;">Ang SSH Key Pair ay hindi isang solong password, kundi binubuo ng dalawang (2) magkaibang selyo na nagtutulungan:</p>
        
        <div style="display: flex; flex-direction: column; gap: 12px; font-size: 13px;">
            <div style="background: rgba(46, 204, 113, 0.05); padding: 10px; border-radius: 4px; border: 1px solid rgba(46, 204, 113, 0.15);">
                <span class="text-green" style="font-weight: bold; display: block; margin-bottom: 2px;">🔓 Public Key (Ang Bukas na Susi ng id_ed25519.pub):</span>
                <span class="text-muted">Ito ang inilalagay at itinatali sa settings ng Hostinger mo. Pwede itong makita ng kahit sino at <strong>HINDI</strong> ito pinoprotektahang secret.</span>
            </div>
            
            <div style="background: rgba(255, 77, 77, 0.05); padding: 10px; border-radius: 4px; border: 1px solid rgba(255, 77, 77, 0.15);">
                <span class="text-red" style="font-weight: bold; display: block; margin-bottom: 2px;">🔒 Private Key (Ang Lihim na Susi ng id_ed25519):</span>
                <span class="text-muted">Ito ang itinatago sa PC mo at ang mismong text na ilalagay mo sa GitHub Secrets. Ito ay selyadong-secret at <strong>KAILANMAN</strong> ay hindi dapat ipakita kahit kanino!</span>
            </div>
        </div>
    </div>

    <!-- [INSIDE HAKBANG 2] PART A: HOSTINGER PANEL GUIDE -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title text-green" style="font-size: 15px;">🖥️ PART A: Pag-paste ng Public Key sa Hostinger Panel</h4>
        <p class="card-text" style="font-size: 13px; margin-bottom: 12px;">Sundin ang mga hakbang na ito sa iyong hosting account para payagan ang koneksyon ng robot:</p>
        
        <div style="background: #131313; padding: 12px; border-radius: 4px; font-size: 13px; line-height: 1.5; color: #ccccccc; margin-bottom: 12px;">
            <p style="margin-bottom: 6px;">1. Mag-login sa iyong dashboard, buksan ang website control area, at gamitin ang search bar sa menu para pumunta sa **SSH page / SSH Access** settings.</p>
            <p style="margin-bottom: 6px;">2. Hanapin ang section na may titulong <strong>"Add SSH Key"</strong>.</p>
            <p style="margin-bottom: 0;">3. Punan ang form inputs gamit ang ganitong panuntunan:</p>
        </div>

        <div style="background: #252525; padding: 12px; border-radius: 4px; border: 1px solid #333; font-size: 13px;">
            <p style="margin-bottom: 8px;" class="text-light">➔ <strong>Key Name:</strong> <code style="color: #ffc107; font-weight: bold;">BizzSoft Auto Deploy</code></p>
            <p style="margin-bottom: 4px;" class="text-light">➔ <strong>Public Key:</strong> <span class="text-muted">I-paste ang code mula sa iyong <code>id_ed25519.pub</code> file.</span></p>
            <pre style="margin-top: 5px; margin-bottom: 0; padding: 10px;"><code style="color: #a5a5a5; font-size: 14px;">ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAA... github-actions</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        </div>
        <p class="text-muted" style="font-size: 12px; margin-top: 12px; margin-bottom: 0;">4. Pagkatapos ma-paste, i-click ang button na <strong>Add Record</strong> o <strong>Add Key</strong>. Selyado na ang hosting server mo!</p>
    </div>

    <!-- [INSIDE HAKBANG 2] PART B: GITHUB SECRETS VAULT GUIDE -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title text-cyan" style="font-size: 15px;">🖥️ PART B: Pag-paste ng Private Key sa GitHub Secrets</h4>
        <p class="card-text" style="font-size: 13px; margin-bottom: 12px;">Ngayon, pumunta naman sa iyong GitHub Repository sa browser para itago ang iyong Private Key sa kanilang secure vault:</p>
        
        <pre style="margin-bottom: 15px; background: #131313; padding: 12px;"><code style="color: #b3b3b3; font-size: 14px;">🌐 https://github.com
├── ⚙️ [Settings]           <span class="text-muted">◄── I-click ang Settings tab sa horizontal menu</span>
│   └── 🛡️ Security /       <span class="text-muted">◄── Hanapin sa kaliwang sidebar ang 'Security' block</span>
│       └── 🔑 <strong style="color: #0dcaf0;">Secrets and variables</strong> <span class="text-muted">◄── Pindutin ito para bumaba ang submenu</span>
│           └── 🤖 <strong style="color: #4db97a;">Actions</strong>  <span class="text-muted">◄── I-click ang 'Actions' para pumasok sa panel</span>
└── 🟩 [New repository secret] <span class="text-muted">◄── I-click ang berdeng button sa kanang bahagi sa itaas</span></code></pre>

        <div style="background: #252525; padding: 12px; border-radius: 4px; border: 1px solid #333; font-size: 13px;">
            <p style="margin-bottom: 8px;" class="text-light">➔ <strong>Name:</strong> <code style="color: #ffc107; font-weight: bold;">SSH_PRIVATE_KEY</code></p>
            <p style="margin-bottom: 4px;" class="text-light">➔ <strong>Secret:</strong> <span class="text-muted">I-paste ang BUONG purong code mula sa iyong <code>id_ed25519</code> file.</span></p>
            <pre style="margin-top: 5px; margin-bottom: 0; background: #111; padding: 10px;"><code style="color: #ff4d4d; font-size: 14px;">-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW
ZDI1NTE5AAAAII... (at marami pang random characters pababa)
-----END OPENSSH PRIVATE KEY-----</code></pre>
            <span class="text-muted" style="font-size: 11px; margin-top: 4px; display: block;">⚠️ Paalala: Isama mo dapat sa pag-copy pati ang BEGIN at END lines!</span>
        </div>
        <p class="text-muted" style="font-size: 12px; margin-top: 12px; margin-bottom: 0;">5. Pagkatapos mapunan, i-click ang berdeng button na <strong>Add secret</strong> sa ilalim.</p>
    </div>

    <!-- [INSIDE HAKBANG 2] FINAL NOTICE BOX -->
    <div style="background: #1c2b24; padding: 12px; border-radius: 4px; border: 1px solid #4db97a !important; font-size: 13px;">
        <p style="color: #ffffff; line-height: 1.5; margin-bottom: 0;">
            💡 <strong>Tandaan:</strong> Pagkatapos mong i-click ang Add secret, awtomatiko itong itatago at ie-encrypt ng GitHub. Ang robot na lamang ang makakabasa nito sa oras na mag-deploy na kayo upang matiyak na 100% protektado ang iyong transaksyon.
        </p>
    </div>
</div>
<!-- === END OF HAKBANG 2 === -->




<!-- === PANIBAGONG HAKBANG: FILE & FOLDER STRUCTURE SETUP === -->
<div class="mb-5" style="background: #1a1a1a; border: 1px solid #2d2d2d; padding: 25px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
    
    <!-- COMPACT MUTED BLUE/CYAN ACCENT TITLE -->
    <div style="background: #131d24; border-left: 4px solid #0dcaf0; padding: 10px 15px; margin-bottom: 20px; border-radius: 0 4px 4px 0;">
        <h3 style="font-size: 16px; font-weight: 700; color: #0dcaf0 !important; margin: 0; text-transform: uppercase; letter-spacing: 0.5px;">
            ⚙️ Paggawa ng Directory at Blueprint File (.github/workflows/deploy.yml)
        </h3>
    </div>

    <p class="text-muted mb-4" style="font-size: 14px; line-height: 1.6; color: #a5a5a5 !important;">
        Bago mo ilagay ang kahit anong code ng robot, kailangang maihanda mo muna ang tamang folder structure sa pinaka-root folder ng iyong Laravel project (sa tabi mismo ng iyong app at routes folder).
    </p>

    <!-- 1-CLICK SHORTCUTS CARD -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1f1f1f; padding: 20px; box-shadow: none;">
        <h4 class="card-title" style="color: #ffffff; font-size: 14px; font-weight: 700; margin-bottom: 12px; text-transform: uppercase;">
            ⚡ 1-Click Shortcut Terminal Commands:
        </h4>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 15px;">Para mabilis, piliin ang angkop na utos base sa gamit mong terminal sa VS Code at i-enter nang isang bagsakan:</p>
        
        <div style="display: flex; flex-direction: column; gap: 15px; font-size: 13px;">
            <div>
                <span style="color: #dcdcdc; font-weight: 600;">Option A: Windows PowerShell (Default Terminal sa Windows)</span>
                <pre style="margin-top: 5px; margin-bottom: 0; background: #111; border-color: #262626; padding: 10px;"><code>mkdir -p .github/workflows; New-Item -ItemType File -Path ".github/workflows/deploy.yml" -Force</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
            </div>
            <div>
                <span style="color: #dcdcdc; font-weight: 600;">Option B: Git Bash o Linux / macOS Terminal</span>
                <pre style="margin-top: 5px; margin-bottom: 0; background: #111; border-color: #262626; padding: 10px;"><code>mkdir -p .github/workflows && touch .github/workflows/deploy.yml</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
            </div>
        </div>
    </div>

    <!-- VISUAL DIRECTORY TREE MAP CARD -->
    <div class="card" style="border: 1px solid #2d2d2d; background: #1f1f1f; padding: 20px; box-shadow: none;">
        <h4 class="card-title" style="color: #ffffff; font-size: 14px; font-weight: 700; margin-bottom: 10px; text-transform: uppercase;">
            📁 Visual Folder Structure (Ganito dapat ang hitsura sa VS Code mo):
        </h4>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 12px;">Tiyakin na pumasok sa tamang subfolder hierarchy ang iyong configuration blueprint file:</p>
        <pre style="background: #111; border-color: #262626; padding: 15px; margin-top: 5px; margin-bottom: 0;"><code style="color: #b3b3b3; font-size: 14px; line-height: 1.5;">📁 iyong-laravel-project/  (Root Folder)
├── 📁 app/
├── 📁 bootstrap/
├── 📁 config/
├── 📁 .github/           <span style="color: #7a7a7a;">◄── Gagawa ka ng folder na may tuldok sa unahan</span>
│   └── 📁 workflows/     <span style="color: #7a7a7a;">◄── Sa loob nito, gagawa ka ng "workflows" folder</span>
│       └── 📄 deploy.yml   <span style="color: #7a7a7a;">◄── Dito mo ipe-paste ang code ng robot mamaya!</span>
├── 📁 public/
├── 📁 resources/
├── 📁 routes/
└── 📄 .env</code></pre>
    </div>

</div>
<!-- === END OF PANIBAGONG HAKBANG === -->








<!-- === BUONG HAKBANG 3 CONTAINER (WALA NANG HIWALAY NA PARTS) === -->
<div class="mb-5" style="background: #161616; border: 1px solid #333; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
    
    <!-- HIGH-VISIBILITY COMPACT PURPLE TITLE -->
    <div style="background: #1b1022; border-left: 4px solid #b23cfd; padding: 10px 15px; margin-bottom: 20px; border-radius: 0 4px 4px 0;">
        <h3 style="font-size: 18px; font-weight: 700; color: #b23cfd !important; margin: 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🤖 Hakbang 3: Paggawa ng Automation Script (.yml File) at Git Push
        </h3>
    </div>

    <p class="text-muted mb-4">Ito ang huling yugto. Gagawa tayo ng workflow folder sa iyong VS Code at ilalagay ang unibersal na blueprint ng robot bago ito tuluyang i-push sa GitHub.</p>

    <!-- [INSIDE HAKBANG 3] STANDARD BLUEPRINT CARD -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title" style="color: #0dcaf0; font-size: 15px; text-transform: uppercase;">📄 Standard Laravel Deployment Blueprint:</h4>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 12px;">Kopyahin ang buong automation code sa ibaba at i-paste ito sa iyong bagong gawa na `.yml` file:</p>
        
        @verbatim
        <pre style="border: 1px solid #333; background-color: #111; padding: 15px; overflow-x: auto; border-radius: 6px;"><code style="color: #a5a5a5; font-weight: bold;">name: Laravel Auto Deploy

on:
  push:
    branches:
      - main # 💡 EDIT DITO: Palitan kung iba ang default branch (hal. master)

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout Repository
        uses: actions/checkout@v4

      - name: Deploy to Server
        uses: appleboy/ssh-action@v1.0.3
        with:
          host: YOUR_SERVER_IP # 💡 EDIT DITO
          username: YOUR_SSH_USERNAME # 💡 EDIT DITO
          key: ${{ secrets.SSH_PRIVATE_KEY }}
          port: 22 # 💡 EDIT DITO (Hostinger: 65002)

          script: |
            cd /path/to/project   # 💡 EDIT DITO

            git pull origin main || exit 1   # 💡 EDIT DITO kung master ang branch

            composer install --no-interaction --prefer-dist --optimize-autoloader || exit 1

            php artisan migrate --force || exit 1

            php artisan optimize || exit 1

            echo "✅ Deployment completed successfully!"</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        @endverbatim

        <!-- STATUS GUIDE CONDITIONS -->
        <div class="mt-3 p-3" style="background: #131313; border-radius: 4px; border: 1px solid #2d2d2d; font-size: 13px; line-height: 1.6;">
            <p class="text-success" style="font-weight: bold; margin-bottom: 3px;">🟢 Kung GREEN ang marka sa GitHub Actions:</p>
            <p class="text-muted" style="margin-left: 15px; margin-bottom: 10px;">HUWAG MO NANG BAGUHIN. Ibig sabihin, maluwag at walang restrictions ang bago mong hosting server! Manatili ka na sa standard blueprint na ito.</p>

            <p class="text-danger" style="font-weight: bold; margin-bottom: 3px;">🔴 Kung RED o PULANG EKIS ang marka sa GitHub Actions:</p>
            <p class="text-muted" style="margin-left: 15px; margin-bottom: 0;">Ibig sabihin ay may terminal restriction ang server mo (gaya ng nakaharang na proc_open). Mangyaring mag-investigate gamit ang mga commands sa Seksyon 7 Rule #4 sa ibaba, at kapag napatunayan mong pareho sila ng problema, kailangan mong gamitin ang Hostinger Workaround .yml code na nasa itaas!</p>
        </div>

        <p class="text-muted" style="font-size: 12px; margin-top: 15px; margin-bottom: 0;">⚠️ <strong>Tandaan:</strong> Ang file na ito ay hindi kailanman mabubura sa iyong server o GitHub pagkatapos ng push. Mananatili ito sa iyong root folder bilang permanenteng manual blueprint ng robot tuwing may bagong transaction ang team!</p>
    </div>

    <!-- [INSIDE HAKBANG 3] EXECUTION STEPS CARD -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <h4 class="card-title text-green" style="font-size: 15px;">🚀 Eksaktong Hakbang para Mapagana ang Robot:</h4>
        <div style="font-size: 13px; line-height: 1.6; color: #ccccccc; margin-bottom: 15px;">
            <p style="margin-bottom: 6px;">1. Sundan ang visual directory structure sa iyong VS Code at gumawa ng mga kaukulang folders at file.</p>
            <p style="margin-bottom: 6px;">2. Kopyahin ang buong code ng robot sa itaas at i-paste ito sa loob ng iyong `.yml` file.</p>
            <p style="margin-bottom: 0;">3. Patakbuhin ang mga sumusunod na hakbang base sa kung saan ito dapat i-execute:</p>
        </div>

        <!-- LOCAL PC TERMINAL COMMANDS -->
        <div style="background: #252525; padding: 12px; border-radius: 4px; border: 1px solid #333; font-size: 13px;">
            <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">📍 [A] ITATAYP MO SA LOCAL PC (VS Code Terminal):</p>
            <p class="text-muted" style="margin-bottom: 10px;">Pagkatapos mong i-save ang code na ito sa iyong file, i-push mo na ito agad sa GitHub gamit ang mga commands na ito para magising ang robot:</p>
            <pre style="margin-top: 5px; margin-bottom: 0; padding: 10px;"><code style="color: #a5a5a5;">git add .
git commit -m "Add GitHub Actions CI robot blueprint"
git push origin main</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        </div>
    </div>

    <!-- [INSIDE HAKBANG 3] TROUBLESHOOTING RETRY BOX -->
    <div style="background: #2b1c1c; border-left: 4px solid #ff4d4d; padding: 15px; border-radius: 0 4px 4px 0; font-size: 13px; line-height: 1.6;">
        <p style="color: #ff4d4d; font-weight: bold; margin-bottom: 5px;">🔄 Paano Kapag Nag-Error ang Robot? (Pulang Ekis 🔴):</p>
        <p class="text-muted" style="margin-bottom: 12px;">
            Kung sakaling mag-error ang GitHub Actions sa unang subok (halimbawa: hindi mo pa na-set nang maayos ang SSH keys o secrets sa GitHub Settings), huwag kang mag-alala! Ayusin mo muna ang kulang na settings sa GitHub, at pagkatapos noon ay <strong>pilitin nating patakbuhin ulit ang robot nang hindi nagbabago ng code</strong> gamit ang command na ito:
        </p>
        <pre style="background: #111; padding: 10px; margin-bottom: 12px;"><code style="color: #ff4d4d;">git commit --allow-empty -m "retry deployment"
git push</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        <p style="color: #ffffff; margin-bottom: 0;">
            🎯 <strong>Tandaan:</strong> Ang <code>--allow-empty</code> ay isang mahiwagang utos kay Git na gumawa ng "blanko" o walang lamang commit para lang magkaroon ng dahilan na mag-push ulit. Pagka-push mo, bantayan mo ang GitHub Actions page at siguraduhing ang marka ay <strong>kulay berdeng check (🟢)</strong> na at hindi na pulang ekis, na siyang patunay na tagumpay at live na ang iyong Laravel project!
        </p>
    </div>
</div>
<!-- === END OF HAKBANG 3 === -->



<!-- === BUONG HAKBANG 4 CONTAINER (HOSTINGER & RESTRICTED WORKAROUND) === -->


    <!-- [INSIDE HAKBANG 4] THE WORKAROUND BLUEPRINT WITH INLINE EDIT GLOW TAGS -->
    <div class="card mb-4" style="border: 1px solid #2d2d2d; background: #1e1e1e; padding: 20px;">
        <p class="text-light" style="font-size: 13px; font-weight: bold; margin-bottom: 5px; color: #ff4d4d;">
            <strong>🚨 PAALALA: Ang code sa ibaba ay para sa HOSTINGER SHARED HOSTING LAMANG! Eksaktong laman ng iyong automation config file (I-tweak ang php-version base sa iyong 'php -v'):</strong>
        </p>
        
        @verbatim
        <pre style="border: 1px solid #cca43b; background-color: #111; padding: 15px; overflow-x: auto; border-radius: 6px;"><code style="color: #a5a5a5; font-weight: bold;">name: BizzSoft Auto Deploy

on:
  push:
    branches:
      - main # 💡 EDIT MO DITO: Palitan kung iba ang default branch mo (hal. master)

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout Repository
        uses: actions/checkout@v4

      - name: Deploy to Hostinger
        uses: appleboy/ssh-action@v1.0.3
        with:
          host: 145.79.28.207 # 💡 EDIT MO DITO: Palitan ng bagong Server IP Address
          username: u180948312 # 💡 EDIT MO DITO: Palitan ng bagong SSH Username
          key: ${{ secrets.SSH_PRIVATE_KEY }} # Mantinihin ito (basta naka-set ang tamang Private Key sa GitHub Secrets)
          port: 65002 # 💡 EDIT MO DITO: Palitan kung hindi Hostinger ang gamit (Default ng iba ay 22)
          script: |
            cd /home/u180948312/laravel_app # 💡 EDIT MO DITO: Palitan ng eksaktong folder path ng bagong project mo sa server

            echo "Current Directory:"
            pwd

            echo "Pulling latest code..."
            git pull origin main || exit 1 # 💡 EDIT MO DITO: Palitan ang 'main' kung iba ang pangalan ng branch mo

            echo "Installing Composer Dependencies..."
            /opt/alt/php83/usr/bin/php -d "disable_functions=" /usr/local/bin/composer2 install --no-interaction --prefer-dist --optimize-autoloader || exit 1 # 💡 EDIT MO DITO: Palitan ang php83 base sa bersyon ng PHP ng bagong server

            echo "Running Database Migrations..."
            /opt/alt/php83/usr/bin/php artisan migrate --force || exit 1 # 💡 EDIT MO DITO: Isabay sa pag-update ng PHP version path kung lilipat ng environment

            echo "Optimizing Laravel..."
            /opt/alt/php83/usr/bin/php artisan optimize || exit 1

            echo "✅ Deployment completed successfully!"</code><button class="copy-btn" onclick="copyCode(this)">Copy</button></pre>
        @endverbatim
    </div>
</div>
<!-- === END OF HAKBANG 4 === -->




















          








    
 
@endsection
