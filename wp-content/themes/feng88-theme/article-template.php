<?php /*
 * Template Name: шаблон СТАТЬЯ
 * Template Post Type: post
 */

get_header('statya'); ?>

    <div class="container">
        <div class="row">
            <?php get_sidebar('stati'); ?>

            <div class="col-lg-8 col-12">
                <?php
                while( have_posts() ) :
                the_post();

                    global $post;
                    $cat = get_the_category($post->ID);
                ?>
                <div class="consult-up-links statya">
                    <div class="breadcrumbs-container">
                        <a href="<?php echo get_site_url() ?>">Главная</a> >> <a href="/articles/">Статьи</a> >> <a href="/articles/#<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></a>
                    </div>
                    <div class="page-content-block-divider"></div>
                    <div class="open-sidebar-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
                                <path style="fill:#ffffff;" d="M426.667,0h-384C19.135,0,0,19.135,0,42.667v384c0,23.531,19.135,42.667,42.667,42.667h384  c23.531,0,42.667-19.135,42.667-42.667v-384C469.333,19.135,450.198,0,426.667,0z"/>
                            <g>
                                <path id="SVGCleanerId_0" style="fill:#f33f3f;" d="M42.667,21.333h384c11.76,0,21.333,9.573,21.333,21.333v42.667H21.333V42.667   C21.333,30.906,30.906,21.333,42.667,21.333z"/>
                            </g>
                            <g>
                                <linearGradient id="SVGCleanerId_0_3_" gradientUnits="userSpaceOnUse" x1="-64.5964" y1="625.4609" x2="-47.3174" y2="617.4039" gradientTransform="matrix(21.3333 0 0 -21.3333 1430.1112 13315.2227)">
                                    <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.2"/>
                                    <stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
                                </linearGradient>
                                <path id="SVGCleanerId_0_1_" style="fill:url(#SVGCleanerId_0_3_);" d="M42.667,21.333h384c11.76,0,21.333,9.573,21.333,21.333   v42.667H21.333V42.667C21.333,30.906,30.906,21.333,42.667,21.333z"/>
                            </g>
                            <g>
                                <linearGradient id="SVGCleanerId_0_4_" gradientUnits="userSpaceOnUse" x1="-61.6394" y1="626.9612" x2="-50.4335" y2="615.7543" gradientTransform="matrix(21.3333 0 0 -21.3333 1430.1112 13315.2227)">
                                    <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.2"/>
                                    <stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
                                </linearGradient>
                                <path id="SVGCleanerId_0_2_" style="fill:url(#SVGCleanerId_0_4_);" d="M42.667,21.333h384c11.76,0,21.333,9.573,21.333,21.333   v42.667H21.333V42.667C21.333,30.906,30.906,21.333,42.667,21.333z"/>
                            </g>
                            <path style="fill:#f33f3f;" d="M426.667,448h-384c-11.76,0-21.333-9.573-21.333-21.333v-320H448v320  C448,438.427,438.427,448,426.667,448z"/>
                            <g>
                                <circle style="fill:#ffffff;" cx="53.333" cy="53.333" r="10.667"/>
                                <circle style="fill:#ffffff;" cx="96" cy="53.333" r="10.667"/>
                                <circle style="fill:#ffffff;" cx="138.667" cy="53.333" r="10.667"/>
                                <path style="fill:#ffffff;" d="M170.667,458.666V96h-21.333v362.667H170.667z"/>
                                <circle style="fill:#ffffff;" cx="53.333" cy="53.333" r="10.667"/>
                                <circle style="fill:#ffffff;" cx="96" cy="53.333" r="10.667"/>
                                <circle style="fill:#ffffff;" cx="138.667" cy="53.333" r="10.667"/>
                                <path style="fill:#ffffff;" d="M53.333,192h64c5.896,0,10.667-4.771,10.667-10.667c0-5.896-4.771-10.667-10.667-10.667h-64   c-5.896,0-10.667,4.771-10.667,10.667C42.667,187.229,47.438,192,53.333,192z"/>
                                <path style="fill:#ffffff;" d="M117.333,234.667h-64c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h64   c5.896,0,10.667-4.771,10.667-10.667C128,239.438,123.229,234.667,117.333,234.667z"/>
                                <path style="fill:#ffffff;" d="M117.333,298.667h-64c-5.896,0-10.667,4.771-10.667,10.667S47.438,320,53.333,320h64   c5.896,0,10.667-4.771,10.667-10.667S123.229,298.667,117.333,298.667z"/>
                                <path style="fill:#ffffff;" d="M96,362.667H53.333c-5.896,0-10.667,4.771-10.667,10.667S47.438,384,53.333,384H96   c5.896,0,10.667-4.771,10.667-10.667S101.896,362.667,96,362.667z"/>
                            </g>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-68.6888" y1="619.0512" x2="-43.3842" y2="607.2509" gradientTransform="matrix(21.3333 0 0 -21.3333 1430.1112 13315.2227)">
                                <stop offset="0" style="stop-color:#FFFFFF;stop-opacity:0.2"/>
                                <stop offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
                            </linearGradient>
                            <path style="fill:url(#SVGID_1_);" d="M426.667,0h-384C19.135,0,0,19.135,0,42.667v384c0,23.531,19.135,42.667,42.667,42.667h384  c23.531,0,42.667-19.135,42.667-42.667v-384C469.333,19.135,450.198,0,426.667,0z"/>
                            </svg>
                        <span>Боковая панель</span></div>
                    <h1><?php echo esc_html( get_the_title() ); ?></h1>
                </div>

                <div class="single-course-page-content page-content">

               <?php the_content(); ?>

                </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>