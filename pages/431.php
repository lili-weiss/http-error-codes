<?php
// 431 – Request Header Fields Too Large: Monster balanciert einen viel zu hohen Hut aus Headern.
return [
    'code' => '431',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .monster { animation: header-balance 3.5s ease-in-out infinite; }
        .header-hat { top: -62px; left: -10px; width: 220px; height: 103px; transform: rotate(-7deg); transform-origin: bottom; animation: hat-balance 3.5s ease-in-out infinite; }
        .header-hat::after { content: ''; position: absolute; left: -15px; bottom: -8px; width: 250px; height: 12px; border-radius: 50%; background: #64748b; }
        .header-layer { height: 30px; box-sizing: border-box; border: 3px solid #a78bfa; background: #ede9fe; border-radius: 7px; padding: 2px 6px; white-space: nowrap; }
        .header-layer:nth-child(1) { width: 160px; margin-left: 28px; transform: rotate(5deg); }
        .header-layer:nth-child(2) { width: 185px; margin-left: 8px; background: #fef3c7; border-color: #fbbf24; transform: rotate(-4deg); }
        .header-layer:nth-child(3) { height: 36px; background: #dbeafe; border-color: #60a5fa; }
        .cookie-crumb { width: 28px; height: 28px; top: -29px; right: -23px; background: radial-gradient(circle at 30% 30%, #92400e 0 2px, transparent 3px), radial-gradient(circle at 70% 60%, #92400e 0 3px, transparent 4px), #e7c49e; border: 2px solid #a67c52; border-radius: 50%; animation: crumb-drop 3.5s ease-in infinite; }
        .hand-left { top: 10px; left: -22px; } .hand-right { top: -9px; right: -20px; }
        .mouth { width: 25px; height: 0; border: 3px solid #333; transform: translateX(-50%) rotate(-10deg); }
        @keyframes header-balance { 0%, 100% { transform: rotate(3deg); } 50% { transform: rotate(-3deg); } }
        @keyframes hat-balance { 50% { transform: rotate(6deg); } }
        @keyframes crumb-drop { 0%, 40% { opacity: 0; transform: translateY(0); } 50% { opacity: 1; } 100% { opacity: 0; transform: translateY(120px) rotate(120deg); } }
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
                    <div class="prop header-hat label"><div class="header-layer">X-Monster: …</div><div class="header-layer">Cookie: … … …</div><div class="header-layer">Cookie: … … … … …</div></div><div class="prop cookie-crumb"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

