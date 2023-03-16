<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block text-center border rounded-pill py-1 px-4">Contate-nos</p>
            </div>
            <h3 class="mb-4 text-center">Para mais informações ou questionamentos entre em contato conosco pelo formulário.</h3>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                    <form action="<?= 'home/enviar' ?>" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="nome" class="form-control border-0" placeholder="Nome" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="assunto" class="form-control border-0" placeholder="Assunto" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" id="telefone" class="form-control border-0" placeholder="Telefone" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea id="mensagem" class="form-control border-0" rows="5" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-6">
                                <?= csrf_field(); ?>
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->