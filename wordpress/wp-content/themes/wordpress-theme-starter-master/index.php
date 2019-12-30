<?php get_header(); ?>
<div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner bg-info" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">ONE</h1>
                </div>
            </div>
            <dixv class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">TWO</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">THREE</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

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

                <?php get_footer(); ?>

                </div>

               </div> 
            </div>    
        </div>        
