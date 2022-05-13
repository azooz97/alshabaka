<x-main.layout>

    <section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main">
                        <div class="bread">
                            <div class="bread-title">Portofolio</div>
                            <div class="bread-subtitle">
                                <a href="/">Home</a>
                                <span class="spacebread"></span>
                                <span>Portofolio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section gallery -->
    <section aria-label="works" id="Gallery">
        <div class="container-fluid">
            <div class="row p-3-vh">

                <div class="col-12 centered mb-3">
                    <div class="detailcontent text-center p-0">
                        <div class="subheading">OUR WORKS</div>
                        <div class="heading">Best Designs</div>
                    </div>
                </div>

                <!-- filter project -->
                <div class="col-md-12 text-center">
                    <ul id="filter-porto" class="d-block">
                        <li class="filt-projects-w selected" data-project="*">All
                        </li>
                        <li class="filt-projects-w" data-project=".architect">Architecture
                        </li>
                        <li class="filt-projects-w" data-project=".furniture">Furniture
                        </li>
                        <li class="filt-projects-w" data-project=".interior">Interior
                        </li>
                        <li class="filt-projects-w" data-project=".decor">Decor
                        </li>
                    </ul>
                </div>
                <!-- filter project end -->

                <!-- project -->
                <div class="col-md-12 mt-3 px-md-0">
                    <div id="w-gallery-column" class="w-gallery-container">
                        <a class="w-gallery architect furniture" href="img/gallery/1.jpg">
                            <img src="img/gallery/1.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>

                        <a class="w-gallery interior furniture" href="img/gallery/3.jpg">
                            <img src="img/gallery/3.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>

                        <a class="w-gallery architect decor video" href="img/gallery/5.jpg">
                            <img src="img/gallery/5.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>

                        <a class="w-gallery architect" href="img/gallery/6.jpg">
                            <img src="img/gallery/6.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>

                        <a class="w-gallery furniture decor" href="img/gallery/7.jpg">
                            <img src="img/gallery/7.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>

                        <a class="w-gallery interior furniture decor" href="img/gallery/8.jpg">
                            <img src="img/gallery/8.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>
                        <a class="w-gallery interior furniture decor" href="img/gallery/9.jpg">
                            <img src="img/gallery/9.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>
                        <a class="w-gallery interior furniture decor" href="img/gallery/10.jpg">
                            <img src="img/gallery/10.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>
                        <a class="w-gallery interior furniture decor" href="img/gallery/11.jpg">
                            <img src="img/gallery/11.jpg" alt="" class="w-gallery-image">
                            <div class="content-gallery">
                                <span class="ti-plus"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- project end -->

            </div>
        </div>
    </section>
    <!-- section gallery end -->

</x-main.layout>
