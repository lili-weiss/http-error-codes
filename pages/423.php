<?php
// 423 – Locked: Monster steckt hinter einer Kette mit großem Vorhängeschloss.
return [
    'code' => '423',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .lock-chain { width: 264px; height: 24px; left: -32px; top: 142px; display: flex; transform: rotate(-8deg); }
        .lock-chain i { flex: 1; height: 22px; margin-left: -5px; border: 5px solid #94a3b8; border-radius: 50%; background: #e2e8f033; box-shadow: inset 0 2px white; }
        .big-padlock { width: 76px; height: 65px; left: 62px; top: 143px; background: #fcd34d; border: 4px solid #d97706; border-radius: 12px; transform-origin: top; animation: lock-rattle 3s ease-in-out infinite; }
        .big-padlock::before { content: ''; position: absolute; width: 43px; height: 43px; left: 9px; top: -40px; border: 7px solid #94a3b8; border-bottom: none; border-radius: 30px 30px 0 0; z-index: -1; }
        .big-padlock::after { content: ''; position: absolute; width: 14px; height: 24px; left: 27px; top: 17px; background: #92400e; clip-path: polygon(0 0, 100% 0, 100% 45%, 70% 60%, 85% 100%, 15% 100%, 30% 60%, 0 45%); border-radius: 50% 50% 0 0; }
        .hand-left { top: 145px; left: -14px; z-index: 14; } .hand-right { top: 122px; right: -18px; z-index: 14; }
        .mouth { bottom: 78px; height: 8px; width: 24px; }
        @keyframes lock-rattle { 0%, 65%, 100% { transform: rotate(0); } 75% { transform: rotate(-10deg); } 85% { transform: rotate(10deg); } }
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
                    <div class="prop lock-chain"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><div class="prop big-padlock"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

