<?php

namespace Core;

class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlControlle;
    private $UrlMetodo;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))):
            $this->Url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->UrlConjunto = explode("/", $this->Url);

            //Verifica se a url possui valores
            if ((isset($this->UrlConjunto[0])) AND ( isset($this->UrlConjunto[1]))) {
                //separar os valores da url
                $this->UrlControlle = $this->UrlConjunto[0];
                $this->UrlMetodo = $this->UrlConjunto[1];
            } else {
                $this->UrlControlle = 'home';
                $this->UrlMetodo = 'index';
            }
        else:
            $this->UrlControlle = 'home';
            $this->UrlMetodo = 'index';
        endif;
    }
    
    public function carregar() {
        $classe = "\\Sts\\Controllers\\".$this->UrlControlle;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

}
