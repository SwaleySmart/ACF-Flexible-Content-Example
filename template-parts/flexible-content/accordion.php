<?php if( get_row_layout() == 'accordion' ): ?>

    <?php if( have_rows('accordion_card') ): ?>

        <section class="mb-4 mt-4">
            <div id="accordion">

        <?php

        $counter = 0;

        ?>

        <?php while ( have_rows('accordion_card') ) : the_row();

            $title = get_sub_field('accordion_card_title');
            $body  = get_sub_field('accordion_body_text');
            $counter++;
            $id = (str_replace(' ', '-', strtolower($title))) . strval($counter);

        ?>


                <div class="card">
                    <div class="card-header" id="<?php echo $id; ?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="<?php echo '#collapse' . $id; ?>" aria-expanded="true" aria-controls="<?php echo '#collapse' . $id; ?>">
                                <?php echo $title; ?>
                            </button>
                        </h5>
                    </div>

                    <div id="<?php echo 'collapse' . $id; ?>" class="collapse" aria-labelledby="<?php echo $id; ?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $body; ?>
                        </div>
                    </div>
                </div>
            
        <?php endwhile; ?>

            </div>
        </section>
        
    <?php endif; ?>

<?php endif; ?>


        