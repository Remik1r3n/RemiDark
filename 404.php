<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php $this->options->charset(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Cache-Control" content="no-transform"/>
        <meta http-equiv="Cache-Control" content="no-siteapp"/><?php if($this->options->favicon): ?>
        <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?>
        <title>404 Not Found - <?php $this->options->title() ?></title>
        <style>
        body {
            margin: 0; 
            padding: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Noto Sans", "Helvetica Neue", Arial, sans-serif;
            background-color: #0a0a0a;
            background-image: radial-gradient(circle at center, #1a1a1a 0%, #000000 100%);
            color: #fff;
            height: 100vh;
            overflow: hidden;
        }
        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .body404 {
            position: absolute;
            height: 100%; 
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            text-align: center;
            padding: 2rem;
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }
        .error-code {
            font-size: 6rem;
            font-weight: 700;
            margin: 0;
            color: #fff;
            letter-spacing: -2px;
            line-height: 1;
        }
        .error-message {
            margin: 1.5rem 0 3rem;
            color: #888;
            display: flex;
            flex-direction: column;
            gap: 0.3rem; /* 减少行距 */
        }
        .msg-en {
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
        .msg-cn {
            font-size: 1rem;
            opacity: 0.8;
        }
        .home-link {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255,255,255,0.3);
            color: #ccc;
            padding: 0.6rem 2.5rem;
            border-radius: 50px;
            backdrop-filter: blur(5px);
            gap: 2px;
        }
        .link-cn {
            font-size: 0.95rem;
            line-height: 1.2;
        }
        .link-en {
            font-size: 0.75rem;
            opacity: 0.6;
            line-height: 1.2;
        }
        .home-link:hover {
            background-color: #fff;
            color: #000;
            border-color: #fff;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .error-code { font-size: 4rem; }
            .error-message { margin-bottom: 2.5rem; }
        }
        </style>
    </head>
    <body>
        <div class="body404">
            <div class="content">
                <h1 class="error-code">404</h1>
                <div class="error-message">
                    <span class="msg-en">Page not found</span>
                    <span class="msg-cn">页面未找到</span>
                </div>
                <a href="<?php $this->options->siteUrl(); ?>" class="home-link">
                    <span class="link-cn">返回首页</span>
                    <span class="link-en">Return Homepage</span>
                </a>
            </div>
        </div>
    </body>
</html>