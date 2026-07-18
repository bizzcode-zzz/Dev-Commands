<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DevCommands - Ajman Portal')</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Universal Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <a class="animated-logo" href="/">🚀 DevCommands for Ajman_Bizz</a>

            <div class="nav-buttons">
    <!-- ROW 1: CORE WORKSTATION & ANALYSIS TOOLS -->
    <a class="btn-nav red-theme" href="/fresh-setup">💻 PC SETUP</a>
    <a class="btn-nav animated-health" href="/system-health">🛡️ PC HEALTH</a>
    <a class="btn-nav cyan-theme" href="/filezilla">📂 FILEZILLA</a>

    <!-- ROW 2: CODE MANAGEMENT & PROD SERVERS -->
    <a class="btn-nav cyan-theme" href="/github">📁 GITHUB</a>
    <a class="btn-nav green-theme" href="/ssh">🔑 SSH SERVER</a>
    <a class="btn-nav red-theme" href="/laravel-install">🔥 LARAVEL</a>
    
    <!-- ROW 3 / AUTOMATION SPECIAL: ROBOT BUTTON -->
    <a class="btn-nav animated-robot" href="/cicd">🤖 CI/CD ROBOT</a>

        <!-- ROW 3 / ADDITIONAL AUTOMATION & STRUCTURAL TOOLS -->
    <a class="btn-nav cyan-theme" href="/module-blueprint" style="color: #b23cfd !important; border-color: rgba(178, 60, 253, 0.3) !important;">🗂️ MODULE BP</a>

</div>







        </div>
    </nav>

    <!-- Content Window -->
    <div class="container">
        @yield('content')
    </div>

    <!-- ⚡ AUTOMATIC COPY TO CLIPBOARD SCRIPT ⚡ -->
    <script>
        document.querySelectorAll('pre').forEach((codeBlock) => {
            // Gumawa ng Button element
            const button = document.createElement('button');
            button.className = 'copy-btn';
            button.type = 'button';
            button.innerText = 'Copy';

            // Ilagay ang button sa loob ng pre block sa kanang gilid
            codeBlock.appendChild(button);

            // Logic kapag pinindot ang button
            button.addEventListener('click', () => {
                // Kuhanin ang text sa loob ng code tag (tanggalin ang text ng mismong button)
                const textToCopy = codeBlock.querySelector('code').innerText;

                // I-save sa clipboard ng system mo
                navigator.clipboard.writeText(textToCopy).then(() => {
                    button.innerText = 'Copied!';
                    button.classList.add('copied');

                    // Ibalik sa 'Copy' pagkatapos ng 2 segundo
                    setTimeout(() => {
                        button.innerText = 'Copy';
                        button.classList.remove('copied');
                    }, 2000);
                });
            });
        });
    </script>
</body>
</html>
