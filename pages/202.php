<?php
// 202 – Accepted. This gallery page explains the status; it does not send it.
return [
    'code' => '202',
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
                    <div class="prop paper queue-ticket label"><small>№</small>042</div><div class="prop queue-clock"></div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
