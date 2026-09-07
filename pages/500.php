<?php
// 500 – Internal Server Error: ratloses Monster vor rauchendem Server-Rack.
return [
    'code' => '500',
    'og'   => '500',
    'css'  => <<<'CSS'
        .main-wrapper {
            padding: 40px 20px;
        }

        .error-container {
            max-width: 550px;
            width: 100%;
        }

        .scene-wrapper {
            position: relative;
            width: 280px;
            height: 220px;
            margin: 0 auto 30px auto;
        }

        .server-rack {
            position: absolute;
            width: 100px;
            height: 160px;
            background-color: #475569;
            border-radius: 8px;
            border: 4px solid #334155;
            bottom: 10px;
            left: 10px;
            z-index: 5;
            box-shadow: inset -10px 0 20px rgba(0,0,0,0.2), 5px 5px 15px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 15px;
            box-sizing: border-box;
        }

        .server-slot {
            width: 70%;
            height: 12px;
            background-color: #1e293b;
            margin-bottom: 15px;
            border-radius: 2px;
            display: flex;
            align-items: center;
            padding: 0 4px;
            box-sizing: border-box;
        }

        .server-light {
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #ef4444;
            margin-right: 4px;
            box-shadow: 0 0 4px #ef4444;
        }

        .server-light.blink { animation: blink-light 0.5s infinite alternate; }
        .server-light.blink-fast { animation: blink-light 0.15s infinite alternate; }

        .smoke-container {
            position: absolute;
            top: -50px;
            left: 10px;
            width: 60px;
            height: 60px;
            z-index: 1;
        }

        .smoke-puff {
            position: absolute;
            background-color: rgba(148, 163, 184, 0.7);
            border-radius: 50%;
            filter: blur(3px);
            animation: smoke-rise 3s infinite ease-in;
        }

        .smoke-1 { width: 30px; height: 30px; left: 0; bottom: 0; animation-delay: 0s; }
        .smoke-2 { width: 40px; height: 40px; left: 15px; bottom: -10px; animation-delay: 1s; }
        .smoke-3 { width: 25px; height: 25px; left: 35px; bottom: 5px; animation-delay: 2s; }

        .monster {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 0;
            z-index: 10;
        }

        .question-mark {
            position: absolute;
            font-size: 3rem;
            font-weight: bold;
            color: #f59e0b;
            top: -25px;
            right: 15px;
            z-index: 12;
            text-shadow: 2px 2px 0px white;
            animation: float-question 2s infinite ease-in-out;
        }

        .mouth {
            width: 14px;
            height: 14px;
            background-color: transparent;
            border: 3px solid #333;
            border-radius: 50%;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hand-left { left: -10px; top: 110px; }
        .hand-right { right: -5px; top: 30px; }

        .shadow {
            position: absolute;
            bottom: -15px;
            right: 25px;
            margin: 0;
            z-index: 1;
        }

        @keyframes blink-light { 0% { opacity: 0.2; } 100% { opacity: 1; } }
        @keyframes smoke-rise { 0% { transform: translateY(0) scale(1); opacity: 0.8; } 100% { transform: translateY(-50px) scale(2); opacity: 0; } }
        @keyframes float-question { 0%, 100% { transform: translateY(0) rotate(10deg); } 50% { transform: translateY(-10px) rotate(15deg); } }
CSS,
    'scene' => <<<'HTML'
            <div class="scene-wrapper">

                <div class="server-rack">
                    <div class="smoke-container">
                        <div class="smoke-puff smoke-1"></div>
                        <div class="smoke-puff smoke-2"></div>
                        <div class="smoke-puff smoke-3"></div>
                    </div>
                    <div class="server-slot"><div class="server-light"></div></div>
                    <div class="server-slot"><div class="server-light blink"></div></div>
                    <div class="server-slot"><div class="server-light"></div><div class="server-light blink-fast"></div></div>
                </div>

                <div class="monster">
                    <div class="question-mark">?</div>

                    <div class="eyes">
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>
                </div>

                <div class="shadow"></div>
            </div>
HTML,
];
