<?php
// 400 – Bad Request: verwirrtes Monster mit Fragezeichen-Schild.
return [
    'code' => '400',
    'og'   => '400',
    'css'  => <<<'CSS'
        .mouth {
            width: 15px;
            height: 15px;
            border: 4px solid #333;
            border-radius: 50%;
            background-color: transparent;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .question-sign {
            position: absolute;
            width: 45px;
            height: 45px;
            background-color: #ffb300;
            border-radius: 8px;
            border: 3px solid white;
            top: -55px;
            left: -10px;
            z-index: 12;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            font-weight: bold;
        }

        .question-sign::before { content: '?'; }

        .question-sign::after {
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
                    <div class="question-sign"></div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
