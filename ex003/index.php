<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    
    <?php //0x = hexadecimal 0b = binario 0 = Octal
        // $num = 300;
        // echo "O valor da variavel é $num";

       // $v = "Ailton";
       // var_dump($v);

       // $vet = [6,2.5, "maria", 3, false];
       // var_dump($vet);

       class Pessoa {
            private string $nome;
       }

       $p = new Pessoa;
       var_dump($p);
        ?>

        <hr>
        <?php
            $canal = "Curso em Video";
            $ano = date('Y');
            echo <<< TESTE
                    Olá galera do $canal!
                    Tudo bem com voces?
                    Como está sendo esse ano de $ano?
                    Abraços! \u{1F596}
            TESTE;
        ?>
</body>
</html>