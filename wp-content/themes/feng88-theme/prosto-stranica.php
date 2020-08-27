<?php
/*
* Template Name: простая страница
*/

get_header('allpage'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content prosto-stranica">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>