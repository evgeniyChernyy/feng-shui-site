<?php /*
 * Template Name: шаблон КУРС
 * Template Post Type: course
 */

get_header('allpage'); ?>

    <div class="container">
        <div class="row">
            <?php get_sidebar('learn'); ?>

            <div class="col-lg-8 col-12">
                <?php
                while( have_posts() ) :
                the_post();

                    global $post;
                    $cat = get_the_category($post->ID);
                ?>
                <div class="consult-up-links">
                    <div class="breadcrumbs-container">
                        <a href="<?php echo get_site_url() ?>">Главная</a> >> <a href="/learn/">Обучение</a> >> <a href="/learn/#<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></a>
                    </div>
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
                    <span><?php echo esc_html( get_the_title() ); ?></span>
                </div>

                <div class="single-course-page-content page-content">
                    <div class="learn-page-navigation">
                        <?php if( get_field('thumbnail')){ ?>
                        <div class="learn-page-navigation-left"><img src="<?php the_field('thumbnail')  ?>" alt="<?php echo esc_html( get_the_title() ); ?>"></div>
                        <?php } ?>
                        <div class="learn-page-navigation-right"><ul>
                                <li><a class="navigation-links" href="course-description">Описание</a></li>

                                <?php if( get_field('structure') ) :?>
                                <li><a class="navigation-links" href="course-structure">Структура</a></li>
                                <?php endif; ?>

                                <?php if( get_field('requirement') ) :?>
                                <li><a class="navigation-links" href="course-req">Требования к участникам</a></li>
                                <?php endif; ?>

                                <?php if( get_field('programm') ) :?>
                                <li><a class="navigation-links" href="course-programm">Программа</a></li>
                                <?php endif; ?>
                                <li><a class="navigation-links" href="course-price">Стоимость</a></li>
                            </ul></div>
                    </div>
                    <div class="page-content-block-divider"></div>

                    <h6 id="course-description">Описание</h6>
                    <p><img class="text-icon" src="/wp-content/uploads/2020/08/academic.svg" alt="описание курса"></p>
                    <?php the_field('course-description') ?>

                    <?php if( get_field('structure') ) :?>
                    <h6 id="course-structure">Структура</h6>
                    <p><img class="text-icon" src="/wp-content/uploads/2020/08/bookmark.png" alt="структура курса"></p>
                        <?php the_field('structure') ?>
                    <?php endif; ?>

                    <?php if( get_field('requirement') ) :?>
                    <h6 id="course-req">Требования к участникам</h6>
                    <p><img class="text-icon" src="/wp-content/uploads/2020/08/teacher.svg" alt="требования к участникам"></p>
                        <?php the_field('requirement') ?>
                    <?php endif; ?>
                    <?php if( get_field('programm') ) :?>
                    <h6 id="course-programm">Программа</h6>
                    <p><img class="text-icon" src="/wp-content/uploads/2020/08/document.svg" alt="программа обучения"></p>
                        <?php the_field('programm') ?>
                    <?php endif; ?>
                    <h6 id="course-price">Стоимость</h6>

                    <?php if( get_field('price_discount') ){ ?>
                    <p><span style="text-decoration: line-through;"><?php the_field('price') ?></span> <span class="attention"><?php the_field('price_discount') ?></span> </p>
                    <?php } else{ ?>
                        <p><?php the_field('price') ?></p>
                    <?php } ?>
                    <?php if( get_field('comment') ) :?>
                    <?php the_field('comment') ?>
                    <?php endif; ?>
                    <div class="button-container course">
                        <a href="/consult-bazi" class="filled-button">купить курс</a> <a href="/discont/" class="filled-button">проверить наличие скидки</a>
                    </div>
                    <div class="page-content-block-divider"></div>
                    <p>По всем вопросам, связанным с приобретением курса <b><?php echo esc_html( get_the_title() ); ?></b> можно обращаться на электронную почту: <a href="mailto:fensh88@gmail.com">fensh88@gmail.com</a></p>

                <?php if( get_field('payform')){
                    ?>
                    <p><b><span class="attention">Внимание.</span> При покупке через форму, представленную ниже Вам нужно будет указать ФИО и адрес электронной почты. Имя можно написать любое, а <span class="attention">адрес электронной почты должен быть действующим и правильным.</span> Именно на эту почту я вышлю вам материал.</b></p>
                    <p>
                        <iframe class="yandex-iframe" src="https://money.yandex.ru/quickpay/shop-widget?writer=buyer&amp;targets=&amp;targets-hint=%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%BA%D1%83%D1%80%D1%81%D0%B0%20%D0%B8%D0%BB%D0%B8%20%D1%81%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D1%87%D0%BD%D0%B8%D0%BA%D0%B0&amp;default-sum=&amp;button-text=11&amp;payment-type-choice=on&amp;fio=on&amp;comment=on&amp;mail=on&amp;hint=&amp;successURL=&amp;quickpay=shop&amp;account=41001332025518" width="450" height="290" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
                    </p>
                    <?php
                } ?>
                </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>