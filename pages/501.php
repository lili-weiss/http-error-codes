<?php
// 501 – Not Implemented: Erfinder-Monster mit Bauplan neben halbfertigem Roboter.
return [
    'code' => '501',
    'og'   => '501',
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
            width: 300px;
            height: 230px;
            margin: 0 auto 30px auto;
        }

        .monster {
            position: absolute;
            width: 180px;
            height: 180px;
            bottom: 0;
            right: 0;
            margin: 0;
            z-index: 10;
        }

        .eyes { top: 50px; gap: 15px; }
        .eye { width: 35px; height: 35px; }
        .pupil { width: 18px; height: 18px; }

        .mouth {
            width: 14px;
            height: 14px;
            background-color: transparent;
            border: 3px solid #333;
            border-radius: 50%;
            position: absolute;
            bottom: 38px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hand-right { top: 110px; right: -10px; }
        .hand-left { top: 45px; left: -14px; z-index: 13; }

        /* --- Bauplan (Blueprint) --------------------------------------------- */

        .blueprint {
            position: absolute;
            width: 62px;
            height: 46px;
            background-color: #1e88e5;
            border: 3px solid #1565c0;
            border-radius: 3px;
            top: -58px;
            left: -18px;
            z-index: 12;
            transform: rotate(-8deg);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .blueprint::before { /* gestrichelter Rahmen */
            content: '';
            position: absolute;
            inset: 4px;
            border: 2px dashed rgba(255,255,255,0.7);
            border-radius: 2px;
        }

        .blueprint::after { /* Roboter-Skizze */
            content: '';
            position: absolute;
            width: 14px;
            height: 12px;
            border: 2px solid rgba(255,255,255,0.9);
            border-radius: 2px;
            top: 16px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 -9px 0 -3px rgba(255,255,255,0.9);
        }

        /* --- Halbfertiger Roboter --------------------------------------------- */

        .robot {
            position: absolute;
            bottom: 0;
            left: 15px;
            width: 90px;
            height: 150px;
            z-index: 5;
        }

        .robot-head {
            position: absolute;
            width: 52px;
            height: 42px;
            background-color: #b0bec5;
            border: 3px solid #78909c;
            border-radius: 8px;
            top: 22px;
            left: 50%;
            transform: translateX(-50%) rotate(-4deg);
            box-shadow: inset -4px -4px 8px rgba(0,0,0,0.15);
        }

        .robot-antenna {
            position: absolute;
            width: 3px;
            height: 16px;
            background-color: #78909c;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
        }

        .robot-antenna::before { /* blinkende Lampe */
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ef4444;
            border-radius: 50%;
            top: -9px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 0 6px #ef4444;
            animation: antenna-blink 1s infinite alternate;
        }

        .robot-eye {
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #4fc3f7;
            border-radius: 50%;
            top: 12px;
            left: 9px;
            box-shadow: 0 0 5px #4fc3f7;
            animation: antenna-blink 2s infinite alternate;
        }

        .robot-eye-missing { /* leere Augenfassung – noch nicht eingebaut */
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #37474f;
            border-radius: 50%;
            top: 12px;
            right: 9px;
            box-shadow: inset 0 2px 3px rgba(0,0,0,0.7);
        }

        .robot-body {
            position: absolute;
            width: 74px;
            height: 62px;
            background-color: #b0bec5;
            border: 3px solid #78909c;
            border-radius: 8px 8px 4px 4px;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: inset -5px -5px 10px rgba(0,0,0,0.15);
        }

        .robot-body::before { /* Bedienfeld */
            content: '';
            position: absolute;
            width: 26px;
            height: 16px;
            background-color: #78909c;
            border-radius: 3px;
            top: 8px;
            left: 8px;
        }

        .robot-arm { /* nur EIN Arm ist montiert */
            position: absolute;
            width: 14px;
            height: 40px;
            background-color: #90a4ae;
            border: 3px solid #78909c;
            border-radius: 8px;
            top: 5px;
            left: -18px;
            transform: rotate(10deg);
        }

        .wire { /* offene Kabel an der unfertigen Seite */
            position: absolute;
            width: 4px;
            height: 16px;
            border-radius: 2px;
            top: 12px;
            right: -8px;
        }

        .wire-1 { background-color: #ef4444; transform: rotate(30deg); }
        .wire-2 { background-color: #fcd34d; top: 26px; right: -10px; transform: rotate(75deg); }
        .wire-3 { background-color: #4fc3f7; top: 40px; right: -7px; transform: rotate(50deg); }

        .robot-arm-loose { /* der zweite Arm liegt noch am Boden */
            position: absolute;
            width: 40px;
            height: 14px;
            background-color: #90a4ae;
            border: 3px solid #78909c;
            border-radius: 8px;
            bottom: 0;
            left: 60px;
            transform: rotate(-8deg);
        }

        .shadow {
            position: absolute;
            bottom: -15px;
            right: 15px;
            margin: 0;
            z-index: 1;
        }

        @keyframes antenna-blink { 0% { opacity: 0.25; } 100% { opacity: 1; } }
CSS,
    'scene' => <<<'HTML'
            <div class="scene-wrapper">

                <div class="robot">
                    <div class="robot-head">
                        <div class="robot-antenna"></div>
                        <div class="robot-eye"></div>
                        <div class="robot-eye-missing"></div>
                    </div>
                    <div class="robot-body">
                        <div class="robot-arm"></div>
                        <div class="wire wire-1"></div>
                        <div class="wire wire-2"></div>
                        <div class="wire wire-3"></div>
                    </div>
                    <div class="robot-arm-loose"></div>
                </div>

                <div class="monster">
                    <div class="eyes">
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="hand hand-left">
                        <div class="blueprint"></div>
                    </div>
                    <div class="hand hand-right"></div>
                </div>

                <div class="shadow"></div>
            </div>
HTML,
];
