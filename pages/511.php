<?php
// 511 – Network Authentication Required: Monster hat WLAN-Empfang, aber noch keinen Zugangspass fürs Netzwerk.
return [
    'code' => '511',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .wifi-signal { top: -62px; left: 55px; width: 90px; height: 67px; animation: wifi-wait 3s ease-in-out infinite; }
        .wifi-signal i { position: absolute; box-sizing: border-box; left: 50%; transform: translateX(-50%); border: 7px solid transparent; border-top-color: #a78bfa; border-radius: 50%; }
        .wifi-signal i:nth-child(1) { width: 90px; height: 90px; top: 0; }
        .wifi-signal i:nth-child(2) { width: 62px; height: 62px; top: 18px; }
        .wifi-signal i:nth-child(3) { width: 34px; height: 34px; top: 36px; }
        .wifi-signal::after { content: ''; position: absolute; top: 54px; left: 39px; width: 12px; height: 12px; border-radius: 50%; background: #a78bfa; }
        .network-router { bottom: -17px; left: 20px; width: 160px; height: 61px; background: #e2e8f0; border: 4px solid #94a3b8; border-radius: 12px; padding-top: 9px; }
        .network-router::before, .network-router::after { content: ''; position: absolute; top: -45px; width: 7px; height: 43px; background: #94a3b8; border-radius: 5px; }
        .network-router::before { left: 10px; transform: rotate(-12deg); }
        .network-router::after { right: 10px; transform: rotate(12deg); }
        .network-led { position: absolute; bottom: 8px; left: 31px; width: 8px; height: 8px; border-radius: 50%; background: #fb7185; box-shadow: 25px 0 #fbbf24, 50px 0 #cbd5e1, 75px 0 #cbd5e1; }
        .network-pass { top: 105px; left: -27px; width: 68px; height: 54px; padding-top: 7px; border-color: #fbbf24 !important; transform: rotate(-15deg); }
        .network-lock { top: 115px; right: -15px; width: 38px; height: 33px; background: #fde68a; border: 3px solid #d97706; border-radius: 7px; }
        .network-lock::before { content: ''; position: absolute; top: -20px; left: 5px; width: 16px; height: 18px; border: 4px solid #d97706; border-bottom: 0; border-radius: 12px 12px 0 0; }
        .network-lock::after { content: ''; position: absolute; top: 9px; left: 13px; width: 6px; height: 12px; border-radius: 5px; background: #92400e; }
        .hand-left { top: 137px; left: -21px; z-index: 14; }
        .hand-right { top: 140px; right: -20px; z-index: 14; }
        .mouth { bottom: 72px; width: 23px; height: 10px; }
        @keyframes wifi-wait { 0%, 100% { opacity: 1; } 50% { opacity: 0.45; } }
CSS,
    'scene' => <<<'HTML'
            <div class="status-scene" aria-hidden="true">
                <div class="monster">
                    <div class="eyes">
                        <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                        <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                    </div>
                    <div class="mouth"></div>
                    <div class="hand hand-left"></div>
                    <div class="hand hand-right"></div>
                    <div class="prop wifi-signal"><i></i><i></i><i></i></div>
                    <div class="prop network-router label">Wi-Fi<div class="network-led"></div></div>
                    <div class="prop paper network-pass label">Wi-Fi<br>?</div>
                    <div class="prop network-lock"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

