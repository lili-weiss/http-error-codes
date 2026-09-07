<?php
// 504 – Gateway Timeout: gelangweiltes Monster mit Sanduhr (mit Flip-Animation).
return [
    'code' => '504',
    'og'   => '504',
    'css'  => <<<'CSS'
        .eyelid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 18px;
            background-color: #ff99cc;
            border-bottom: 3px solid #333;
            z-index: 2;
        }

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

        .hand {
            z-index: 13;
        }

        .hand-left { top: 110px; left: -15px; }
        .hand-right { top: 110px; right: -15px; animation: hand-flip 6s infinite; }

        .hourglass {
            position: absolute;
            top: -65px;
            left: -10px;
            width: 40px;
            height: 65px;
            z-index: 15;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform-origin: center center;
            animation: hourglass-flip 6s infinite;
        }

        .hg-wood {
            width: 40px;
            height: 6px;
            background-color: #8d6e63;
            border-radius: 3px;
            border: 1px solid #5d4037;
            z-index: 2;
        }

        .hg-glass-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -2px;
            margin-bottom: -2px;
        }

        .hg-glass-top, .hg-glass-bottom {
            width: 30px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0.4);
            border: 2px solid #b0bec5;
            position: relative;
            overflow: hidden;
            box-shadow: inset -3px -3px 5px rgba(255,255,255,0.6);
        }

        .hg-glass-top { border-radius: 5px 5px 15px 15px; border-bottom: none; }
        .hg-glass-bottom { border-radius: 15px 15px 5px 5px; border-top: none; }

        .hg-sand-top {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fcd34d;
            border-radius: 0 0 3px 3px;
            animation: sand-drain 6s infinite;
        }

        .hg-sand-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fcd34d;
            border-radius: 0 0 3px 3px;
            animation: sand-fill 6s infinite;
        }

        .hg-sand-stream {
            position: absolute;
            width: 2px;
            background-color: #fcd34d;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            animation: sand-stream-anim 6s infinite;
        }

        /* 1. Sanduhr fliegt hoch und Drehung 180 Grad */
        @keyframes hourglass-flip {
            0%, 65% { transform: translateY(0) rotate(0deg); }
            72% { transform: translateY(-15px) rotate(90deg); }
            80%, 99.9% { transform: translateY(0) rotate(180deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        /* 2. Hand Monster wippt */
        @keyframes hand-flip {
            0%, 65% { transform: translateY(0); }
            72% { transform: translateY(-8px); }
            80%, 100% { transform: translateY(0); }
        }

        /* 3. Oberer Sand leert sich */
        @keyframes sand-drain {
            0%, 5% { height: 100%; }
            60%, 99.9% { height: 0%; }
            100% { height: 100%; }
        }

        /* 4. Unterer Sand füllt sich */
        @keyframes sand-fill {
            0%, 5% { height: 0%; }
            60%, 99.9% { height: 100%; }
            100% { height: 0%; }
        }

        /* 5. Sandstrahl Mitte */
        @keyframes sand-stream-anim {
            0%, 5% { opacity: 0; height: 0; top: 25px; }
            10% { opacity: 1; height: 30px; top: 25px; }
            55% { opacity: 1; height: 30px; top: 25px; }
            60% { opacity: 0; height: 0; top: 55px; }
            100% { opacity: 0; height: 0; }
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eye">
                        <div class="eyelid"></div>
                        <div class="pupil" id="pupil-left"></div>
                    </div>
                    <div class="eye">
                        <div class="eyelid"></div>
                        <div class="pupil" id="pupil-right"></div>
                    </div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>

                <div class="hand hand-right">
                    <div class="hourglass">
                        <div class="hg-wood"></div>
                        <div class="hg-glass-container">
                            <div class="hg-glass-top">
                                <div class="hg-sand-top"></div>
                            </div>
                            <div class="hg-sand-stream"></div>
                            <div class="hg-glass-bottom">
                                <div class="hg-sand-bottom"></div>
                            </div>
                        </div>
                        <div class="hg-wood"></div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
