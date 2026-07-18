@extends('layouts.app')

@section('title', 'BizzSoft Security Architecture Blueprint')

@section('content')
<!-- KAKAPIT ITO SA UNIVERASAL CONTAINER NG APP.PHP AT DADALHIN SA GITNA VIA MARGIN AUTO -->
<div style="max-width: 1000px; margin: 0 auto; padding-top: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- ─── HEADER LAYER ─── -->
    <div class="text-center" style="margin-bottom: 50px;">
        <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px; margin-bottom: 10px;">
            🔒 BizzSoft Core Security Architecture
        </h1>
        <p class="text-muted" style="font-size: 15px; color: #a5a5a5 !important; max-width: 700px; margin: 0 auto; line-height: 1.6;">
            Selyadong checklist ng walong (8) antas ng seguridad na kasalukuyang nakatanim sa backend at database layers ng ating application upang mapanatili itong lahat na ligtas, matatag, at protektado sa sirang records.
        </p>
    </div>

    <!-- ─── BACK TO MENU SHORTCUT ─── -->
    <div style="margin-bottom: 30px;">
        <a href="/module-blueprint" style="display: inline-block; color: #0dcaf0; text-decoration: none; font-size: 14px; font-weight: 600; border: 1px solid #2d2d2d; padding: 8px 16px; border-radius: 6px; background: #111; transition: background 0.2s;">
            ⬅️ Balik sa Module Menu
        </a>
    </div>

    <!-- ─── THE 8 CORE SECURITY PILLARS GRID ─── -->
    <div style="display: flex; flex-direction: column; gap: 25px; margin-bottom: 25px;">

        <!-- CARD 1: AUTHENTICATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0dcaf0 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #0dcaf0 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                1. User Authentication Layer ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Siyang nagsisilbing pangunahing gatekeeper ng system [INDEX]. Kinakailangang may valid at rehistradong account muna ang sinumang bibisita bago pahintulutang makatapak sa loob ng inyong dashboard system views [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none;"><code style="font-size: 12px; color: #569cd6;">// routes/web.php or Controllers
$this->middleware('auth'); <span style="color: #6a9955;">// Harang sa pinto: Redirect to login if unauthenticated</span></code></pre>
                @endverbatim
            </div>
        </div>

        <!-- CARD 2: AUTHORIZATION (RBAC) -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #b23cfd !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #b23cfd !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                2. Granular Authorization (RBAC) Layer ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Kahit pa naka-login ang isang user, nililimitahan natin ang kanyang galaw base sa kanyang katungkulan (Role) [INDEX]. Ang susing <code>hasPermission()</code> ang nagpapasya kung itutuloy ang action o itatapon ang request gamit ang 403 status code [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 12px; line-height: 1.5;">
                <span style="color: #b23cfd; font-weight: bold;">[Admin Role Alignment]</span> ➔ 🟢 Can Access: <code>products.delete</code><br>
                <span style="color: #ff4d4d; font-weight: bold;">[Staff Role Alignment]</span> ➔ 🔴 Blocked: <code>products.delete</code> ➔ <span style="color: #f44747; font-weight: bold;">abort(403) Forbidden</span>
            </div>
        </div>

        <!-- CARD 3: DATABASE CONSTRAINTS -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #2ecc71 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #2ecc71 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                3. Database Schema Integrity & Constraints ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Pagtatali ng physical rules sa database levels gamit ang **Foreign Keys** at **Eloquent Relationships** [INDEX]. Pinipigilan nito ang pagkakaroon ng mga "orphan data" o sirang registers [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace; font-size: 12px; line-height: 1.5; color: #d4d4d4;">
                <span style="color: #6a9955;">// Schema Rule Diagram Connection</span><br>
                📂 products table ➔ 🖲️ <span style="color: #9cdcfe;">category_id</span> ➔ 🔗 points to ➔ 📂 categories table (<span style="color: #9cdcfe;">id</span>)<br>
                ⚠️ <span style="color: #ce9178;">Strict Engine Restriction:</span> Hindi papayagang mag-save ng item kung walang umiiral at valid na Category [INDEX].
            </div>
        </div>

        <!-- CARD 4: DATABASE TRANSACTIONS -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ffc107 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #ffc107 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                4. Database Transaction Locks & Rollbacks ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Ipinatupad sa <code>Purchases</code> at <code>Sales</code> modules [INDEX]. Kapag nag-crash ang engine, nagka-error, o nag-brownout sa gitna ng multi-step process, awtomatikong buburahin ang paunang hakbang upang mapanatiling malinis ang ledger lines niyo [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none; font-size: 12px; line-height: 1.5;"><code style="color: #d4d4d4;"><span style="color: #569cd6;">DB::</span>transaction(<span style="color: #569cd6;">function</span> () {
    <span style="color: #6a9955;">// If error happens here: Purchase Saved [❌] | Stock Updated [❌]</span>
    <span style="color: #6a9955;">// Automatic Engine Rollback executes immediately to protect raw columns.</span>
});</code></pre>
                @endverbatim
            </div>
        </div>

        <!-- CARD 5: FORM REQUEST VALIDATION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #ff79c6 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #ff79c6 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                5. Form Request Input Validation Layer ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Hinaharang ang maruruming data bago pa man ito makalapit o makatapak sa database layers mo [INDEX]. Sinasala nito ang maling inputs mula sa user forms [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none; font-size: 12px; line-height: 1.5;"><code style="color: #d4d4d4;"><span style="color: #6a9955;">// StoreProductRequest Interceptor</span>
<span style="color: #9cdcfe;">$request</span>-&gt;<span style="color: #dcdcaa;">validated</span>(); <span style="color: #6a9955;">// Rejects: Empty Fields | Invalid Negative Numbers | Duplicate Entries</span></code></pre>
                @endverbatim
            </div>
        </div>
        <!-- CARD 6: MASS ASSIGNMENT PROTECTION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #f44747 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #f44747 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                6. Model Mass Assignment Security Guard ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Panangga laban sa mga mapanlinlang na HTTP request fields parameters injections [INDEX]. Ang mga pinangalanang strings lamang sa loob ng array ang may lisensyang maisulat sa server tables [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none; font-size: 12px; line-height: 1.5;"><code style="color: #d4d4d4;"><span style="color: #569cd6;">protected</span> <span style="color: #9cdcfe;">$fillable</span> = [<span style="color: #ce9178;">'name'</span>, <span style="color: #ce9178;">'price'</span>, <span style="color: #ce9178;">'stock'</span>]; <span style="color: #6a9955;">// Block malicious parameter requests injection</span></code></pre>
                @endverbatim
            </div>
        </div>

        <!-- CARD 7: ELOQUENT ORM SQL INJECTION PREVENTION -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #4fc1ff !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #4fc1ff !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                7. Eloquent ORM SQL Injection Prevention ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Sa pamamagitan ng pag-iwas sa hilaw na string concatenation, awtomatikong sinasanitize ni Laravel ang parameters gamit ang **PDO Parameter Binding** upang mapigilan ang SQL Injection [INDEX].
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none; font-size: 12px; line-height: 1.5;"><code style="color: #d4d4d4;"><span style="color: #6a9955;">// Ligtas at Protektadong Parameter Query Engine:</span>
Product::find(<span style="color: #9cdcfe;">$id</span>); <span style="color: #6a9955;">// Automatic escape and clean query execution line</span></code></pre>
                @endverbatim
            </div>
        </div>

        <!-- CARD 8: ROUTE MODEL BINDING AUTOMATION LAYER -->
        <div style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #c586c0 !important; padding: 25px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
            <h3 style="font-size: 16px; font-weight: 700; color: #c586c0 !important; margin: 0 0 12px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                8. Route Model Binding Automation Layer ✅
            </h3>
            <p style="font-size: 14px; color: #e0e0e0; line-height: 1.6; margin: 0 0 15px 0;">
                🎯 <strong>Core Purpose:</strong> Imbes na manual mo pang hahanapin ang ID sa URL bar, si Laravel na mismo ang mag-i-inspect sa core rows [INDEX]. Kung may mag-inject ng maling o hindi umiiral na record ID parameters, automatic na siyang sasagutin ng app ng malinis na **404 Model Not Found** screen [INDEX]!
            </p>
            <div style="background: #1e1e1e; padding: 12px; border: 1px solid #3c3c3c; border-radius: 6px; font-family: 'Consolas', monospace;">
                @verbatim
                <pre style="margin: 0; background: transparent; padding: 0; border: none; font-size: 12px; line-height: 1.5;"><code style="color: #d4d4d4;"><span style="color: #569cd6;">public function</span> <span style="color: #dcdcaa;">edit</span>(Product <span style="color: #9cdcfe;">$product</span>) <span style="color: #6a9955;">// Auto fetch database row instance or throw 404 error</span></code></pre>
                @endverbatim
            </div>
        </div>

    </div> <!-- ─── END OF THE FLEX COLUMN CONTAINER ─── -->

</div> <!-- ─── END OF MAX-WIDTH CONTAINER ─── -->
@endsection
