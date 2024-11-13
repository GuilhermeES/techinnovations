<?php /* Template name: Sobre */ ?>
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
                        Conheça mais sobre nossa história
                    </h1>
                    <p class="pt-3">
                        Transformando Ideias em Soluções: Especialistas em Consultoria de Tecnologia <br> e Desenvolvimento para 
                        Impulsionar seu Negócio com Inovação.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-sobre.svg" class="img-fluid main__img" alt="">
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about__mvv-card">
                        <div class="about__mvv-icon">
                            <i class="fa-regular fa-flag"></i>
                        </div>
                        <h2 class="about__mvv-title mt-2"> Missão </h2>
                        <p class="about__mvv-subtitle"> 
                            Prover soluções inovadoras em tecnologia e desenvolvimento que potencializem o sucesso dos nossos 
                            clientes, oferecendo consultoria especializada e personalizada que transforma ideias em realidade.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about__mvv-card">
                        <div class="about__mvv-icon">
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <h2 class="about__mvv-title mt-2"> Valores </h2>
                        <p class="about__mvv-subtitle"> 
                            Buscamos sempre a inovação, garantindo excelência e 
                            resultados de alto impacto. Atuamos com transparência em todas as etapas e 
                            valorizamos práticas sustentáveis para gerar impacto positivo para nossos clientes e a sociedade. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about__mvv-card">
                        <div class="about__mvv-icon">
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        <h2 class="about__mvv-title mt-2"> Visão </h2>
                        <p class="about__mvv-subtitle"> 
                            Ser referência global em inovação tecnológica, reconhecida pela excelência, compromisso com resultados 
                            e pela capacidade de antecipar tendências e necessidades em um mercado em constante evolução. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__texts pt-5">
        <div class="container">
            <div class="row gap-3 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <h2 class="about__texts-title  mb-4"> Transformando Tecnologia em Soluções de Valor </h2>
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tortor sed 
                        elit sodales lacinia. Quisque vehicula ultrices lorem at commodo. Sed hendrerit felis risus, 
                        sit amet malesuada tortor pulvinar a. Mauris sed orci orci. Nunc faucibus mauris et ornare tincidunt. 
                        Mauris eget tortor nec leo finibus lobortis. Mauris nec lacus odio.
                        Vivamus consequat convallis dolor vel posuere. Etiam rutrum mi vel consequat dapibus. 
                        Praesent vel libero diam. Duis nec tempus ex, a varius dui.
                        <br><br>
                        Donec molestie non dui quis accumsan. Etiam non consectetur nulla, in sagittis ex. Vestibulum vel malesuada neque, 
                        nec semper felis. Praesent nunc sem, blandit sed dolor et, volutpat bibendum libero. Duis ut 
                        fermentum nunc, non bibendum odio. Nullam non leo et ligula tincidunt pulvinar sed et sem. 
                        Mauris consequat in erat rutrum gravida. Donec tincidunt neque leo, et laoreet leo finibus gravida. 
                        Nam fringilla lectus quam, non malesuada ipsum blandit non. 
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-sobre.svg" class="about__img img-fluid">
                </div>
            </div>
        </div>
    </section>
    
</main>

<?php get_template_part('template-parts/footer'); ?>