<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
     <script>
         
    function vidplay() {
       var video = document.getElementById("Video1");

       if (video.paused) {
          video.play();
          changeImage(2);
       } else {
          video.pause();
          changeImage(1);
       }
    }

    function restart() {
        var video = document.getElementById("Video1");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("Video1");
        video.currentTime += value;
    }     
    

    function changeImage(newImage) {
    var img = document.getElementById("img");
    
    if(newImage === 1)
        img.src="images/play.png";
    
    if(newImage === 2)
        img.src="images/pause.png";
    return false;
    }
    
    function skipVideo(value) {
        var video = document.getElementById("Video1");
        
        if(value)
        video.src="videos/test.mp4";
       
        
        if(!value)
        video.src="videos/test2.mp4";
    
        video.load();
        changeImage(1);
    }
    </script>
                
    <meta charset="UTF-8">
    <title> video player </title>
    </head>
    <body>
              
        
        <video id="Video1" >
            <source src="videos/test2.mp4" type="video/mp4" />
        </video>
        
      

        <div id="buttonbar">
            <button id="skpBck" onclick="skipVideo(0)"><img src="images/skpBck.png" id="img3" height="42" width="42"></button>
            <button id="restart" onclick="restart()"><img src="images/replay.png" id="img1" height="42" width="42"></button> 
            <button id="rew" onclick="skip(-10)"><img src="images/back.png" id="img2" height="42" width="42"></button>
            <button id="play" onclick="vidplay()"> <img src="images/play.png" id="img" height="42" width="42"> </button>
            <button id="fastFwd" onclick="skip(10)"><img src="images/fwd.png" id="img4" height="42" width="42"></button>
            <button id="skpFwd" onclick="skipVideo(1)"><img src="images/skpFwd.png" id="img5" height="42" width="42"></button>
        </div>         

        <?php
        // put your code here
        ?>
    </body>
</html>
