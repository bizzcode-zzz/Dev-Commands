@extends('layouts.app')

@section('title', 'WordPress Development Blueprint - DevCommands')

@section('content')

    <!-- ─── SHORTCUT TO SEPARATE WORDPRESS ONLINE STORE GUIDE ─── -->
    <div style="margin-bottom: 30px; margin-top: 20px;">
        <a href="/wordpress-store" style="display: inline-block; color: #a675e2; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 12px 24px; border-radius: 6px; background: #1b1525; border-color: rgba(166, 117, 226, 0.3); text-shadow: 0 0 10px rgba(166, 117, 226, 0.2); transition: all 0.2s;" onmouseover="this.style.background='#a675e2'; this.style.color='#1a1a1a';" onmouseout="this.style.background='#1b1525'; this.style.color='#a675e2';">
            🛍️ WORDPRESS ONLINE STORE GUIDE
        </a>
    </div>


    
<!-- THE BLOCKER WRAPPER: Hahila sa buong page content pababa para sa 3-row navbar mo -->
<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- UNIVERSAL ALIGNMENT WRAPPER -->
    <div style="max-width: 1000px; margin: 0 auto;">

        <!-- ─── HEADER LAYER ─── -->
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #0073aa; letter-spacing: -0.5px; margin-bottom: 10px;">
                🎛️ WordPress Development Blueprint
            </h1>
            <p class="text-muted" style="font-size: 15px; color: #a5a5a5 !important; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Master cheat sheet para sa custom themes, plugin architecture, hooks configuration, at shortcodes workflows.
            </p>
        </div>

        <!-- DITO NATIN ILALAGAY ANG MGA CARDS AT STEPS NG WORDPRESS MO... -->

    </div>
</div>


        <!-- ================= CHAPTER 1: WORDPRESS CORE SETUP ================= -->
        <h2 style="color: #0073aa; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
            🟢 WordPress Chapter 1 — Installation (Part 1)
        </h2>

        <!-- STEP 1 & 2: DOWNLOAD AND EXTRACTION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0073aa !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0073aa !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 1 & 2: Download & Extract WordPress Codebase 📁
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Kopyahin ang latest core structure file mula sa opisyal na portal at ilatag ito sa inyong local XAMPP environment [INDEX]:
            </p>

            <!-- DOWNLOAD LINK UTILITY -->
            <div style="background: #15232d; padding: 12px; border: 1px solid rgba(0, 115, 170, 0.2); border-radius: 6px; margin-bottom: 15px; font-size: 13px;">
                🔗 <strong>Official Source Link:</strong> 
                <a href="https://wordpress.org" target="_blank" style="color: #0dcaf0; font-weight: bold; text-decoration: underline;">
                    Download Latest WordPress ZIP
                </a>
            </div>

            <!-- PATH TREE MAP DIAGRAM -->
            <div style="margin-bottom: 15px;">
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">📂 Tamang Istraktura ng Folder (Extract ang laman ng ZIP diretso sa loob ng ginawang folder):</span>
                <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; color: #c9d1d9;">
                    📁 <span style="font-weight: bold; color: #ffffff;">C:\xampp\htdocs\wordpress_training\</span><br>
                    ├── 📂 <span style="color: #0073aa; font-weight: bold;">wp-admin/</span><br>
                    ├── 📂 <span style="color: #0073aa; font-weight: bold;">wp-content/</span><br>
                    ├── 📂 <span style="color: #0073aa; font-weight: bold;">wp-includes/</span><br>
                    ├── 📄 <span style="color: #9cdcfe;">index.php</span><br>
                    └── 📄 <span style="color: #9cdcfe;">wp-config-sample.php</span>
                </div>
            </div>

            <!-- CRITICAL WARNING BOX -->
            <div style="background: #241414; padding: 12px; border-radius: 6px; border: 1px solid rgba(231, 76, 60, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc;">
                <span style="color: #ff4d4d; font-weight: bold; display: block; margin-bottom: 4px;">⚠️ HUWAG GAWING NESTED FOLDER:</span>
                Tiyakin na ang mga files ay nakalantad agad sa ilalim ng <code style="color: #ffffff;">wordpress_training</code> directory [INDEX]. Iwasan na magkaroon ng pangalawang <code style="color: #ff4d4d;">/wordpress/</code> na sub-folder sa loob nito [INDEX].
            </div>
        </div>

        <!-- STEP 3: START LOCAL SERVICES -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0073aa !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0073aa !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 3: Start XAMPP Control Panel Local Services ⚡
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Buksan ang XAMPP application manager window at i-trigger ang mga sumusunod na default runtime services upang i-host ang inyong website at local database engine:
            </p>
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.7;">
                🟢 <span style="color: #ffffff; font-weight: bold;">Apache</span> ➡️ <span style="color: #2ecc71; font-weight: bold;">Start ✅</span> <span style="color: #a5a5a5;">(Web Server Gateway Engine)</span><br>
                🟢 <span style="color: #ffffff; font-weight: bold;">MySQL</span> ➡️ <span style="color: #2ecc71; font-weight: bold;">Start ✅</span> <span style="color: #a5a5a5;">(Database Management Storage Core)</span>
            </div>
        </div>

                <!-- STEP 4: DATABASE INITIALIZATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0073aa !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0073aa !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 4: Create Isolated Local Database 🗄️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Gumawa ng hiwalay na database para sa WordPress training nang hindi naaapektuhan o nagagalaw ang inyong mga umiiral na Laravel/V5 databases [INDEX]:
            </p>

            <!-- URL GATEWAY POINT -->
            <div style="background: #15232d; padding: 12px; border: 1px solid rgba(0, 115, 170, 0.2); border-radius: 6px; margin-bottom: 15px; font-size: 13px;">
                🔗 <strong>Local phpMyAdmin Portal:</strong> 
                <a href="http://localhost/phpmyadmin" target="_blank" style="color: #0dcaf0; font-weight: bold; text-decoration: underline;">
                    http://localhost/phpmyadmin
                </a>
            </div>

            <!-- STEP BY STEP FLOW -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.7; margin-bottom: 15px;">
                <span style="color: #0073aa; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">📋 Database Creation Sequence:</span>
                1. Buksan ang link sa itaas at i-click ang tab na: <span style="color: #ffffff; font-weight: bold;">Databases</span>.<br>
                2. Sa ilalim ng box na <strong>"Create database"</strong>, ilagay ang eksaktong pangalan:<br>
                &nbsp;&nbsp;&nbsp;➡️ <code style="color: #00ffcc; font-weight: bold; font-family: 'Consolas', monospace; font-size: 14px;">wordpress_training</code><br>
                3. Sa dropdown ng <strong>Collation</strong>, hanapin at piliin ang standard scheme:<br>
                &nbsp;&nbsp;&nbsp;➡️ <code style="color: #ffc107; font-weight: bold; font-family: 'Consolas', monospace; font-size: 14px;">utf8mb4_unicode_ci</code><br>
                4. I-click ang button na: <span style="color: #ffffff; font-weight: bold;">Create</span>.
            </div>

            <!-- INTERNALS DIAGRAM DISPLAY -->
            <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #c9d1d9; margin-bottom: 15px;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">🗺️ EXPECTED ARCHITECTURE RESULT:</span>
                MySQL<br>
                └── 📁 <span style="color: #ffffff; font-weight: bold;">wordpress_training</span> <span style="color: #6a9955;">(Empty container setup layout)</span>
            </div>

            <!-- 🧠 CORE KNOWLEDGE HIGHLIGHT REMINDER -->
            <div style="background: #15232d; padding: 12px; border-radius: 6px; border: 1px solid rgba(0, 115, 170, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 4px;">🧠 Tandaan sa WordPress Architecture:</span>
                <p style="margin: 0; color: #b3b3b3;">
                    Pagkatapos mag-create, **wala ka pang kailangang manually na gawing tables** [INDEX]. Ang WordPress core setup assistant mismo ang awtomatikong mag-i-inject ng mga kinakailangang database tables kapag pinatakbo na natin ang installer link wizard, katulad ng mechanism ng Laravel migrations [INDEX].
                </p>
            </div>
        </div>

                <!-- STEP 5: WORDPRESS WEB WIZARD INSTALLER -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0073aa !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0073aa !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 5: Run WordPress Web Assistant Installer 🚀
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Buksan ang local project link sa inyong web browser upang simulan ang automated layout injection at core environment linkage workflow configuration [INDEX]:
            </p>

            <!-- SITE INSTALLER ACCESS WEB LINK -->
            <div style="background: #15232d; padding: 12px; border: 1px solid rgba(0, 115, 170, 0.2); border-radius: 6px; margin-bottom: 15px; font-size: 13px;">
                🔗 <strong>Local WordPress Installer Link:</strong> 
                <a href="http://localhost/wordpress_training" target="_blank" style="color: #0dcaf0; font-weight: bold; text-decoration: underline;">
                    http://localhost/wordpress_training
                </a>
            </div>

            <!-- STEP SEQUENCES SCREEN RULES -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
                <span style="color: #0073aa; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">⚙️ Web Installation Steps & Data Parameters:</span>
                1. Sa Language screen selection view window, hanapin at piliin ang: <span style="color: #ffffff; font-weight: bold;">English (United States)</span> ➡️ Click <span style="color: #ffffff; font-weight: bold;">Continue</span>.<br>
                2. Kapag hiningi na ang database linkage setup credentials block layout parameters, ilagay ang sumusunod na saktong records [INDEX]:
            </div>

            <!-- CORE CONFIG DISPLAY SCHEME -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.7; margin-bottom: 15px;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">📋 VISUAL DATABASE LINK CONFIGURATION INTERFACE:</span>
                <span style="color: #569cd6;">Database Name:</span>     <span style="color: #ffffff; font-weight: bold;">wordpress_training</span><br>
                <span style="color: #569cd6;">Username:</span>          <span style="color: #ffffff; font-weight: bold;">root</span><br>
                <span style="color: #569cd6;">Password:</span>          <span style="color: #a5a5a5;">[blank / iwanang walang laman para sa default XAMPP]</span><br>
                <span style="color: #569cd6;">Database Host:</span>     <span style="color: #ffffff; font-weight: bold;">localhost</span><br>
                <span style="color: #569cd6;">Table Prefix:</span>      <span style="color: #ce9178; font-weight: bold;">wp_</span>
            </div>

            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
                3. Matapos mapunuan ang boxes, i-click ang button na: <span style="color: #ffffff; font-weight: bold;">Submit</span> ➡️ <span style="color: #00ffcc; font-weight: bold;">Run the installation</span> [INDEX].
            </div>

            <!-- INTERNAL DATABASE AUTO TABLE GENERATION EXPECTED MAPPING -->
            <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; color: #c9d1d9;">
                <span style="color: #2ecc71; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">🔥 AUTOMATED SCHEMATIC RE-ORGANIZATION RESULT (Sa phpMyAdmin View):</span>
                wordpress_training/<br>
                ├── 📁 wp_options <span style="color: #6a9955;">(Naglalaman ng site configurations and metadata system parameters)</span><br>
                ├── 📁 wp_posts <span style="color: #6a9955;">(Naglalaman ng blog posts, text page templates, and media attachments)</span><br>
                ├── 📁 wp_users <span style="color: #6a9955;">(Naglalaman ng administrative level security account login profiles)</span><br>
                └── 📁 wp_terms <span style="color: #6a9955;">(Naglalaman ng groupings layout taxonomies)</span>
            </div>
        </div>


        <!-- STEP 6: SITE METADATA & ADMINISTRATIVE CREDENTIALS PROFILE -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0073aa !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #0073aa !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 6: Configure Site Metadata & Admin Accounts 👤🔒
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-set up ang pangalan ng inyong website at ang administrative credential tokens para sa inyong local CMS environment management application gateway:
            </p>

            <!-- INPUT BOX VALUES SPECIFICATION -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.7; margin-bottom: 15px;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">📋 REVIEWS & INPUT FIELDS VALUES HUB:</span>
                <span style="color: #569cd6;">Site Title:</span>               <span style="color: #ffffff; font-weight: bold;">WordPress Training</span><br>
                <span style="color: #569cd6;">Username:</span>                 <span style="color: #ffffff; font-weight: bold;">admin</span> ⚠️ <em>(Gagamitin para sa backend dashboard entry profile layer)</em><br>
                <span style="color: #569cd6;">Password:</span>                 <span style="color: #ffffff; font-weight: bold;">wordpressTraining123!!! [Gumamit ng sariling strong security password token]</span><br>
                <span style="color: #569cd6;">Your Email:</span>               <span style="color: #ffffff; font-weight: bold;">[Ilagay ang iyong aktibo o personal na email validation box]</span><br>
                <span style="color: #569cd6;">Search Engine Visibility:</span> <span style="color: #a5a5a5;">[Iwanang default / hindi importante sa localhost training area]</span>
            </div>

            <!-- TRIGGER SERVICE CONTROL EXECUTIONS -->
            <div style="background: #15232d; padding: 15px; border: 1px solid rgba(0, 115, 170, 0.2); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">⚙️ Execution Step Process Flow:</span>
                I-click ang button na <span style="color: #ffffff; font-weight: bold;">"Install WordPress"</span> ➡️ Pag lumabas ang <span style="color: #2ecc71; font-weight: bold; font-weight: bold;">"Success!" screen banner window</span>, pindutin ang Login para pumasok sa inyong pinakaunang administration system.
            </div>

            <!-- THE ARCHITECTURE MILESTONE GRAPH -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #a5a5a5; margin-bottom: 15px;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">🗺️ APPLICATION STACK ACCESSIBILITY WORKFLOW MAPPING:</span>
                <div style="text-align: left; padding-left: 20px;">
                    MySQL <span style="color: #6a9955;">(Database Layer Core Container Engine)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    wordpress_training <span style="color: #6a9955;">(Isolated Raw Tables Structured Schemas Location)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    WordPress Application <span style="color: #2ecc71;">(Active CMS Server Interface Framework Environment)</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;│<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;▼<br>
                    Admin Account <span style="color: #ffffff; font-weight: bold;">[ admin ]</span> <span style="color: #0dcaf0;">(Dashboard Security Entryway Access Level)</span>
                </div>
            </div>

            <!-- BACKEND LINK UTILITY ACCESS QUICK SHORTCUT -->
            <div>
                <span style="color: #a5a5a5; font-size: 12px; display: block; margin-bottom: 4px;">📌 Permanenteng Admin Gateway URL Target Shortcut (I-bookmark ito, bro):</span>
                <div style="text-align: center; background: #0d1117; padding: 12px; border-radius: 6px; border: 1px dashed rgba(0, 115, 170, 0.4);">
                    🔗 <a href="http://localhost/wordpress_training/wp-admin" target="_blank" style="color: #0dcaf0; font-weight: bold; text-decoration: underline; font-size: 14px;">http://localhost/wordpress_training/wp-admin</a>
                </div>
            </div>
        </div>


@endsection
