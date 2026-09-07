<?php
// 505 – HTTP Version Not Supported: Monster versteht den HTTP-Dialekt im Funkgerät nicht.
return [
    'code' => '505',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .protocol-bubble { top: -65px; right: -25px; width: 120px; padding: 11px 6px; border-color: #a78bfa !important; border-radius: 22px !important; background: #f5f3ff !important; transform: rotate(7deg); animation: protocol-static 3s ease-in-out infinite; }
        .protocol-bubble::after { content: ''; position: absolute; bottom: -15px; right: 22px; border: 7px solid transparent; border-top-color: #a78bfa; }
        .protocol-bubble span { display: block; color: #7c3aed; font-size: 23px; letter-spacing: 4px; }
        .radio { top: 110px; left: -22px; width: 63px; height: 88px; border: 4px solid #64748b; border-radius: 12px; background: #cbd5e1; transform: rotate(-12deg); }
        .radio::before { content: ''; position: absolute; top: -37px; left: 8px; height: 34px; width: 7px; border-radius: 5px; background: #64748b; }
        .radio::after { content: ''; position: absolute; bottom: 10px; left: 9px; width: 37px; height: 25px; border-radius: 5px; background: repeating-linear-gradient(#475569 0 3px, transparent 3px 7px); }
        .radio-light { position: absolute; top: 10px; left: 10px; width: 12px; height: 12px; background: #fb7185; border-radius: 50%; box-shadow: 0 0 8px #fb7185; }
        .protocol-book { bottom: -13px; right: -12px; width: 110px; height: 80px; background: #dbeafe !important; border-color: #60a5fa !important; border-left-width: 10px !important; padding-top: 14px; transform: rotate(10deg); }
        .protocol-book strong { display: block; font-size: 22px; color: #2563eb; }
        .hand-left { top: 155px; left: -25px; z-index: 14; }
        .hand-right { top: 165px; right: -16px; z-index: 14; }
        .mouth { bottom: 77px; width: 20px; height: 14px; border: 3px solid #333; border-radius: 50%; }
        @keyframes protocol-static { 0%, 65%, 100% { transform: rotate(7deg); } 75% { transform: translateX(-4px) rotate(4deg); } 85% { transform: translateX(4px) rotate(10deg); } }
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
                    <div class="prop paper protocol-bubble label">HTTP/3<span>?! #?</span></div>
                    <div class="prop radio"><div class="radio-light"></div></div>
                    <div class="prop paper protocol-book label">HTTP<strong>1.1</strong></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

