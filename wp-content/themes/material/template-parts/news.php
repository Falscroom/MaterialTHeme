<style>
    .card {overflow: hidden}
    .card_custom > .card-content {
        padding-bottom: 25px;
    }
    .card_custom > .card-action {
        padding: 0;
        height: 50px;
    }
    .button-more {
        display:block;
        margin-top: -25px;
        margin-right: 10px;
        height: 50px;
        width: 50px;
        float: right;
    }
</style>
<div class="container">
    <div class="row">
    <?php while ($recent_posts->have_posts()): $recent_posts->the_post() ?>
        <div class="col s12 m7 l3">
            <div class="card card_custom">
                <div class="card-image">
                    <?php echo  Parser::get_header_image(apply_filters( 'the_content', get_the_content() )) ?>
    <!--                <span class="card-title">Card Title</span>-->
                </div>
                <div class="card-content">
                    <p class="card-title"><?php the_title() ?></p>
                    <p><?php echo Parser::delete_tags(apply_filters( 'the_content', get_the_content() )) ?></p>
                </div>
                <div class="card-action">
                    <a class="btn-floating btn-large waves-effect waves-light button-more teal darken-2" href="<?php echo get_permalink(); ?>"><i class="material-icons">navigate_next</i></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</div>














