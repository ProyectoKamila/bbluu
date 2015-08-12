<?php
include('library/main.php');



function theme_custom_types() {
    /*
    add_custom_post_type(array(
        'type' => 'nosotros',
        'plural' => 'Nosotro'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-nosotros',
        'singular' => 'nosotro',
        'genero' => 'f',
        'post_type' => 'nosotros',
        'hierarchical' => true
    ));
    */
}


function pagination($pages = '', $range = 4) {
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged))
        $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
    ?>
    <!--
    <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true" class="glyphicon glyphicon-triangle-left"></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
      </a>
    </li>
  </ul>-->
    <?php
    }
    
    
    
    

    if (1 != $pages) {
        echo "<ul class=\"pagination\">";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<li><a class=\"home\" href='" . get_pagenum_link(1) . "'aria-label='Previous'><span aria-hidden='true' class='glyphicon glyphicon-triangle-left'></span></a></li>";
        if ($paged > 1 && $showitems < $pages)
            echo "<li><a class='after' href='" . get_pagenum_link($paged - 1) . "'></a></li>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<li><a><span class='current'>" . $i . "</span></a></li>" : "<li><a href='" . get_pagenum_link($i) . "' class='page-numbers'> " . $i . "</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages)
            echo "<a class='before' href=\'" . get_pagenum_link($paged + 1) . "'> &gt;</a>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            ;
        echo "<li><a class='end' href='" . get_pagenum_link($wp_query->max_num_pages) . "' aria-label='Next'><span aria-hidden='true' class='glyphicon glyphicon-triangle-right'></span></a>";
        echo "</ul>\n";
    }
    
}


function remove_sidebar_from_product_pages()
{
	if (is_product())
	{
		remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
	}
}

add_action('template_redirect', 'remove_sidebar_from_product_pages');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

show_admin_bar( false );

?>