<?php

namespace Sts\Models;

use PDO;

/**
 * Description of StsListarBlog
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class StsListarBlog {

    public $resultado;

    public function listar() {
        // echo "Pesquisa artigos";
        $listarArtigos = new \Sts\Models\Conn();


        $limit = 10;

        $result_artigos = "SELECT * FROM artigos LIMIT :limit";
        $resultado_artigos = $listarArtigos->getConn()->prepare($result_artigos);
        $resultado_artigos->bindParam(':limit', $limit, \PDO::PARAM_INT);
        $resultado_artigos->execute();
        
        $this->resultado['artigos'] = $resultado_artigos->fetchAll();
        return $this->resultado;
        //var_dump($this->resultado);
    }

}
