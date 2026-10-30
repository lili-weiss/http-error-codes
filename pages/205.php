<?php
// 205 – Reset Content. This gallery page explains the status; it does not send it.
return [
    'code' => '205',
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
                    <div class="prop reset-board">↺</div><div class="prop eraser"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
