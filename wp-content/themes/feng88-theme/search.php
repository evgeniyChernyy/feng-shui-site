<?php get_header('search'); ?>
    <div class="container">
    <div class="row">

    <div class="col-12">
        <div class="search-page-content">
<?php
$s=get_search_query();
$args = array(
    's' =>$s,
    'posts_per_page' => 10
);
// The Query
$the_query = new WP_Query( $args );
$number = $the_query->found_posts;
if ( $the_query->have_posts() ) {
    _e("<h4>По Вашему запросу '".get_query_var('s')."' найдено:".$number." страниц</h4>");
    ?>
    <ol class="search-list">
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

    <div class="pagination">
        <?php
        $argus = array(
            'show_all'     => false, // показаны все страницы участвующие в пагинации
            'end_size'     => 1,     // количество страниц на концах
            'mid_size'     => 2,     // количество страниц вокруг текущей
            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'    => __('Предыдущая'),
            'next_text'    => __('Следующая'),
            'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => __(' '),
        );

        the_posts_pagination( $argus );
        ?>

    </div>
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