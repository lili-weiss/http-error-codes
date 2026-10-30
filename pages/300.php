<?php
// 300 – Multiple Choices. This gallery page explains the status; it does not send it.
return [
    'code' => '300',
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
                    <div class="prop route-post"></div><div class="prop route-sign label">A →</div><div class="prop route-sign alt label">← B</div><div class="question" style="top:140px;left:86px">?</div>
                </div>
                <div class="shadow"></div>
            </div>
HTML,
];
