<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
         require './Cliente.php';
         require './ClientePessoaFisica.php';
         require './ClientePessoaJuridica.php';
         
         $cliente = new Cliente();
         $cliente->setBairo('Avenida 01');
         $cliente->setEndereco('Rua 54');
         
         echo $cliente->verEndereco();
         
         $clientePF = new ClientePessoaFisica();
         $clientePF->setCPF(00000000000);
         $clientePF->setBairo('Trste 01');
         $clientePF->setEndereco('Rua 14');
         $clientePF->setNome('Eunir Kaiser');
         
         echo $clientePF->verEndereco();
         
         $clientePJ = new ClientePessoaJuridica();
         $clientePJ->setBairo('Cerramica');
         $clientePJ->setEndereco('Rua demetrio albani');
         $clientePJ->setCNPJ(123456789);
         $clientePJ->setNomeFantasia('Empresa teste');
         
         echo $clientePJ->verEndereco();
         
        
        ?>
    </body>
</html>
