<?php
// 406 – Not Acceptable: Wählerisches Monster verschmäht das angebotene Daten-Menü.
return [
    'code' => '406',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .monster { animation: picky-shake 3s ease-in-out infinite; }
        .mouth { width: 28px; height: 0; border: 3px solid #333; border-radius: 5px; }
        .hand-left { top: 105px; left: -22px; transform: rotate(-25deg); }
        .hand-right { top: 20px; right: -15px; width: 38px; height: 42px; }
        .menu-wish { top: -65px; right: -20px; width: 100px; padding: 12px 5px; border-radius: 20px; }
        .menu-wish::after { content: ''; position: absolute; bottom: -12px; left: 18px; border: 6px solid transparent; border-top-color: #c4b5a5; }
        .dinner-plate { width: 165px; height: 55px; border-radius: 50%; background: #e0f2fe; border: 6px solid white; bottom: -12px; left: 17px; box-shadow: 0 6px 0 #94a3b8; }
        .data-dish { position: absolute; top: -30px; left: 35px; padding: 12px; border: 3px solid #d97706; border-radius: 12px 12px 4px 4px; background: #fde68a; color: #92400e; transform: rotate(-8deg); }
        .rejection { top: 100px; right: -28px; color: #e11d48; font-size: 38px; font-weight: 900; }
        @keyframes picky-shake { 0%, 60%, 100% { transform: rotate(0); } 70% { transform: rotate(-5deg); } 85% { transform: rotate(5deg); } }
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
                    <div class="prop paper label menu-wish">Accept:<br>XML</div>
                <div class="prop dinner-plate"><div class="data-dish label">JSON</div></div>
                <div class="prop rejection">×</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

