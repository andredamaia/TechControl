<div class="banner-principal">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-5 col-xl-5">
                <div class="left-side">
                    <h1>Dispositivos de Controle Dimensional e Bancadas de Montagem e Inspeção</h1>

                    <p>Excelência em controle dimensional e sistemas de inspeção de montagem por visão computacional</p>

                    <a href="<?php echo $pageurl; ?>/produtos/dispositivos-de-controle-dimensional" class="button-primary">
                        Saiba mais

                        <figure class="white-arrow">
                            <img src="<?php echo $pageurl; ?>/images/button-arrow.png" alt="">
                        </figure>

                        <figure class="blue-arrow">
                            <img src="<?php echo $pageurl; ?>/images/button-arrow-blue.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-6 offset-xl-1">
                <div class="right-side">
                    <figure>
                        <img src="<?php echo $pageurl; ?>/images/img-video.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="area-cliente">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-4">
                <div class="area-title">
                    <figure>
                        <img src="<?php echo $pageurl; ?>/images/cadeado.png" alt="">
                    </figure>

                    <span>Área do cliente</span>
                </div>
            </div>

            <div class="col-12 col-md-8 col-xl-8">
                <form class="form-cliente">
                    <div class="row">
                        <div class="col-12 col-md-4 col-xl-4">
                            <div>
                                <input type="text" placeholder="Nome">
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-xl-4">
                            <div>
                                <input type="text" placeholder="Senha">
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-xl-4">
                            <button class="button-form">Entrar</button>
                        </div>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="area-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-4">
                <span class="subtitle">Produtos</span>

                <h2>Sistemas de<br/> controle e medição</h2>
            </div>

            <div class="col-12 col-md-8 col-xl-8">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-6">
                        <div class="tipos-servicos">
                            <div class="servicos-title">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/dispositivos.png" alt="">
                                </figure>

                                <span>Dispositivos de controle</span>
                            </div>

                            <p>Instrumentos precisos de medição construídos a partir das necessidades de controle do produto, baseados na aplicação final.</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-6">
                        <div class="tipos-servicos">
                            <div class="servicos-title">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/bancadas.png" alt="">
                                </figure>

                                <span>Bancadas de montagem e inspeção</span>
                            </div>

                            <p>Estações de trabalho inteligentes que reduzem os esforços dos operadores e inspecionam simultaneamente as operações realizadas.</p>
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
                <span class="subtitle">Produtos</span>

                <h2>Conheça um pouco do<br/> nosso trabalho</h2>

                <span class="rodape-title">Nossos produtos estão presentes nas principais <br /> empresas automotivas do mundo.</span>
            </div>

            <div class="col-12 col-xl-8 offset-xl-2">
                <div class="row">
                    <?php foreach ($products as $product) { ?>

                    <div class="col-12 col-md-6 col-xl-6">
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
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="area-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <span class="subtitle">Sobre Nós</span>

                <h2>Fornecemos dispositivos de controle dimensional e sistemas inteligentes para montagem e inspeção às principais empresas automotivas do mundo</h2>
            </div>

            <div class="col-12 col-md-5 col-xl-5 offset-md-1 offset-xl-1">
                <div class="right-text">
                    <p>A Techcontrol é uma empresa brasileira especializada em soluções de controle dimensional e inspeção da qualidade de produtos.</p>

                    <p>Há mais de uma década no mercado, conta com uma equipe técnica com vasta experiência e com uma estrutura fabril de alta tecnologia para garantir qualidade e excelência desde a concepção até a entrega da solução mais adequada às necessidades do cliente.</p>

                    <a href="<?php echo $pageurl; ?>/empresa" class="button-light-blue">
                        Saiba Mais
                        <figure class="white-arrow">
                            <img src="<?php echo $pageurl; ?>/images/button-arrow.png" alt="">
                        </figure>

                        <figure class="blue-arrow">
                            <img src="<?php echo $pageurl; ?>/images/arrow-blue-light.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-4">
                <div class="galeria">
                    <div class="box-img">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/galeria-1.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-4">
                <div class="galeria">
                    <div class="box-img">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/galeria-2.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-4">
                <div class="galeria">
                    <div class="box-img">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/galeria-3.jpg" alt="">
                        </figure>
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
                <span class="subtitle">Clientes</span>

                <h2>Empresas que confiam na TechControl</h2>
            </div>

            <div class="col-12 text-center">
                <div class="swiper-container swiper-brands">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/faurecia.png" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/iber-oleff.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/renault.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/smp.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/ford.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/gm.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/honda.jpg" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-container swiper-brands" dir="rtl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/vuteq.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/reydel.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/fiat.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/plascar.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/mercedes-benz.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/volkswagen.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/arteb.jpg" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box-white">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/hyundai.jpg" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="area-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subtitle">Diferenciais</span>

                <h2>Por que escolher a<br/> TechControl?</h2>
            </div>

            <div class="col-12 col-md-4 col-xl-4">
                <div class="tipos-servicos">
                    <div class="servicos-title">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/capacidade.png" alt="">
                        </figure>

                        <span>Capacidade Produtiva</span>
                    </div>

                    <p>Ao longo dos anos a Techcontrol desenvolveu uma estrutura de padronização de componentes para atender as altas demandas e continuar prezando pela excelência na qualidade.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-4 col-xl-4">
                <div class="tipos-servicos">
                    <div class="servicos-title">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/certificado.png" alt="">
                        </figure>

                        <span>Certificação ISO 9001</span>
                    </div>

                    <p>Estamos sempre atentos as necessidades do mercado e aplicando ferramentas de melhoria contínua em produtos e processos para assegurar o mais alto padrão de qualidade, garantindo assim a confiança dos nossos clientes.</p>
                </div>
            </div>

            <div class="col-12 col-md-4 col-xl-4">
                <div class="tipos-servicos">
                    <div class="servicos-title">
                        <figure>
                            <img src="<?php echo $pageurl; ?>/images/know.png" alt="">
                        </figure>

                        <span>Know how</span>
                    </div>

                    <p>A experiencia técnica da equipe é um dos fatores de sucesso do negócio e contribui muito para a excelência nos resultados. Sabendo disso a Techcontrol investe constantemente em capacitações e preza muito pela relação duradoura entre a empresa e seus colaboradores.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="area-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <span class="subtitle">Depoimentos</span>

                <h2>O que nossos clientes têm a<br/> dizer sobre a TechControl?</h2>

                <div class="slider-depoimentos">
                    <div>
                        <div class="box-depoimentos">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta vitae ipsum at interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla mollis dui justo, vitae suscipit elit posuere id.</p>

                            <div class="person">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/person-1.jpg" alt="">
                                </figure>

                                <div class="person-name">
                                    <strong>Elon Musk</strong>

                                    <span>Doge Coin</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-md-block">
                        <div class="box-depoimentos">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta vitae ipsum at interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla mollis dui justo, vitae suscipit elit posuere id.</p>

                            <div class="person">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/person-1.jpg" alt="">
                                </figure>

                                <div class="person-name">
                                    <strong>Elon Musk</strong>

                                    <span>Doge Coin</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-md-block">
                        <div class="box-depoimentos">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porta vitae ipsum at interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla mollis dui justo, vitae suscipit elit posuere id.</p>

                            <div class="person">
                                <figure>
                                    <img src="<?php echo $pageurl; ?>/images/person-1.jpg" alt="">
                                </figure>

                                <div class="person-name">
                                    <strong>Elon Musk</strong>

                                    <span>Doge Coin</span>
                                </div>
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
                <span class="subtitle">Dúvidas</span>

                <h2>Entre em contato conosco</h2>

                <span class="rodape-title">Estamos a disposição para esclarecimentos, dúvidas técnicas, <br /> sugestões e orçamentos.</span>

                <a href="https://api.whatsapp.com/send?phone=" target="_blank" class="button-primary">
                    Whatsapp

                    <figure class="white-arrow">
                        <img src="<?php echo $pageurl; ?>/images/button-arrow.png" alt="">
                    </figure>

                    <figure class="blue-arrow">
                        <img src="<?php echo $pageurl; ?>/images/button-arrow-blue.png" alt="">
                    </figure>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

    // Sliders
    const swiperBrands = new Swiper('.swiper-brands', {
        spaceBetween: 25,
        speed: 20000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        slidesPerView: 2,
        allowTouchMove: false,
        disableOnInteraction: true,

        breakpoints: {
            500: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 5,
            },
        },
    })
</script>