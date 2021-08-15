<div class="menu-produtos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="submenu-produtos">
                    <ul>
                        <li class="line-submenu active"><a href="#">Dispositivos de Controle Dimensional </a></li>
                        <li class="line-submenu"><a href="#">Dispositivos e Gabaritos de Fixação</a></li>
                        <li class="line-submenu"><a href="#">Bancadas de Montagem e Inspeção</a></li>
                        <li class="line-submenu"><a href="#"> Bancadas de Montagem e Inspeção</a></li>
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
                <h2>Soluções Especiais de Controle e Inspeção</h2>
                
                <p>A Techcontrol desenvolve soluções específicas de controle dimensional por atributo ou variável, inspeção de presença de componentes, inspeção de montagem de componentes, inspeção simultânea de processos, etc.</p>
            
                <p>Conte conosco para desenvolver uma solução para o que você precisa, estaremos prontos para entender as suas necessidades e implementar as melhores tecnologias para entregar a solução ideal para o seu processo.</p>
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
                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="swiper-container swiper-products">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>

                        <div class="swiper-slide">
                            <figure>
                                <img src="images/exemplo.jpg" alt="" />
                            </figure>
                        </div>
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
                    <div class="col-12 col-md-4 col-xl-4">
                        <div class="box-dispositivos">
                            <div class="dispositivos">
                                <div class="dispositivos-img">
                                    <figure>
                                        <img src="images/dispositivo-2.png" alt="">
                                    </figure>
                                </div>

                                <strong>Dispositivos e Gabaritos<br/> de Fixação</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-4">
                        <div class="box-dispositivos">
                            <div class="dispositivos">
                                <div class="dispositivos-img">
                                    <figure>
                                        <img src="images/dispositivo-3.png" alt="">
                                    </figure>
                                </div>

                                <strong>Bancadas de Montagem<br/> e Inspeção</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-xl-4">
                        <div class="box-dispositivos">
                            <div class="dispositivos">
                                <div class="dispositivos-img">
                                    <figure>
                                        <img src="images/dispositivo-4.png" alt="">
                                    </figure>
                                </div>

                                <strong>Soluções Especiais de<br/> Controle e Inspeção</strong>
                            </div>
                        </div>
                    </div>
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

                <span class="rodape-title">Fornecemos dispositivos de controle dimensional e sistemas <br /> inteligentes para montagem e inspeção às principais <br /> empresas automotivas do mundo.</span>

                <a href="<?php echo $pageurl; ?>/produtos" class="button-primary">
                    Saiba mais

                    <figure class="white-arrow">
                        <img src="images/button-arrow.png" alt="" />
                    </figure>

                    <figure class="blue-arrow">
                        <img src="images/button-arrow-blue.png" alt="" />
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
        slidesPerView: 5,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
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