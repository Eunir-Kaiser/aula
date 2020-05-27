<?php
namespace Sts\Controllers;
/**
 * Description of Blog
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Blog {
    public function index() {
        echo "Controller da página blog 1";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->Dados = $listarArtigo->listar();
        
        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this->Dados);
        $carregarView->renderizar();
       
        
    }
}
