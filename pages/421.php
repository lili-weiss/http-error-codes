<?php
// 421 – Misdirected Request: Monster mit Brief steht vor widersprüchlichen Wegweisern.
return [
    'code' => '421',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .signpost { top: -65px; left: 12px; width: 12px; height: 92px; background: #a67c52; border-radius: 4px; z-index: 0 !important; transform: rotate(-8deg); }
        .direction { position: absolute; width: 105px; height: 28px; left: -22px; top: 0; padding-top: 3px; background: #bfdbfe; clip-path: polygon(0 0, 83% 0, 100% 50%, 83% 100%, 0 100%); }
        .direction + .direction { top: 32px; left: -50px; background: #ddd6fe; clip-path: polygon(17% 0, 100% 0, 100% 100%, 17% 100%, 0 50%); }
        .lost-envelope { width: 112px; height: 70px; bottom: -2px; left: 45px; transform: rotate(12deg); padding-top: 37px; }
        .lost-envelope::before { content: ''; position: absolute; inset: 0 0 auto; height: 35px; background: #e7e5e4; clip-path: polygon(0 0, 100% 0, 50% 100%); }
        .lost-envelope::after { content: 'A'; position: absolute; right: 5px; top: 5px; padding: 0 4px; border: 2px dotted #60a5fa; color: #2563eb; background: #dbeafe; font-size: 14px; }
        .question { right: -15px; top: -45px; }
        .hand-left { top: 161px; left: 28px; z-index: 14; } .hand-right { top: 170px; right: 28px; z-index: 14; }
        .monster { animation: lost-look 4s ease-in-out infinite; }
        @keyframes lost-look { 0%, 100% { transform: rotate(-4deg); } 50% { transform: rotate(4deg); } }
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
                    <div class="prop signpost"><div class="direction label">A →</div><div class="direction label">← B</div></div>
                <div class="question">?</div><div class="prop paper lost-envelope label">→ A</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

