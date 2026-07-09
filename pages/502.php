<?php
// 502 – Bad Gateway: Monster versucht, Stecker und Steckdose zu verbinden.
return [
    'code' => '502',
    'og'   => '502',
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

        .plug-wrapper {
            position: absolute;
            top: 12px;
            left: 15px;
            display: flex;
            align-items: center;
            animation: connect-struggle-left 1.5s infinite alternate ease-in-out;
        }

        .cable-wire {
            width: 45px;
            height: 6px;
            background-color: #475569;
        }

        .plug-body {
            width: 18px;
            height: 16px;
            background-color: #94a3b8;
            border-radius: 3px;
            border: 1px solid #334155;
        }

        .plug-prongs {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            height: 12px;
            margin-left: 1px;
        }

        .prong {
            width: 8px;
            height: 3px;
            background-color: #cbd5e1;
            border-radius: 0 2px 2px 0;
            border: 1px solid #334155;
            border-left: none;
        }

        .socket-wrapper {
            position: absolute;
            top: 12px;
            right: 15px;
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
            animation: connect-struggle-right 1.5s infinite alternate-reverse ease-in-out;
        }

        .socket-body {
            width: 16px;
            height: 20px;
            background-color: #94a3b8;
            border-radius: 3px;
            border: 1px solid #334155;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: flex-start;
            padding-left: 3px;
        }

        .socket-hole {
            width: 6px;
            height: 3px;
            background-color: #1e293b;
            border-radius: 1px;
        }

        @keyframes sweat-pulse { 0%, 100% { transform: rotate(45deg) scale(1); opacity: 0.7; } 50% { transform: rotate(45deg) scale(1.1); opacity: 1; } }
        @keyframes connect-struggle-left { 0% { transform: translateX(0) rotate(0deg); } 100% { transform: translateX(5px) rotate(2deg); } }
        @keyframes connect-struggle-right { 0% { transform: translateX(0) rotate(0deg); } 100% { transform: translateX(-5px) rotate(-2deg); } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="sweat-drop"></div>

                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>
                <div class="mouth"></div>

                <div class="hand hand-left">
                    <div class="plug-wrapper">
                        <div class="cable-wire"></div>
                        <div class="plug-body"></div>
                        <div class="plug-prongs">
                            <div class="prong"></div>
                            <div class="prong"></div>
                        </div>
                    </div>
                </div>
                <div class="hand hand-right">
                    <div class="socket-wrapper">
                        <div class="cable-wire"></div>
                        <div class="socket-body">
                            <div class="socket-hole"></div>
                            <div class="socket-hole"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
