<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="w-full">
                <nav class="flex items-center justify-between navbar navbar-expand-md">
                    <a class="mr-4 navbar-brand" href="index.html">
                        <img class="h-20" src="{{asset('assets/images/logo.svg')}}" alt="Logo">
                    </a>

                    <button class="block navbar-toggler focus:outline-none md:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
                    <div class="absolute left-0 z-30 hidden w-full px-5 py-3 duration-300 bg-white shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none" id="navbarOne">
                        <ul class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
                            <!-- flex flex-row mx-auto my-0 navbar-nav -->
                            <li class="nav-item active">
                                <a class="page-scroll" href="#home">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#service">SERVICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#contact">CONTACTANOS</a>
                            </li>
                        </ul>
                    </div>

                    <div class="items-center justify-end hidden navbar-social lg:flex">
                        <span class="mr-4 font-bold text-gray-900 uppercase">REDES SOCIALES</span>
                        <ul class="flex footer-social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>                                 
                        </ul>
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>