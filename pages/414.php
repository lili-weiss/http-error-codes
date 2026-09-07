<?php
// 414 – URI Too Long: Monster verheddert sich in einer endlosen Adressrolle.
return [
    'code' => '414',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .url-roll { left: -30px; top: 128px; width: 260px; height: 100px; transform: rotate(-7deg); animation: scroll-tangle 4s ease-in-out infinite; }
        .url-strip { height: 27px; padding: 2px 10px; margin-top: -3px; background: #fffdf5; border: 3px solid #c4b5a5; border-radius: 12px; text-align: left !important; white-space: nowrap; overflow: hidden; }
        .url-strip:nth-child(2) { margin-left: 20px; transform: rotate(7deg); background: #f5eee1; }
        .url-strip:nth-child(3) { margin-right: 15px; transform: rotate(-3deg); }
        .url-strip:nth-child(4) { width: 100px; margin-left: 128px; border-radius: 5px 5px 18px 18px; }
        .hand-left { top: 140px; left: -35px; z-index: 14; } .hand-right { top: 180px; right: -22px; z-index: 14; }
        .question { right: -15px; top: -40px; }
        .mouth { bottom: 75px; width: 25px; height: 8px; }
        @keyframes scroll-tangle { 50% { transform: translateY(5px) rotate(2deg); } }
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
                <div class="prop url-roll label"><div class="url-strip">https://…/…/…/…/…</div><div class="url-strip">?…&amp;…&amp;…&amp;…&amp;…</div><div class="url-strip">/…/…/…/…/…/…/…</div><div class="url-strip">…&amp;…&amp;…</div></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

