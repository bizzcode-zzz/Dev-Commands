@extends('layouts.app')

@section('title', 'PC Health & Built-in Anti-Virus Scan - DevCommands')

@section('content')
<!-- ================================================================= -->
<!-- CORE SECURITY MODULE: CLEAN COMPACT SURVEILLANCE SHIELD MOD       -->
<!-- ================================================================= -->
<style>
    /* Ligtas at standard na pulse animation para sa panlabas na aura halo */
    @keyframes cyberAuraPulse {
        0%, 100% { 
            box-shadow: 0 0 15px rgba(13, 202, 240, 0.3), 0 0 30px rgba(0, 255, 170, 0.1);
            border-color: #0dcaf0 !important;
        }
        50% { 
            box-shadow: 0 0 25px rgba(0, 255, 170, 0.7), 0 0 45px rgba(239, 68, 68, 0.3);
            border-color: #00ffaa !important;
        }
    }

    @keyframes shieldPulse {
        0%, 100% { transform: scale(1); filter: drop-shadow(0 0 5px #0dcaf0); }
        50% { transform: scale(1.05); filter: drop-shadow(0 0 15px #00ffaa); }
    }

    /* Solid at ligtas na box container - Walang pseudo-elements kaya ligtas sa VS Code */
    .cyber-secure-box {
        background: linear-gradient(135deg, #070a14 0%, #101524 100%) !important;
        border: 2px solid #0dcaf0 !important;
        border-radius: 12px !important;
        padding: 30px !important;
        animation: cyberAuraPulse 4s infinite ease-in-out;
    }

    .cyber-shield-icon {
        font-size: 3.2rem;
        display: inline-block;
        animation: shieldPulse 3s infinite ease-in-out;
    }
</style>

<!-- MAIN HARDWARE ENGINE CONTAINER -->
<div class="cyber-secure-box mb-5">
    <div class="row align-items-center">
        
        <!-- SECURE TERMINAL SHIELD OVERLAY -->
        <div class="col-md-2 text-center mb-3 mb-md-0">
            <div class="cyber-shield-icon">🛡️</div>
            <div class="mt-2">
                <span style="font-family: monospace; font-size: 11px; color: #00ffaa; font-weight: bold; letter-spacing: 2px; text-shadow: 0 0 5px rgba(0,255,170,0.5);">[SYS_SECURE]</span>
            </div>
        </div>

        <!-- INSIDE TEXT UPGRADE (SURVEILLANCE LAYOUT) -->
        <div class="col-md-10">
            <div class="d-flex align-items-center mb-2 flex-wrap gap-2">
                <h1 class="page-title mb-0" style="color: #0dcaf0 !important; font-family: 'Courier New', Courier, monospace; font-weight: bold; font-size: 2.2rem; letter-spacing: 0.5px; text-shadow: 0 0 8px rgba(13, 202, 240, 0.4) !important;">
                    PC HEALTH & SECURITY COMMANDS
                </h1>
                <span class="badge px-2 py-1" style="background: rgba(0, 255, 170, 0.1); border: 1px solid #00ffaa; color: #00ffaa; font-family: monospace; font-size: 11px; font-weight: bold;">KERNEL_LEVEL: OK</span>
            </div>
            
            <p style="color: #cbd5e1 !important; font-size: 1rem; line-height: 1.7; margin-bottom: 0; padding-left: 12px; border-left: 3px solid #0dcaf0;">
                Mabilisang cheat sheet para sa malupitang pag-scan ng PC, pagbabantay ng hackers, at awtomatikong pagkumpuni ng mga sirang operating system files gamit ang terminal nang WALANG antivirus software na kailangan.
            </p>
        </div>

    </div>
</div>

<!-- 🚨 SECURE ENCLAVE ALERT: ROOT PRIVILEGE ENGINE REQUIREMENT 🚨 -->
<div class="card mb-5 shadow-lg" style="background: #070a12 !important; border: 2px solid #ef4444 !important; border-radius: 6px; box-shadow: 0 0 25px rgba(239, 68, 68, 0.2) !important;">
    <div class="card-body p-4">
        <div class="d-flex align-items-center mb-2">
            <span style="color: #ef4444 !important; font-size: 1.4rem; margin-right: 12px;">⚠️</span>
            <h4 class="mb-0" style="color: #ef4444 !important; font-family: 'Courier New', Courier, monospace; font-weight: bold; letter-spacing: 0.5px; text-shadow: 0 0 10px rgba(239, 68, 68, 0.4) !important;">
                SECURITY_ALERT: ROOT_PRIVILEGES_MANDATORY
            </h4>
        </div>
        
        <p style="color: #d1d5db !important; font-size: 0.95rem; line-height: 1.6; margin-bottom: 15px;">
            Lahat ng structural layers at internal scripts na nakalagay sa module na ito ay nangangailangan ng <strong>Root Administrative Authorization</strong>. Ang pag-trigger nang walang administrative bypass ay awtomatikong haharangin ng Windows defense module: <span style="color: #ef4444 !important; font-family: monospace; font-weight: bold;">[FATAL_ACCESS_DENIED_0x5]</span>.
        </p>
        
        <!-- PROTOCOL TERMINAL BOX -->
        <div class="p-3 rounded border" style="background: #030508 !important; border-color: #2d3748 !important; font-family: 'Courier New', Courier, monospace; box-shadow: inset 0 0 10px rgba(0,0,0,0.8);">
            <p class="small mb-2" style="color: #00ffaa !important; font-weight: bold; text-shadow: 0 0 5px rgba(0, 255, 170, 0.3) !important;">▶ PRIVILEGE ELEVATION SEQUENCE INITIALIZATION PROTOCOL:</p>
            <ul class="text-white small mb-0 ps-3" style="line-height: 1.7; list-style-type: square;">
                <li>Pindutin ang <span style="color: #38bdf8 !important; font-weight: bold;">[Windows Key]</span> upang mag-trigger ng local macro application sweep.</li>
                <li>I-inject ang core process identity: <span style="color: #f59e0b !important; font-weight: bold;">PowerShell</span></li>
                <li>I-right-click ang master signature at i-execute ang parameters: <span style="color: #ef4444 !important; font-weight: bold;">"Run as Administrator"</span></li>
                <li>I-resolve ang system verification challenge sa pamamagitan ng pagpili sa <span style="color: #00ffaa !important; font-weight: bold;">[YES]</span> gateway prompt.</li>
            </ul>
        </div>
    </div>
</div>





<!-- ================================================================= -->
<!-- PART 1: MGA PAMPA-SPEED UP AT SYSTEM REPAIR LAYOUT (SECTIONS 1-3) -->
<!-- ================================================================= -->

<!-- 📢 SUB-HEADER GENERAL LABEL 1 -->
<div class="alert alert-success border-success mb-4" style="background-color: #f4fbf7;">
    <h4 class="mb-1" style="color: #198754; font-weight: bold;">🌟 KATEGORYA A: MGA MAASAHANG PAMPABILIS (KAHIT ANONG ORAS)</h4>
    <p class="small text-dark mb-0">Ang mga seksyon sa ilalim nito ay ligtas patakbuhin araw-araw o kahit anong oras mo gustuhin nang hindi naaapektuhan ang iba pang ginagawa mo sa PC.</p>
</div>

<!-- SECTION 1: NETWORK SECURITY & HACKER WATCH (RED THEME) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #dc3545;">🌐 Seksyon 1: Pagbabantay sa Network at mga Tagong Koneksyon</h2>
    <p class="text-muted mb-3">Suriin ang mga aktibong kumokonekta sa internet mo upang masigurong walang spyware o malware na nagpapadala ng data sa labas.</p>
    
    <div class="card mb-3 shadow-sm" style="border: 2px solid #dc3545;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #dc3545; font-weight: bold;">1. Suriin ang mga Live Internet Connections</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Ipapakita nito ang lahat ng app na may aktibong koneksyon sa internet ngayon. Kasama rito ang <strong>Pangalan ng App</strong>, Remote IP, at Port para sa seguridad ng iyong PC.
            </p>
            
            <!-- HIGH CONTRAST LIGHT RED CODE BOX -->
            <div class="p-2 rounded mb-2" style="background-color: #fff5f5; border: 1px solid #f8d7da; font-family: monospace;">
                <p class="small mb-1" style="color: #b02a37; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Get-NetTCPConnection -State Established | Select-Object LocalAddress, LocalPort, RemoteAddress, RemotePort, State, @{Name="ProcessName";Expression={(Get-Process -Id $_.OwningProcess).Name}} | Format-Table -AutoSize</code></pre>
            </div>
            
            <div class="small text-muted">
                <span>📊 Magpapakita ng malinis na listahan na may kasamang pangalan ng App sa dulo.</span>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 3: INSTANT INTERFACE RESTART (PURPLE THEME) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #6f42c1;">⚡ Seksyon 2: Mabilisang Lunas sa Pag-hang (Instant Interface Refresh)</h2>
    <p class="text-muted mb-3">
        Gamitin ito kapag biglang nag-freeze ang iyong taskbar, desktop icons, o hindi mo ma-click ang mga nakabukas na folders [INDEX].
    </p>

    <!-- 1. Explorer Quick Refresh Card -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #6f42c1;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #6f42c1; font-weight: bold;">1. Explorer Quick Refresh</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Parang nag-restart ka ng PC pero para lang sa desktop interface ng Windows [INDEX]. Puwersahan nitong pinapatay at muling binubuksan ang Taskbar, Start Menu, at Desktop Icons sa loob ng 2-3 segundo nang <strong>hindi masasara</strong> ang iyong mga kasalukuyang ginagawang apps [INDEX].
            </p>
            
            <!-- HIGH CONTRAST LIGHT PURPLE CODE BOX -->
            <div class="p-2 rounded mb-2" style="background-color: #f8f5fe; border: 1px solid #e0d0f7; font-family: monospace;">
                <p class="small mb-1" style="color: #5227cc; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Stop-Process -Name explorer -Force</code></pre>
            </div>
            
            <div class="d-flex align-items-center small text-muted gap-3">
                <span class="badge bg-success">⏳ Instant (2-3 Seg)</span>
                <span class="badge bg-secondary">🔒 Ligtas (Walang Mawawala)</span>
            </div>
        </div>
    </div>

        <!-- 2. All-in-One CPU Overload Buster Card -->
    <!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #6f42c1;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #6f42c1; font-weight: bold;">2. All-in-One CPU Overload Buster</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Puwersahang pinatitigil at pino-pause ang tatlong pinakamabibigat na background services (Search Indexing, Telemetry, at SysMain) na madalas nagpapataas ng CPU mo hanggang 95% [INDEX].
            </p>
            
            <!-- HIGH CONTRAST LIGHT PURPLE CODE BOX (TO DISABLE) -->
            <div class="p-2 rounded mb-3" style="background-color: #f8f5fe; border: 1px solid #e0d0f7; font-family: monospace;">
                <p class="small mb-1" style="color: #5227cc; font-weight: bold;">💡 I-OPTIMIZE / PATAYIN (I-copy at i-paste sa PowerShell bilang Administrator):</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Stop-Service -Name "WSearch","DiagTrack","SysMain" -Force -ErrorAction SilentlyContinue; Set-Service -Name "WSearch","DiagTrack","SysMain" -StartupType Disabled</code></pre>
            </div>

            <!-- HIGH CONTRAST LIGHT RED/PINK CODE BOX (TO RESTORE / UNDO) -->
            <div class="p-2 rounded mb-2" style="background-color: #fff5f5; border: 1px solid #fbcfe8; font-family: monospace;">
                <p class="small mb-1" style="color: #b02a37; font-weight: bold;">🔄 IBALIK SA DATI / DEACTIVATE (Kung sakaling nais mong ibalik sa normal):</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Set-Service -Name "WSearch","DiagTrack","SysMain" -StartupType Automatic; Start-Service -Name "WSearch","DiagTrack","SysMain" -ErrorAction SilentlyContinue</code></pre>
            </div>

            <div class="mt-2 small text-muted">
                <span>📌 Note: 100% Ligtas [INDEX]. Bababa agad ang lagnat ng processor mo nang hindi nagagalaw ang Laravel o personal files mo kapag pinatakbo ang unang command [INDEX].</span>
            </div>
        </div>
    </div>

</div> <!-- 💡 FIXED: ISINARA NANG TAMA ANG MALAKING TAG NG SEKSYON 3 -->

<!-- 📢 SUB-HEADER GENERAL LABEL 2 -->
<div class="alert alert-primary border-primary mb-4 mt-5" style="background-color: #f0f6ff;">
    <h4 class="mb-1" style="color: #0b5ed7; font-weight: bold;">⚠️ KATEGORYA B: DEEP CORE SYSTEM REPAIR (DAPAT MAGKASUNOD)</h4>
    <p class="small text-dark mb-0">Ang mga proseso rito ay maselan at dapat laging magkasunod (Unahin ang DISM bago ang SFC Scan) upang maging matagumpay ang pagkumpuni ng mga corrupted operating system files [INDEX].</p>
</div>

<!-- SECTION 2: FILE REPAIR SYSTEM (BLUE THEME) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #0b5ed7;">🛠️ Seksyon 3: Awtomatikong Pagkumpuni ng mga Sirang Files (Fix Damaged Files)</h2>
    <p class="text-muted mb-4">
        Patakbuhin ang command na ito kapag nakakaramdam ka ng pagbagal ng system, 100% CPU usage, o biglang pag-crash ng mga apps.
    </p>

    <div class="card mb-4 shadow-sm" style="border: 2px solid #0b5ed7;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #0b5ed7; font-weight: bold;">🚀 2-in-1 Windows System Repair Combo</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Awtomatiko nitong pagsasamahin ang dalawang pinakamahalagang scan ng Windows. Unang aayusin ng DISM ang "master copy" gamit ang internet, at pagkatapos nito ay kusa namang tatakbo ang SFC Scan upang palitan ang lahat ng sirang files sa iyong PC gamit ang malinis na kopya [INDEX].
            </p>
            
            <!-- HIGH CONTRAST LIGHT BLUE CODE BOX -->
            <div class="p-3 rounded mb-3" style="background-color: #f0f6ff; border: 1px solid #b6d4fe; font-family: monospace;">
                <p class="small mb-2" style="color: #0a58ca; font-weight: bold;">💡 I-copy at i-paste ito sa Command Prompt (CMD) o PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>DISM /Online /Cleanup-Image /RestoreHealth && sfc /scannow</code></pre>
            </div>
            
            <div class="d-flex align-items-center small text-muted gap-3">
                <span class="badge bg-warning text-dark">⏳ 10-25 minuto</span>
                <span class="badge bg-primary">🌐 Kailangan ng Internet</span>
            </div>
        </div>
    </div>
</div>





<!-- ================================================================= -->
<!-- PART 2: DEEP ANTIVIRUS SCAN & HARDWARE DIAGNOSTICS (SECTIONS 4-5) -->
<!-- ================================================================= -->

<!-- 📢 SUB-HEADER GENERAL LABEL 3 -->
<div class="alert alert-warning border-warning mb-4" style="background-color: #fffbeb;">
    <h4 class="mb-1" style="color: #b15d00; font-weight: bold;">⚠️ KATEGORYA C: DEEP ANTIVIRUS SCAN (DAPAT MAGKASUNOD)</h4>
    <p class="small text-dark mb-0">Patakbuhin muna ang Seksyon 10 para i-pause ang Windows Update bago isalang ang Hakbang 1 at 2 [INDEX]. Ang Hakbang 3 ay dapat gawing pinakahuling hakbang dahil magre-restart agad ang PC mo [INDEX].</p>
</div>

<!-- SECTION 4: BUILT-IN DEEP ANTIVIRUS SCAN (ORANGE THEME) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #fd7e14;">🚀 Seksyon 4: Malupitang Pag-Scan ng Virus Gamit ang Windows Tools</h2>
    <p class="text-muted mb-3">Mabilisang panuntunan para sa 100% deep clean ng malware at trojans sa iyong PC gamit ang mga built-in tools [INDEX].</p>

    <!-- Scanner Step 1 -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #fd7e14;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #fd7e14; font-weight: bold;">1. I-update ang Virus Definitions (Piliting Mag-update)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Puwersahang i-do-download ng computer mo ang pinakabagong listahan ng mga virus mula sa Microsoft database upang makilala ng iyong PC ang mga banta ngayon.
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #fff8f5; border: 1px solid #ffe3d5; font-family: monospace;">
                <p class="small mb-1" style="color: #b15d00; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Update-MpSignature</code></pre>
            </div>
        </div>
    </div>

    <!-- Scanner Step 2 -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #fd7e14;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #fd7e14; font-weight: bold;">2. Patakbuhin ang Full Windows Defender Scan sa Background</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Uutusan ang built-in Windows Defender na mag-execute ng Full System Scan bilang background job upang hindi mag-freeze ang terminal mo habang nag-aalis ito ng mga virus [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #fff8f5; border: 1px solid #ffe3d5; font-family: monospace;">
                <p class="small mb-1" style="color: #b15d00; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Start-MpScan -ScanType FullScan -AsJob</code></pre>
            </div>
            <div class="small text-muted">
                <span>📌 Tip: I-type ang <code>Get-Job</code> sa terminal upang makita kung tapos na ang pag-scan.</span>
            </div>
        </div>
    </div>

    <!-- Scanner Step 3 -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #fd7e14;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #fd7e14; font-weight: bold;">3. Ang Ultimate Offline Rootkit Scanner (PINAKAHULING ISALANG)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Gagamitin para sa mga malulubhang virus na hindi kayang burahin habang nakabukas ang Windows. Awtomatikong magre-restart ang iyong PC at magre-scan bago mag-load ang desktop [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #fff8f5; border: 1px solid #ffe3d5; font-family: monospace;">
                <p class="small mb-1" style="color: #b15d00; font-weight: bold;">⚠️ BABALA: Magre-restart ang iyong PC pagkatapos i-paste ito sa PowerShell (Admin):</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Start-MpWDOScan</code></pre>
            </div>
            <div class="small text-danger">
                <span>🔔 Paalala: I-save muna ang lahat ng iyong ginagawa bago patakbuhin ang command na ito.</span>
            </div>
        </div>
    </div>
</div>


<!-- 📢 SUB-HEADER GENERAL LABEL 4 -->
<div class="alert alert-danger border-danger mb-4 mt-5" style="background-color: #fff5f5;">
    <h4 class="mb-1" style="color: #dc3545; font-weight: bold;">🛑 KATEGORYA D: DEEP HARDWARE DIAGNOSTICS (PINAKAHULING ISALANG)</h4>
    <p class="small text-dark mb-0">Ang mga commands sa ibaba ay nangangailangan ng PC restart [INDEX]. Patakbuhin lamang ito kapag tapos ka na mag-code o kapag madalas mag-crash ang mga software mo.</p>
</div>

<!-- SECTION 5: DEEP HARDWARE & STORAGE DIAGNOSTICS (TEAL THEME) -->
<div class="mb-5">
    <h2 class="section-title" style="color: #0dcaf0;">💿 Seksyon 5: Hardware at Storage Diagnostics (Drive & RAM Check)</h2>
    <p class="text-muted mb-3">Mga advanced commands para suriin ang physical hardware ng iyong PC upang maiwasan ang biglaang pag-crash [INDEX].</p>

    <!-- Check Disk -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #0dcaf0;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #0dcaf0; font-weight: bold;">1. Check Disk and Repair Bad Sectors (CHKDSK)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Ini-iscan ang iyong SSD/HDD upang hanapin at kumpunihin ang mga sirang blocks (bad sectors) na nagiging sanhi ng matinding lag [INDEX].
            </p>
            <div class="text-muted small mb-2 ps-2" style="border-left: 2px solid #0dcaf0; line-height: 1.4;">
                1. I-paste ang command sa PowerShell (Admin), i-type ang <strong>Y</strong> kapag nagtanong, at mag-Enter [INDEX].<br>
                2. I-restart ang PC. Hayaan ang 10-30 mins scan habang nagbu-boot ang computer [INDEX].
            </div>
            <div class="p-2 rounded mb-2" style="background-color: #f0fcfd; border: 1px solid #b6effb; font-family: monospace;">
                <p class="small mb-1" style="color: #087990; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell (Admin):</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>chkdsk C: /f /r</code></pre>
            </div>
        </div>
    </div>

    <!-- RAM Test -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #0dcaf0;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #0dcaf0; font-weight: bold;">2. Windows Memory Diagnostic (RAM Hardware Check)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Sinusuri kung may sira ang iyong physical RAM stick [INDEX]. Bagay ito kung ang PC mo ay madalas mag-Blue Screen (BSOD) o biglang nagka-crash ang mga apps [INDEX].
            </p>
            <div class="text-muted small mb-2 ps-2" style="border-left: 2px solid #0dcaf0; line-height: 1.4;">
                1. I-run ang command sa PowerShell at i-click ang <strong>"Restart now and check for problems"</strong> sa popup [INDEX].<br>
                2. Magre-restart ang PC at papasok sa blue-screen hardware diagnostic mode nang kusa [INDEX].
            </div>
            <div class="p-2 rounded mb-2" style="background-color: #f0fcfd; border: 1px solid #b6effb; font-family: monospace;">
                <p class="small mb-1" style="color: #087990; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell (Admin):</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>mdsched.exe</code></pre>
            </div>
        </div>
    </div>
</div>


<!-- ================================================================= -->
<!-- PART 3: SPEED UP & NETWORK SERVER FIX (SECTIONS 6-7)              -->
<!-- ================================================================= -->

<!-- SECTION 6: SPEED OPTIMIZATION & CLEANUP (GREEN THEME) -->
<!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #198754;">🚀 Seksyon 6: Speed Optimization & Deep Cleanup (Kahit Anong Oras)</h2>
    <p class="text-muted mb-3">Mga mabilisang command para bawiin ang storage space at pabilisin ang boot time ng iyong PC [INDEX].</p>

    <!-- Deep Storage Cleanup -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #198754;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #198754; font-weight: bold;">1. Automatic Junk Purge & Drive Optimize</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Awtomatikong buburahin ang gigabytes ng Windows Update junk, temporary logs, at cache nang ligtas. Kasabay nitong i-o-optimize (defrag/trim) ang iyong C: drive para sa mas mabilis na loading ng system [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #f4fbf7; border: 1px solid #c7ebdb; font-family: monospace;">
                <p class="small mb-1" style="color: #146c43; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Remove-Item -Path "$env:TEMP\*" -Recurse -Force -ErrorAction SilentlyContinue; cleanmgr /autoclean; Optimize-Volume -DriveLetter C -Defrag -Verbose</code></pre>
            </div>
            <div class="d-flex align-items-center small text-muted gap-3">
                <span class="badge bg-warning text-dark">⏳ 5-15 mins</span>
                <span class="text-success" style="font-weight: bold;">● 100% Automatic (No Popups)</span>
            </div>
        </div>
    </div>

    <!-- Startup Audit -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #198754;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #198754; font-weight: bold;">2. Startup Apps Audit</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> I-li-list ang mga app na sumasabay magbukas pagka-on ng PC. Kung may mabigat na app na hindi kailangan (gaya ng Spotify o Discord), i-disable ito sa <strong>Task Manager (Ctrl+Shift+Esc) > Startup Apps</strong> [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #f4fbf7; border: 1px solid #c7ebdb; font-family: monospace;">
                <p class="small mb-1" style="color: #146c43; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Get-CimInstance Win32_StartupCommand | Select-Object Name, Command, Location</code></pre>
            </div>
            <div class="small text-muted">
                <span>📊 Nagpapakita ng detalyadong ulat sa terminal</span>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 7: NETWORK & LOCAL SERVER OPTIMIZATION (PINK THEME) -->
<!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #e11d48;">🌐 Seksyon 7: Network, Internet, at Local Server Optimization (Kahit Anong Oras)</h2>
    <p class="text-muted mb-3">Mga mabilisang command para pabilisin ang internet para sa dependencies downloads at ayusin ang nagre-conflict na local servers.</p>

    <!-- DNS Flush & Network Reset -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #e11d48;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #e11d48; font-weight: bold;">1. Flush DNS Cache at Network Refresh</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Nililinis nito ang lumang internet cache ng iyong PC. Mabilisang lunas kapag ayaw gumana ng <code>localhost</code> o kapag mabagal mag-download gamit ang <code>composer install</code> o <code>npm install</code> [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #fff5f7; border: 1px solid #fbcfe8; font-family: monospace;">
                <p class="small mb-1" style="color: #9d174d; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Clear-DnsClientCache; ipconfig /flushdns; ipconfig /renew</code></pre>
            </div>
        </div>
    </div>

    <!-- Kill Stuck Ports -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #e11d48;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #e11d48; font-weight: bold;">2. I-kill ang mga Na-stuck na Local Ports (Anti-Conflict)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Solusyon kapag lumabas ang error na <em>"Port 8000 is already in use"</em>. Hinahanap nito kung anong patagong background process ang umaagaw sa iyong Laravel server port at puwersahan itong pinapatay.
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #fff5f7; border: 1px solid #fbcfe8; font-family: monospace;">
                <p class="small mb-1" style="color: #9d174d; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>$port = 8000; $conn = Get-NetTCPConnection -LocalPort $port -ErrorAction SilentlyContinue; if ($conn) { Stop-Process -Id $conn.OwningProcess -Force }</code></pre>
            </div>
        </div>
    </div>
</div>
<!-- ================================================================= -->
<!-- PART 4: PERFORMANCE TWEAKS & DEBLOAT CONTROLS (SECTIONS 8-10)    -->
<!-- ================================================================= -->

<!-- SECTION 8: POWER-USER PERFORMANCE TWEAKS (GOLD THEME) -->
<!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #b15d00;">⚡ Seksyon 8: Power-User Performance Tweaks (Kahit Anong Oras)</h2>
    <p class="text-muted mb-3">Mga advanced commands para i-unlock ang nakatagong lakas ng iyong processor nang walang pigil [INDEX].</p>

    <div class="card mb-3 shadow-sm" style="border: 2px solid #ffc107;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #b15d00; font-weight: bold;">1. I-unlock ang Ultimate Performance Power Mode</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Inaalis nito ang power limits ng Windows upang ibigay ng iyong processor ang 100% na bilis nito nang walang pigil habang nagko-code ka [INDEX].
            </p>
            <div class="text-muted small mb-2 ps-2" style="border-left: 2px solid #ffc107; line-height: 1.4;">
                1. I-paste ang command sa ibaba sa <strong>PowerShell (Admin)</strong> at mag-Enter [INDEX].<br>
                2. Sa control panel window na bubukas, hanapin at piliin ang <strong>"Ultimate Performance"</strong> [INDEX].
            </div>
            <div class="p-2 rounded mb-3" style="background-color: #fffbeb; border: 1px solid #fef08a; font-family: monospace;">
                <p class="small mb-1" style="color: #b15d00; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>powercfg -duplicatescheme e9a42b02-d5df-448d-aa00-03f14749eb61; control powercfg.cpl</code></pre>
            </div>
            <div class="p-3 rounded small" style="background-color: #fef2f2; border: 1px solid #fee2e2;">
                <p class="mb-1 text-danger" style="font-weight: bold;">⚠️ Paalala at Paano Ibalik sa Dati / Burahin:</p>
                <p class="text-dark mb-2" style="line-height: 1.4;">
                    Kung nais ibalik sa matipid na mode, i-run ang <code>control powercfg.cpl</code> at piliin ang <strong>Balanced</strong> [INDEX]. Kung nais itong burahin, piliin muna ang Balanced mode bago i-run ang delete command sa ibaba sa PowerShell (Admin):
                </p>
                <div class="p-2 bg-white rounded border d-flex align-items-center justify-content-between">
                    <code style="color: #dc3545; font-weight: bold; font-size: 0.85rem; word-break: break-all; width: 85%;">powercfg -delete e9a42b02-d5df-448d-aa00-03f14749eb61</code>
                    <button onclick="copyDeleteCommand()" class="btn btn-sm btn-danger py-0 px-2" style="font-size: 11px; font-weight: bold;">Copy</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================================================================= -->
<!-- SECTION 9: WINDOWS BLOATWARE & VISUAL TWEAKS (GRAY THEME)        -->
<!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS                           -->
<!-- ================================================================= -->
<div class="mb-5">
    <h2 class="section-title" style="color: #4b5563;">⚙️ Seksyon 9: Windows System Debloat & Visual Optimization</h2>
    <p class="text-muted mb-3">Mga advanced commands para patayin ang mga patagong background services at bawas visual lag sa iyong PC [INDEX].</p>

    <!-- 1. Transparency Disable Card Only -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #4b5563;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #4b5563; font-weight: bold;">1. I-disable ang Taskbar Transparency (Bawas Visual Lag)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Pinapatay ang blur at transparent effects ng Start Menu at Taskbar upang makatipid sa lakas ng RAM at Graphics Card [INDEX].
            </p>
            <div class="p-2 rounded mb-2" style="background-color: #f9fafb; border: 1px solid #e5e7eb; font-family: monospace;">
                <p class="small mb-1" style="color: #374151; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Set-ItemProperty -Path "HKCU:\Software\Microsoft\Windows\CurrentVersion\Themes\Personalize" -Name "EnableTransparency" -Value 0</code></pre>
            </div>
        </div>
    </div>
</div> <!-- 💡 FIXED: ISINARA NANG TAMA ANG MALAKING TAG NG SEKSYON 9 -->


<!-- SECTION 10: WINDOWS UPDATE CONTROL (INDIGO THEME) -->
<!-- 💡 PWEDENG PATAKBUHIN KAHIT ANONG ORAS -->
<div class="mb-5">
    <h2 class="section-title" style="color: #4f46e5;">🛑 Seksyon 10: Windows Update & Bandwidth Background Control</h2>
    <p class="text-muted mb-3">Pansamantalang patayin ang Windows Update at patagong P2P uploading upang maiwasan ang biglaang paglag at internet slow-down habang nagko-code.</p>

    <!-- Step 1: Kill All Update Services -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #4f46e5;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #4f46e5; font-weight: bold;">1. Puwersahang Patayin ang Lahat ng Windows Update at P2P Services</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Permanenteng hihinto sa background downloads (`wuauserv`) at isasara rin ang patagong paggamit sa internet mo para mag-upload ng updates sa ibang PC sa buong mundo (`dosvc`).
            </p>
            <!-- HIGH CONTRAST LIGHT INDIGO CODE BOX -->
            <div class="p-2 rounded mb-2" style="background-color: #f5f3ff; border: 1px solid #ddd6fe; font-family: monospace;">
                <p class="small mb-1" style="color: #4338ca; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Stop-Service -Name "wuauserv","dosvc" -Force -ErrorAction SilentlyContinue; Set-Service -Name "wuauserv","dosvc" -StartupType Disabled</code></pre>
            </div>
        </div>
    </div>

    <!-- Step 2: Restore All Update Services -->
    <div class="card mb-3 shadow-sm" style="border: 2px solid #4f46e5;">
        <div class="card-body py-3">
            <h5 class="card-title mb-1" style="color: #4f46e5; font-weight: bold;">2. Ibalik sa Normal ang Windows Update at P2P (I-re-enable)</h5>
            <p class="card-text small mb-2 text-dark">
                <strong>⚙️ Aksyon:</strong> Ibabalik sa normal at automatic mode ang lahat ng services kapag tapos ka na mag-code at handa ka nang mag-update nang ligtas.
            </p>
            <!-- HIGH CONTRAST LIGHT INDIGO CODE BOX -->
            <div class="p-2 rounded mb-2" style="background-color: #f5f3ff; border: 1px solid #ddd6fe; font-family: monospace;">
                <p class="small mb-1" style="color: #4338ca; font-weight: bold;">💡 I-copy at i-paste ito sa PowerShell bilang Administrator:</p>
                <pre class="mb-0" style="color: #000000; font-size: 0.95rem; font-weight: bold; white-space: pre-wrap; word-wrap: break-word;"><code>Set-Service -Name "wuauserv","dosvc" -StartupType Automatic; Start-Service -Name "wuauserv","dosvc" -ErrorAction SilentlyContinue</code></pre>
            </div>
        </div>
    </div>
</div>


</div> <!-- Closing Main Container from Part 1 -->
@endsection









