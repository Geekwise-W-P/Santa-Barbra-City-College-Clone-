<?php get_header(); ?>

<!--Begining Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="http://SBCC.clone/wp-content/uploads/2020/01/sb-carousel1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="http://SBCC.clone/wp-content/uploads/2020/01/sb-carousel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="http://SBCC.clone/wp-content/uploads/2020/01/sb-carousel3.jpg" alt="Third slide">
        </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--End Carousel-->

<!--Centering Content-->
        <div class="container">
        
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <main role="main">
                        <!-- section -->
                        <section>

                            <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

                            <?php get_template_part('loop'); ?>

                            <?php get_template_part('pagination'); ?>

                        </section>
                        <!-- /section -->
                        
                
                    </main>

				
				<?php get_sidebar(); ?>

                

                </div>

               </div> 
            </div>    
        </div>     
        <?php get_footer(); ?>   
<!--End Content-->