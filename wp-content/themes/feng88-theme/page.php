<?php

get_header(); ?>

<div class="container">
    <div class="row">
    <?php get_sidebar(); ?>

    <div class="col-lg-8 col-xs-12">
<div class="page_content">
    <table>
        <thead>
        <tr>
            <th>Курс</th>
            <th>Стоимость</th>
            <th>Программа курса</th>
        </tr>
        <tr>
            <td colspan="3">Курсы по Бацзы</td>
        </tr>
        </thead>
        <tbody>
        <?php
        global $post;
        $myposts = get_posts(array(
            'numberposts' => -1,
            'category'    => 1,
            'order'       => 'DESC',
            'post_type'   => 'course',
            'suppress_filters' => false,
        ));
       foreach($myposts as $post){
            setup_postdata($post);

                ?>

                <tr>
                    <td><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></td>
                    <td><?php the_field('price'); ?></td>
                    <td><a href="<?php echo get_permalink().'#programm' ?>">программа курса</a></td>
                </tr>

                <?php

            }
       wp_reset_postdata();
       ?>
        <tr>
            <td colspan="3">12 дворцов судьбы</td>
        </tr>
        <?php
        global $post;
        $myposts = get_posts(array(
            'numberposts' => -1,
            'category'    => 3,
            'order'       => 'DESC',
            'post_type'   => 'course',
            'suppress_filters' => false,
        ));
        foreach($myposts as $post){
            setup_postdata($post);

            ?>

            <tr>
                <td><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></td>
                <td><?php the_field('price'); ?></td>
                <td><a href="<?php echo get_permalink().'#programm' ?>">программа курса</a></td>
            </tr>

            <?php

        }
        wp_reset_postdata();
        ?>
        </tbody>
    </table>
</div>
    </div>
    </div>
</div>


<?php get_footer(); ?>