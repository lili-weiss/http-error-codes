<?php
// 428 – Precondition Required: Monster fordert eine noch leere Voraussetzungskarte.
return [
    'code' => '428',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .condition-form { bottom: -15px; left: 20px; width: 160px; height: 96px; padding: 13px 10px; border-color: #a78bfa !important; transform: rotate(5deg); }
        .condition-form::before { content: ''; position: absolute; top: -8px; left: 48px; width: 58px; height: 14px; background: #a78bfa; border-radius: 5px; }
        .empty-condition { display: block; height: 28px; margin: 9px 4px 0; border: 2px dashed #a78bfa; color: #7c3aed; font-size: 22px; line-height: 24px; animation: condition-pulse 3s ease-in-out infinite; }
        .form-pencil { top: 95px; right: -4px; width: 13px; height: 80px; border: 2px solid #d97706; border-radius: 4px 4px 0 0; background: linear-gradient(#f9a8d4 0 12px, #94a3b8 12px 18px, #fde68a 18px); transform: rotate(24deg); }
        .form-pencil::after { content: ''; position: absolute; bottom: -17px; left: -2px; border-left: 6px solid transparent; border-right: 7px solid transparent; border-top: 16px solid #a67c52; }
        .hand-left { top: 168px; left: 5px; z-index: 14; } .hand-right { top: 123px; right: -5px; z-index: 14; }
        .question { top: -35px; right: 0; }
        .mouth { bottom: 78px; width: 23px; height: 0; border: 3px solid #333; }
        @keyframes condition-pulse { 50% { background: #ede9fe; } }
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
                    <div class="question">?</div><div class="prop form-pencil"></div>
                <div class="prop paper condition-form label">If-Match:<span class="empty-condition">?</span></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

