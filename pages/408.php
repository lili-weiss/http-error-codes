<?php
// 408 – Request Timeout: schlafendes Monster mit Schlafmütze, Kissen und Zzz.
return [
    'code' => '408',
    'og'   => '408',
    'css'  => <<<'CSS'
        .monster {
            animation: monster-sleep 6s ease-in-out infinite;
        }

        .eye {
            width: 30px;
            height: 15px;
            background-color: transparent;
            border: none;
            border-bottom: 4px solid #333;
            border-radius: 0 0 30px 30px;
            position: relative;
            margin-top: 15px;
            overflow: visible;
        }

        .mouth {
            width: 14px;
            height: 14px;
            background-color: #333;
            border: none;
            border-radius: 50%;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            animation: mouth-breathe 3s infinite alternate ease-in-out;
        }

        .nightcap {
            position: absolute;
            width: 50px;
            height: 40px;
            background-color: #81d4fa;
            border-radius: 50px 50px 0 0;
            top: -25px;
            left: 30px;
            transform: rotate(-15deg);
            z-index: 15;
        }

        .nightcap-brim {
            position: absolute;
            width: 60px;
            height: 15px;
            background-color: white;
            border-radius: 10px;
            bottom: -5px;
            left: -5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .nightcap-tail {
            position: absolute;
            width: 20px;
            height: 35px;
            background-color: #81d4fa;
            border-radius: 0 0 20px 0;
            top: 25px;
            right: -10px;
            transform: rotate(30deg);
        }

        .nightcap-pom {
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: white;
            border-radius: 50%;
            top: 50px;
            right: -20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .pillow {
            position: absolute;
            width: 60px;
            height: 40px;
            background-color: #f8fafc;
            border-radius: 8px;
            border: 2px solid #cbd5e1;
            top: -40px;
            left: -20px;
            z-index: 12;
            box-shadow: inset -5px -5px 10px rgba(0,0,0,0.05), 0 4px 8px rgba(0,0,0,0.1);
            transform: rotate(-15deg);
        }

        .pillow::before, .pillow::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: #cbd5e1;
            border-radius: 50%;
        }

        .pillow::before { top: -3px; left: -3px; }
        .pillow::after { bottom: -3px; right: -3px; }

        .zzz-container {
            position: absolute;
            top: -50px;
            right: -10px;
            z-index: 20;
        }

        .z {
            position: absolute;
            font-weight: bold;
            color: #64748b;
            font-family: 'Comic Sans MS', 'Segoe Print', sans-serif;
            opacity: 0;
            animation: float-z 4s infinite ease-in-out;
        }

        .z-1 { font-size: 1.2rem; top: 0px; left: 0px; animation-delay: 0s; }
        .z-2 { font-size: 1.6rem; top: -25px; left: 15px; animation-delay: 1.3s; }
        .z-3 { font-size: 2rem; top: -55px; left: 35px; animation-delay: 2.6s; }

        .shadow {
            animation: shadow-pulse 6s ease-in-out infinite;
        }

        @keyframes monster-sleep { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        @keyframes mouth-breathe { 0% { transform: translateX(-50%) scale(1); } 100% { transform: translateX(-50%) scale(1.3); } }
        @keyframes float-z { 0% { transform: translateY(0) scale(0.8); opacity: 0; } 20% { opacity: 1; } 80% { opacity: 0.8; } 100% { transform: translateY(-40px) scale(1.3) translateX(20px); opacity: 0; } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">

                <div class="zzz-container">
                    <span class="z z-1">Z</span>
                    <span class="z z-2">z</span>
                    <span class="z z-3">z</span>
                </div>

                <div class="nightcap">
                    <div class="nightcap-brim"></div>
                    <div class="nightcap-tail"></div>
                    <div class="nightcap-pom"></div>
                </div>

                <div class="eyes">
                    <div class="eye"></div>
                    <div class="eye"></div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="pillow"></div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
