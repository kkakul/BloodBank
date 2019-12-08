<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body bgcolor="fbfff4">

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo6.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>

	<!--after main header-->
	<div>
        
<table>
<tr width='400' height='200' >
<td >
 <img src="Images/welcome1.png" height='200'  width='350'/>
</td>
		<td  width='900' height='200' vertical-align='top'>
<font size="4">Someone there is of your type: At the hour of need we connect your blood type with you.
<br><br>
This tool provides information about the nearest blood campaigns, blood availability, information about the donors, rules regarding who can donate and who cannot.
<br><br>
We positively believe that this system can effectively overcome most of the challenges associated regarding the availability and donation of different blood groups and provide transparency of the procedure. 


</font></td>

</tr></table>

</div>

<!-- slider part-->
<div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/scr1.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr2.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr3.jpg" height='350' width='200'/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr4.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr5.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr6.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr7.jpg" height='350' width='200' />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/scr8.jpg" height='350' width='200'/>
  	    		</li>
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4>Blood bank:</h4>
			<p>We welcome you to in our WebSite. If you are a donor , We appreciate you <a href="index1.php">signing up</a> online as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by <a href="index.php">www.sambalindia.com</a> on behalf of "Sambal Blood Bank"
as a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, 
the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including 
loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.
We request donors to update contact details regularly.</p>
	</div>
	<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						<div class="blog_heading">
							<span style="font-weight:bold"><b>Rotract Club NIT Hamirpur organizing a blood donation camp</b>
<p>Rotract Club NIT Hamirpur organizing a blood donation camp on Tuesday, December
10, 2019. The camp will initiate from 10.00am onwards at the health care centre
NIT Hamirpur.
All the faculty members, as well as students, are cordially invited to help for
the social cause.</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in India</b>
<p>While the overall number of blood donors in India has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>