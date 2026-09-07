<?php
// 410 – Gone: Monster mit gepacktem Koffer winkt zum Abschied (mit Abschiedsträne).
return [
    'code' => '410',
    'og'   => '410',
    'css'  => <<<'CSS'
        .monster {
            margin: 30px auto 30px auto;
        }

        .mouth {
            width: 22px;
            height: 11px;
            border: 3px solid #333;
            border-top: 0;
            border-radius: 0 0 50px 50px;
            position: absolute;
            bottom: 44px;
            left: 50%;
            transform: translateX(-50%);
        }

        .tear {
            position: absolute;
            width: 10px;
            height: 15px;
            background-color: #81d4fa;
            border-radius: 0 50% 50% 50%;
            transform: rotate(45deg);
            top: 105px;
            left: 62px;
            z-index: 3;
            animation: tear-drop 3s infinite ease-in;
        }

        /* Winkende Hand */
        .hand-left {
            top: 25px;
            left: -18px;
            transform-origin: bottom right;
            animation: wave-goodbye 1.2s infinite alternate ease-in-out;
        }

        .hand-right { top: 115px; right: -12px; z-index: 13; }

        /* --- Koffer ----------------------------------------------------------- */

        .suitcase {
            position: absolute;
            width: 75px;
            height: 55px;
            background-color: #a1887f;
            border: 3px solid #6d4c41;
            border-radius: 8px;
            top: 18px;
            left: -25px;
            z-index: 12;
            box-shadow: inset -5px -5px 10px rgba(0,0,0,0.15), 0 5px 10px rgba(0,0,0,0.2);
        }

        .suitcase::before { /* Griff */
            content: '';
            position: absolute;
            width: 26px;
            height: 14px;
            border: 4px solid #6d4c41;
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            top: -16px;
            left: 50%;
            transform: translateX(-50%);
        }

        .suitcase::after { /* Gurt */
            content: '';
            position: absolute;
            width: 100%;
            height: 8px;
            background-color: #6d4c41;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border-radius: 2px;
        }

        .suitcase-sticker {
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: #fcd34d;
            border-radius: 50%;
            top: 6px;
            right: 8px;
            z-index: 2;
            transform: rotate(12deg);
            box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .suitcase-sticker::before {
            content: '✈';
            position: absolute;
            font-size: 11px;
            color: #b45309;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes wave-goodbye { 0% { transform: rotate(-15deg); } 100% { transform: rotate(35deg); } }
        @keyframes tear-drop {
            0%, 55% { transform: rotate(45deg) translate(0, 0); opacity: 0; }
            60% { opacity: 1; }
            100% { transform: rotate(45deg) translate(28px, 28px); opacity: 0; }
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>

                <div class="tear"></div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="suitcase">
                        <div class="suitcase-sticker"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
