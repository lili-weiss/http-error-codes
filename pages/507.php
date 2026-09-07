<?php
// 507 – Insufficient Storage: Monster versucht einen überfüllten Dateikoffer zu schließen.
return [
    'code' => '507',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .monster { animation: storage-struggle 2.5s ease-in-out infinite; }
        .storage-case { bottom: -20px; left: 5px; width: 190px; height: 78px; background: #d8b4fe; border: 4px solid #a78bfa; border-radius: 12px; box-shadow: inset 0 -10px #c084fc33; padding-top: 19px; }
        .storage-case::before, .storage-case::after { content: ''; position: absolute; top: 0; bottom: 0; width: 14px; border-inline: 2px solid #8b5cf6; background: #c4b5fd; }
        .storage-case::before { left: 19px; } .storage-case::after { right: 19px; }
        .storage-case span { position: relative; background: #fffdf5; border: 2px solid #a78bfa; border-radius: 5px; padding: 3px 8px; font-size: 21px; }
        .case-lid { left: -2px; top: 125px; width: 204px; height: 24px; background: #c4b5fd; border: 4px solid #a78bfa; border-radius: 12px 12px 5px 5px; transform-origin: right; animation: lid-bounce 2.5s ease-in-out infinite; z-index: 13 !important; }
        .case-lid::before { content: ''; position: absolute; width: 43px; height: 14px; top: -20px; left: 76px; border: 5px solid #8b5cf6; border-bottom: none; border-radius: 12px 12px 0 0; }
        .packed-file { top: 101px; width: 47px; height: 65px; border: 3px solid #d97706; background: #fde68a; border-radius: 5px; }
        .packed-file::after { content: ''; position: absolute; left: 8px; right: 8px; top: 14px; height: 20px; background: repeating-linear-gradient(#d97706 0 2px, transparent 2px 8px); }
        .packed-file-left { left: 13px; transform: rotate(-18deg); }
        .packed-file-right { right: 13px; transform: rotate(16deg); border-color: #60a5fa; background: #bfdbfe; }
        .sweat-drop { position: absolute; top: 29px; right: 22px; width: 12px; height: 19px; background: #7dd3fc; border-radius: 0 60% 60% 60%; transform: rotate(35deg); }
        .mouth { bottom: 83px; width: 24px; height: 0; border: 3px solid #333; }
        .hand-left { top: 116px; left: -10px; z-index: 14; }
        .hand-right { top: 116px; right: -10px; z-index: 14; }
        @keyframes lid-bounce { 0%, 100% { transform: rotate(-9deg); } 50% { transform: translateY(4px) rotate(-2deg); } }
        @keyframes storage-struggle { 0%, 100% { transform: translateY(0) rotate(-1deg); } 50% { transform: translateY(4px) rotate(1deg); } }
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
                    <div class="sweat-drop"></div>
                    <div class="prop packed-file packed-file-left"></div>
                    <div class="prop packed-file packed-file-right"></div>
                    <div class="prop storage-case label"><span>100%</span></div>
                    <div class="prop case-lid"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

