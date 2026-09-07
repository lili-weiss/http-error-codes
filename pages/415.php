<?php
// 415 – Unsupported Media Type: Monster versucht eine Schallplatte in einen Dateischlitz zu stecken.
return [
    'code' => '415',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .media-slot { width: 145px; height: 62px; bottom: -10px; right: -25px; background: #bfdbfe; border: 4px solid #60a5fa; border-radius: 10px; padding-top: 30px; }
        .media-slot::before { content: ''; position: absolute; width: 100px; height: 9px; top: 13px; left: 18px; background: #334155; border-radius: 5px; }
        .vinyl-record { width: 92px; height: 92px; left: -20px; top: 100px; border: 5px solid #334155; border-radius: 50%; background: repeating-radial-gradient(circle, #475569 0 4px, #334155 5px 7px); animation: record-wobble 3s ease-in-out infinite; }
        .vinyl-record::before { content: '♪'; position: absolute; inset: 21px; border-radius: 50%; background: #c4b5fd; font-size: 27px; color: #5b21b6; }
        .hand-left { top: 152px; left: -22px; z-index: 14; } .hand-right { top: 165px; right: -20px; z-index: 14; }
        .question { right: -15px; top: -35px; }
        @keyframes record-wobble { 50% { transform: translateX(14px) rotate(25deg); } }
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
                    <div class="question">?</div>
                <div class="prop media-slot label">JSON</div>
                <div class="prop vinyl-record"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

