<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Estrutura Header
        return view('template/header/header')
            // Estrutura Pages/Index
            . view('pages/index/banner_header')
            . view('pages/index/about')
            . view('pages/index/kit')
            . view('pages/index/rast')
            . view('pages/index/bioimpe')
            . view('pages/index/kids')
            . view('pages/index/etapas')
            . view('pages/index/testimonial')
            // Estrutura Footer
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    // public function enviar()
    // {
    //     helper('form');

    //     if ($this->validate([
    //         'nome' => 'required|min_length[3]',
    //         'email' => 'required|min_length[3]|valid_email',
    //         'assunto' => 'required|min_length[3]',
    //         'mensagem' => 'required|min_length[10]',
    //         'telefone' => 'required|min_length[11]'
    //     ])) {
    //         $mail = \Config\Services::email();

    //         echo $nome = $this->request->getVar('nome');
    //         echo $email = $this->request->getVar('email');
    //         echo $assunto = $this->request->getVar('assunto');
    //         echo $telefone = $this->request->getVar('telefone');
    //         echo $mensagem = $this->request->getVar('mensagem');

    //         $mail->setFrom('no-reply@shilohfertilidade.com.br', 'Novo Contato de cliente!');
    //         $mail->setTo('no-reply@shilohfertilidade.com.br');
    //         // atendimento@shilohfertilidade.com.br           
    //         $mail->setSubject($assunto);
    //         $mail->setMessage('<!doctypehtml><html><head><meta charset="utf-8"><meta content="width=device-width,initial-scale=1"name="viewport"><meta content="IE=edge"http-equiv="X-UA-Compatible"><title>EmailTemplate-Responsive</title><style type="text/css">body,html{margin:0!important;padding:0!important;height:100%!important;width:100%!important}*{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}.ExternalClass{width:100%}div[style*="margin: 16px 0"]{margin:0!important}table,td{mso-table-lspace:0!important;mso-table-rspace:0!important}table{border-spacing:0!important;border-collapse:collapse!important;table-layout:fixed!important;margin:0 auto!important}table table table{table-layout:auto}img{-ms-interpolation-mode:bicubic}.yshortcuts a{border-bottom:none!important}a[x-apple-data-detectors]{color:inherit!important}</style><style type="text/css">.button-a,.button-td{transition:all .1s ease-in}.button-a:hover,.button-td:hover{background:#555!important;border-color:#555!important}@media screen and (max-width:600px){.email-container{width:100%!important}.fluid,.fluid-centered{max-width:100%!important;height:auto!important;margin-left:auto!important;margin-right:auto!important}.fluid-centered{margin-left:auto!important;margin-right:auto!important}.stack-column,.stack-column-center{display:block!important;width:100%!important;max-width:100%!important;direction:ltr!important}.stack-column-center{text-align:center!important}.center-on-narrow{text-align:center!important;display:block!important;margin-left:auto!important;margin-right:auto!important;float:none!important}table.center-on-narrow{display:inline-block!important}}</style></head><body bgcolor="#e0e0e0"style="margin:0"width="100%"yahoo="yahoo"><table width="100%"bgcolor="#e0e0e0"border="0"cellpadding="0"cellspacing="0"height="100%"style="border-collapse:collapse"><tr><td><center style="width:100%"><table width="600"align="center"class="email-container"><tr></tr></table><table width="600"align="center"class="email-container"bgcolor="#ffffff"border="0"cellpadding="0"cellspacing="0"><tr></tr><tr><td style="padding:40px;text-align:center;font-family:sans-serif;font-size:15px;mso-height-rule:exactly;line-height:20px;color:#555"><p>Você acaba de receber um e-mail através do seu site.</p><p><b>Nome:</b> ' . $nome . '<br><b>Telefone:</b> ' . $telefone . '<br><b>E-mail</b>: ' . $email . '<br><b>Assunto</b>: ' . $assunto . '</p><p>' . $mensagem . '</p></td></tr></table><table width="600"align="center"class="email-container"><tr><td style="padding:40px 10px;width:100%;font-size:12px;font-family:sans-serif;mso-height-rule:exactly;line-height:18px;text-align:center;color:#888"><br><br>Clinica Shiloh<br><br><br></td></tr></table></center></td></tr></table></body></html>');

    //         $mail->send();
    //         // Estrutura Header
    //         echo view('template/header/header');

    //         echo view('template/pages/index/mensagem_enviada');

    //         // Estrutura de Footer
    //         echo view('template/footer/footer');
    //     } else {
    //         // Estrutura Header
    //         echo view('template/header/header-html');
    //         echo view('template/header/header');

    //         echo view('template/pages/index/mensagem_erro');

    //         // Estrutura Footer
    //         echo view('template/footer/footer');
    //     }
    // }
}
