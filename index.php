<!DOCTYPE html>
<html>
<head>
    <title>Music Player </title>
    <link rel="stylesheet" href="player.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/icons/headphones.png">
    <style>
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: black;
       color: white;
       text-align: center;
    }
    .header {
       position: fixed;
       left: 0;
       top: 0;
       width: 100%;
       background-color: white;
       color: black;
       text-align: center;
    }
    a {
        color: white;
    }
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    a:active {
      text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="header">
        <h1><img src="./assets/icons/headphones (1).png" height="50px" width="50px">  Music Player </h1>
    </div>
    <img src="./assets/images/liggi.jpg" id="background" />
    <audio src="./assets/music/liggi.mp3" id="song"></audio>

    <div class="container">  
        <div class="box"></div>      
        <img src="./assets/images/liggi.jpg" id="thumbnail" />
        
        <img src="./assets/icons/play.png" onclick="playPause()" id="play-pause" />
        <img src="./assets/icons/forward.png" onclick="nextSong()" id="next-song" />
        <img src="./assets/icons/backward.png" onclick="previousSong()" id="previous-song" />

        <div class="song-artist">Ritviz</div>
        <div class="song-title">Liggi</div>

        
        
        <input 
            type="range" 
            id="progress-bar" 
            min="0" 
            max="" 
            value="0" 
            onchange="changeProgressBar()"
        />

        <div class="currentTime"></div>
        <div class="durationTime"></div>
    </div>
    <div class="footer">
        <p>&copy;2020 | Designed By <a href="https://adityapandey.me/" target="_blank">Aditya Pandey</a></p>
    </div>
    <script src="player.js"></script>
</body>
</html>
