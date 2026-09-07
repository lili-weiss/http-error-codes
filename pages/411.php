<?php
// 411 – Length Required: Monster vermisst ein Paket ohne Längenangabe.
return [
    'code' => '411',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .length-box { bottom: -8px; left: 15px; width: 170px; height: 64px; background: #e7c49e; border: 3px solid #a67c52; border-radius: 6px; padding-top: 14px; }
        .length-box::before { content: ''; position: absolute; width: 22px; height: 100%; left: 25px; top: 0; background: #f5dfbf; border-inline: 2px dashed #a67c52; }
        .length-box span { position: relative; background: #fffdf5; padding: 5px 10px; border-radius: 4px; }
        .measuring-tape { left: -30px; top: -25px; width: 260px; height: 29px; border: 3px solid #d97706; border-radius: 4px; background: repeating-linear-gradient(90deg, transparent 0 18px, #92400e 18px 20px) top / 100% 10px no-repeat, #fde68a; transform: rotate(-7deg); animation: tape-tilt 3s ease-in-out infinite; }
        .question { top: -8px; right: -25px; }
        .hand-left { left: -25px; top: -2px; } .hand-right { right: -25px; top: -25px; }
        .mouth { width: 20px; height: 20px; border: 3px solid #333; border-radius: 50%; }
        @keyframes tape-tilt { 50% { transform: rotate(2deg); } }
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
                    <div class="prop measuring-tape"></div>
                <div class="question">?</div>
                <div class="prop length-box label"><span>Length: ?</span></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

