<?php get_header('search'); ?>
    <div class="container">
    <div class="row">

    <div class="col-12">
        <div class="search-page-content">
<?php
$s=get_search_query();
$args = array(
    's' =>$s
);
// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    _e("<h4>По Вашему запросу '".get_query_var('s')."' найдено:</h4>");
    ?>
    <ol>
        <?php
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <li class="search-results">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>
            <p><?php the_excerpt(); ?></p>
        </li>
        <?php
    }
    ?>
    </ol>
        <?php
}else{
    ?>
    <h4 style='font-weight:bold;color:#000'>Нет результатов</h4>
    <div class="alert alert-info">
        <p>Извините, с Вашим запросом нет совпадений. Попробуйте снова, используя другие слова для поиска.</p>
    </div>
<?php } ?>
        </div>
    </div>
    </div>
    </div>
<?php get_footer(); ?>