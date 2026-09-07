<?php
// 508 – Loop Detected: rennendes Monster im Hamsterrad.
return [
    'code' => '508',
    'og'   => '508',
    'css'  => <<<'CSS'
        .animation-stage {
            position: relative;
            width: 280px;
            height: 280px;
            margin: 0 auto 15px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hamster-wheel {
            position: absolute;
            width: 260px;
            height: 260px;
            border: 12px solid #cbd5e1;
            border-radius: 50%;
            z-index: 1;
            box-sizing: border-box;
            animation: spin-wheel 1s linear infinite;
        }

        .wheel-spoke {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 6px;
            background-color: #cbd5e1;
            transform-origin: center;
            margin-top: -3px;
        }

        .spoke-1 { transform: rotate(0deg); }
        .spoke-2 { transform: rotate(45deg); }
        .spoke-3 { transform: rotate(90deg); }
        .spoke-4 { transform: rotate(135deg); }

        .wheel-stand {
            position: absolute;
            bottom: -5px;
            width: 160px;
            height: 12px;
            background-color: #94a3b8;
            border-radius: 10px;
            z-index: 0;
        }

        .stand-leg {
            position: absolute;
            width: 12px;
            height: 140px;
            background-color: #94a3b8;
            bottom: -5px;
            z-index: 0;
            border-radius: 6px;
        }

        .stand-leg-left { left: 40px; transform: rotate(-30deg); transform-origin: bottom center; }
        .stand-leg-right { right: 40px; transform: rotate(30deg); transform-origin: bottom center; }

        .monster {
            width: 180px;
            height: 180px;
            margin: 0;
            animation: run-bob 0.3s ease-in-out infinite;
            z-index: 10;
        }

        .sweat-drop {
            position: absolute;
            width: 10px;
            height: 15px;
            background-color: #81d4fa;
            border-radius: 0 50% 50% 50%;
            z-index: 15;
        }

        .sweat-1 { top: 20px; right: 20px; animation: fly-sweat-1 0.6s infinite linear; }
        .sweat-2 { top: 40px; left: 10px; animation: fly-sweat-2 0.8s infinite linear; }

        .eyes { top: 50px; }
        .eye { width: 35px; height: 35px; }
        .pupil { width: 18px; height: 18px; }

        .mouth {
            width: 18px;
            height: 24px;
            background-color: #333;
            border: none;
            border-radius: 40% 40% 60% 60%;
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: pant 0.3s infinite alternate;
        }

        .hand {
            width: 25px;
            height: 25px;
            z-index: 13;
        }

        .hand-left { left: -10px; animation: pump-arm-l 0.3s infinite alternate; }
        .hand-right { right: -10px; animation: pump-arm-r 0.3s infinite alternate; }

        .leg {
            position: absolute;
            width: 25px;
            height: 35px;
            background-color: #ff99cc;
            border-radius: 12px;
            bottom: -20px;
            z-index: -1;
            border: 2px solid rgba(0,0,0,0.1);
            box-shadow: inset 0 -3px 5px rgba(0,0,0,0.1);
        }

        .leg-left { left: 40px; transform-origin: top center; animation: pump-leg-l 0.3s infinite alternate; }
        .leg-right { right: 40px; transform-origin: top center; animation: pump-leg-r 0.3s infinite alternate; }

        .shadow {
            width: 180px;
            margin: 0 auto 30px auto;
            animation: shadow-fast 0.3s ease-in-out infinite alternate;
        }

        @keyframes run-bob { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        @keyframes shadow-fast { 0% { transform: scale(1); opacity: 0.1; } 100% { transform: scale(0.9); opacity: 0.05; } }
        @keyframes spin-wheel { 100% { transform: rotate(360deg); } }
        @keyframes pump-arm-l { 0% { top: 80px; } 100% { top: 110px; } }
        @keyframes pump-arm-r { 0% { top: 110px; } 100% { top: 80px; } }
        @keyframes pump-leg-l { 0% { transform: rotate(35deg) translateY(-5px); } 100% { transform: rotate(-35deg) translateY(0); } }
        @keyframes pump-leg-r { 0% { transform: rotate(-35deg) translateY(0); } 100% { transform: rotate(35deg) translateY(-5px); } }
        @keyframes fly-sweat-1 { 0% { transform: translate(0, 0) rotate(45deg); opacity: 1; } 100% { transform: translate(40px, -30px) rotate(45deg); opacity: 0; } }
        @keyframes fly-sweat-2 { 0% { transform: translate(0, 0) rotate(-45deg); opacity: 1; } 100% { transform: translate(-30px, -20px) rotate(-45deg); opacity: 0; } }
        @keyframes pant { 0% { transform: translateX(-50%) scale(1); } 100% { transform: translateX(-50%) scale(1.1); } }
CSS,
    'scene' => <<<'HTML'
            <div class="animation-stage">

                <div class="stand-leg stand-leg-left"></div>
                <div class="stand-leg stand-leg-right"></div>
                <div class="wheel-stand"></div>

                <div class="hamster-wheel">
                    <div class="wheel-spoke spoke-1"></div>
                    <div class="wheel-spoke spoke-2"></div>
                    <div class="wheel-spoke spoke-3"></div>
                    <div class="wheel-spoke spoke-4"></div>
                </div>

                <div class="monster">
                    <div class="sweat-drop sweat-1"></div>
                    <div class="sweat-drop sweat-2"></div>

                    <div class="eyes">
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>

                    <div class="leg leg-left"></div>
                    <div class="leg leg-right"></div>
                </div>

            </div>

            <div class="shadow"></div>
HTML,
];
