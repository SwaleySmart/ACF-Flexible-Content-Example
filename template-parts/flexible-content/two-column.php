                   

                   <?php if (get_row_layout() == 'text_with_image') : 
                        
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $image = get_sub_field('image');
                        $imageurl = $image['sizes']['large'];
                        $side = get_sub_field('image_side');
                        $rowdirection;

                        if( $side == 'right') {
                            $rowdirection = 'flex-md-row flex-column';
                        } elseif ( $side == 'left' ) {
                            $rowdirection = 'flex-md-row-reverse flex-column-reverse';
                        }

                    ?>
                        <section class="pt-4 pb-2">
                            <div class="<?php echo 'd-flex ' . $rowdirection; ?>">
                                <div class="p-2 col-md-6">
                                    <h2 class="pb-2"><?php echo $title; ?></h2>
                                    <?php echo $text; ?>
                                </div>
                                <div class="p-2 col-md-6">
                                    <img src="<?php echo $imageurl; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                            </div>
                        </section>

                    <?php endif; ?>

