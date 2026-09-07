<?php
// 407 – Proxy Authentication Required: Monster kontrolliert den Ausweis an der Proxy-Schranke.
return [
    'code' => '407',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .guard-cap { width: 150px; height: 55px; top: -20px; left: 25px; border-radius: 60px 60px 10px 10px; background: #64748b; border: 3px solid #475569; color: white !important; padding: 10px; }
        .guard-cap::after { content: ''; position: absolute; width: 130px; height: 12px; background: #334155; border-radius: 50%; bottom: -7px; left: 7px; }
        .proxy-barrier { bottom: -2px; left: -35px; width: 270px; height: 20px; background: repeating-linear-gradient(135deg, #fff 0 18px, #fb7185 18px 36px); border: 3px solid #94a3b8; border-radius: 6px; }
        .proxy-barrier::before, .proxy-barrier::after { content: ''; position: absolute; top: 16px; width: 12px; height: 27px; background: #64748b; }
        .proxy-barrier::before { left: 10px; } .proxy-barrier::after { right: 10px; }
        .id-card { width: 74px; height: 52px; top: 115px; left: -25px; transform: rotate(-14deg); padding: 8px; border-color: #60a5fa !important; animation: id-offer 2.5s ease-in-out infinite; }
        .id-card::before { content: ''; display: inline-block; width: 18px; height: 25px; margin-right: 6px; border-radius: 50% 50% 4px 4px; background: #c4b5fd; vertical-align: middle; }
        .hand-left { left: 24px; top: 143px; }
        .hand-right { right: -15px; top: 120px; }
        @keyframes id-offer { 50% { transform: translateY(-8px) rotate(-6deg); } }
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
                    <div class="prop guard-cap label">PROXY</div>
                <div class="prop paper id-card label">?</div>
                <div class="prop proxy-barrier"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

