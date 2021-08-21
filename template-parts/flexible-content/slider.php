
     <?php if( get_row_layout() == 'image_slider' ): ?>

            <?php if( have_rows('slider') ): ?>
                <section class="pt-4 pb-2">
                <div id="image-slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php $i = 0; ?>

                        <?php while ( have_rows('slider') ) : the_row(); 
                        $image = get_sub_field('slide'); 
                        $imageurl = $image['sizes']['slider'];
                        
                        ?>

                            <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>">
                                <img class="d-block w-100" src="<?php echo $imageurl; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>

                        <?php endwhile; ?>
                    </div>
                        <a class="carousel-control-prev" href="#image-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#image-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                </div>
                </section>
                

            <?php endif; ?>

        <?php endif; ?>



