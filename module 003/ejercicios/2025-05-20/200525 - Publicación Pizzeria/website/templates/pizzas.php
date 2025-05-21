<section class="pizzas-menu">
    <img src="/img/tier-menu.png" style="max-width: 100%;" alt="" srcset="">

    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="item" id="pizza1">
                    <div class="item__content">
                        <h4 class="item__title">Pizza carbonara</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza2">
                    <div class="item__content">
                        <h4 class="item__title">Pizza campañia</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza3">
                    <div class="item__content">
                        <h4 class="item__title">Pizza Cuatro Quesos</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza4">
                    <div class="item__content">
                        <h4 class="item__title">Pizza barbacoa</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza5">
                    <div class="item__content">
                        <h4 class="item__title">Pizza pollo</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza6">
                    <div class="item__content">
                        <h4 class="item__title">Pizza Sinner</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza7">
                    <div class="item__content">
                        <h4 class="item__title">Pizza Hawaiana</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="item" id="pizza8">
                    <div class="item__content">
                        <h4 class="item__title">Pizza Peperoni</h4>
                        <p class="item__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus
                            vitae ut veritatis animi hic architecto repellat, iusto nisi aut
                            asperiores ipsam dolorem, sit in. Sequi sint rerum architecto
                            temporibus.
                        </p>
                        <a href="/pages/ordena.php" class="item__btn"> ¡Pide ya! </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <!-- DOCUMENTACION
    https://swiperjs.com/swiper-api 
    -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                slidesPerView: 3,

                // If we need pagination
                //pagination: {
                //    el: '.swiper-pagination',
                //},

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        });
    </script>
</section>