
<?php /*
Theme Name:     twentythirteen-child
Theme URI:      http://annaselonick.com/
Description:    Front Page for Resume Site
Author:         Anna Selonick
Author URI:     http://annaselonick.com/
Template:       twentythirteen
Version:        0.1.0
*/ ?>

<html>

<head> 

  <title> Anna Selonick </title> 
  <link rel="icon" type = "image/jpg" href = "images/Untitled-1.jpg">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/twentythirteen-child/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Roboto+Slab:400,300,100' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:500,100' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

 <script type="text/javascript">
/*

NOTES: about me text is still on page!! Not hidden. 
*/

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42820801-1', 'annaselonick.com');
  ga('send', 'pageview');


  </script>
<script type="text/javascript">
  $(document).ready(function(){
  //$(window).scrollTop($('#contact').offset().top);
  $("#about").ready(function(){
    
   $("#box").scrollTop(195);


  });
  
});
 </script>
 <script src = "../wp-content/themes/twentythirteen-child/projectgallery.js"  type='text/javascript' ></script> 


</head>


 


  <script type="text/javascript">    window.requestAnimFrame = (function(callback) {
                          return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
                          function(callback) {
                            window.setTimeout(callback, 1000 / 60);
                          };    });
  </script>
                          
                   
<body>


 <p class="excuse"> Please excuse the appearance. This site is currently under construction. </p>
 <p class = "anna">anna.selonick</p>
  <div id="canvas-wrap">
 
   
    <canvas id="myCanvas" width="1200" height="500">


    </canvas> 
     <div id="container">
    <div id="contents">
       </div>
     <div id="gradient">
          </div>
</div>

    <div id="overlay" class = "overlay">
    <div id ="overlay1" class ="overlay1"> 
      <br />
      <a class="title" id ="about" >about.</a><a class="period"></a> <br /> 
      <a class="title" id ="proj">projects.</a><a class="period"></a><br />
      <a class="title" id ="work">work.</a><a class="period"></a> <br />
      <a class="title" id = "edu">education.</a><a class="period"></a><br />
    </div>
    <div id ="overlay2" class ="overlay2">
      
      <div id = "box" class ="box">
        

       <img src="images/Rinjani-1.JPG" style ="aboutphoto"  width="810" height="500" alt=""/> <!-- 665-->

       
   
 
       <p id ="abouttxt"> Welcome! </P> 
       <P id="aboutme">
       Hello! My name is Anna Selonick. I am junior at Northwestern University, majoring in Computer Science with a certificate in Design. My focuses are in Human-Computer Interaction and Artificial Intelligence. 
  <br/><br/>
      My freshman year at Northwestern I joined Design for America (DFA),
      an organization that seeks to make positive social and environmental 
      impact using the human-center design process. Working in teams of five to six people, 
      DFA members attempt to design solutions within the areas of Education, Health, and the Environment. 
      This experience has profoundly affected my goals and interests as a student. 
      I am not only passionate about programming, but also design and social change. 
      I want to write code that matters. I plan to pursue a career that allows me to understand my users, 
      and write code that will have a positive impact on their lives.
  <br/> <br/> <br/> 
       </p>
     


      </div> 
        
        
        <div id="projbox" class="projbox">

      <div id="gallerycontainer">
          <div id="gallery">
              <img id = "dtc" src="images/DTCposter.png" height ="500px" width ="800px"/>
              <img  id = "wnur" src="images/wnurPlugin.png" height ="500px" width ="800px" />
              <img id = "dc" src="images/robot1.JPG" height ="500px" width ="800px" />
             <img id = "safe" src="images/waterwaste.jpg" height ="500px" width ="800px"/>

          </div>
          <div id = "blurbs"> 
              <span id ="dtc"> 
                <div style="margin-left:5px;"> <b>Push-to-Pull</b>
                    <div class="date"> Northwestern University, winter 2013</div>
                   <p class="blurbtext">Won the Design Award for the Push-to-Pull, a push bar, which can be retrofitted to a pull door to allow users to avoid
                    using their hands to open doors and mitigate the spread of bacteria through door handles.</p>
                    <p class="blurbtext">Conducted research and user observations, created mock-ups, built working prototype, designed poster for the Segal
                    Design Expo, wrote final report and met with client.</p>
                  
                </div>
              </span>


              <span id = "wnur">
                <div style="margin-left:5px;"> <b>WNUR.org</b>
                  <div class="date"> Northwestern University, spring 2013</div>
                  <p class="blurbtext">As webmaster of wnur.org, I am currently implimenting a Wordpress plugin that 
                  includes a new schedule page to include in their site as well as an intuitive administration page
                  where staff can input the schedule details for each quarter. I also troubleshoot any issues
                  the staff has with posting new content. </p> <p class="blurbtext">This position and project has allowed me to improve my proficiency in HTML, CSS,
                  and PHP and practice collaborating in a team with non-developers to create an effective plugin that is both intuitive for users
                  and efficient from a programmer's prospective.</p>
                  </div>
              </span>

              <span id = "safe">
                <div style="margin-left:5px;"> <b>Predicting Safe Ride Wait Time</b>
                  <div class="date" >partnered with Green Chicago Restaurant Coalition, Design for America Summer 2012</div>
                    <p class="blurbtext">Aqua Cycle is a service that reduces water waste in restaurants by connecting restaurants with local landscape
                     projects. Landscapers then use the restaurants’ reusable water waste as a water source.</p>
                    <p class="blurbtext">Organized and conducted user interviews and observations, storyboarded the life cycle of water in a restaurant,
                     brainstormed solutions, tested mock-ups with users and presented final ideas to partners and design professionals.</p>
                  
                </div>
              </span>
              <span id = "dc">
                <div style="margin-left:5px;"><b>Autonomous Robot Design Competition</b><div class ="date">Northwestern University, winter-spring 2013</div>
                <p class="blurbtext">Last spring, I competed in a robot competition with one other partner. The goal was to create a robot that could pick up 
                small objects in an arena and return them to a homebase. I designed and built the chassis for the robot as well as helped design 
                and debug the program we ran on the robot's PIC32.</p>
                <p class="blurbtext">This project challenged me to apply my background in Computer Science to another field, mechatronics, in which I did not 
                  have any previous experience. Simultaneously trying to create an efficient program, a sturdy mechanical design and a well-organized
                  electrical system to work together as one robot was great puzzle that I will never forget.   
                </p>
                </div>
              </span>
            </div>

         
         
            <div id="thumbs">
              <div  id= "dtc" class ="sub"> Push-to-Pull <span class ="date">winter 2013</span></div>
              <img id ="dtc" src="images/DTCposter.png" height ="125px" width ="125px" / >
              
              <div  id= "wnur" class ="sub" height ="125px" width ="125px">Schedule Plugin for wnur.org <span class ="date">summer 2012</span></div>
              <img id= "wnur" src="images/wnurPlugin_thumb.png" height ="125px" width ="125px"/>
              
              <div  id= "dc" class ="sub" height ="125px" width ="125px"> Design Competition <span class ="date">winter-spring 2013</span></div>
              <img  id= "dc"  src="images/robot1.JPG"height ="125px" width ="125px"/>
              
              <div  id= "safe" class ="sub" height ="125px" width ="125px"> Predicting Safe Ride Wait Time<span class ="date"> winter 2014</span> </div>
             <img  id= "safe" src="images/waterwaste.jpg" height ="125px" width ="125px"/>
           </div>
             
<script type="text/javascript">

$( "#thumbs>img#dtc" ).mouseover(
  function() {
    $('.sub#dtc').show()
});

$( "#thumbs>img#wnur" ).mouseover(
  function() {
    $('.sub#wnur').show();
});
$( "#thumbs>img#dc" ).mouseover(
  function() {
    $('.sub#dc').show();
});
$( "#thumbs>img#safe" ).mouseover(
  function() {
    $('.sub#safe').show();
});

$( "#thumbs>img" ).mouseout(
  function() {
    $('.sub').hide();
});

/*$( "#thumbs>img" ).click(
  function() {
    $('.sub').show();
});*/

</script>
    </div> <!-- end gallery container-->
           
       </div> <!--end proj box-->

 

        <div id="workbox" class="workbox">  </div>

        <div id="edubox" class = "edubox">
          <div id ="resume" ><h2 style="margin-bottom:0px;margin-top:0px;"> Northwestern University </h2><b>Evanston, IL</b>
<h3 style="margin-bottom:0px;">Bachelor of Arts in Computer Science </h3>
Weinberg School Arts and Sciences <br/>
Segal Design Certificate - Segal Design Institute<br/>
Overall GPA 3.3/4.0<br/>
Anticipated Graduation June 2015
<br/>

<h3 style="margin-bottom:0px;">Relevant Coursework</h3>
Machine Learning
• Human-Computer Interaction
• Programming Language Concepts
• Introduction to Computer Systems
• Mathematical Foundations of
Computer Science
• Data Structures and Management
• Design Thinking and Communication
• Interdisciplinary Design Projects
<br/>
<h3 style="margin-bottom:0px;">Extra-Curricular Activities</h3>
Member of Alpha Chi Omega, Design for America, Novice Rock Climber
<br/>
<h2 style="margin-bottom:0px;">National University of Singapore</h2> <b>Singapore, Singapore - Fall 2013</b><br/>
<b>Relevant Coursework:</b> Programming Language Concepts<br/><br/><br/></div>
        

        <div id ="quote" > <p id="quotetext">In response to will this be on the test?
          <br /><br />
          "The test will measure whether you are an informed, engaged, and productive citizen of the world,
           and it will take place in schools and bars and hospitals and dorm rooms and in places of worship... The test will last your entire life, 
             and it will be comprised of the millions of decisions that, when taken together, will make your life yours. 
             And everything, everything, will be on it." <br/> <br/> - John Green<p>
        </div>


        </div>
          
           


 </div>


          





</div>
<script src = "../wp-content/themes/twentythirteen-child/mainscript.js"  type='text/javascript' ></script> 
</body >

</html>



