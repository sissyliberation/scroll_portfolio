<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>YvesCourtoisDotCom</title>
	<meta name="title" content="Yves Courtois | My Portfolio">
	<meta name="description" content="Hi, I'm Yves Courtois. I'm a UT student, web developer, and robotics enthusiast.">
	<link rel="image_src" href="">
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta content="http://www.yvescourtois.com" property="og:url">
	<meta content="" property="og:image">
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Yves Courtois">

  <script type="text/javascript" src="includes/jquery-2.1.0.min.js"></script><style type="text/css"></style>
  <script type="text/javascript" src="includes/jquery.onepage-scroll.js"></script>
  <link href="includes/onepage-scroll.css" rel="stylesheet" type="text/css">

  <link href="includes/def-style.css" rel="stylesheet" type="text/css">
  <link href="includes/style.css" rel="stylesheet" type="text/css">

	<script>
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        loop: true,
        responsiveFallback: 600,
        afterMove: function(index) {
      alert(index);
      if(index==2) {
        if(!visited_tree) {
          setTimeout(function(){
            addToDepth(1);
            addToBreadth(1);
            setTimeout(function(){
              addToDepth(1);
              addToDepth(1);
              addToBreadth(1);
              visited_tree = true;
            },200);
          },100);
        }
      }
      else if(index==3) {
        if(!visited_graph) {
          setTimeout(function(){
            newGraph(nodes+1);
            setTimeout(function(){
              newGraph(nodes+1);
              setTimeout(function(){
                newGraph(nodes+1);
                visited_graph = true;
              },200);
            },200);
          },100);
        }
      }
    }
      });
		});
		
	</script>
  
  <script src="includes/demo.js"></script>

</head>
<body class="viewing-page-1 js">
    <div class="wrapper">	
 

	  <div class="main onepage-wrapper" style="position: relative;">
	    
      <section class="page1 section active" data-index="1" style="position: absolute; top: 0%;">
        <div class="page_container">
          <h1>Hi, I'm Yves Courtois</h1>
          <p class="info">Currently a student at the University of Texas at Austin, I am pursuing a BS in Mathematics with a concentration in Scientific Computation, a BA in Philosophy, and an Elements of Computing Certificate.</p>
          <p class="info">I enjoy projects involving robotics, web design and development, and programming, making, breaking, hacking, and designing things.</p>
          <h2 class="scrollInfo">scroll down for more</h2>
  	    </div>
  	    <!-- <img src="./index_files/phones.png" alt="phones"> -->
      </section>
	    
	    <section class="page2 section" data-index="2" style="position: absolute; top: 100%;background-color: #333;">
         <a href="https://github.com/yvescourtois/js_polar_clock"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
      </section>

      <section class="page3 section" data-index="3" style="position: absolute; top: 200%;background-color:#fff">
        <a href="https://github.com/yvescourtois/fractalTrees"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
        <div class="change">
          depth:
          <input onclick="addToDepth(-1);" type="button" value="-">
          <input onclick="addToDepth(1);" type="button" value="+"> 
          , breadth:
          <input onclick="addToBreadth(-1);" type="button" value="-">
          <input onclick="addToBreadth(1);" type="button" value="+">
        </div>
      </section>

      <section class="page4 section" data-index="4" style="position: absolute; top: 300%;background-color:#222;">
        <a href="https://github.com/yvescourtois/completeGraph"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
        <br>
        <input type="button" onclick="newGraph(nodes-1);" value="-">
        <input type="button" onclick="newGraph(nodes+1);" value="+">
      </section>

      <section class="page5 section" data-index="5" style="position: absolute; top: 400%;">
        <div class="page_container">
          <h1>Other Work I've done:</h1>
          <ul style="clear:both;text-align:left;list-style-type:none;padding-top:20px;">
            <li><a href="#">This Site</a></li>
            <li><a href="https://chrome.google.com/webstore/detail/your-new-tab-page/daeegpekhhgennllidlchmpaamfjhnfk">Your New Tab Page - Chrome Extension</a></li>
            <li><a href="https://chrome.google.com/webstore/detail/craigslist-last-visited/mpkmnnbdgbaddfngokdcdojhdakjhenm/">CraigsList: Last Visited - Chrome Extension</a></li>
            <li><a href="http://yvescourtois.com/tsh/">UT - Texas Secular Humanists Site</a></li>
            <li><a href="http://yvescourtois.com/piechart/">Dynamic Pie Chart Maker</a></li>
            <li><a href="http://ras.ece.utexas.edu/">UT IEEE Robotics and Automation Society Site</a></li>
            <li><a href="http://dsbof.com/">UT Tea Club Site</a></li>
            <li><a href="http://yvescourtois.com/pong_js/">Pong - JS game for browsers</a></li>
            <li><a href="http://yvescourtois.com/robotsAndDiamonds/">Robots and Diamonds game for browsers</a></li>
            <li><a href="http://yvescourtois.com/archimedesSpiral/">Archimedes Spiral - JS</a></li>
            <li><a href="https://github.com/yvescourtois/facebook-auto-like">Facebook Auto-Like Script</a></li>
            <li><a href="http://utskphi.com/">Sigma Kappa Phi UT Fraternaty Site</a></li>
            <li><a href="http://yvescourtois.com/lychrel/">Lychrel Number Calculator</a></li>
          </ul>
          <p>Check out my <a href="https://github.com/yvescourtois" class="links">GitHub</a> and <a href="http://www.linkedin.com/pub/yves-courtois/72/918/b08" class="links">LinkedIn</a> Too.</p>
        </div>
      </section>

      <section class="page6 section" data-index="6" id="6" style="position: absolute; top: 500%;">
        <div class="page_container">
          <h1>Contact Me</h1>

          <?php 
          $action=$_REQUEST['action']; 
          if ($action=="")  {
            ?> 
            <form  action="" method="POST" enctype="multipart/form-data" class="contactForm"> 
            <input type="hidden" name="action" value="submit">
              <input type="text" name="name"    placeholder="Name" />
              <input type="text" name="email"   placeholder="Email" />
              <input type="text" name="subject" placeholder="Subject" />
              <textarea          name="message" placeholder="Message" rows="4" cols="20" ></textarea>
              <div class="btns">
                <a class="reload btn contactFormBtn">Submit</a>
              </div>
            </form>  
            <?php 
          }  
          else { 
            $name=$_REQUEST['name']; 
            $email=$_REQUEST['email']; 
            $message=$_REQUEST['message'];
            $subject=$_REQUEST['subject']; 
            if (($name=="")||($email=="")||($message=="")) {
              echo "<h2>All fields are required, please fill the form again.</h2>"; 
            }
            else {
              if($subject=="") {
                $subject="YvesCourtois Contact MSG"; 
              }         
              $from="From: $name<$email>\r\nReturn-path: $email";
              mail("courtois1337@gmail.com", $subject, $message, $from); 
              echo "<h2>Email sent!</h2>"; 
            } 
          }   
          ?> 
        </div>  
      </section>
    </div> 
  </div>

  <script src="js_polar_clock/includes/polarClock.js"></script>
  <script src="fractalTrees/tree.js" type="text/javascript"></script>
  <script src="completeGraph/points.js"></script>
  <script src="includes/ready.js"></script>
</body></html>