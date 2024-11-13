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
                    </div>
                    <h1>
                        Nenhuma página encontrada
                    </h1>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-404.svg" class="img-fluid main__img">
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/footer'); ?>