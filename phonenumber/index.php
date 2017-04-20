<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="mycss.css">.
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> 
</script>



<script>
    //Boucing script
  function hitLR(el, bounding) {
  if (el.offsetLeft <= 0 && $(el).data('vx') < 0) {
    //LEFT
    $(el).data('vx', -1 * $(el).data('vx'));
  }
  if ((el.offsetLeft + el.offsetWidth) >= bounding.offsetWidth) {
    //RIGHT
    $(el).data('vx', -1 * $(el).data('vx'));
  }
  if (el.offsetTop <= 0 && $(el).data('vy') < 0) {
    //TOP
    $(el).data('vy', -1 * $(el).data('vy'));
  }
  if ((el.offsetTop + el.offsetHeight) >= bounding.offsetHeight) {
    //BOTTOM
    $(el).data('vy', -1 * $(el).data('vy'));
  }
}

function mover(el, bounding) {
  hitLR(el, bounding);
  el.style.left = el.offsetLeft + $(el).data('vx') + 'px';
  el.style.top = el.offsetTop + $(el).data('vy') + 'px';
}

function moveIt() {
  $('.bouncer').each(function() {
    mover(this, $('.bouncyHouse')[0]);
  });
  
}

function getNumber(ev) {
    var dm = document.getElementById('num');
    dm.append(ev);
}

function remove(){
    $('#num').empty();
}

moveInterval = setInterval(moveIt, 50);

</script>


<script>
    //7segment dispaly script
 
    function submit(){
    var checkedList = [];
    var one = ['c3','c6','c9','c12','c15'];
    var two = ['c1','c2','c3','c6','c7','c8','c9','c10','c13','c14','c15'];
    var three = ['c1','c2','c3','c6','c7','c8','c9','c12','c13','c14','c15'];
    var four = ['c1','c3','c4','c6','c7','c8','c9','c12','c15'];
    var five = ['c1','c2','c3','c4','c7','c8','c9','c12','c13','c14','c15'];
    var six = ['c1','c4','c7','c8','c9','c10','c12','c13','c14','c15'];
    var seven = ['c1','c2','c3','c6','c9','c12','c15'];
    var eight = ['c1','c2','c3','c4','c6','c7','c8','c9','c10','c12','c13','c14','c15'];
    var nine = ['c1','c2','c3','c4','c6','c7','c8','c9','c12','c15'];
    var zero = ['c1','c2','c3','c4','c6','c7','c9','c10','c12','c13','c14','c15'];
    $("input:checkbox").each(function(){
        var $this = $(this);

        if($this.is(":checked")){
            checkedList.push($this.attr("id"));
        }
    });
     var dm = document.getElementById('num');
   
    
   
    if (JSON.stringify(checkedList) === JSON.stringify(one)){
                dm.append('1');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(two)){
                dm.append('2');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(three)){
                dm.append('3');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(four)){
                dm.append('4');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(five)){
                dm.append('5');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(six)){
                dm.append('6');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(seven)){
                dm.append('7');
    }
    if (JSON.stringify(checkedList) === JSON.stringify(eight)){
                dm.append('8');
    }   
    if (JSON.stringify(checkedList) === JSON.stringify(nine)){
                dm.append('9');
    }   
    if (JSON.stringify(checkedList) === JSON.stringify(zero)){
                dm.append('0');
    } 
    }
  
    
</script>

  <script>
            function random(){
                switch($set) {
                    case 0 : $("#numField1").val($i); 
                        break;       
                    case 1 : $("#numField2").val($i);
                        break;
                    case 2 : $("#numField3").val($i);
                        break;       
                    case 3 : $("#numField4").val($i);
                        break;
                    case 4 : $("#numField5").val($i); 
                        break;       
                    case 5 : $("#numField6").val($i);
                        break;
                    case 6 : $("#numField7").val($i); 
                        break;       
                    case 7 : $("#numField8").val($i);
                        break;
                    case 8 : $("#numField9").val($i); 
                        break;       
                    case 9 : $("#numField10").val($i);
                        break;
                                     
                }
            }
            $i=0;
            $set=0;   
            
            $(document).ready(function(){
                $("#reset").click(function(){
                    $set=0;
                    $("#numField1").val(0);
                    $("#numField2").val(0);
                    $("#numField3").val(0);
                    $("#numField4").val(0);
                    $("#numField5").val(0);
                    $("#numField6").val(0);
                    $("#numField7").val(0);
                    $("#numField8").val(0);
                    $("#numField9").val(0);
                    $("#numField10").val(0);
                    $("#Textbox").val(0);
                    $("#numTotal").val(0);
                });
            });
            
            $(document).ready(function(){
                $("#set").click(function(){
                    $("#Textbox").val($("#numField1").val()+ $("#numField2").val()+$("#numField3").val()+ $("#numField4").val()+$("#numField5").val()+ $("#numField6").val()+$("#numField7").val()+ $("#numField8").val()+$("#numField9").val()+ $("#numField10").val());
                });
            });
            
            $(document).ready(function(){
                $("#numField1").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField1").val()<0){
                        $("#numField1").val(0);
                    }
                    while(($("#numField1").val()>=10)){
                        $temp= Math.floor(($("#numField1").val())/10);
                        $("#numField1").val($temp);
                    }
                        random();
                });
                
                $("#numField2").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField2").val()<0){
                        $("#numField2").val(0);
                    }
                    while(($("#numField2").val()>=10)){
                        $temp= Math.floor(($("#numField2").val())/10);
                        $("#numField2").val($temp);
                    }
                    random();
                });
                $("#numField3").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField3").val()<0){
                        $("#numField3").val(0);
                    }
                    while(($("#numField3").val()>=10)){
                        $temp= Math.floor(($("#numField3").val())/10);
                        $("#numField3").val($temp);
                    }
                    random();
                });
                
                $("#numField4").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField4").val()<0){
                        $("#numField4").val(0);
                    }
                    while(($("#numField4").val()>=10)){
                        $temp= Math.floor(($("#numField4").val())/10);
                        $("#numField4").val($temp);
                    }
                    random();
                });
                
                $("#numField5").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField5").val()<0){
                        $("#numField5").val(0);
                    }
                    while(($("#numField5").val()>=10)){
                        $temp= Math.floor(($("#numField5").val())/10);
                        $("#numField5").val($temp);
                    }
                    random();
                });
                
                $("#numField6").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField6").val()<0){
                        $("#numField6").val(0);
                    }
                    while(($("#numField6").val()>=10)){
                        $temp= Math.floor(($("#numField6").val())/10);
                        $("#numField6").val($temp);
                    }
                    random();
                });
                
                $("#numField7").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField7").val()<0){
                        $("#numField7").val(0);
                    }
                    while(($("#numField7").val()>=10)){
                        $temp= Math.floor(($("#numField7").val())/10);
                        $("#numField7").val($temp);
                    }
                    random();
                });
                
                $("#numField8").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField8").val()<0){
                        $("#numField8").val(0);
                    }
                    while(($("#numField8").val()>=10)){
                        $temp= Math.floor(($("#numField8").val())/10);
                        $("#numField8").val($temp);
                    }
                    random();
                });
       
                $("#numField9").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField9").val()<0){
                        $("#numField9").val(0);
                    }
                    while(($("#numField9").val()>=10)){
                        $temp=Math.floor(($("#numField9").val())/10);
                        $("#numField9").val($temp);
                    }
                    random();
                });
                
                $("#numField10").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField10").val()<0){
                        $("#numField10").val(0);
                    }
                    while(($("#numField10").val()>=10)){
                        $temp= Math.floor(($("#numField10").val())/10);
                        $("#numField10").val($temp);
                    }
                    random();  
                });
                    
                $("#Textbox").change(function(){
                    $("#Textbox").val(0);
                });
    
                $("#numTotal").change(function(){
                    $("#numTotal").val(0);
                });
            });
       </script>
       <script>
            //$(document).on( "mousemove", function(event) {
             //   $("#log").text("pageX: " + event.pageX + ", pageY: " + event.pageY);
           // });
            
            $count=0;
            
            $(document).ready(function(){
                $("#log").click(function(){
                    
                    $("#x").val(event.pageX);       
                    $("#y").val(event.pageY);
                    if(($("#numTotal").val())===0){
                        $("#numTotal").val($("#x").val()+ $("#y").val());
                    } 
                    else
                        $("#numTotal").val($("#numTotal").val() + $("#x").val() + $("#y").val());
                    if (($("#numTotal").val().length) > 10) {
                        while (($("#numTotal").val().length) > 10) {
                            $("#numTotal").val(Math.floor($("#numTotal").val() / 10));
                        }
                    }
                });
            });
         </script>  

        <meta charset="UTF-8">
        <title>Phone Number</title>
    </head>
    
    
    
    
    <body id="log1">
   
<div class="bouncyHouse">

  <button class="bouncer" id="1" data-vx='2' data-vy='3'onClick ="getNumber(id)">
    <span>1</span>
  </button>
    
  <button class="bouncer" id="2" data-vx='-2' data-vy='2' onClick ="getNumber(id)">
    <span>2</span>
  </button>
    
  <button class="bouncer" id="3"data-vx='5' data-vy='2' onClick ="getNumber(id)">
    <span>3</span>
  </button>
    
  <button class="bouncer" id="4" data-vx='9' data-vy='2' onClick ="getNumber(id)">
    <span>4</span>
  </button>
    
  <button class="bouncer" id="5"data-vx='2' data-vy='8' onClick ="getNumber(id)">
    <span>5</span>
  </button>
    
    <button class="bouncer" id="6"data-vx='-5' data-vy='-2' onClick ="getNumber(id)">
    <span>6</span>
  </button>
    
    <button class="bouncer" id="7" data-vx='4' data-vy='5' onClick ="getNumber(id)">
    <span>7</span>
  </button>
    
    <button class="bouncer" id="8"data-vx='-1' data-vy='3' onClick ="getNumber(id)">
    <span>8</span>
  </button>
    
    <button class="bouncer"id="9" data-vx='6' data-vy='2' onClick ="getNumber(id)">
    <span>9</span>
  </button>
    <button class="bouncer" id="0"data-vx='3' data-vy='3' onClick ="getNumber(id)">
    <span>0</span>
  </button>
  
</div>

      
        <div id = "label">
            phoneNumber: 
        </div>
        <div id="num"></div>
        <button id='reset' onclick='remove()'>remove last</button>
        
        
        <div id="">
        <div>
            <input type="checkbox" id ="c1"> </input>
            <input type="checkbox" id ="c2"> </input>
            <input type="checkbox" id ="c3"> </input>
        </div>
         <div>
            <input type="checkbox" id ="c4"> </input>
            <input type="checkbox" id ="c5"> </input>
            <input type="checkbox" id ="c6"> </input>
        </div>
         <div>
            <input type="checkbox" id ="c7"> </input>
            <input type="checkbox" id ="c8"> </input>
            <input type="checkbox" id ="c9"> </input>
        </div>
         <div>
            <input type="checkbox" id ="c10"> </input>
            <input type="checkbox" id ="c11"> </input>
            <input type="checkbox" id ="c12"> </input>
        </div>
         <div>
            <input type="checkbox" id ="c13"> </input>
            <input type="checkbox" id ="c14"> </input>
            <input type="checkbox" id ="c15"> </input>
        </div>
        </div>
        
       
        <button id='csubmit' onclick="submit()"> submit </button>
        
         <p id="stuff">
            <input type="number" id="numField1" value="0">
            <input type="number" id="numField2" value="0">
            <input type="number" id="numField3" value="0">
            <input type="number" id="numField4" value="0">
            <input type="number" id="numField5" value="0">
            <input type="number" id="numField6" value="0">
            <input type="number" id="numField7" value="0">
            <input type="number" id="numField8" value="0">
            <input type="number" id="numField9" value="0">
            <input type="number" id="numField10" value="0">
        </p>
        
        <div id="xandy">X and Y Number:</div>
        <input type="number" id="numTotal" value="0">
        <div id="help">Helper Phone Number:</div>
        <input type="number" id="Textbox" value="0">
        <div>Value of X:</div>
        <input type="number" id="x" value="0">
        <div>Value of Y:</div>
        <input type="number" id="y" value="0">

        <button id="set">Set</button>
        <button id="reset">Reset</button>
            
<div id="log"></div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
