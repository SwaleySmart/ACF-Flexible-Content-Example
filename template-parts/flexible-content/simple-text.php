                
                   <?php if (get_row_layout() == 'simple_text') : 
                        
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');

                    ?>
                        <section class="pt-4 pb-2 d-flex justify-content-center">
                                <div class="p-2">
                                    <h2 class="pb-2 text-center"><?php echo $title; ?></h2>
                                    <?php echo $text; ?>
                                </div>

                        </section>

                    <?php endif; ?>