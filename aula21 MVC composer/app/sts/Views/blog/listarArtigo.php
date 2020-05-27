<?php
echo "Listando artigo";
//var_dump($this->Dados);

foreach ($this->Dados['artigos'] as $artigo) {
    extract($artigo);
    echo "ID: {$id} <br>";
    echo "Titulo: {$titulo} <br>";
    echo "Conteúdo: {$conteudo} <br><hr>";
}
