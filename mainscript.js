 
//draw line under name on homepage
function drawRectangle(myRectangle, context) {
                          context.beginPath();
                          context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);
                          context.fillStyle = '#B5095C';
                          context.fill();
                          context.lineWidth = myRectangle.borderWidth;

                        }


//function to hide all boxes when user hovers over a new label in the sidebar
function hideBoxes(){
 
  $('#about').css({color: "#403F3F"});
  $('#aboutbox').hide();
  
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
  $(div).fadeOut(200);

}

//fade all boxes when new box is viewed
function fadeBoxes(){
 
  fade('#about','#aboutbox');
  fade('#proj','#projbox');
  fade('#work','#workbox');
  fade('#edu','#edubox');
  
}



function displayTab(fastOrSlow, label, div){
  if(label == div+'box'){return 0;}
  if (fastOrSlow == 'fast') hideBoxes();
  else if (fastOrSlow == 'slow') fadeBoxes();
  else throw "invalid input for displayTab function";
  $(label).css({color: "#B29B9C"});
  $(div).fadeIn(400);
}



$(document).ready( function(){


  displayTab('fast','#about','#aboutbox');

  $("#about").mouseover( function(){displayTab('slow','#about','#aboutbox');});
  $("#proj").mouseover( function(){ displayTab('slow','#proj','#projbox');});
  $("#work").mouseover( function(){ displayTab('slow','#work','#workbox');});
  $("#edu").mouseover( function(){ displayTab('slow','#edu','#edubox');});
  

});


//while user views specific box, keep sidebar label color highlighted
document.getElementById("overlay2").onmouseover = function(e){    

if(document.getElementById("box").style.display=='none') {document.getElementById("about").style.color="#403F3F";}
else if(document.getElementById("box").style.display=='block') {document.getElementById("about").style.color="#B29B9C";}

if(document.getElementById("projbox").style.display=='none') {document.getElementById("proj").style.color="#403F3F";}
else if(document.getElementById("projbox").style.display=='block') {document.getElementById("proj").style.color="#B29B9C"; }

if(document.getElementById("workbox").style.display == 'none') document.getElementById("work").style.color="#403F3F";
else if(document.getElementById("workbox").style.display=='block') {document.getElementById("work").style.color="#B29B9C";}

if(document.getElementById("edubox").style.display == 'none') {document.getElementById("edu").style.color="#403F3F";}
else if(document.getElementById("edubox").style.display=='block') {document.getElementById("edu").style.color="#B29B9C";}


}




