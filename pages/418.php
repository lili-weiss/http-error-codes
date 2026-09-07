<?php
// 418 – I'm a Teapot: fröhliches Monster mit dampfender Teekanne.
return [
    'code' => '418',
    'og'   => '418',
    'css'  => <<<'CSS'
        .mouth {
            width: 30px;
            height: 15px;
            border: 4px solid #333;
            border-top: 0;
            border-radius: 0 0 50px 50px;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .teapot {
            position: absolute;
            width: 45px;
            height: 35px;
            background-color: #81d4fa;
            border-radius: 20px 20px 10px 10px;
            top: -25px;
            left: -15px;
            z-index: 12;
            box-shadow: inset -5px -5px 10px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.2);
        }

        .teapot::before {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border: 5px solid #81d4fa;
            border-top: transparent;
            border-right: transparent;
            border-radius: 0 0 0 15px;
            top: 8px;
            left: -12px;
            transform: rotate(15deg);
        }

        .teapot::after {
            content: '';
            position: absolute;
            width: 15px;
            height: 20px;
            border: 5px solid #81d4fa;
            border-left: transparent;
            border-radius: 0 15px 15px 0;
            top: 5px;
            right: -15px;
        }

        .teapot-lid {
            position: absolute;
            width: 26px;
            height: 10px;
            background-color: #4fc3f7;
            border-radius: 15px 15px 0 0;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .teapot-lid::before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: #0288d1;
            border-radius: 50%;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
        }

        .steam {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            top: 0px;
            left: -15px;
            filter: blur(2px);
            opacity: 0;
            animation: steam-rise 2s infinite ease-out;
        }

        @keyframes steam-rise { 0% { transform: translateY(0) scale(1); opacity: 0.8; } 100% { transform: translateY(-30px) scale(2.5); opacity: 0; } }
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
                    <div class="teapot">
                        <div class="teapot-lid"></div>
                        <div class="steam"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
