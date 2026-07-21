@extends('layouts.app')

@section('title', 'Project Inventory Sales Blueprint - DevCommands')

@section('content')

<div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px;">

    <!-- MAIN PAGE TITLE -->
    <div class="mb-5 text-center" style="margin-top: 50px; margin-bottom: 40px; text-align: center;">
        <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px; margin-bottom: 10px;">
            📂 Project Inventory Sales
        </h1>
        <p class="text-muted" style="font-size: 14px; color: #a5a5a5 !important; margin: 0;">
            Piliin ang module sa ibaba upang lumipat ng pahina:
        </p>
    </div>

    <!-- 🌐 FLEX GRID MODULE BUTTONS MENU -->
    <div style="display: flex; flex-wrap: wrap; gap: 12px;">
        
        <!-- BUTTON 1: CURRENTLY ACTIVE RBAC PAGE -->
        <a href="/module-blueprint" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #b23cfd; color: #ffffff; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #b23cfd; transition: opacity 0.2s; box-sizing: border-box;">
            🛡️ RBAC Gate Module
        </a>

        <!-- BUTTON 2: PRODUCTS MODULE -->
        <a href="#" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #ff79c6; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #ff79c6; transition: background 0.2s; box-sizing: border-box;">
            📦 Product Module
        </a>

        <!-- BUTTON 3: CATEGORIES MODULE -->
        <a href="#" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #0dcaf0; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #0dcaf0; transition: background 0.2s; box-sizing: border-box;">
            🗂️ Category Module
        </a>

        <!-- BUTTON 4: SUPPLIERS MODULE -->
        <a href="#" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #2ecc71; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #2ecc71; transition: background 0.2s; box-sizing: border-box;">
            🚚 Supplier Module
        </a>

        <!-- BUTTON 5: SALES MODULE -->
        <a href="#" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #ffc107; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #ffc107; transition: background 0.2s; box-sizing: border-box;">
            📤 Sales Module
        </a>

        <!-- BUTTON 6: SECURITY FEATURES -->
        <a href="/security-features" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #0dcaf0; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #0dcaf0; transition: background 0.2s; box-sizing: border-box;">
            🔒 Security Features
        </a>

        <!-- BUTTON 7: USER MANAGEMENT MODULE -->
        <a href="/user-management" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #ff79c6; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #ff79c6; transition: background 0.2s; box-sizing: border-box;">
            👥 User Management
        </a>
<!-- 🛡️ LOGS MODULE BUTTON -->
<a href="/logs" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #ff6e4a; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #ff6e4a; transition: background 0.2s; box-sizing: border-box;">
    🛡️ Logs Module

    <!-- 📊 REPORTS MODULE BUTTON -->
<a href="/reports" style="flex: 1 1 calc(50% - 12px); min-width: 160px; text-align: center; background: #1a1a1a; color: #0dcaf0; text-decoration: none; padding: 10px; border-radius: 6px; font-size: 13px; font-weight: 700; border: 1px solid #0dcaf0; transition: background 0.2s; box-sizing: border-box;">
    📊 Reports Module
</a>

</a>



    </div>

</div>
 


















<div class="container">

    <!-- MAIN PAGE TITLE FOR INVENTORY SALES STRUCTURE -->
    <div class="mb-5 text-center" style="margin-top: 50px;">
        <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
            📂 Project Inventory Sales
        </h1>
        <p class="text-muted" style="font-size: 15px; margin-top: 5px; color: #a5a5a5 !important;">
            Master cheat sheet para sa pangkalahatang files at folder structures ng aming application.
        </p>
    </div>

           <!-- === AUTHORIZATION COMPONENT BOX === -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #b23cfd !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 18px; font-weight: 700; color: #b23cfd !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            🛡️ Authorization Feature
        </h3>
        <!-- 💡 SIMPLE RBAC EXPLANATION BOX (NEWLY ADDED FOR REVIEW) -->
        <div style="background: #191424; padding: 12px; border-radius: 6px; border: 1px solid rgba(178, 60, 253, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-top: -10px; margin-bottom: 25px;">
            <span style="color: #b23cfd; font-weight: bold; display: block; margin-bottom: 4px;">🧠 Ano ang RBAC (Role-Based Access Control)?</span>
            <p style="margin: 0; color: #b3b3b3;">
                Ito ay isang paraan ng seguridad kung saan ang kapangyarihan ng isang tao ay <strong>hindi ibinibigay nang paisa-isa</strong>. Sa halip, ang mga abilidad (Permissions gaya ng <code>products.create</code>) ay itinatalatag muna sa isang Posisyon (Role gaya ng <code>Admin</code> o <code>Staff</code>) [INDEX]. Pagkatapos, ang User ay ikakabit na lamang sa isang <code>role_id</code> upang awtomatiko niyang makuha ang lahat ng susing nakatalaga sa kanyang katungkulan [INDEX]!
            </p>
        </div>

        <!-- THE COMPLETE FILES LIST (MIGRATIONS, MODELS, SEEDERS & VIEWS) -->
        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626;">
            <div>Document 📄 xxxx_xx_xx_xxxxxx_create_roles_table.php</div>
            <div>Document 📄 xxxx_xx_xx_xxxxxx_create_permissions_table.php</div>
            <div>Document 📄 xxxx_xx_xx_xxxxxx_create_role_permission_table.php</div>
            <div style="color: #ff4d4d;">Document 📄 xxxx_xx_xx_xxxxxx_add_role_id_to_users_table.php <span style="font-size: 12px; color: #a5a5a5;">(Foreign Key Connection)</span></div>
            <div style="color: #ff4d4d;">Document 📄 xxxx_xx_xx_xxxxxx_drop_role_column_from_users_table.php <span style="font-size: 12px; color: #a5a5a5;">(Schema Cleanup / Drop Old Column)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Models/User.php <span style="font-size: 12px; color: #a5a5a5;">(Relationship Connection)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Models/Role.php</div>
            <div style="color: #2ecc71;">Document 📄 app/Models/Permission.php</div>
            
            <div style="color: #ffc107;">Document 📄 database/seeders/RoleSeeder.php</div>
            <div style="color: #ffc107;">Document 📄 database/seeders/PermissionSeeder.php</div>
            <div style="color: #ffc107;">Document 📄 database/seeders/RolePermissionSeeder.php</div>
            <div style="color: #ffc107;">Document 📄 database/seeders/UserSeeder.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Para sa Pag-seed ng Admin at Staff)</span></div>

            <div style="color: #ffc107;">Document 📄 database/seeders/DatabaseSeeder.php</div>
            <div style="color: #ff4d4d;">Document 📄 app/Http/Middleware/PermissionMiddleware.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Route Guard Interceptor)</span></div>

        </div>

        <!-- MIGRATION COMMANDS -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            💻 Artisan Commands to Create Migrations:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para sa Roles Table:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:migration create_roles_table</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para sa Permissions Table:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:migration create_permissions_table</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para sa Role-Permission Pivot Table:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:migration create_role_permission_table</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px; color: #ff4d4d; font-weight: 600;">Command para idugtong ang Role ID sa existing Users table:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #ff4d4d;"><code>php artisan make:migration add_role_id_to_users_table --table=users</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px; color: #ff4d4d; font-weight: 600;">Command para burahin ang lumang 'role' column sa Users table (Cleanup):</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #ff4d4d;"><code>php artisan make:migration drop_role_column_from_users_table --table=users</code></pre>
            </div>
        </div>

        <!-- MODEL COMMANDS -->
        <h4 style="color: #2ecc71; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            🧠 Artisan Commands to Create Eloquent Models:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Role Model file:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:model Role</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Permission Model file:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:model Permission</code></pre>
            </div>
        </div>



         



        <!-- SEEDING EXECUTION WORKFLOW & COMMANDS -->
        <h4 style="color: #ffc107; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            🌱 Golden Rules and Order for Database Seeding:
        </h4>

        <!-- Visual Seeding Steps Tree -->
        <div style="background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626; font-family: monospace; font-size: 14px; color: #b3b3b3; line-height: 1.5; margin-bottom: 15px;">
            <div>1. Seed Roles <span style="color: #2ecc71;">✅ (RoleSeeder)</span></div>
            <div style="color: #7a7a7a; padding-left: 20px;">↓</div>
            <div>2. Seed Permissions <span style="color: #2ecc71;">✅ (PermissionSeeder)</span></div>
            <div style="color: #7a7a7a; padding-left: 20px;">↓</div>
            <div>3. Connect using pivot <span style="color: #ff4d4d;">✅ (RolePermissionSeeder — Laging huli!)</span></div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Commands para gawin ang mga Seeder files ng system ninyo:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:seeder RoleSeeder
php artisan make:seeder PermissionSeeder
php artisan make:seeder RolePermissionSeeder</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para patakbuhin ang kabuuang DatabaseSeeder module sequence:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan db:seed</code></pre>
            </div>

            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para patakbuhin ang AdminUserSeeder nang mag-isa sa terminal:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan db:seed --class=AdminUserSeeder</code></pre>
            </div>
            
            <div>


        <!-- KRITIKAL NA PAALALA SA DATABASE-BASED SYSTEM -->
        <h4 style="color: #ff4d4d; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            🚨 Kritikal na Paalala sa Database-Based System:
        </h4>
        <div style="background: #2b1c1c; padding: 15px; border-radius: 6px; border: 1px solid rgba(255, 77, 77, 0.2); font-size: 13.5px; line-height: 1.6; color: #e0e0e0;">
            <p style="margin-bottom: 0;">
                @verbatim
                ⚠️ <strong>Lockout Danger:</strong> Dahil ang sistema natin ay nakadepende sa database records, kapag nag-<code>migrate:fresh</code> ka o nabura ang records sa <code>permissions</code> table, <strong>HINDI GAGANA</strong> ang mga <code>@can</code> at <code>@cannot</code> checks sa buong application! Obligado tayong patakbuhin ang kabuuang <code>db:seed</code> process pagkatapos mag-migrate upang maitanim muli ang magkapares na <strong>Roles</strong> at <strong>Permissions</strong> na kailangan ng system upang mabuhay ang mga interface controls ng <em>Inventory Sales</em> app natin.
                @endverbatim
            </p>
        </div>


            <!-- ============================================================ -->
    <!-- 🚀 SUSUNOD NA HAKBANG: MIDDLEWARE LAYER PROTECTION BLUEPRINT -->
    <!-- ============================================================ -->
    <div class="mb-5 text-center" style="margin-top: 60px;">
        <h2 style="font-size: 28px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
            🛡️ Hakbang: Pagpapatupad ng Middleware at Route Guards
        </h2>
        <p class="text-muted" style="font-size: 14px; max-width: 700px; margin-left: auto; margin-right: auto; color: #a5a5a5 !important;">
            Matapos maitayo ang database at models layer, ang susunod na kritikal na hakbang ay ang pagtatakda ng mga guwardiya sa backend upang harangan ang mga hindi awtorisadong URL requests.
        </p>
    </div>

    <!-- MAIN MIDDLEWARE COMPONENT BOX -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0dcaf0 !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 16px; font-weight: 700; color: #0dcaf0 !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            ⚙️ Middleware & Controller Architecture Checklist
        </h3>

        <!-- COMPLETE MIDDLEWARE & CONTROLLERS FILES LIST -->
        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626;">
            <div style="color: #0dcaf0;">Document 📄 app/Http/Middleware/PermissionMiddleware.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Route Guard Interceptor)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/ProductController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Index & Store)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/CategoryController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Create & Edit)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/PurchasesController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Index, Store & Destroy)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/SupplierController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Destroy)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/SalesController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Index, Store & Destroy)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/DashboardController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Index / Main Screen Access)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Financial & Stock Metrics)</span></div>
            <div style="color: #0dcaf0;">Document 📄 app/Http/Controllers/UserController.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Guard Checks for Financial & Stock Metrics)</span></div>
            <div style="color: #ff79c6;">Document 📄 resources/views/products/index.blade.php <span style="font-size: 12px; color: #a5a5a5;">(May Edit Dito — Add Product Form Restriction)</span></div>
        
        </div>

        <!-- ARTISAN COMMAND FOR MIDDLEWARE -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px;">
            💻 Artisan Command to Create Middleware:
        </h4>
        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para gawin ang Route Guard Middleware file sa terminal:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:middleware PermissionMiddleware</code></pre>
            </div>
        </div>

        <!-- VISUAL BREAK SEPARATOR -->
        <div class="text-muted text-center my-3" style="letter-spacing: 2px; font-family: monospace; opacity: 0.4;">
            ============================================================
        </div>

        <!-- CONTROLLER GUARD INTEGRATION SECTION (VS CODE STYLE) -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px;">
            🎮 Controller Guard Integration (Direct Condition Checks Per Method)
        </h4>
        
        <p class="text-muted" style="font-size: 13px; margin-bottom: 15px; line-height: 1.6;">
            ➔ 🔒 <strong>Instruction:</strong> Ipinatupad ang direktang checking logic sa bawat module method gamit ang <code>abort(403)</code> upang harangan ang hindi awtorisadong backend access.
        </p>

                <!-- VS CODE THEME INTEGRATED CODE EDITOR BOX -->
        <div style="background: #1e1e1e; padding: 16px; border: 1px solid #3c3c3c; border-radius: 6px; box-shadow: inset 0 0 10px rgba(0,0,0,0.8); font-family: 'Consolas', 'Fira Code', 'Courier New', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none; overflow-x: auto;"><code style="font-size: 12px; line-height: 1.6; color: #d4d4d4; display: block;"><span style="color: #6a9955;">// ============================================================
// 📄 app/Http/Controllers/ProductController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch and return product list view...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">store</span>(Request <span style="color: #9cdcfe;">$request</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.create'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and save to database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">edit</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Return edit form view populated with current data...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">update</span>(Request <span style="color: #9cdcfe;">$request</span>, <span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and update record in database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.delete'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Permanently remove product item row from table...</span>
}

============================================================
// 📄 app/Http/Controllers/CategoryController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'categories.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch and return category list view...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">store</span>(Request <span style="color: #9cdcfe;">$request</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'categories.create'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and save category to database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">edit</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'categories.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Return edit form view populated with current data...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">update</span>(Request <span style="color: #9cdcfe;">$request</span>, <span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'categories.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and update category in database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'categories.delete'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Permanently remove category row from table...</span>
}

============================================================
// 📄 app/Http/Controllers/SupplierController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'suppliers.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch and return supplier list view...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">store</span>(Request <span style="color: #9cdcfe;">$request</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'suppliers.create'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and save supplier to database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">edit</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'suppliers.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Return edit form view populated with current data...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">update</span>(Request <span style="color: #9cdcfe;">$request</span>, <span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'suppliers.edit'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Validate inputs and update supplier in database...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'suppliers.delete'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Permanently remove supplier row from table...</span>
}

============================================================
// 📄 app/Http/Controllers/PurchasesController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'purchases.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch and return purchases logs view...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">store</span>(Request <span style="color: #9cdcfe;">$request</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'purchases.create'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Process incoming stock batch input...</span>
}
    <span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'purchases.delete'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Permanently void or remove purchase record...</span>
}

============================================================
// 📄 app/Http/Controllers/SalesController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'sales.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch and return sales transactions list view...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">store</span>(Request <span style="color: #9cdcfe;">$request</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'sales.create'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Process the sale checkout, deduct inventory, and save records...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">destroy</span>(<span style="color: #9cdcfe;">$id</span>)
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'sales.delete'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Permanently void or delete a sales entry from the table...</span>
}
============================================================
// 📄 app/Http/Controllers/DashboardController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'dashboard.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Render and display the core system metrics panel...</span>
}
============================================================
// 📄 app/Http/Controllers/ReportsController.php
// ============================================================</span>
<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">index</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'reports.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Render the main reports landing overview...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">sales</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'reports.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Compile annual or monthly total sales tracking analytics...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">purchases</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'reports.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Fetch supplier expenses and order cost logs...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">inventory</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'reports.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Audit current total remaining physical stocks in the warehouse...</span>
}

<span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">lowstock</span>()
{
    <span style="color: #569cd6;">if</span> (! <span style="color: #9cdcfe;">auth</span>()-><span style="color: #dcdcaa;">user</span>()-><span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'reports.view'</span>)) { <span style="color: #dcdcaa;">abort</span>(<span style="color: #b5cea8;">403</span>); }
    <span style="color: #6a9955;">// Filter products hitting the safety threshold limit alerts...</span>
}
============================================================
// 📄 app/Http/Controllers/UserController.php
// ============================================================</span>


</code></pre>
            @endverbatim
        </div>




   

        

        

    </div> 
    <!-- === END OF AUTHORIZATION BOX === -->


     <!-- ============================================================ -->
    <!-- 🚀 SUSUNOD NA HAKBANG: DISPLAY LAYER INTERFACE SECURITY CHECK -->
    <!-- ============================================================ -->
    <div class="mb-5 text-center" style="margin-top: 60px;">
        <h2 style="font-size: 28px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
            🖥️ Display Layer: Front-End Security Checks
        </h2>
        <p class="text-muted" style="font-size: 14px; max-width: 700px; margin-left: auto; margin-right: auto; color: #a5a5a5 !important;">
            Matapos isara ang mga pintuan sa backend controllers, ang huling hakbang ay ang pagtatago ng mga buttons at forms sa interface upang malinis at ligtas ang paningin ng mga Staff users.
        </p>
    </div>

    <!-- MAIN BLADE SECURITY COMPONENT BOX -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ff79c6 !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 16px; font-weight: 700; color: #ff79c6 !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            💡 Blade Interface Directives Checklist
        </h3>

        <!-- INSTRUCTION PANEL -->
        <div style="font-size: 13.5px; line-height: 1.6; color: #e0e0e0; margin-bottom: 20px;">
            <p style="margin-bottom: 0;">
                ➔ 🔒 <strong>Panuto:</strong> Ginalaw ang file na <code style="color: #ff79c6;">resources/views/products/index.blade.php</code> upang balutin ang **Add Product Form**, **Edit Button**, at **Delete Button** sa mga selyadong security directive blocks [INDEX]. Ang mga harang na ito ay ipinatupad upang awtomatikong itago at alisin ang access sa mga kritikal na CRUD actions kapag ang kasalukuyang naka-login na account ay nasa ilalim ng limitadong Staff role [INDEX].
            </p>
        </div>

        <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 6px; font-family: monospace;">Eksaktong code na isinalpak sa loob ng file:</span>

        <!-- VS CODE STYLE THEME EDITOR BOX -->
        <div style="background: #1e1e1e; padding: 16px; border: 1px solid #3c3c3c; border-radius: 6px; box-shadow: inset 0 0 10px rgba(0,0,0,0.8); font-family: 'Consolas', 'Fira Code', 'Courier New', monospace;">
            @verbatim
            <pre style="margin: 0; background: transparent; padding: 0; border: none; overflow-x: auto;"><code style="font-size: 12px; line-height: 1.6; color: #d4d4d4; display: block;"><span style="color: #6a9955;">&lt;!-- 1. ADD PRODUCT CARD RESTRICTION --&gt;</span>
<span style="color: #569cd6;">@if</span>(<span style="color: #9cdcfe;">auth</span>()-&gt;<span style="color: #dcdcaa;">user</span>()-&gt;<span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.create'</span>))
    <span style="color: #6a9955;">&lt;!-- [ADD PRODUCT CARD FORM HERE] --&gt;</span>
<span style="color: #569cd6;">@endif</span>


<span style="color: #6a9955;">&lt;!-- 2. EDIT BUTTON RESTRICTION --&gt;</span>
<span style="color: #569cd6;">@if</span>(<span style="color: #9cdcfe;">auth</span>()-&gt;<span style="color: #dcdcaa;">user</span>()-&gt;<span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.edit'</span>))
    <span style="color: #569cd6;">&lt;button&gt;</span>Edit Button<span style="color: #569cd6;">&lt;/button&gt;</span>
<span style="color: #569cd6;">@endif</span>


<span style="color: #6a9955;">&lt;!-- 3. DELETE BUTTON RESTRICTION --&gt;</span>
<span style="color: #569cd6;">@if</span>(<span style="color: #9cdcfe;">auth</span>()-&gt;<span style="color: #dcdcaa;">user</span>()-&gt;<span style="color: #dcdcaa;">hasPermission</span>(<span style="color: #ce9178;">'products.delete'</span>))
    <span style="color: #569cd6;">&lt;button&gt;</span>Delete Button<span style="color: #569cd6;">&lt;/button&gt;</span>
<span style="color: #569cd6;">@endif</span></code></pre>
            @endverbatim
        </div>

    </div> <!-- === END OF BLADE SECURITY BOX === -->


</div>
@endsection
