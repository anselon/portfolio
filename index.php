
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
  <link rel="icon" type = "image/jpg" href = "images/A.png">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/twentythirteen-child/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Roboto+Slab:400,300,100' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Average+Sans:100,300,400,700' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Roboto:500,100' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

 <script type="text/javascript">
/*

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


<div id="header">
 <p class = "anna">anna.selonick 

<a href="http://www.linkedin.com/in/annaselonick" style="text-decoration:none;">

    <img id="contact" style="display:inline;" src="https://static.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" 
  width="20" height="15" alt="View Anna Selonick's LinkedIn profile" border="0"></a>

<a id="twitter" href="https://twitter.com/annaselon" style="padding-top:60px;"class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @annaselon</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?
  'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
  fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
 

  <a id ="contact" href="mailto:abselonick@gmail.com" target="_blank">Email</a>
</p>
</div>
 <!-- <div id="canvas-wrap">
 
   
    <canvas id="myCanvas" width="1200" height="500">


    </canvas> 
     <div id="container">
    <div id="contents">
       </div>
     <div id="gradient">
          </div>
</div>-->

    <div id="overlay" class = "overlay">
   
      <br />
      <a class="title" id ="about" >about.</a><a class="period"></a> <br />
      <a class="title" id ="proj">projects.</a><a class="period"></a><br />
      <a class="title" id = "edu">education.</a><a class="period"></a><br /> 
      <a class="title" id ="work">work.</a><a class="period"></a> <br />

    </div>
    <div id ="overlay2" class ="overlay2">
      
      <div id ="aboutbox" class ="box">
        
<div id ="aboutcontainter">
       <img src="images/Rinjani.png" style ="aboutphoto"  width="90%" height="auto" max-height="800px;" alt=""/> <!-- 665-->

       
   

        <span id="aboutme"><span id ="greeting"> Hello! </span> 
      
       My name is Anna Selonick. I am junior at Northwestern University, majoring in Computer Science with a certificate in Design. 
       I focus in <span style="color:#B5095C;">Interfaces </span>  and <span style="color:#B5095C;">Artificial Intelligence</span>. 
  
    <span id="aboutme2">
      My freshman year at Northwestern I joined <span style="color:#B5095C;"> Design for America </span>(DFA),
      an organization that seeks to make positive social and environmental 
      impact using the <span style="color:#B5095C;">human-centered design process</span>. Working in teams of five to six people, 
      DFA members attempt to design solutions within the areas of education, health, and the environment. 
      This experience has profoundly affected my goals and interests as a student. 
      I am not only passionate about  <span style="color:#B5095C;">programming</span>, but also design and <span style="color:#B5095C;">social change</span>. 
      I want to write code that matters to me and to others. I plan to pursue a career that allows me to understand my users, 
      and write code that will have a positive impact on their lives.
      <br/> <br/> 
    </span>
  <br/> <br/> <br/> 
       </span></div>
     


      </div> 
        
        
        <div id="projbox" class="projbox">

      <div id="gallerycontainer">
          <div id="gallery">
              <img id = "dtc" src="images/cloud.png" height ="500px" width ="85%"/> 
              <img  id = "wnur" src="images/wnurPlugin.png" height ="500px" width ="85%" />
              <img id = "safe" src="images/saferide_car.png" height ="500px" width ="85%"/>
              <img id = "giftr" src="images/giftr.png" height ="500px" width ="85%"/>
              <img id = "dc" src="images/robot.png" height ="500px" width ="85%" />
             <img id = "water" src="images/waterwaste.png" height ="500px" width ="85%"/>


          </div>
          <div id = "blurbs"> 


                            
                        
              <span id ="dtc"> 
                <div style="margin-left:5px;"> <b style="font-size:17px;">Get Started Guide for AppNexus API  </b>
                 <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                    <div class="date"> Northwestern University, winter 2013
                    <br /> 
        			 <b>Language:</b> Javascript
                    </div>
                   <p class="blurbtext">While working at GT Nexus as a Developer Evangelist Intern, I created a 
                    "Get Started Guide" for the REST API for GT Nexus' application development platform, AppXpress.
                    The guide provides step-by-step instructions, constructs basic curl calls when given HTTP headers by the user,
                     and  provides example requests using Postman REST Client. 
                     I also finished the scripting for an environmental survey module created with AppXpress.
                  </p>
                    
                    <p class ="blurbtext" style="font-size:10px">Image Credit: Cloud Computing designed by Mister Pixel from the thenounproject.com</p>
                  
                </div>
              </span>


              <span id = "wnur">
                <div style="margin-left:5px;"> <b style="font-size:17px;">WNUR.org</b>
                  <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                  <div class="date"> Northwestern University, spring 2013
                  <br /><b>Languages:</b> Javascript, Jquery, PHP, HTML, CSS
                  </div>
        		  
                  <p class="blurbtext">As webmaster of <a style ="color:#B5095C;text-decoration:none;"href="http://www.wnur.org/" target=_blank> WNUR </a>, I recently implimented a Wordpress plugin that 
                  includes a new <a style ="color:#B5095C;text-decoration:none;"href="http://www.wnur.org/programming/programming" target=_blank> schedule page </a> to include in their site as well as an intuitive administration page
                  where staff can input the schedule details for each quarter. I also troubleshoot any issues
                  the staff has with posting new content. </p> <p class="blurbtext">This position and project has allowed me to improve my proficiency in HTML, CSS,
                  and PHP and practice collaborating in a team with non-developers to create an effective plugin that is both intuitive for users
                  and efficient from a programmer's prospective. The schedule is posted <a style ="color:#B5095C;text-decoration:none;"href="http://www.wnur.org/programming/programming" target=_blank >here</a>.
              </p>
                  </div>
              </span>

                <span id = "safe">
                <div style="margin-left:5px;"> <b style="font-size:17px;">Predicting SafeRide Wait Time</b>
                  <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                  <div class="date" >Introduction to Machine Learning, winter 2013
                                    <br /> 
        		  <b>Language:</b> Python 
        		</div>
                    <p class="blurbtext"><a style ="color:#B5095C;text-decoration:none;"href="http://www.giftr.annaselonick.com" target=_blank >SafeRide</a> is a service on campus 
                    	that gives students rides on and off Northwestern's campus at night. The student-run service provides safe transportaiton for many people, however at certain times of night the wait can be 
                    	up to an hour. Thus, for a project last quarter I worked with a partner to predict the wait time at any hour on a given night. 
                    	We also created a <a style ="color:#B5095C;text-decoration:none;"href="http://www.davidmichaelryan.com/ProjectSafeRide" target=_blank >website</a> that detatiled the results.
                      </p>
                    <p class="blurbtext"> I used natural language processing to read the tweets from SafeRide's <a style ="color:#B5095C;text-decoration:none;"href="https://twitter.com/NUSafeRide " target=_blank >twitter</a> 
                    	where they post the wait times periodically throughout the night. We then coallated this data with weather data for Chicago, IL. We then used WEKA to test different
                    	 machine learning algorithms to see which ones worked the best with the data and analyzed the significance of the results.      
        		   </p>

                </div>
              </span>



                <span id = "giftr">
                <div style="margin-left:5px;"> <b style="font-size:17px;">Giftr</b>
                  <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                  <div class="date" >Human-Computer Interaction, winter 2013
                                    <br /> 
        		  <b>Languages:</b> Jquery, HTML, CSS</div>
                    <p class="blurbtext"><a style ="color:#B5095C;text-decoration:none;"href="http://www.giftr.annaselonick.com" target=_blank >Giftr</a> was a class project for a class on human-computer interaction. 
                    	I worked on a team with three design masters students to create a website that reccomends gifts to men to give to their significant others. 
                    	The site allows users to either get a recommendation using a "get inspired" feature, browse popular gifts, or post a sucessful gift.  </p>
                    <p class="blurbtext">In order to build the site, we sketched multiple options, then built a paper mock-up for user testing.
                    	After analyzing the feedback, we built the site, choosing one task (get inspired) flow for vertical protoyping. 
                    	For the other two features (browse and post a sucess), we created more refined prototypes in photoshop to use on the site. 
                    	The final prototype can be found <a style ="color:#B5095C;text-decoration:none;"href="http://www.giftr.annaselonick.com" target=_blank >here</a>.        
        		   </p>

                </div>
              </span>

              <span id = "dc">
                <div style="margin-left:5px;font-size:20px;"><b style="font-size:17px;">Autonomous Robot Design Competition</b>
                  <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                  <div class ="date">Northwestern University, winter-spring 2013               
                  <br />
        		  <b>Language:</b> C</div>
                <p class="blurbtext">Last spring, I competed in a robot competition with one other partner. The goal was to create a robot that could pick up 
                small objects in an arena and return them to a homebase. I designed and built the chassis for the robot as well as helped design 
                and debug the program we ran on the robot's PIC32.</p>
                <p class="blurbtext">This project challenged me to apply my background in Computer Science to another field, mechatronics, in which I did not 
                  have any previous experience. Simultaneously trying to create an efficient program, a sturdy mechanical design and a well-organized
                  electrical system to work together as one robot was agreat puzzle that I will never forget.   
                </p>
                </div>
              </span>


              <span id = "water">
                <div style="margin-left:5px;"> <b style="font-size:17px;">Aqua Cycle</b>
                  <b id ="plus" style="font-size:20px;float:right;margin-right:75px;line-height:20px;">+</b>
                  <div class="date" >partnered with Green Chicago Restaurant Coalition, Design for America Summer Studio 2012</div>
                    <p class="blurbtext">Aqua Cycle is a service that I designed with a team of 3 other people as a solution to the problem statement
                      how can we reduce water waste in restaurants? This service would connect restaurants with local landscape
                     projects for landscapers to use the restaurants’ reusable water waste as a water source.</p>
                    <p class="blurbtext">I worked on this project as a summer fellow for Design for America. Working on this project full-time for six weeks
                      allowed me to immerse myself in the human-centered design process and understand what it means to learn about your user. 
                      During this time, I organized and conducted user interviews and observations, storyboarded the life cycle of water in a restaurant,
                      brainstormed solutions, tested mock-ups with users and presented our final ideas to partners and design professionals.</p>
                </div>
              </span>






            

            <!-- end of blurbs-->
            </div>

         <div id="thumbscontainer">
         
           <div id="thumbs">
              <div  id= "dtc" class ="sub"> Get Started Guide for AppNexus API <!--<span class ="date">summer 2013</span>--></div>
              <img id ="dtc" src="images/cloud.png" height ="122px" width ="122px" / >
              
              <div  id= "wnur" class ="sub" height ="125px" width ="125px">Schedule Plugin for wnur.org <!--<span class ="date">summer 2012</span>--></div>
              <img id= "wnur" src="images/wnurPlugin_thumb_160.png" height ="122px" width ="122px" />
             
             <div  id= "safe" class ="sub" height ="125px" width ="125px"> Predicting SafeRide Wait Time <br /><!--<span class ="date"> winter 2014 </span> --></div>
             <img  id= "safe" src="images/saferide_car.png"height ="122px" width ="122px"/>
             
             <div  id= "giftr" class ="sub" height ="125px" width ="125px"> Giftr <br /><!--<span class ="date"> winter 2014 </span> --></div>
             <img  id= "giftr" src="images/giftricon.png"height ="119px" width ="122px"/>

              <div  id= "dc" class ="sub" height ="125px" width ="125px"> Design Competition <!--<span class ="date">winter-spring 2013</span>--></div>
              <img  id= "dc"  src="images/robot.png"height ="122px" width ="122px"/>
              
              <div  id= "water" class ="sub" height ="125px" width ="125px"> Aqua Cycle <br /><!--<span class ="date"> winter 2014 </span>--> </div>
             <img  id= "water" src="images/waterwaste.png"height ="119px" width ="122px"/>

            
           </div>
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
$( "#thumbs>img#water" ).mouseover(
  function() {
    $('.sub#water').show();
});
$( "#thumbs>img#giftr" ).mouseover(
  function() {
    $('.sub#giftr').show();
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

 

        <div id="workbox" class="workbox">  

      <div>  <a href="https://drive.google.com/file/d/0B392F0ZLJAHmSVZRTlZZeDU4YVk/edit?usp=sharing" 
          target ="_blank" id ="resumelink" style="float:left;">Resume</a></div>
          <br />
             <br />
        <h3 style="margin-bottom:0px;margin-top:0px;">  GT Nexus  </h3>
              <b>Developer Evangelist Intern</b> <span style="float:right;"> New York, New York, Summer 2013 </span>
                  <ul class ="blurbtext">
                    <li>Finished the scripting and user interface for an environmental survey 
                      created with AppXpress, GT Nexus’ open development platform. </li>
                    <li>Created a “Get Started Guide” for the AppXpress API that constructs 
                      basic curl calls given the users’ input.</li>
                  </ul>
        
        <h3 style="margin-bottom:0px;">WNUR 89.3 FM Northwestern University Radio Station</h3>
            <b> Webmaster</b>  <span style="float:right;">Northwestern University, Spring 2013-Present</span> 
                <ul>
                  <li>Currently designing and implementing a Wordpress plugin for wnur.org that includes 
                    a new schedule page and allows users to update the schedule.</li>
                  <li>Maintain website and troubleshoot Wordpress problems.</li>
                </ul>

        <h3 style="margin-bottom:0px;">Design for America </h3>
            <b> Team Management and Recruitment</b>  <span style="float:right;">Northwestern University, Fall 2012-Spring 2013</span>
                <ul>
                  <li>Spearheaded recruitment, guided coaches, and orchestrated kickoff event and final presentations.</li>
                </ul>





<br /><br /><br /><br />


        </div>

<div id="edubox" class = "edubox">
          <div id ="resume" >
            <h2 style="margin-bottom:0px;margin-top:0px;"> Northwestern University 

          <!--<span > <a href="https://drive.google.com/file/d/0B392F0ZLJAHmVFJLSkVCYUpsOWc/edit?usp=sharing" 
          target ="_blank" id ="resumelink">Resume</a></span>-->
          </h2>


            <b>Evanston, IL - Anticipated Graduation June 2015</b>
           
            <h3 style="margin-bottom:0px;">Bachelor of Arts in Computer Science </h3>
            Weinberg School Arts and Sciences <br/>
            <h3 style="margin-bottom:0px;margin-top:0px;">Segal Design Certificate </h3>
            Segal Design Institute<br/>

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

            <h3 style="margin-bottom:0px;">Languages</h3>
            Proficient in C++, C#, OCaml, HTML, CSS, Javascript
            <br/>
            Experience with C, PHP
            <br/>

            <h3 style="margin-bottom:0px;">Extra-Curricular Activities</h3>
            Member of Alpha Chi Omega, Design for America, Novice Rock Climber
            <br/>
            <h2 style="margin-bottom:0px;">National University of Singapore</h2> <b>Singapore, Singapore - Fall 2013</b><br/>
            <b>Relevant Coursework:</b> Programming Language Concepts<br/><br/><br/></div>
                    

                   <div id ="quote" > <p id="quotetext">In response to will this be on the test?
                      <br /><br />
                      "The test will measure whether you are an informed, engaged, and productive citizen of the world. . . 
                       The test will last your entire life, 
                       and it will be comprised of the millions of decisions that, when taken together, will make your life yours. 
                       And everything, everything, will be on it." <br/> <br/> - John Green<p>
                  </div>
            <!--, and it will take place in schools and bars and hospitals and dorm rooms and in places of worship-->
          <!--- end resume page -->
          </div>
</div>
 </div>
</div>
<script src = "../wp-content/themes/twentythirteen-child/mainscript.js"  type='text/javascript' ></script> 
</body >

</html>



