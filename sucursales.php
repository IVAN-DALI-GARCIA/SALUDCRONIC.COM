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
                    <li><a href=""><i class='bx bx-bell'></i></a></li>
                    <li><a href="#"><i class='bx bx-user-circle'></i></a></li>
                    <li><a href="#"><i class='bx bx-cart'></i></a></li>
                </ul>
            </div>
        </div>

        <div class="bg-second">
            <div class="bottom-header container">
                <ul class="main-menu">
                    <li class="menuHoverColor"><a href="index.php">INICIO</a></li>
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
                    <li class="menuHoverColor menuActivo"><a href="sucursales.php">SUCURSALES</a></li>
                </ul>
            </div>
        </div>
    </div>
    </header>
    <div class="section">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">INICIO</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./#">SUCURSALES</a>
                </div>
            </div>
            <div class="section-header">
                <h2>CONOCE NUESTRAS SUCURSALES </h2>
            </div>
            <div class="container2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
            </div>
            <div class="section-header">
                <h2>SUCURSALES SALUDCRONIC.COM </h2>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        SUCURSAL CENTRO HISTORICO.
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av. Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b></p>
                    </div>
                </div>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        SUCURSAL TLAQUEPAQUE LA MODERNA .
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av.
                            Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        SUCURSAL PLAZA FORUM TLAQUEPAQUE.
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av.
                            Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        BODEGA DE DISTRIBUCION GENERAL GUADALAJARA.
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av.
                            Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        SUCURSAL ZAPOPAN CENTRO JALISCO.
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av.
                            Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.751658866828!2d-103.37538068491621!3d20.67968010497892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae111fe70bfb%3A0x9709dcc1458383bc!2sAv.%20de%20las%20Am%C3%A9ricas%20166%2C%20Ladr%C3%B3n%20de%20Guevara%2C%20Ladron%20De%20Guevara%2C%2044600%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1638233496204!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        SUCURSAL BODEGA DE ENVIOS CDMX.
                    </div>
                    <div class="blog-preview2">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        </p>
                        <br>
                        <a href="https://www.google.com/search?q=direccion+de+salud+digna&client=firefox-b-d&tbm=lcl&sxsrf=AOaemvK8DeZv9eHLnDXi1CfgSCFoiNMEVQ%3A1638231061255&ei=FWylYbjoDo2lqtsP9eqioAY&oq=direccion+de+salud+digna&gs_l=psy-ab.3..0i512k1j0i512i457k1j0i512k1l8.51961.59738.0.60078.36.26.0.1.1.0.397.3685.0j6j8j2.18.0....0...1c.1.64.psy-ab..17.19.4196.10..35i39k1j0i67k1j0i512i433k1j0i512i433i457k1j0i402k1j35i362i39k1j0i512i433i131k1j0i433i67k1j0i457i67k1j0i433i457i67k1.342.DvBLst7N5t0#rlfi=hd:;si:11135249706602284882;mv:[[20.7330145,-103.23571380000001],[20.518249300000004,-103.4284101]]"><b>DIRECCION:</b>Av.
                            Francisco Javier Mina 511, San Juan de Dios, 44360 Guadalajara, Jal. </a>
                        <p>
                            <b>HORARIO:</b> Cierra pronto ⋅ 19:00 ⋅ Abre a las 07:00am.
                        </p>
                        <p>
                            <b>TELEFONOS:</b> 33 3615 3168 / 3167
                        </p>
                        <p>
                            <b><a href="index.php">saludCronic.com</a></b>
                        </p>
                        <p><b><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">SaludCronic@shopMedic.com</a></b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-header">
                <h2>VIDEO INSTITUCIONAL. </h2>
            </div>
            <div class="container2">
                <div class="blog-title">
                    VIDEO CORPORATIVO.
                </div>
                <iframe src="https://www.youtube.com/embed/1YlSdVotRCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="container2">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio expedita animi nihil doloribus eaque aliquid nam velit ab ipsa unde libero eius porro facere vel delectus repudiandae suscipit cum hic voluptatum fugiat, assumenda impedit deserunt. Saepe
                    atque deleniti nobis sed quidem nesciunt dolorum iure fugiat voluptatum? Quisquam, a magni quasi nobis molestiae praesentium, earum cumque odit reprehenderit natus in aut minima commodi enim qui labore repudiandae consequuntur? Tenetur,
                    quia adipisci maxime officia accusamus explicabo et veniam eos inventore impedit cupiditate vero ea aliquam veritatis numquam molestiae voluptatibus, harum autem assumenda voluptatem reiciendis aperiam totam illum! Magni architecto
                    sed unde nam nulla minima sit recusandae quod ipsam corporis harum, quos iure voluptatem soluta ipsa asperiores excepturi laudantium consectetur eum? Veritatis vero fugiat obcaecati laudantium, saepe optio numquam cum delectus nesciunt
                    recusandae perferendis! Nisi sed reprehenderit, ex soluta vitae totam cupiditate consequuntur esse a. Assumenda blanditiis sed officiis vitae magni quaerat odio!
                </p>
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
                                <button class="btn-flat btn-hover btn-shop-now" role="link" onclick="window.location='./product-detail.php'" role="link" onclick="window.location='./product-detail.php'">COMPRAR</button>
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
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./imagenes/5glucocil.png" alt="Medicamento Kerflex">
                            <img src="./imagenes/5.1glicocil.png" alt="Medicamento Kerflex">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now" role="link" onclick="window.location='./product-detail.php'">COMPRAR</button>
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
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./imagenes/a078e94949ee7b022edbb5b3081f412e-removebg-preview.png" alt="Medicamento Kerflex">
                            <img src="./imagenes/kisspng-diuretic-weight-loss-water-retention-dietary-suppl-weight-loss-pills-5b4f11ba54b8b8.429911711531908538347-removebg-preview.png" alt="Medicamento Kerflex">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now" role="link" onclick="window.location='./product-detail.php'">COMPRAR</button>
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
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./imagenes/3glucobay.png" alt="Medicamento Kerflex">
                            <img src="./imagenes/3.1glucobay.png" alt="Medicamento Kerflex">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now" role="link" onclick="window.location='./product-detail.php'">COMPRAR</button>
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
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER
                        MAS</button>
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
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER
                        MAS</button>
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
                    <button class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">LEER
                        MAS</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover" role="link" onclick="window.location='./blog_tips.php'">VER
                    TODO</a>
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
                        <li><a href="politicas-calidad.php">POLÍTICA DE PRIVACIDAD</a></li>
                        <li><a href="sucursales.php">SUCURSALES</a></li>
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
            </div>
        </div>
    </footer>
    <script src="./js/app.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/preloader.js"></script>
</body>

</html>