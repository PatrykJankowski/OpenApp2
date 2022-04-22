<?php /* Template Name: Kalkulator */ ?>

<?php get_header(); ?>

<section class="section relative overflow-x-clip">
    <div class="container">
        <h1 class="font-size-36 font-size-50-lg color-primary mb-70"><?php echo get_field('calculator_header') ?></h1>
        <p class="font-size-24"><?php echo get_field('calculator_text-1') ?></p>
    </div>
    <div class="square hide-max-lg" style="right: 44px; top: 202px;"></div>
    <div class="square hide-max-lg" style="right: -44px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 220px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 378px;"></div>
    <div class="square hide-max-lg" style="right: 44px; top: 466px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 554px;"></div>
</section>


<section class="section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="calculator">
                    <h3 class="font-size-24 color-primary mb-10">Parametry sklepu</h3>
                    <p class="font-size-18 mb-117 h-min-70">Wprowadź parametry swojego sklepu, aby oszacować korzyści z wdrożenia checkoutu OpenApp</p>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Liczba zamówień miesięcznie</label>
                        <input id="orders" type="text" class="calculator__input font-size-18">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18">Średnia wartość koszyka</label>
                        <input id="cart" type="text" class="calculator__input font-size-18">
                    </div>


                    <div class="d-flex align-items-center mt-124">
                        <label for="orders" class="font-size-18">Marża brutto</label>
                        <input id="orders" type="text" class="calculator__input font-size-18">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18">Średnia prowizja za płatność</label>
                        <input id="cart" type="text" class="calculator__input font-size-18">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="calculator">
                    <h3 class="font-size-24 color-primary mb-10">Parametry OpenApp</h3>
                    <p class="font-size-18 mb-35 h-min-70">Możesz zmienić parametry OpenApp, aby zasymulować różne scenariusze</p>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Wzrost konwersji</label>
                        <input id="orders" type="text" class="calculator__input font-size-18">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Liczba zamówień po wdrożeniu</label>
                        <input disabled id="cart" type="text" class="calculator__input font-size-18 font-weight-700">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Wzrost wartości koszyka</label>
                        <input id="orders" type="text" class="calculator__input font-size-18">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Średnia wartość koszyka po wdrożeniu</label>
                        <input disabled id="cart" type="text" class="calculator__input font-size-18 font-weight-700">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="orders" class="font-size-18">Udział transakcji OA w sprzedaży</label>
                        <input id="orders" type="text" class="calculator__input font-size-18">
                    </div>

                    <div class="calculator__line"></div>

                    <div class="d-flex align-items-center">
                        <label for="cart" class="font-size-18 font-weight-700">Koszt transakcji (w tym płatność) wylicza się automatycznie na bazie wzrostu konwersji</label>
                        <input disabled id="cart" type="text" class="calculator__input font-size-18 font-weight-700">
                    </div>

                    <input type="submit" class="button button--primary mt-35 margin-left-auto" value="Przelicz">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="col">
                    <div class="calculator">
                        <h3 class="font-size-24 color-primary mb-10">Wyniki szczegółowe</h3>

                        <div class="d-flex align-items-center">
                            <label for="cart" class="font-size-18">Wartość sprzedaży miesięcznie</label>
                            <input disabled id="cart" type="text" class="calculator__input font-size-18 font-weight-700">
                        </div>

                        <div class="calculator__line"></div>

                        <div class="d-flex align-items-center">
                            <label for="cart" class="font-size-18">Marża sklepu po koszcie płatności i transakcji (w tym OpenApp)</label>
                            <input disabled id="cart" type="text" class="calculator__input font-size-18 font-weight-700">
                        </div>
                    </div>
                </div>
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
                    <p class="font-size-18 mt-20"><?php echo get_field('s5_text-2', 32) ?> <a href="<?php echo get_field('s5_help-link', 32) ?>" class="color-primary text-underline"><?php echo get_field('s5_help-link-text', 32) ?></a></p>
                </div>
            </div>
            <div class="col-lg-6 mt-70 mt-0-lg">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
