@extends('layouts.app')

@section('title', 'GitHub Workflow Cheat Sheet - DevCommands')

@section('content')
<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-cyan">📁 GitHub Workflow Reviewer</h1>
    <p class="text-muted">Mabilisang cheat sheet para sa pagsisimula ng repository, branch management, at mga pang-emergency na troubleshooting commands sa iyong Local PC.</p>
</div>

<!-- 🔥 SUPER EASY SCENARIO EXAMPLE BOX 🔥 -->
<div class="card mb-5" style="border: 2px solid #0dcaf0 !important; background-color: #11222c;">
    <h3 style="color: #0dcaf0; font-weight: bold; margin-bottom: 10px;">💡 ANG SCENARIO PARA MADALING INTINDIHIN:</h3>
    <p class="card-text" style="color: #ffffff; font-size: 16px; line-height: 1.6;">
        Tapos ka na sa unang project mo (hal. <code>laravel1</code>). Ngayon, may bago kang kliyente o bagong gawang project na ang pangalan ay <strong><code>laravel2</code></strong>. 
        Buksan mo ang folder ng <code>laravel2</code> sa isang bagong window ng VS Code, at sundin mo itong mga hakbang sa ibaba gamit ang iyong <strong>VS Code Terminal (Local PC)</strong>:
    </p>
</div>

<!-- SECTION 1: INITIAL SETUP -->
<div class="mb-5">
    <h2 class="section-title">🚀 Seksyon 1: Pag-setup ng Bagong Repository (First Time sa laravel2)</h2>
    <p class="text-muted mb-4">Ito ang ginagawa mo sa unang pagkakataon para mai-upload ang bago mong <code>laravel2</code> project papunta sa isang bagong blangkong repository sa website ng GitHub.</p>
    
    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">1. Simulan ang Git Track (Initialize)</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> I-type ito sa terminal ng <code>laravel2</code> mo para simulan ng computer na bantayan ang project na ito.</p>
        <pre><code>git init</code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">2. Itakda ang Pangunahing Branch (Main Branch)</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> Siguraduhing <code>main</code> ang pangalan ng default branch mo para walang maging error kapag nag-push ka na sa online GitHub site.</p>
        <pre><code>git branch -M main</code></pre>
    </div>

    <!-- Step 3 (Kasama na ang Instruction Example sa Loob) -->
    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">3. Itali ang laravel2 Folder mo sa Bagong GitHub Link (Remote Add)</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> Kopyahin ang link ng bago mong repository galing sa GitHub browser at i-paste mo rito sa command na ito. Kung hindi mo pa alam paano gumawa ng repository sa github.com, sundin mo ito:</p>
        
        <p class="text-muted" style="font-size: 15px; padding-left: 15px; border-left: 2px solid #ffc107; margin: 15px 0; color: #ffffff !important;">
            ➔ Mag-login sa <strong>github.com</strong> sa iyong web browser<br>
            ➔ Sa itaas na kanang bahagi, i-click ang <strong><code>+</code></strong> icon at piliin ang <strong>"New repository"</strong><br>
            ➔ Sa <strong>Repository name</strong>, i-type ang: <span class="ans">laravel2</span><br>
            ➔ Iwanan sa <strong>Public/Private</strong> at HUWAG lagyan ng check ang README file<br>
            ➔ I-click ang green button na <strong>"Create repository"</strong> at i-copy ang link na lalabas
        </p>

        <pre><code>git remote add origin <span class="ans">https://github.com/client/laravel2.git</span></code></pre>
    </div>

    <!-- Step 4 -->
    <div class="card mb-4">
        <h4 class="card-title">4. Unang Bagsak na Pag-Save at Pag-Push (First Push)</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> Patakbuhin mo itong tatlong sunod-sunod na commands para umakyat sa unang pagkakataon ang buong files ng <code>laravel2</code> mo sa GitHub:</p>
        <pre><code>git add .
git commit -m "Initial commit - Unang upload ng laravel2 project"
git push -u origin main</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px;">💡 Pagkatapos ng unang push na ito, sa susunod na mga araw ang itatayp mo na laging ginagamit para mag-save ay ang normal mong: <code>git add .</code> ➔ <code>git commit -m "Update"</code> ➔ <code>git push origin main</code> (Wala nang flag na <code>-u</code>).</p>
    </div>
</div>



<!-- SECTION 2: REAL-WORLD BRANCH SCENARIOS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #0dcaf0;">🛠️ Seksyon 2: Tatlo (3) na Mahahalagang Senaryo sa Paggamit ng Branch</h2>
    <p class="text-muted mb-4">Gabay at eksaktong pagkakasunod-sunod ng mga commands na itatayp mo sa <strong>VS Code Terminal (Local PC)</strong> mo base sa kung anong sitwasyon ang kinakaharap mo.</p>

     <!-- SCENARIO 1: SOLO WORKFLOW -->
    <div class="card mb-4 border-success">
        <h4 class="card-title" style="color: #198754;">🌟 SCENARIO 1: Solo Workflow (Gagawa ka ng Product Module para sa Safety Backup)</h4>
        <p class="card-text"><strong>Ang Sitwasyon:</strong> Ikaw lang mag-isa ang nagco-code. Hindi pa tapos o may error pa ang Product Module mo kaya itatago mo muna sa hiwalay na branch sa GitHub para safe kung sakaling masira ang PC mo, bago mo isama sa main system.</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">1. Siguraduhin muna na nasa 'main' branch ka bago magsimula ng kahit anong bagong feature:</p>
        <pre><code>git branch</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 15px;">💡 Tiyaking may asterisk at kulay berde ang salitang <strong style="color: #198754;">main</strong> sa listahan.</p>

        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">2. Gumawa at lumipat sa bagong branch ng Product Module habang nagco-code ka pa lang:</p>
        <pre><code>git checkout -b <span class="ans">product-module</span></code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">3. I-save at i-push gabi-gabi sa sarili nitong branch para may backup online kahit may error pa ang code:</p>
        <pre><code>git add .
git commit -m "Hindi pa tapos ang product module - safety copy"
git push origin <span class="ans">product-module</span></code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">4. Kapag 100% nang tapos at working na sa local PC mo, lumipat sa main at i-merge ang sarili mong gawa:</p>
        <pre><code>git checkout main
git merge <span class="ans">product-module</span></code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">5. I-push na ang final combined code sa online GitHub main copy para mai-deploy na sa server:</p>
        <pre><code>git push origin main</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">6. (Optional) Burahin ang lokal na branch sa iyong PC kapag tapos at safe na ang lahat para malinis ang listahan:</p>
        <p class="text-muted" style="font-size: 13px; margin-bottom: 5px;">a. I-check muna kung saang branch ka kasalukuyang nakatayo:</p>
        <pre><code>git branch</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px; margin-bottom: 5px;">b. Kung wala ka pa sa main branch, lumipat muna dito:</p>
        <pre><code>git checkout main</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px; margin-bottom: 5px;">c. Patakbuhin ang command para tuluyang burahin ang lumang feature branch:</p>
        <pre><code>git branch -d <span class="ans">product-module</span></code></pre>
    </div>


    <!-- SCENARIO 2: TEAM COLLABORATION -->
    <div class="card mb-4 border-info">
        <h4 class="card-title" style="color: #0dcaf0;">👥 SCENARIO 2: Team Collaboration (Dalawa kayong Developer na Pagsasamahin ang Code)</h4>
        <p class="card-text"><strong>Ang Sitwasyon:</strong> Natapos mo na ang <code>product-module</code> branch mo. Ang kasama mo naman ay natapos na sa <code>category-branch</code> niya at nai-push na niya ito sa GitHub. Paano mo sila pagsasamahin sa PC mo nang walang nabuburang code?</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">1. Lumipat ka muna sa 'main' branch ng computer mo at i-merge ang sarili mong Product Module:</p>
        <pre><code>git checkout main
git merge product-module</code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">2. Hilahin at sipsipin mula sa GitHub website ang gawa ng kasama mo para mag-combine sa screen mo:</p>
        <pre><code>git pull origin <span class="ans">category-branch</span></code></pre>
        <p class="text-muted" style="font-size: 13px;">💡 Automatic na isisingit ni Git ang Category Module niya kasabay ng Product Module mo nang walang burahan.</p>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">3. Kapag na-test mo na walang error ang combined system sa local XAMPP mo, i-push sa online GitHub main:</p>
        <pre><code>git push origin main</code></pre>
        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">4. (Optional) Burahin ang lokal na branch sa iyong PC kapag tapos at safe na ang lahat para malinis ang listahan:</p>
<pre><code>git branch -d <span class="ans">category-branch</span></code></pre>

    </div>

    <!-- SCENARIO 3: EMERGENCY MERGE ROLLBACK (PINALIT NA DITO) -->
    <div class="card mb-4 border-danger" style="border: 1px solid #ff4d4d !important;">
        <h4 class="card-title" style="color: #ff4d4d;">🚨 SCENARIO 3: Emergency Rollback (May Error ang Pull ng Kasama mo at Gustong Bawiin)</h4>
        <p class="card-text"><strong>Ang Sitwasyon:</strong> Pagkatapos mong mag-<code>git pull origin category-branch</code> sa Scenario 2, biglang sumabog ang code sa computer mo dahil may malaking error pala ang gawa ng kasama mo. Paano mo ito buburahin para bumalik sa dati?</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">1. Patakbuhin itong Time Machine command para i-undo ang huling step (ang kadarating lang na pull):</p>
        <pre><code>git reset --hard <span class="ans">HEAD~1</span></code></pre>
        <p class="text-muted" style="font-size: 13px;">💥 <strong>Resulta:</strong> Awtomatikong pupurgahin ni Git ang lahat ng may error na files ng kasama mo. Mag-te-teleport ang laptop mo pabalik sa estado kung saan ang hawak mo lang ay ang sarili mong malinis at gumaganang Product Module copy!</p>
    </div>
    






    <!-- ==========================================
     CASE STUDY: FRESH PC SETUP WORKFLOW (UPDATED COLORS)
     ========================================== -->
<div class="card mb-5" style="border: 2px solid #0dcaf0; background-color: #111b21;">
    <h3 style="color: #ffc107; font-weight: bold; margin-bottom: 10px;">💻 CASE STUDY: Fresh Laptop Setup Workflow</h3>
    <p class="card-text" style="color: #ffffff; font-size: 15px; line-height: 1.6;">
        <strong>Ang Sitwasyon:</strong> Bagong bili ang laptop mo o bagong format ang iyong PC. Malinis ang VS Code at wala pang kahit anong project files ang iyong local disk. Gusto mong i-download ang master copy mula sa GitHub at patakbuhin ang system sa iyong localhost nang walang nagiging error.
    </p>

    <!-- STEP 1: CLONING THE REPOSITORY -->
    <div style="margin-top: 25px; padding-top: 15px; border-top: 1px solid #2d2d2d;">
        <h5 class="text-cyan" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">1. Pag-Clone ng Repository (I-download mula sa Cloud patungong Local PC)</h5>
        <p class="text-muted" style="font-size: 14px; margin-bottom: 8px;">Buksan ang iyong terminal (siguraduhing nasa PowerShell ka sa loob ng VS Code), pumunta sa htdocs folder, at i-download ang project:</p>
        <pre><code>cd C:\xampp\htdocs
git clone <span class="ans">https://github.com/client/project.git</span></code></pre>
    </div>

    <!-- STEP 2: PROJECT INITIALIZATION -->
    <div style="margin-top: 25px;">
        <h5 class="text-cyan" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">2. Pumasok sa Folder at Buuin ang mga Kulang na Dependencies</h5>
        <p class="text-muted" style="font-size: 14px; margin-bottom: 8px;">Pumasok sa loob ng bagong gawang project folder, i-download ang vendor core files ng Laravel, at mag-duplicate ng .env file:</p>
        <pre><code>cd project
composer install
cp .env.example .env</code></pre>

        <!-- COMPOSER EXPLANATION BOX -->
        <div style="background-color: #161616; padding: 12px 15px; border-left: 3px solid #0dcaf0; margin-top: 10px; border-radius: 4px;">
            <p style="font-size: 13.5px; color: #0dcaf0; font-weight: bold; margin-bottom: 3px;">🤔 Bakit kailangan pa i-run ang composer install kung may Composer naman sa Windows?</p>
            <p style="font-size: 13px; color: #b3b3b3; line-height: 1.5; margin: 0;">
                ➔ Ang folder na nanggaling sa GitHub ay <strong>walang vendor folder</strong> dahil hinarang ito ng .gitignore file para hindi bumigat ang online repository [INDEX]. Ang command na ito ang nag-uutos sa system mo na i-download muli ang lahat ng package blocks para sa project na ito [INDEX].
            </p>
        </div>
    </div>

    <!-- STEP 3: OPTIONAL BRANCH PULL & CRITICAL ESCAPE WARNING -->
    <div style="margin-top: 25px;">
        <h5 class="text-cyan" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">3. (THE PULL) Sipsipin ang partikular na feature branch (Kung mayroon)</h5>
        
        <!-- HIGHLIGHTED ESCAPE WARNING -->
        <div style="background-color: rgba(255, 193, 7, 0.1); padding: 10px 15px; border-left: 4px solid #ffc107; border-radius: 4px; margin-bottom: 10px;">
            <span style="color: #ffc107; font-weight: bold; font-size: 13.5px;">⚠️ MAHAHALAGANG PAALALANG "ESCAPE":</span><br>
            <span style="font-size: 13px; color: #ffffff; line-height: 1.5;">Gawin LAMANG ang hakbang na ito kung may hiwalay na ginawang development branch online (gaya ng <code>product-module</code>). Kung <strong>WALANG ibang branch at diretso sa main</strong> ang gawa ng team, <strong>LAKTAWAN / I-ESCAPE</strong> mo na ito at dumiretso agad sa Hakbang 4!</span>
        </div>

        <pre><code>git pull origin product-module</code></pre>
    </div>

    <!-- STEP 4: APP KEY GENERATION -->
    <div style="margin-top: 25px;">
        <h5 class="text-cyan" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">4. (🚨 MANDATORY) Gumawa ng Bagong Local Security Key</h5>
        <p class="text-muted" style="font-size: 14px; margin-bottom: 8px;">Kailangan ito para mag-load at hindi mag-error ang screen ng Laravel sa bago mong device [INDEX]:</p>
        <pre><code>php artisan key:generate</code></pre>
    </div>

    <!-- DATABASE AND CONFIGURATION CHECKLIST -->
    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #2d2d2d;">
        <h4 class="text-green" style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">📋 CHECKLIST PARA SA LOCAL DATABASE INTEGRATION:</h4>
        
        <!-- STEP A: ENV SETTINGS -->
        <div style="margin-bottom: 20px;">
            <p style="font-size: 14px; color: #ffffff; margin-bottom: 6px;"><strong>➔ Hakbang A:</strong> Buksan ang <code>.env</code> file sa VS Code at isulat ang mga local credentials para makakonekta ang system sa iyong XAMPP MySQL phpMyAdmin [INDEX]:</p>
            <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<span class="ans">client_practice_db</span>  (➔ Palitan kung ano ang ginawa mong database name sa phpMyAdmin)
DB_USERNAME=<span class="ans">root</span>                (➔ Palaging root kapag local XAMPP setup)
DB_PASSWORD=                    (➔ Iwanang BLANGKO o walang kahit anong karakter kapag local XAMPP)</code></pre>
        </div>

        <!-- STEP B: SQL IMPORT & MIGRATION CRITICAL WARNING -->
        <div style="margin-bottom: 25px;">
            <p style="font-size: 14px; color: #ffffff; margin-bottom: 6px;"><strong>➔ Hakbang B:</strong> Patakbuhin ang migration command para pumasok ang mga talahanayan [INDEX]:</p>
            
            <!-- SQL IMPORT WARNING -->
            <div style="background-color: rgba(255, 45, 32, 0.1); padding: 12px 15px; border: 1px dashed #ff2d20; border-radius: 4px; margin-bottom: 10px;">
                <span class="text-red" style="font-weight: bold; font-size: 14px;">⚠️ KRITIKAL NA WARNING SA SQL IMPORT:</span><br>
                <span style="font-size: 13px; color: #ffffff; line-height: 1.5;">Bago mo i-type at i-enter the command sa ibaba, siguraduhin na <strong>naka-import na ang .sql file backup ng kliyente</strong> sa loob ng ginawa mong database sa localhost phpMyAdmin! Kapag nag-migrate ka nang walang laman ang database, maaaring magkaroon ng conflicts sa identity o masira ang pre-existing core rows ng project.</span>
            </div>

            <pre><code>php artisan migrate</code></pre>
        </div>

        <!-- THE ULTIMATE LIVE PRODUCTION SERVER WARNING -->
        <div style="background-color: rgba(255, 45, 32, 0.2); padding: 15px; border: 2px solid #ff2d20; border-radius: 6px;">
            <h5 class="text-red" style="font-weight: bold; font-size: 15px; margin-bottom: 5px;">🚨 SUPER CRITICAL: BAWAL NA BAWAL I-RUN SA LIVE SERVER!</h5>
            <p style="font-size: 13.5px; color: #ffffff; margin: 0; line-height: 1.5;">
                Ang buong proseso ng configuration na ito ay ginagawa para sa <strong>iyong lokal na computer lamang (Local Environment)</strong>. 
                <span class="text-red" style="font-weight: bold;">HUWAG NA HUWAG</span> mong patatakbuhin ang <code>key:generate</code> sa live production server ng kliyente! Kapag nabago mo ang key sa live server, hindi na madi-decrypt ng system ang mga lumang passwords ng mga totoong kliyente at <span class="text-red" style="font-weight: bold;">permanenting ma-co-corrupt ang lahat ng user accounts nila</span>.
            </p>
        </div>
    </div>

    <!-- SUCCESS MESSAGE -->
    <p class="text-green" style="font-size: 15px; font-weight: bold; margin-top: 25px; text-align: center;">
        🎉 Kapag nakumpleto mo ang mga hakbang na ito, 100% nang gagana ang hiniram mong project sa bago mong PC nang walang error [INDEX]!
    </p>
</div>








<!-- SECTION 3: TROUBLESHOOTING & EMERGENCY -->
<div class="mb-5">
    <h2 class="section-title">⚠️ Seksyon 3: Troubleshooting at Pang-Emergency (Nuke Buttons)</h2>
    <p class="text-muted mb-4">Mga commands na tatakbuhin mo kapag may naglo-loko sa code mo o kapag gusto mong bumalik sa huling ligtas na pag-save.</p>

    <!-- Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">1. I-check ang Status ng mga Files</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> Ipapakita nito sa terminal kung aling mga files ang ginalaw o binago mo sa <code>laravel2</code> na hindi mo pa naseselyuhan ng commit.</p>
        <pre><code>git status</code></pre>
    </div>

    <!-- Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">2. Tignan ang Timeline ng Pag-Save (Log History)</h4>
        <p class="card-text"><strong>Ano ang gagawin?</strong> I-li-list out nito sa screen ang lahat ng mga nakaraang pag-save o commits na ginawa mo para alam mo ang kasaysayan ng project mo.</p>
        <pre><code>git log --oneline</code></pre>
    </div>

    <!-- Step 3 -->
    <div class="card mb-4 border-danger" style="border: 1px solid #ff4d4d !important;">
        <h4 class="card-title" style="color: #ff4d4d;">🚨 3. The Emergency Undo Button (Reset Hard)</h4>
        <p class="card-text"><strong>Gamitin lang kapag nagka-emergency:</strong> Kung sakaling nag-code ka sa Product Module tapos biglang sumabog, tuluyang nasira ang code ng computer mo, at hindi mo na alam kung paano ibalik ang dating gumaganang system, i-type mo ito:</p>
        <pre><code>git reset --hard HEAD</code></pre>
        <p class="text-muted" style="font-size: 13px; margin-top: 5px;">💥 <strong>Paliwanag sa Scenario:</strong> Puwersahang buburahin ng command na ito ang LAHAT ng bago at kasalukuyan mong isinusulat sa PC mo ngayon na hindi mo pa na-ko-commit, at ibabalik ka nito sa huling ligtas at gumaganang pwesto na huli mong in-upload o na-commit sa GitHub. Para kang gumamit ng Ctrl+Z o Time Machine!</p>
    </div>
</div>
@endsection
