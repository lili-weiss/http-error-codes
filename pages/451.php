<?php
// 451 – Unavailable For Legal Reasons: Monster mit Richterhammer.
return [
    'code' => '451',
    'og'   => '451',
    'css'  => <<<'CSS'
        .mouth {
            width: 25px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 10px;
            position: absolute;
            bottom: 45px;
            left: 50%;
            transform: translateX(-50%);
        }

        .gavel {
            position: absolute;
            width: 45px;
            height: 20px;
            top: -45px;
            left: -10px;
            z-index: 12;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gavel-head {
            position: absolute;
            width: 45px;
            height: 20px;
            background-color: #5d4037;
            border-radius: 5px;
            box-shadow: inset 0 3px 5px rgba(255,255,255,0.2), 0 3px 5px rgba(0,0,0,0.3);
        }

        .gavel-head::before, .gavel-head::after {
            content: '';
            position: absolute;
            width: 4px;
            height: 22px;
            background-color: #ffca28;
            top: -1px;
            border-radius: 2px;
        }

        .gavel-head::before { left: 8px; }
        .gavel-head::after { right: 8px; }

        .gavel::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 45px;
            background-color: #8d6e63;
            border-radius: 4px;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
            box-shadow: inset 2px 0 5px rgba(0,0,0,0.2);
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>
                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="gavel">
                        <div class="gavel-head"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
