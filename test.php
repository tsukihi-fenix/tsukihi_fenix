<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Static Template</title>
  </head>
  <body>
    <div class="main">
      <div class="wrapper">
          <div
            id="fullScreenElement1"
            class="button"
            onclick="document.getElementById('fullScreenElement1').requestFullscreen()"
          >
            <p>🍔</p>
            Click to go fullscreen
          </div>
          <div
            id="fullScreenElement2"
            class="button"
            onclick="toggleFullScreen('fullScreenElement2')"
          >
            <p>🌶️</p>
            Click to go fullscreen
          </div>
        </div>
      <!-- <script src="main.js"></script> -->

      <script>
        function toggleFullScreen(id) {
          document.getElementById(id).requestFullscreen()
        }
        </script>
  </body>
</html>