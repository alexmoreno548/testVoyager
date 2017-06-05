<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sidutrade</title>
        {{Html::style("/css/main.css")}}
        {{Html::style("/css/bootstrap.min.css")}}
        {{Html::style("/css/bootstrap.css")}}
        {{Html::style("/css/fontello.css")}}
        {{Html::script("/js/jquery.js")}}
    </head>
    <body>
        <span class="icon-up-open buttonUp"></span>
        <!--SECTION MENU-->
        <header class="container" id="supermenu">
            <div class="submenu">
                <img src="./image/logo.png" class="col-md-3">
                <nav class="menu col-md-9">
                    <ul>
                        <li><a href="#about">NOSOTROS</a></li>
                        <li><a href="#services">SERVICIOS</a></li>
                        <li><a href="#products">PRODUCTOS</a></li>
                        <li><a href="#client">CLIENTES</a></li>
                        <li><a href="#news">NOTICIAS</a></li>
                        <li><a href="#contact">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--SECTION MENU-->

        <!--SECTION BANNER-->
        <section class="banner">
                <div class="banner__txt">
                    <h1>Un centro de servicio completo de Aluminio</h1>
                    <p>
                        Bienvenido ¿Esta buscando algun consejo útil? No vaya mas allá;
                        Ha entrado al lugar correcto. Somos profesionales, experimentados
                        y enfocados en su satisfaccion. ¡Valoramos su confianza!
                    </p>
                </div>
        </section>
        <!--SECTION BANNER FIN-->

        <!--SECTION ABOUT US-->
        <section class="nosotros" id="about">

            <!--ARTICULO UNO-->
            <article class="container">
                <figure class="imgs">
                    <img src="./image/Parallax3.jpg" alt="" class="img1">
                    <img src="./image/Parallax4.jpg" alt="" class="img2">
                </figure>
                <figcaption class="txt-nosotros">
                    <hgroup>
                        <h1><span>01</span>Nosotros</h1>
                        <h2>Proveemos a clientes industriales en todo el mundo</h2>
                    </hgroup>
                    <p>
                        SIDUTRADE NV, es una empresa comercial dedicada a la compra,
                        venta, importacion y exportacion de todo tipo de materias primas.
                        permitiendo a las empresas nacionales e internacionales esplorar
                        las diferentes oportunidades existentes en el mercado
                    </p>
                </figcaption>
            </article>
            <hr style="width:71%;border: 1px solid #ADADAD;margin-left:7%;">
            <!--ARTICULO UNO FIN-->

            <!--ARTICULO DOS-->
            <article class="container">
                <div class="mision col-md-5">
                    <h2>Misión</h2>
                    <p>
                        El compromiso principal de SIDUTRADE NV, es atender las necesidades
                        de nuestros clientes, regidos por la exelencia y experiencia; ofreciendo
                        productos que cumplen con los estandares internacionales de calidad, permitiendonos
                        ser una empresa creciente y sostenible logrando el desarrollo de las competencias
                        profesionales de nuestro capital humano.
                    </p>
                </div>
                <div class="vision col-md-4 col-md-offset-1">
                    <h2>Visión</h2>
                    <p>
                        Ser una empresa lider, solida y confiable con presencia internacional,
                        que se distinga por proporcional calidad en sus productos y servicios,
                        con una gestion que se anticipe y se adapte al cambio, aprenda de la
                        experiencia e innove continuamente
                    </p>
                </div>
            </article>
            <!--ARTICULO DOS FIN-->

        <hr style="width: 99.888%;border: 1px solid #ADADAD;float: left;margin-top:0px;margin-bottom: 40px;">
        </section>
        <!--SECTION ABOUT US FIN-->

        <!--SECTION SERVICIOS-->
        <section class="servicios" id="services">
            <figure>
                <!--<div class='triangle'></div>-->
                <div class="triangle-img-container">
                    <div class="triangle-img-inner">
                        <div class="triangle-img" style="background-image: url('./image/Parallax1.jpg')"></div>
                    </div>
                </div>
                <figcaption class="container">
                    <hgroup>
                        <h1><span>02</span>Servicios</h1>
                        <h3>Continuar con el legado de la exelencia</h3>
                        <hr style="width: 50% ;border: 1px solid #ADADAD;">
                        <h2>Importaciones y Exportaciones</h2>
                    </hgroup>
                    <div class="txt-info">
                        <p>
                            Coordinamos el transporte, traslado y todas las formalidades legales
                            para la entrada de su mercancia desde su origen hasta su destino. Ofreciendole:
                        </p>
                        <ul>
                            <li>Contratacion y Coordinacion de transporte entre puertos y fabricas</li>
                            <li>Contratacion y Coordinacion de Caleta y Estiba</li>
                            <li>Servicio de Almacenamiento</li>
                            <li>Consolidacion de Cargas</li>
                            <li>Tramites Aduaneros</li>
                            <li>Tramitacion de Exoneraciones de impuesto para proyectos</li>
                            <li>Gestion de Fletes aereos y maritimos</li>
                            <li>Contratacion de Buques y vuelos Charter</li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
            <hr style="width: 42%;border: 1px solid #ADADAD;">
        </section>


        <section id="valores" style="position: relative;height: 433px;width: 100%;background: #B9BBBD;">
          <div class="background-valores-after"></div>
          <div class="background-valores"></div>
          <ul id="hexGrid">
            <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/secure-shield.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/ecology.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/worker.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
              <li class="hex">
              <a class="hexIn" href="#">
                  <img src="./image/people.svg" alt="" />
                  <h1>This is a title</h1>
                  <p>Some sample text about the article this hexagon leads to</p>
                </a>
              </li>
            </ul>
        </section>

        <!--SECTION PRODUCTOS-->
        <section class="productos container" id="products" >
            <header class="">
                <h1><span>03</span>Productos</h1>
                <p>
                    Sidutrade NV, es una empresa encargada en compra, venta,
                    adquisicion, importacion y exportacion de productos subderivados del acero
                </p>
            </header>
            <article class="tarjeta-wrap col-md-6">
                <div class="tarjeta">
                    <div class="adelante" style="background-image: url('./image/product1.jpg')"></div>
                    <div class="atras">
                        <h1>Bobinas de Acero</h1>
                        <p>
                            Son tuilizadas por una variedad de consumidores tales como:
                            fabricantes de piezas automotrices, tubos, cilindros de gas,
                            construccion de edificios, puentes, ferrocarriles, entro otros.
                        </p>
                    </div>
                </div>
            </article>
            <article class="tarjeta-wrap col-md-6">
                <div class="tarjeta">
                    <div class="adelante" style="background-image: url('./image/product2.jpg')"></div>
                    <div class="atras">
                        <h1>Bobinas de Acero</h1>
                        <p>
                            Son tuilizadas por una variedad de consumidores tales como:
                            fabricantes de piezas automotrices, tubos, cilindros de gas,
                            construccion de edificios, puentes, ferrocarriles, entro otros.
                        </p>
                    </div>
                </div>
            </article>
            <article class="tarjeta-wrap col-md-6">
                <div class="tarjeta">
                    <div class="adelante" style="background-image: url('./image/product3.jpg')"></div>
                    <div class="atras">
                        <h1>Bobinas de Acero</h1>
                        <p>
                            Son tuilizadas por una variedad de consumidores tales como:
                            fabricantes de piezas automotrices, tubos, cilindros de gas,
                            construccion de edificios, puentes, ferrocarriles, entro otros.
                        </p>
                    </div>
                </div>
            </article>
            <article class="tarjeta-wrap col-md-6">
                <div class="tarjeta">
                    <div class="adelante" style="background-image: url('./image/product4.jpg')"></div>
                    <div class="atras">
                        <h1>Bobinas de Acero</h1>
                        <p>
                            Son tuilizadas por una variedad de consumidores tales como:
                            fabricantes de piezas automotrices, tubos, cilindros de gas,
                            construccion de edificios, puentes, ferrocarriles, entro otros.
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <!--SECTION PRODUCTOS FIN-->

        <!--SECTION NOTICIAS-->
        <section class="noticias" id="news">
          <div class="container">
            <header>
                <h1><span>04</span>Noticias</h1>
            </header>
            <div class="col-xs-6 col-md-4">
                <div class="thumb">
                    <figure>
                        <img src="./image/1.jpg" alt=""> 
                    </figure>
                    <figcaption class="caption">
                        <h3>Motocross</h3>
                        <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                        <a href="" class="boton">Leer Mas</a>
                    </figcaption>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumb">
                    <figure>
                        <img src="./image/1.jpg" alt=""> 
                    </figure>
                    <figcaption class="caption">
                        <h3>Motocross</h3>
                        <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                        <a href="" class="boton">Leer Mas</a>
                    </figcaption>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumb">
                    <figure>
                        <img src="./image/1.jpg" alt=""> 
                    </figure>
                    <figcaption class="caption">
                        <h3>Motocross</h3>
                        <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                        <a href="" class="boton">Leer Mas</a>
                    </figcaption>
                </div>
            </div>
          </div>
        </section>
        <!--SECTION FIN NOTICIAS-->

        <!--SECTION CONTACTO-->
        <section class="contacto" id="contact">
          <div class="container">
            <header>
                <h1><span>05</span>Contacto</h1>
                <br>
            </header>
            <iframe class="col-md-6" style="max-height:525px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2736027341293!2d-62.78631238315742!3d8.275543862113699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dcbf8d0bbde1f49%3A0xf8be7334314d4f2a!2sFundacion+Lala%2C+Av.+Caracas%2C+Ciudad+Guayana+8050%2C+Bol%C3%ADvar!5e0!3m2!1ses-419!2sve!4v1495836481244" width="600" height="525" frameborder="0" style="border:0" allowfullscreen></iframe>
            <section id="formulario" class="col-md-6">
                <div class="wrap">
                    <form action="" method="GET" name="formulario_registro">
                        <div class="field name-box">
                                <input type="text" id="name" placeholder=""/>
                                <label class="label" for="name">Nombre:</label>
                        </div>
                        <div class="field tlf-box">
                                <input type="text" id="tlf" placeholder=""/>
                                <label class="label" for="tlf">Telefono:</label>
                        </div>
                        <div class="field email-box">
                                <input type="email" id="email" placeholder=""/>
                                <label class="label" for="email">Email:</label>
                        </div>
                        <div class="field msg-box">
                                <textarea id="msg" rows="4" placeholder=""/></textarea>
                                <label class="label" for="msg">Comentario:</label>
                        </div>
                        <input class="button" type="submit" value="Enviar" />
                    </form>
                </div>
            </section>
          </div>
        </section>
        <!--SECTION FIN CONTACTO-->
        <br>
        <br>
        <br>
        <br>
        <br>
        {{Html::script("/js/formulario.js")}}
        {{Html::script("/js/parallaxBanner.js")}}
        {{Html::script("/js/buttonUp.js")}}
        {{Html::script("/js/smoothScroll.js")}}
    </body>
</html>
