<?php
// 405 – Method Not Allowed: Türsteher-Monster mit verschränkten Armen hinter rotem Absperrseil.
return [
    'code' => '405',
    'og'   => '405',
    'css'  => <<<'CSS'
        .monster-stage {
            position: relative;
            width: 280px;
            height: 250px;
            margin: 0 auto 30px auto;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .monster {
            margin: 25px 0 0 0;
            z-index: 5;
            animation: head-shake 3s ease-in-out infinite;
        }

        .eyebrow {
            position: absolute;
            width: 25px;
            height: 5px;
            background-color: #333;
            border-radius: 3px;
            top: -12px;
            z-index: 2;
        }

        .eyebrow-left { left: 55px; transform: rotate(20deg); }
        .eyebrow-right { right: 55px; transform: rotate(-20deg); }

        .mouth {
            width: 28px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 10px;
            position: absolute;
            bottom: 68px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Verschränkte Arme */
        .arm {
            position: absolute;
            width: 75px;
            height: 22px;
            background-color: #ff99cc;
            border: 2px solid rgba(0,0,0,0.1);
            border-radius: 12px;
            top: 150px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .arm-left { left: 30px; transform: rotate(18deg); z-index: 12; }
        .arm-right { right: 30px; transform: rotate(-18deg); z-index: 13; }

        /* --- Absperrung (Pfosten + rotes Seil) ------------------------------- */

        .post {
            position: absolute;
            width: 10px;
            height: 70px;
            background-color: #fbbf24;
            border-radius: 5px;
            bottom: 0;
            z-index: 12;
            box-shadow: inset -2px 0 4px rgba(0,0,0,0.2);
        }

        .post::before { /* goldene Kugel oben */
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: #f59e0b;
            border-radius: 50%;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: inset -2px -2px 4px rgba(0,0,0,0.2);
        }

        .post::after { /* Standfuß */
            content: '';
            position: absolute;
            width: 32px;
            height: 8px;
            background-color: #f59e0b;
            border-radius: 4px;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .post-left { left: 30px; }
        .post-right { right: 30px; }

        .rope {
            position: absolute;
            width: 180px;
            height: 34px;
            border: none;
            border-bottom: 8px solid #e53e3e;
            border-radius: 0 0 50% 50%;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 12;
            animation: rope-swing 3s ease-in-out infinite;
            transform-origin: top center;
        }

        @keyframes head-shake {
            0%, 40%, 100% { transform: translateX(0); }
            50% { transform: translateX(-7px); }
            60% { transform: translateX(6px); }
            70% { transform: translateX(-4px); }
            80% { transform: translateX(2px); }
        }

        @keyframes rope-swing {
            0%, 40%, 100% { transform: translateX(-50%) scaleY(1); }
            60% { transform: translateX(-50%) scaleY(1.08); }
            80% { transform: translateX(-50%) scaleY(0.97); }
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster-stage">

                <div class="monster">
                    <div class="eyes">
                        <div class="eyebrow eyebrow-left"></div>
                        <div class="eyebrow eyebrow-right"></div>
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="arm arm-left"></div>
                    <div class="arm arm-right"></div>
                </div>

                <div class="post post-left"></div>
                <div class="post post-right"></div>
                <div class="rope"></div>

            </div>

            <div class="shadow"></div>
HTML,
];
