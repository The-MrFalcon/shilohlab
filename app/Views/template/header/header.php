<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shiloh Lab – Coleta Domiciliar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icone.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-8 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="badge rounded-pill bg-primary"><i class="fa fa-map-marker-alt me-2"></i>R. Torrinha, 131
                        São Paulo – SP – 03332-010</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small><a class="button btn btn-primary" data-bs-toggle="modal" data-bs-target="#hour"><i class="fa-regular fa-clock me-2"></i><span>Todos os horários</span> </a></small>
                </div>
            </div>
            <div class="col-lg-4 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa-regular fab fa-whatsapp"></i></a></small>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.1s" href="https://www.instagram.com/shiloh_lab/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.3s" href="https://www.facebook.com/goshenlab"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Modal Horários -->
    <div class="modal fade profile" id="hour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-center" id="exampleModalLabel">Todos os horários</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Segunda-feira a sexta: das 7h às 21h</p>
                    <p>Sábado: das 8h às 16h</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> <span>Fechar</span> </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Horários End -->


    <!-- Navbar Start -->
    <nav class="navbar fill navbar-expand-lg navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand d-flex px-lg-5">
            <img class="img-fluid" src="img/logocolor.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse text-center navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link <?php if (url_is('home')) {
                                                            echo "active";
                                                        } ?>"><i class="fa-solid fa-house me-1"></i><span>Home</span></a>
                <a href="#about" class="nav-item nav-link <?php if (url_is('about')) {
                                                                echo "active";
                                                            } ?> "><i class="fa-solid fa-users me-1"></i><span>Quem somos </span></a>
                <a href="#kit" class="nav-item nav-link <?php if (url_is('kit')) {
                                                            echo "active";
                                                        } ?>"><i class="fa-solid fa-bowl-food me-1"></i><span>Kit Desjejum </span> </a>
                <!-- <a href="#blog" class="nav-item nav-link <?php if (url_is('blog')) {
                                                                    echo "active";
                                                                } ?>"><i class="fa-solid fa-notes-medical me-1"></i><span>Exames</span></a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-notes-medical me-1"></i><span>Exames</span></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="#rast" class="dropdown-item">Exame de Rast</a>
                        <a href="#bioimpe" class="dropdown-item">Exame de Bioimpedância</a>
                        <a href="#exam" class="dropdown-item">Exames</a>
                    </div>
                </div>
                <a href="#kids" class="nav-item nav-link <?php if (url_is('treatments')) {
                                                                echo "active";
                                                            } ?>"><i class="fa-solid fa-children me-1"></i><span>Kids</span> </a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tratamentos</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <ul>
                            <li><a href="fiv" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Fertilização in vitro (FIV)</a></li>
                            <li><a href="icsi" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Injeção intracitoplasmática do espermatozoide (ICSI)</a></li>
                            <li><a href="ia" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Inseminação intrauterina (IIU)</a></li>
                            <li><a href="cop" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Coito programado</a></li>
                            <li><a href="co" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Preservação de fertilidade (congelamento de óvulos)</a></li>
                        </ul>
                        <ul>
                            <li><a href="pdo" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Programa de doação de óvulos</a></li>
                            <li><a href="pi" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Produção Independente</a></li>
                            <li><a href="ctu" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Cessão Temporária de útero (barriga solidária)</a></li>
                            <li><a href="banco" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Banco de Sêmen</a></li>
                            <li><a href="rce" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Retirada cirúrgica de espermatozóide (TESA, MESA, TESE)</a></li>
                            <li><a href="ch" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Casais homoafetivos</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <a href="costs" class="nav-item nav-link <?php if (url_is('costs')) {
                                                                    echo "active";
                                                                } ?>"><i class="fa-solid fa-mobile-screen-button me-1"></i>Contato</a> -->

            </div>
            <div class="d-grid gap-2 px-2 d-md-flex justify-content-md-end">
                <a data-bs-toggle="modal" data-bs-target="#contact" type="button" class="p-2 btn btn-outline-dark"><i class="fa-solid fa-calendar-check me-1"></i>Agendar exames</a>
                <a href="https://portal.worklabweb.com.br/resultados-on-line/945" type="button" class="p-2 btn btn-outline-dark"><i class="fa-solid fa-file-waveform me-1"></i>Resultados exames</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->