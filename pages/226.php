<?php
// 226 – IM Used. This gallery page explains the status; it does not send it.
return [
    'code' => '226',
    'stylesheets' => ['/assets/error-scenes.css', '/assets/status-scenes.css'],
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
                    <div class="prop puzzle-base"></div><div class="prop delta-piece label">Δ</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
