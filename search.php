<?php get_template_part('template-parts/header'); ?>
<?php $s = $_GET['s'] ?>

<main class="main">

    <section class="main__hero">
        <div class="container">
            <div class="text-center">
                <div class="main__top">
                    <div class="breadcrumb justify-content-center gap-3 ">
                        <a href="<?php echo get_home_url() ?>">
                            Início
                        </a>
                        <div> / </div>
                        <a href="<?php echo get_home_url() ?>/publicacoes">
                            <?php echo get_the_title(); ?>
                        </a>
                    </div>
                    <h1>
                        Insights e Tendências em Tecnologia e Inovação
                    </h1>
                    <p class="pt-3">
                        Acompanhe nosso blog para ficar por dentro das últimas novidades,<br>
                        dicas e análises do mundo da tecnologia e desenvolvimento, e inspire-se para levar seu negócio além.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-blog.svg" class="img-fluid main__img">
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="d-block d-md-flex align-items-center justify-content-between">
                <h2 class="blog__title text-center text-md-start"> Pesquisa: <?= get_search_query(); ?> </h2>
                <div class="blog__search">
                    <form action="<?php bloginfo('home'); ?>/" method="get">
                        <input type="text" placeholder="Pesquisar artigo..." name="s">
                        <button type="submit" class="blog__button-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="blog__list row">
                <?php
                    $query = array('s' => $s, 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish', 'category__not_in' => array( 3 ));
                    query_posts($query);
                ?>
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="<?php echo get_permalink(); ?>" class="blog__item">
                                <img
                                    class="blog__blog-img"
                                    src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/1920x1080' ?>"
                                    alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                                get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                                'Imagem do post ' . get_the_title(); ?>">
                                <div class="blog__category">
                                    <?php $category = get_the_category(); ?>
                                    <?php echo esc_html($category[0]->name); ?>
                                </div>
                                <h3 class="blog__blog-title"> <?php the_title(); ?> </h3>
                                <div class="blog__footer d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-calendar"></i>
                                    <div class="blog__date"><?php echo get_the_date('d/m/Y') ?></div>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_query(); ?>
                <?php else: ?>
                    <h2 class="blog__title text-center text-md-start"> Nenhum post encontrado...</h2>
                <?php endif;  wp_reset_query(); ?>
            </div>
        </div>
    </section>

</main>

<?php get_template_part('template-parts/footer'); ?>