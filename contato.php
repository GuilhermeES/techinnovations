<?php /* Template name: Contato */ ?>
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
                        Fale Conosco e Transforme suas Ideias em Realidade
                    </h1>
                    <p class="pt-3">
                        Estamos aqui para entender suas necessidades e oferecer soluções inovadoras. <br>
                        Entre em contato e inicie sua jornada tecnológica conosco.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-contato.svg" class="img-fluid main__img" alt="">
            </div>
        </div>
    </section>
    
    <section class="contact">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <?php echo do_shortcode('[contact-form-7 id="27c5e8e" title="Formulário de contato 1"]') ?>
            </div>
        </div>
    </section>

</main>

<?php get_template_part('template-parts/footer'); ?>