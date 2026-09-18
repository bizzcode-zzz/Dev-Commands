@extends('layouts.app')

@section('title', 'WordPress Online Store Blueprint - DevCommands')

@section('content')
<!-- THE BLOCKER WRAPPER: Hahila sa buong page content pababa para sa 3-row navbar mo -->
<div style="position: relative; display: block; clear: both; width: 100%; margin-top: 140px; padding-top: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- UNIVERSAL ALIGNMENT WRAPPER -->
    <div style="max-width: 1000px; margin: 0 auto;">

        <!-- ─── HEADER LAYER ─── -->
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 style="font-size: 32px; font-weight: 800; color: #a675e2; letter-spacing: -0.5px; margin-bottom: 10px;">
                🛍️ WordPress E-Commerce & Online Store Blueprint
            </h1>
            <p class="text-muted" style="font-size: 15px; color: #a5a5a5 !important; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Selyadong cheat sheet para sa pagtatayo ng modernong tindahan, product configurations, cart settings, at payment checkout setups gamit ang WooCommerce ecosystem.
            </p>
        </div>

        <!-- ─── BACK SHORTCUT ─── -->
        <div style="margin-bottom: 30px;">
            <a href="/wordpress" style="display: inline-block; color: #a675e2; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 8px 16px; border-radius: 6px; background: #111; transition: background 0.2s;">
                ⬅️ Balik sa WordPress Core Menu
            </a>
        </div>

        <!-- DITO NATIN SIMULANG ILALAGAY ANG MGA CARDS NG ONLINE STORE MO... -->

    </div>
</div>


        <!-- ================= E-COMMERCE CORE SETUP MODULE ================= -->
        <h2 style="color: #a675e2; font-size: 18px; font-weight: 800; margin: 40px 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #2d2d2d; padding-bottom: 10px;">
            🛍️ Chapter 1 — E-Commerce Core Engine Setup
        </h2>

        <!-- STEP 1: WOOCOMMERCE CORE ENGINE INSTALLATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #a675e2 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #a675e2 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 1: Install & Activate WooCommerce Core Plugin ⚙️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-inject ang opisyal na e-commerce core framework library upang mabuo ang database structure at backend application panels para sa inyong Online Store [INDEX]:
            </p>

            <!-- DASHBOARD WIZARD STEP SEQUENCES -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.7; margin-bottom: 15px;">
                <span style="color: #a675e2; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">🖥️ WordPress Dashboard Navigation Flow:</span>
                1. Sa inyong admin left sidebar menu, pumunta sa path layout link area: <span style="color: #ffffff; font-weight: bold;">Plugins ➡️ Add New Plugin</span>.<br>
                2. Sa kanang bahagi ng screen, hanapin ang <strong>Search Box</strong> at i-type ang keyword:<br>
                &nbsp;&nbsp;&nbsp;➡️ <code style="color: #00ffcc; font-weight: bold; font-family: 'Consolas', monospace; font-size: 14px;">WooCommerce</code><br>
                3. Hanapin ang opisyal na item na may label na: <strong style="color: #ffffff;">WooCommerce by Automattic</strong>.<br>
                4. I-trigger ang action activation buttons na magkasunod:<br>
                &nbsp;&nbsp;&nbsp;➡️ Pindutin ang <span style="color: #ffffff; font-weight: bold;">Install Now</span> ➡️ Pagkatapos ay i-click ang <span style="color: #2ecc71; font-weight: bold;">Activate</span>.
            </div>

            <!-- SUCCESS INDICATOR VISUAL DIAGRAM -->
            <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.5; color: #c9d1d9;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">🔥 EXTENDED APPLICATION SIDEBAR MANIFESTATION (Success Verification):</span>
                Admin Left Sidebar Overview/<br>
                ├── 📄 Dashboard<br>
                ├── 📁 <span style="color: #a675e2; font-weight: bold;">WooCommerce 🟣</span> <span style="color: #6a9955;">(Ginawa — For orders, analytics, clients profiles, and store settings)</span><br>
                ├── 📁 <span style="color: #a675e2; font-weight: bold;">Products 📦</span> <span style="color: #6a9955;">(Ginawa — Dedicated area for uploading inventory types, tags, items, or inventory stocks)</span><br>
                └── 📄 Analytics
            </div>
        </div>


                <!-- STEP 2: WOOCOMMERCE GENERAL STORE FOUNDATION SETTINGS -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #a675e2 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #a675e2 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 2: Configure General Store Foundation Settings 🌐🛠️
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                I-configure muna ang kabuuang base parameters, lokasyon ng negosyo, at pananalapi ng tindahan bago mag-scaffold o mag-add ng mga produkto sa system [INDEX]:
            </p>

            <!-- DASHBOARD NAV FLOW -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.7; margin-bottom: 15px;">
                <span style="color: #a675e2; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">🖥️ WordPress Dashboard Navigation Flow:</span>
                1. Sa inyong admin left sidebar menu, pumunta sa path layout link area: <span style="color: #ffffff; font-weight: bold;">WooCommerce ➡️ Settings</span>.<br>
                2. Awtomatiko kang mapupunta sa unang tab na may label na: <strong style="color: #ffffff;">General</strong>.
            </div>

            <!-- CORE OPTIONS CONFIG REFERENCE DISPLAY -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">📋 EXACT STORE CONFIGURATION VALUES INTERFACE:</span>
                
                <span style="color: #61dafb; font-weight: bold;">📍 Store Address (Business Location Layer)</span><br>
                Address line 1    ➡️ <span style="color: #ffffff; font-weight: bold;">Brgy. Holy Redemeer</span><br>
                Address line 2    ➡️ <span style="color: #a5a5a5;">[City]</span><br>
                City              ➡️ <span style="color: #ffffff; font-weight: bold;">Butuan</span><br>
                Country / State   ➡️ <span style="color: #ffffff; font-weight: bold;">Philippines — Agusan del Norte</span><br>
                Postcode / ZIP    ➡️ <span style="color: #ffffff; font-weight: bold;">8600</span><br>
                <br>
                <span style="color: #61dafb; font-weight: bold;">⚙️ General options & Rules</span><br>
                Selling location(s)   ➡️ <span style="color: #ffffff; font-weight: bold;">Sell to specific countries (Philippines)</span><br>
                Shipping location(s)  ➡️ <span style="color: #ffffff; font-weight: bold;">Ship to specific countries only (Philippines)</span><br>
                Default customer loc  ➡️ <span style="color: #ffffff; font-weight: bold;">Shop country/region</span><br>
                Address autocomplete  ➡️ <span style="color: #ff4d4d; font-weight: bold;">☐ OFF</span> <span style="color: #6a9955;">(Disables predictive address search)</span><br>
                <br>
                <span style="color: #61dafb; font-weight: bold;">🏷️ Taxes and coupons configurations</span><br>
                Enable taxes      ➡️ <span style="color: #2ecc71; font-weight: bold;">☑ ON</span> <span style="color: #6a9955;">(Enable tax rates and calculations)</span><br>
                Enable coupons    ➡️ <span style="color: #2ecc71; font-weight: bold;">☑ ON</span> <span style="color: #6a9955;">(Enable the use of coupon codes)</span><br>
                Sequential coupon ➡️ <span style="color: #ff4d4d; font-weight: bold;">☐ OFF</span> <span style="color: #6a9955;">(Calculate coupon discounts sequentially)</span><br>
                <br>
                <span style="color: #61dafb; font-weight: bold;">💰 Currency options (Prices Layout Display)</span><br>
                Currency          ➡️ <span style="color: #00ffcc; font-weight: bold;">PHP — Philippine peso (₱)</span><br>
                Currency position ➡️ <span style="color: #ffffff; font-weight: bold;">Left</span><br>
                Thousand separator➡️ <span style="color: #ce9178; font-weight: bold;">,</span><br>
                Decimal separator ➡️ <span style="color: #ce9178; font-weight: bold;">.</span><br>
                Number of decimals➡️ <span style="color: #ffffff; font-weight: bold;">2</span>
            </div>

            <!-- ACTION FOOTER REMINDER -->
            <div style="background: #15232d; padding: 12px; border-radius: 6px; border: 1px solid rgba(166, 117, 226, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 4px;">💾 FINAL SAVE EXECUTIONS TOOL:</span>
                Matapos mapunuan ang lokasyon at currency parameters, mag-scroll pababa sa pinakadulo ng page at i-click ang button na <span style="color: #ffffff; font-weight: bold;">"Save changes"</span> upang mai-lock ang store configuration sa MySQL [INDEX].
            </div>
        </div>


            <!-- STEP 3: CREATING FIRST SIMPLE PRODUCT COMPLETE BLUEPRINT -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #a675e2 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 25px;">
            <h3 style="font-size: 16px; font-weight: 700; color: #a675e2 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                Step 3: Create & Configure First Simple Product Blueprint 🛒👕
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                Pumunta sa <strong style="color: #ffffff;">Products ➡️ Add New</strong> sa left sidebar. Punan ang kabuuang pangunahing impormasyon at commercial metadata parameters sa iisang pahina upang makabuo ng malinis na record [INDEX]:
            </p>

            <!-- COMPLETE DATA VALUES REFERENCE -->
            <div style="background: #1e1e1e; padding: 15px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; margin-bottom: 15px;">
                <span style="color: #ffc107; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">📋 COMPLETE PRODUCT INPUT FIELDS INTERFACE:</span>
                
                🔤 <span style="color: #61dafb; font-weight: bold;">1. Core Text Details (Main Fields)</span><br>
                • Product Name     ➡️ <span style="color: #ffffff; font-weight: bold;">BizzSoft Classic T-Shirt</span><br>
                • Main Description ➡️ <span style="color: #ce9178;">"A comfortable everyday classic T-shirt designed for casual wear. Made with a soft, durable fabric and available in multiple sizes."</span><br>
                • Short Description➡️ <span style="color: #ce9178;">"Comfortable everyday T-shirt made for casual wear, with a soft feel and durable construction."</span> <span style="color: #6a9955;">(Nasa ibabang bahagi ng page)</span><br>
                <br>
                💰 <span style="color: #61dafb; font-weight: bold;">2. Product Data Box (General & Inventory Tabs)</span><br>
                • Product Type Selector ➡️ Piliin ang: <span style="color: #00ffcc; font-weight: bold;">Simple product</span><br>
                • Regular Price ($)     ➡️ <span style="color: #00ffcc; font-weight: bold;">799.00</span> <span style="color: #6a9955;">(Katumbas ng ₱799.00)</span><br>
                • Sale Price ($)        ➡️ <span style="color: #a5a5a5;">[Iwanang blangko / walang promo]</span><br>
                • SKU (Inventory Tab)   ➡️ <span style="color: #ffffff; font-weight: bold;">BSS-TSHIRT-001</span><br>
                • Track Stock Quantity  ➡️ <span style="color: #2ecc71; font-weight: bold;">☑ ENABLED</span> <span style="color: #6a9955;">(WooCommerce auto-manages quantities)</span><br>
                • Stock Quantity        ➡️ <span style="color: #ffffff; font-weight: bold;">50</span> <span style="color: #6a9955;">(Starting stock balance)</span><br>
                • Sold Individually     ➡️ <span style="color: #ff4d4d; font-weight: bold;">☐ UNCHECKED</span><br>
                <br>
                🗂️ <span style="color: #61dafb; font-weight: bold;">3. Organizing & Sidebar Media Assets (Right Sidebar)</span><br>
                • Product Categories    ➡️ Check ang: <span style="color: #ffffff; font-weight: bold;">Apparel</span> <span style="color: #6a9955;">(Gamitin ang "Add new category" kung wala pa ito)</span><br>
                • Product Image Box     ➡️ Click <span style="color: #2ecc71; font-weight: bold;">Set product image</span> ➡️ I-upload at piliin ang iyong **Actual T-Shirt Image Asset** ✅
            </div>

            <!-- SCHEMATIC ARCHITECTURE MAP DIAGRAM -->
            <div style="background: #0d1117; padding: 14px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 13px; line-height: 1.6; color: #c9d1d9; margin-bottom: 15px;">
                <span style="color: #2ecc71; font-weight: bold; display: block; margin-bottom: 6px; font-family: sans-serif; font-size: 12px;">📊 FULLY SCALED COMPLETED PRODUCT RECORD TREE:</span>
                BizzSoft Classic T-Shirt [Simple Product]<br>
                ├── 📄 Description (Main details parameters block)<br>
                ├── 📝 Short Description (Instant frontend marketing text summary)<br>
                ├── 💰 Price ➡️ Regular: ₱799 | Sale: [blank]<br>
                ├── 🆔 SKU Tracker ➡️ BSS-TSHIRT-001<br>
                ├── 📦 Stock Control ➡️ Quantity: 50<br>
                ├── 🗂️ Category Alignment ➡️ Apparel<br>
                └── 🖼️ Product Image Asset ➡️ [ Matagumpay na Naka-upload via Media Library ] ✅
            </div>

            <!-- 🧠 UNDERLYING SYSTEM CORE PIPELINE FLOW MAP -->
            <div style="background: #15232d; padding: 15px; border: 1px solid rgba(166, 117, 226, 0.2); border-radius: 6px; font-family: 'Segoe UI', sans-serif; font-size: 13px; line-height: 1.6; color: #dcdcdc;">
                <span style="color: #61dafb; font-weight: bold; display: block; margin-bottom: 6px; text-transform: uppercase; font-size: 12px;">🧠 Tandaan para sa Core Architecture Mastery:</span>
                Hindi mo kailangang kabisaduhin kung aling specific fields ng MySQL napupunta ang data [INDEX]. Ang mahalagang pipeline na dapat mong ma-master sa isip mo ay ito:<br>
                <div style="font-family: 'Consolas', monospace; font-size: 13px; color: #a5a5a5; padding-left: 20px; margin-top: 8px; line-height: 1.4;">
                    WooCommerce Product Interface Input Panel<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    Product data & Commerce metadata tables configurations<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    WooCommerce automated database relational engines mapping<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    Frontend product display page layer rendering<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↓<br>
                    Customer add-to-cart & buy checkout trigger placement
                </div>
            </div>
        </div>
@endsection
