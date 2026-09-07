<?php
// 422 – Unprocessable Content: Monster hämmert eckigen Klotz in rundes Loch.
return [
    'code' => '422',
    'og'   => '422',
    'css'  => <<<'CSS'
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
        .eyebrow-right { right: 60px; transform: rotate(-20deg); }

        .mouth {
            width: 22px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 5px;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%) rotate(-10deg);
        }

        .hand {
            z-index: 13;
        }

        .hand-left { top: 130px; left: 45px; z-index: 14; }
        .hand-right { top: 120px; right: 25px; }

        .shape-sorter {
            position: absolute;
            width: 140px;
            height: 40px;
            background-color: #fcd34d;
            border: 4px solid #fbbf24;
            border-radius: 8px;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 11;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        .shape-sorter::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #451a03;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.8);
        }

        .square-block {
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: #60a5fa;
            border: 3px solid #2563eb;
            border-radius: 5px;
            bottom: 20px;
            left: 50%;
            z-index: 12;
            transform: translateX(-50%);
            animation: block-shake 0.8s infinite ease-in-out;
        }

        .hammer-wrapper {
            position: absolute;
            bottom: 10px;
            left: 5px;
            transform-origin: bottom center;
            animation: hammer-swing 0.8s infinite ease-in-out;
            z-index: 15;
        }

        .hammer-handle {
            width: 8px;
            height: 45px;
            background-color: #8d6e63;
            border-radius: 4px;
            margin: 0 auto;
        }

        .hammer-head {
            width: 40px;
            height: 22px;
            background-color: #94a3b8;
            border-radius: 4px;
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: inset 0 3px 5px rgba(255,255,255,0.4), 0 3px 5px rgba(0,0,0,0.2);
        }

        @keyframes hammer-swing { 0%, 20% { transform: rotate(50deg); } 50% { transform: rotate(-50deg); } 80%, 100% { transform: rotate(50deg); } }
        @keyframes block-shake { 0%, 45% { transform: translateX(-50%) translateY(0); } 50% { transform: translateX(-50%) translateY(4px); } 55%, 100% { transform: translateX(-50%) translateY(0); } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eyebrow eyebrow-left"></div>
                    <div class="eyebrow eyebrow-right"></div>
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="hammer-wrapper">
                        <div class="hammer-head"></div>
                        <div class="hammer-handle"></div>
                    </div>
                </div>

                <div class="square-block"></div>

                <div class="shape-sorter"></div>
            </div>
            <div class="shadow"></div>
HTML,
];
