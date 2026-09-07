<?php
// Fallback-Seite: unbekannte URL / Statuscode ohne eigene Seite (wie 404, mit Hinweis).
return [
    'code' => '404',
    'og'   => '404',
    'css'  => <<<'CSS'
        .magnifying-glass {
            position: absolute;
            width: 50px;
            height: 50px;
            border: 5px solid #546e7a;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            top: -65px;
            left: -10px;
            z-index: 12;
            box-shadow: inset 0 0 10px rgba(255,255,255,0.5), 0 2px 5px rgba(0,0,0,0.2);
        }

        .magnifying-glass::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 45px;
            background-color: #8d6e63;
            border-radius: 5px;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
        }

        .modal-content a {
            color: #ff99cc;
            text-decoration: none;
        }

        .modal-content a:hover {
            text-decoration: underline;
        }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>
                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right">
                    <div class="magnifying-glass"></div>
                </div>
            </div>
            <div class="shadow"></div>
HTML,
];
