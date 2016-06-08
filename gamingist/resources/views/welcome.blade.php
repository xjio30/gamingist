@extends('layouts.app')

@section('content')
<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>¿ Juegas o Compites ?</h1>
                <hr>
                <p>Si te gusta competir y no sabes por donde empezar estás en el sitio adecuado. Gamingist es la mejor plataforma competitiva para amateurs del mundo. Descubre cómo funciona pidiendo acceso a la Beta.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Quiero entrar a la Beta</a>
            </div>
        </div>
    </header>

    <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Todo lo que necesitas para competir lo encontrarás aquí.</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-calendar wow bounceIn text-primary"></i>
                            <h3>Calendario de Torneos</h3>
                            <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-map-marker wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>Ladders Regionales</h3>
                            <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-group wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3>Buscador de Equipos y Jugadores</h3>
                            <p class="text-muted">We update dependencies to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-trophy wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3>Reconocimientos y Logros</h3>
                            <p class="text-muted">You have to make your websites with love these days!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Compite para ser el mejor de tu región</h2>
                    <hr class="light">
                    <p class="text-faded">Juega en la ladder de tu región contra tus vecinos y compatriotas. Se acabó jugar torneos y ligas random. Compite para ser el campeón de Madrid, Cataluña, Andalucía, Baleares, Canarias, el País Vasco, Valencia...</p>
                    <a href="#" class="btn btn-default btn-xl">Voy a ganarles a todos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    MOBA
                                </div>
                                <div class="project-name">
                                    League of Legends
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Cartas
                                </div>
                                <div class="project-name">
                                    HeartStone
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Shooter
                                </div>
                                <div class="project-name">
                                    Overwatch
                                </div>
                            </div>
                        </div>
                    </a>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dinos lo que opinas</h2>
                    <hr class="primary">
                    <p>Queremos saber tu opinión como jugador. Estamos trabajando en la plataforma a diario para que sea la mejor plataforma de eSports amateur del mundo. Ayúdanos a hacerlo. Envíanos un correo diciendo que te gustaría que añadiésemos o que es lo que más te gusta o menos de la plataforma actual. Contestamos a todos los correos. Porque <strong>Gamingist</strong> la hacemos todos.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p><a href="mailto:your-email@your-domain.com">feedback@gamingist.es</a></p>
                </div>
            </div>
        </div>
    </section>
                @endsection
