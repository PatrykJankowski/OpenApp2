<?php get_header(); ?>

<section class="section bg-hero">
    <div class="container h-100">
        <svg class="bg-img" width="1346" height="963" viewBox="0 0 1346 963" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 -491.933H332.769V-824.851H0V-491.933ZM665.538 -159.014H998.307V-491.933H1327.04V-164.636H1505.8C1575.87 -100.512 1623.11 2.78926 1623.11 149.133C1623.11 415.468 1461.73 542.837 1288.93 542.837C1116.14 542.837 976.006 423.022 967.05 173.728H665.714V-159.19L665.538 -159.014ZM665.538 -1157.77V-491.933H332.769V173.728H474.306C485.896 660.369 832.186 962.016 1288.76 962.016C1745.33 962.016 2115.67 650.355 2115.67 148.957C2115.67 -352.441 1777.29 -646.533 1330.9 -662.52V-824.851H998.132V-1157.77H665.363H665.538Z" fill="#6377FE"/>
        </svg>
        <div class="row h-100">
            <div class="col-lg-6 h-100 relative">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <h1 class="font-size-36 font-size-50-lg color-white mb-35 mb-70-lg"><span class="font-weight-300"><?php echo get_field('main_text-1') ?></span> <?php echo get_field('main_text-bold-1') ?></h1>
                    <span class="button" onclick="scrollToForm()"><?php echo get_field('main_link-text-1') ?></span>
                </div>
            </div>
            <div class="col-lg-6 relative">
                <img src="/wp-content/themes/openapp/img/hero.webp" class="mt-70 mt-0-lg max">
            </div>
        </div>
    </div>
</section>


<section class="section relative overflow-x-clip">
    <div class="container">
        <h2 class="font-size-24 font-size-40-lg mb-70 mb-120-lg text-align-center-lg"><?php echo get_field('s1_header') ?></h2>
        <div class="row">
            <div class="col-xl-4">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="70" height="70" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 70"><path d="M53.714 0H16.71C7.698 0 .38 7.34.38 16.409V53.59C.38 62.647 7.698 70 16.71 70h37.004c9.025 0 16.33-7.353 16.33-16.409V16.41C70.044 7.34 62.739 0 53.714 0ZM38.121 26.36l4.94-4.962a1.299 1.299 0 0 1 1.835 0 1.314 1.314 0 0 1 0 1.844l-4.939 4.95a1.28 1.28 0 0 1-.918.39c-.336 0-.66-.13-.918-.39a1.298 1.298 0 0 1 0-1.832Zm-6.012-8.444c0-.715.569-1.3 1.293-1.3s1.293.585 1.293 1.3v7.015a1.3 1.3 0 0 1-1.293 1.3 1.3 1.3 0 0 1-1.293-1.3v-7.015ZM17.137 32.947a1.3 1.3 0 0 1 1.293-1.299h6.982c.724 0 1.293.585 1.293 1.3 0 .714-.57 1.298-1.293 1.298H18.43a1.3 1.3 0 0 1-1.293-1.299Zm11.533 6.587-4.94 4.963c-.258.26-.581.377-.917.377-.336 0-.66-.117-.905-.377a1.275 1.275 0 0 1 0-1.832l4.926-4.963a1.299 1.299 0 0 1 1.836 0 1.298 1.298 0 0 1 0 1.832Zm0-11.342a1.28 1.28 0 0 1-.918.39c-.336 0-.66-.13-.918-.39l-4.926-4.95a1.29 1.29 0 0 1 0-1.845 1.283 1.283 0 0 1 1.823 0l4.939 4.963a1.298 1.298 0 0 1 0 1.832Zm24.242 24.802c-.258.26-.581.377-.918.377-.336 0-.659-.117-.905-.377l-6.18-6.21-4.784 4.807a2.344 2.344 0 0 1-1.668.701c-.168 0-.336-.026-.517-.065a2.335 2.335 0 0 1-1.706-1.507l-6.362-17.838c-.323-.87-.103-1.818.543-2.481.66-.65 1.604-.87 2.47-.559l17.765 6.392a2.361 2.361 0 0 1 1.5 1.715 2.332 2.332 0 0 1-.634 2.196l-4.784 4.807 6.18 6.21a1.298 1.298 0 0 1 0 1.832Zm-20.454-20.54 6.09 17.058 5.417-5.444s.013-.026.026-.039c.013 0 .026-.026.039-.026l5.404-5.443-16.976-6.106Z" fill="#6377FE"/></svg>
                    <h4 class="font-size-18 font-size-24-lg font-weight-300 max-width-330 mt-35 mb-20"><?php echo get_field('s1_col-1-text-1') ?> <span class="font-weight-700"><?php echo get_field('s1_col-1-text-1-bold') ?></span> <?php echo get_field('s1_col-1-text-2') ?></h4>
                </div>
            </div>
            <div class="col-xl-4 mt-35 mt-0-xl">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="70" height="70" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 70"><path d="M53.698 0H16.516C7.46 0 .12 7.34.12 16.409V53.59C.12 62.647 7.46 70 16.516 70h37.182c9.069 0 16.41-7.353 16.41-16.409V16.41C70.107 7.34 62.766 0 53.697 0Zm-4.157 30.96c-.052 2.87-.468 5.69-1.416 8.418-1.04 3.014-2.663 5.665-5.04 7.821a17.162 17.162 0 0 1-6.938 3.807c-.936.26-1.82.117-2.716-.169-4.313-1.377-7.548-4.08-9.796-7.99-1.143-1.988-1.884-4.118-2.351-6.353-.455-2.17-.637-4.378-.624-6.6 0-1.637.013-3.287-.013-4.924-.013-1.065.793-1.91 1.832-2.078a2.25 2.25 0 0 1 .416-.04c.948-.012 1.91.014 2.858-.038 1.377-.091 2.754-.247 4.027-.819 1.144-.52 2.157-1.221 3.118-2 .234-.195.468-.377.69-.585a1.993 1.993 0 0 1 1.09-.52.187.187 0 0 0 .091-.026h.572c.104.026.22.052.325.078.403.104.727.325 1.052.572.689.493 1.364 1.013 2.066 1.494.844.571 1.74 1.091 2.728 1.364.832.234 1.689.338 2.547.416 1.078.09 2.17.117 3.248.065 1.078-.04 2.013.688 2.221 1.689.026.13.039.272.039.415 0 2.001.013 4.002-.026 6.002Zm-9.692-6.483c-1.208-.468-2.416-1.157-3.69-2.092a61.88 61.88 0 0 1-.96-.74l-.157-.117-.403.324c-.493.39-.987.78-1.494 1.13-1.247.884-2.43 1.456-3.637 1.793-1.741.468-3.508.572-4.86.611h-1.285v3.404c-.014 1.689.012 3.69.324 5.703.26 1.754.663 3.313 1.221 4.768.897 2.313 2.118 4.197 3.73 5.782 1.662 1.624 3.585 2.78 5.742 3.443.48.155.805.168 1.156.065a14.199 14.199 0 0 0 5.781-3.313c2.053-1.91 3.508-4.314 4.443-7.328.689-2.234 1.04-4.65 1.079-7.366a95.45 95.45 0 0 0 0-3.859v-1.299a27.33 27.33 0 0 1-4.482-.273c-.702-.104-1.611-.273-2.52-.636h.012Zm3.885 4.3c.662.442.74 1.3.156 1.845-.65.623-1.326 1.221-1.988 1.832l-7.224 6.56c-.065.065-.116.13-.168.195-.52.663-1.611.715-2.21.117a28.23 28.23 0 0 0-1.09-1.065c-1.313-1.195-2.638-2.39-3.95-3.586-.494-.454-.624-.961-.377-1.468s.87-.805 1.455-.714c.312.051.572.194.819.402 1.325 1.222 2.663 2.43 3.988 3.638.065.065.13.13.208.195a3332.964 3332.964 0 0 0 8.523-7.756c.585-.546 1.351-.546 1.858-.195Z" fill="#6377FE"/></svg>
                    <h4 class="font-size-18 font-size-24-lg font-weight-300 max-width-330 mt-35 mb-20"><?php echo get_field('s1_col-2-text-1') ?> <span class="font-weight-700"><?php echo get_field('s1_col-2-text-1-bold') ?></span> <?php echo get_field('s1_col-2-text-2') ?></h4>
                </div>
            </div>
            <div class="col-xl-4 mt-35 mt-0-xl">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg h-100">
                    <svg width="70" height="70" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 70"><path d="M53.601 0h-37.19C7.356 0 0 7.342 0 16.399V53.6C0 62.658 7.355 70 16.412 70h37.19c9.07 0 16.411-7.342 16.411-16.399V16.4C70.013 7.342 62.671 0 53.601 0Zm-.922 43.622a3.948 3.948 0 0 1-3.95 3.95H21.284a3.948 3.948 0 0 1-3.95-3.95V26.378a3.948 3.948 0 0 1 3.95-3.95h27.443a3.948 3.948 0 0 1 3.95 3.95v17.244Zm-3.95-18.595H21.284a1.35 1.35 0 0 0-1.352 1.351v17.244c0 .753.61 1.351 1.352 1.351h27.443a1.35 1.35 0 0 0 1.352-1.351V32.226H37.19l.376.377c.52.506.52 1.325 0 1.832a1.3 1.3 0 0 1-.91.377c-.324 0-.662-.13-.922-.377l-3.495-3.496 3.508-3.508a1.294 1.294 0 0 1 1.832 0 1.294 1.294 0 0 1 0 1.832l-.364.364H50.08v-3.249a1.35 1.35 0 0 0-1.352-1.351Z" fill="#6377FE"/></svg>
                    <h4 class="font-size-18 font-size-24-lg font-weight-300 max-width-330 mt-35 mb-20"><?php echo get_field('s1_col-3-text-1') ?> <span class="font-weight-700"><?php echo get_field('s1_col-3-text-1-bold') ?></span> <?php echo get_field('s1_col-3-text-2') ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="square hide-max-lg" style="right: 44px; top: 132px;"></div>
    <div class="square hide-max-lg" style="right: -44px; top: 220px;"></div>
    <div class="square hide-max-lg" style="right: 220px; top: 220px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 308px;"></div>
    <div class="square hide-max-lg" style="right: 44px; top: 396px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 484px;"></div>
</section>


<section class="section bg-grey">
    <div class="container relative">
        <h2 class="font-size-24 font-size-40-lg mb-70 mb-120-lg text-align-center-lg"><?php echo get_field('s2_header') ?></h2>
        <div class="row">
            <div class="col-xl-7 d-flex flex-column justify-content-center">
                <div class="card mb-20" onclick="currentSlide(1)">
                    <svg width="46" height="46" class="min-width-46 mr-20 mr-35-sm" style="padding-bottom: 10px;" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 46"><path d="m44.42 43.244-7.604-7.603 5.886-5.886a2.847 2.847 0 0 0 .779-2.688 2.894 2.894 0 0 0-1.845-2.1L19.78 17.141a2.911 2.911 0 0 0-3.818 2.105 2.88 2.88 0 0 0 .112 1.617l7.826 21.84a2.863 2.863 0 0 0 2.1 1.845c.208.05.422.076.636.08a2.895 2.895 0 0 0 2.052-.859l5.885-5.886 7.604 7.604a1.59 1.59 0 0 0 2.242 0 1.59 1.59 0 0 0 0-2.243ZM33.492 34.48l-6.665 6.664-7.572-20.805 20.917 7.476-6.68 6.665ZM34.557 9.06l-6.076 6.061a1.591 1.591 0 1 1-2.259-2.243l6.076-6.076a1.597 1.597 0 1 1 2.259 2.259ZM22.007 2.539v8.59a1.59 1.59 0 1 1-3.181 0v-8.59a1.59 1.59 0 0 1 3.181 0ZM14.595 15.121a1.59 1.59 0 0 1-1.13.477 1.592 1.592 0 0 1-1.13-.477l-6.06-6.06a1.592 1.592 0 0 1 2.243-2.259l6.076 6.076a1.59 1.59 0 0 1 0 2.243ZM12.177 20.943a1.59 1.59 0 0 1-1.591 1.59h-8.59a1.59 1.59 0 0 1 0-3.18h8.59a1.59 1.59 0 0 1 1.59 1.59ZM14.594 29.007l-6.076 6.077a1.592 1.592 0 0 1-2.243 0 1.59 1.59 0 0 1 0-2.243l6.06-6.076a1.59 1.59 0 0 1 2.722 1.12c0 .421-.167.824-.463 1.122Z" fill="#6377FE"/></svg>
                    <div>
                        <h4 class="font-size-24 font-size-24-lg mb-20 color-primary"><?php echo get_field('s2_header-1') ?></h4>
                        <p class="font-size-18 h-min-92-lg"><?php echo get_field('s2_text-1') ?></p>
                        <?php if (get_field('s2_url-1') and get_field('s2_url-text-1')): ?>
                        <a class="d-inline-block font-size-16 font-weight-700 color-black mt-20" href="<?php echo get_field('s2_url-1') ?>"><?php echo get_field('s2_url-text-1') ?> <div class="button-icon"><div class="arrow arrow--button"></div></div></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card mb-20" onclick="currentSlide(2)">
                    <svg width="46" height="46" class="min-width-46 mr-20 mr-35-sm" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M37.28.157H5.422A4.528 4.528 0 0 0 .818 4.685v20.088A4.528 4.528 0 0 0 5.42 29.3h31.86a4.527 4.527 0 0 0 4.603-4.527V4.685A4.526 4.526 0 0 0 37.28.157Zm1.585 24.616a1.51 1.51 0 0 1-1.584 1.51H5.42a1.509 1.509 0 0 1-1.51-1.51V11.537H19.05a1.51 1.51 0 1 0 0-3.019H3.836V4.685a1.51 1.51 0 0 1 1.51-1.51H37.28a1.51 1.51 0 0 1 1.584 1.51v20.088Z" fill="#6377FE"/></svg>
                    <div>
                        <h4 class="font-size-24 font-size-24-lg mb-20 color-primary"><?php echo get_field('s2_header-2') ?></h4>
                        <p class="font-size-18 h-min-92-lg"><?php echo get_field('s2_text-2') ?></p>
                        <?php if (get_field('s2_url-2') and get_field('s2_url-text-2')): ?>
                        <a class="d-inline-block font-size-16 font-weight-700 color-black mt-20" href="<?php echo get_field('s2_url-2') ?>"><?php echo get_field('s2_url-text-2') ?> <div class="button-icon"><div class="arrow arrow--button"></div></div></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card mb-20 mb-0-xl" onclick="currentSlide(3)">
                    <svg width="46" height="46" class="min-width-46 mr-20 mr-35-sm" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40.16.738H5.523A4.922 4.922 0 0 0 .602 5.66v21.838a4.922 4.922 0 0 0 4.922 4.923h34.635a4.922 4.922 0 0 0 4.923-4.922V5.66A4.922 4.922 0 0 0 40.159.738Zm1.64 9.09H25.557l.46-.46a1.64 1.64 0 0 0-2.314-2.313l-4.43 4.43 4.413 4.414a1.643 1.643 0 0 0 2.314 0 1.641 1.641 0 0 0 0-2.314l-.476-.476H41.8V27.5a1.64 1.64 0 0 1-1.64 1.64H5.523a1.64 1.64 0 0 1-1.641-1.64V5.66a1.64 1.64 0 0 1 1.64-1.64H40.16A1.64 1.64 0 0 1 41.8 5.66v4.168Z" fill="#6377FE"/></svg>
                    <div>
                        <h4 class="font-size-24 font-size-24-lg mb-20 color-primary"><?php echo get_field('s2_header-3') ?></h4>
                        <p class="font-size-18 h-min-92-lg"><?php echo get_field('s2_text-3') ?></p>
                        <?php if (get_field('s2_url-2') and get_field('s2_url-text-2')): ?>
                        <a class="d-inline-block font-size-16 font-weight-700 color-black mt-20" href="<?php echo get_field('s2_url-3') ?>"><?php echo get_field('s2_url-text-3') ?> <div class="button-icon"><div class="arrow arrow--button"></div></div></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="slider">
                    <div class="slider__container">
                        <div class="slider__slide fade">
                            <img class="slider__img" height="900" src="/wp-content/themes/openapp/img/screen1.webp">
                        </div>

                        <div class="slider__slide fade">
                            <img class="slider__img" height="900" src="/wp-content/themes/openapp/img/screen2.webp">
                        </div>

                        <div class="slider__slide fade">
                            <img class="slider__img" height="900" src="/wp-content/themes/openapp/img/screen3.webp">
                        </div>
                    </div>

                    <!-- The dots/circles -->
                    <div class="slider__dots">
                        <div class="slider__dot" onclick="currentSlide(1)"><span class="number">1</span></div>
                        <div class="arrow arrow--color-primary arrow--rotate-315 arrow--rotate-45-lg"></div>
                        <div class="slider__dot" onclick="currentSlide(2)"><span class="number">2</span></div>
                        <div class="arrow arrow--color-primary arrow--rotate-315 arrow--rotate-45-lg"></div>
                        <div class="slider__dot" onclick="currentSlide(3)"><span class="number">3</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section relative">
    <div class="container">
        <h2 class="font-size-24 font-size-40-lg mb-70 mb-120-lg text-align-center-lg"><?php echo get_field('s3_header') ?></h2>
        <div class="row">
            <div class="col-xl-6">
                <div class="text-align-center-lg h-100 font-size-122 line-height-1 font-size-198-lg color-primary"><?php echo get_field('s3_commission') ?></div>
            </div>
            <div class="col-xl-6 mt-70 mt-0-xl">
                <div class="d-flex flex-column justify-content-center align-items-center-lg text-align-center-lg h-100">
                    <svg width="70" height="70" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.8 28.066c0-3.014 1.845-5.456 4.119-5.456 2.273 0 4.118 2.442 4.118 5.456 0 3.015-1.845 5.444-4.118 5.444-2.274 0-4.119-2.442-4.119-5.444Z" fill="#6377FE"/><path d="M53.591.64H16.396C7.34.64 0 7.995 0 17.05v37.182C0 63.3 7.34 70.64 16.396 70.64H53.59c9.056 0 16.396-7.34 16.396-16.41V17.05c0-9.055-7.34-16.408-16.396-16.408ZM25.92 20.012c3.702 0 6.716 3.612 6.716 8.055 0 4.444-3.014 8.042-6.716 8.042-3.703 0-6.717-3.611-6.717-8.042 0-4.43 3.014-8.055 6.717-8.055ZM21.774 49.88a1.3 1.3 0 0 1-.91-.377 1.286 1.286 0 0 1 0-1.845L47.29 21.233a1.286 1.286 0 0 1 1.845 0 1.294 1.294 0 0 1 0 1.831L22.697 49.504a1.33 1.33 0 0 1-.923.377Zm22.294 1.39c-3.702 0-6.716-3.612-6.716-8.042s3.014-8.042 6.716-8.042c3.703 0 6.717 3.599 6.717 8.042s-3.014 8.042-6.717 8.042Zm0-13.486c-2.26 0-4.118 2.443-4.118 5.444s1.858 5.443 4.118 5.443c2.26 0 4.119-2.442 4.119-5.443 0-3.001-1.845-5.444-4.119-5.444Z" fill="#6377FE"/></svg>
                    <h4 class="font-size-18 font-size-24-lg color-primary mt-20"><span class="font-weight-300 color-black"><?php echo get_field('s3_text-1') ?></span> <?php echo get_field('s3_text-1-bold') ?> <?php if (get_field('s3_text-2')):?><span class="font-weight-300 color-black"><?php echo get_field('s3_text-2') ?></span><?php endif; ?></h4>
                    <?php if (get_field('s3_link') and get_field('s3_link-text')): ?>
                    <a class="font-size-16 font-weight-700 color-black fit-content mt-20" href="<?php echo get_field('s3_link') ?>"><?php echo get_field('s3_link-text') ?> <div class="button-icon"><div class="arrow arrow--button"></div></div></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="square" style="right: 176px; top: 132px;"></div>
    <div class="square" style="right: 88px; top: 220px;"></div>
    <div class="square" style="right: 176px; top: 220px;"></div>
    <div class="square" style="right: 176px; top: 308px;"></div>
    <div class="square" style="right: 264px; top: 308px;"></div>
    <div class="square" style="right: 352px; top: 220px;"></div>
</section>


<section class="section relative bg-grey overflow-x-clip">
    <div class="container">
        <h2 class="font-size-24 font-size-40-lg text-align-center-lg mb-70 mb-120-lg"><?php echo get_field('s4_header') ?></h2>
        <div class="row">
            <div class="col-xl-5">
                <div class="d-flex flex-column align-items-center-lg">
                    <p class="font-size-18 font-size-24-lg text-align-center-lg mb-20"><?php echo get_field('s4_text') ?></p>
                    <a class="font-size-16 font-weight-700 color-black" href="<?php echo get_field('s4_link') ?>"><?php echo get_field('s4_link-text') ?> <div class="button-icon"><div class="arrow arrow--button"></div></div></a>
                </div>
            </div>
            <div class="col-xl-7 hide-max-lg">
                <img src="/wp-content/themes/openapp/img/phone.webp" class="phone-image mt-70 mt-0-xl">
            </div>
            </div>
        </div>
    </div>
    <div class="dot" style="right: 70px; top: 70px;"></div>
    <div class="dot" style="right: 260px; top: 130px;"></div>
    <div class="dot" style="right: 436px; top: 190px;"></div>
    <div class="dot" style="right: 680px; top: 390px;"></div>
    <div class="dot" style="right: 970px; top: 450px;"></div>
    <div class="dot" style="right: 1350px; top: 490px;"></div>
    <div class="dot" style="right: 1600px; top: 460px;"></div>
</section>


<section class="section pb-0">
    <div class="container">
        <h3 class="mb-70 mb-120-lg font-size-24 font-size-24-lg font-weight-300 d-flex flex-column-xxl align-items-center text-align-center-xxl"><?php echo get_field('s5_header-1') ?>
            <svg class="ml-35-xxl mt-35 mt-0-xxl" width="102" height="62" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M44.023 48.102c-.413-.339-.617-.794-.617-1.368 0-.58.204-1.037.617-1.376.414-.338.972-.508 1.674-.508s1.253.17 1.667.508c.413.34.623.796.623 1.376 0 .573-.21 1.03-.623 1.368-.414.34-.965.509-1.667.509-.702 0-1.26-.17-1.674-.509Zm2.888-1.368c0-.632-.473-1.037-1.214-1.037-.742 0-1.214.405-1.214 1.037 0 .632.472 1.03 1.214 1.03.741 0 1.214-.398 1.214-1.03ZM51.953 44.941h1.05v3.578h-1.024v-.554c-.243.398-.729.646-1.359.646-.544 0-.944-.137-1.253-.43-.322-.313-.453-.73-.453-1.493V44.94h1.057v1.773c0 .443.098.704.315.854.183.111.341.156.597.156.472 0 .84-.24.997-.638.046-.11.072-.267.072-.456V44.94ZM56.9 47.672v.848h-1.318c-.729 0-1.03-.287-1.03-.965v-1.78h-.67v-.834h.67v-.958h1.056v.958H56.9v.835h-1.292v1.544c0 .267.092.352.413.352h.88ZM60.327 48.102c-.413-.339-.617-.794-.617-1.368 0-.58.204-1.037.617-1.376.414-.338.971-.508 1.674-.508.702 0 1.253.17 1.666.508.414.34.624.796.624 1.376 0 .573-.21 1.03-.623 1.368-.414.34-.965.509-1.667.509-.703 0-1.26-.17-1.674-.509Zm2.888-1.368c0-.632-.473-1.037-1.214-1.037-.742 0-1.214.405-1.214 1.037 0 .632.472 1.03 1.214 1.03.741 0 1.214-.398 1.214-1.03ZM67.617 44.453h-.662c-.27 0-.375.071-.375.26v.228h1.037v.834H66.58v2.745h-1.056v-2.745h-.59v-.834h.59v-.273c0-.697.453-1.023 1.378-1.023h.715v.808ZM73.322 47.672v.848h-1.32c-.728 0-1.03-.287-1.03-.965v-1.78h-.669v-.834h.67v-.958h1.056v.958h1.293v.835h-1.293v1.544c0 .267.092.352.413.352h.88ZM74.364 48.52v-4.876h1.057v1.806c.268-.371.767-.6 1.378-.6.525 0 .938.143 1.253.43.322.307.46.737.46 1.493v1.746h-1.057v-1.772c0-.41-.092-.659-.296-.815a1.009 1.009 0 0 0-.63-.195c-.498 0-.892.247-1.043.645a1.317 1.317 0 0 0-.065.456v1.681h-1.057ZM80.058 48.115c-.406-.332-.61-.788-.61-1.375 0-.554.21-1.01.636-1.362.427-.352.972-.528 1.647-.528.663 0 1.195.157 1.602.47.413.312.617.717.617 1.206 0 .045 0 .084-.007.13 0 .046-.006.143-.013.306h-3.4c.073.502.565.795 1.333.795.551 0 1.096-.176 1.43-.462l.565.631c-.387.424-1.181.685-2.094.685-.728 0-1.292-.163-1.706-.496Zm.506-1.812h2.27c-.072-.41-.479-.664-1.09-.664-.623 0-1.069.247-1.18.664ZM86.984 48.52v-4.876h1.056v1.721c.348-.339.847-.515 1.424-.515.61 0 1.103.176 1.49.521.387.346.577.802.577 1.363 0 .554-.19 1.01-.577 1.355-.387.346-.88.522-1.49.522-.597 0-1.108-.19-1.45-.528v.436h-1.03Zm3.471-1.786c0-.62-.479-1.03-1.187-1.03-.735 0-1.228.41-1.228 1.03 0 .62.493 1.023 1.228 1.023.715 0 1.187-.404 1.187-1.023ZM92.943 48.102c-.414-.339-.617-.794-.617-1.368 0-.58.203-1.037.617-1.376.413-.338.971-.508 1.673-.508.702 0 1.254.17 1.667.508.413.34.623.796.623 1.376 0 .573-.21 1.03-.623 1.368-.413.34-.965.509-1.667.509-.702 0-1.26-.17-1.673-.509Zm2.888-1.368c0-.632-.473-1.037-1.215-1.037-.741 0-1.213.405-1.213 1.037 0 .632.472 1.03 1.213 1.03.742 0 1.215-.398 1.215-1.03ZM102 48.52h-1.404l-1.017-1.16-1.024 1.16h-1.313l1.693-1.805-1.66-1.774h1.384l.978 1.088.972-1.088h1.312l-1.64 1.734L102 48.52ZM54.352 39.012H51.53v-8.051c0-1.696-.753-2.608-2.12-2.713-.852-.067-2.202.133-3.182.351v10.413h-2.822V26.605s3.431-.76 6.53-.757c1.341.002 2.412.475 3.213 1.272.8.797 1.202 1.907 1.202 3.331v8.561ZM101.939 39.098a5.861 5.861 0 0 1-1.444.175c-1.59 0-2.64-.35-3.152-1.053-.408-.553-.612-1.6-.612-3.14V22.168h2.785v3.651h2.473v2.26h-2.473v6.825c0 .738.094 1.224.284 1.458.223.3.695.451 1.418.451.206 0 .447-.016.721-.05v2.335ZM14.759 30.608s-3.304 1.268-7.38 1.268C3.304 31.876 0 30.608 0 30.608s3.304-1.268 7.38-1.268c4.075 0 7.379 1.268 7.379 1.268Z" fill="#000"/><mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="0" width="9" height="12"><path d="M16.71.041h8.252v11.913H16.71V.041Z" fill="#fff"/></mask><g mask="url(#a)"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.963 11.954s-2.928-1.958-5.207-5.248C17.478 3.417 16.71.042 16.71.042s2.927 1.958 5.206 5.247c2.279 3.29 3.047 6.666 3.047 6.666Z" fill="#000"/></g><path fill-rule="evenodd" clip-rule="evenodd" d="M17.489 20.003s-3.528-.39-7.127-2.253c-3.598-1.863-5.904-4.493-5.904-4.493s3.529.39 7.127 2.254c3.598 1.863 5.904 4.492 5.904 4.492ZM24.61 36.715c2.094-.02 4.62-1.658 4.62-1.658s-5.858-1.76-5.489-6.978c1.155-8.564 8.136-15.287 16.876-16.37a20.247 20.247 0 0 0-2.838-.189c-10.809.048-19.533 8.62-19.484 19.145.048 10.525 8.851 19.02 19.66 18.972a20.206 20.206 0 0 0 2.656-.191c-7.67-.952-13.913-6.218-16.152-13.177" fill="#000"/><mask id="b" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="49" width="9" height="13"><path d="M16.71 49.19h8.252v11.913H16.71V49.19Z" fill="#fff"/></mask><g mask="url(#b)"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.962 49.19s-2.927 1.957-5.206 5.248c-2.278 3.289-3.046 6.665-3.046 6.665s2.927-1.958 5.206-5.248c2.279-3.29 3.046-6.666 3.046-6.666Z" fill="#000"/></g><path fill-rule="evenodd" clip-rule="evenodd" d="M17.489 41.14s-3.528.391-7.127 2.254c-3.598 1.863-5.904 4.493-5.904 4.493s3.529-.39 7.127-2.254c3.598-1.863 5.904-4.492 5.904-4.492Z" fill="#000"/><mask id="c" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="102" height="62"><path d="M0 61.103h102V.041H0v61.062Z" fill="#fff"/></mask><g mask="url(#c)" fill-rule="evenodd" clip-rule="evenodd" fill="#000"><path d="M37.74 38.998h2.876V22.154H37.74V39ZM66.583 27.91c0-2.042-1.007-3.062-3.017-3.062H60.02v6.076h3.495c.963 0 1.715-.263 2.256-.791.541-.527.813-1.268.813-2.222Zm2.907 0c0 1.725-.538 3.11-1.61 4.156-1.076 1.046-2.533 1.57-4.373 1.57h-3.488v5.322h-2.877V22.11h6.159c1.993 0 3.524.515 4.59 1.545 1.065 1.029 1.599 2.447 1.599 4.255ZM79.894 32.336c0-1.268-.298-2.273-.89-3.016-.594-.742-1.38-1.114-2.36-1.114-.979 0-1.766.376-2.36 1.126-.591.752-.888 1.752-.888 3.004 0 1.268.297 2.273.888 3.016.594.743 1.381 1.114 2.36 1.114.98 0 1.766-.371 2.36-1.114.592-.743.89-1.748.89-3.016Zm2.913-.013c0 2.026-.572 3.658-1.715 4.896-1.144 1.24-2.625 1.858-4.448 1.858-1.82 0-3.305-.619-4.447-1.858-1.144-1.238-1.715-2.87-1.715-4.896 0-2.024.57-3.653 1.715-4.883 1.142-1.23 2.626-1.845 4.447-1.845 1.84 0 3.326.615 4.461 1.845 1.134 1.23 1.702 2.859 1.702 4.883ZM95.061 34.658c0 1.273-.498 2.318-1.496 3.14-.996.82-2.312 1.228-3.944 1.228-2.545 0-4.512-.753-5.905-2.26l2.14-1.781c1.066 1.039 2.312 1.556 3.739 1.556.792 0 1.419-.154 1.883-.464.464-.31.696-.698.696-1.167 0-.536-.267-.904-.8-1.105-.309-.117-1.134-.276-2.475-.477-1.616-.234-2.767-.586-3.456-1.055-.808-.568-1.21-1.422-1.21-2.56 0-1.155.489-2.122 1.468-2.901.98-.778 2.287-1.167 3.92-1.167 1.976 0 3.661.645 5.054 1.933l-1.676 1.758c-1.014-.886-2.166-1.331-3.456-1.331-1.65 0-2.475.461-2.475 1.382 0 .535.378.903 1.135 1.104 1.065.167 2.122.343 3.172.527 2.457.452 3.686 1.665 3.686 3.64Z"/></g></svg>
            <svg class="ml-35-xxl mt-35 mt-0-xxl" width="102" height="29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M70.697 10.97a7.023 7.023 0 0 0-2.761-2.76 8.922 8.922 0 0 0-4.208-1.01 8.742 8.742 0 0 0-4.175 1.01 6.812 6.812 0 0 0-2.76 2.76 8.091 8.091 0 0 0-1.044 4.09 8.045 8.045 0 0 0 1.043 4.125 7.366 7.366 0 0 0 2.761 2.76 8.838 8.838 0 0 0 4.175 1.01 8.923 8.923 0 0 0 4.208-1.01 7.489 7.489 0 0 0 2.76-2.76 8.451 8.451 0 0 0 1.01-4.124 8.464 8.464 0 0 0-1.01-4.091Zm-4.848 7.036a3.176 3.176 0 0 1-.337.337c-1.162.96-2.879.808-3.838-.337a6.458 6.458 0 0 1 0-5.925 2.47 2.47 0 0 1 2.087-.976 2.31 2.31 0 0 1 2.088.976c.555.892.825 1.936.757 2.98a4.901 4.901 0 0 1-.757 2.945ZM94.364 11.054a6.04 6.04 0 0 0-2.087-2.626 5.064 5.064 0 0 0-3.013-.925c-.825 0-1.633.202-2.374.572-.942.42-1.8.976-2.592 1.633l-.572-1.987a4.867 4.867 0 0 1-1.212.135.754.754 0 0 1-.388 0c.253 1.263.388 2.542.388 3.838v5.572c0 2.811.033 5.134-.068 7.12-.1 1.97-.185 3.485-.32 4.529h2.71c-.252-2.946-.386-5.623-.386-8.08a5.375 5.375 0 0 0 4.376 2.12 5.616 5.616 0 0 0 3.165-.976 6.214 6.214 0 0 0 2.222-2.66l.05-.05a9.518 9.518 0 0 0 .825-4.09 10.457 10.457 0 0 0-.724-4.125ZM91.79 19.96a3.84 3.84 0 0 1-3.198 1.515 3.687 3.687 0 0 1-2.525-.825 3.956 3.956 0 0 1-1.213-2.34 17.096 17.096 0 0 1-.353-3.922v-3.484a7.681 7.681 0 0 1 2.155-1.33 6.042 6.042 0 0 1 2.02-.438l-.017.068a3.598 3.598 0 0 1 3.13 1.633 8.285 8.285 0 0 1 1.145 4.713 7.304 7.304 0 0 1-1.144 4.41ZM10.686 11.205H7.84c0 2.222 0 4.242.151 6.11.152 1.87.253 3.603.472 5.185h-6.01c.286-2.693.421-5.386.387-8.08v-3.198H.501l-.47-3.097 2.81-.572v-.101a8.046 8.046 0 0 1 .825-3.805A5.701 5.701 0 0 1 5.972 1.19a7.65 7.65 0 0 1 3.67-.827h1.044l.505 4.09a3.105 3.105 0 0 0-.69-.1 2.468 2.468 0 0 0-2.02.723 3.242 3.242 0 0 0-.573 2.222v.354h3.451l-.673 3.552v.001ZM22.065 12.25a3.645 3.645 0 0 0-1.734-.505 2.56 2.56 0 0 0-2.222 1.043 5.89 5.89 0 0 0-.724 3.199c0 .572 0 1.397.068 2.457.067 1.06.185 2.408.286 4.024h-5.724c.186-1.364.287-2.727.354-4.09.067-1.364.101-2.694.152-4.024 0-2.29-.22-4.579-.64-6.834h.505a18.252 18.252 0 0 0 3.45-.287l.893 3.519a8.009 8.009 0 0 1 1.986-2.525 3.613 3.613 0 0 1 2.407-.859 5.825 5.825 0 0 1 1.515.253l-.572 4.629ZM23.513 22.484c.337-2.677.488-5.387.471-8.08a44.222 44.222 0 0 0-.572-6.835h.657a35.565 35.565 0 0 0 5.184-.286 68.017 68.017 0 0 0-.219 6.683c0 1.43 0 2.879.068 4.31.067 1.43.134 2.81.252 4.208h-5.84ZM29.05 4.304c-.268.488-.639.892-1.11 1.178a3.12 3.12 0 0 1-1.633.472c-.454 0-.892-.135-1.296-.354a2.53 2.53 0 0 1-.859-.976A2.988 2.988 0 0 1 23.8 3.26c0-.538.151-1.077.438-1.548A2.793 2.793 0 0 1 25.313.668 3.488 3.488 0 0 1 26.896.23c.69-.016 1.38.22 1.902.674.489.471.741 1.127.674 1.8 0 .556-.152 1.112-.421 1.6ZM41.003 20.43a5.438 5.438 0 0 1-2.374 1.7 12.154 12.154 0 0 1-3.804.607c-1.06 0-2.104-.118-3.131-.388l-.606-3.737c.673.186 1.363.32 2.054.438a9.523 9.523 0 0 0 1.7.135 3.572 3.572 0 0 0 1.515-.286c.286-.202.454-.54.471-.893a.995.995 0 0 0-.32-.723 5.857 5.857 0 0 0-.858-.573c-.387-.219-.859-.387-1.364-.69a10.339 10.339 0 0 1-1.633-1.044c-.42-.32-.74-.723-.976-1.178a3.42 3.42 0 0 1-.32-1.633 4.758 4.758 0 0 1 .724-2.592 5.45 5.45 0 0 1 2.239-1.7 10.017 10.017 0 0 1 3.518-.573 11.986 11.986 0 0 1 3.097.354l.388 3.484a12.526 12.526 0 0 0-2.626-.387 4.126 4.126 0 0 0-1.751.286 1.062 1.062 0 0 0-.539.977.957.957 0 0 0 .539.825c.505.336 1.027.656 1.582.925.623.32 1.23.69 1.801 1.111.455.354.842.792 1.111 1.297.27.521.404 1.11.354 1.7a4.773 4.773 0 0 1-.791 2.558ZM54.604 21.777c-.774.387-1.6.69-2.458.892-.774.185-1.565.286-2.373.286a7.01 7.01 0 0 1-3.67-.925 6.62 6.62 0 0 1-2.458-2.593 8.858 8.858 0 0 1-.858-3.888 9.84 9.84 0 0 1 1.01-4.528 7.036 7.036 0 0 1 2.811-2.845 9.732 9.732 0 0 1 4.46-1.01c.977.016 1.954.151 2.913.387l.572 4.174a5.198 5.198 0 0 0-2.592-.69 4.279 4.279 0 0 0-2.946 1.044 4.04 4.04 0 0 0-1.077 2.879 3.785 3.785 0 0 0 .976 2.693c.69.69 1.65 1.044 2.626.976a8.143 8.143 0 0 0 3.266-.825l-.202 3.973ZM78.204 21.44a2.66 2.66 0 0 1-.858.926 2.53 2.53 0 0 1-1.145.354 2.25 2.25 0 0 1-1.633-.673 2.405 2.405 0 0 1-.64-1.7c.017-.455.118-.893.32-1.297.202-.353.489-.656.825-.892.32-.236.707-.353 1.111-.353a2.393 2.393 0 0 1 1.684.64c.437.454.673 1.06.64 1.7 0 .454-.119.892-.32 1.296h.016ZM100.929 22.484h-2.457c.185-3.45.252-7.289.252-11.598 0-2.66 0-4.814-.1-6.43-.102-1.616-.152-2.76-.22-3.35A19.781 19.781 0 0 0 101.03.5c-.101.825-.185 2.272-.252 4.46-.068 2.19-.101 4.95-.101 8.485 0 2.542.084 5.555.252 9.04Z" fill="#000"/></svg>
        </h3>
        <div class="row" id="hp-contact">
            <div class="col-lg-6">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg">
                    <h4 class="font-size-24 font-size-24-lg color-primary mb-20"><?php echo get_field('s5_header-2') ?></h4>
                    <p class="font-size-18 mt-20 mb-20"><?php echo get_field('s5_text-1') ?></p>
                    <p class="font-size-18 mt-20"><?php echo get_field('s5_text-2') ?> <a href="<?php echo get_field('s5_help-link') ?>" class="color-primary text-underline"><?php echo get_field('s5_help-link-text') ?></a></p>
                </div>
            </div>
            <div class="col-lg-6 mt-70 mt-0-lg">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slider__slide");
        let dots = document.getElementsByClassName("slider__dot");
        let cards = document.getElementsByClassName("card");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        for (i = 0; i < cards.length; i++) {
            cards[i].className = cards[i].className.replace(" card--active", "");
        }
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].className += " active";
        cards[slideIndex-1].className += " card--active";
    }

    function scrollToForm() {
        document.querySelector('#hp-contact').scrollIntoView({behavior: 'smooth'});
    }
</script>

<?php get_footer(); ?>
