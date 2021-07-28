<?php

    $news_page_id = 73;
    $post_per_page = 3;
    $post_type = 'news';
    $total_posts_count = (int)wp_count_posts($post_type)->publish;
    $current_page = (int)get_query_var('paged');
    $total_pages = (int)ceil($total_posts_count / $post_per_page);
    if ($current_page == 0 ) $current_page = 1;

    // http://ranger.sev/news/page/2/
    // get current page number
?>

<?php get_header() ?>


<?php
    $post_arguments = [
        'post_type' => $post_type,
        'paged' => $paged,
        // 'post_status' => null,
        // 'post_status' => 'publish',
        'posts_per_page' => $post_per_page, //3 -1
    ];

    $posts_query = new WP_Query($post_arguments);

    // var_dump($posts_query->have_posts());
    // var_dump(have_posts());

    if ($posts_query->have_posts()): ?>

    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="row">

<?php
        while ($posts_query->have_posts()): $posts_query->the_post();

?>
            
          
                     
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="<?= the_post_thumbnail_url() ?>" alt="">
                           <div class="news-post-detail">
                              <span class="date">  <?= the_field('news_date') ?></span>
                              <h2><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h2>
                              <p><?= the_excerpt() ?></p>
                           </div>
                        </div>
                     </div>
                    

    <?php 

        endwhile;
        ?>

            </div>
        </div>
    </div>
        <?php
        //wp_reset_postdata();
    endif;
?>
<?php if ($total_posts_count > $post_per_page): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="default-pagination text-center">
                <ul>
                    <?php if ($current_page > 1): ?>
                        <li><a href="/news/page/<?= $current_page - 1 ?>"><i class="fa fa-angle-left"></i>Previous</a></li>
                    <?php endif; ?>
                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="<?= $current_page == $i ? 'active' : '' ?>">
                            <a href="/news/page/<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <?php if ($current_page != $total_pages): ?>
                        <li>
                            <a href="/news/page/<?= $current_page + 1 ?>">Next<i class="fa fa-angle-right"></i></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer() ?>