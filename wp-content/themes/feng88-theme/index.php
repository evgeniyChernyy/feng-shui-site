<?php
/*
* Template Name: главная
*/

get_header(); ?>

    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Ба Цзы</h4>
                    <h2>Профессиональное обучение</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Фэн-шуй</h4>
                    <h2>Проверенные, работающие техники</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Активации</h4>
                    <h2>Для удачи и процветания</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="after-banner-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Услуги</h2>
                        <a href="/consult">все услуги <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="product-item">
                        <a href="/consult-bazi"><img src="/wp-content/uploads/2020/08/ieroglif.svg" alt="консультация по бацзы"></a>
                        <div class="down-content">
                            <a href="/consult-bazi"><h4>Консультация по Ба Цзы</h4></a>
                            <p>Обсуждение перспектив во всех сферах жизни: бизнес, отношения,  карьера и т.д. Определение причин неудач в бизнесе, карьере, личной жизни и других аспектах. Выработка стратегии, точки приложения усилий, стиля поведения в сложные периоды. Прогноз на ближайшие годы и текущий период. </p>
                            <a href="/consult-bazi" class="filled-button">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="product-item">
                        <a href="/vibor-dat"><img src="/wp-content/uploads/2020/08/ieroglif.svg" alt="выбор даты события"></a>
                        <div class="down-content">
                            <a href="/vibor-dat"><h4>Выбор даты события</h4></a>
                            <p>Расчет наиболее благоприятных дней и часов для конкретного дела в указанный период времени.
                                Энергия дня используется как помощник. Правильно подобранная с учетом личной энергетики  дата, многократно усиливает успешность любого мероприятия.</p>
                            <a href="/vibor-dat" class="filled-button">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="product-item">
                        <a href="/consult-fenshui"><img src="/wp-content/uploads/2020/08/ieroglif.svg" alt="Фэн-шуй анализ жилья"></a>
                        <div class="down-content">
                            <a href="/consult-fenshui"><h4>Фэн-шуй анализ жилья</h4></a>
                            <p>Анализ энергетики помещения, сильные и слабые стороны Вашего жилья. Рекомендации по использованию помещений, оптимальное расположение мест постоянного пребывания: кровать, рабочий стол, место для отдыха. Индивидуальные сектора пространства для поддержки Вашей личной удачи.</p>
                            <a href="/consult-fenshui" class="filled-button">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="product-item">
                        <a href="/consult-bazi"><img src="/wp-content/uploads/2020/08/ieroglif.svg" alt="Восстановление часа рождения"></a>
                        <div class="down-content">
                            <a href="/consult-bazi/#birthtime"><h4>Восстановление часа рождения</h4></a>
                            <p>Правильно определив час, можно многократно повысить точность прогноза. Час в Бацзы дает понимание собственных внутренних установок, рассказывает об отношениях с детьми, описывает перспективы развития дел в собственном бизнесе, дает подсказку о возможности переезда.</p>
                            <a href="/consult-bazi/#birthtime" class="filled-button">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Курсы</h2>
                        <a href="/learn/courses" class="floatleft">все курсы <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="<?php echo the_field('course1-link'); ?>"><img src="<?php echo the_field('course1-img'); ?>" alt="Курсы по бацзы"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="<?php echo the_field('course2-link'); ?>"><img src="<?php echo the_field('course2-img'); ?>" alt="Курсы дворцы судьбы"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="<?php echo the_field('course3-link'); ?>"><img src="<?php echo the_field('course3-img'); ?>" alt="Курсы выбор дат"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="<?php echo the_field('course4-link'); ?>"><img src="<?php echo the_field('course4-img'); ?>" alt="Уроки бацзы"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="button-container">
                    <a href="/learn/#courses" class="filled-button">все курсы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Инструменты метафизики</h2>
                    </div>
                    <div class="page-content">
                        <?php the_field('after-text'); ?>
                    </div>
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <h4>Узнайте больше о <em>Бацзы</em> прямо сейчаc</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="button-container">
                                <a href="/consult-bazi/" class="filled-button">Узнать сейчас</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>