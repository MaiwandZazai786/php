<?php
http_response_code(404);

$pageTitle = "404 | Page Not Found";
$homeUrl = "/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <style>
        :root {
            --bg: #080d1a;
            --primary: #818cf8;
            --secondary: #22d3ee;
            --text: #f8fafc;
            --muted: #94a3b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', Arial, sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle,
                    rgba(99, 102, 241, 0.25),
                    transparent 70%);
            filter: blur(40px);
            animation: pulse 6s ease-in-out infinite alternate;
            pointer-events: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 750px;
            width: 100%;
            padding: 40px 24px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        .badge {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid rgba(129, 140, 248, 0.3);
            border-radius: 50px;
            background: rgba(129, 140, 248, 0.08);
            color: var(--primary);
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .error-number {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            font-size: clamp(110px, 24vw, 220px);
            font-weight: 900;
            letter-spacing: -12px;
            line-height: 1.2;

            background: linear-gradient(135deg,
                    #818cf8,
                    #22d3ee,
                    #a78bfa);

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;

            filter: drop-shadow(0 0 35px rgba(99, 102, 241, 0.3));
        }

        .error-number span {
            display: inline-block;
            animation: float 4s ease-in-out infinite;
        }

        .error-number span:nth-child(2) {
            animation-delay: 0.4s;
        }

        .error-number span:nth-child(3) {
            animation-delay: 0.8s;
        }

        h1 {
            font-size: clamp(26px, 5vw, 42px);
            font-weight: 700;
            margin-bottom: 18px;
        }

        .description {
            max-width: 480px;
            margin: 0 auto 35px;
            color: var(--muted);
            font-size: 17px;
            line-height: 1.8;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 28px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            font-family: inherit;
        }

        .btn-primary {
            background: linear-gradient(135deg,
                    #6366f1,
                    #8b5cf6);
            color: white;
            border: none;
            box-shadow: 0 8px 30px rgba(99, 102, 241, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(99, 102, 241, 0.45);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: var(--text);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-4px);
        }

        .footer {
            margin-top: 65px;
            color: #64748b;
            font-size: 13px;
        }

        /* Floating 404 Animation */

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        /* Background Glow Animation */

        @keyframes pulse {
            from {
                transform: scale(0.8);
                opacity: 0.5;
            }

            to {
                transform: scale(1.3);
                opacity: 1;
            }
        }

        /* Page Entrance Animation */

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */

        @media (max-width: 600px) {

            .error-number {
                letter-spacing: -5px;
            }

            .description {
                font-size: 15px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .footer {
                margin-top: 45px;
            }
        }

        /* Accessibility */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <main class="container">

        <!-- Error Badge -->

        <div class="badge">
            Error 404
        </div>

        <!-- Animated 404 Numbers -->

        <div class="error-number" aria-hidden="true">
            <span>4</span>
            <span>0</span>
            <span>4</span>
        </div>

        <!-- Error Message -->

        <h1>
            Oops! You're Lost in Space
        </h1>

        <p class="description">
            Looks like you've wandered into uncharted territory.
            The page you're searching for may have been moved,
            deleted, or never existed.
            Let's get you back on track!
        </p>

        <!-- Action Buttons -->

        <div class="actions">

            <a
                href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8') ?>"
                class="btn btn-primary">
                ← Back to Homepage
            </a>

            <button
                type="button"
                class="btn btn-secondary"
                onclick="window.history.back()">
                ↩ Go Back
            </button>

        </div>

        <!-- Footer -->

        <div class="footer">
            Houston, we have a problem. 🚀
        </div>

    </main>

</body>

</html>