<?php /* Template name: Home */ ?>

<?php get_template_part('template-parts/header'); ?>

<section class="main__hero">
    <div class="container">
        <div class="text-center">
            <div class="main__top">
                <h1>
                    Inovação em Tecnologia e Desenvolvimento <br>
                    Consultoria Especializada - <mark>Tech Innovations</mark>
                </h1>
                <p class="pt-3">
                    Consultoria e Desenvolvimento de Software Personalizado
                    para Impulsionar Inovações Tecnológicas na Sua Empresa
                </p>
                <a href="<?php echo get_home_url() ?>/servicos" class="btn btn-standard btn-standard--hero me-3"> Saiba Mais </a>
                <a href="<?php echo get_home_url() ?>/contato" class="btn btn-standard btn-standard--hero btn-standard--ghost"> Contato </a>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-banner.svg" class="img-fluid" alt="">
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <h2 class="blog__title text-center text-md-start"> Nossos Projetos </h2>
        <div class="blog__list row">
            <?php
                $query = array('posts_per_page' => 3, 'category_name' => 'projetos', 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish');
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
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/footer'); ?>