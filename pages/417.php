<?php
// 417 – Expectation Failed: Zaubermonster erwartet einen großen Zauber, der Hut bleibt leer.
return [
    'code' => '417',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .magic-hat { bottom: -18px; left: 40px; width: 120px; height: 64px; background: #475569; border: 3px solid #334155; border-radius: 8px 8px 35px 35px; border-top: 13px solid #a78bfa; }
        .magic-hat::before { content: ''; position: absolute; width: 160px; height: 16px; left: -23px; top: -20px; border: 4px solid #475569; border-radius: 50%; background: #1e293b; }
        .empty-magic { top: 106px; left: 85px; color: #a78bfa; font-size: 28px; font-weight: 900; animation: magic-fizzle 2.8s ease-out infinite; }
        .magic-wand { top: 102px; left: -12px; height: 75px; width: 12px; background: linear-gradient(white 0 15px, #334155 15px); border: 2px solid #64748b; border-radius: 4px; transform: rotate(-30deg); transform-origin: bottom; animation: wand-flick 2.8s ease-in-out infinite; }
        .expect-cloud { top: -65px; right: -25px; width: 115px; padding: 14px 5px; border: 3px dashed #a78bfa; border-radius: 50%; color: #7c3aed !important; background: #f5f3ff; }
        .hand-left { top: 150px; left: -8px; z-index: 14; }
        .mouth { width: 18px; height: 18px; border-radius: 50%; border: 3px solid #333; bottom: 76px; }
        @keyframes wand-flick { 50% { transform: rotate(0deg); } }
        @keyframes magic-fizzle { 0% { opacity: 0; transform: translateY(20px) scale(0.3); } 35% { opacity: 1; } 100% { opacity: 0; transform: translateY(-25px) scale(0.8); } }
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
                    <div class="prop expect-cloud label">Expect:<br>★ ★ ★</div><div class="prop magic-wand"></div>
                <div class="prop magic-hat"></div><div class="prop empty-magic">· · ·</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

