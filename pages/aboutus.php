
<head>
	<!-- Website Title & Description for Search Engine purposes -->
		<title>About Us</title>
        <?php include ("../includes/includefiles.html"); ?>
</head>

<body>
<?php
	session_start();
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
     include("../includes/navbar.php"); ?>
        <div class="container">
        <?php  include("../includes/alert.php"); ?>
    		<div class="well text-center">
                <div class="page-header">
                        <h2>ZABDENO</h2><small>&nbsp;A W4 RANKING INSTITUTE</small>
                </div><!-- end page-header-->
                            <p class="lead">Well Recognized and one of the largest universites of lahore</p>
                            <p>
                                <b class="lead">Faculty</b><br>
                                <h4>Teachers are talented and sincere regarding the studies of students.
                                More than 50 faculty memebers who are all passionate and hardworking.
                                28 Ph.D Holders from foreign Universities are in our team.</h4>
                           </p>
                           
                              <p>
                                <b class="lead">Campuses</b><br>
                                <h4>
                                    More than 5 campuses in all main cities of Pakistan.<br>
                                    All are offering more than 50 courses.
                                </h4>
                           </p>
                           
                              <p>
                                <b class="lead">Events</b><br>
                                <h4>
                                    Events and extra-curicullar activies are being organized at regular intervals.
                                    
                                </h4>
                           </p>
                           
                              <p>
                                <b class="lead">ZABDENDO AT A GLANCE</b><br>
                                <h4>
                                    Ranking of our Institute has raised continuously from last few years and 
                                    a still improving day by day. If you are worried about your future the you 
                                    should <a href="#">JoinUs</a> and leave the rest to us.
                                </h4>
                           </p>
                
    		</div><!-- end well-->
    </div>
</body>
<?php include("../includes/footer.php"); ?>	
