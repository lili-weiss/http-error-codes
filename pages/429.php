<?php
// 429 – Too Many Requests: überfordertes Monster mit Stoppuhr im Briefregen.
return [
    'code' => '429',
    'og'   => '429',
    'css'  => <<<'CSS'
        .envelope {
            position: absolute;
            width: 36px;
            height: 24px;
            background-color: #f8fafc;
            border: 2px solid #cbd5e1;
            border-radius: 3px;
            z-index: 1;
            opacity: 0;
            animation: envelope-rain linear infinite;
        }

        .envelope::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-top: 10px solid #cbd5e1;
        }

        .sweat-drop {
            position: absolute;
            width: 12px;
            height: 18px;
            background-color: #81d4fa;
            border-radius: 0 50% 50% 50%;
            transform: rotate(45deg);
            top: 25px;
            right: 45px;
            animation: sweat-pulse 2s infinite ease-in-out;
        }

        .mouth {
            width: 18px;
            height: 12px;
            background-color: #333;
            border: none;
            border-radius: 40%;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .stopwatch {
            position: absolute;
            width: 35px;
            height: 45px;
            top: -50px;
            left: -5px;
            z-index: 12;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stopwatch-button {
            width: 10px;
            height: 6px;
            background-color: #94a3b8;
            border-radius: 3px 3px 0 0;
            border: 2px solid #334155;
            border-bottom: none;
        }

        .stopwatch-body {
            width: 35px;
            height: 35px;
            background-color: #f1f5f9;
            border-radius: 50%;
            border: 3px solid #334155;
            position: relative;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            box-sizing: border-box;
        }

        .stopwatch-body::after {
            content: '';
            position: absolute;
            width: 2px;
            height: 12px;
            background-color: #ef4444;
            bottom: 50%;
            left: 50%;
            transform-origin: bottom center;
            border-radius: 2px;
            animation: tick-tock 1.5s infinite steps(12);
        }

        @keyframes sweat-pulse { 0%, 100% { transform: rotate(45deg) scale(1); opacity: 0.7; } 50% { transform: rotate(45deg) scale(1.1); opacity: 1; } }
        @keyframes tick-tock { 0% { transform: translateX(-50%) rotate(0deg); } 100% { transform: translateX(-50%) rotate(360deg); } }
        @keyframes envelope-rain { 0% { transform: translateY(-20vh) rotate(-15deg); opacity: 0; } 10% { opacity: 0.6; } 90% { opacity: 0.6; } 100% { transform: translateY(110vh) rotate(15deg); opacity: 0; } }
CSS,
    'background_extra' => <<<'HTML'
        <div class="envelope" style="left: 10%; animation-duration: 4s; animation-delay: 0s;"></div>
        <div class="envelope" style="left: 25%; animation-duration: 5s; animation-delay: 2s;"></div>
        <div class="envelope" style="left: 45%; animation-duration: 3.5s; animation-delay: 1s;"></div>
        <div class="envelope" style="left: 70%; animation-duration: 4.5s; animation-delay: 3s;"></div>
        <div class="envelope" style="left: 85%; animation-duration: 6s; animation-delay: 0.5s;"></div>
        <div class="envelope" style="left: 15%; animation-duration: 4.2s; animation-delay: 4s;"></div>
HTML,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="sweat-drop"></div>

                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="stopwatch">
                        <div class="stopwatch-button"></div>
                        <div class="stopwatch-body"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
