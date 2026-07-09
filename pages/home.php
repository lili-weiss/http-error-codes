<?php
// Startseite: Monster-Galerie mit Übersicht aller Fehlerseiten.
// Neue Fehlerseite hinzufügen: pages/<code>.php anlegen, Code+Name hier eintragen,
// Texte in lang/de.json + lang/en.json ergänzen.

$codes = [
    400 => 'Bad Request',
    401 => 'Unauthorized',
    402 => 'Payment Required',
    403 => 'Forbidden',
    404 => 'Not Found',
    408 => 'Request Timeout',
    413 => 'Content Too Large',
    418 => "I'm a Teapot",
    422 => 'Unprocessable Content',
    429 => 'Too Many Requests',
    451 => 'Unavailable For Legal Reasons',
    500 => 'Internal Server Error',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable',
    504 => 'Gateway Timeout',
    508 => 'Loop Detected',
];

// Nur Codes anzeigen, für die es wirklich eine Seite gibt.
$codes = array_filter($codes, fn ($c) => is_file(__DIR__ . "/$c.php"), ARRAY_FILTER_USE_KEY);

return [
    'og'    => 'index',
    'codes' => $codes,
    'css'   => <<<'CSS'
        .main-wrapper {
            padding: 60px 20px 40px 20px;
            min-height: 100vh;
        }

        .error-container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(10px);
            max-width: 800px;
            width: 100%;
        }

        .mouth {
            width: 35px;
            height: 20px;
            border: 4px solid #333;
            border-top: none;
            border-radius: 0 0 50px 50px;
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .hand {
            width: 35px;
            height: 35px;
        }

        .hand-left {
            top: 20px;
            left: -15px;
            transform-origin: bottom right;
            animation: wave-left 1.2s infinite alternate ease-in-out;
        }
        .hand-right {
            top: 20px;
            right: -15px;
            transform-origin: bottom left;
            animation: wave-right 1.2s infinite alternate ease-in-out;
            animation-delay: 0.3s;
        }

        h1 { font-size: 4rem; margin: 0 0 10px 0; }
        p.subtitle { font-size: 1.2rem; max-width: 600px; margin: 0 auto 30px auto; line-height: 1.6; color: #64748b; }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 15px;
            margin-top: 40px;
        }

        .status-btn {
            background-color: white;
            color: #475569;
            padding: 20px 15px;
            border-radius: 15px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
        }

        .status-btn strong {
            font-size: 2rem;
            color: #ff99cc;
            margin-bottom: 5px;
        }

        .status-btn span {
            font-size: 0.9rem;
            text-align: center;
        }

        .status-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 153, 204, 0.3);
            border-color: #ff99cc;
            background-color: #fffafc;
        }

        .footer {
            margin: 50px auto 0 auto;
            max-width: none;
            font-size: 0.8rem;
            color: #94a3b8;
        }

        .footer a {
            color: #94a3b8;
            text-decoration: none;
            border-bottom: 1px dashed #94a3b8;
            transition: color 0.3s, border-bottom-color 0.3s;
        }

        .footer a:hover {
            color: #ff99cc;
            border-bottom-color: #ff99cc;
        }

        @keyframes wave-left { 0% { transform: rotate(-20deg); } 100% { transform: rotate(30deg); } }
        @keyframes wave-right { 0% { transform: rotate(20deg); } 100% { transform: rotate(-30deg); } }
CSS,
    'scene' => <<<'HTML'
            <div class="monster">
                <div class="eyes">
                    <div class="eye"><div class="pupil" id="pupil-left"></div></div>
                    <div class="eye"><div class="pupil" id="pupil-right"></div></div>
                </div>

                <div class="mouth"></div>

                <div class="hand hand-left"></div>
                <div class="hand hand-right"></div>
            </div>
            <div class="shadow"></div>
HTML,
];
