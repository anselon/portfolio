/*$(document).ready(function() 
{    
    var index = 0;
    var images = $("#gallery img");
    var thumbs = $("#thumbs img");
    var imgHeight = thumbs.attr("height");
    thumbs.slice(0,3).clone().appendTo("#thumbs");
    for (i=0; i<thumbs.length; i++)
    {
        $(thumbs[i]).addClass("thumb-"+i);
        $(images[i]).addClass("image-"+i);
    }
     
    $("#next").click(sift);
    show(index);
    setInterval(sift, 8000);
     
    function sift()
    {
        if (index<(thumbs.length-1)){index+=1 ; }
        else {index=0}
        show (index);
    }
     
    function show(num)
    {
        images.fadeOut(400);
        $(".image-"+num).stop().fadeIn(400);
        var scrollPos = (num+1)*imgHeight;
        $("#thumbs").stop().animate({scrollTop: scrollPos}, 400);       
    }
});*/

$(document).ready(function() 
{ 
    var images = $("#gallery img");
    var thumbs = $("#thumbs img");
    var blurbs = $("#blurbs span");

    images.fadeOut();
    blurbs.fadeOut();
    $(images[0]).fadeIn();
    $(blurbs[0]).fadeIn();

    $('#thumbs img').click(function(){ 

    var id = $(this).attr("id");
   //add in exception if current thumbnail is clicked

    images.fadeOut(500);
    blurbs.fadeOut(500);
    
    $("#blurbs>span#" + id).fadeIn(100);
    $('div#blurbs').scrollTop(0);
    $("#gallery>img#" + id).fadeIn(500);
    });

    $("#blurbs>span").mouseleave(function(){
   $('div#blurbs').scrollTop(0);
    });
});





  /*  $(function(){
        $('#next-column').click(function(event) {
            event.preventDefault();
            $('.table-container').animate({scrollLeft:'+=152'}, 'slow',function(){
                $(this).animate({scrollLeft:0},0)
                $('.sliding-window>:first',this).appendTo($('.sliding-window',this))
            });
        });

        $('#previous-column').click(function(event) {
            event.preventDefault();
            $('.sliding-window>:last').prependTo($('.sliding-window'))
            $('.table-container').animate({scrollLeft:152},0).animate({scrollLeft:0},'slow');
        });
        
    });
*/
