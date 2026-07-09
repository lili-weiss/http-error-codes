<?php
// 413 – Content Too Large: gestauchtes Monster unter schwerem Paket.
return [
    'code' => '413',
    'og'   => '413',
    'css'  => <<<'CSS'
        .monster {
            width: 200px;
            height: 180px;
            border-radius: 50% 50% 60% 60% / 30% 30% 70% 70%;
            margin: 120px auto 30px auto;
            box-shadow: 0 15px 25px rgba(255, 153, 204, 0.5);
            animation: struggle-shake 0.4s infinite alternate;
        }

        .sweat-drop {
            position: absolute;
            width: 14px;
            height: 22px;
            background-color: #81d4fa;
            border-radius: 0 50% 50% 50%;
            transform: rotate(45deg);
            top: 25px;
            right: 35px;
            animation: sweat-pulse 2s infinite ease-in-out;
        }

        .eyes { top: 50px; }

        .mouth {
            width: 35px;
            height: 10px;
            border: 4px solid #333;
            border-radius: 10px;
            background-color: transparent;
            position: absolute;
            bottom: 35px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hand {
            width: 35px;
            height: 35px;
            border: 2px solid rgba(0,0,0,0.15);
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            top: -5px;
        }

        .hand-left { left: 15px; }
        .hand-right { right: 15px; }

        .heavy-package {
            position: absolute;
            width: 260px;
            height: 140px;
            background-color: #d7ccc8;
            border: 4px solid #8d6e63;
            border-radius: 8px;
            top: -135px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 12;
            box-shadow: inset 0 -10px 20px rgba(0,0,0,0.1), 0 10px 15px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .heavy-package::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 25px;
            background-color: #bcaaa4;
            border-top: 2px dashed #8d6e63;
            border-bottom: 2px dashed #8d6e63;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }

        .heavy-package::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 25px;
            background-color: #bcaaa4;
            border-left: 2px dashed #8d6e63;
            border-right: 2px dashed #8d6e63;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .heavy-label {
            position: absolute;
            background-color: #ef5350;
            color: white;
            font-size: 14px;
            font-weight: 900;
            padding: 4px 12px;
            border-radius: 3px;
            top: 15px;
            right: 15px;
            transform: rotate(12deg);
            z-index: 13;
            letter-spacing: 1px;
            box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }

        .shadow {
            width: 160px;
            height: 25px;
            background-color: rgba(0, 0, 0, 0.15);
            margin: -10px auto 30px auto;
            animation: shadow-heavy 0.4s infinite alternate;
        }

        @keyframes struggle-shake { 0% { transform: translateY(5px) rotate(-1deg); } 100% { transform: translateY(8px) rotate(1deg); } }
        @keyframes shadow-heavy { 0% { transform: scale(1.05); opacity: 0.2; } 100% { transform: scale(1.1); opacity: 0.25; } }
        @keyframes sweat-pulse { 0%, 100% { transform: rotate(45deg) scale(1); opacity: 0.7; } 50% { transform: rotate(45deg) scale(1.1); opacity: 1; } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="sweat-drop"></div>

                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right"></div>

                <div class="heavy-package">
                    <div class="heavy-label">HEAVY</div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
