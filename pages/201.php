<?php
// 201 – Created. This gallery page explains the status; it does not send it.
return [
    'code' => '201',
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
                    <div class="prop gift"><div class="gift-bow"></div></div><div class="spark">✦</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
