<?php
header("Content-type:text/html;charset=utf8");
$num1=$_POST{"num1"};
$num2=$_POST{"num2"};
$operacao=$_POST{"operacao"};
$total=0;
if($operacao == '+'){
    $total=$num1+$num2;
}else if($operacao == '-'){
    $total=$num1-$num2;
}else if($operacao == 'x'){
    $total=$num1*$num2;
}
else{
    if($num2 == 0){
        echo"<h3>Impossivel dividir por zero</h3>";
    }
    else{
        $total=$num1/$num2;
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Formulários</title>
</head>
<body>
<h1>Calculadora</h1>
<hr>
<h3>Resultado: <?php echo $total; ?></h3>
<a href="index.html">Voltar</a>
</body>
</html>