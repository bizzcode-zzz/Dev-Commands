@extends('layouts.app')

@section('title', 'ChatGPT Codex AI Reference - DevCommands')

@section('content')
        <!-- ─── HEADER LAYER & WORKFLOW DESCRIPTION ─── -->
        <div class="text-center" style="margin-bottom: 40px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #10a37f; letter-spacing: -0.5px; margin-bottom: 15px;">
                🤖 ChatGPT Codex Intelligence Reference
            </h1>
            <p style="font-size: 15px; color: #dcdcdc; max-width: 800px; margin: 0 auto; line-height: 1.6; font-family: 'Segoe UI', sans-serif;">
                Selyadong cheat sheet at live playbook para sa <strong>Multi-Client PHP Environment Switching Strategy</strong>. 
            </p>
        </div>

        <!-- WORKFLOW SITUATION BLOCKER -->
        <div style="background: #1a1a1a; border: 1px dashed #3c3c3c; padding: 20px; border-radius: 6px; margin-bottom: 35px; font-size: 14px; color: #a5a5a5; line-height: 1.6; font-family: 'Segoe UI', sans-serif;">
            <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 8px; text-transform: uppercase; font-size: 12px; letter-spacing: 0.5px;">📋 Multi-Client Architecture Context:</span>
            Ang setup na ito ay binuo para sa mga developers na humahawak ng iba't ibang kliyente na may magkakaibang structural server configuration requirements:<br>
            • 🏢 <strong>Client Project A:</strong> Gumagamit ng legacy o stable environment setup gaya ng <strong style="color: #ffa500;">PHP 8.2 (XAMPP Default)</strong>.<br>
            • 🚀 <strong>Client Project B (New Portfolio):</strong> Nangangailangan ng pinakabagong isolation runtime framework profile gaya ng <strong style="color: #a9dc76;">PHP 8.5 (Isolated Binary)</strong>.<br><br>
            
            <span style="color: #10a37f; font-weight: bold;">🎯 Main Objective:</span> 
            Magawa ang mabilis at ligtas na pag-switch at pag-execute ng terminal commands (Artisan, Composer) sa bawat magkakaibang proyekto **nang hindi binabago ang global Windows Environment Variables** at **nang walang panganib na masira o mag-conflict** ang mga kasalukuyang active development configurations ng iyong PC.
        </div>

        <!-- ================= CHAPTER 1: STEP-BY-STEP COEXISTENCE WORKFLOW ================= -->
        <h2 style="color: #10a37f; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
            🧱 Chapter 1 — Environment Switching & Scaffolding Execution
        </h2>

        <!-- INITIAL NOTE FOR THE DEVELOPER -->
        <div style="background: #111; border: 1px dashed #3c3c3c; padding: 15px; border-radius: 6px; margin-bottom: 25px; font-size: 14px; color: #a5a5a5; line-height: 1.6; font-family: 'Segoe UI', sans-serif;">
            📌 <strong>Paalala bago magsimula:</strong> Sundin ang bawat hakbang sa ibaba nang sunod-sunod (One step at a time). Huwag lalaktaw upang masiguro ang 100% stable at isolated engineering build state.
        </div>

        <!-- ================= PART 1: INSTALLATION ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 30px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            📦 Part 1 — PHP 8.5 Installation
        </h3>

        <!-- STEP 1 & 2 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                📁 Steps 1 & 2: Folder Scaffolding & Binary Extraction
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gumawa ng bagong folder para sa project at i-extract ang opisyal na standalone PHP 8.5 environment binaries.
            </p>
            <div style="background: #111; padding: 15px; border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.6; margin-bottom: 15px;">
                1️⃣ <strong>Folder Target:</strong> Gagawa ng folder sa path na: <code style="color: #a9dc76; font-family: 'Consolas', monospace;">C:\xampp\htdocs\bizzsoft_final_portfolio</code> pagkatapos ay i-open ito sa VS Code.<br>
                2️⃣ <strong>Download Binary:</strong> Kunin ang opisyal na package: <strong style="color: #ffa500; font-family: 'Consolas', monospace;">php-8.5.10-nts-Win32-vs17-x64.zip</strong><br>
                3️⃣ <strong>Destination Extraction:</strong> I-unzip at i-extract ang buong laman ng package diretso sa: <code style="color: #a9dc76; font-family: 'Consolas', monospace;">C:\tools\php-8.5</code>
            </div>
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 I-verify kung matagumpay na naitanim ang php.exe binary file gamit ang terminal:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <code style="font-size: 14px; color: #a9dc76;">Test-Path "C:\tools\php-8.5\php.exe"</code>
                </div>
            </div>
            <div style="background: #1c1301; padding: 12px; border: 1px solid rgba(255, 165, 0, 0.2); border-radius: 6px; font-size: 13px; color: #dcdcdc;">
                🎯 <strong>Expected Terminal Output:</strong> Dapat mag-return ng halagang: <strong style="color: #a9dc76; font-family: 'Consolas', monospace;">True</strong>
            </div>
        </div>

        <!-- STEP 3 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🔍 Step 3: Direct PHP 8.5 Verification Check
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Kritikal na i-check ang binary file nang direkta dahil hindi pa natin sini-switch o binabago ang default global variable setup ng iyong computer.
            </p>
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Patakbuhin ang direct path validation link sa iyong terminal:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <code style="font-size: 14px; color: #a9dc76;">C:\tools\php-8.5\php.exe -v</code>
                </div>
            </div>
            <div style="background: #1c1301; padding: 12px; border: 1px solid rgba(255, 165, 0, 0.2); border-radius: 6px; font-size: 13px; color: #dcdcdc;">
                🎯 <strong>Expected Terminal Output:</strong> Dapat lumabas ang string profile na: <strong style="color: #a9dc76; font-family: 'Consolas', monospace;">PHP 8.5.10</strong>
            </div>
        </div>

        <!-- ================= PART 2: CONFIGURATION ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            ⚙️ Part 2 — PHP 8.5 Configuration
        </h3>

        <!-- STEP 4, 5 & 6 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🛠️ Steps 4, 5 & 6: Config File Mapping & Extensions Activation
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-setup ang configuration mappings para sa extension core structures sa loob ng isolated engine file module.
            </p>
            <div style="background: #111; padding: 15px; border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.6; margin-bottom: 15px;">
                📌 <strong>Step 4 (php.ini Verification):</strong> Siguraduhing na-copy na ang baseline development profile at i-run ang check command na ito:<br>
                <code style="color: #a9dc76; font-family: 'Consolas', monospace; display: block; margin: 4px 0 10px 0; background: #1e1e1e; padding: 8px; border-radius: 4px;">Test-Path "C:\tools\php-8.5\php.ini"</code>
                Expected Output: <strong style="color: #a9dc76;">True</strong>
            </div>
            <div style="background: #111; padding: 15px; border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.6; margin-bottom: 15px;">
                📌 <strong>Step 5 (Extension Directory Set):</strong> Buksan ang `php.ini` at i-configure ang linyang ito:<br>
                <code style="color: #a6e22e; font-family: 'Consolas', monospace; display: block; margin: 4px 0 10px 0; background: #1e1e1e; padding: 8px; border-radius: 4px;">extension_dir = "C:\tools\php-8.5\ext"</code>
                I-verify sa terminal gamit ang control pipeline lookup query: [INDEX]<br>
                <code style="color: #a9dc76; font-family: 'Consolas', monospace; display: block; margin: 4px 0 4px 0; background: #1e1e1e; padding: 8px; border-radius: 4px;">C:\tools\php-8.5\php.exe -i | Select-String "extension_dir"</code>
                Expected Output: <strong style="color: #a9dc76;">extension_dir => C:\tools\php-8.5\ext</strong>
            </div>
            <div style="background: #111; padding: 15px; border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                📌 <strong>Step 6 (Enable Framework Extensions):</strong> Sa loob ng `php.ini`, tanggalin ang semicolon (;) sa simula ng anim na core modules na ito upang maging aktibo:<br>
                <pre style="margin: 5px 0; font-family: 'Consolas', monospace; color: #a9dc76; font-weight: bold; background: #0f1c18; padding: 10px; border-radius: 4px;">extension=curl
extension=fileinfo
extension=mbstring
extension=openssl
extension=pdo_mysql
extension=zip</pre>
                I-verify ang modules configuration framework map via terminal string call:<br>
                <code style="color: #a9dc76; font-family: 'Consolas', monospace; display: block; margin: 5px 0 0 0; background: #1e1e1e; padding: 8px; border-radius: 4px;">C:\tools\php-8.5\php.exe -m</code>
                Expected Output Matrix: Dapat makita sa listahan ang <strong style="color: #a9dc76;">curl, fileinfo, mbstring, openssl, pdo_mysql, at zip</strong>.
            </div>
        </div>


                  <!-- ================= PART 3: VERSION SWITCHING ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🔄 Part 3 — PHP Version Switching
        </h3>

        <!-- STEP 7, 8 & 9 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚡ Steps 7, 8 & 9: Environment Inspection & PATH Switching Execution
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Suriin ang kasalukuyang active session engine bago pansamantalang ituro ang terminal execution variables sa isolated path ng PHP 8.5.
            </p>

            <!-- THE COMMANDS WORKFLOW -->
            <div style="margin-bottom: 20px;">
                <span style="color: #ffa500; font-size: 12px; display: block; margin-bottom: 6px; font-weight: bold; text-transform: uppercase;">🔍 HAKBANG A: I-check ang default status (Bago mag-switch)</span>
                
                <div style="background: #111; padding: 12px; border: 1px solid #2d2d2d; border-radius: 4px; margin-bottom: 10px;">
                    <span style="color: #75715e; font-family: 'Consolas', monospace; font-size: 12px; display: block; margin-bottom: 4px;">📟 1. I-type ito sa terminal para malaman ang kasalukuyang active version:</span>
                    <code style="color: #a9dc76; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 6px; border-radius: 4px;">php -v</code>
                    <span style="color: #a5a5a5; font-size: 12px; display: block; margin-top: 4px;">👉 Expected Output: <strong>PHP 8.2.12</strong> (XAMPP Core)</span>
                </div>

                <div style="background: #111; padding: 12px; border: 1px solid #2d2d2d; border-radius: 4px; margin-bottom: 20px;">
                    <span style="color: #75715e; font-family: 'Consolas', monospace; font-size: 12px; display: block; margin-bottom: 4px;">📟 2. I-type ito para malaman kung saang folder nanggagaling ang active command:</span>
                    <code style="color: #a9dc76; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 6px; border-radius: 4px;">Get-Command php</code>
                    <span style="color: #a5a5a5; font-size: 12px; display: block; margin-top: 4px;">👉 Expected Target Source: <strong>C:\xampp\php\php.exe</strong></span>
                </div>

                <span style="color: #a9dc76; font-size: 12px; display: block; margin-bottom: 6px; font-weight: bold; text-transform: uppercase;">🚀 HAKBANG B: Ang Aktwal na Pag-Switch at Pag-inject ng PHP 8.5</span>
                
                <div style="background: #0f1c18; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 4px; margin-bottom: 20px;">
                    <span style="color: #a9dc76; font-family: 'Segoe UI', sans-serif; font-size: 13px; display: block; margin-bottom: 12px; font-weight: bold;">📋 3. Piliin ang saktong command base sa gamit mong VS Code Terminal shell profile:</span>
                    
                    <!-- POWERSHELL COMMAND OPTION -->
                    <div style="margin-bottom: 12px;">
                        <span style="color: #a5a5a5; font-size: 11px; font-family: 'Segoe UI', sans-serif; display: block; margin-bottom: 4px;">🔵 Kung gamit mo ay <strong>PowerShell</strong> terminal profile:</span>
                        <code style="color: #a6e22e; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 10px; border-radius: 4px; font-weight: bold; border: 1px solid #3c3c3c;">$env:Path = "C:\tools\php-8.5;$env:Path"</code>
                    </div>

                    <!-- CMD COMMAND OPTION -->
                    <div>
                        <span style="color: #a5a5a5; font-size: 11px; font-family: 'Segoe UI', sans-serif; display: block; margin-bottom: 4px;">⚫ Kung gamit mo ay <strong>Command Prompt (cmd)</strong> terminal profile:</span>
                        <code style="color: #a6e22e; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 10px; border-radius: 4px; font-weight: bold; border: 1px solid #3c3c3c;">set PATH=C:\tools\php-8.5;%PATH%</code>
                    </div>

                    <span style="color: #a5a5a5; font-size: 12px; display: block; margin-top: 10px; border-top: 1px dashed rgba(16, 163, 127, 0.2); padding-top: 8px;">💡 Pagka-paste mo niyan at pindot ng Enter, walang lalabas na sulat. Ayos lang yan, ibig sabihin pumasok ang utos sa background ng terminal window mo.</span>
                </div>

                <span style="color: #ffa500; font-size: 12px; display: block; margin-bottom: 6px; font-weight: bold; text-transform: uppercase;">✅ HAKBANG C: I-verify kung matagumpay na gumana ang pag-switch</span>
                
                <div style="background: #111; padding: 12px; border: 1px solid #2d2d2d; border-radius: 4px; margin-bottom: 10px;">
                    <span style="color: #75715e; font-family: 'Consolas', monospace; font-size: 12px; display: block; margin-bottom: 4px;">📟 4. I-check ulit ang active version gamit ito:</span>
                    <code style="color: #a9dc76; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 6px; border-radius: 4px;">php -v</code>
                    <span style="color: #a9dc76; font-size: 12px; display: block; margin-top: 4px; font-weight: bold;">🎯 Dapat magbago na at ipakita ang: PHP 8.5.10</span>
                </div>

                <div style="background: #111; padding: 12px; border: 1px solid #2d2d2d; border-radius: 4px;">
                    <span style="color: #75715e; font-family: 'Consolas', monospace; font-size: 12px; display: block; margin-bottom: 4px;">📟 5. I-check ang active location folder source gamit ito:</span>
                    <code style="color: #a9dc76; font-family: 'Consolas', monospace; font-size: 14px; display: block; background: #1e1e1e; padding: 6px; border-radius: 4px;">Get-Command php</code>
                    <span style="color: #a9dc76; font-size: 12px; display: block; margin-top: 4px; font-weight: bold;">🎯 Dapat itinuturo na nito ang: C:\tools\php-8.5\php.exe</span>
                </div>
            </div>
            
            <!-- CRITICAL LESSON BREAKOUT BLOCK -->
            <div style="background: #0b111c; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.3); border-radius: 6px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px;">🧠 Important Structural Lesson: SESSION ISOLATION CONCEPT</span>
                • ⚠️ <strong>Temporary Scope Constraint:</strong> Ang injection command na ito ay gumagana <strong>strictly sa active terminal window session lamang</strong> [INDEX].<br>
                • 🛡️ <strong>Zero Corrosive Impact:</strong> Hindi nito binubura ang iyong global XAMPP PHP 8.2 configurations o ina-uninstall ang server software [INDEX]. Kapag isinarado ang active panel o terminal shell, babalik sa default base status ang computer mo [INDEX].
                
                <!-- MINI DIAGRAM LAYER -->
                <div style="background: #111; padding: 10px; border-radius: 4px; font-family: 'Consolas', monospace; font-size: 12px; color: #a5a5a5; margin-top: 10px; text-align: center; border: 1px solid #2d2d2d;">
                    [XAMPP PHP 8.2] + [Tools PHP 8.5] ➡️ Active Session Injector ➡️ <span style="color: #a9dc76; font-weight: bold;">Current Terminal Window = PHP 8.5</span>
                </div>
            </div>
        </div>



        <!-- ================= PART 4: COMPOSER ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            📦 Part 4 — Composer Dependency Architecture
        </h3>

        <!-- STEP 10 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🛠️ Step 10: Dependent Package System Integration Verification
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Suriin kung ang iyong system package dependency manager ay sumusunod na sa isolated runtime configuration settings.
            </p>
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Matapos mai-switch ang path, patakbuhin ang version evaluation command:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <code style="font-size: 14px; color: #a9dc76;">composer --version</code>
                </div>
            </div>
            <div style="background: #1c1301; padding: 12px; border: 1px solid rgba(255, 165, 0, 0.2); border-radius: 6px; font-size: 13px; color: #dcdcdc; margin-bottom: 15px;">
                🎯 <strong>Expected Terminal Output State Profiles:</strong><br>
                • Composer version: <strong style="color: #a9dc76; font-family: 'Consolas', monospace;">2.10.1</strong><br>
                • Active PHP Engine Binding Target: <strong style="color: #a9dc76; font-family: 'Consolas', monospace;">8.5.10 (C:\tools\php-8.5\php.exe)</strong>
            </div>
            <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.2); border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.5;">
                💡 <strong>Important Dependency Core Concept:</strong> Awtomatikong sumasandig at sumasailalim ang Composer executable engine kung anong PHP environment binary ang aktibo at nangunguna sa terminal session `PATH` pointer locations mo.
            </div>
        </div>

        <!-- ================= PART 5: CREATE LARAVEL 13 ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🚀 Part 5 — Scaffolding Laravel 13 Core Application
        </h3>

        <!-- STEP 11 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🧱 Step 11: Framework Application Scaffolding Command Execution
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-pull ang framework source files at itanim ito diretso sa kasalukuyang workspace terminal target directory location.
            </p>
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Siguraduhing nandoon ka sa loob ng <code>C:\xampp\htdocs\bizzsoft_final_portfolio</code> folder at patakbuhin ito:</span>
                <div style="background: #1e1e1e; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; line-height: 1.6;">
                    <code style="font-size: 14px; color: #a9dc76; white-space: pre-wrap; word-break: break-all;">composer create-project laravel/laravel:^13.0 .</code>
                </div>
            </div>
            <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.2); border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.5;">
                🎯 <strong>The Dot (.) Operator Structural Constraint Rule:</strong> Ang paglalagay ng tuldok sa hulihan ay pumupwersa sa framework install map na ilatag ang core directories (`app`, `config`, `routes`, `artisan`, atbp.) nang direkta sa mismong kasalukuyang folder, imbis na gumawa pa ito ng panibagong wrapper structure folder sa loob nito.
            </div>
        </div>


        <!-- ================= PART 6: LARAVEL VERIFICATION ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            ✅ Part 6 — Production Build Verification & Warnings Analysis
        </h3>

        <!-- STEP 12 & 13 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🟢 Steps 12 & 13: Final Architecture Verification & Validation Matrix
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-run ang huling build audit queries upang mapatunayan na ang binuong project environment system ay sumusunod sa green build requirements parameter mappings natin.
            </p>
            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Patakbuhin ang mga version target verification queries sa iyong active terminal panel:</span>
                    <div style="background: #1e1e1e; padding: 10px; border: 1px solid #3c3c3c; border-radius: 4px; font-family: 'Consolas', monospace; margin-bottom: 8px;">
                        <code style="font-size: 13px; color: #a9dc76;">php artisan --version # Expected: Laravel Framework 13.30.1</code>
                    </div>
                    <div style="background: #1e1e1e; padding: 10px; border: 1px solid #3c3c3c; border-radius: 4px; font-family: 'Consolas', monospace;">
                        <code style="font-size: 13px; color: #a9dc76;">php -v               # Expected: PHP 8.5.10</code>
                    </div>
                </div>
                <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 4px; font-size: 12px; color: #dcdcdc; display: flex; flex-direction: column; justify-content: center; line-height: 1.6;">
                    <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px;">🟢 Green Build Verified Status Matrix:</span>
                    • PHP 8.5.10 Build State Target <span style="color: #a9dc76;">✅ Loaded</span><br>
                    • Composer + Isolated Binary Scope Mapping <span style="color: #a9dc76;">✅ Active</span><br>
                    • Laravel Framework 13.30.1 Target Spec <span style="color: #a9dc76;">✅ Scaffolded</span><br>
                    • Multi-Client Session Environment Switch <span style="color: #a9dc76;">✅ Secure</span>
                </div>
            </div>

            <!-- THE SQLITE WARNING ADVISORY BLOCK -->
            <div style="background: #1c1301; padding: 15px; border: 1px solid rgba(255, 165, 0, 0.3); border-radius: 6px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                <span style="color: #ffa500; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px;">⚠️ About the SQLite Warning Diagnostics Advisory (WARN could not find driver Connection: sqlite)</span>
                • 🔍 <strong>Non-Fatal State Context:</strong> Ang warning alert log na lumabas habang ginagawa ang project ay **hindi nangangahulugang nag-failed** ang iyong framework installation. Matagumpay pa rin itong naitanim (Scaffolded successfully).<br>
                • 🛠️ <strong>The Driver Variable Core Reason:</strong> Ito ay dahil ang fresh boilerplates ng modern Laravel ay gumagamit ng SQLite as default out-of-the-box storage connector, habang ang isolated nating PHP 8.5 configuration engine profile ay wala pang binubuksang internal sqlite extension modules. <br>
                • 💡 <strong>Resolution Path Plan:</strong> Dahil ang ecosystem ng iyong system ay gumagamit ng XAMPP MySQL database management framework, direktang babaguhin at i-ko-configure na lamang natin ang database parameter keys sa `.env` patungong MySQL sa mga susunod na hakbang. <strong>Hindi mo kailangang ulitin ang pag-install ng Laravel package modules.</strong>
            </div>
        </div>


                <!-- STEPS 4 & 5 CARD: VITE ENGINE COMPILATION MAPS -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚙️ Steps 4 & 5: Configure React Engine in vite.config.js
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-activate ang raw asset compiler plug-in bindings upang kilalanin at i-render ng Vite system engine ang iyong React component states at i-set up ang internal server watchers.
            </p>

            <!-- CODE CONFIGURATION BOX -->
            <div style="margin-bottom: 15px; background: #111; padding: 15px; border: 1px dashed #3c3c3c; border-radius: 6px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 Buksan ang file: <strong style="color: #dcdcdc; font-family: 'Consolas', monospace;">vite.config.js</strong> at i-paste ang buong kompletong configuration block na ito:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5; height: 320px; overflow-y: scroll;">
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">import</span> { defineConfig } <span style="color: #f92672;">from</span> <span style="color: #e6db74;">'vite'</span>;
<span style="color: #f92672;">import</span> laravel <span style="color: #f92672;">from</span> <span style="color: #e6db74;">'laravel-vite-plugin'</span>;
<span style="color: #f92672;">import</span> tailwindcss <span style="color: #f92672;">from</span> <span style="color: #e6db74;">'@tailwindcss/vite'</span>;
<span style="color: #a6e22e; font-weight: bold;">import react from '@vitejs/plugin-react';</span>

<span style="color: #f92672;">export default</span> <span style="color: #66d9ef;">defineConfig</span>({
    <span style="color: #f92672;">plugins</span>: [
        <span style="color: #66d9ef;">laravel</span>({
            <span style="color: #f92672;">input</span>: [<span style="color: #e6db74;">'resources/css/app.css'</span>, <span style="color: #e6db74;">'resources/js/app.jsx'</span>],
            <span style="color: #f92672;">refresh</span>: <span style="color: #ae81ff;">true</span>,
        }),
        <span style="color: #66d9ef;">tailwindcss</span>(),
        <span style="color: #a6e22e; font-weight: bold;">react(),</span>
    ],
    <span style="color: #f92672;">server</span>: {
        <span style="color: #f92672;">watch</span>: {
            <span style="color: #f92672;">ignored</span>: [<span style="color: #e6db74;">'**/storage/framework/views/**'</span>],
        },
    },
});</pre>
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> para i-save ang asset tracking configuration map.</span>
            </div>
        </div>

                        <!-- ================= PART 6: LARAVEL VERIFICATION ================= -->
        <h3 style="color: #10a37f; font-size: 15px; font-weight: 800; margin: 40px 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            ✅ Part 6 — Production Build Verification & Warnings Analysis
        </h3>

        <!-- STEP 12 & 13 CARD -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🟢 Steps 12 & 13: Final Architecture Verification & Validation Matrix
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-run ang huling build audit queries upang mapatunayan na ang binuong project environment system ay sumusunod sa green build requirements parameter mappings natin.
            </p>
            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Patakbuhin ang mga version target verification queries sa iyong active terminal panel:</span>
                    <div style="background: #1e1e1e; padding: 10px; border: 1px solid #3c3c3c; border-radius: 4px; font-family: 'Consolas', monospace; margin-bottom: 8px;">
                        <code style="font-size: 13px; color: #a9dc76;">php artisan --version # Expected: Laravel Framework 13.30.1</code>
                    </div>
                    <div style="background: #1e1e1e; padding: 10px; border: 1px solid #3c3c3c; border-radius: 4px; font-family: 'Consolas', monospace;">
                        <code style="font-size: 13px; color: #a9dc76;">php -v               # Expected: PHP 8.5.10</code>
                    </div>
                </div>
                <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 4px; font-size: 12px; color: #dcdcdc; display: flex; flex-direction: column; justify-content: center; line-height: 1.6;">
                    <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px;">🟢 Green Build Verified Status Matrix:</span>
                    • PHP 8.5.10 Build State Target <span style="color: #a9dc76;">✅ Loaded</span><br>
                    • Composer + Isolated Binary Scope Mapping <span style="color: #a9dc76;">✅ Active</span><br>
                    • Laravel Framework 13.30.1 Target Spec <span style="color: #a9dc76;">✅ Scaffolded</span><br>
                    • Multi-Client Session Environment Switch <span style="color: #a9dc76;">✅ Secure</span>
                </div>
            </div>

            <!-- THE SQLITE WARNING ADVISORY BLOCK -->
            <div style="background: #1c1301; padding: 15px; border: 1px solid rgba(255, 165, 0, 0.3); border-radius: 6px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                <span style="color: #ffa500; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px;">⚠️ About the SQLite Warning Diagnostics Advisory (WARN  could not find driver Connection: sqlite)</span>
                • 🔍 <strong>Non-Fatal State Context:</strong> Ang warning alert log na lumabas habang ginagawa ang project ay **hindi nangangahulugang nag-failed** ang iyong framework installation. Matagumpay pa rin itong naitanim [INDEX].<br>
                • 🛠️ <strong>The Driver Variable Core Reason:</strong> Ito ay dahil ang fresh boilerplates ng modern Laravel ay gumagamit ng SQLite as default out-of-the-box storage connector, habang ang isolated nating PHP 8.5 configuration engine profile ay wala pang binubuksang internal sqlite extension modules. <br>
                • 💡 <strong>Resolution Path Plan:</strong> Dahil ang ecosystem ng iyong system ay gumagamit ng XAMPP MySQL database management framework, direktang babaguhin at i-ko-configure na lamang natin ang database parameter keys sa `.env` patungong MySQL sa mga susunod na hakbang. <strong>Hindi mo kailangang ulitin ang pag-install ng Laravel package modules.</strong>
            </div>
        </div>


                <!-- STEP 7: CREATING THE MASTER INERTIA LAYOUT HTML ENTRY POINT -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                📄 Step 7: Create Master Root Blade Layout File
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gagawa tayo ng bagong file na magsisilbing pangunahing tulay o root shell profile kung saan i-re-render ng Laravel server ang iyong React + Inertia components hierarchy.
            </p>

            <!-- DIRECTORY PROFILE MAP -->
            <div style="margin-bottom: 20px; background: #111; padding: 12px; border: 1px dashed #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5;">
                📁 <strong>Target Directory Structure Location Mapping:</strong><br>
                resources<br>
                └── views<br>
                &nbsp;&nbsp;&nbsp;&nbsp;├── welcome.blade.php<br>
                &nbsp;&nbsp;&nbsp;&nbsp;└── <strong style="color: #a9dc76;">app.blade.php</strong> &nbsp;&nbsp;📂 <span style="color: #10a37f;">← GUMAWA NG BAGONG FILE DITO</span>
            </div>

            <!-- CODE INJECTION BOX -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 I-paste ang kompletong root HTML server scaffold na ito sa loob ng <code>app.blade.php</code>:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5; height: 320px; overflow-y: scroll;">
                    @verbatim
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">&lt;!DOCTYPE html&gt;</span>
<span style="color: #f92672;">&lt;html</span> <span style="color: #a6e22e;">lang=</span><span style="color: #e6db74;">"{{ str_replace('_', '-', app()-&gt;getLocale()) }}"</span><span style="color: #f92672;">&gt;</span>
    <span style="color: #f92672;">&lt;head&gt;</span>
        <span style="color: #f92672;">&lt;meta</span> <span style="color: #a6e22e;">charset=</span><span style="color: #e6db74;">"utf-8"</span><span style="color: #f92672;">&gt;</span>
        <span style="color: #f92672;">&lt;meta</span> <span style="color: #a6e22e;">viewport=</span><span style="color: #e6db74;">"width=device-width, initial-scale=1"</span><span style="color: #f92672;">&gt;</span>

        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        @inertiaHead
    <span style="color: #f92672;">&lt;/head&gt;</span>

    <span style="color: #f92672;">&lt;body&gt;</span>
        @inertia
    <span style="color: #f92672;">&lt;/body&gt;</span>
<span style="color: #f92672;">&lt;/html&gt;</span></pre>
                    @endverbatim
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> para i-save ang bagong layout master component.</span>
            </div>

            <!-- CORE ARCHITECTURAL EXPLANATION -->
            <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.2); border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.5;">
                💡 <strong>Important Directive Compilation Rules:</strong><br>
                • @viteReactRefresh – Kritikal para sa React Fast Refresh tracking habang nag-e-edit ka ng dynamic state designs.<br>
                • @inertiaHead &amp; @inertia – Sila ang nagsisilbing root target slots kung saan awtomatikong isinasalpak ng framework ang dynamic JavaScript compilation assets at meta headers mo.
            </div>
        </div>


        <!-- STEP 8: CONFIGURING ROUTING VIA WEB.PHP -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🌐 Step 8: Update Web Routes Configuration
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-co-configure natin ang server web routes upang baguhin ang default behavior nito. Imbis na tradisyunal na Blade view, gagamitin natin ang <strong>Inertia controller bridge</strong> para i-render ang iyong React page.
            </p>

            <!-- CODE INJECTION BOX -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 I-SELECT ALL at palitan ang buong laman ng file na <code>routes/web.php</code> gamit ito:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5;">
                    @verbatim
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">&lt;?php</span>

<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">Illuminate\Support\Facades\Route</span>;
<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">Inertia\Inertia</span>;

<span style="color: #a6e22e;">Route</span><span style="color: #f92672;">::</span><span style="color: #66d9ef;">get</span>(<span style="color: #e6db74;">'/'</span>, <span style="color: #f92672;">function</span> () {
    <span style="color: #f92672;">return</span> <span style="color: #a6e22e;">Inertia</span><span style="color: #f92672;">::</span><span style="color: #66d9ef;">render</span>(<span style="color: #e6db74;">'Home'</span>);
});</pre>
                    @endverbatim
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> para i-save ang routing setup profile.</span>
            </div>

            <!-- CORE ARCHITECTURAL EXPLANATION -->
            <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.2); border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.5;">
                💡 <strong>Inertia Paradigm Mechanism:</strong> Ang linyang <code>Inertia::render('Home')</code> ay hindi naghahanap ng `.blade.php` file. Awtomatiko nitong tina-target ang iyong magiging React file component sa lokasyong <code>resources/js/Pages/Home.jsx</code> upang i-serve ito nang walang loading delay sa browser.
            </div>
        </div>


                <!-- STEP 9: CREATING THE REACT WELCOME VIEW PAGE COMPONENT -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚛️ Step 9: Scaffold the Home.jsx Page Component
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gagawa tayo ng kauna-unahang isolated frontend file layer sa loob ng Pages system configuration map upang magsilbing dynamic rendering index view sa browser.
            </p>

            <!-- DIRECTORY PROFILE MAP -->
            <div style="margin-bottom: 20px; background: #111; padding: 12px; border: 1px dashed #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5;">
                📁 <strong>Directory Path Construction Blueprint:</strong><br>
                1. Gagawa ng sub-folder set sa path na: <code style="color: #a9dc76;">resources/js/Pages</code><br>
                2. Sa loob ng folder na iyon, gumawa ng core target page: <strong style="color: #a9dc76;">Home.jsx</strong>
            </div>

            <!-- CODE INJECTION BOX -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 I-paste ang malinis na React configuration baseline framework na ito sa loob ng <code>Home.jsx</code>:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5;">
                    @verbatim
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">export default function</span> <span style="color: #a6e22e;">Home</span>() {
    <span style="color: #f92672;">return</span> (
        <span style="color: #f92672;">&lt;</span><span style="color: #a6e22e;">h1</span><span style="color: #f92672;">&gt;</span>BizzSoft Portfolio<span style="color: #f92672;">&lt;/</span><span style="color: #a6e22e;">h1</span><span style="color: #f92672;">&gt;</span>
    );
}</pre>
                    @endverbatim
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> para i-save ang bagong index landing component viewport.</span>
            </div>
        </div>



                <!-- STEP 10: RENAME CORE ENTRY POINT FILE Extension -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚙️ Step 10: Rename Core Entry Point File Extension
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Kailangan nating palitan ang file extension ng pangunahing entry point upang ganap na makilala ng Vite compiler engine ang JSX native tags na isinulat natin sa loob nito.
            </p>

            <!-- DIRECTORY PROFILE MAP -->
            <div style="margin-bottom: 15px; background: #111; padding: 12px; border: 1px dashed #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5;">
                📁 <strong>File Rename Mapping Profile:</strong><br>
                resources/js/<del style="color: #ff5555;">app.js</del> &nbsp;➡️&nbsp; resources/js/<strong style="color: #a9dc76;">app.jsx</strong> &nbsp;&nbsp;🏷️ <span style="color: #10a37f;">← I-RENAME GAMIT ANG VS CODE SIDEBAR</span>
            </div>
        </div>

        <!-- STEP 11: RUN PRODUCTION BUILD ENGINE PIPELINE -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🚀 Step 11: Execute Vite Assets Bundle Build Pipeline
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Matapos mai-rename ang extension file link target, patakbuhin ang asset bundling script upang i-compile ng Vite ang buong React code base patungong highly optimized single-file script cache targets.
            </p>

            <!-- CONFIRMATION TERMINAL COMMAND -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Patakbuhin ang saktong build module manager pipeline sa iyong active terminal panel:</span>
                <div style="background: #1e1e1e; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; line-height: 1.6;">
                    <span style="color: #75715e;"># I-trigger ang framework production bundle mapping generation sequence</span><br>
                    <code style="font-size: 14px; color: #a9dc76; white-space: pre-wrap; word-break: break-all;">npm.cmd run build</code>
                </div>
            </div>

            <!-- EXPECTED TARGET MATCH BLOCK -->
            <div style="background: #0f1c18; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px;">🎯 Expected Output Profile Result State:</span>
                Dapat magpakita ang module bundle matrix ng tagumpay na confirmation log profile (gaya ng <strong style="color: #a9dc76;">VITE vX.X.X built in Xms</strong>) kasama ang saktong file sizes ng iyong compiled css at js file manifests sa loob ng <code>public/build/assets/</code> mapping targets directory niyo.
            </div>
        </div>

        <!-- STEP 12: REGISTER INERTIA MIDDLEWARE IN BOOTSTRAP/APP.PHP -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚙️ Step 12: Register HandleInertiaRequests Middleware
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Kailangan nating i-inject ang nagawang Inertia middleware sa loob ng global application configuration file upang awtomatikong mai-embed ang data shared states sa bawat web application server request.
            </p>

            <!-- CODE INJECTION BOX -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 Buksan ang file: <strong style="color: #dcdcdc; font-family: 'Consolas', monospace;">bootstrap/app.php</strong> at palitan ang buong laman nito gamit ito:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5; height: 350px; overflow-y: scroll;">
                    @verbatim
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">&lt;?php</span>

<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">App\Http\Middleware\HandleInertiaRequests</span>;
<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">Illuminate\Foundation\Application</span>;
<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">Illuminate\Foundation\Configuration\Exceptions</span>;
<span style="color: #f92672;">use</span> <span style="color: #a6e22e;">Illuminate\Foundation\Configuration\Middleware</span>;

<span style="color: #f92672;">return</span> <span style="color: #a6e22e;">Application</span><span style="color: #f92672;">::</span><span style="color: #66d9ef;">configure</span>(basePath: <span style="color: #66d9ef;">dirname</span>(<span style="color: #ae81ff;">__DIR__</span>))
    <span style="color: #f92672;">-&gt;</span><span style="color: #66d9ef;">withRouting</span>(
        web: <span style="color: #ae81ff;">__DIR__</span><span style="color: #f92672;">.</span><span style="color: #e6db74;">'/../routes/web.php'</span>,
        commands: <span style="color: #ae81ff;">__DIR__</span><span style="color: #f92672;">.</span><span style="color: #e6db74;">'/../routes/console.php'</span>,
        health: <span style="color: #e6db74;">'/up'</span>,
    )
    <span style="color: #f92672;">-&gt;</span><span style="color: #66d9ef;">withMiddleware</span>(<span style="color: #f92672;">function</span> (<span style="color: #a6e22e;">Middleware</span> <span style="color: #66d9ef;">$middleware</span>): <span style="color: #f92672;">void</span> {
        <span style="color: #66d9ef;">$middleware</span><span style="color: #f92672;">-&gt;</span><span style="color: #66d9ef;">web</span>(append: [
            <span style="color: #a6e22e;">HandleInertiaRequests</span><span style="color: #f92672;">::</span><span style="color: #66d9ef;">class</span>,
        ]);
    })
    <span style="color: #f92672;">-&gt;</span><span style="color: #66d9ef;">withExceptions</span>(<span style="color: #f92672;">function</span> (<span style="color: #a6e22e;">Exceptions</span> <span style="color: #66d9ef;">$exceptions</span>): <span style="color: #f92672;">void</span> {
        <span style="color: #75715e;">//</span>
    })<span style="color: #f92672;">-&gt;</span><span style="color: #66d9ef;">create</span>();</pre>
                    @endverbatim
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> para i-save ang global application configuration settings.</span>
            </div>

            <!-- CORE ARCHITECTURAL EXPLANATION -->
            <div style="background: #0f1c18; padding: 12px; border: 1px solid rgba(16, 163, 127, 0.2); border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.5;">
                💡 <strong>Middleware Pipeline Rule:</strong> Ang paggamit ng method helper signature parameter set na <code>$middleware->web(append: [...])</code> ay sumisiguro na ang isolated application middleware structure configuration layer natin ay ligtas na idudugtong (append) sa dulo ng existing web routing pipelines nang hindi binabasag ang core application cycle lifecycle framework.
            </div>
        </div>



                <!-- ================= CHAPTER 3: DATABASE & PRODUCTION LAUNCH ================= -->
        <h2 style="color: #10a37f; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
            🗄️ Chapter 3 — Database Management & Final Production Launch
        </h2>

        <!-- STEP 13: DATABASE CREATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🗄️ Step 13: Scaffold Database via phpMyAdmin
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gagawa tayo ng bagong relational database storage connector sa iyong local MySQL engine para hawakan ang data tables ng portfolio project.
            </p>
            <div style="background: #111; padding: 15px; border-radius: 4px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                1️⃣ <strong>XAMPP Activation:</strong> Buksan ang iyong XAMPP Control Panel at i-click ang **Start** sa tapat ng **MySQL**.<br>
                2️⃣ <strong>phpMyAdmin Web App:</strong> Magtungo sa iyong browser at buksan ang: <code style="color: #a9dc76;">http://localhost/phpmyadmin/</code><br>
                3️⃣ <strong>Create New Database:</strong> Gagawa ng bagong database schema gamit ang mga saktong parameter keys na ito:<br>
                • Database Name Target: <strong style="color: #10a37f; font-family: 'Consolas', monospace;">bizzsoft_final_portfolio</strong><br>
                • Recommended System Collation: <strong style="color: #ffa500; font-family: 'Consolas', monospace;">utf8mb4_unicode_ci</strong>
            </div>
        </div>

        <!-- STEP 14: .ENV CONFIGURATION AND MIGRATIONS -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                ⚙️ Step 14: Environment Mapping & Database Migrations
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-update natin ang isolated local server credentials properties upang i-hook up ang Laravel engine mula sa default SQLite patungong XAMPP MySQL environment module.
            </p>

            <!-- CODE INJECTION BOX -->
            <div style="margin-bottom: 20px; background: #111; padding: 15px; border: 1px dashed #3c3c3c; border-radius: 6px;">
                <span style="color: #a5a5a5; font-size: 13px; display: block; margin-bottom: 8px;">📝 1. Buksan ang file na <code>.env</code>, hanapin ang database segment keys at palitan ng mga sumusunod:</span>
                <div style="background: #0b0b0b; padding: 14px; border: 1px solid #2d2d2d; border-radius: 4px; font-family: 'Consolas', monospace; line-height: 1.5;">
                    @verbatim
                    <pre style="margin: 0; color: #dcdcdc;"><span style="color: #f92672;">DB_CONNECTION</span>=<span style="color: #e6db74;">mysql</span>
<span style="color: #f92672;">DB_HOST</span>=<span style="color: #e6db74;">127.0.0.1</span>
<span style="color: #f92672;">DB_PORT</span>=<span style="color: #e6db74;">3306</span>
<span style="color: #f92672;">DB_DATABASE</span>=<span style="color: #e6db74;">bizzsoft_final_portfolio</span>
<span style="color: #f92672;">DB_USERNAME</span>=<span style="color: #e6db74;">root</span>
<span style="color: #f92672;">DB_PASSWORD</span>=</pre>
                    @endverbatim
                </div>
                <span style="color: #ffa500; font-size: 12px; display: block; margin-top: 10px;">💾 Pindutin ang <strong>Ctrl + S</strong> upang i-save ang local environment variables layout.</span>
            </div>
        </div>


                <!-- STEP 15: DATABASE MIGRATION EXECUTION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🛠️ Step 15: Run Database Migrations & Clear System Cache
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Patakbuhin ang migration at structure validation script arrays sa iyong active terminal window upang maitanim ang orihinal na data tables sa MySQL module core configuration.
            </p>

            <!-- TERMINAL COMMANDS SET -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 I-run ang mga sumusunod na artisan utilities:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 10px;">
                    <code style="font-size: 14px; color: #a9dc76;">php artisan migrate</code>
                </div>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <code style="font-size: 14px; color: #a9dc76;">php artisan optimize:clear</code>
                </div>
            </div>

            <!-- EXPECTED TARGET MATCH BLOCK -->
            <div style="background: #0f1c18; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 6px; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #10a37f; font-weight: bold; display: block; margin-bottom: 4px; text-transform: uppercase; font-size: 11px;">🎯 Expected Migration Status Output Result State:</span>
                Dapat magpakita ang terminal ng green success strings validation logs gaya ng:<br>
                <code style="font-size: 12px; color: #a9dc76; font-family: 'Consolas', monospace; display: block; margin-top: 4px; background: #111; padding: 6px; border-radius: 4px; line-height: 1.4;">
                    INFO  Preparing database.<br>
                    INFO  Running migrations.<br>
                    ...<br>
                    DONE
                </code>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-top: 6px;">🔥 Mapapansin mo na wala nang lalabas na missing sqlite driver exception messages sa <code>optimize:clear</code> command dahil naka-map na nang direkta ang core connector sa active MySQL database module.</span>
            </div>
        </div>

        <!-- STEP 16: THE GREEN BUILD LAUNCH PRODUCTION GATE -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #10a37f !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px; font-family: 'Segoe UI', sans-serif;">
            <h4 style="font-size: 15px; font-weight: 700; color: #10a37f !important; margin: 0 0 12px 0; text-transform: uppercase;">
                🚀 Step 16: Fire Up Test Servers & Validate Viewport Render
            </h4>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Matapos maisara ang lahat ng pipeline checks, simulan ang local dev gateway server upang suriin ang live initialization render ng project sa browser window.
            </p>
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">💻 Patakbuhin ang engine web server handler command sa terminal:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    <code style="font-size: 14px; color: #a9dc76;">php artisan serve</code>
                </div>
            </div>
            <div style="background: #0b111c; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.4); border-radius: 6px; font-size: 13px; color: #dcdcdc; line-height: 1.6;">
                🌐 <strong>Browser Integration Verification Pipeline:</strong><br>
                Magtungo sa iyong web browser at buksan ang address link: <a href="http://127.0.0.1:8000" target="_blank" style="color: #10a37f; font-weight: bold; text-decoration: underline;">http://127.0.0.1:8000</a><br><br>
                🎯 <strong>Expected Screen Render Output Flag:</strong><br>
                Dapat magpakita sa screen ang malinis at aktibong pamagat ng iyong standalone index page component text na:<br>
                <strong style="color: #a9dc76; font-size: 18px; font-family: 'Consolas', monospace; display: block; background: #111; padding: 10px; border-radius: 4px; text-align: center; margin-top: 5px; border: 1px dashed rgba(16, 163, 127, 0.5);">BizzSoft Portfolio</strong>
            </div>

            <!-- THE FINAL GREEN BUILD CONFIRMATION LOGS BLOCK -->
            <div style="background: #0f1c18; padding: 15px; border: 1px solid rgba(16, 163, 127, 0.6); border-radius: 6px; font-size: 13px; color: #dcdcdc; line-height: 1.6; margin-top: 15px;">
                <span style="color: #a9dc76; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px; letter-spacing: 0.5px;">🟢 BUILD INITIALIZATION STATUS MATRIX SUMMARY:</span>
                • Standalone PHP 8.5.10 Dedicated Engine Scope <span style="color: #a9dc76;">✅ GREEN BUILD STATUS</span><br>
                • Dependent Composer Integration + Isolated Binary Mapping <span style="color: #a9dc76;">✅ GREEN BUILD STATUS</span><br>
                • Laravel Framework 13.30.1 Full Project Installation <span style="color: #a9dc76;">✅ GREEN BUILD STATUS</span><br>
                • React + Inertia Frontend Scaffolding Asset Compile Maps <span style="color: #a9dc76;">✅ GREEN BUILD STATUS</span><br>
                • Relational Local MySQL Environment Database Connection Strings <span style="color: #a9dc76;">✅ GREEN BUILD STATUS</span><br>
                <strong style="color: #10a37f; font-size: 14px; text-transform: uppercase; display: block; margin-top: 8px; border-top: 1px dashed rgba(16, 163, 127, 0.3); padding-top: 8px; text-align: center; letter-spacing: 0.5px;">🏆 SETUP IS 100% COMPLETE &amp; READY FOR PORTFOLIO CODE PRODUCTION!</strong>
            </div>
        </div>

      

        <!-- ─── BACK SHORTCUT BUTTON ─── -->
        <div style="margin-top: 40px; margin-bottom: 30px;">
            <a href="/home" style="display: inline-block; color: #10a37f; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 8px 16px; border-radius: 6px; background: #111; transition: background 0.2s;">
                ⬅️ Balik sa Dashboard
            </a>
        </div>

    </div>
</div>
@endsection
