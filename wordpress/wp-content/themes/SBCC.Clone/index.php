<?php get_header(); 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */

?>
  <main role="main">
    <!-- section -->
    <section>
      <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    </section>
    <!-- /section -->
<!------------- Start of Testimonies ------------->

<section>
<div class="row gutter mr-5 ml-5">
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote1.jpg" alt="Isabel, student at Santa Barbra City College">
	<div class="carousel-caption  bold">
		<p>I'm happy to be in a school where classes are small and where I have direct contact
									with the faculty.</p>
		<p class="text-uppercase">Isabel</p>
		
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote2.jpg" alt="Will, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<p>I'm happy to be in a school where classes are small and where I have direct contact
									with the faculty.</p>
		<p class="text-uppercase ">Will</p>
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote3.jpg" alt="Mekia, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<p>After learning about the award-winning nursing program here, I knew it was the right
									choice for me.</p>
		<p class="text-uppercase ">Mekia</p>
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote4.jpg" alt="Cameron, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<p>I'm so grateful to SBCC for setting me up for success.</p>
		<h6 class="text-uppercase ">Cameron</h6>
	</div>
	</div>
</div>
</section>

<!------------- End of Testimonies ------------->

<!------------- Start of "Find your path" --------------->
<section>
<div class="row ml-5 mr-5 mt-3">
	<div class="col-sm-12 mt-5">
		<h1 class="mt-5">Find your path</h1>

		<p class="mt-5">Expand your horizons by taking a range of classes, or focus on the field that inspires
    you. You can rely on our support as you aim for success.</p>

	</div>
</div>
</section>

<!------------- End of "Find your path" --------------->

<!------------- Start Section Image -------------------->

 <section >
<div class="row">
	<div class="col-sm-5 col-md-5">
		<button type="button" class="btn btn-primary btn-lg btn-block">Apply and Enroll</button>
		<button type="button" class="btn btn-primary btn-lg btn-block ">Academic and Career Pathways</button>
		<button type="button" class="btn btn-primary btn-lg btn-block ">All Degrees and Certificates</button>
		<button type="button" class="btn btn-primary btn-lg btn-block ">Find a Class</button>
		<button type="button" class="btn btn-primary btn-lg btn-block ">Support and Success</button>
</div>
</section>
<!------------- End Section Image -------------------->

<!-------------- Start Finances  ---------------------->
<section>
<div class="row ml-5 mr-5 mt-3">
  <div class="col-sm-12 mt-5">
    <h1>Acess and Affordable Degree</h1>
  </div>
</div>
<div class="row ml-5 mr-5 mt-3">
  <div class="col-xs-3 col-md-2 mt-5">
    <img src="http://SBCC.clone/wp-content/uploads/2019/12/icon1-e1577481537883.png" alt="200 plus." >
    <h1 class="text-bold text-center">200+</h1>
    <p class="text-center">scholarship offerings annually via SBCC and the SBCC Foundation</p>
    
  </div>
  <div class="col-xs-3 col-md-3 mt-5">
  <img src="http://SBCC.clone/wp-content/uploads/2019/12/icon2-e1577481547184.png" alt="200 percent." class="finance-img">
  <h1 class="text-bold text-center">87%</h1>
    <p class="text-center">of students recieve financial aid</p>
  </div>
  <div class="col-xs-3 col-md-3 mt-5">
    <img src="http://SBCC.clone/wp-content/uploads/2019/12/icon3-e1577481554554.png" alt="2 years"  class="finance-img">
    <h1 class="text-bold text-center">2 years</h1>
    <p class="text-center">of free tution, books, fees, and supplies to local high-school graduates</p>
  </div>
  <div class="col-xs-3 col-md-3 mt-5">
  <img src="http://SBCC.clone/wp-content/uploads/2019/12/icon4-e1577481563975.png" alt="Pay for college.">
  <h1 class="text-bold text-center">Pay</h1>
  <h2 class="text-center text-bold">for college</h2>
  </div>
</div>
</section>
<!-------------- End Start Finances  ---------------------->

<!-------------- Start Announcemnets ---------------------->
<section>
<div class="row ml-5 mr-5 mt-3">
  <div class="col-sm-12 mt-5">
  <h1>Accouncemnts</h1>
  </div>
  <div class="row ml-5 mr-5 mt-3">
  <div class="col-xs-4 col-md-4 mt-5">
    <img src="http://SBCC.clone/wp-content/uploads/2019/12/announcemnt1-e1577485522396.png" alt="" class="anncouncment-img">
    <p>Sign uo to receive emergency notifcations from SBCC: TEXT "Join SBCC" to 58339</p>
  </div>
  <div class="col-xs-4 col-md-4 mt-5">
    <img src="http://SBCC.clone/wp-content/uploads/2019/12/announcement2-e1577485563380.jpg" alt="" class="anncouncment-img" >
    <p>SBCC Trustees pleased to announce selection of Dr. Goswami as the next Superintendent/President</p>
    
  </div>
  <div class="col-xs-4 col-md-4 mt-5">
    <img src="http://SBCC.clone/wp-content/uploads/2019/12/announcement3-e1577485596462.png" alt="" class="anncouncment-img">
  </div>

</div>
</section>

<!-------------- Start Announcemnets ---------------------->
  </main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>