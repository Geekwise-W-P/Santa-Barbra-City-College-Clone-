<?php get_header(); ?>

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
		<h1 class="quote">''</h1>
		<p>I'm happy to be in a school where classes are small and where I have direct contact
									with the faculty.</p>
		<p class="text-uppercase">Isabel</p>
		
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote2.jpg" alt="Will, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<h1>''</h1>
		<p>I'm happy to be in a school where classes are small and where I have direct contact
									with the faculty.</p>
		<p class="text-uppercase ">Will</p>
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote3.jpg" alt="Mekia, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<h1>''</h1>
		<p>After learning about the award-winning nursing program here, I knew it was the right
									choice for me.</p>
		<p class="text-uppercase ">Mekia</p>
	</div>
	</div>
	<div class="col-xs-3 col-md-3">
	<img src="http://SBCC.clone/wp-content/uploads/2019/12/quote4.jpg" alt="Cameron, student at Santa Barbra City College">
	<div class="carousel-caption bold">
		<h1>''</h1>
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

<section> 
<div class="row">
	<div class="col-sm-5 col-md-5">
		<button type="button" class="btn btn-primary btn-lg btn-block pull-right">Apply and Enroll</button>
		<button type="button" class="btn btn-primary btn-lg btn-block pull-right">Academic and Career Pathways</button>
		<button type="button" class="btn btn-primary btn-lg btn-block pull-right">All Degrees and Certificates</button>
		<button type="button" class="btn btn-primary btn-lg btn-block pull-right">Find a Class</button>
		<button type="button" class="btn btn-primary btn-lg btn-block pull-right">Support and Success</button>
</div>

</section>

<!------------- End Section Image -------------------->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
