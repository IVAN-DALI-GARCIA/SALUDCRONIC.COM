<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaludCronic.com</title>
    <!-- google font agrego fuentes desde google -->
    <link rel="shortcut icon" href="./imagenes/SaludCronic_1_-removebg-preview_100x100.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons links de iconos gratis -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <!-- referencia al app css -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <div id="contenerdor_carga" class="contenerdor_carga">
        <div id="carga" class="carga">
            <!-- preloader los estilos estanb guiardados en app.css -->
        </div>
    </div>
    <header>
        <div class="mobile-menu bg-second">
            <a href="#" class="mb-logo">SaludCronic.com</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="https://www.skype.com/es/features/calling-and-instant-messaging/" target="_blank">MÉXICO</a>
                        </li>
                        <li>
                            <a href="https://mail.google.com/" target="_blank">SaludCronic@shopMedic.com</a>
                        </li>
                    </ul>
                    <ul class="devided">
                        <li class="dropdown">
                            <a href="">PESO/MX</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">USD</a></li>
                                <li>
                                    <a href="#">CAD</a>
                                </li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="">ESPAÑOL</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="">INGLÉS</a></li>
                                <li><a href="#">FRANCES</a></li>
                                <li><a href="#">PORTUGUES</a></li>
                                <li><a href="#">JAPONES</a></li>
                            </ul>
                        </li>
                        <li><a href="#">BUSCAR GUIA</a></li>
                    </ul>
                </div>
            </div>

            <div class="bg-main">
                <div class="mid-header container">
                    <a href="index.php" class="logo"><img src="./imagenes/SaludCronic_1_-removebg-preview_100x100.png" alt="Logotipo de saludcronic.com" width="70px">SaludCronic.</a>
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    <ul class="user-menu">
                        <li><a href="#"><i class='bx bx-bell'></i></a></li>
                        <li><a href="#"><i class='bx bx-user-circle'></i></a></li>
                        <li><a href="#"><i class='bx bx-cart'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li class="menuHoverColor menuActivo"><a href="index.php">INICIO</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products.php">FARMACIA<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>NEFROPATIAS</h3>
                                            <ul>
                                                <li><a href="#">Dietas y alimentos (Supelmentos)</a></li>
                                                <li><a href="#">POS TRASPLANTES</a></li>
                                                <li><a href="#">Diálisis/Hemodiálisis</a></li>
                                                <li><a href="#">Médicina Especializada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>CARDIOPATIAS</h3>
                                            <ul>
                                                <li><a href="#">Dietas y alimentos (Supelmentos)</a></li>
                                                <li><a href="#">Diuréticos</a></li>
                                                <li><a href="#">Bloqueadores/PA.</a></li>
                                                <li><a href="#">Médicina Especializada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>DIABETES MELLITUS</h3>
                                            <ul>
                                                <li><a href="#">Dietas y alimentos (Supelmentos)</a></li>
                                                <li><a href="#">Tipo 1 (Insulina)</a></li>
                                                <li><a href="#">Tipo 2 (Inividores)</a></li>
                                                <li><a href="#">Médicina Especializada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>INSUMOS / SERVICIOS</h3>
                                            <ul>
                                                <li><a href="#">Insturmentos Medicos(Operacione)</a></li>
                                                <li><a href="#">Analisis clinicos </a></li>
                                                <li><a href="#">Estudios Especializados</a></li>
                                                <li><a href="#">Médicina Especializada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row img-row">
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/4_insuficiencia_renal_cronica_enf.jpg" alt="DerechosReservados_PIXABAY_1.Imagen de Rickson Bejar en Pixabay.jpg">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/3_maxresdefault-1-852x556.jpg" alt="DerechosReservados_PIXABAY_wardrobe-g48423dca8_1280.jpg">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/2_TOMA_DIABETES.jpg" alt="DerechosReservados_PIXABAY_pexels-goran-vrakela-230290.jpg">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./imagenes/1_INSUMOS2.jpg" alt="DerechosReservados_PIXABAY_pexels-tima-miroshnichenko-7046979.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menuHoverColor"><a href="products.php">PRODUCTOS</a></li>
                        <li class="menuHoverColor"><a href="blog_tips.php">BLOG</a></li>
                        <li class="menuHoverColor"><a href="current-cuestions.php">PREGUNTAS</a></li>
                        <li class="menuHoverColor"><a href="contactme.php">CONTACTO</a></li>
                        <li class="menuHoverColor"><a href="nosotros.php">NOSOTROS</a></li>
                        <li class="menuHoverColor"><a href="#">SUCURSALES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="hero">
        <div class="slider">
            <div class="container">

                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                CARDIOPATIAS CRONICA
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                DIURÉTICOS
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./imagenes/ejemplo-d-del-corazón-y-cardiograma-humanos-en-fondo-azul-futurista-tecnologías-de-digitaces-medicina-137460804.jpg" alt="DerechosReservados_PIXABAY_19 store-984393_1920Imagen de Free-Photos en Pixabay.jpg">
                    </div>
                </div>

                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                NEFROPATIAS CRONICAS
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                HEMODIÁLISIS
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./imagenes/Unidad-Dialisis-HCB-sala-principal-web.jpg" alt="DerechosReservados_PIXABAY_3_Imagen_de_Anastasia_Gepp_en_Pixabay.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                ANALISIS CLINICOS
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                BH-QS-PERFILES
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./imagenes/cro-y-estudios-medicos.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                DIABETES MELLITUS
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                INSULINA
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./imagenes/DIABETEMELLITUS.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
            </div>
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
        </div>
    </div>
    <div class="promotion">
        <div class="section-header">
            <h2>TOP SKU'S</h2>
        </div>
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>INSULINA ACCION RAPIDA</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/istockphoto-1187343158-612x612-removebg-preview.png" alt="Insulina Dix">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ESTUDIOS LABORATORIO</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/kisspng-test-tube-blood-test-chemistry-blood-test-5aa250afe70ba3.8078162915205869279464-removebg-preview.png" alt="Estudios laboratorios">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>GLÚCOMETRO -BLOOD</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/png-clipart-blood-glucose-meters-blood-glucose-monitoring-blood-sugar-blood-lancet-onetouch-ultra-blood-miscellaneous-service-removebg-preview.png" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ENSURE MILK900</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/png-transparent-powdered-milk-dog-ensure-nutrient-milk-food-nutrition-eating-removebg-preview.png">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ENALAPRIL</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/ENALAPRIL-removebg-preview.png" alt="Estudios laboratorios">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ENSURE 457ml</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>COMPRAR AHORA</span></button>
                    </div>
                    <img src="./imagenes/2_back_home_47_producto_advance_liquido_botella_chocolate_co-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>PROMOCIONES SKU'S</h2>
            </div>
            <div class="row" id="latest-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./imagenes/61Mmj76ZTbS._AC_SX679_-removebg-preview.png" alt="logotipo diabetex">
                            <img src="./imagenes/goicoechea-diabet-tx-plus-urea-piel-extra-seca-D_NQ_NP_961406-MLA27041867736_032018-F__59751_std-removebg-preview.png" alt="pomada diabetex/goicochea">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now" onclick="window.location='/product-detail.php'">COMPRAR</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                POMADA DIBETEX 180g.
                            </div>
                            <div class="product-card-price">
                                <span><del>$399</del></span>
                                <span class="curr-price">$349</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">VER MAS</a>
            </div>
        </div>
    </div>

    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        <img src="./imagenes/980010697s-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">FLANAX BAYER MEDIC.</div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'">COMPRAR AHORA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>MAS VENDIDOS</h2>
            </div>
            <div class="row" id="best-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./imagenes/3keflex.png" alt="Medicamento Kerflex">
                            <img src="./imagenes/3.1keflex.png" alt="Medicamento Kerflex">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <a href="./product-detail.php" class="btn-flat btn-hover btn-shop-now">COMPRAR</a>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                KERFLEX 500mg CEFALEXINA
                            </div>
                            <div class="product-card-price">
                                <span><del>$310.20</del></span>
                                <span class="curr-price">$249.20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">VER MAS</a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>BLOG & TIP'S </h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="./imagenes/Comida-sana-y-ejercicio.jpg" alt="Imagenes de pixabayderechos reservados de la pagina comida-sana-y-ejercicio.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        COME SANO CUIDA TU CORAZÓN.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER MAS</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img src="./imagenes/N_2016.10_articulo_nutricionydeporte_WEB.jpg" alt="Imagenes de pixabayderechos reservados de la pagina ARTICULO_NUTRICION_DEPORTE.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        EL DEPORTE DESMINUYE ENFERMEDADES.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER MAS</button>
                </div>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="./imagenes/jugo-verde-con-avena-para-mejorar-digestion.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        TIP'S JUGO VERDE ¿TE AYUDA?.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER MAS</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">VER TODO</a>
            </div>
        </div>
    </div>
    <div class="bg-second">
        <div class="container3">
            <input type="checkbox" id="btn-mas">
            <div class="redes">
                <a href="https://es-la.facebook.com/" class="fa fa-facebook" target="_blank"></a>
                <a href="https://www.youtube.com/" class="fa fa-youtube" target="_blank"></a>
                <a href="https://twitter.com/" class="fa fa-twitter" target="_blank"></a>
                <a href="https://www.pinterest.com/" class="fa fa-pinterest" target="_blank"></a>
            </div>
            <div class="btn-mas">
                <label for="btn-mas" class="fa fa-plus"></label>
            </div>
        </div>
    </div>
    <div class="container4">
        <input type="checkbox" id="btn-mas2">
        <div class="modal">
            <div class="contenedor">
                <header>Chat en linea</header>
                <label for="btn-modal">X</label>
                <div class="contenido">
                    <img src="./imagenes/img7.png" alt="">
                    <h3>
                        hola buenas tarde!! Como le va...!!! ¿podemos ayudarle en algo?
                    </h3>
                    <p>
                        <!-- Agregar un mensaje -->
                    </p>
                    <textarea name="" id="" cols="30%" rows="1" placeholder="Escribne Aqui tu mensaje"></textarea>
                </div>
            </div>
        </div>
        <div class="btn-mas2">
            <label for="btn-mas2" class="fa fa-plus"></label>
        </div>
    </div>


    <footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">CATEGORIA</h3>
                    <ul class="menu">
                        <li><a href="#">MEDICAMENTOS</a></li>
                        <li><a href="#">INSUMOS</a></li>
                        <li><a href="#">HEMODIÁLISIS</a></li>
                        <li><a href="#">NUTRICION Y ALLIMENTOS</a></li>
                        <li><a href="#">OTC MEDICAMENTOS</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">SERVICIOS</h3>
                    <ul class="menu">
                        <li><a href="contactme.php">REGISTRO</a></li>
                        <li><a href="contactme.php">CONTACTANOS</a></li>
                        <li><a href="#">CONSULTAS MEDICAS</a></li>
                        <li><a href="products.php">MEDICINA ESPECIALIZADA</a></li>
                        <li><a href="blog_tips.php">BLOG & TIPS</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">POLITICAS Y APOYOS </h3>
                    <ul class="menu">
                        <li><a href="#">POLÍTICA DE PRIVACIDAD</a></li>
                        <li><a href="sucursales">SUCURSALES</a></li>
                        <li><a href="#">ENVIOS</a></li>
                        <li><a href="nosotros.php">NOSOTROS</a></li>
                        <li><a href="#">FACTURAS</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            <a href="index.php" class="logo"><img src="./imagenes/SaludCronic_1_-removebg-preview_100x100.png" width=".99rem"></a>SaludCronic.com
                        </h3>
                        <ul class="contact-socials">
                            <li>
                                <a href="https://es-la.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="ENTER YOUR EMAIL">
                        <button>SUSCRIBETE</button>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </footer>
    <script src="./js/app.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/preloader.js"></script>

</body>

</html>