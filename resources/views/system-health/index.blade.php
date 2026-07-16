@extends('layouts.app')

@section('title', 'PC Health & Built-in Anti-Virus Scan - DevCommands')

@section('content')
<!-- Header Section -->
<div class="mb-4">
    <h1 class="page-title text-cyan" style="color: #0dcaf0 !important;">🛡️ PC Health & Security Commands</h1>
    <p class="text-muted">Mabilisang cheat sheet para sa malupitang pag-scan ng PC, pagbabantay ng hackers, at awtomatikong pagkumpuni ng mga sirang operating system files gamit ang terminal nang WALANG antivirus software na kailangan.</p>
</div>

<!-- 🚨 GLOBAL REMINDER BOX: MANDATORY POWERSHELL ADMIN REQUIREMENT 🚨 -->
<div class="card mb-5 border-danger" style="border: 2px solid #ff4d4d !important; background-color: #2b1c1c; padding: 20px; border-radius: 8px;">
    <h3 style="color: #ff4d4d; font-weight: bold; margin-bottom: 8px;">🚨 PINAKAMAHALAGANG PAALALA BAGO PATAKBUHIN ANG MGA COMMANDS:</h3>
    <p style="color: #ffffff; font-size: 15px; line-height: 1.6; margin-bottom: 0;">
        Lahat ng commands na nakasulat sa pahinang ito ay <strong>MANDATORY at REQUIRED na patakbuhin sa Windows PowerShell (Admin)</strong>. Kung hindi ito naka-admin, haharangin ng Windows security ang mga commands at magpapakita ng <em>Access Denied</em> error dahil hawak nito ang deep core files ng system mo. Sundin mo ang saktong paraan ng pagbubukas:<br><br>
        ➔ <strong>Paraan ng Pagbukas:</strong> Pindutin ang Windows Key sa keyboard mo ➔ I-type ang <span class="ans">PowerShell</span> ➔ I-right click ang <strong>Windows PowerShell</strong> icon sa resulta ➔ I-click ang <strong>"Run as Administrator"</strong>. Pindutin ang <strong>Yes</strong> kapag nagtanong ang computer mo!
    </p>
</div>

<!-- SECTION 1: NETWORK SECURITY & HACKER WATCH -->
<div class="mb-5">
    <h2 class="section-title" style="color: #ffc107;">🌐 Seksyon 1: Pagbabantay sa Network at mga Tagong Koneksyon</h2>
    <p class="text-muted mb-4">Suriin ang mga aktibong kumokonekta sa internet mo gamit ang terminal upang masigurong walang spyware o malware na nagpapadala ng data sa labas.</p>
    
    <div class="card mb-4">
        <h4 class="card-title">1. Suriin ang mga ESTABLISHED Connections</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Ipapakita nito ang lahat ng app o system na kasalukuyang may totoong "live connection" sa labas ng internet ngayon. Kung may nakita kang kakaibang IP address at may nakasulat na ESTABLISHED pero wala ka namang binubuksang browser, pwedeng may tagong spyware o trojan na nagpapadala ng data mo sa hacker.</p>
        <pre><code>netstat -ano | findstr ESTABLISHED</code></pre>
    </div>
</div>

<!-- SECTION 2: FILE REPAIR SYSTEM -->
<div class="mb-5">
    <h2 class="section-title" style="color: #198754;">🛠️ Seksyon 2: Awtomatikong Pagkumpuni ng mga Sirang Files (Fix Damaged Files)</h2>
    <p class="text-muted mb-4">Patakbuhin itong dalawang commands nang magkasunod kapag nakakaramdam ka ng pagbagal ng laptop o biglang pag-crash ng mga apps.</p>

    <div class="card mb-4">
        <h4 class="card-title">1. DISM Cloud Repair (The Preparation Component)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Ito ang unibersal na pang-kumpuni ng core local image ng Windows mo. Kokonektahan nito ang official Microsoft servers online para i-download at ihanda ang mga saktong files na pamalit sa mga corrupted features ng computer mo [INDEX].</p>
        <pre><code>DISM /Online /Cleanup-Image /RestoreHealth</code></pre>
    </div>

    <div class="card mb-4">
        <h4 class="card-title">2. System File Checker (SFC Scan)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Pagkatapos ng DISM, patakbuhin ito agad. Awtomatikong i-se-scan nito ang lahat ng operating system files mo. Kapag may nakita sihang damage or sirang file, automatic niya itong papaltan at aayusin gamit ang inihandang malinis na kopya [INDEX].</p>
        <pre><code>sfc /scannow</code></pre>
    </div>
</div>

<!-- SECTION 3: BUILT-IN DEEP ANTIVIRUS SCAN -->
<div class="mb-5">
    <h2 class="section-title" style="color: #ff4d4d;">🚀 Seksyon 3: Malupitang Pag-Scan ng Virus Gamit ang Windows Tools</h2>
    <p class="text-muted mb-4">Mabilisang panuntunan para sa 100% deep clean ng malware at trojans sa Windows mo gamit ang terminal.</p>

    <!-- THE POWERFUL ANTI-VIRUS STATEMENT BOX -->
    <div class="card mb-4 border-warning" style="border: 2px solid #ffc107 !important; background-color: #2b2216; padding: 20px;">
        <h3 style="color: #ffc107; font-weight: bold; margin-bottom: 8px;">🔥 ANG MAHIWAGANG SEKTOR SA PROTEKSYON:</h3>
        <p style="color: #ffffff; font-size: 16px; line-height: 1.6; margin-bottom: 0;">
            <strong>Hindi mo na kailangan ng third-party anti-virus!</strong> Gawin mo lang itong tatlong (3) sunod-sunod na commands sa ibaba. Ito ay isang <strong>napakalupit na sistema</strong> ng deep security check na <strong>daig pa ang pinakasikat na antivirus sa buong mundo</strong>, dahil built-in at direktang galing ito sa pinaka-ugat ng kernel ng Microsoft Windows system mo!
        </p>
    </div>

    <!-- Scanner Step 1 -->
    <div class="card mb-4">
        <h4 class="card-title">1. I-update ang Virus Definitions (Piliting Mag-update)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Bago mag-scan, i-run ito para pwersahang i-download ng computer mo ang pinakabagong listahan ng mga virus ngayong taon mula sa Microsoft database para kilala ng PC mo kung ano ang hahanapin niya.</p>
        <pre><code>Update-MpSignature</code></pre>
    </div>

    <!-- Scanner Step 2 -->
    <div class="card mb-4">
        <h4 class="card-title">2. Patakbuhin ang Full Windows Defender Scan via Terminal</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Puwersahan nitong uutusan ang built-in Windows Defender mo na mag-execute ng **Full System Scan** sa lahat ng sulok ng hard drive mo (kasama ang htdocs folders mo) para linisin ang mga nakatagong virus habang nagtatrabaho ka [INDEX].</p>
        <pre><code>Start-MpScan -ScanType FullScan</code></pre>
    </div>

    <!-- Scanner Step 3 -->
    <div class="card mb-4">
        <h4 class="card-title">3. The Nakatagong Microsoft Malware Scanner (MRT)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Pindutin ang <strong>Windows Key + R</strong> sa keyboard mo, i-type ang command na nasa ibaba, at pindutin ang Enter. Magbubukas ang isang lihim na nakatagong Microsoft Independent Scanner interface. Piliin ang <em>Full Scan</em> para lamasin at burahin ang mga pinakamalulupit na trojans at malware sa system mo.</p>
        <pre><code>mrt</code></pre>
    </div>
</div>

<!-- SECTION 4: DEEP HARDWARE & STORAGE DIAGNOSTICS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #0dcaf0;">💿 Seksyon 4: Hardware at Storage Diagnostics (Hard Drive & RAM Check)</h2>
    <p class="text-muted mb-4">Mga advanced commands para sa pagsusuri ng physical hardware components ng laptop mo upang maiwasan ang biglaang pag-crash habang nagko-code.</p>

    <!-- Check Disk -->
    <div class="card mb-4 border-danger" style="border: 1px solid #ff4d4d !important;">
        <h4 class="card-title" style="color: #ff4d4d;">1. Check Disk and Repair Bad Sectors (CHKDSK)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Ini-scan nito nang malupitan ang iyong physical Hard Drive o SSD C: drive. Hinahanap nito ang mga "Bad Sectors" o sirang blocks sa hard disk kung saan nakatago ang operating system mo, at awtomatiko nitong inihihiwalay o kinukumpuni ang mga file structures para hindi mag-lag o mag-hang ang laptop mo [INDEX].</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 5px;">🛠️ <strong>Detailed Instructions para sa Terminal:</strong></p>
        <p class="text-muted" style="font-size: 14px; padding-left: 15px; border-left: 2px solid #ff4d4d; color: #ffffff !important; line-height: 1.5;">
            1. Pindutin ang Copy button sa tabi ng code sa ibaba at i-paste sa iyong <strong>Powershell (Admin)</strong>.<br>
            2. Pagka-enter mo, magtatanong si Windows: <em>"Would you like to schedule this volume to be checked the next time the system restarts? (Y/N)"</em>.<br>
            3. I-type ang capital <span class="ans">Y</span> sa terminal mo at pindutin ang Enter.<br>
            4. I-restart mo ang laptop mo. Habang nagbu-boot ang computer, makikita mo ang black screen na may loading percentage—hayaan mo lang ito matapos (umaabot ng 10-30 mins depende sa laki ng drive) para tuluyang makumpuni ang disk!
        </p>
        <pre style="margin-top: 15px;"><code>chkdsk C: /f /r</code></pre>
    </div>

    <!-- RAM Test -->
    <div class="card mb-4">
        <h4 class="card-title">2. Windows Memory Diagnostic (RAM Hardware Check)</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Ito ang opisyal at lihim na hardware analyzer ng Microsoft para sa RAM chips mo. Kung ang laptop mo ay madalas makaranas ng biglaang "Blue Screen of Death" (BSOD) or kapag biglang nagre-restart ang VS Code mo nang walang error logs, tinitingnan nito kung may sira na ang physical RAM stick mo para malaman mo kung kailangan mo na itong palitan.</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 5px;">🛠️ <strong>Detailed Instructions para sa Execution:</strong></p>
        <p class="text-muted" style="font-size: 14px; padding-left: 15px; border-left: 2px solid #0dcaf0; color: #ffffff !important; line-height: 1.5;">
            1. I-run ang command na ito sa terminal, o kaya pindutin ang <strong>Windows Key + R</strong>, i-type ang <code>mdsched.exe</code> at mag-enter.<br>
            2. Magbubukas ang isang kulay gray na Windows Interface popup box.<br>
            3. I-click ang unang opsyon: <strong>"Restart now and check for problems (recommended)"</strong>.<br>
            4. Awtomatikong mag-re-reboot ang computer mo at papasok sa isang kulay asul na full-screen diagnostic mode. Hayaan mo lang itong mag-scan hanggang 100%. Pag-on ng PC mo, magpapakita sa notifications kung nakapasa o may hardware failure ang RAM mo.
        </p>
        <pre style="margin-top: 15px;"><code>mdsched.exe</code></pre>
    </div>
</div>

<!-- SECTION 5: SPEED OPTIMIZATION & CLEANUP -->
<div class="mb-5">
    <h2 class="section-title" style="color: #198754;">🚀 Seksyon 5: System Speed Optimization & Deep Disk Cleanup</h2>
    <p class="text-muted mb-4">Mga commands para bawiin ang nagamit na malalaking gigabytes ng storage at pabilisin ang pag-on o pag-boot ng laptop mo.</p>

    <!-- Deep Storage Cleanup -->
    <div class="card mb-4">
        <h4 class="card-title">1. Automated Deep Windows Update & System Junk Purge</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Nililinis nito nang todo ang hard drive mo sa pamamagitan ng pagbura sa mga gigabytes ng nakatagong basura na hindi kayang abutin ng ordinaryong basurahan—gaya ng mga dambuhalang tira-tirang files ng mga lumang Windows Updates backup, temporary error system logs, at delivery optimization caches nang <strong>100% ligtas at HINDI nagagalaw</strong> ang iyong personal pictures o project documents [INDEX].</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 5px;">🛠️ <strong>Detailed Instructions para sa Execution:</strong></p>
        <p class="text-muted" style="font-size: 14px; padding-left: 15px; border-left: 2px solid #198754; color: #ffffff !important; line-height: 1.5;">
            1. I-copy at i-run ang command na ito sa iyong Powershell Terminal.<br>
            2. Awtomatikong magpa-pop-up ang kilalang **Disk Cleanup** box ng Windows ngunit sa pagkakataong ito ay naka-unlock ang lahat ng "Advanced Options".<br>
            3. Lagyan mo ng **CHECKBOX TICK (☑️)** ang lahat ng makikita mong pagpipilian sa listahan (lalo na ang <em>Windows Update Cleanup</em>, <em>Temporary Files</em>, at <em>Thumbnails</em>).<br>
            4. I-click ang <strong>OK</strong> at piliin ang **Delete Files**. Hayaan siyang mag-load; magugulat ka na lang na mababawasan ng 5GB hanggang 20GB ang kinakaing space ng C: drive mo!
        </p>
        <pre style="margin-top: 15px;"><code>cleanmgr /sageset:1 /sagerun:1</code></pre>
    </div>

    <!-- Startup Audit -->
    <div class="card mb-4">
        <h4 class="card-title">2. I-audit ang mga Patagong Startup Apps</h4>
        <p class="card-text"><strong>⚙️ Ano ang Nagagawa nito:</strong> Hahanapin at i-li-list out nito sa screen mo ang lahat ng applications o softwares na "patagong sumasabay" magbukas sa background sa mismong sandali na pinipindot mo ang power button ng laptop mo. Sa pag-audit na ito, malalaman mo kung aling mga apps ang salarin kaya matagal mag-loading o mabigat ang startup boot time ng computer mo.</p>
        
        <p class="text-light" style="font-size: 14px; margin-bottom: 5px;">🛠️ <strong>Detailed Instructions para sa Execution:</strong></p>
        <p class="text-muted" style="font-size: 14px; padding-left: 15px; border-left: 2px solid #198754; color: #ffffff !important; line-height: 1.5;">
            1. I-copy at i-paste ang mahabang command sa terminal at pindutin ang Enter.<br>
            2. Lalabas sa screen ang tatlong hanay: **Name**, **Command**, at **Location** ng mga startup apps.<br>
            3. Suriin ang listahan. Kung may nakita kang mga mabibigat na app na hindi mo naman kailangan sumabay magbukas araw-araw (gaya ng Discord, Spotify, o Steam), buksan mo ang iyong <strong>Task Manager (Ctrl + Shift + Esc)</strong>, pumunta sa <strong>Startup Apps tab</strong>, at i-right click ang app sabay piliin ang <strong>Disable</strong> para pabilisin ang boot time ng computer mo!
        </p>
        <pre style="margin-top: 15px;"><code>Get-CimInstance Win32_StartupCommand | Select-Object Name, Command, Location</code></pre>
    </div>
</div>

</div>
@endsection
