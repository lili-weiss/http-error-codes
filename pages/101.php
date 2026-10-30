<?php
// 101 – Switching Protocols. This gallery page explains the status; it does not send it.
return [
    'code' => '101',
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
                    <div class="prop protocol old label">HTTP</div><div class="prop protocol new label">WS</div><div class="prop protocol-wire"></div><div class="prop protocol-switch">⇄</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
