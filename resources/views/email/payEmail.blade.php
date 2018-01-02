<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div>
    Comprovativo de Transação
    --------------------
    <br>
    Address: Caminho da Queimada de Cima nº 203
    Zip-code: 9010-145 Funchal
    Contact: 291743154
    --------------------
    <br>
    Número do cartão: {{ $nCartao }}
    --------------------
    <br>
    Código para levatamento do bilhete : <?php echo rand(10000, 99999) ?>
    </div>
    --------------------
    Poderá levantar o seu bilhete no balcão apresentando o código fornecido.
    <br>
    A Theycinema deseja-lhe um bom filme.
</body>
</html>