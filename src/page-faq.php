<?php /* Template Name: Pomoc */ ?>

<?php get_header(); ?>

<section class="section relative overflow-x-clip">
    <div class="container">
        <h1 class="font-size-36 font-size-50-lg color-primary"><?php echo get_field('faq_header') ?></h1>
    </div>
    <div class="square hide-max-lg" style="right: 44px; top: 202px;"></div>
    <div class="square hide-max-lg" style="right: -44px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 220px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 378px;"></div>
    <div class="square hide-max-lg" style="right: 44px; top: 466px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 554px;"></div>
</section>

<section class="section pt-0 faq">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php for ($i=1; $i<=12; $i++): ?>
                    <?php if (get_field('faq_category-'.$i)): ?>
                        <button class="accordion"><?php echo get_field('faq_category-'.$i) ?> <div class="button-icon"><div class="arrow arrow--button arrow--button-down"></div></div></button>
                        <div class="panel">
                            <?php echo get_field('faq_text-'.$i) ?>
                            <div class="mb-20"></div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg">
                    <h4 class="font-size-24 font-size-24-lg color-primary mb-20"><?php echo get_field('s5_header-2', 32) ?></h4>
                    <p class="font-size-18 mt-20 mb-20"><?php echo get_field('s5_text-1', 32) ?></p>
                </div>
            </div>
            <div class="col-lg-6 mt-70 mt-0-lg">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<script>
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<?php get_footer(); ?>
