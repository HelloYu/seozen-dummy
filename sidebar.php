<?php
$args = array(
    "category_name" => "travel" // travel是SEO禅文章分类的slug
);

$custom_posts = new WP_Query($args)
?>
<section>
    <ul>
        <?php if ($custom_posts->have_posts()) :
            while ($custom_posts->have_posts()) : $custom_posts->the_post()
        ?>
                <li>
                    <h3><?php the_title(); ?></h3>
                    <small>
                        <?php the_excerpt(); ?>
                    </small>
                </li>
        <?php
            endwhile;
            wp_reset_postdata(); // 切忌使用完自定义查询以后要调用这个函数
        endif;
        ?>
    </ul>
</section>