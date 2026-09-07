<?php
// 403 – Forbidden: Wächter-Monster mit Stoppschild.
return [
    'code' => '403',
    'og'   => '403',
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

        .stop-sign {
            position: absolute;
            width: 45px;
            height: 45px;
            background-color: #ff4d4f;
            border-radius: 50%;
            border: 3px solid white;
            top: -55px;
            left: -10px;
            z-index: 12;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .stop-sign::before {
            content: '';
            position: absolute;
            width: 25px;
            height: 6px;
            background-color: white;
            border-radius: 3px;
        }

        .stop-sign::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 40px;
            background-color: #8d6e63;
            border-radius: 3px;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
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
                    <div class="stop-sign"></div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
