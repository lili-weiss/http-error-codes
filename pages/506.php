<?php
// 506 – Variant Also Negotiates: Monster serviert eine Speisekarte, die wieder eine Speisekarte anbietet.
return [
    'code' => '506',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .variant-tray { bottom: -16px; left: -25px; width: 250px; height: 17px; background: #cbd5e1; border: 3px solid #94a3b8; border-radius: 50%; }
        .nested-menu { bottom: -3px; left: 20px; width: 160px; height: 74px; padding: 8px; border-color: #a78bfa !important; transform: rotate(-6deg); animation: menu-offer 4s ease-in-out infinite; }
        .nested-menu > span { position: absolute; top: 20px; left: 15px; font-size: 22px; color: #7c3aed; }
        .menu-inside { position: absolute; top: 11px; right: 10px; width: 85px; height: 48px; border: 3px solid #60a5fa; background: #dbeafe; border-radius: 5px; padding-top: 9px; box-sizing: border-box; }
        .menu-inside::after { content: '?'; position: absolute; top: 5px; right: 5px; width: 30px; height: 30px; border: 2px solid #a78bfa; border-radius: 3px; background: #ede9fe; font-size: 21px; }
        .menu-inside span { display: block; margin-right: 33px; }
        .negotiation-loop { top: -70px; left: 65px; width: 70px; height: 65px; color: #a78bfa; font-size: 62px; line-height: 1; animation: menu-loop 6s linear infinite; }
        .mouth { bottom: 78px; width: 23px; height: 0; border: 3px solid #333; transform: translateX(-50%) rotate(-10deg); }
        .hand-left { top: 162px; left: -25px; z-index: 14; }
        .hand-right { top: 162px; right: -25px; z-index: 14; }
        @keyframes menu-offer { 50% { transform: translateY(-6px) rotate(4deg); } }
        @keyframes menu-loop { to { transform: rotate(360deg); } }
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
                    <div class="prop negotiation-loop">⟳</div>
                    <div class="prop variant-tray"></div>
                    <div class="prop paper nested-menu label"><span>A →</span><div class="menu-inside"><span>A →</span></div></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
