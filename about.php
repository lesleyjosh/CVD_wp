<?php 
/*
Template Name: About
*/

?>
<?php get_header(); ?>

    <!-- about me -->
    <section class="about-me">
        <div class="container">
            <div class="about-me-wrapper">
                <div class="about-me-content">
                    <div class="about-me-title">
                        <p><?php echo get_field('ap_text'); ?></p>
                        <h2><?php echo get_field('ap_title'); ?></h2>
                    </div>
                    <div class="about-me-text">
                        <p><?php echo get_field('ap_content'); ?></p>
                        <p><?php echo get_field('ap_content'); ?></p>
                    </div>
                    <div class="about-me-socials">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php 
                $img = get_field('ap_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- recent -->
    <section class="recent">
        <div class="container">
            <div class="recent-title">
                <h2><?php echo get_field('projects_title'); ?></h2>
                <p><?php echo get_field('projects_text'); ?></p>
            </div>
            <div class="recent-wrapper">
            <?php if(have_rows('projects_repeater')): while(the_repeater_field('projects_repeater')): ?>

                <div class="recent-card">
                <?php 
                $img = get_sub_field('projects_image'); if(!empty($img)) :
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
                    <div class="recent-text">
                        <h4><?php echo get_sub_field('pr_title'); ?></h4>
                        <p><?php echo get_sub_field('pr_content'); ?></p>
                        <a href="#" style = color:#ffa700>Read more...</a>
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
                <h4><?php echo get_field('ct'); ?></h4>
                <p><?php echo get_field('c_text'); ?></p>
                <a href="#" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>