<div class="menu-produtos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="submenu-produtos">
                    <ul>
                        <?php foreach ($products as $item) { ?>

                        <div>
                            <ul class="list-menu">
                                <li class="line-submenu <?php if($subpage == $item['slug']){ echo 'active'; }?>">
                                    <a href="<?php echo $pageurl; ?>/produtos/<?php echo $item['slug']; ?>">
                                        <span><?php echo $item['title']['rendered']; ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner-principal produtos-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 offset-xl-3">
                <h2><?php echo $product[0]['title']['rendered']; ?></h2>
                
                <?php echo $product[0]['content']['rendered']; ?>
            </div>
        </div>
    </div>
</div>

<div class="area-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">
                <div class="swiper-container swiper-product">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($product[0]['acf']['galeria_de_imagens'] as $image){
                        ?>
                        
                        <div class="swiper-slide">
                            <figure>
                                <img src="<?php echo $image['sizes']['post-thumbnail']; ?>" alt="" />
                            </figure>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="swiper-container swiper-products">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($product[0]['acf']['galeria_de_imagens'] as $image){
                        ?>
                        
                        <div class="swiper-slide">
                            <figure>
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="" />
                            </figure>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="area-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle">Categorias</span>

                <h2>Outros produtos</h2>

                <span class="rodape-title">Selecione a categoria desejada.</span>
            </div>

            <div class="col-12 col-xl-8 offset-xl-2">
                <div class="row">
                    <?php foreach ($products as $product) { ?>

                    <div class="col-12 col-xl-6">
                        <a href="<?php echo $pageurl; ?>/produtos/<?php echo $product['slug']; ?>" style="text-decoration: none;">
                            <div class="box-dispositivos">
                                <div class="dispositivos">
                                    <div class="dispositivos-img">
                                        <figure>
                                            <img src="<?php echo $product['acf']['imagem']['sizes']['medium']; ?>" alt="">
                                        </figure>
                                    </div>

                                    <strong><?php echo $product['title']['rendered']; ?></strong>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="duvidas">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle">Produtos</span>

                <h2>Conheça um pouco do<br/> nosso trabalho</h2>

                <span class="rodape-title">Fornecemos dispositivos de controle dimensional <br /> e bancadas de montagem e inspeção às principais <br /> empresas automotivas do mundo.</span>

                <a href="<?php echo $pageurl; ?>/produtos/dispositivos-de-controle-dimensional" class="button-primary">
                    Saiba mais

                    <figure class="white-arrow">
                        <img src="<?php echo $pageurl; ?>/images/button-arrow.png" alt="" />
                    </figure>

                    <figure class="blue-arrow">
                        <img src="<?php echo $pageurl; ?>/images/button-arrow-blue.png" alt="" />
                    </figure>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

    // Sliders Control
    const swiperProducts = new Swiper('.swiper-products', {
        spaceBetween: 15,
        speed: 600,
        loop: false,
        slidesPerView: 2,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            500: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 5,
            },
        },
    })
    
    const swiperProduct = new Swiper('.swiper-product', {
        spaceBetween: 0,
        speed: 600,
        loop: false,
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiperProducts,
        },
    })
</script>