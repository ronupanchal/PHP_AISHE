<?php 
  include("header.php");

?>
<style>


.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #000;
  background:rgba(255,255,255,0.5);
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
		
		<div class="slideshow-container">
			<div class="mySlides fade">
				
			
			<img src="upload/slider/banner.png" style="width:100%">
				<div class="text">All India Survey of Higher Education</div>
			
  
			</div>
			
			<a class="prev" onclick="plusSlides(-1)" style="left:0px;">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<!--<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
					</div>
		-->
		</div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>WELCOME TO AISHE</h3>
          <!--<h5>Title description, <span class="w3-opacity">April 7, 2016</span></h5>-->
        </div>

        <div class="w3-justify">
          <!--<img src="/w3images/runway.jpg" alt="Runway" style="width:100%" class="w3-padding-16">-->
			<p>To portray the status of higher education in the country, Ministry of Human Resource Development
				has endeavoured to conduct an annual web-based All India Survey on Higher Education (AISHE) since 2010-11.
				The survey covers all the Institutions in the country engaged in imparting of higher education. Data is being
				collected on several parameters such as teachers, student enrolment, programmes, examination results, education finance,
				infrastructure. Indicators of educational development such as Institution Density, Gross Enrolment Ratio,
				Pupil-teacher ratio, Gender Parity Index, Per Student Expenditure will also be calculated from the data collected 
				through AISHE. These are useful in making informed policy decisions and research for development of education sector.
			</p>
          <!--<p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">3</span></button></p>-->
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_mountain.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Jane <span class="w3-opacity w3-medium">April 10, 2015, 7:22 PM</span></h4>
                <p>That was a great runway show! Thanks for everything.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/boy.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>John <span class="w3-opacity w3-medium">April 8, 2015, 10:32 PM</span></h4>
                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_hood.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Anja <span class="w3-opacity w3-medium">April 7, 2015, 9:12 PM</span></h4>
                <p>Cant wait for the runway to start!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Our Qualities</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white" type="disc">
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Denim</span>
            <br>-->
            <span>Know Your Approving Authority</span>
          </li>
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Sweaters</span>
            <br>-->
            <span>Know Your AISHE Code​</span>
          </li>
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Workshop</span>
            <br>-->
            <span>Request For Adding Institute In Aishe Portal</span>
          </li>
			<!--<li class="w3-padding-16">
            <img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Better Engineering Capabilities and Services​</span>
          </li>
<li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Cam Automation for Rider Roll</span>
          </li>
<li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Continuous Design Improvements​</span>
          </li>
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Performance through Quality Components​</span>
          </li>-->
        </ul>
      </div>
	  
	   <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>News</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white" type="disc">
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Denim</span>
            <br>-->
            <span>Reference Dtaes to fill DCF of AISHE 2018-19</span>
          </li>
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Sweaters</span>
            <br>-->
            <span>National Career Service</span>
          </li>
          <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Workshop</span>
            <br>-->
            <span>Common Problems</span>
          </li>
		  <li class="w3-padding-16">
            <!--<img src="images/a2.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Workshop</span>
            <br>-->
            <span>Swachh Bharat Abhiyan</span>
          </li>
		  </ul>
		  </div>
      <hr>

      <!-- Advertising -->
      <!--<div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Achievement</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" >
            <span class="w3-display-middle">By JK Paper Mile Pvt Ltd</span>
			<a href="upload/achievement/JK_Letter.jpg" target="_blank"><img  src="upload/achievement/JK_Letter.jpg" style="width:100%"></a>
			
          </div>
        </div>
      </div>-->
      <hr>
	  
	  

      
      <!-- Subscribe -->
      <!--<div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>
      -->
    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>
<!-- Header -->
  <!--<header class="w3-container w3-center w3-padding-48 w3-white">
    <h3><b>OUR PRODUCT</b></h3> 
	<marquee><div class="w3-row">
	<div class="w3-third">
  <p>HYDRO TURBINE</p>  
  <img src="../upload/products/0image11.jpg" height="150" width="150" class="w3-border w3-padding" alt="Products"> 
</div>

<div class="w3-third">
  <p>PIPING11AAAA</p>  
  <img src="../upload/products/12.jpg" height="150" width="150" class="w3-border w3-padding" alt="Products"> 
</div>

<div class="w3-third">
  <p>HYDRO1111</p>  
  <img src="../upload/products/image8.jpg" height="150" width="150" class="w3-border w3-padding" alt="Products"> 
</div>

</div></marquee>
  </header>-->
<div class="w3-row w3-border">
<div class="w3-third w3-container">
  <h2>Contact Us</h2>  
  <p>ADDRESS: At & Po:UMRAKH, Ta:Bardoli,<br>Dist:Surat,Gujarat, INDIA - 394602</p>
  <p>TEL: +91 02622 220581,224262,220581</p>
  <p>FAX: +91 2622 225458</p>
  <p>Email ID: aishenic@gmail.com</p>
  
</div>
<div class="w3-third w3-container">
  <h2>Links</h2>
  <p><a href="http://gtu-info.com/BSC/Government-Science-College-Valod-Tapi">Government College</a></p>
  <p><a href="http://www.knowyourcollege-gov.in/nonTechInstituteDetails.php?insti_id=507" target="_blank">Know Your Knowledge</a></p>
  <p><a href="http://www.aishe.gov.in/aishe/aisheCode" target="_blank">Know Your AISHE Code</a></p>
</div>
<div class="w3-third w3-container">
  <h2>Location</h2>
  <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29772.540513641565!2d73.10382815!3d21.129799799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0676962062319%3A0x42a65da81e176ab3!2sBardoli%2C+Gujarat!5e0!3m2!1sen!2sin!4v1441190264317" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
      </div>
  
       
       <div style="width: 100%"></div><br />

</div>
</div>
<?php include("footer.php"); ?>