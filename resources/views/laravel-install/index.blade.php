@extends('layouts.app')

@section('title', 'Laravel Installation & Commands - DevCommands')

@section('content')
<!-- Header Section -->
<div class="mb-5">
    <h1 class="page-title text-red">🔥 Laravel Installation & Guide</h1>
    <p class="text-muted">Hakbang-hakbang na gabay para sa pag-setup ng proyekto at mga mahahalagang Artisan commands.</p>
</div>

<!-- SECTION 1: INSTALLATION -->
<div class="mb-5">
    <h2 class="section-title">🛠️ Pag-install ng Proyekto</h2>

    <div class="card mb-4">
        <h4 class="card-title">1. Pumunta sa htdocs Folder</h4>
        <p class="card-text">Buksan ang Terminal ng iyong computer at mag-navigate papunta sa iyong XAMPP htdocs folder.</p>
        <pre><code>cd C:\xampp\htdocs</code></pre>
    </div>

    <!-- 🔥 PINAGSAMA LAHAT SA IISANG CARD (DOWNLOAD + CHECK VERSION + SERVE) 🔥 -->
    <div class="card mb-4 border-warning">
        <h4 class="card-title" style="color: #ffc107;">2. I-download ang Framework at Patakbuhin (All-in-One Lifecycle)</h4>
        <p class="card-text">Itakbo itong mga sumusunod na commands nang sunod-sunod sa iyong terminal upang i-download ang pinakabagong Laravel, silipin ang kasalukuyang bersyon para hindi ka mawala, at buksan ang local server sa port 8001:</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 3px;">➔ Hakbang A: I-download ang pinakabago at stable na framework galing sa internet:</p>
        <pre><code>composer create-project laravel/laravel <span class="ans">pangalan-ng-project</span></code></pre>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">➔ Hakbang B: Pumasok sa loob ng bagong gawang folder at i-verify ang saktong bersyon nito:</p>
        <pre><code>cd <span class="ans">pangalan-ng-project</span>
php artisan --version</code></pre>
        <p class="text-muted" style="font-size: 13px;">💡 Ipapakita nito sa screen ang eksaktong release ng framework mo (Halimbawa: <code>Laravel Framework 12.x.x</code>).</p>

        <p class="text-light" style="font-size: 14px; margin-top: 15px; margin-bottom: 3px;">➔ Hakbang C: Patakbuhin ang project sa port 8001 para iwas sa system conflict:</p>
        <pre><code>php artisan serve --port=<span class="ans">8001</span></code></pre>
    </div>

  


<!-- SECTION 2: ARTISAN CREATION COMMANDS -->
<div class="mb-5">
    <h2 class="section-title">🚀 Mga Artisan Creation Commands</h2>
    <p class="text-muted mb-4">Ang mga commands na ito ay ginagamit sa loob ng iyong project directory para gumawa ng core files.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. Gumawa ng Controller (Normal)</h4>
        <p class="card-text">Gumawa ng blangkong controller file sa <code>app/Http/Controllers</code> para sa iyong application logic.</p>
        <pre><code>php artisan make:controller <span class="ans">PangalanNgController</span></code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. Gumawa ng Resource Controller (CRUD)</h4>
        <p class="card-text">Gumawa ng controller na may built-in methods na agad para sa CRUD (index, create, store, show, edit, update, destroy).</p>
        <pre><code>php artisan make:controller <span class="ans">PangalanNgController</span> --resource</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">3. Gumawa ng Model</h4>
        <p class="card-text">Gumawa ng Eloquent Model file sa <code>app/Models</code> para sa database table connection.</p>
        <pre><code>php artisan make:model <span class="ans">PangalanNgModel</span></code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">4. Gumawa ng Migration File</h4>
        <p class="card-text">Gumawa ng bagong schema file sa <code>database/migrations</code> para sa pagbuo ng mga tables.</p>
        <pre><code>php artisan make:migration <span class="ans">create_mga_table_table</span></code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">5. All-in-One Shortcut Command (Model, Migration, Controller)</h4>
        <p class="card-text">Solid na shortcut para magawa nang sabay-sabay ang Model, Migration file, at Resource Controller sa isang hagupit lang.</p>
        <pre><code>php artisan make:model <span class="ans">PangalanNgModel</span> -mcr</code></pre>
    </div>
</div>

<!-- SECTION 3: DATABASE & UTILITIES -->
<div class="mb-5">
    <h2 class="section-title">💾 Database at System Utilities</h2>
    <p class="text-muted mb-4">Mga utility commands para sa pamamahala ng database tables, seeders, at routing system ng proyekto.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. Patakbuhin ang Migrations</h4>
        <p class="card-text">I-execute ang lahat ng pending na migration files para magawa ang mga totoong tables sa iyong database.</p>
        <pre><code>php artisan migrate</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. I-undo ang Huling Migration (Rollback)</h4>
        <p class="card-text">Ibalik sa dati o burahin ang huling batch ng mga tables na ginawa mo kung may kailangan kang ayusin.</p>
        <pre><code>php artisan migrate:rollback</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">3. I-check ang Lahat ng Registered Routes</h4>
        <p class="card-text">I-list out sa terminal ang lahat ng URLs at links na kasalukuyang rehistrado sa iyong application.</p>
        <pre><code>php artisan route:list</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">4. Gumawa ng Bagong Seeder File</h4>
        <p class="card-text">Gumawa ng file sa <code>database/seeders</code> kung saan isusulat ang mga gagamiting dummy data.</p>
        <pre><code>php artisan make:seeder <span class="ans">PangalanNgSeeder</span></code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">5. Patakbuhin ang Database Seeders</h4>
        <p class="card-text">Awtomatikong maglalagay ng mga sample o default data sa iyong mga database tables para may laman agad.</p>
        <pre><code>php artisan db:seed</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title" style="color: #ffc107;">📝 Halimbawa ng Code sa loob ng Seeder File</h4>
        <p class="card-text">Ganito isulat ang code sa loob ng <code>run()</code> method ng seeder para magpasok ng sample account via Eloquent.</p>
        <pre><code>use App\Models\User;
use Illuminate\Support\Facades\Hash;

public function run(): void
{
    User::create([
        'name' => <span class="ans">'Admin User'</span>,
        'email' => <span class="ans">'admin@example.com'</span>,
        'password' => Hash::make(<span class="ans">'password123'</span>),
    ]);
}</code></pre>
    </div>
</div>

<!-- SECTION 4: CACHE & OPTIMIZATION CLEARANCE -->
<div class="mb-5">
    <h2 class="section-title">🧹 Cache & Clearance Utilities (Pang-Maintenance)</h2>
    <p class="text-muted mb-4">Ito ang mga pinakamadalas gamiting commands kapag may hindi nagpapakitang pagbabago sa iyong design o code files.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. I-clear ang View Cache (Blade Templates)</h4>
        <p class="card-text">Binubura ang mga lumang compiled Blade HTML files. Ito ang ginamit natin para lumabas ang mga text updates.</p>
        <pre><code>php artisan view:clear</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. I-clear ang Route Cache</h4>
        <p class="card-text">Binubura ang memory ng mga lumang URLs. Ginagamit ito kapag binago mo ang web.php pero ayaw mag-load ng link.</p>
        <pre><code>php artisan route:clear</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">3. I-clear ang General Application Cache</h4>
        <p class="card-text">I-flush o burahin ang lahat ng nakaimbak na pansamantala o application-level data sa Laravel internals.</p>
        <pre><code>php artisan cache:clear</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">4. I-clear ang Config Cache</h4>
        <p class="card-text">Sariwang babasahin ang iyong <code>.env</code> file. Ginagamit kapag binago ang database settings o keys pero lumang config pa rin ang binabasa.</p>
        <pre><code>php artisan config:clear</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title" style="color: #ffc107;">🌟 Ang Pinaka-Shortcut: I-clear Lahat ng Cache Sabay-sabay!</h4>
        <p class="card-text">Isang bagsakang command lang para linisin ang View, Route, Config, at Application cache nang sabay-sabay.</p>
        <pre><code>php artisan optimize:clear</code></pre>
    </div>

    <!-- 🔥 BAGONG SECTION: SECTION 5: GIT VERSION CONTROL 🔥 -->
<div class="mb-5">
    <h2 class="section-title" style="color: #ffc107;">📁 Seksyon 5: Git Deployment Shortcuts (Pang-Araw-araw na Pag-Save)</h2>
    <p class="text-muted mb-4">Ang tatlong (3) mahiwagang commands na palagi mong itatakbo sa terminal ng iyong <strong>Local PC (VS Code)</strong> tuwing may babaguhin ka sa code mo para umakyat ang updates sa GitHub.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. Ihanda ang Lahat ng Files (Stage Changes)</h4>
        <p class="card-text">Sinasabi nito kay Git na i-track at ihanda ang lahat ng bago at binagong files sa iyong computer. Ang <strong>tuldok (<code>.</code>)</strong> ay nangangahulugang LAHAT.</p>
        <pre><code>git add .</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. Selyuhan at Lagyan ng Label ang Update (Commit)</h4>
        <p class="card-text">Binabalot nito ang mga inihanda mong files sa isang selyadong package. Palitan ang text sa loob ng <code>""</code> para maging maikling paalala kung ano ang ginawa mo.</p>
        <pre><code>git commit -m <span class="ans">"Inupdate ko ang code at nagdagdag ng feature"</span></code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">3. Itulak Paitaas sa GitHub (Push)</h4>
        <p class="card-text">Ito ang huling command para aktwal na ihagis at i-upload ang package mula sa local computer mo papunta sa iyong online GitHub repository layout.</p>
        <pre><code>git push origin main</code></pre>
    </div>
</div>
@endsection
