<?php
$args = array(
    'type' => 'product',
    'child_of' => 0,
    'parent' => 0,
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => 0,
    'hierarchical' => 1,
    'exclude' => array(16,6),
    'include' => '',
    'number' => '',
    'taxonomy' => 'product_cat',
    //'ordery' => 'rand',
    'pad_counts' => false
);
$categories = get_categories($args);
?>

<div class="content_nav">
    <div class="content_nav_top">
            <h3>Productos</h3>
        </div>
<ul id="accordion-freebie">
    <?php foreach ($categories as $category) { ?>
        <li>
            <ul class="accordion">
                <li class="open">
                    <a href="<?php echo get_category_link(get_term_by("slug", ".$category->slug.", "product_cat")); ?>"><?php echo $category->name; ?>-1</a>
                    <span class="name border-verde-i"><?php echo $category->name; ?></span>
                    <span class="notifications"><?= $category->count; ?></span>
                    <ul class="accordion">
                        <?php $subcategories = get_categories(array('post_type' => 'product', 'taxonomy' => 'product_cat', 'parent' => $category->term_id, 'child_of' => 0)); ?>
                        <?php foreach ($subcategories as $category2) { ?>
                            <li class="open1 border-gris-i">
                                <a href="<?php echo get_category_link(get_term_by('slug', $category2->slug, 'product_cat')); ?>"><?php echo $category2->name; ?>-2</a>
                                <span class="name name2 namebg"><?php echo $category2->name; ?></span>
                                <span class="notifications"><?= $category2->count; ?></span>
                             
                            </li>
                        <?php } ?>
                    </ul>
                </li>

            </ul>
        </li>
    <?php } ?>	
</ul>

</div>