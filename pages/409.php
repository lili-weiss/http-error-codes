<?php
// 409 – Conflict: zwei kleine Monster zerren an demselben Dokument (Tauziehen).
return [
    'code' => '409',
    'og'   => '409',
    'css'  => <<<'CSS'
        .monster-stage {
            position: relative;
            width: 300px;
            height: 220px;
            margin: 0 auto 30px auto;
        }

        .monster {
            width: 110px;
            height: 110px;
            margin: 0;
            position: absolute;
            bottom: 20px;
            animation: none;
            transform-origin: bottom center;
        }

        .monster-a {
            left: 10px;
            z-index: 10;
            animation: tug-a 2s ease-in-out infinite;
        }

        .monster-b {
            right: 10px;
            z-index: 10;
            background-color: #b39ddb;
            box-shadow: 0 10px 20px rgba(179, 157, 219, 0.4);
            animation: tug-b 2s ease-in-out infinite;
        }

        .eyes { top: 28px; gap: 10px; }
        .eye { width: 24px; height: 24px; }
        .pupil { width: 12px; height: 12px; }

        .eyebrow {
            position: absolute;
            width: 16px;
            height: 4px;
            background-color: #333;
            border-radius: 2px;
            top: -8px;
            z-index: 2;
        }

        .eyebrow-left { left: 24px; transform: rotate(20deg); }
        .eyebrow-right { right: 24px; transform: rotate(-20deg); }

        .mouth {
            width: 16px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 8px;
            position: absolute;
            bottom: 26px;
            left: 50%;
            transform: translateX(-50%) rotate(-8deg);
        }

        .hand {
            width: 20px;
            height: 20px;
            top: 60px;
            z-index: 12;
        }

        .monster-b .hand { background-color: #b39ddb; }

        /* jeweils nur die Hand zur Mitte hin greift das Dokument */
        .monster-a .hand-left { display: none; }
        .monster-a .hand-right { right: -12px; }
        .monster-b .hand-right { display: none; }
        .monster-b .hand-left { left: -12px; }

        /* --- Das umkämpfte Dokument ------------------------------------------ */

        .document {
            position: absolute;
            width: 50px;
            height: 64px;
            background-color: #f8fafc;
            border: 3px solid #cbd5e1;
            border-radius: 4px;
            bottom: 70px;
            left: 50%;
            margin-left: -28px;
            z-index: 11;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            animation: doc-tug 2s ease-in-out infinite;
        }

        .document::before, .document::after {
            content: '';
            position: absolute;
            left: 8px;
            right: 8px;
            height: 5px;
            background-color: #cbd5e1;
            border-radius: 2px;
        }

        .document::before { top: 12px; }
        .document::after { top: 26px; box-shadow: 0 14px 0 #cbd5e1; }

        .clash {
            position: absolute;
            font-size: 1.6rem;
            font-weight: bold;
            color: #f59e0b;
            z-index: 12;
            text-shadow: 1px 1px 0 white;
            animation: clash-pulse 1s infinite ease-in-out;
        }

        .clash-1 { top: 15px; left: 108px; transform: rotate(-15deg); }
        .clash-2 { top: 5px; right: 108px; transform: rotate(15deg); animation-delay: 0.5s; }

        @keyframes tug-a { 0%, 100% { transform: rotate(-10deg); } 50% { transform: rotate(-2deg); } }
        @keyframes tug-b { 0%, 100% { transform: rotate(2deg); } 50% { transform: rotate(10deg); } }
        @keyframes doc-tug {
            0%, 100% { transform: translateX(-8px) rotate(-5deg); }
            50% { transform: translateX(8px) rotate(5deg); }
        }
        @keyframes clash-pulse { 0%, 100% { opacity: 0.3; } 50% { opacity: 1; } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster-stage">

                <span class="clash clash-1">!</span>
                <span class="clash clash-2">!</span>

                <div class="monster monster-a">
                    <div class="eyes">
                        <div class="eyebrow eyebrow-left"></div>
                        <div class="eyebrow eyebrow-right"></div>
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>
                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>
                </div>

                <div class="document"></div>

                <div class="monster monster-b">
                    <div class="eyes">
                        <div class="eyebrow eyebrow-left"></div>
                        <div class="eyebrow eyebrow-right"></div>
                        <div class="eye"><div class="pupil"></div></div>
                        <div class="eye"><div class="pupil"></div></div>
                    </div>
                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>
                </div>

            </div>

            <div class="shadow"></div>
HTML,
];
