<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebGL App</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        iframe {
            border: 0;
            width: 100vw;
            height: 100vh;
            display: block;
        }
    </style>
</head>
<body>
    <iframe src="{{ asset('gametalenta/index.html') }}" width="1280" height="800"></iframe>
</body>
</html>
