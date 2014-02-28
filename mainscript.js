 function drawRectangle(myRectangle, context) {
                          context.beginPath();
                          context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);
                          context.fillStyle = '#B5095C';
                          context.fill();
                          context.lineWidth = myRectangle.borderWidth;

                        }



      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      var titleRectangle = {
        x: 0,
        y: 0,
        width: 1200,
        height: 1.5,
        borderWidth: 0
      };

      
      drawRectangle(titleRectangle, context);
      /*context.beginPath(0,0);
      context.moveTo(0,0);
      context.lineTo(1000, 0);
      context.stroke();*/


function hideBoxes(){
 
  $('#about').css({color: "#403F3F"});
  $('#box').hide();
  
  $('#proj').css({color: "#403F3F"});
  $('#projbox').hide();

  $('#work').css({color: "#403F3F"});  
  $('#workbox').hide();
  
  $('#edu').css({color: "#403F3F"});
  $("#edubox").hide();
  
}

function fade(label, div){

  //change label color back to normal
  $(label).css({color: "#403F3F"});
  //fade out div
  $(div).fadeOut(400);

}

function fadeBoxes(){
 
  fade('#about','#box');
  fade('#proj','#projbox');
  fade('#work','#workbox');
  fade('#edu','#edubox');
  
}



function displayTab(fastOrSlow, label, div){
  if (fastOrSlow == 'fast') hideBoxes();
  else if (fastOrSlow == 'slow') fadeBoxes();
  else throw "invalid in put for displayTab"
  $(label).css({color: "#B29B9C"}); 
  $(div).fadeIn(400);
}



$(document).ready( function(){


  displayTab('fast','#about','#box');

  $("#about").mouseover( function(){displayTab('slow','#about','#box');});
  $("#proj").mouseover( function(){ displayTab('slow','#proj','#projbox');});
  $("#work").mouseover( function(){ displayTab('slow','#work','#workbox');});
  $("#edu").mouseover( function(){ displayTab('slow','#edu','#edubox');});

});


document.getElementById("overlay2").onmouseover = function(e){

if(document.getElementById("box").style.height==0) document.getElementById("about").style.color="#403F3F";
if(document.getElementById("projbox").style.height==0) document.getElementById("proj").style.color="#403F3F";
if(document.getElementById("workbox").style.height==0) document.getElementById("work").style.color="#403F3F";
if(document.getElementById("edubox").style.height==0) document.getElementById("edu").style.color="#403F3F";

}




