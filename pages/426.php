<?php
// 426 – Upgrade Required: Monster mit Raketenrucksack braucht ein Protokoll-Upgrade.
return [
    'code' => '426',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .jetpack { width: 45px; height: 100px; top: 85px; border: 4px solid #64748b; border-radius: 25px 25px 8px 8px; background: linear-gradient(90deg, #94a3b8, #e2e8f0, #94a3b8); z-index: 0 !important; }
        .jetpack-left { left: -25px; } .jetpack-right { right: -25px; }
        .jetpack::after { content: ''; position: absolute; top: 96px; left: 4px; width: 29px; height: 39px; background: #fbbf24; border-radius: 0 0 60% 60%; box-shadow: inset 0 10px #fb923c; animation: upgrade-sputter 1.5s ease-in-out infinite; transform-origin: top; }
        .upgrade-sign { top: -60px; left: 59px; width: 82px; height: 63px; background: #d1fae5; border: 3px solid #6ee7b7; border-radius: 18px; color: #047857 !important; font-size: 48px !important; line-height: 52px !important; animation: upgrade-rise 3s ease-in-out infinite; }
        .protocol-tag { bottom: 4px; left: 45px; width: 110px; padding: 7px 5px; border-color: #a78bfa !important; }
        .hand-left { top: 118px; left: -20px; } .hand-right { top: 118px; right: -20px; }
        .mouth { height: 10px; width: 25px; }
        @keyframes upgrade-sputter { 0%, 100% { transform: scaleY(0.4); opacity: 0.4; } 50% { transform: scaleY(1); opacity: 1; } }
        @keyframes upgrade-rise { 50% { transform: translateY(-10px); } }
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
                    <div class="prop jetpack jetpack-left"></div><div class="prop jetpack jetpack-right"></div>
                <div class="prop upgrade-sign label">↑</div><div class="prop paper protocol-tag label">Upgrade: ?</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

