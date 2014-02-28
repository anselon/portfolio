 function drawRectangle(myRectangle, context) {
                          context.beginPath();
                          context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);
                          context.fillStyle = '#B5095C';
                          context.fill();
                          context.lineWidth = myRectangle.borderWidth;

                        }


/*function animate(myRectangle, canvas, context, startTime) {
        // update
        var time = (new Date()).getTime() - startTime;

        var linearSpeed = 40;
        // pixels / second
        var newX = linearSpeed * time/50;

        if(myRectangle.width < 10000) {
          myRectangle.width = newX;

        }

        // clear
        context.clearRect(0, 0, canvas.width, canvas.height);

        drawRectangle(myRectangle, context);

        // request new frame
        requestAnimFrame(function() {
          animate(myRectangle, canvas, context, startTime);
        });
      }

      function animateOut(myRectangle, canvas, context, startTime) {
        // update
        var time = (new Date()).getTime() - startTime;

        var linearSpeed = 40;
        // pixels / second
        var newX = linearSpeed * time / 100;

        if(myRectangle.width > 0) {
          myRectangle.width = myRectangle.width -1;

        }

        // clear
        context.clearRect(0, 0, canvas.width, canvas.height);



        // request new frame
        requestAnimFrame(function() {
          animateOut(myRectangle, canvas, context, startTime);
        });
      }
*/

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

// scrolling

//ABOUT LINE


function clearBoxes(){
  document.getElementById("container").style.display = 'none';

  
 if(document.getElementById("box").style.height !=0)
  {
    document.getElementById("about").style.color = "#403F3F";
    $('.box').fadeOut();
  }

  /*
  {
    
   // var startTime = (new Date()).getTime();
    //animateOut(titleRectangle, canvas, context, startTime);
 
   // document.getElementById("box").style.transition= 'opacity .5s ease-in-out';
    
  //document.getElementById("box").style.transition = 'width 1s, height 1s, opacity 1s ease-in-out';
  document.getElementById("box").style.transition = 'opacity 1s ease-in-out';
  //document.getElementById("box").style.webkitFilter ="alpha(opacity=0)";
  document.getElementById("box").style.opacity=0;


 document.getElementById("box").style.height = 0;
document.getElementById("box").style.width = 0;

  }
*/
if(document.getElementById("projbox").style.height !=0)
{
  document.getElementById("proj").style.color = "#403F3F";
  $('.projbox').fadeOut();
}


  /*{

    document.getElementById("proj").style.color = "#403F3F";
    //var startTime = (new Date()).getTime();
    //animateOut(titleRectangle, canvas, context, startTime);
    //document.getElementById("projbox").style.transition = 'width 1s, height 1s, opacity 1s ease-in-out';
    document.getElementById("projbox").style.transition = 'opacity 1s ease-in-out';
    //document.getElementById("projbox").style.webkitFilter ="alpha(opacity=0)";
    document.getElementById("projbox").style.opacity=0;

 document.getElementById("projbox").style.height = 0;
document.getElementById("projbox").style.width = 0;
  }*/

if(document.getElementById("workbox").style.height != 0)
{ document.getElementById("work").style.color = "#403F3F";
$('.workbox').fadeOut();}
  /*{
    document.getElementById("work").style.color = "#403F3F";
   // var startTime = (new Date()).getTime();
   // animateOut(titleRectangle, canvas, context, startTime);
    document.getElementById("workbox").style.transition = 'width .5s, height .5s';
    document.getElementById("workbox").style.height = 0;
    document.getElementById("workbox").style.width = 0;
  }*/


if(document.getElementById("edubox").style.height != 0)  {
  $(".edubox").fadeOut();
  document.getElementById("edu").style.color = "#403F3F";}
 /* {  
    
   // var startTime = (new Date()).getTime();
    //animateOut(titleRectangle, canvas, context, startTime);
    document.getElementById("edubox").style.transition = 'width .5s, height .5s';
    document.getElementById("edubox").style.height = 0;
    document.getElementById("edubox").style.width = 0;
  }
  */
}





///MOUSEOVER



function about() {

clearBoxes();
//document.getElementById("container").style.display = 'block';
document.getElementById("about").style.color="#B29B9C";
document.getElementById("box").style.display='block';

document.getElementById("box").style.transition = 'opacity 1s ease-in-out';
 document.getElementById("box").style.webkitFilter ="alpha(opacity=1)";
document.getElementById("box").style.opacity=1;
 document.getElementById("box").style.height = 900;
    document.getElementById("box").style.width =810;
    // document.getElementById("box").scrollTo(800,0);
  //  var startTime = (new Date()).getTime();
 //   animate(titleRectangle, canvas, context, startTime);
 
}




document.getElementById("about").onmouseover = function(){about();}

//keep boxes open while user is reading them
document.getElementById("overlay2").onmouseover = function(e){


 /*if(document.getElementById("projbox").style.height==0)
 {
  document.getElementById("box").style.height = 500;
 document.getElementById("box").style.width = 800;
  }

if (document.getElementById("box").style.height==0)
{document.getElementById("projbox").style.height = 500;
document.getElementById("projbox").style.width = 800;
} */
//keep font color magenta and others #403F3F
if(document.getElementById("box").style.height==0) document.getElementById("about").style.color="#403F3F";
if(document.getElementById("projbox").style.height==0) document.getElementById("proj").style.color="#403F3F";
if(document.getElementById("workbox").style.height==0) document.getElementById("work").style.color="#403F3F";
if(document.getElementById("edubox").style.height==0) document.getElementById("edu").style.color="#403F3F";
}


//PROJECT LINE
document.getElementById("proj").onmouseover = function(){
  

clearBoxes();
//document.getElementById("container").style.display = 'block';
document.getElementById("proj").style.color="#B29B9C";

//var startTime = (new Date()).getTime();
 // animate(titleRectangle, canvas, context, startTime);

document.getElementById("projbox").style.transition = 'opacity 1s ease-in-out';
 document.getElementById("projbox").style.webkitFilter ="alpha(opacity=1)";
 document.getElementById("projbox").style.display='block';
document.getElementById("projbox").style.opacity=1;
//document.getElementById("projbox").style. -webkit-transition:width 1s, height 1s, -webkit-transform 1s; 

document.getElementById("projbox").style.height = 500;
document.getElementById("projbox").style.width = 810;
}


//work line
document.getElementById("work").onmouseover = function(e){
  clearBoxes();
 // document.getElementById("container").style.display = 'block';
  document.getElementById("work").style.color="#B29B9C";
  document.getElementById("workbox").style.display='block';
  //var startTime = (new Date()).getTime();
  //animate(titleRectangle, canvas, context, startTime);

  document.getElementById("workbox").style.transition = 'opacity 1s ease-in-out';
 document.getElementById("workbox").style.webkitFilter ="alpha(opacity=1)";
document.getElementById("workbox").style.opacity=1;
  //document.getElementById("workbox").style.transition = 'width 1s, height 1s';
  //document.getElementById("projbox").style. -webkit-transition:width 1s, height 1s, -webkit-transform 1s; 

  document.getElementById("workbox").style.height = 500;
  document.getElementById("workbox").style.width = 810;
}


//work line
document.getElementById("edu").onmouseover = function(e){
  
  clearBoxes();
  //document.getElementById("container").style.display = "block";
  document.getElementById("edu").style.color="#B29B9C";
  document.getElementById("edubox").style.display='block';
//  var startTime = (new Date()).getTime();
//  animate(titleRectangle, canvas, context, startTime);

    document.getElementById("edubox").style.transition = 'opacity 1s ease-in-out';
 document.getElementById("edubox").style.webkitFilter ="alpha(opacity=1)";
document.getElementById("edubox").style.opacity=1;
  //document.getElementById("edubox").style.transition = 'width 1s, height 1s';

//document.getElementById("projbox").style. -webkit-transition:width 1s, height 1s, -webkit-transform 1s; 

document.getElementById("edubox").style.height = 500;
document.getElementById("edubox").style.width = 950;
}
