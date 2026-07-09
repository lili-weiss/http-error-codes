<?php
// 503 – Service Unavailable: Bau-Monster mit Helm und Pylone.
return [
    'code' => '503',
    'og'   => '503',
    'css'  => <<<'CSS'
        .monster {
            margin: 20px auto 30px auto;
        }

        .mouth {
            width: 20px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 10px;
            position: absolute;
            bottom: 45px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hardhat {
            position: absolute;
            width: 90px;
            height: 45px;
            background-color: #ffeb3b;
            border-radius: 45px 45px 0 0;
            top: -30px;
            left: 50%;
            transform: translateX(-50%) rotate(-5deg);
            z-index: 15;
            box-shadow: inset -5px -5px 10px rgba(0,0,0,0.1), 0 5px 10px rgba(0,0,0,0.1);
        }

        .hardhat::after {
            content: '';
            position: absolute;
            width: 110px;
            height: 10px;
            background-color: #fbc02d;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
        }

        .hardhat::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 12px;
            background-color: #fbc02d;
            border-radius: 6px 6px 0 0;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
        }

        .cone-wrapper {
            position: absolute;
            top: -45px;
            left: -3px;
            z-index: 12;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cone-body {
            width: 26px;
            height: 40px;
            background: linear-gradient(to bottom, #ff7043 0%, #ff7043 30%, #ffffff 30%, #ffffff 55%, #ff7043 55%, #ff7043 100%);
            clip-path: polygon(30% 0, 70% 0, 100% 100%, 0% 100%);
        }

        .cone-base {
            width: 36px;
            height: 6px;
            background-color: #d84315;
            border-radius: 3px;
            margin-top: -1px;
            box-shadow: 0 3px 5px rgba(0,0,0,0.2);
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="hardhat"></div>

                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>
                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="cone-wrapper">
                        <div class="cone-body"></div>
                        <div class="cone-base"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
