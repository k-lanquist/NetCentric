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
        var count = 0;
        
        function myFunction(){
            count++;
            var dm = document.getElementById('clickme');
            dm.style.left = (getRandomNumber() + 'px');
            dm.style.top = (getRandomNumber() + 'px');
            
            if (count > 5){
            dm.innerHTML = "Just Click Me";
            
                if (count > 10)
                    dm.innerHTML = "Come on Click Me";
                
                if (count > 15)
                    dm.innerHTML = "Does your mouse Work?";
                if (count > 17)
                    dm.innerHTML = "Ok, I'll hold still";
                if (count > 18){
                    dm.innerHTML = "I lied";
                    count = 0;
                    }
                
            }
    
        }
        
        function getRandomNumber(){
            return Math.floor((Math.random() * 500) + 1); 
        }
        
        </script>
            
    </head>
    <body>
        
        <button onmouseover ="myFunction()" id="clickme"> CLICK ME</button>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
