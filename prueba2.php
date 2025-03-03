<?php
define('WP_USE_THEMES', false);
require __DIR__ . '/blog/wp-load.php';

if (!function_exists('get_bloginfo')) {
    die('Error: WordPress no se cargó correctamente.');
}
echo 'WordPress cargado correctamente';


$posts = get_posts(['numberposts' => 5]);

if ($posts) {
    foreach ($posts as $post) {
        setup_postdata($post);
        ?>
        <div>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Leer más</a>
        </div>
        <?php
    }
    wp_reset_postdata();
} else {
    echo 'No hay posts disponibles.';
}
