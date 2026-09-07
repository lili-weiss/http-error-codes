<?php
// 424 – Failed Dependency: Monster wartet auf eine unterbrochene Dominokette.
return [
    'code' => '424',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .domino-track { width: 270px; height: 85px; left: -35px; bottom: -25px; border-bottom: 7px solid #c4b5a5; }
        .domino { position: absolute; bottom: 0; width: 34px; height: 66px; border: 3px solid #60a5fa; border-radius: 5px; background: #dbeafe; padding-top: 12px; transform-origin: bottom; font-size: 23px !important; }
        .domino::after { content: ''; position: absolute; left: 3px; right: 3px; top: 31px; border-top: 2px solid #60a5fa; }
        .domino:first-child { left: 12px; transform: rotate(55deg); background: #fecdd3; border-color: #fb7185; color: #e11d48; }
        .domino-gap { position: absolute; left: 110px; bottom: 0; width: 34px; height: 66px; border: 3px dashed #a78bfa; border-radius: 5px; }
        .domino:last-child { right: 18px; animation: domino-wait 3s ease-in-out infinite; }
        .dependency-arrow { position: absolute; bottom: 22px; left: 152px; font-size: 30px; color: #a78bfa; }
        .hand-left { left: -25px; top: 130px; } .hand-right { right: -25px; top: 130px; }
        .question { top: -35px; right: -10px; }
        @keyframes domino-wait { 50% { transform: rotate(-5deg); } }
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
                    <div class="question">?</div><div class="prop domino-track label"><div class="domino">×</div><div class="domino-gap"></div><span class="dependency-arrow">→</span><div class="domino">2</div></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

