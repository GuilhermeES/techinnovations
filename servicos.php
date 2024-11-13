<?php /* Template name: Serviços */ ?>
<?php get_template_part('template-parts/header'); ?>

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
                        Soluções Tecnológicas Personalizadas para Seu Negócio
                    </h1>
                    <p class="pt-3">
                        Consultoria em Tecnologia e Desenvolvimento: Inovação Sob Medida para Alavancar Resultados <br>
                        e Maximizar o Potencial de Sua Empresa.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-servicos.svg" class="img-fluid main__img" alt="">
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <?php
                $query = array('post_type' => 'servicos', 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish');
                query_posts($query);
            ?>
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <?php $reverseClass = ($wp_query->current_post % 2 == 1) ? 'flex-md-row-reverse' : ''; ?>
                    <div class="row flex-column-reverse flex-md-row align-items-center justify-content-evenly gap-lg-3 mb-5 <?php echo $reverseClass; ?>">
                        <div class="col-md-6 col-lg-5">
                            <h2 class="services__title mb-2"> <?php the_title(); ?> </h2>
                            <p>
                                <?php echo get_the_content(); ?>  
                            </p>
                            <a href="<?php echo get_home_url() ?>/contato" class="btn btn-standard"> Entre em contato </a>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-3 mb-md-0">
                            <img
                                class="services__img"
                                src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/1920x1080' ?>"
                                alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                            get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                            'Imagem representando o serviço ' . get_the_title(); ?>">
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_template_part('template-parts/footer'); ?>