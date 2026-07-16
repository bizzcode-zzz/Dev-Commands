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
        <h4 class="card-title" style="color: #ff4d4d;">🛠️ Ang Workflow Blueprint: .github/workflows/laravel.yml</h4>
        <p class="card-text"><strong>Paano i-setup:</strong> Sa pinaka-root folder ng iyong Laravel project (sa tabi ng app at routes), gumawa ng folder na pinangalanang <code>.github</code>, sa loob nito ay gumawa ng folder na <code>workflows</code>, at likhain the file na <code>laravel.yml</code>. I-paste ang code sa ibaba at i-push sa GitHub.</p>
        
        <!-- 📂 VISUAL STRUCTURE BOX -->
        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;"><strong>Visual Folder Structure (Ganito dapat ang hitsura sa VS Code mo):</strong></p>
        <pre><code style="color: #b3b3b3;">📁 iyong-laravel-project/  <span class="text-muted">(Root Folder)</span>
├── 📁 app/
├── 📁 bootstrap/
├── 📁 config/
├── <span style="color: #ff4d4d;">📁 .github/</span>           <span class="text-muted">◄── Gagawa ka ng folder na may tuldok sa unahan</span>
│   └── <span style="color: #ff4d4d;">📁 workflows/</span>     <span class="text-muted">◄── Sa loob nito, gagawa ka ng "workflows" folder</span>
│       └── <span style="color: #4db97a;">📄 laravel.yml</span>   <span class="text-muted">◄── Dito mo ipe-paste ang code ng robot sa ibaba!</span>
├── 📁 public/
├── 📁 resources/
├── 📁 routes/
└── 📄 .env</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 20px; margin-bottom: 3px;"><strong>Eksaktong Hakbang para Mapagana ang Robot:</strong></p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 5px;">1. Sundan ang visual tree sa itaas at gawin ang mga folders at file sa iyong VS Code.</p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 5px;">2. Kopyahin ang buong code ng robot sa ibaba at i-paste ito sa loob ng <code>laravel.yml</code>.</p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 10px;">3. Patakbuhin ang mga sumusunod na hakbang base sa kung saan ito dapat i-execute:</p>

        <!-- 🖥️ LOCAL PC SECTION -->
        <p class="text-light" style="font-size: 13px; font-weight: bold; margin-bottom: 3px; color: #ffc107;">📍 [A] ITATAYP MO SA LOCAL PC (VS Code Terminal):</p>
        <p class="text-muted" style="font-size: 12px; margin-bottom: 5px;">I-push ang file para mai-save online at magising ang robot sa GitHub website:</p>
        <pre><code>git add .github/workflows/laravel.yml
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
<pre><code>name: Laravel CI/CD Pipeline

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
        php-version: '8.2'
        extensions: mbstring, xml, ctype, iconv, mysql

    - name: Copy .env
      run: php -r "file_exists('.env') || copy('.env.example', '.env');"

    - name: Install Dependencies
      run: composer install --q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

    - name: Generate key
      run: php artisan key:generate

    - name: Execute tests
      run: php artisan test

  deploy-to-live:
    runs-on: ubuntu-latest
    needs: laravel-tests
    steps:
    - name: Executing remote ssh commands using password
      uses: appleboy/ssh-action@v1.0.3
      with:
        host: &#x7B;&#x7B; secrets.SSH_HOST &#x7D;&#x7D;
        username: &#x7B;&#x7B; secrets.SSH_USERNAME &#x7D;&#x7D;
        password: &#x7B;&#x7B; secrets.SSH_PASSWORD &#x7D;&#x7D;
        port: 22
        script: |
          cd /var/www/html/iyong-project-folder-sa-server
          git pull origin main
          php artisan migrate --force
          php artisan config:cache
          php artisan route:cache
          php artisan view:cache</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px;">⚠️ <strong>Tandaan:</strong> Ang file na ito ay hindi kailanman mabubura sa iyong server o GitHub pagkatapos ng push. Mananatili ito sa iyong root folder bilang permanenteng manual blueprint ng robot tuwing may bagong transaction ang team!</p>
    </div>



              <!-- 🚨 MAHALAGANG PAALALA BAGO I-COPY ANG BLUEPRINT -->
        <div style="background: #1e1e1e; padding: 20px; border-radius: 8px; border: 1px solid #ffc107; font-size: 14px; margin-top: 25px; margin-bottom: 20px;">
            <p style="margin-bottom: 8px; font-weight: bold; color: #ffc107; font-size: 16px;">⚠️ MAHALAGANG PAALALA SA PAG-COPY:</p>
            <p style="margin-bottom: 12px; line-height: 1.6;" class="text-light">Kung wala ka pang balak o wala ka pang hawak na <strong>SSH Login Details</strong> para sa live server mo ngayon, <strong>BURAHIN O HUWAG MONG ISASAMA</strong> itong eksaktong bahagi na ito sa pinaka-dulo ng iyong <code>laravel.yml</code> file:</p>
            
            <!-- ✂️ HIGH-CONTRAST NEON GREEN BOX -->
            <p style="margin-bottom: 5px; font-size: 13px; color: #198754; font-weight: bold; letter-spacing: 0.5px;"># ITO ANG BUONG PARTE NA BUBURAHIN MO KUNG LOCAL TESTING / CI LANG ANG GUSTO MO:</p>
            <pre style="border: 1px solid #198754; background-color: #161616; padding: 15px; margin-top: 5px; box-shadow: 0 0 10px rgba(25, 135, 84, 0.15);"><code style="color: #4db97a; font-weight: bold;">  deploy-to-live:
    runs-on: ubuntu-latest
    needs: laravel-tests
    steps:
    - name: Executing remote ssh commands using password
      uses: appleboy/ssh-action@v1.0.3
      with:
        host: &#x7B;&#x7B; secrets.SSH_HOST &#x7D;&#x7D;
        username: &#x7B;&#x7B; secrets.SSH_USERNAME &#x7D;&#x7D;
        password: &#x7B;&#x7B; secrets.SSH_PASSWORD &#x7D;&#x7D;
        port: 22
        script: |
          # 🚨 PALATANDAAN: Palitan ang "iyong-project-folder-sa-server" sa totoong pangalan ng folder mo sa server!
          cd /var/www/html/iyong-project-folder-sa-server
          git pull origin main
          php artisan migrate --force
          php artisan config:cache
          php artisan route:cache
          php artisan view:cache</code></pre>

            <p style="margin-bottom: 0; line-height: 1.6; font-size: 13px; margin-top: 12px;" class="text-muted">💡 <strong>Resulta kapag tinanggal:</strong> Ang maiiwan na lang sa file mo ay hanggang <code>php artisan test</code>. Magpapatakbo pa rin ng clone at test ang robot tuwing nagpu-push ka, pero hindi na ito mag-e-error ng kulay pula dahil hindi na hahanapin ang SSH settings online. Kapag ready ka na mag-live balang araw, balikan mo lang ang file na ito at idugtong uli ang bahaging iyan!</p>
        </div>







    

    

    <!-- SEPARATE CARD 1: GITHUB SECRETS CONFIGURATION (UPDATED WITH UI INSTRUCTIONS) -->
    <div class="card mb-4 border-info">
        <h4 class="card-title" style="color: #0dcaf0;">🔐 HAKBANG 1: Pag-set up ng Ligtas na SSH Keys sa GitHub Secrets</h4>
        <p class="card-text">Upang makapasok ang robot sa iyong live server nang ligtas at hindi lantad ang mga passwords mo sa code, kailangan mong i-save ang mga credentials sa selyadong vault ng GitHub.</p>
        
        <!-- 🖥️ GITHUB WEBSITE NAVIGATION VISUAL -->
        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;"><strong>Ruta at Pag-navigate sa GitHub Website (Sundan ito sa Browser mo):</strong></p>
        <pre><code style="color: #b3b3b3;">🌐 ://github.com
├── ⚙️ [Settings]           <span class="text-muted">◄── I-click ang Gear icon sa pinakataas na horizontal menu</span>
│   └── 🛡️ Security /       <span class="text-muted">◄── Hanapin sa kaliwang sidebar menu ang 'Security' block</span>
│       └── 🔑 <strong style="color: #0dcaf0;">Secrets and variables</strong> <span class="text-muted">◄── Pindutin ito para bumaba ang submenu</span>
│           └── 🤖 <strong style="color: #4db97a;">Actions</strong>  <span class="text-muted">◄── I-click ang 'Actions' para pumasok sa panel</span>
└── 🟩 [New repository secret] <span class="text-muted">◄── I-click ang berdeng button sa kanang bahagi sa itaas</span></code></pre>

        <!-- 📝 STEP-BY-STEP FIELD INSTRUCTIONS (MALINIS NA COPY-PASTE VERSION, BRO) -->
        <p class="text-light" style="font-size: 14px; margin-top: 20px; margin-bottom: 3px;"><strong>Eksaktong Detalye na Ilalagay mo sa bawat Secret Entry:</strong></p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 8px;">I-click ang <strong>New repository secret</strong> para sa bawat isa sa tatlong (3) variable na ito:</p>
        
        <div style="background: #161616; padding: 15px; border-radius: 6px; border: 1px solid #2d2d2d; font-size: 13px;">
            <!-- FIRST SECRET STEP -->
            <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">HAKBANG 1: Para sa IP Address ng Server</p>
            <p style="margin-bottom: 3px; margin-left: 10px;">a. Sa kahon ng <strong>Name</strong>, i-type: <code>SSH_HOST</code></p>
            <p style="margin-bottom: 5px; margin-left: 10px;">b. Sa malaking kahon ng <strong>Secret/Value</strong>, i-paste ang iyong IP (hal: <code>123.456.78.9</code>)</p>
            <p style="margin-bottom: 15px; margin-left: 10px; font-size: 12px;" class="text-muted">➡️ Pagkatapos ay i-click ang <strong>Add secret</strong> button para mai-save.</p>
            
            <!-- SECOND SECRET STEP -->
            <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">HAKBANG 2: Para sa SSH Username ng Server</p>
            <p style="margin-bottom: 3px; margin-left: 10px;">a. I-click uli ang <em>New repository secret</em>, sa kahon ng <strong>Name</strong>, i-type: <code>SSH_USERNAME</code></p>
            <p style="margin-bottom: 5px; margin-left: 10px;">b. Sa malaking kahon ng <strong>Secret/Value</strong>, i-paste ang login user mo (hal: <code>root</code>)</p>
            <p style="margin-bottom: 15px; margin-left: 10px; font-size: 12px;" class="text-muted">➡️ Pagkatapos ay i-click ang <strong>Add secret</strong> button para mai-save.</p>
            
            <!-- THIRD SECRET STEP -->
            <p style="margin-bottom: 5px; font-weight: bold; color: #ffc107;">HAKBANG 3: Para sa SSH Password ng Server</p>
            <p style="margin-bottom: 3px; margin-left: 10px;">a. I-click uli ang <em>New repository secret</em>, sa kahon ng <strong>Name</strong>, i-type: <code>SSH_PASSWORD</code></p>
            <p style="margin-bottom: 5px; margin-left: 10px;">b. Sa malaking kahon ng <strong>Secret/Value</strong>, i-paste ang iyong mismong password</p>
            <p style="margin-bottom: 0; margin-left: 10px; font-size: 12px;" class="text-muted">➡️ Pagkatapos ay i-click ang <strong>Add secret</strong> button para mai-save ang huling selyo.</p>
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
