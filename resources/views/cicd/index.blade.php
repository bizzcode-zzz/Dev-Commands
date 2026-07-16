@extends('layouts.app')

@section('title', 'CI/CD Automation - DevCommands')

@section('content')
<div class="mb-5">
    <h2 class="section-title" style="color: #0dcaf0;">🤖 Seksyon 4: Pag-unawa sa CI/CD Robot Workflow (Actions & Runner)</h2>
    <p class="text-muted mb-4">Gabay sa pag-configure ng automated tests at integration sa loob ng GitHub website nang walang kahit anong idina-download sa iyong local PC.</p>

    <!-- WHAT IS CI/CD -->
    <div class="card mb-4 border-info">
        <h4 class="card-title" style="color: #0dcaf0;">🚀 Ano ang ibig sabihin ng CI/CD sa Modern DevOps?</h4>
        <p class="card-text">
            <strong>CI (Continuous Integration):</strong> Isang automated robot na gigising sa sandaling mag-push ka ng code sa GitHub. Automatic nitong patatakbuhin ang iyong mga Laravel tests para masigurong walang error bago ka mag-merge.<br><br>
            <strong>CD (Continuous Deployment):</strong> Kapag na-merge na ang Pull Request, ang robot na mismo ang mag-a-upload at mag-e-execute ng commands sa iyong live production server para awtomatikong maging live ang website.
        </p>
    </div>

       <!-- THE RUNNER AND BLANK CONTAINER LOGIC -->
    <div class="card mb-4 border-success">
        <h4 class="card-title" style="color: #198754;">🧠 Ang Lohika ng Runner at ang GitHub Checkout System</h4>
        <p class="card-text">
            <strong>Ang Sitwasyon:</strong> Ang GitHub Actions Runner ay isang <em>temporary virtual computer</em> sa cloud na blangko pagkabukas. Wala siyang app/, routes/, o resources/ folders ng Laravel mo. <br><br>
            Upang makuha niya ang code ng project mo, kailangan niyang patakbuhin ang built-in utility checkout rule sa pinakaunang step.
        </p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">Ang mahiwagang utos na awtomatikong mag-co-clone ng iyong project sa loob ng Runner hard drive:</p>
        <pre><code>- uses: <span class="ans">actions/checkout@v4</span></code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px;">💡 Kung tatanggalin mo ang linyang ito, sasabog ang Runner dahil magrereklamo ito na blangko ang kanyang system directory!</p>
    </div>

       <!-- THE BLUEPRINT WORKFLOW CONFIGURATION -->
    <div class="card mb-4 border-danger" style="border: 1px solid #ff4d4d !important;">
        <h4 class="card-title" style="color: #ff4d4d;">🛠️ HAKBANG 1: Pag-set up ng Blueprint File (.github/workflows/deploy.yml)</h4>
        <p class="card-text"><strong>Paano i-setup:</strong> Sa pinaka-root folder ng iyong Laravel project (sa tabi ng app at routes), gumawa ng folder na pinangalanang <code>.github</code>, sa loob nito ay gumawa ng folder na <code>workflows</code>, at likhain ang file na <code>deploy.yml</code>. I-paste ang code sa ibaba at i-push sa GitHub.</p>
        
        <!-- ⚡ SHORTCUT COMMAND BOX (BAGONG SINGIT ITO, BRO!) -->
        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;"><strong>⚡ 1-Click Shortcut Terminal Command (Isang enteran lang sa VS Code Terminal):</strong></p>
        <div style="background: #161616; padding: 12px; border-radius: 6px; border: 1px solid #2d2d2d; font-size: 13px; margin-bottom: 15px;">
            <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">Option A: Kung terminal mo ay Windows PowerShell (Default sa Windows):</p>
            <pre style="margin-bottom: 12px;"><code>mkdir -p .github/workflows; New-Item -ItemType File -Path ".github/workflows/deploy.yml" -Force</code></pre>
            
            <p style="margin-bottom: 5px; font-weight: bold; color: #0dcaf0;">Option B: Kung terminal mo ay Git Bash o Linux Terminal:</p>
            <pre style="margin-bottom: 0;"><code>mkdir -p .github/workflows && touch .github/workflows/deploy.yml</code></pre>
        </div>

        <!-- 📂 VISUAL STRUCTURE BOX -->
        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;"><strong>Visual Folder Structure (Ganito dapat ang hitsura sa VS Code mo):</strong></p>
        <pre><code style="color: #b3b3b3;">📁 iyong-laravel-project/  <span class="text-muted">(Root Folder)</span>
├── 📁 app/
├── 📁 bootstrap/
├── 📁 config/
├── <span style="color: #ff4d4d;">📁 .github/</span>           <span class="text-muted">◄── Gagawa ka ng folder na may tuldok sa unahan</span>
│   └── <span style="color: #ff4d4d;">📁 workflows/</span>     <span class="text-muted">◄── Sa loob nito, gagawa ka ng "workflows" folder</span>
│       └── <span style="color: #4db97a;">📄 deploy.yml</span>   <span class="text-muted">◄── Dito mo ipe-paste ang code ng robot sa ibaba!</span>
├── 📁 public/
├── 📁 resources/
├── 📁 routes/
└── 📄 .env</code></pre>


        <p class="text-light" style="font-size: 14px; margin-top: 20px; margin-bottom: 3px;"><strong>Eksaktong Hakbang para Mapagana ang Robot:</strong></p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 5px;">1. Sundan ang visual tree sa itaas at gawin ang mga folders at file sa iyong VS Code.</p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 5px;">2. Kopyahin ang buong code ng robot sa ibaba at i-paste ito sa loob ng <code>deploy</code>.</p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">3. Patakbuhin ang mga sumusunod na hakbang base sa kung saan ito dapat i-execute:</p>

        <!-- 🖥️ LOCAL PC SECTION -->
        <p class="text-light" style="font-size: 13px; font-weight: bold; margin-bottom: 3px; color: #ffc107;">📍 [A] ITATAYP MO SA LOCAL PC (VS Code Terminal):</p>
        <p class="text-muted" style="font-size: 12px; margin-bottom: 5px;">I-push ang file para mai-save online at magising ang robot sa GitHub website:</p>
        <pre><code>git add .github/workflows/deploy
git commit -m "Add GitHub Actions CI robot blueprint"
git push origin main</code></pre>

        <!-- 🤖 AUTOMATED LIVE SERVER SECTION -->
        <p class="text-light" style="font-size: 13px; font-weight: bold; margin-top: 15px; margin-bottom: 3px; color: #4db97a;">🤖 [B] AUTOMATIC NA IPINIPINDOT NG ROBOT SA LIVE SERVER (Dito wala ka nang itatayp):</p>
        <p class="text-muted" style="font-size: 12px; margin-bottom: 5px;">Kapag pumasok ang push mo sa GitHub, ang robot na ang kusang mag-e-SSH sa live server mo para mag-execute ng mga ito sa background:</p>
        <div style="background: #161616; padding: 12px; border-radius: 6px; border: 1px solid #2d2d2d; font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.5; margin-bottom: 15px;">
            <span style="color: #4db97a; font-weight: bold;">cd /var/www/html/project-folder</span> <span class="text-muted">➔ Papasukin ang live project directory</span><br>
            <span style="color: #4db97a; font-weight: bold;">git pull origin main</span> <span class="text-muted">➔ Hihilahin/i-co-clone ang bagong system codes</span><br>
            <span style="color: #4db97a; font-weight: bold;">php artisan migrate --force</span> <span class="text-muted">➔ Awtomatikong ia-update ang database tables</span>
        </div>

      <p class="text-light" style="font-size: 14px; margin-top: 20px; margin-bottom: 3px;"><strong>Eksaktong laman ng iyong automation config file (I-tweak ang php-version base sa iyong 'php -v'):</strong></p>

@verbatim
<pre style="border: 1px solid #cca43b; background-color: #1a1a15; padding: 15px; margin-top: 5px; box-shadow: 0 0 10px rgba(204, 164, 59, 0.1); overflow-x: auto; border-radius: 6px;"><code style="color: #a5a5a5; font-weight: bold;">name: Laravel CI/CD Pipeline

on:
  push:
    branches: [ "main" ]
  pull_request:
    branches: [ "main" ]

jobs:
  laravel-tests:
    runs-on: ubuntu-latest
    steps:
    - uses: actions/checkout@v4

    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2' # Pwede mong palitan ng '8.3' o '8.4' depende sa gamit mo ngayon
        extensions: mbstring, xml, ctype, iconv, mysql, sqlite3
        tools: phpunit

    - name: Copy .env
      run: php -r "file_exists('.env') || copy('.env.example', '.env');"

    - name: Install Dependencies
      run: composer install --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

    - name: Generate key
      run: php artisan key:generate

    - name: Create SQLite Database for Testing
      run: |
        mkdir -p database
        touch database/database.sqlite

    - name: Execute tests
      env:
        DB_CONNECTION: sqlite
        DB_DATABASE: database/database.sqlite
      run: php artisan test

  deploy-to-live:
    runs-on: ubuntu-latest
    needs: laravel-tests
    if: github.event_name == 'push' # Tinitiyak na kapag hinalo lang sa branch ang code saka mag-di-deploy
    steps:
    - name: Executing remote ssh commands using password
      uses: appleboy/ssh-action@v1.0.3
      with:
        host: "${{ secrets.SSH_HOST }}"
        username: "${{ secrets.SSH_USERNAME }}"
        password: "${{ secrets.SSH_PASSWORD }}"
        port: 22
        script: |
          <span style="color: #e0be6c;"># PUMASOK SA FOLDER NG IYONG PROJECT (Palitan ang "iyong-project-folder-sa-server" sa totoong pangalan ng folder mo!)</span>
          cd /var/www/html/<span style="color: #e0be6c;">iyong-project-folder-sa-server</span>
          
          # 1. MAINTENANCE MODE (Para iwas crash sa active users)
          php artisan down --retry=60
          
          # 2. PULL LATEST CODE
          git pull origin main
          
          # 3. UPDATE COMPOSER LIBRARIES (Para sa mga bagong packages)
          composer install --no-dev --optimize-autoloader --no-interaction
          
          # 4. RUN MIGRATIONS SAFE WITH FORCE
          php artisan migrate --force
          
          # 5. CACHE AND OPTIMIZE SPEED
          php artisan optimize
          
          # 6. OPEN SITE AGAIN TO PUBLIC
          php artisan up</code></pre>
@endverbatim

<p class="text-muted" style="font-size: 13px; margin-top: 5px;">⚠️ <strong>Tandaan:</strong> Ang file na ito ay hindi kailanman mabubura sa iyong server o GitHub pagkatapos ng push. Mananatili ito sa iyong root folder bilang permanenteng manual blueprint ng robot tuwing may bagong transaction ang team!</p>
</div>



      <!-- 🚨 MAHALAGANG PAALALA BAGO I-COPY ANG BLUEPRINT -->
<div style="background: #1e1e1e; padding: 20px; border-radius: 8px; border: 1px solid #ffc107; font-size: 14px; margin-top: 25px; margin-bottom: 20px;">
    <p style="margin-bottom: 8px; font-weight: bold; color: #ffc107; font-size: 16px;">⚠️ MAHALAGANG PAALALA SA PAG-COPY:</p>
    <p style="margin-bottom: 12px; line-height: 1.6; color: #f8f9fa;">Kung wala ka pang balak o wala ka pang hawak na <strong>SSH Login Details</strong> para sa live server mo ngayon, <strong>BURAHIN O HUWAG MONG ISASAMA</strong> itong eksaktong bahagi na ito sa pinaka-dulo ng iyong <code>deploy</code> file:</p>
    
    <!-- ✂️ YELLOW MATT BOX -->
    <p style="margin-bottom: 5px; font-size: 13px; color: #d4a373; font-weight: bold; letter-spacing: 0.5px;"># ITO ANG BUONG PARTE NA BUBURAHIN MO KUNG LOCAL TESTING / CI LANG ANG GUSTO MO:</p>
    
    @verbatim
    <pre style="border: 1px solid #cca43b; background-color: #1a1a15; padding: 15px; margin-top: 5px; box-shadow: 0 0 10px rgba(204, 164, 59, 0.1); overflow-x: auto; border-radius: 6px;"><code style="color: #a5a5a5; font-weight: bold;">  deploy-to-live:
    runs-on: ubuntu-latest
    needs: laravel-tests
    if: github.event_name == 'push' # Tinitiyak na kapag hinalo lang sa branch ang code saka mag-di-deploy
    steps:
    - name: Executing remote ssh commands using password
      uses: appleboy/ssh-action@v1.0.3
      with:
        host: "${{ secrets.SSH_HOST }}"
        username: "${{ secrets.SSH_USERNAME }}"
        password: "${{ secrets.SSH_PASSWORD }}"
        port: 22
        script: |
          <span style="color: #e0be6c;"># PUMASOK SA FOLDER NG IYONG PROJECT (Palitan ang "iyong-project-folder-sa-server" sa totoong pangalan ng folder mo!)</span>
          cd /var/www/html/<span style="color: #e0be6c;">iyong-project-folder-sa-server</span>
          
          # 1. MAINTENANCE MODE (Para iwas crash sa active users)
          php artisan down --retry=60
          
          # 2. PULL LATEST CODE
          git pull origin main
          
          # 3. UPDATE COMPOSER LIBRARIES (Para sa mga bagong packages)
          composer install --no-dev --optimize-autoloader --no-interaction
          
          # 4. RUN MIGRATIONS SAFE WITH FORCE
          php artisan migrate --force
          
          # 5. CACHE AND OPTIMIZE SPEED
          php artisan optimize
          
          # 6. OPEN SITE AGAIN TO PUBLIC
          php artisan up</code></pre>
    @endverbatim

    <p style="margin-bottom: 0; line-height: 1.6; font-size: 13px; margin-top: 12px; color: #6c757d;">💡 <strong>Resulta kapag tinanggal:</strong> Ang maiiwan na lang sa file mo ay hanggang <code>php artisan test</code>. Magpapatakbo pa rin ng clone at test ang robot tuwing nagpu-push ka, pero hindi na ito mag-e-error ng kulay pula dahil hindi na hahanapin ang SSH settings online. Kapag ready ka na mag-live balang araw, balikan mo lang ang file na ito at idugtong uli ang bahaging iyan!</p>
</div>








            <!-- 🛠️ NEW GENERATE SSH KEY PAIR MANUAL SHORTCUT (BAGONG SINGIT ITO, BRO!) -->
    <p class="text-light" style="font-size: 14px; margin-top: 25px; margin-bottom: 3px;"><strong>🛠️ HAKBANG 2: Paano Gumawa ng Susi sa Computer Mo (No-Brainer Step-by-Step):</strong></p>
    <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">Bago mo i-paste ang mga susi sa Hostinger at GitHub website, i-type muna ito sa terminal ng iyong computer para mag-generate ng selyadong Key Pair:</p>
    
    <div style="background: #161616; padding: 20px; border-radius: 8px; border: 1px solid #198754; font-size: 13px; box-shadow: 0 0 10px rgba(25, 135, 84, 0.1); line-height: 1.6;">
        <p style="margin-bottom: 5px; font-weight: bold; color: #4db97a;">🏗️ STEP 1: Patakbuhin ito sa Windows PowerShell ng VS Code:</p>
        <pre style="margin-bottom: 15px;"><code>ssh-keygen -t ed25519 -C "github-actions"</code></pre>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">❓ Question: Ano ang mangyayari pagkapindot ng Enter?</p>
        <p style="margin-bottom: 15px; margin-left: 10px;" class="text-light">Makikita mo sa screen ang mensaheng: <code style="color: #4db97a;">Generating public/private ed25519 key pair.</code></p>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">💬 Tatanungin ka: "Enter file in which to save the key..."</p>
        <p style="margin-bottom: 15px; margin-left: 10px;" class="text-light">➔ Anong gagawin? Press mo lang ang <strong style="color: #0dcaf0;">ENTER</strong> para mapunta sa default location nito.</p>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">💬 Tatanungin ka ulit: "Enter passphrase..." 🤣🤣🤣</p>
        <p style="margin-bottom: 15px; margin-left: 10px;" class="text-light">➔ Para sa automated GitHub Actions robot, leave it blank muna! Pindutin mo lang ang: <br>
        1. <strong style="color: #0dcaf0;">ENTER</strong> <span class="text-muted">(Para sa passphrase)</span><br>
        2. <strong style="color: #0dcaf0;">ENTER</strong> <span class="text-muted">(Para sa confirmation)</span></p>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #4db97a;">🎉💥 THE RESULT:</p>
        <p style="margin-bottom: 15px; margin-left: 10px;" class="text-light">Awtomatikong gagawa ang computer mo ng dalawang (2) mahahalagang selyadong files sa iyong local user folder:<br>
        • 📂 <code style="color: #ff4d4d;">id_ed25519</code> ➔ Ito ang iyong <strong>Private Key</strong> (Ang itatago at ilalagay mo sa GitHub Secrets).<br>
        • 📂 <code style="color: #0dcaf0;">id_ed25519.pub</code> ➔ Ito ang iyong <strong>Public Key</strong> (Ang ipapamigay at ititanim mo sa Hostinger SSH keys section).</p>

        <!-- 📝 NEXT STEP INSTRUCTION (MISMONG SINGIT DITO, BRO!) -->
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107; margin-top: 20px; border-top: 1px solid #2d2d2d; padding-top: 15px;">📋 NEXT STEP: Paano buksan ang mga files para makita at makoya ang code gamit ang Notepad++</p>
        <div style="background: #252525; padding: 12px; border-radius: 6px; border: 1px solid #3d3d3d; font-size: 12px; margin-left: 10px; line-height: 1.6;">
            <p style="margin-bottom: 5px; font-weight: bold; color: #0dcaf0;">Sundin ang mga simpleng hakbang na ito:</p>
            <ol style="margin-bottom: 10px; padding-left: 20px;" class="text-light">
                <li>Pumunta sa iyong computer user directory (Karaniwang nasa folder path na: <code>C:\Users\iyong-pc-username\.ssh\</code>).</li>
                <li>Hanapin ang dalawang selyadong files na nagawa sa itaas (<code>id_ed25519</code> at <code>id_ed25519.pub</code>).</li>
                <li>Gawin ang **Right-Click** sa file na nais mong buksan.</li>
                <li>Pindutin ang <strong>Open with Notepad++</strong> sa dropdown option panel.</li>
                <li>Awtomatikong magpa-pop-up ang file at makikita mo na ang purong code ng iyong mga keys para i-copy paste!</li>
            </ol>
        </div>
    </div>

        

</div>









    

    

    <!-- SEPARATE CARD 1: GITHUB & HOSTINGER CONFIGURATION (COMPLETED BY BRO!) -->
<div class="card mb-4 border-info">
    <h4 class="card-title" style="color: #0dcaf0;">🔐 HAKBANG 3: Pagtatanim ng mga Susi sa Hostinger at GitHub</h4>
    <p class="card-text">Upang makapasok ang robot sa iyong live server nang ligtas at hindi lantad ang mga passwords mo sa code, kailangan mong itanim ang Public Key sa iyong Hosting at ang Private Key naman sa selyadong vault ng GitHub.</p>
    
    <!-- 🔑 THE SSH KEY PAIR CONTEXT EXTRA -->
    <p class="text-light" style="font-size: 14px; margin-top: 25px; margin-bottom: 3px;"><strong>🔑 Pag-unawa sa SSH Key Pair (Public vs Private Key):</strong></p>
    <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">Ang SSH Key Pair ay hindi isang solong password, kundi binubuo ng dalawang (2) magkaibang selyo:</p>
    
    <div style="background: #161616; padding: 15px; border-radius: 6px; border: 1px solid #2d2d2d; font-size: 13px; margin-bottom: 20px;">
        <p style="margin-bottom: 5px; font-weight: bold; color: #0dcaf0;">🔓 Public Key (Ang Bukas na Susi ng id_ed25519.pub):</p>
        <p style="margin-bottom: 3px; margin-left: 10px;" class="text-light">• Ito ang inilalagay at itinatali sa settings ng Hostinger mo.</p>
        <p style="margin-bottom: 12px; margin-left: 10px;" class="text-muted">➔ Pwede itong makita ng kahit sino at HINDI ito pinoprotektahang secret.</p>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #ff4d4d;">🔒 Private Key (Ang Lihim na Susi ng id_ed25519):</p>
        <p style="margin-bottom: 3px; margin-left: 10px;" class="text-light">• Ito ang itinatago sa PC mo at ang <strong>mismong text na ilalagay mo sa GitHub Secrets</strong>.</p>
        <p style="margin-bottom: 0; margin-left: 10px;" class="text-muted">➔ Ito ay selyadong-secret at HINDI dapat ibigay o ipakita kahit kanino!</p>
    </div>

    <!-- 🌐 PART A: HOSTINGER INSTRUCTION (BAGONG DAGDAG, BRO!) -->
    <p class="text-light" style="font-size: 14px; margin-top: 25px; margin-bottom: 3px;"><strong>🖥️ PART A: Pag-paste ng Public Key sa Hostinger Panel</strong></p>
    <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">Sundin ang mga hakbang na ito sa iyong Hostinger hPanel para payagan ang koneksyon:</p>
    
    <div style="background: #161616; padding: 15px; border-radius: 6px; border: 1px solid #198754; font-size: 13px; margin-bottom: 25px; line-height: 1.6;">
        <ol style="padding-left: 20px; margin-bottom: 15px;" class="text-light">
            <li>Mag-login sa iyong <strong>Hostinger hPanel</strong> at pumunta sa Dashboard ng iyong website/server.</li>
            <li>Sa kaliwang menu, hanapin at i-click ang <strong>Advanced</strong> tapos piliin ang <strong>SSH Access</strong> o hanapin ang <strong>SSH keys</strong> page.</li>
            <li>Hanapin ang section na may titulong <strong>Add SSH Key</strong>.</li>
        </ol>
        
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">📝 Punan ang mga detalye gaya ng halimbawang ito:</p>
        <div style="background: #252525; padding: 12px; border-radius: 6px; border: 1px solid #3d3d3d; font-size: 12px; margin-left: 10px; margin-bottom: 15px;">
            <p style="margin-bottom: 5px;" class="text-light">➔ <strong>Key Name:</strong> <code style="color: #0dcaf0;">BizzSoft Auto Deploy</code> <span class="text-muted">(O kahit anong pangalan na gusto mo)</span></p>
            <p style="margin-bottom: 0;" class="text-light">➔ <strong>Public Key:</strong> <span class="text-muted">I-paste dito ang kinopya mong code mula sa iyong <code>id_ed25519.pub</code> file.</span></p>
            <pre style="margin-top: 5px; margin-bottom: 0; background: #111; padding: 8px; font-size: 11px;"><code style="color: #4db97a;">ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAA... github-actions</code></pre>
        </div>
        
        <p style="margin-bottom: 0;" class="text-light">4. Pagkatapos ma-paste, i-click ang button na <strong>Add Record</strong> o <strong>Add Key</strong>. Ok na ang server mo!</p>
    </div>

    <!-- 🌐 PART B: GITHUB INSTRUCTION -->
    <p class="text-light" style="font-size: 14px; margin-top: 25px; margin-bottom: 3px;"><strong>🖥️ PART B: Pag-paste ng Private Key sa GitHub Secrets</strong></p>
    <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">Ngayon, pumunta naman sa iyong GitHub Repository sa browser para itago ang iyong Private Key:</p>
    
    <!-- GITHUB WEBSITE NAVIGATION VISUAL -->
    <pre style="margin-bottom: 15px;"><code style="color: #b3b3b3;">🌐 https://github.com
├── ⚙️ [Settings]           <span class="text-muted">◄── I-click ang Settings tab sa horizontal menu ng iyong Repository</span>
│   └── 🛡️ Security /       <span class="text-muted">◄── Hanapin sa kaliwang sidebar menu ang 'Security' block</span>
│       └── 🔑 <strong style="color: #0dcaf0;">Secrets and variables</strong> <span class="text-muted">◄── Pindutin ito para bumaba ang submenu</span>
│           └── 🤖 <strong style="color: #4db97a;">Actions</strong>  <span class="text-muted">◄── I-click ang 'Actions' para pumasok sa panel</span>
└── 🟩 [New repository secret] <span class="text-muted">◄── I-click ang berdeng button sa kanang bahagi sa itaas</span></code></pre>

    <div style="background: #161616; padding: 15px; border-radius: 6px; border: 1px solid #0dcaf0; font-size: 13px; line-height: 1.6;">
        <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">📝 Pag-puno sa mga Kahon ng New Secret (Form Input):</p>
        <p style="margin-bottom: 10px;" class="text-muted">Pagkapasok mo sa repository secret panel, punan ang dalawang field gamit ang halimbawang ito:</p>
        
        <div style="background: #252525; padding: 12px; border-radius: 6px; border: 1px solid #3d3d3d; font-size: 12px; margin-left: 10px; margin-bottom: 15px;">
            <p style="margin-bottom: 8px;" class="text-light">➔ <strong>Name:</strong> <code style="color: #ffc107; font-size: 13px; font-weight: bold;">SSH_PRIVATE_KEY</code> <br>
            <span class="text-muted" style="font-size: 11px; margin-left: 15px;">(Tandaan: Dapat malalaking titik at tugma sa nakasulat sa iyong deploy.yml file)</span></p>
            
            <p style="margin-bottom: 0;" class="text-light">➔ <strong>Secret:</strong> <span class="text-muted">I-paste dito ang BUONG purong code na kinopya mo mula sa iyong <code>id_ed25519</code> file.</span></p>
            <pre style="margin-top: 5px; margin-bottom: 0; background: #111; padding: 8px; font-size: 11px; line-height: 1.3;"><code style="color: #ff4d4d;">-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW
ZDI1NTE5AAAAII... (at marami pang random characters pababa)
-----END OPENSSH PRIVATE KEY-----</code></pre>
            <span class="text-muted" style="font-size: 11px; margin-left: 15px; display: block; margin-top: 5px;">⚠️ Paalala: Isama mo dapat sa pag-copy pati ang BEGIN at END lines!</span>
        </div>
        
        <p style="margin-bottom: 0;" class="text-light">5. Pagkatapos mapunan, i-click ang berdeng button na <strong>Add secret</strong> sa ilalim.</p>
    </div>
    
    <p class="text-muted" style="font-size: 13px; margin-top: 15px;">💡 <strong>Tandaan:</strong> Pagkatapos mong i-click ang Add secret, awtomatiko itong itatago at ie-encrypt ng GitHub. Ang robot na lamang ang makakabasa nito sa oras na mag-deploy na kayo.</p>
</div>


    

    <!-- ADDITIONAL LOCAL CHEAT SHEET FOR THE TEAM -->
    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">💻 Mabilisang Gabay sa Local PC (Git Commands)</h4>
        <p class="card-text">Gagamitin ito ng mga developer sa kanilang sariling VS Code Terminal para mag-sync mula sa GitHub website papunta sa kanilang computer.</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">1. Pang-unang beses o panimula (I-clone ang buong project sa bagong PC):</p>
        <pre><code>git clone <span class="ans">https://github.com</span></code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">2. Pang-araw-araw na pag-update (Hilahin ang pinakabagong na-merge na code mula sa website):</p>
        <pre><code>git pull origin <span class="ans">main</span></code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px;">💡 Siguraduhing naka-checkout ka sa 'main' branch bago mag-pull para i-test ang bago mong gawa.</p>
    </div>
</div>
@endsection
