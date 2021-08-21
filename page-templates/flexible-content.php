<?php
/**
 * Template Name: Flexible Content
 *
 * Flexible content template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
	
        <div class="container">

            <h1 class="pb-4 text-center"><?php the_title() ?></h1>

            <?php if( have_rows('content')) : ?>

                <?php while( have_rows('content')) : the_row(); ?>

                        <?php get_template_part('template-parts/flexible-content/two', 'column'); ?>
                        
                        <?php get_template_part('template-parts/flexible-content/slider'); ?>
                        
                        <?php get_template_part('template-parts/flexible-content/accordion'); ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>



    
    <?php wp_footer(); ?>
</body>
</html>