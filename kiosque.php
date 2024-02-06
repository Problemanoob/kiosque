<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transition Example</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .frame-container {
            width: 100%;
            height: 100%;
            display: none;
        }
    </style>
</head>
<body>

    <?php
    $url1 = "100%,0%,0%";
    $url2 = "0%,100%,0%";
    $url3 = "0%,0%,100%";
    ?>

    <div id="frameContainer1" class="frame-container">
        <iframe src="https://dosin.gers.fr/front/ticket.php" name="mainFrame" id="mainFrame1" width="100%" height="100%"></iframe>
    </div>

    <div id="frameContainer2" class="frame-container">
        <iframe src="https://getcomposer.org/download/" name="mainFrame" id="mainFrame2" width="100%" height="100%"></iframe>
    </div>

    <div id="frameContainer3" class="frame-container">
        <iframe src="https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal" name="mainFrame" id="mainFrame3" width="100%" height="100%"></iframe>
    </div>

    <script>

        let currentIndex = 0;

        function transition() {
            const frameContainers = document.querySelectorAll('.frame-container');
            const currentFrame = frameContainers[currentIndex];
            const nextIndex = (currentIndex + 1) % frameContainers.length;
            const nextFrame = frameContainers[nextIndex];

            currentFrame.style.display = 'none';
            nextFrame.style.display = 'block';

            currentIndex = nextIndex;
            setTimeout(transition, 5000);
        }

        transition();
    </script>
</body>
</html>