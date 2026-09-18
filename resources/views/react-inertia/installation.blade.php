@extends('layouts.app')

@section('title', 'React + Inertia Installation Guide - DevCommands')

@section('content')
<!-- THE BLOCKER WRAPPER: Hahila sa buong page content pababa para sa 3-row navbar mo -->
<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- UNIVERSAL ALIGNMENT WRAPPER -->
    <div style="max-width: 1000px; margin: 0 auto;">

        <!-- ─── HEADER LAYER ─── -->
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #61dafb; letter-spacing: -0.5px; margin-bottom: 10px;">
                ⚛️ V5 React + Inertia Installation & Live Deployment
            </h1>
            <p class="text-muted" style="font-size: 15px; color: #a5a5a5 !important; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Selyadong cheat sheet para sa local workstation setup at live site synchronization ng ating modernong V5 web application stack.
            </p>
        </div>

        <!-- ─── BACK SHORTCUT ─── -->
        <div style="margin-bottom: 30px;">
            <a href="/react-inertia" style="display: inline-block; color: #61dafb; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 8px 16px; border-radius: 6px; background: #111; transition: background 0.2s;">
                ⬅️ Balik sa React Menu
            </a>
        </div>

        <!-- DITO MO NA PWDENG I-PASTE NG UNTI-UNTI ANG MGA CARDS NG DEPLOYMENT AT INSTALLATION STEPS... -->

    </div>
</div>


<!-- ================= SECTION 1: LIVE SERVER PRODUCTION SETUP ================= -->
<h2 style="color: #61dafb; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
    🚀 Part 2: Hostinger Live Production Server Deployment
</h2>

<!-- SECTION 1: SSH LOGIN & REPOSITORY CLONE -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        📦 SECTION 1 — SSH & Laravel Installation
    </h3>

    <!-- STEP 1 TO 5 MAGKAKAHIWALAY NA COMMANDS -->
    <div style="margin-bottom: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 1 — SSH Login [PAREHO LANG]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 10px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">ssh -p 65002 u180948312@145.79.28.207</code></pre>
            @endverbatim
        </div>

        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 2 — Go to Home Directory [PAREHO LANG]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 10px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">cd ~</code></pre>
            @endverbatim
        </div>

        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 3 — Tingnan muna ang laman [PAREHO LANG] (Dapat makikita ang laravel_v4, laravel_app, laravel_v5):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 10px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">ls</code></pre>
            @endverbatim
        </div>

        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 4 — Create V5 Folder (Kung hindi pa nagawa, ⚠️ Hindi laravel_app):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 10px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">mkdir laravel_v5</code></pre>
            @endverbatim
        </div>

        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 5 — Enter V5 Folder [PAREHO LANG]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">cd ~/laravel_v5</code></pre>
            @endverbatim
        </div>
    </div>

    <!-- STEP 6: GIT CLONE -->
    <div>
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 6 — Clone V5 Repository [⭐ BAGO — Repository lang ang nagbago]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">git clone https://github.com/bizzcode-zzz/bizzsoft-v5-react.git .</code></pre>
            @endverbatim
        </div>
        <span style="color: #ffc107; font-size: 12px; display: block; margin-top: 5px;">⚠️ <strong>Importante ang . sa dulo:</strong> Ibig sabihin, ang repository ay didiretso sa loob ng <code style="color: #ffffff;">laravel_v5/</code>, hindi sa panibagong sub-folder [INDEX].</span>
    </div>
</div>



<!-- SECTION 2: PHP DEPENDENCIES -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        ⚙️ SECTION 2 — PHP Dependencies
    </h3>

    <!-- STEP 7 -->
    <div style="margin-bottom: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 7 — Install Composer [PAREHO LANG] (Hintayin matapos, dapat magkaroon ng vendor/):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">composer install --no-dev --optimize-autoloader</code></pre>
            @endverbatim
        </div>
    </div>

    <!-- STEP 8 -->
    <div>
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 8 — Verify Laravel [PAREHO LANG] (Dapat lalabas ang Laravel version natin):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan --version</code></pre>
            @endverbatim
        </div>
        <span style="color: #6a9955; font-size: 12px; display: block; margin-top: 5px;">💡 <strong>Note sa proc_open:</strong> Ang issue na lumalabas sa ilang Artisan commands ay dahil sa process/interactive prompt limit ng server. Hindi natin iyon gagamitin bilang deployment step unless kailangan.</span>
    </div>
</div>


<!-- SECTION 3: V5 .ENV SETUP -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ffc107 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #ffc107 !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        ⚙️ SECTION 3 — V5 .env
    </h3>

    <!-- STEP 9 -->
    <div style="margin-bottom: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 9 — Create .env [PAREHO LANG]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">cp .env.example .env</code></pre>
            @endverbatim
        </div>
    </div>

    <!-- STEP 10 -->
    <div style="margin-bottom: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 10 — Edit .env [PAREHO LANG ANG COMMAND]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 12px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">nano .env</code></pre>
            @endverbatim
        </div>
    </div>

    <!-- CRITICAL ENV VALUE REFERENCE DISPLAY -->
    <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
        <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">⭐ BIZZSOFT V5 PRODUCTION VALUES TO INSERT:</span>
        <span style="color: #569cd6;">APP_NAME</span>=BizzSoft<br>
        <span style="color: #569cd6;">APP_ENV</span>=production<br>
        <span style="color: #569cd6;">APP_KEY</span>=<br>
        <span style="color: #569cd6;">APP_DEBUG</span>=false<br>
        <span style="color: #569cd6;">APP_URL</span>=https://bizzsoft.dev<br>
        <br>
        <span style="color: #6a9955;"># Database Configuration Settings</span><br>
        <span style="color: #569cd6;">DB_CONNECTION</span>=mysql<br>
        <span style="color: #569cd6;">DB_HOST</span>=localhost<br>
        <span style="color: #569cd6;">DB_PORT</span>=3306<br>
        <span style="color: #569cd6;">DB_DATABASE</span>=<span style="color: #ce9178;">u180948312_bizzsoft_v5</span><br>
        <span style="color: #569cd6;">DB_USERNAME</span>=<span style="color: #ce9178;">u180948312_bizzsoft_v5</span><br>
        <span style="color: #569cd6;">DB_PASSWORD</span>=<span style="color: #ce9178;">YOUR_V5_DATABASE_PASSWORD</span>
    </div>

    <!-- VSCODE NANO EDITOR SAVE & EXIT WORKFLOW BOX -->
    <div style="background: #15232d; padding: 12px; border-radius: 6px; border: 1px solid rgba(97, 218, 251, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc;">
        <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 4px;">💾 NANO EDITOR SAVE & EXIT WORKFLOW:</span>
        <p style="margin: 0; color: #b3b3b3;">
            After magawa ang <code style="color: #ffffff;">nano .env</code> at mailagay ang mga tamang production values ay pindutin ang sumusunod na sequence sa keyboard upang mai-save ang file:
            <br><br>
            <span style="color: #ffffff; font-weight: bold;">Press Ctrl + O</span> ➡️ Pagkatapos ay pindutin ang <span style="color: #00ffcc; font-weight: bold;">Enter</span> ➡️ At huli ay pindutin ang <span style="color: #ffffff; font-weight: bold;">Ctrl + X</span> para mag-exit.
        </p>
    </div>

</div>


        <!-- SECTION 4 & 5: APP KEY & REACT LOCAL BUILD WORKFLOW -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                🔑 SECTION 4 & 5 — Key Generation & React Local Build Workflow
            </h3>
            
            <!-- STEP 11 -->
            <div style="margin-bottom: 20px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 11 — Generate App Key [PAREHO LANG]:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 6px;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan key:generate</code></pre>
                    @endverbatim
                </div>
                <div style="font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5; padding-left: 15px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    <span style="color: #2ecc71;">APP_KEY generated successful</span>
                </div>
            </div>

            <!-- STEP 12 -->
            <div style="margin-bottom: 20px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 12 — Check Node/NPM Environment Specification:</span>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 6px;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">node -v</code></pre>
                    @endverbatim
                </div>
                <div style="font-family: 'Consolas', monospace; font-size: 13px; color: #ff4d4d; padding-left: 15px; line-height: 1.5;">
                    &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    <strong>Hostinger has no Node.js</strong><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    <span style="background: #241414; padding: 2px 6px; border: 1px solid rgba(231,76,60,0.3); border-radius: 4px; font-weight: bold;">⚠️ Do NOT run npm commands on Hostinger Server!</span>
                </div>
            </div>

            <!-- STEP 13 -->
            <div style="margin-bottom: 20px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 13 — Compile React Assets on Local Workstation PC:</span>
                <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 6px 0;">
                    Buksan ang standard CMD terminal sa iyong sariling computer bago mag-upload:
                </p>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 6px;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">C:\xampp\htdocs\inventory_v5_react&gt;</span> npm run build</code></pre>
                    @endverbatim
                </div>
                <div style="font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5; padding-left: 15px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    Awtomatikong mabubuo ang production chunks sa: <span style="color: #ffffff; font-weight: bold;">public/build/</span>
                </div>
            </div>

                        <!-- STEP 14 -->
            <div style="border-top: 1px dashed rgba(97, 218, 251, 0.2); padding-top: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 14 — Manual Compiled Assets Upload Deployment:</span>
                <div style="background: #15232d; padding: 15px; border: 1px solid rgba(97, 218, 251, 0.2); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                    <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">📂 MANUAL UPLOAD ROUTE PATH:</span>
                    Kunin ang bagong gawang resource assets mula sa inyong PC gamit ang FileZilla or Hostinger File Manager. <span style="color: #00ffcc; font-weight: bold;">I-COPY at i-upload ang buong "build" na folder</span> patungo sa kaparehong landas (same path) sa iyong Hostinger server [INDEX]:
                    <br><br>
                    <span style="color: #ffffff; font-weight: bold;">MULA SA LOCAL PC (Source):</span><br>
                    📁 inventory_v5_react / public / <strong style="color: #61dafb; font-size: 14px;">[ build ]</strong> 👈 <em>(I-copy itong buong folder na ito)</em><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #00ffcc; font-weight: bold;">PATUNGO SA HOSTINGER SERVER (Destination):</span><br>
                    📁 laravel_v5 / public / <strong style="color: #00ffcc; font-size: 14px;">[ build ]</strong> 👈 <em>(I-upload sa parehong structural path)</em>
                </div>
            </div>


        <!-- SECTION 7 & 8: WEB ENTRY MAPPING -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                🌐 SECTION 7 & 8 — Public Extraction & Manual File Remapping
            </h3>
            
            <!-- STEP 17 -->
            <div style="margin-bottom: 20px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 17 — Manual Public Directory Extraction [PAREHO SA V4 WORKFLOW]:</span>
                <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 6px 0;">
                    Kopyahin o ilipat ang kabuuang laman (contents lamang) ng isolated public module patungo sa inyong live active web space directory:
                </p>
                <div style="font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5; padding-left: 15px; line-height: 1.6;">
                    <span style="color: #ffffff; font-weight: bold;">laravel_v5/public/</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    <span style="color: #00ffcc; font-weight: bold;">bizzsoft.dev/public_html/</span>
                </div>
            </div>

            <!-- STEP 18 -->
            <div>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 18 — Edit public_html/index.php Configuration Pointers:</span>
                <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 6px 0;">
                    Buksan ang active <code>index.php</code> entryway controller file sa domain directory root at ituro ang execution tracks papunta sa V5 workspace folder layers [INDEX]:
                </p>
                <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                    @verbatim
                    <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;"><span style="color: #6a9955;">// Remap internal vendor autoload modules</span>
require '/home/u180948312/laravel_v5/vendor/autoload.php';

<span style="color: #6a9955;">// Remap internal bootstrap engine initializer</span>
$app = require_once '/home/u180948312/laravel_v5/bootstrap/app.php';</code></pre>
                    @endverbatim
                </div>
            </div>
        </div>



<!-- SECTION 6: DATABASE MIGRATION & SEEDING -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #2ecc71 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #2ecc71 !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        🗄️ SECTION 6 — Database
    </h3>

    <!-- STEP 15 -->
    <div style="margin-bottom: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 15 — Run Migrations [PAREHO LANG ang Laravel concept - Pero dahil may sariling V5 database]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 8px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan migrate</code></pre>
            @endverbatim
        </div>
        <span style="color: #ffc107; font-size: 12px; display: block; margin-top: 5px;">💡 Kung magtanong ng <em>"Are you sure you want to run this command?"</em> ➡️ i-type ang <strong style="color: #ffffff;">yes</strong>.</span>
        <span style="color: #ff4d4d; font-size: 12px; display: block; margin-top: 3px;">⚠️ <strong>HUWAG:</strong> <code style="color: #ffffff; background: #ff4d4d; padding: 1px 4px; border-radius: 3px;">php artisan migrate:fresh</code> sa production database! Lalo na huwag gagamitin ang database ng V4.</span>
    </div>

    <!-- STEP 16 -->
    <div>
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 16 — Seed V5 Database [⭐ Same concept, kailangan dahil may RBAC/initial data] (Kung fresh/empty ang database):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 15px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan db:seed</code></pre>
            @endverbatim
        </div>

        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">Alternative (Kung fresh database talaga, pili lang ng isa):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan migrate --seed</code></pre>
            @endverbatim
        </div>
        <span style="color: #ffc107; font-size: 12px; display: block; margin-top: 5px;">⚠️ <strong>Huwag patakbuhin nang sunod-sunod</strong> ang dalawang command sa itaas kung ayow nating ma-duplicate ang seed data.</span>
    </div>
</div>


<!-- SECTION 7 & 8: PRODUCTION CACHE & PUBLIC FILES MIGRATION -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        ⚡ SECTION 7 & 8 — Laravel Production Cache & Public Files
    </h3>

    <!-- STEP 17 -->
    <div style="margin-bottom: 20px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">STEP 17 — Clear Old Cache [⭐ V5 production step]:</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">php artisan optimize:clear</code></pre>
            @endverbatim
        </div>
        <span style="color: #ffc107; font-size: 12px; display: block; margin-top: 5px;">🛑 <strong>Paalala:</strong> Kung sakaling magkaroon ulit ng <code>proc_open</code> issue sa command na ito sa Hostinger, stop muna at huwag nating pilitin [INDEX].</span>
    </div>

    <!-- SECTION 8 LAYOUT -->
    <div>
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">SECTION 8 — Public Files (⭐ Manual step gaya ng ginawa natin sa V4):</span>
        <p style="font-size: 13px; color: #b3b3b3; margin: 0 0 10px 0;">
            Ngayon ang kasalukuyang istraktura ng iyong application sa server ay ganito [INDEX]:
        </p>
        <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #c9d1d9; margin-bottom: 15px;">
            /home/u180948312/laravel_v5/<br>
            ├── app/<br>
            ├── bootstrap/<br>
            ├── config/<br>
            ├── database/<br>
            ├── resources/<br>
            ├── routes/<br>
            ├── storage/<br>
            ├── vendor/<br>
            ├── public/<br>
            │ ├── index.php<br>
            │ ├── build/<br>
            │ └── ...<br>
            └── .env
        </div>

        <div style="background: #15232d; padding: 15px; border: 1px solid rgba(97, 218, 251, 0.2); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
            <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">📁 Manual File Relocation Guidelines:</span>
            Puntahan ang <code style="color: #ffffff;">laravel_v5/public/</code> at i-copy ang contents papunta sa <code style="color: #ffffff; font-weight: bold;">bizzsoft.dev/public_html/</code> [INDEX]. <strong>Hindi natin ilalagay ang buong public folder mismo.</strong><br>
            <br>
            ✅ <strong>TAMA NA TARGET FLOW:</strong><br>
            • <code style="color: #9cdcfe;">laravel_v5/public/index.php</code> ➡️ ituro sa ➡️ <code style="color: #ffffff; font-weight: bold;">bizzsoft.dev/public_html/index.php</code><br>
            • <code style="color: #9cdcfe;">laravel_v5/public/build/</code> ➡️ ituro sa ➡️ <code style="color: #ffffff; font-weight: bold;">bizzsoft.dev/public_html/build/</code>
        </div>
    </div>
</div>


<!-- SECTION 9 & 10: PUBLIC INDEX REMAPPING & FINAL TESTING -->
<div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #61dafb !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
    <h3 style="font-size: 16px; font-weight: 700; color: #61dafb !important; margin: 0 0 15px 0; text-transform: uppercase; letter-spacing: 0.5px;">
        🌐 SECTION 9 & 10 — Edit public_html/index.php & Final Production Test
    </h3>

    <!-- SECTION 9 -->
    <div style="margin-bottom: 20px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">SECTION 9 — Edit public_html/index.php [Ito yung ginawa natin kanina sa V4. 🔥] (Buksan ang bizzsoft.dev/public_html/index.php at ituro natin sa V5 application):</span>
        <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; margin-bottom: 15px;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 14px; color: #9cdcfe;">require '/home/u180948312/laravel_v5/vendor/autoload.php';

$app = require_once '/home/u180948312/laravel_v5/bootstrap/app.php';</code></pre>
            @endverbatim
        </div>

        <!-- VISUAL ROUTE FLOWCHART DIAGRAM -->
        <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #a5a5a5;">
            <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">🗺️ SO ANG PIPELINE CORES ENGINE FLOW:</span>
            <div style="text-align: left; padding-left: 20px;">
                bizzsoft.dev<br>
                &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                public_html/index.php<br>
                &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                /home/u180948312/laravel_v5/<br>
                &nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                Laravel V5
            </div>
        </div>
    </div>

    <!-- SECTION 10 -->
    <div style="border-top: 1px dashed rgba(97, 218, 251, 0.3); padding-top: 15px;">
        <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">SECTION 10 — Final Production Test (Then buksan ang active live application link):</span>
        <div style="text-align: center; background: #0d1117; padding: 12px; border-radius: 6px; border: 1px dashed rgba(97, 218, 251, 0.4);">
            🔗 <a href="https://bizzsoft.dev" target="_blank" style="color: #61dafb; font-weight: bold; text-decoration: underline; font-size: 14px;">https://bizzsoft.dev</a>
        </div>
    </div>
</div>

@endsection