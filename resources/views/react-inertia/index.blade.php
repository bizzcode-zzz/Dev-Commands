@extends('layouts.app')

@section('title', 'Laravel V5 (React + Inertia) - DevCommands')

@section('content')
<!-- 
  🌟 THE BLOCKER WRAPPER 
  Dahil 3 rows ang buttons mo, gumamit tayo ng explicit positioning at margin displacement.
  Ito ang literal na hahila sa buong page content pababa para siguradong lumapag ito sa ilalim ng navbar.
-->
      <!-- ─── SHORTCUT TO SEPARATE INSTALLATION GUIDE PAGE ─── -->
    <div style="margin-bottom: 30px;">
        <a href="/react-installation" style="display: inline-block; color: #61dafb; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 12px 24px; border-radius: 6px; background: #15232d; border-color: rgba(97, 218, 251, 0.3); text-shadow: 0 0 10px rgba(97, 218, 251, 0.2); transition: all 0.2s;" onmouseover="this.style.background='#61dafb'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#15232d'; this.style.color='#61dafb';">
            ⚛️ REACT INSTALLATION GUIDE
        </a>
    </div>

<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- ─── UNIVERSAL ALIGNMENT WRAPPER (KOPYA SA BIZZSOFT STRUCTURE) ─── -->
    <div style="max-width: 1000px; margin: 0 auto;">

        <!-- ─── HEADER LAYER ─── -->
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #61dafb; letter-spacing: -0.5px; margin-bottom: 10px;">
                ⚛️ Laravel V5 - React + Inertia Blueprint
            </h1>
            <p class="text-muted" style="font-size: 15px; color: #a5a5a5 !important; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Gabay sa pag-migrate ng V4 Blade Frontend patungo sa modernong V5 SPA Stack na pinapatakbo ng React at Inertia.js. Same backend, ultimate frontend upgrade!
            </p>
        </div>

        <!-- ─── BACK TO MENU SHORTCUT ─── -->
        <div style="margin-bottom: 30px;">
            <a href="/module-blueprint" style="display: inline-block; color: #61dafb; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 8px 16px; border-radius: 6px; background: #111; transition: background 0.2s;">
                ⬅️ Balik sa Module Menu
            </a>
        </div>

        <!-- === INERTIA ENGINE EXPLANATION BOX === -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                🚀 Inertia.js Engine
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0;">
                🎯 <strong>Core Purpose:</strong> Ito ang nagsisilbing tulay (bridge) para makagawa ka ng Single Page Application (SPA) gamit ang React nang hindi na kailangang gumawa ng hiwalay na REST API o gumamit ng complex na state management. Pareho pa rin ang iyong Laravel Controllers at Routes, pero React components na ang mag-re-render sa browser.
            </p>
        </div>

    </div>
</div>


              <!-- STEP 1: PROJECT DUPLICATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ffc107 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #ffc107 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                1st Step: Project Duplication 📁
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0;">
                Kinopya ang buong folder ng <strong>inventory_v4_laravel</strong> at pinalitan ang pangalan ng bagong folder bilang <strong>inventory_v5_react</strong> upang dito simulan ang pag-upgrade ng frontend.
            </p>
        </div>

        <!-- STEP 2: DATABASE INITIALIZATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                2nd Step: Database Setup 🗄️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gumawa ng bagong database at siguraduhing ito ang gagamiting pangalan at collation upang maiwasan ang mga encoding error sa mga special characters:
            </p>
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.7;">
                <span style="color: #569cd6;">DATABASE NAME:</span> <span style="color: #ffffff; font-weight: bold;">inventory_v5</span><br>
                <span style="color: #569cd6;">DATABASE COLLATION:</span> <span style="color: #ce9178; font-weight: bold;">utf8mb4_unicode_ci</span>
            </div>
        </div>


        
                <!-- STEP 3: ENV CONFIGURATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                3rd Step: Configure .env File ⚙️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Buksan ang <code>.env</code> file sa loob ng <strong>inventory_v5_react</strong> folder at palitan ang pangalan ng database upang kumonekta sa bagong likhang lalagyan. <em>(DB_DATABASE lamang ang baguhin)</em>:
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;"><span style="color: #6a9955;">// Mula sa DB_DATABASE=inventory_v4, palitan ng:</span>
<span style="color: #569cd6;">DB_CONNECTION</span>=mysql
<span style="color: #569cd6;">DB_HOST</span>=127.0.0.1
<span style="color: #569cd6;">DB_PORT</span>=3306
<span style="color: #569cd6;">DB_DATABASE</span>=<span style="color: #ce9178; font-weight: bold;">inventory_v5</span>
<span style="color: #569cd6;">DB_USERNAME</span>=root
<span style="color: #569cd6;">DB_PASSWORD</span>=</code></pre>
                @endverbatim
            </div>
        </div>

               <!-- STEP 4: DATABASE MIGRATION & SEEDING -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                4th Step: Cache Clear & Fresh Migration 🚀
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Buksan ang terminal sa iyong project root at patakbuhin ang mga sumusunod na commands nang magkahiwalay upang malinis ang lumang configuration cache at makabuo ng bagong malinis na database structure na may saktong data tulad ng V4 (Roles, Permissions, Users, Categories, at Products):
            </p>

            <!-- FIRST COMMAND: CONFIG CLEAR -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">1. Command para linisin ang lumang config cache:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;">php artisan config:clear</code></pre>
                </div>
            </div>

            <!-- SECOND COMMAND: FRESH MIGRATE & SEED -->
            <div>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">2. Command para sa fresh migration na may kasamang seeders:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;">php artisan migrate:fresh --seed</code></pre>
                </div>
            </div>
        </div>


              <!-- STEP 5: START LOCAL SERVER -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                5th Step: Serve Application 💻
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Kapag naging matagumpay (successful) ang pag-migrate at pag-seed, patakbuhin ang local development server upang simulan ang pagsubok sa pag-login gamit ang default credentials:
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;">php artisan serve</code></pre>
                @endverbatim
            </div>
        </div>

        <!-- STEP 6: LARAVEL BREEZE INSTALLATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                6th Step: Install Laravel Breeze Starter Kit 📦
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Patakbuhin ang command na ito sa iyong terminal upang i-install ang Laravel Breeze bilang isang development dependency. Ito ang magdadala ng React at Inertia framework components sa iyong application:
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;">composer require laravel/breeze --dev</code></pre>
                @endverbatim
            </div>
        </div>


                <!-- STEP 7: BREEZE REACT INITIALIZATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                7th Step: Initialize React + Inertia Scaffold ⚛️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Patakbuhin ang command na ito sa iyong terminal upang i-scaffold o awtomatikong itayo ang React frontend structures at Inertia configuration sa loob ng iyong Laravel application:
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan breeze:install react</code></pre>
                @endverbatim
            </div>
        </div>


                        <!-- STEP 8: NODE.JS ENVIRONMENT SETUP -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                8th Step: Install Node.js Environment 🟢
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Bago patakbuhin ang mga npm packages para sa React frontend, kinakailangang i-install muna ang Node.js runtime sa inyong Windows Operating System:
            </p>

            <!-- BLOCK DOWNLOAD LINK & SPECS -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; margin-bottom: 15px; font-family: 'Segoe UI', sans-serif; line-height: 1.7;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">📋 Selected Node.js Package:</span>
                <span style="color: #ffffff; font-size: 13px;">✅ <strong>Version:</strong> v24.19.0 LTS (Long-Term Support)</span><br>
                <span style="color: #ffffff; font-size: 13px;">✅ <strong>Platform:</strong> Windows (x64 Architecture)</span><br>
                <span style="color: #ffffff; font-size: 13px;">✅ <strong>Installer Type:</strong> Windows Installer (.msi)</span><br>
                <span style="color: #ffffff; font-size: 13px; display: block; margin-top: 4px;">🔗 <strong>Official Website:</strong> <a href="https://nodejs.org" target="_blank" style="color: #0dcaf0; text-decoration: underline; font-weight: bold;">https://nodejs.org</a></span>
            </div>

            <!-- INSTALLATION FLOW WIZARD STEP -->
            <div style="background: #15232d; padding: 15px; border: 1px solid rgba(97, 218, 251, 0.2); border-radius: 6px; margin-bottom: 15px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">⚙️ Windows Installer Wizard & Background Flow:</span>
                I-run ang downloaded <code style="color: #ffffff;">.msi</code> file at sundan ang eksaktong setup sequence na ito:<br>
                1. I-click ang: <span style="color: #ffffff; font-weight: bold;">Next ➡️ Next ➡️ Next</span>.<br>
                2. ⚠️ Pagdating sa section ng <span style="color: #ffc107; font-weight: bold;">"Tools for Native Modules"</span>, tiyaking <span style="color: #00ffcc; font-weight: bold;">i-check ang checkbox</span> (Automatically install the necessary tools) ➡️ <span style="color: #ffffff; font-weight: bold;">Next ➡️ Install</span>.<br>
                3. After matapos ang installation, awtomatikong magbubukas ang isang <span style="color: #ff4d4d; font-weight: bold;">Command Prompt (CMD)</span> window. Pipilitin ka nitong mag-input: Pindutin ang <span style="color: #ffffff; font-weight: bold;">"press any key to continue" nang dalawang (2) beses</span>.<br>
                4. Pagkatapos nito, awtomatikong lulundag ang <span style="color: #0dcaf0; font-weight: bold;">Windows PowerShell</span> at magsisimulang mag-download at mag-install ng iba't ibang mahahalagang backend dependency files (tulad ng Chocolatey at Python) para sa native modules. Hayaan lang ito hanggang matapos nang kusa.
            </div>






                        <!-- VSCODE TERMINAL SWITCH METHOD (BAGONG DAGDAG BASE SA WORKFLOW MO) -->
            <div style="background: #15232d; padding: 15px; border: 1px solid rgba(97, 218, 251, 0.2); border-radius: 6px; margin-top: 15px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">💻 VSCode Terminal Configuration Standard:</span>
                Bago mag-type ng kahit anong frontend package commands, siguraduhing pinalitan ang terminal mula PowerShell patungong Command Prompt (CMD):<br>
                1. Sa VSCode Terminal panel, i-click ang maliit na <span style="color: #ffffff; font-weight: bold;">"+" dropdown arrow</span> sa kanang bahagi.<br>
                2. Piliin ang <span style="color: #00ffcc; font-weight: bold;">Command Prompt (cmd)</span>. Ito na ang magiging standard terminal baseline para sa buong V5 React project.
            </div>

                        <!-- COMMANDS TO VERIFY INSTALLATION VIA CMD -->
            <div style="margin-top: 20px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">I-verify ang bersyon ng NPM gamit ang bagong lipat na CMD Shell terminal:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> npm -v</code></pre>
                    @endverbatim
                </div>
                <span style="color: #6a9955; font-size: 12px; display: block; margin-top: 5px;">💡 Tandaan: Pag lumabas ang bersyon na <strong style="color: #ffffff;">11.17.0</strong>, nangangahulugang OK at handa na ang inyong package setup.</span>
            </div>

            <div style="margin-top: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">Mabilisang pag-check din ng Node.js engine specification sa loob ng CMD window:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> node -v</code></pre>
                    @endverbatim
                </div>
                <!-- 🟢 BAGONG DAGDAG NA VERIFICATION STATEMENT BASE SA HILING MO -->
                <span style="color: #2ecc71; font-size: 12px; display: block; margin-top: 5px;">🟢 Tandaan: Pag lumabas ang bersyon na <strong style="color: #ffffff;">v24.19.0</strong>, ay OK na at wala nang dapat ikabahala sa inyong environment setup.</span>
            </div>
        </div>


                        <!-- STEP 9: FRONTEND PACKAGE DEPENDENCY INSTALLATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                9th Step: Install Node Dependencies & Scaffold React 📦
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Matapos masiguradong gumagana ang npm core configurations sa CMD terminal, patakbuhin ang package downloader upang mabuo ang node modules at isunod ang initialization command para maitayo ang React files ng V5 environment [INDEX]:
            </p>
            
            <!-- FIRST OPERATION: NPM INSTALL -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">1. Command para i-download at i-compile ang lahat ng core node modules:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> npm install</code></pre>
                    @endverbatim
                </div>
            </div>

            <!-- SECOND OPERATION: BREEZE INSTALL REACT -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">2. Command para i-scaffold ang React + Inertia infrastructure structures:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> php artisan breeze:install react</code></pre>
                    @endverbatim
                </div>
            </div>

            <!-- ⚠️ IMPORTANT WORKFLOW REMINDER BOX -->
            <div style="background: #241414; padding: 12px; border-radius: 6px; border: 1px solid rgba(231, 76, 60, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-top: 15px;">
                <span style="color: #ff4d4d; font-weight: bold; display: block; margin-bottom: 4px;">⚠️ Tandaan sa Workflow:</span>
                <p style="margin: 0; color: #b3b3b3;">
                    Ang mga command sa itaas ay patatakbuhin ng <span style="color: #ffffff; font-weight: bold;">isang (1) beses lamang</span> kapag kasisira o kabubuo pa lang ng bagong project, bagong clone mula sa repository, o kapag nag-duplicate ng folder structure mula sa lumang bersyon (tulad ng V4 base) [INDEX]. Hindi na ito kailangang patakbuhin muli sa mga susunod na araw ng development maliban na lang kung may bagong idadagdag na package [INDEX].
                </p>
            </div>
        </div>




                <!-- STEP 10: DUAL TERMINAL WORKFLOW ENVIRONMENT -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                10th Step: Launch Twin-Terminal Development Environment 💻🔥
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Matapos makumpleto ang pag-install ng lahat ng packages, handa na ang inyong V5 ecosystem. Upang simulan ang pag-code, <strong style="color: #ffffff;">kinakailangang magbukas ng dalawang (2) magkahiwalay na CMD terminals</strong> sa VSCode na sabay na tumatakbo sa background:
            </p>

            <!-- TERMINAL PANEL 1: BACKEND LAYER -->
            <div style="margin-bottom: 18px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">🎯 UNANG TERMINAL (CMD) — Para sa Laravel Core Backend Server:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> php artisan serve</code></pre>
                    @endverbatim
                </div>
            </div>

            <!-- TERMINAL PANEL 2: FRONTEND LAYER -->
            <div>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">⚛️ PANGALAWANG TERMINAL (CMD) — Para sa Vite + React Asset Server (Hot-Reloading):</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> npm run dev</code></pre>
                    @endverbatim
                </div>
            </div>
        </div>


        



        


        <!-- INERTIA LIFECYCLE REQUEST FLOW -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                🔄 React + Inertia.js Request Lifecycle Flow
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Pipeline:</strong> Ang visual representation kung paano tumatakbo ang data exchange sa V5 Single Page Application (SPA) [INDEX]. Si Inertia ang nagpapakain ng database array data diretso bilang <code>props</code> sa iyong React frontend components [INDEX]:
            </p>
            
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #a5a5a5;">
                <div style="text-align: left; padding-left: 20px;">
                    Browser<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #61dafb; font-weight: bold;">Route</span> <span style="color: #6a9955;">(routes/web.php)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #2ecc71; font-weight: bold;">Controller</span> <span style="color: #6a9955;">(App/Http/Controllers)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #ffc107; font-weight: bold;">Inertia Engine</span> <span style="color: #6a9955;">(Inertia::render)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #e74c3c; font-weight: bold;">React Component</span> <span style="color: #6a9955;">(resources/js/Pages/.jsx)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    Browser <span style="color: #6a9955;">(SPA View rendering without full page reload)</span>
                </div>
            </div>
        </div>

        <!-- STEP 11: PRODUCTS MODULE SPA CONVERSION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                11th Step: Products Module SPA Migration 📦⚛️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Ito ang selyadong gabay sa pag-migrate ng Products layer mula V4 Blade patungong V5 React + Inertia components, kasama ang tamang state handling para sa data components at flash messages:
            </p>

            <!-- 🌳 FRONTEND DIRECTORY STRUCTURE -->
                        <!-- 🌳 FRONTEND & BACKEND DIRECTORY STRUCTURE -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">📂 1. Application Directory Structure (Ginalaw at Ginawang Files):</span>
                <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; color: #c9d1d9;">
                    <!-- BACKEND LAYER -->
                    📂 <span style="font-weight: bold; color: #ffffff;">app/</span><br>
                    ├── 📂 <span style="font-weight: bold; color: #ffffff;">Http/</span><br>
                    │   ├── 📂 <span style="font-weight: bold; color: #ffffff;">Controllers/</span><br>
                    │   │   └── 📄 <span style="color: #2ecc71; font-weight: bold;">ProductController.php</span> <span style="color: #6a9955;">(Inedit — Idinagdag ang <code>use Inertia\Inertia;</code> at pinalitan ang <code>index</code>, <code>store</code>, <code>update</code>, at <code>destroy</code> return logic)</span><br>
                    │   └── 📂 <span style="font-weight: bold; color: #ffffff;">Middleware/</span><br>
                    │       └── 📄 <span style="color: #ffc107; font-weight: bold;">HandleInertiaRequests.php</span> <span style="color: #6a9955;">(Inedit — Idinagdag ang 'flash success' sa global shared session array)</span><br>
                    <br>
                    <!-- FRONTEND LAYER -->
                    📂 <span style="font-weight: bold; color: #ffffff;">resources/js/</span><br>
                    └── 📂 <span style="font-weight: bold; color: #ffffff;">Pages/</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;└── 📂 <span style="font-weight: bold; color: #61dafb;">Products/</span> <span style="color: #6a9955;">(Ginawa — Dedicated folder para sa V5 Products Module)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── 📄 <span style="color: #9cdcfe; font-weight: bold;">index.jsx</span> <span style="color: #6a9955;">(Pangunahing UI at state manager ng Products)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── 📂 <span style="font-weight: bold; color: #61dafb;">components/</span> <span style="color: #6a9955;">(Subfolder para sa mga hiwalay at re-usable UI elements)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── 📄 <span style="color: #9cdcfe;">productform.jsx</span> <span style="color: #6a9955;">(Modal or Panel form para sa pag-add/edit ng produkto)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── 📄 <span style="color: #9cdcfe;">producttable.jsx</span> <span style="color: #6a9955;">(Malinis na listahan o grid ng mga produkto)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── 📄 <span style="color: #9cdcfe;">searchbar.jsx</span> <span style="color: #6a9955;">(Instant filter input para sa real-time searching)</span>
                </div>
            </div>






            <!-- 📥 MIDDLEWARE FLASH SESSION SHARING -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">⚙️ 2. Global Flash Session Sharing (HandleInertiaRequests.php):</span>
                <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 6px 0;">
                    Upang awtomatikong masagap ng React frontend ang mga notification galing sa backend session, kailangang i-share ang <code>flash</code> object sa loob ng <code>share()</code> array function:
                </p>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;"><span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">share</span>(Request $request): array
{
    <span style="color: #569cd6;">return</span> [
        ...<span style="color: #569cd6;">parent</span>::<span style="color: #dcdcaa;">share</span>($request),

        <span style="color: #ce9178;">'flash'</span> => [
            <span style="color: #ce9178;">'success'</span> => $request->session()-><span style="color: #dcdcaa;">get</span>(<span style="color: #ce9178;">'success'</span>),
        ],
    ];
}</code></pre>
                    @endverbatim
                </div>
            </div>

            <!-- 📤 CONTROLLER REDIRECT ENGINE -->
            <div>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">🔄 3. Controller Logic Redirect (ProductController.php):</span>
                <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 6px 0;">
                    Dahil pre-configured na si Inertia sa background, ang standard Laravel <code>return redirect()</code> syntax ay mananatiling <strong style="color: #ffffff;">pareho pa rin</strong> [INDEX]. Awtomatiko itong ipapasa sa React bilang state updates nang hindi nagre-reload ang buong browser screen [INDEX]:
                </p>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #9cdcfe;"><span style="color: #569cd6;">return</span> <span style="color: #dcdcaa;">redirect</span>()
    -><span style="color: #dcdcaa;">route</span>(<span style="color: #ce9178;">'products.index'</span>)
    -><span style="color: #dcdcaa;">with</span>(<span style="color: #ce9178;">'success'</span>, <span style="color: #ce9178;">'Product created successfully.'</span>);</code></pre>
                    @endverbatim
                </div>
            </div>
        </div>



        
        
        <!-- STEP 12: REACT FRONTEND PDF GENERATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                12th Step: React Frontend PDF Export Setup 📄⚛️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Dahil ang V5 ay tumatakbo na sa React SPA Architecture, ang pag-generate ng mga ulat (gaya ng sales, inventory, o purchases) ay mas mabilis kung gagawin diretso sa client-side gamit ang dedicated React PDF library [INDEX]:
            </p>

            <!-- TERMINAL COMPONENT INSTALLATION -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Command para i-install ang Core React PDF Rendering Package:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> npm install @react-pdf/renderer</code></pre>
                    @endverbatim
                </div>
            </div>

            <!-- 💡 CORE WORKFLOW NOTE BOX -->
            <div style="background: #15232d; padding: 15px; border: 1px solid rgba(97, 218, 251, 0.2); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">🧠 Tandaan para sa V5 PDF Workflow:</span>
                📌 <strong style="color: #ffffff;">Bakit kailangan ito?</strong> — Basta't gagawa ka ng PDF export feature sa React framework, <span style="color: #ffc107; font-weight: bold;">kailangan at mandatory</span> na mai-install muna ang package na ito upang magkaroon ng kakayahan ang iyong mga `.jsx` components na mag-compile ng layout patungong hard-copy or downloadable PDF [INDEX].<br>
                📌 <strong style="color: #ffffff;">Paano ito tinatawag sa Code?</strong> — Sa loob ng iyong gagawing React PDF components, kailangan mo lang i-import ang mga core sub-elements nito sa pinakataas ng file tulad nito:<br>
                <code style="color: #9cdcfe; font-family: 'Consolas', monospace; font-size: 12px; background: #111; padding: 2px 6px; border-radius: 4px; display: inline-block; margin-top: 5px;">import { Document, Page, Text, View, StyleSheet } from '@react-pdf/renderer';</code>
            </div>
        </div>



        


@endsection
