<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'home/enviar', 'Home::enviar');
$routes->get('clinic', 'Clinic::index');
$routes->get('blog', 'Blog::index');
$routes->get('costs', 'Costs::index');
$routes->get('faq', 'Faq::index');
$routes->get('ovodoacao-e-ovorecepcao', 'Ovodoacao::index');
$routes->get('contact', 'contact::index');
$routes->get('legislacao', 'Ovodoacao::legislacao');
// $routes->get('cadastro-ovorecepcao', 'Ovodoacao::cadastro_ovorecepcao');
//Tratamentos
$routes->get('ch', 'Treatment::Ch');
$routes->get('fiv', 'Treatment::fiv');
$routes->get('pi', 'Treatment::pi');
$routes->get('banco', 'Treatment::banco');
$routes->get('ctu', 'Treatment::ctu');
$routes->get('icsi', 'Treatment::icsi');
$routes->get('pdo', 'Treatment::pdo');
$routes->get('ia', 'Treatment::ia');
$routes->get('co', 'Treatment::co');
$routes->get('cop', 'Treatment::cop');
$routes->get('rce', 'Treatment::rce');
//Blog
$routes->get('ciclo_menstrual', 'Blog::ciclo_menstrual');
$routes->get('espermograma', 'Blog::espermograma');
$routes->get('ovorecepcao', 'Blog::ovorecepcao');
$routes->get('fiv-b', 'Blog::fiv');
$routes->get('ovodoacao', 'Blog::ovodoacao');
$routes->get('alimentacao', 'Blog::alimentacao');
$routes->get('melhorar-fertilidade', 'Blog::melhorar_fertilidade');
$routes->get('obesidade', 'Blog::obesidade');
$routes->get('dna', 'Blog::dna');
$routes->get('infertilidade', 'Blog::infertilidade');
$routes->get('avancada', 'Blog::avancada');
$routes->get('novembro-azul', 'Blog::novembro_azul');
$routes->get('producao-independente', 'Blog::producao_independente');
$routes->get('cancer-de-mama-homem', 'Blog::cancer_de_mama_homem');
$routes->get('emocionais-infertilidade', 'Blog::emocionais_infertilidade');
$routes->get('cancer-e-infertilidade', 'Blog::cancer_e_infertilidade');
$routes->get('coparentalidade', 'Blog::coparentalidade');
$routes->get('endometriose', 'Blog::endometriose');
$routes->get('preparar-fiv', 'Blog::preparar_fiv');
$routes->get('sorodiscordantes', 'Blog::sorodiscordantes');
$routes->get('adenomiose', 'Blog::adenomiose');
$routes->get('parentalidade', 'Blog::parentalidade');
$routes->get('sem-trompas', 'Blog::sem_trompas');
$routes->get('casal-durante-tratamento', 'Blog::casal_durante_tratamento');
$routes->get('mioma', 'Blog::mioma');
$routes->get('ansiedade-e-gravidez', 'Blog::ansiedade_e_gravidez');
$routes->get('procedimento-ia', 'Blog::procedimento_ia');
$routes->get('preservacao-fertilidade-feminina', 'Blog::preservacao_fertilidade_feminina');
$routes->get('adenomiose-infertilidade', 'Blog::adenomiose_infertilidade');
$routes->get('mioma-e-infertilidade', 'Blog::mioma_e_infertilidade');
$routes->get('oncologicas', 'Blog::oncologicas');
$routes->get('infertilidade-1', 'Blog::infertilidade_1');
$routes->get('funcionamento-fiv', 'Blog::funcionamento_fiv');
$routes->get('endometriose-inferteis', 'Blog::endometriose_inferteis');
$routes->get('obesidade-fertilidade', 'Blog::obesidade_fertilidade');
$routes->get('gravidez-cancer-de-mama', 'Blog::gravidez_cancer_de_mama');
$routes->get('fertilidade', 'Blog::fertilidade');
$routes->get('infertil', 'Blog::infertil');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
