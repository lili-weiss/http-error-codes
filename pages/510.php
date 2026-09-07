<?php
// 510 – Not Extended: Monster sucht das fehlende Erweiterungsstück für seinen Baukasten.
return [
    'code' => '510',
    'stylesheets' => ['/assets/error-scenes.css'],
    'css' => <<<'CSS'

        .extension-plan { top: -62px; left: 26px; width: 148px; height: 52px; padding: 13px 5px; background: #eff6ff !important; border-color: #93c5fd !important; transform: rotate(-7deg); }
        .extension-plan span { color: #7c3aed; font-size: 22px; }
        .extension-base { bottom: -12px; left: -10px; width: 149px; height: 65px; background: #bfdbfe; border: 4px solid #60a5fa; border-radius: 10px; padding-top: 16px; }
        .extension-base::after { content: ''; position: absolute; right: -14px; top: 18px; width: 22px; height: 22px; background: #bfdbfe; border: 4px solid #60a5fa; border-left: none; border-radius: 0 50% 50% 0; }
        .extension-gap { bottom: -12px; right: -20px; width: 69px; height: 65px; border: 3px dashed #a78bfa; border-radius: 9px; color: #7c3aed !important; padding-top: 9px; font-size: 30px !important; background: #f5f3ff80; }
        .extension-piece { top: 94px; right: -25px; width: 51px; height: 45px; background: #ddd6fe; border: 3px solid #a78bfa; border-radius: 6px; transform: rotate(14deg); animation: extension-hover 3s ease-in-out infinite; }
        .extension-piece::before { content: ''; position: absolute; top: -15px; left: 12px; width: 19px; height: 17px; background: #ddd6fe; border: 3px solid #a78bfa; border-bottom: none; border-radius: 50% 50% 0 0; }
        .mouth { bottom: 75px; width: 25px; height: 8px; }
        .hand-left { top: 155px; left: -19px; z-index: 14; }
        .hand-right { top: 102px; right: -29px; z-index: 14; }
        @keyframes extension-hover { 50% { transform: translateY(-9px) rotate(-6deg); } }
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
                    <div class="prop paper extension-plan label">HTTP <span>+ ?</span></div>
                    <div class="prop extension-base label">HTTP</div>
                    <div class="prop extension-gap label">?</div>
                    <div class="prop extension-piece"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];

