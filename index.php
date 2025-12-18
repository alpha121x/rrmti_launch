<?php
// Basic PHP to ensure the page is served as PHP
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="public/gop_favicon.png" type="image/x-icon">


    <title>BRS - Inaugration</title>

    <!-- Confetti CDN -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('public/bg.png') no-repeat center center/cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .card {
            background: rgba(255, 255, 255, 0.59);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 700px;
            animation: float 3s infinite ease-in-out;
            transition: all 0.8s ease;
        }

        .button-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes slideDown {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            background: linear-gradient(135deg, #1833adff 0%, #2365adff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.2em;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: slideDown 1.5s ease-out;
            text-shadow: 2px 2px 4px rgba(102, 126, 234, 0.3);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        h2 {
            background: linear-gradient(135deg, #1833adff 0%, #2365adff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5em;
            font-weight: 700;
            animation: fadeInText 2s ease-out;
            text-shadow: 2px 2px 4px rgba(240, 147, 251, 0.3);
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .launch-button {
            width: 140px;
            height: 140px;
            font-size: 16px;
            background-color: #124d0aff;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            box-shadow: 0 0 10px #2cc34dff, 0 0 20px #35b83dff, 0 0 30px #23b672ff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            margin: 0 auto;
            position: relative;
        }

        .launch-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
            z-index: 0;
        }

        .launch-button:hover::after {
            width: 200px;
            height: 200px;
        }

        .launch-button:hover {
            background-color: #c0392b;
            transform: scale(1.1);
            box-shadow: 0 0 15px #e74c3c, 0 0 25px #e74c3c, 0 0 40px #e74c3c;
        }

        .launch-button:active {
            transform: scale(0.98);
        }

        .success-message {
            display: none;
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-top: 20px;
            box-shadow: 0 10px 30px rgba(46, 204, 113, 0.3);
            animation: successSlideIn 1s ease-out;
            position: relative;
            overflow: hidden;
        }

        .success-message::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        @keyframes successSlideIn {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .success-message h3 {
            font-size: 2.2em;
            margin: 0 0 15px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: pulse 2s infinite;
        }

        .success-message p {
            font-size: 1.2em;
            margin: 0;
            opacity: 0.9;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .success-icon {
            font-size: 3em;
            margin-bottom: 15px;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .popper {
            position: absolute;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 1000;
            animation: pop 2.5s ease-out forwards;
        }

        @keyframes pop {
            0% {
                transform: scale(0);
                opacity: 1;
            }

            30% {
                transform: scale(8);
                opacity: 0.9;
            }

            70% {
                transform: scale(12);
                opacity: 0.8;
            }

            100% {
                transform: scale(15);
                opacity: 0;
            }
        }

        .launch-button.loading {
            background-color: #95a5a6;
            cursor: not-allowed;
            pointer-events: none;
        }

        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #ffffff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .hidden {
            display: none !important;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }


        .company-logo {
            height: 50px;
            object-fit: contain;
        }

        .main-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .sub-title {
            font-size: 25px;
            font-style: italic;
            color: #555;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1 class="main-title">Building Research Station (BRS)</h1>
        <p class="sub-title">Inaugration</p>


        <div class="button-wrapper">
            <button class="launch-button" onclick="launchEvent()" id="launchBtn">Launch</button>
        </div>

        <div class="logo-wrapper d-flex align-items-center gap-2">
            <a href="https://urbanunit.gov.pk/" target="_blank">
                <img src="public/uu_logo.png" class="company-logo" id="logo1" />
            </a>

            <a href="#" target="_blank">
                <img src="public/brs_logo.png" class="company-logo" id="logo2" />
            </a>

            <a href="#" target="_blank">
                <img src="public/highway_logo.png" class="company-logo" id="logo2" />
            </a>

            <a href="#" target="_blank">
                <img src="public/cnw.png" class="company-logo" id="logo3" />
            </a>
        </div>



        <div class="success-message" id="successMessage">
            <p>The BRS System is lived now!</p>
        </div>
    </div>



    <audio id="backgroundMusic" src="public/music.mp3" preload="auto"></audio>

    <script>
        function launchEvent() {
            const button = document.getElementById('launchBtn');
            const successMessage = document.getElementById('successMessage');

            button.classList.add('loading');
            button.innerHTML = '<span></span>Launching...';

            const music = document.getElementById('backgroundMusic');
            music.volume = 0.5;
            music.play().catch(error => console.log("Music playback failed:", error));

            // Fire confetti immediately
            fireConfetti();

            setTimeout(() => {
                button.classList.add('hidden');
                successMessage.style.display = 'block';

                // Fire another round of confetti when success message shows
                fireConfetti();

                // Redirect after 2 seconds
                setTimeout(() => {
                    window.location.href = "http://cnw.urbanunit.gov.pk/cnw_brs/"; // <<< Change link here
                }, 20000);

            }, 15000);

        }

        function fireConfetti() {
            const duration = 12 * 1000;
            const animationEnd = Date.now() + duration;

            const defaults = {
                spread: 80,
                ticks: 80,
                gravity: 0.6
            };

            const interval = setInterval(() => {
                const timeLeft = animationEnd - Date.now();
                if (timeLeft <= 0) {
                    clearInterval(interval);
                    return;
                }

                // scale particles down near the end for smooth finish
                const particleCount = Math.floor(180 * (timeLeft / duration));

                // Top
                confetti({
                    ...defaults,
                    particleCount,
                    origin: {
                        x: 0,
                        y: 0.1
                    }
                });
                confetti({
                    ...defaults,
                    particleCount,
                    origin: {
                        x: 0.5,
                        y: 0.1
                    }
                });
                confetti({
                    ...defaults,
                    particleCount,
                    origin: {
                        x: 1,
                        y: 0.1
                    }
                });

                // Bottom (upward)
                confetti({
                    ...defaults,
                    particleCount,
                    gravity: -0.7,
                    origin: {
                        x: 0,
                        y: 0.9
                    }
                });
                confetti({
                    ...defaults,
                    particleCount,
                    gravity: -0.7,
                    origin: {
                        x: 0.5,
                        y: 0.9
                    }
                });
                confetti({
                    ...defaults,
                    particleCount,
                    gravity: -0.7,
                    origin: {
                        x: 1,
                        y: 0.9
                    }
                });

            }, 250);
        }




        document.getElementById('launchBtn').addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.5)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.pointerEvents = 'none';

            this.appendChild(ripple);

            setTimeout(() => {
                if (ripple.parentNode) {
                    ripple.parentNode.removeChild(ripple);
                }
            }, 600);
        });

        const style = document.createElement('style');
        style.textContent = `
      @keyframes ripple {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
    `;
        document.head.appendChild(style);
    </script>
</body>

</html>