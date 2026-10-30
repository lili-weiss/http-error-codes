<?php
// 302 – Found. This gallery page explains the status; it does not send it.
return [
    'code' => '302',
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
                    <div class="prop route-post"></div><div class="prop route-sign label">A ⇢ B</div><div class="prop suitcase label">A ⇄ B</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
