<?php
// 402 – Payment Required: Monster hält ein Sparschwein hoch, Münzen fallen hinein.
return [
    'code' => '402',
    'og'   => '402',
    'css'  => <<<'CSS'
        .monster-stage {
            position: relative;
            width: 300px;
            height: 260px;
            margin: 0 auto 30px auto;
        }

        .monster {
            position: absolute;
            width: 180px;
            height: 180px;
            left: 5px;
            top: 40px;
            margin: 0;
            z-index: 10;
            animation: monster-bob-small 4s ease-in-out infinite;
        }

        .eyes { gap: 30px; }
        .eye { width: 35px; height: 35px; }
        .pupil { width: 18px; height: 18px; }

        .mouth {
            width: 26px;
            height: 13px;
            border: 3px solid #333;
            border-top: 0;
            border-radius: 0 0 50px 50px;
            position: absolute;
            bottom: 42px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Rechte Hand tätschelt das Sparschwein. */
        .hand { z-index: 13; }
        .hand-left { top: 120px; left: -12px; }
        .hand-right { top: 138px; right: -22px; }

        /* --- Sparschwein ---------------------------------------------------- */

        .piggy-bank {
            position: absolute;
            width: 130px;
            height: 85px;
            background-color: #90caf9;
            border-radius: 48% 48% 42% 42% / 58% 58% 44% 44%;
            bottom: -15px;
            right: 15px;
            z-index: 12;
            box-shadow: inset -8px -8px 16px rgba(0,0,0,0.12), 0 6px 12px rgba(0,0,0,0.15);
        }

        .piggy-bank::before { /* Glanzlicht */
            content: '';
            position: absolute;
            width: 34px;
            height: 16px;
            background-color: rgba(255,255,255,0.45);
            border-radius: 50%;
            top: 12px;
            left: 18px;
            transform: rotate(-20deg);
        }

        .shadow { /* Schatten unter dem (nach links versetzten) Monster */
            position: relative;
            left: -55px;
        }

        .piggy-slot {
            position: absolute;
            width: 34px;
            height: 6px;
            background-color: #37474f;
            border-radius: 3px;
            top: 5px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: inset 0 2px 3px rgba(0,0,0,0.6);
        }

        .piggy-ear {
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: inherit;
            border-radius: 60% 20% 60% 20%;
            top: -7px;
            right: 26px;
            transform: rotate(40deg);
            box-shadow: inset -2px -2px 4px rgba(0,0,0,0.1);
        }

        .piggy-eye {
            position: absolute;
            width: 9px;
            height: 9px;
            background-color: #37474f;
            border-radius: 50%;
            top: 24px;
            right: 26px;
        }

        .piggy-snout {
            position: absolute;
            width: 28px;
            height: 22px;
            background-color: #64b5f6;
            border-radius: 45%;
            top: 28px;
            right: -12px;
            box-shadow: inset -2px -3px 5px rgba(0,0,0,0.15);
        }

        .piggy-snout::before, .piggy-snout::after {
            content: '';
            position: absolute;
            width: 4px;
            height: 6px;
            background-color: #37474f;
            border-radius: 50%;
            top: 8px;
        }

        .piggy-snout::before { left: 7px; }
        .piggy-snout::after { right: 7px; }

        .piggy-tail {
            position: absolute;
            width: 16px;
            height: 16px;
            border: 4px solid #64b5f6;
            border-radius: 50%;
            border-bottom-color: transparent;
            left: -13px;
            top: 28px;
            transform: rotate(-40deg);
        }

        .piggy-leg {
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: #64b5f6;
            border-radius: 0 0 8px 8px;
            bottom: -9px;
        }

        .piggy-leg-left { left: 24px; }
        .piggy-leg-right { right: 30px; }

        /* --- Fallende Münzen ------------------------------------------------- */

        .coin {
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #fcd34d;
            border: 3px solid #f59e0b;
            border-radius: 50%;
            top: -20px;
            left: 207px;
            z-index: 13;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: bold;
            color: #b45309;
            box-shadow: inset -2px -2px 4px rgba(0,0,0,0.15), 0 2px 4px rgba(0,0,0,0.2);
            opacity: 0;
            box-sizing: border-box;
            animation: coin-fall 2.8s infinite ease-in;
        }

        .coin-1 { animation-delay: 0s; }
        .coin-2 { animation-delay: 0.9s; }
        .coin-3 { animation-delay: 1.8s; }

        @keyframes coin-fall {
            0%   { transform: translateY(0) rotateX(0deg); opacity: 0; }
            10%  { opacity: 1; }
            72%  { transform: translateY(189px) rotateX(540deg); opacity: 1; }
            82%  { transform: translateY(197px) rotateX(540deg) scaleY(0.4); opacity: 0.8; }
            100% { transform: translateY(202px) rotateX(540deg) scaleY(0.12); opacity: 0; }
        }

        @keyframes monster-bob-small {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster-stage">

                <div class="coin coin-1">$</div>
                <div class="coin coin-2">$</div>
                <div class="coin coin-3">$</div>

                <div class="monster">
                    <div class="eyes">
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>
                </div>

                <div class="piggy-bank">
                    <div class="piggy-slot"></div>
                    <div class="piggy-ear"></div>
                    <div class="piggy-eye"></div>
                    <div class="piggy-snout"></div>
                    <div class="piggy-tail"></div>
                    <div class="piggy-leg piggy-leg-left"></div>
                    <div class="piggy-leg piggy-leg-right"></div>
                </div>

            </div>

            <div class="shadow"></div>
HTML,
];
