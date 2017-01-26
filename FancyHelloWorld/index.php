<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="Main.css">
        
        <script>
            
            //Go here when the object is clicked and dragged away
            function drag(ev) {
                
                //Get the style of the the target; the Hello World aside
                var style = window.getComputedStyle(ev.target, null);
                
                //Transfer the offset of pixles from before the drag and the end
                ev.dataTransfer.setData("text/plain",
                    (parseInt(style.getPropertyValue("left"),10) - ev.clientX) + ',' + 
                    (parseInt(style.getPropertyValue("top"),10) - ev.clientY));
            } 
            
            //Go here when the object is released
            function drop(ev) {
                
                //Default: using the droped object as an address
                ev.preventDefault();
                
                //change the postion of the dragged object using the offset from drag
                var offset = ev.dataTransfer.getData("text/plain").split(',');
                var dm = document.getElementById('dragme');
                dm.style.left = (ev.clientX + parseInt(offset[0],10)) + 'px';
                dm.style.top = (ev.clientY + parseInt(offset[1],10)) + 'px';
                
                //Change the font in the object to a random color
                dm.style.color = getRandomColor();
                
             
                             
            }
            
            //Go here when the dragged object is over another object
            function drag_over(event) {
                //Defualt: an object can't be over another object
               event.preventDefault();
            } 
            
            //Go here when called from drop
            function getRandomColor() {
                
                //Generate a random HexDec color code
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++ ) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            
        </script>
</head>
<body>
        <meta charset="UTF-8">
        <title> Hello World </title>
   
        <h>Drag and Drop</h>
        
        
        <aside draggable="true" id="dragme" ondragstart="drag(event)" >
        Hello World.
       </aside>
        
        <div id="div1"  ondrop="drop(event)" ondragover="drag_over(event)">
        </div>
      
        <?php
        // put your code here
        ?>
    </body>
</html>
