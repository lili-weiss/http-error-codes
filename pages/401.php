<?php
// 401 – Unauthorized: Monster mit goldenem Login-Schlüssel.
return [
    'code' => '401',
    'og'   => '401',
    'css'  => <<<'CSS'
        .pupil {
            width: 22px;
            height: 22px;
            background-color: #333;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: transform 0.1s ease-out;
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

        .golden-key {
            position: absolute;
            top: -45px;
            left: -20px;
            transform: rotate(-35deg);
            z-index: 12;
            width: 70px;
            height: 35px;
        }

        .key-bow {
            position: absolute;
            width: 24px;
            height: 24px;
            border: 5px solid #fbbf24;
            border-radius: 50%;
            left: 0;
            top: 0;
            box-shadow: 0 3px 5px rgba(0,0,0,0.1);
        }

        .key-shaft {
            position: absolute;
            width: 35px;
            height: 6px;
            background-color: #fbbf24;
            left: 28px;
            top: 14px;
            border-radius: 0 3px 3px 0;
            box-shadow: 0 3px 5px rgba(0,0,0,0.1);
        }

        .key-teeth-1 {
            position: absolute;
            width: 6px;
            height: 12px;
            background-color: #fbbf24;
            left: 45px;
            top: 20px;
            border-radius: 0 0 2px 2px;
        }

        .key-teeth-2 {
            position: absolute;
            width: 6px;
            height: 8px;
            background-color: #fbbf24;
            left: 55px;
            top: 20px;
            border-radius: 0 0 2px 2px;
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
                    <div class="golden-key">
                        <div class="key-bow"></div>
                        <div class="key-shaft"></div>
                        <div class="key-teeth-1"></div>
                        <div class="key-teeth-2"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
