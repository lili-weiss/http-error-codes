<?php
// 412 – Precondition Failed: Monster entdeckt einen Versionskonflikt auf seiner Prüfliste.
return [
    'code' => '412',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .version-board { bottom: -10px; left: 14px; width: 172px; height: 85px; padding: 15px 10px 8px; border-width: 5px !important; transform: rotate(-6deg); }
        .version-board::before { content: ''; position: absolute; width: 60px; height: 16px; background: #94a3b8; border-radius: 4px; top: -12px; left: 50px; }
        .version-row { display: flex; align-items: center; justify-content: space-around; gap: 10px; }
        .version-row b { font-size: 27px; }
        .version-row .old-version { color: #e11d48; text-decoration: line-through; }
        .version-row .current-version { color: #059669; }
        .failed-stamp { right: -22px; top: -30px; width: 65px; height: 65px; border: 5px solid #fb7185; border-radius: 50%; color: #e11d48; font-size: 50px; line-height: 50px; background: #fff1f2; animation: stamp-no 2.5s ease-in-out infinite; }
        .hand-left { top: 160px; left: 0; z-index: 14; } .hand-right { top: 160px; right: 0; z-index: 14; }
        .mouth { width: 28px; height: 0; border: 3px solid #333; transform: translateX(-50%) rotate(-12deg); bottom: 65px; }
        @keyframes stamp-no { 50% { transform: rotate(12deg) scale(1.08); } }
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
                    <div class="prop failed-stamp">×</div>
                <div class="prop paper version-board label"><span>If-Match</span><div class="version-row"><b class="old-version">v2</b><span>≠</span><b class="current-version">v3</b></div></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

