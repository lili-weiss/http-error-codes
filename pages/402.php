<?php
// 402 – Payment Required: Monster-Bankier mit Zylinder, Monokel und Geldsäcken.
return [
    'code' => '402',
    'og'   => '402',
    'css'  => <<<'CSS'
        .main-wrapper {
            padding: 60px 20px 40px 20px;
            min-height: 100vh;
        }

        .error-container {
            padding: 50px;
            max-width: 500px;
            width: 100%;
        }

        .monster-stage {
            position: relative;
            width: 280px;
            height: 250px;
            margin: 0 auto 30px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .monster {
            width: 180px;
            height: 180px;
            margin: 0;
            z-index: 10;
        }

        .cylinder {
            position: absolute;
            top: -55px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 60px;
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: inset 0 -5px 15px rgba(255,255,255,0.1), 0 4px 8px rgba(0,0,0,0.3);
            z-index: 12;
        }

        .cylinder-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: inherit;
            border-radius: 10px;
        }

        .cylinder-brim {
            position: absolute;
            bottom: -5px;
            left: -15px;
            width: 130px;
            height: 15px;
            background-color: inherit;
            border-radius: 20px;
            box-shadow: inset 0 3px 6px rgba(255,255,255,0.1), 0 3px 6px rgba(0,0,0,0.2);
        }

        .cylinder-band {
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 12px;
            background-color: #e53e3e;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }

        .eyes { gap: 30px; }
        .eye { width: 35px; height: 35px; }
        .pupil { width: 18px; height: 18px; }

        .monocle {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 3px solid #c6a345;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(198, 163, 69, 0.6), inset 0 0 8px rgba(198, 163, 69, 0.4);
            z-index: 15;
            pointer-events: none;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.1) 70%);
        }

        .monocle-chain {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 1.5px;
            height: 55px;
            background-color: #c6a345;
            transform: rotate(-35deg);
            z-index: 14;
        }

        .mouth {
            width: 25px;
            height: 0px;
            border: 3px solid #333;
            border-radius: 10px;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .money-bags-left, .money-bags-right {
            position: absolute;
            bottom: 0;
            z-index: 5;
            display: flex;
            gap: 15px;
        }

        .money-bags-left { left: 0; }
        .money-bags-right { right: 0; flex-direction: row-reverse; }

        .money-bag {
            width: 55px;
            height: 65px;
            background-color: #d2b48c;
            position: relative;
            box-shadow: inset -5px -5px 15px rgba(0,0,0,0.2), 0 5px 10px rgba(0,0,0,0.3);
            overflow: visible;
            border-radius: 50% / 10px 10px 80% 80%;
        }

        .money-bag::before {
            content: '';
            position: absolute;
            top: -12px;
            left: 5px;
            right: 5px;
            height: 25px;
            background-color: inherit;
            border-radius: 5px 5px 0 0;
            box-shadow: inset 0 3px 6px rgba(255,255,255,0.1);
        }

        .money-bag::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: #d4af37;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }

        .money-bag-symbol {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem;
            font-weight: bold;
            color: #c6a345;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }

        .money-bag-1 { transform: rotate(-5deg); margin-left: 0; z-index: 5; }
        .money-bag-2 { transform: rotate(5deg); margin-left: -20px; z-index: 4; }
        .money-bag-3 { transform: rotate(-15deg); margin-left: -25px; z-index: 3; }
        .money-bag-4 { transform: rotate(5deg); margin-right: 0; z-index: 5; }
        .money-bag-5 { transform: rotate(-5deg); margin-right: -20px; z-index: 4; }
        .money-bag-6 { transform: rotate(15deg); margin-right: -25px; z-index: 3; }
CSS,
    'scene' => <<<'HTML'
            <div class="monster-stage">

                <div class="money-bags-left">
                    <div class="money-bag money-bag-1"><div class="money-bag-symbol">$</div></div>
                    <div class="money-bag money-bag-2"><div class="money-bag-symbol">$</div></div>
                    <div class="money-bag money-bag-3"><div class="money-bag-symbol">$</div></div>
                </div>

                <div class="monster">
                    <div class="cylinder">
                        <div class="cylinder-top"></div>
                        <div class="cylinder-band"></div>
                        <div class="cylinder-brim"></div>
                    </div>

                    <div class="eyes">
                        <div class="eye">
                            <div class="pupil" id="pupil-left"></div>
                        </div>
                        <div class="eye">
                            <div class="monocle"></div>
                            <div class="pupil" id="pupil-right"></div>
                        </div>
                        <div class="monocle-chain"></div>
                    </div>

                    <div class="mouth"></div>

                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>

                </div>

                <div class="money-bags-right">
                    <div class="money-bag money-bag-4"><div class="money-bag-symbol">$</div></div>
                    <div class="money-bag money-bag-5"><div class="money-bag-symbol">$</div></div>
                    <div class="money-bag money-bag-6"><div class="money-bag-symbol">$</div></div>
                </div>

            </div>

            <div class="shadow"></div>
HTML,
];
