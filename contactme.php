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
    <link rel="stylesheet" href="./css/formulario.css">
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
                            <a href="https://www.skype.com/es/features/calling-and-instant-messaging/" target="_blank">M??XICO</a>
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
                            <a href="">ESPA??OL</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">INGL??S</a></li>
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
                                                <li><a href="#">Di??lisis/Hemodi??lisis</a></li>
                                                <li><a href="#">M??dicina Especializada</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>CARDIOPATIAS</h3>
                                            <ul>
                                                <li><a href="#">Dietas y alimentos (Supelmentos)</a></li>
                                                <li><a href="#">Diur??ticos</a></li>
                                                <li><a href="#">Bloqueadores/PA.</a></li>
                                                <li><a href="#">M??dicina Especializada</a></li>
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
                                                <li><a href="#">M??dicina Especializada</a></li>
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
                                                <li><a href="#">M??dicina Especializada</a></li>
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
                        <li class="menuHoverColor menuActivo"><a href="#">CONTACTO</a></li>
                        <li class="menuHoverColor"><a href="nosotros.php">NOSOTROS</a></li>
                        <li class="menuHoverColor"><a href="sucursales.php">SUCURSALES</a></li>
                        <li class="menuHoverColor"><a href="empleos.php">BOLSA TRABAJO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">INICIO</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./contactme.php">CONTACTO</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-header">
        <h2>ESCRIBENOS, SECCION DE CONTATO</h2>
    </div>
    <div class="seccion">
        <div class="container">
            <form action="" class="formulario" id="formulario">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="john123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 d??gitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="John Doe">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 d??gitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Contrase??a -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contrase??a</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contrase??a tiene que ser de 4 a 12 d??gitos.</p>
			</div>

			<!-- Grupo: Contrase??a 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contrase??a</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contrase??as deben ser iguales.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electr??nico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Tel??fono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Tel??fono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 d??gitos.</p>
			</div>

			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
            
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
                        COME SANO CUIDA TU CORAZ??N.
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
                        TIP'S JUGO VERDE ??TE AYUDA?.
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
                        hola buenas tarde!! Como le va...!!! ??podemos ayudarle en algo?
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
    <div class="bg-second">
        <div class="container3">
            <input type="checkbox" id="btn-mas">
            <div class="redes">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-pinterest"></a>
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
                        hola buenas tarde!! Como le va...!!! ??podemos ayudarle en algo?
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
                        <li><a href="#">HEMODI??LISIS</a></li>
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
                        <li><a href="politicas-calidad.php">POL??TICA DE PRIVACIDAD</a></li>
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
    <script src="./js/formulario.js"></script>
    <script src="./js/preloader.js"></script>
</body>

</html>