<?php
// 425 – Too Early: Ungeduldiges Rennmonster wartet auf den sicheren Start.
return [
    'code' => '425',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .monster { animation: early-start 1.8s ease-in-out infinite; }
        .race-band { top: 25px; left: 10px; width: 180px; height: 18px; background: #fef3c7; border-block: 3px solid #fbbf24; border-radius: 12px; transform: rotate(-8deg); z-index: 2 !important; }
        .start-light { width: 115px; height: 48px; top: -65px; left: 43px; border-radius: 15px; background: #475569; border: 4px solid #334155; display: flex; gap: 14px; align-items: center; justify-content: center; }
        .start-light i { width: 27px; height: 27px; border-radius: 50%; background: #64748b; border: 2px solid #334155; }
        .start-light i:first-child { background: #fb7185; box-shadow: 0 0 16px #fb7185; }
        .start-ribbon { bottom: 5px; left: -30px; width: 260px; height: 30px; background: repeating-linear-gradient(90deg, #fff 0 15px, #c4b5fd 15px 30px); border: 2px solid #a78bfa; transform: rotate(-5deg); }
        .start-ribbon span { background: #f5f3ff; color: #6d28d9; padding: 2px 15px; }
        .hand-left { top: 140px; left: -25px; } .hand-right { top: 110px; right: -20px; }
        .mouth { height: 12px; width: 22px; border: 3px solid #333; border-radius: 50%; }
        @keyframes early-start { 0%, 100% { transform: translateX(-3px) rotate(-3deg); } 50% { transform: translateX(5px) rotate(4deg); } }
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
                    <div class="prop start-light"><i></i><i></i></div><div class="prop race-band"></div>
                <div class="prop start-ribbon label"><span>TLS …</span></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

