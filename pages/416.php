<?php
// 416 – Range Not Satisfiable: Monster sucht ein Kuchenstück hinter dem Ende des Kuchens.
return [
    'code' => '416',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .cake-tray { width: 255px; height: 14px; left: -28px; bottom: -15px; border-radius: 50%; background: #94a3b8; }
        .range-cake { width: 150px; height: 62px; left: -16px; bottom: -6px; background: linear-gradient(#fda4af 0 14px, #fff7ed 14px 28px, #d4a373 28px 42px, #fff7ed 42px 48px, #d4a373 48px); border: 3px solid #b88162; border-radius: 10px 10px 4px 4px; padding-top: 20px; }
        .missing-slice { width: 64px; height: 62px; right: -22px; bottom: -6px; border: 3px dashed #a78bfa; border-radius: 7px; color: #7c3aed !important; padding-top: 17px; animation: slice-fade 3s ease-in-out infinite; }
        .cake-fork { top: 108px; right: -10px; width: 8px; height: 50px; background: #94a3b8; transform: rotate(15deg); border-radius: 3px; }
        .cake-fork::before { content: ''; position: absolute; top: -15px; left: -8px; width: 24px; height: 23px; background: repeating-linear-gradient(90deg, #94a3b8 0 5px, transparent 5px 9px); border-bottom: 6px solid #94a3b8; border-radius: 0 0 7px 7px; }
        .hand-right { top: 130px; right: -18px; z-index: 14; }
        .question { top: -30px; left: -20px; }
        @keyframes slice-fade { 50% { opacity: 0.4; } }
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
                    <div class="question">?</div><div class="prop cake-fork"></div>
                <div class="prop cake-tray"></div>
                <div class="prop range-cake label">0 – 99</div>
                <div class="prop missing-slice label">200?</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

