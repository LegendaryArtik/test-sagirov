<?php
/**
 * Template Name: Spacex Main page
 * Template Post Type: page
 *

 */
wp_head();
get_header('spacex');

?>
    <main class="container">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title"><?php echo get_field('main_title'); ?></h1>
                <p class="subtitle"><?php echo get_field('main_description'); ?></p>

                <button class="button-start content__button-start">
                    <span class="button-start__arrow button-start__arrow--dir-left-bottom"></span>
                    <span class="button-start__arrow button-start__arrow--dir-right-top"></span>
                    <span class="button-start__text"><?php echo get_field('main_btn_name'); ?></span>
                </button>
            </div>

            <ul class="features-list">

                <?php
                $features = CFS()->get('features');

                foreach ($features as $feature) {
                    ?>
                    <li class="features-item">
                        <p class="features-item__text"><?php echo $feature['name']; ?></p>
                        <p class="features-item__text features-item__text--bolder"><?php echo $feature['value']; ?></p>
                        <p class="features-item__text"><?php echo $feature['name2']; ?></p>
                    </li>
                    <?php
                }

                ?>
            </ul>

        </div>
    </main>

<?php
get_footer();
wp_footer();
