<?php
?>
<html class="no-js" <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__inner">
        <a href="<?php home_url() ?>" class="logo corner-wrapper">
            <span class="corner corner-tl"></span>
            <span class="corner corner-tr"></span>
            <span class="corner corner-bl"></span>
            <span class="corner corner-br"></span>
            <span class="corner-content">
                    <?php
                    echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', true, ["class" => "logo__img"]);
                    ?>
                    </span>
        </a>
        <nav id="menu" class="menu-wrapper">
            <?php
            if (has_nav_menu('primary')) {

                wp_nav_menu(
                    array(
                        'container' => '',
                        'container_class' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'menu'
                    )
                );

            }
            ?>
        </nav>
        <button id="hamburger-toggle" class="hamburger">
            <span class="hamburger__icon--dir-left"></span>
            <span class="hamburger__icon--dir-right"></span>
        </button>
    </div>
</header>

<?php


