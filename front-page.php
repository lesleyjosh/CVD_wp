<?php 
/*
Template Name: Home
*/

?>

<?php get_header(); ?>

    <section class="banner">
        <div class="container">
            <div class="banner-wrapper">
                <?php 
                    $args = array(

                    );
                ?>
                <div class="banner-text">
                    <h1><?php echo get_field('banner_title'); ?> </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odit hic debitis molestiae blanditiis, praesentium, eius laborum incidunt voluptatem non vero natus enim, ducimus et cumque nisi facere ipsa culpa.</p>
                    <a href="#" class="btn btn__yellow">Explore more</a>
                </div>
                <?php 
                $img = get_field('banner_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>

                
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="services-wrapper">
                <?php if(have_rows('serv_repeat')): while(the_repeater_field('serv_repeat')): ?>
                <div class="services-item">
                <?php 
                $img = get_sub_field('serv_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
                    <h3><?php echo get_sub_field('serv_title'); ?></h3>
                    <p><?php echo get_sub_field('serv_content'); ?></p>
                    <a href="#" class="btn btn__yellow">Get a Qoute</a>
                </div>
                <?php endwhile;
                    else : 
                        echo "there is no content";
                    endif;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="hm-about">
        <div class="container">
            <div class="hm-about-wrapper">
            <?php 
                $img = get_field('about_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>

                <div class="hm-about-text">
                    <h2><?php echo get_field('about_title'); ?> </h2>
                    <p><?php echo get_field('about_text'); ?></p>
                    <p><?php echo get_field('about_text'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- latest trends -->
    <section class="trends">
        <div class="container">
            <div class="trends-title">
                <h2><?php echo get_field('up_title')?></h2>
                <p><?php echo get_field('up_text')?></p>
            </div>
            <div class="trends-wrapper">
                <?php if(have_rows('trends_item')): while(the_repeater_field('trends_item')): ?>
                <div class="trends-item">
                <?php 
                $img = get_sub_field('trends_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
                    <div class="trends-text">
                        <h4><?php echo get_sub_field('trends_text')?></h4>
                        <p><?php echo get_sub_field('trends_content')?></p>
                        <a href="#">Read more...</a>
                    </div>
                </div>
                <?php
                endwhile;
                else :
                    echo "There is no content";
                endif;
                wp_reset_postdata();
                ?>

                
            </div>
        </div>
    </section>

    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <div class="hm-contact__wrapper">
                <h4><?php echo get_field('contact_title'); ?> </h4>
                <p><?php echo get_field('contact_text'); ?> </p>
                <a href="#" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>