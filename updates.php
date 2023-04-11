<?php
    /*
        Template Name: Updates
    */ 
?>

<?php get_header(); ?>

<!-- updates -->
    <section class="updates">
        <div class="container">
            <div class="updates-title">
                <h2><?php echo get_field('updates_title'); ?></h2>
                <p><?php echo get_field('updates_text'); ?></p>
            </div>
            <div class="updates-wrapper">               
                <div class="updates-left">
                    <?php if(have_rows('up_1')): while(the_repeater_field('up_1')): ?>
                    <div class="updates-left-item">
                        <?php 
                        $img = get_sub_field('up_img1'); if(!empty($img)) :
                        ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                        <?php endif; ?>
                        <ul>
                            <li><i class="fa-solid fa-user"></i><?php echo get_sub_field('name'); ?></li>
                            <li><i class="fa-solid fa-calendar"></i> <?php echo get_sub_field('date')?></li>
                            <li><i class="fa-solid fa-tags"></i><?php echo get_sub_field('web'); ?></li>
                        </ul>
                        <h4><?php echo get_sub_field('up_cont'); ?></h4>
                        <p><?php echo get_sub_field('up_text'); ?></p>
                        <a href="#">Read more...</a>
                    </div>
                    <?php
                    endwhile;
                    else :
                        echo "There is no content";
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                
                <div class="updates-right">

                    <div class="updates-right-item">
                        <h4>Categories</h4>
                        <table>
                            <?php if(have_rows('rec_categs')): while(the_repeater_field('rec_categs')): ?>
                            <tr>
                                <td><?php echo get_sub_field('rec_text'); ?></td>
                                <td><?php echo get_sub_field('rec_num'); ?></td>
                            </tr> 
                            <?php
                            endwhile;
                            else :
                                echo "There is no content";
                            endif;
                            wp_reset_postdata();
                            ?>
                        </table>
                        

                    </div>

                    <div class="updates-right-item">
                        <h4><?php echo get_field('recent_title'); ?></h4>
                        <?php if(have_rows('recent_repeat')): while(the_repeater_field('recent_repeat')): ?>
                        <div class="updates-right-content">
                            <?php 
                            $img = get_sub_field('recent_img'); if(!empty($img)) :
                            ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                            <?php endif;?>
                            <div class="updates-text">
                                <p><?php echo get_sub_field('recent_text'); ?></p>
                                <h5><?php echo get_sub_field('recent_date')?></h5>
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

                    <div class="updates-right-item">
                        <h4>Tags</h4>

                        <div class="updates-a">
                            <?php if(have_rows('tags_btn')): while(the_repeater_field('tags_btn')): ?>
                            <a href="#"><?php echo get_sub_field('tags_repeat') ?></a>
                            <?php
                            endwhile;
                            else :
                                echo "There is no content";
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <div class="hm-contact__wrapper">
                <h4>Feel free to talk to us about your project</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>