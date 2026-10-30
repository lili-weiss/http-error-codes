<?php
// Startseite: Monster-Galerie mit Übersicht aller HTTP-Statusseiten.
// Neue Statusseite hinzufügen: pages/<code>.php anlegen, Code+Name hier eintragen,
// Texte in lang/de.json + lang/en.json ergänzen.

$codes = [
    100 => 'Continue',
    101 => 'Switching Protocols',
    102 => 'Processing',
    103 => 'Early Hints',
    104 => 'Upload Resumption Supported',
    200 => 'OK',
    201 => 'Created',
    202 => 'Accepted',
    203 => 'Non-Authoritative Information',
    204 => 'No Content',
    205 => 'Reset Content',
    206 => 'Partial Content',
    207 => 'Multi-Status',
    208 => 'Already Reported',
    226 => 'IM Used',
    300 => 'Multiple Choices',
    301 => 'Moved Permanently',
    302 => 'Found',
    303 => 'See Other',
    304 => 'Not Modified',
    305 => 'Use Proxy',
    306 => '(Unused)',
    307 => 'Temporary Redirect',
    308 => 'Permanent Redirect',

    400 => 'Bad Request',
    401 => 'Unauthorized',
    402 => 'Payment Required',
    403 => 'Forbidden',
    404 => 'Not Found',
    405 => 'Method Not Allowed',
    406 => 'Not Acceptable',
    407 => 'Proxy Authentication Required',
    408 => 'Request Timeout',
    409 => 'Conflict',
    410 => 'Gone',
    411 => 'Length Required',
    412 => 'Precondition Failed',
    413 => 'Content Too Large',
    414 => 'URI Too Long',
    415 => 'Unsupported Media Type',
    416 => 'Range Not Satisfiable',
    417 => 'Expectation Failed',
    418 => "I'm a Teapot",
    421 => 'Misdirected Request',
    422 => 'Unprocessable Content',
    423 => 'Locked',
    424 => 'Failed Dependency',
    425 => 'Too Early',
    426 => 'Upgrade Required',
    428 => 'Precondition Required',
    429 => 'Too Many Requests',
    431 => 'Request Header Fields Too Large',
    451 => 'Unavailable For Legal Reasons',
    500 => 'Internal Server Error',
    501 => 'Not Implemented',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable',
    504 => 'Gateway Timeout',
    505 => 'HTTP Version Not Supported',
    506 => 'Variant Also Negotiates',
    507 => 'Insufficient Storage',
    508 => 'Loop Detected',
    510 => 'Not Extended',
    511 => 'Network Authentication Required',
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
            box-sizing: border-box;
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
            margin-top: 18px;
        }

        .status-group { margin-top: 40px; text-align: left; }
        .status-group h2 { margin: 0; font-size: 1.3rem; color: #64748b; }
        @media (max-width: 480px) {
            .error-container { padding: 32px 20px; }
            .grid-container { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
            .status-btn { padding: 16px 8px; overflow-wrap: anywhere; }
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
