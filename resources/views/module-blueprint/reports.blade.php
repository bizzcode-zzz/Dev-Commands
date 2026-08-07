@extends('layouts.app')

@section('title', 'Reports Module Blueprint - DevCommands')

@section('content')

<div class="container">

    <!-- MAIN PAGE TITLE FOR INVENTORY SALES STRUCTURE -->
    <div class="mb-5 text-center" style="margin-top: 50px;">
        <h1 style="font-size: 32px; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">
            📂 Project Inventory Sales
        </h1>
        <p class="text-muted" style="font-size: 15px; margin-top: 5px; color: #a5a5a5 !important;">
            Master cheat sheet para sa mga files at folder structures ng aming application.
        </p>
    </div>
    

    <!-- === REPORTS COMPONENT BOX === -->
    <div class="card mb-5" style="border: 1px solid #2d2d2d; background: #1a1a1a; border-left: 4px solid #0dcaf0 !important; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
        
        <!-- SUB-TITLE SA LOOB NG BOX -->
        <h3 style="font-size: 18px; font-weight: 700; color: #0dcaf0 !important; margin: 0 0 20px 0; text-transform: uppercase; letter-spacing: 0.5px;">
            📊 Reports Feature
        </h3>
        
        <!-- 💡 SIMPLE EXPLANATION BOX -->
        <div style="background: #142224; padding: 12px; border-radius: 6px; border: 1px solid rgba(13, 202, 240, 0.2); font-size: 13px; line-height: 1.5; color: #dcdcdc; margin-top: -10px; margin-bottom: 25px;">
            <span style="color: #0dcaf0; font-weight: bold; display: block; margin-bottom: 4px;">🧠 Ano ang Reports Module?</span>
            <p style="margin: 0; color: #b3b3b3;">
                Ito ang nag-oorganisa at nagpapakita ng mga mahahalagang datos ng system tulad ng takbo ng benta, imbentaryo, at mga natitirang stock upang makatulong sa pagpapasya ng negosyo [INDEX].
            </p>
        </div>


        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 20px; border-radius: 6px; border: 1px solid #262626; box-shadow: 0 4px 15px rgba(0,0,0,0.5);">

    <!-- 🗺️ VISUAL ROOT TREE MAP HEADER -->
    <div style="color: #0dcaf0; font-size: 14px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-bottom: 2px solid #0dcaf0; padding-bottom: 5px; display: flex; align-items: center; gap: 8px;">
        🗺️ Application Directory Visual Map (Reports Module)
    </div>

    <!-- 🌳 THE ENTIRE TREE DIAGRAM -->
    <div style="background: #0d1117; padding: 18px; border-radius: 6px; border: 1px solid #21262d; line-height: 1.7; color: #c9d1d9; font-size: 14px;">
        
        <!-- ROOT APP DIRECTORY -->
        <div>📂 <span style="font-weight: bold; color: #ffffff;">app/</span></div>
        
        <!-- HTTP LAYER -->
        <div>├── 📂 <span style="font-weight: bold; color: #ffffff;">Http/</span></div>
        <div>│   └── 📂 <span style="font-weight: bold; color: #ffffff;">Controllers/</span></div>
        <!-- REPORTS CONTROLLER -->
        <div>│       ├── 📄 <span style="color: #2ecc71; font-weight: bold;">ReportsController.php</span> </div>
        <div style="color: #a5a5a5; font-size: 12px; padding-left: 45px; margin-top: -4px; margin-bottom: 4px;">
            └── 🛠️ (Ginawa — Tagaproseso ng mga reports, salesPrint, purchasesPrint, inventoryPrint, lowStockPrint)
        </div>
        <!-- SALES CONTROLLER -->
        <div>│       └── 📄 <span style="color: #ffc107; font-weight: bold;">SalesController.php</span></div>
        <div style="color: #a5a5a5; font-size: 12px; padding-left: 45px; margin-top: -4px; margin-bottom: 6px;">
            └── 🔄 (Inedit — Pinalitan ang Sales::create para isama ang kalkulasyon ng line_total = quantity * selling_price)
        </div>

        <!-- MODELS LAYER -->
        <div>├── 📂 <span style="font-weight: bold; color: #ffffff;">Models/</span></div>
        <div>│   └── 📄 <span style="color: #ffc107; font-weight: bold;">Sales.php</span></div>
        <div style="color: #a5a5a5; font-size: 12px; padding-left: 45px; margin-top: -4px; margin-bottom: 6px;">
            └── 💾 (Inedit — Idinagdag ang 'line_total' sa loob ng $fillable array)
        </div>

        <!-- DATABASE LAYER -->
        <div>📂 <span style="font-weight: bold; color: #ffffff;">database/</span></div>
        <div>└── 📂 <span style="font-weight: bold; color: #ffffff;">migrations/</span></div>
        <div>    └── 📄 <span style="color: #ffc107; font-weight: bold;">xxxx_xx_xx_xxxxxx_add_line_total_to_sales_table.php</span></div>
        <div style="color: #a5a5a5; font-size: 12px; padding-left: 45px; margin-top: -4px; margin-bottom: 6px;">
            └── ⚙️ (Ginawa — Migration para idagdag ang line_total column sa sales table)
        </div>

        <!-- RESOURCES & VIEWS LAYER -->
        <div>📂 <span style="font-weight: bold; color: #ffffff;">resources/</span></div>
        <div>└── 📂 <span style="font-weight: bold; color: #ffffff;">views/</span></div>
        
        <!-- LAYOUTS SUBFOLDER -->
        <div>    ├── 📂 <span style="font-weight: bold; color: #ffffff;">layouts/</span></div>
        <div>    │   ├── 📄 <span style="color: #a5a5a5;">app.blade.php</span></div>
        <div>    │   └── 📄 <span style="color: #0dcaf0; font-weight: bold;">print.blade.php</span> <span style="font-size: 12px; color: #ffc107;">⭐ Centralized Master Print Layout</span></div>
        
        <!-- REPORTS SUBFOLDER -->
        <div>    └── 📂 <span style="font-weight: bold; color: #ff4d4d;">reports/</span> <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Pangunahing folder para sa Reports views)</span></div>
        <!-- CORE VIEWS -->
        <div>        ├── 📄 <span style="color: #ff4d4d;">index.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(Dashboard UI ng Reports)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d;">sales.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(UI page para sa ulat ng mga benta)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d;">purchases.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(UI page para sa ulat ng mga biniling items)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d;">inventory.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(UI page para sa ulat ng Imbentaryo)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d;">lowstock.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(UI page para sa mga produkto na paubos na ang stock)</span></div>
        <!-- PRINT VIEWS -->
        <div>        ├── 📄 <span style="color: #ff4d4d; font-weight: bold;">sales-print.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(Template para sa printing ng sales data)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d; font-weight: bold;">purchases-print.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(Template para sa printing ng purchase ledger data)</span></div>
        <div>        ├── 📄 <span style="color: #ff4d4d; font-weight: bold;">inventory-print.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(Template para sa printing ng inventory status)</span></div>
        <div>        └── 📄 <span style="color: #ff4d4d; font-weight: bold;">lowstock-print.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(Template para sa printing ng low stock items)</span></div>

          <!-- BAGONG PDF SUBFOLDER -->
        <div>        └── 📂 <span style="font-weight: bold; color: #e74c3c;">pdf/</span> <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Subfolder para sa mga PDF layout templates)</span></div>
        <div>            ├── 📄 <span style="color: #e74c3c;">sales.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(In-render bilang: reports.pdf.sales)</span></div>
        <div>            ├── 📄 <span style="color: #e74c3c;">purchases.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(In-render bilang: reports.pdf.purchases)</span></div>
        <div>            ├── 📄 <span style="color: #e74c3c;">inventory.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(In-render bilang: reports.pdf.inventory)</span></div>
        <div>            └── 📄 <span style="color: #e74c3c;">low-stock.blade.php</span> <span style="font-size: 12px; color: #a5a5a5;">(In-render bilang: reports.pdf.low-stock)</span></div>
        
        <!-- ROUTES LAYER -->
        <div style="margin-top: 10px;">📂 <span style="font-weight: bold; color: #ffffff;">routes/</span></div>
        <div>└── 📄 <span style="color: #0dcaf0; font-weight: bold;">web.php</span></div>
        <div style="color: #a5a5a5; font-size: 12px; padding-left: 20px; margin-top: -2px; line-height: 1.5;">
            ├── 🔀 (Inedit — Pangunahing route papuntang Reports Module)<br>
            ├── 🖨️ Route::get('/reports/sales/print', [ReportsController::class, 'salesPrint']) -> name('reports.sales.print')<br>
            ├── 🖨️ Route::get('/reports/purchases/print', [ReportsController::class, 'purchasesPrint']) -> name('reports.purchases.print')<br>
            ├── 🖨️ Route::get('/reports/inventory/print', [ReportsController::class, 'inventoryPrint']) -> name('reports.inventory.print')<br>
            └── 🖨️ Route::get('/reports/low-stock/print', [ReportsController::class, 'lowStockPrint']) -> name('reports.low-stock.print')
        </div>

    </div>

</div>


        <!-- THE COMPLETE FILES LIST -->
        <h4 style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px;">
            📄 Mga Files na Ginalaw at Ginawa:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 8px; font-size: 15px; font-family: monospace; color: #ffffff; margin-bottom: 25px; background: #111; padding: 15px; border-radius: 6px; border: 1px solid #262626;">
            <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Dito nilagay ang route papuntang Reports Module)</span></div>
            <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Controller para sa pag-proseso ng iba't ibang reports)</span></div>
            
            <div style="color: #ff4d4d;">Folder 📂 resources/views/reports/ <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Pangunahing folder para sa Reports views)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/reports/index.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Dashboard UI ng Reports)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/reports/inventory.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — UI page para sa ulat ng Imbentaryo)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/reports/lowstock.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — UI page para sa mga produkto na paubos na ang stock)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/reports/purchases.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — UI page para sa ulat ng mga biniling items)</span></div>
            <div style="color: #ff4d4d;">Document 📄 resources/views/reports/sales.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — UI page para sa ulat ng mga benta)</span></div>
            
            <!-- 🚀 PALATANDAAN SA LOOB NG LISTAHAN -->
    <div style="color: #ffc107; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(255, 193, 7, 0.3); padding-bottom: 3px;">
        🚀 Sales Reports enhancement (Mga Ginalaw at Idinagdag na Files)
    </div>
            <div style="color: #ffc107;">Document 📄 app/Http/Controllers/SalesController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Pinalitan ang: <code>$sale = Sales::create($request->validated());</code> ng: <code>$data = $request->validated(); $data['line_total'] = $data['quantity'] * $data['selling_price']; $sale = Sales::create($data);</code>)</span></div>

            <div style="color: #ffc107;">Document 📄 app/Models/Sales.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>'line_total'</code> sa loob ng $fillable array)</span></div>
            <div style="color: #ffc107;">Document 📄 database/migrations/xxxx_xx_xx_xxxxxx_add_line_total_to_sales_table.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Migration para idagdag ang line_total column sa sales table)</span></div>
        
            <!-- 🖨️ PALATANDAAN PARA SA PRINT FEATURE -->
    <div style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(13, 202, 240, 0.3); padding-bottom: 3px;">
        🖨️ Print Feature (Mga Ginalaw at Idinagdag na Files)
    </div>

    <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang: <code>Route::get('/reports/sales/print', [ReportsController::class, 'salesPrint'])->name('reports.sales.print');</code>)</span></div>
    <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>salesPrint</code> function para sa business logic ng pag-print)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/sales-print.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang malinis na UI template para sa hard-copy or PDF printing ng sales data)</span></div>

            <!-- 🛒 PALATANDAAN PARA SA PURCHASE PRINT FEATURE -->
    <div style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(13, 202, 240, 0.3); padding-bottom: 3px;">
        🛒 Purchase Print Feature (Mga Ginalaw at Idinagdag na Files)
    </div>

    <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang: <code>Route::get('/reports/purchases/print', [ReportsController::class, 'purchasesPrint'])->name('reports.purchases.print');</code>)</span></div>
    <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>purchasesPrint</code> function para sa ledger logic ng pag-print)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/purchases-print.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang malinis na UI template para sa hard-copy printing ng purchase ledger data)</span></div>


        <!-- 📦 PALATANDAAN PARA SA INVENTORY PRINT FEATURE -->
    <div style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(13, 202, 240, 0.3); padding-bottom: 3px;">
        📦 Inventory Print Feature (Mga Ginalaw at Idinagdag na Files)
    </div>

    <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang: <code>Route::get('/reports/inventory/print', [ReportsController::class, 'inventoryPrint'])->name('reports.inventory.print');</code>)</span></div>
    <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>inventoryPrint</code> function para sa stock tracking logic ng pag-print)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/inventory-print.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang malinis na UI template para sa hard-copy printing ng kabuuang inventory stock status)</span></div>


        <!-- ⚠️ PALATANDAAN PARA SA LOW STOCK PRINT FEATURE -->
    <div style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(13, 202, 240, 0.3); padding-bottom: 3px;">
        ⚠️ Low Stock Print Feature (Mga Ginalaw at Idinagdag na Files)
    </div>

    <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang: <code>Route::get('/reports/low-stock/print', [ReportsController::class, 'lowStockPrint'])->name('reports.low-stock.print');</code>)</span></div>
    <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang <code>lowStockPrint</code> function para sa kritikal na reorder level logic ng pag-print)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/lowstock-print.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Ang malinis na UI template para sa hard-copy printing ng mga produktong paubos na ang stocks)</span></div>


    <div style="color: #0dcaf0; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(13, 202, 240, 0.3); padding-bottom: 3px;">
    🖨️ Centralized Master Print Layout (Mga Ginalaw at Idinagdag na Files)
</div>

<div style="color: #0dcaf0;">Document 📄 resources/views/layouts/print.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Centralized Master Print Layout / Istraktura ng pag-print)</span></div>




    <!-- 📄 PALATANDAAN PARA SA PDF FEATURE -->
    <div style="color: #e74c3c; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-top: 15px; margin-bottom: 5px; border-bottom: 1px dashed rgba(231, 76, 60, 0.3); padding-bottom: 3px;">
        📄 PDF Export Feature (Mga Ginalaw at Idinagdag na Files)
    </div>

     
     
        <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang: <code>use Barryvdh\DomPDF\Facade\Pdf;</code> sa pinakataas ng file para magamit ang PDF functions)</span></div>
    <!-- 📄 MGA BAGONG FUNCTION SA REPORTS CONTROLLER PARA SA PDF -->
    <div style="color: #2ecc71;">Document 📄 app/Http/Controllers/ReportsController.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang mga sumusunod na core functions para sa PDF processing)</span></div>
    <div style="color: #a5a5a5; font-size: 12px; padding-left: 20px; margin-top: -2px; line-height: 1.5; font-family: monospace;">
        ├── 📄 salesPdf() <span style="color: #e74c3c;">— Dinagdagan ng code para sa Sales PDF generation gamit ang Pdf::loadView('reports.pdf.sales')</span><br>
        ├── 📄 purchasesPdf() <span style="color: #e74c3c;">— Dinagdagan ng code para sa Purchases PDF generation gamit ang Pdf::loadView('reports.pdf.purchases')</span><br>
        ├── 📄 inventoryPdf() <span style="color: #e74c3c;">— Dinagdagan ng code para sa Inventory PDF generation gamit ang Pdf::loadView('reports.pdf.inventory')</span><br>
        └── 📄 lowStockPdf() <span style="color: #e74c3c;">— Dinagdagan ng code para sa Low Stock PDF generation gamit ang Pdf::loadView('reports.pdf.low-stock')</span>
    </div>
    <!-- 🔀 MGA BAGONG ROUTES SA WEB.PHP PARA SA PDF -->
    <div style="color: #0dcaf0;">Document 📄 routes/web.php <span style="font-size: 12px; color: #a5a5a5;">(Inedit — Idinagdag ang mga core routes papuntang PDF Export Functions)</span></div>
    <div style="color: #a5a5a5; font-size: 12px; padding-left: 20px; margin-top: -2px; line-height: 1.5; font-family: monospace;">
        ├── 📄 Route::get('/reports/sales/pdf', [ReportsController::class, 'salesPdf'])->name('reports.sales.pdf')<br>
        ├── 📄 Route::get('/reports/purchases/pdf', [ReportsController::class, 'purchasesPdf'])->name('reports.purchases.pdf')<br>
        ├── 📄 Route::get('/reports/inventory/pdf', [ReportsController::class, 'inventoryPdf'])->name('reports.inventory.pdf')<br>
        └── 📄 Route::get('/reports/low-stock/pdf', [ReportsController::class, 'lowStockPdf'])->name('reports.low-stock.pdf')
    </div>

    <div style="color: #ff4d4d;">Folder 📂 resources/views/reports/pdf/ <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Dedicated na subfolder para humawak ng malilinis at hiwalay na PDF layouts)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/pdf/sales.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Template para sa PDF export ng mga benta)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/pdf/purchases.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Template para sa PDF export ng mga ledger purchase)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/pdf/inventory.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Template para sa PDF export ng kabuuang stock)</span></div>
    <div style="color: #ff4d4d;">Document 📄 resources/views/reports/pdf/low-stock.blade.php <span style="font-size: 12px; color: #a5a5a5;">(Ginawa — Template para sa PDF export ng critical stock level items)</span></div>




    
        </div>

        <!-- ARTISAN COMMANDS -->
        <h4 style="color: #2ecc71; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            💻 Artisan Commands:
        </h4>

        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 25px;">
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang migration file para sa line_total column:</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:migration add_line_total_to_sales_table --table=sales</code></pre>
            </div>

            <div>
    <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para magawa ang Controller ng Reports Module:</span>
    <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code>php artisan make:controller ReportsController</code></pre>
</div>

            <!-- COMPOSER COMMAND PARA SA PDF FEATURE -->
             <h4 style="color: #2ecc71; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; border-top: 1px solid #2d2d2d; padding-top: 20px;">
            💻 PDF:
        </h4>
            <div>
                <span class="text-muted" style="font-size: 12px; display: block; margin-bottom: 4px;">Command para i-install ang DomPDF Package (Ginamit para sa PDF Export Feature):</span>
                <pre style="margin: 0; background: #111; padding: 10px; border-color: #262626;"><code style="color: #2ecc71;">composer require barryvdh/laravel-dompdf</code></pre>
            </div>


        </div>


        
        

        <!-- NAVIGATION BACK HOME -->
        <div style="border-top: 1px solid #2d2d2d; padding-top: 20px; text-align: left;">
            <a href="/module-blueprint" style="font-size: 13px; color: #a5a5a5; text-decoration: none; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#a5a5a5'">
                ⬅️ Bumalik sa Main Menu
            </a>
        </div>

    </div>

</div>

@endsection
