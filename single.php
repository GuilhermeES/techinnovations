<?php get_template_part('template-parts/header'); ?>

<?php
$feat_image = wp_get_attachment_url(get_post_thumbnail_id());
$id = get_the_ID();
?>

<main class="main">
    <section class="main__hero">
        <div class="container">
            <div class="content__post">
                <div class="breadcrumb justify-content-center text-center gap-3 ">
                    <a href="<?php echo get_home_url() ?>">
                        Início
                    </a>
                    <div> / </div>
                    <a href="<?php echo get_home_url() ?>/blog">
                        Blog
                    </a>
                    <div> / </div>
                    <a href="#">
                        <?php echo get_the_title(); ?>
                    </a>
                </div>
                <h1 class="text-center">
                    <?php the_title(); ?>
                </h1>
                <div class="content__date text-center">
                    <?php echo get_the_date('d/m/Y'); ?>
                </div>
                <div class="content__thumb text-center">
                    <?php if (!empty($feat_image)) : ?>
                        <img src="<?php echo $feat_image; ?>" class="content__thumb"
                            alt="<?php echo !empty(get_post_meta(
                                        get_post_thumbnail_id(),
                                        '_wp_attachment_image_alt',
                                        TRUE
                                    )) ? get_post_meta(
                                        get_post_thumbnail_id(),
                                        '_wp_attachment_image_alt',
                                        TRUE
                                    ) : 'Imagem do post ' . get_the_title(); ?>">
                    <?php endif ?>
                </div>
                <div class="content__details">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/footer'); ?>