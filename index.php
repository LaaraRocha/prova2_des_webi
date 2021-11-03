<?php
$n1 = isset($_GET['numero1']) ? $_GET['numero1']*1 : 0 ;
$n2 = isset($_GET['numero2']) ? $_GET['numero2']*1 : 0 ;
$op = isset($_GET['escolha']) ? $_GET['escolha'] : 0 ;

switch ($op){

    case 'Soma':
        $result = $n1 + $n2;
        echo "O Resultado é: $result";
        break;

    case 'Subtração':
        $result = $n1 - $n2;
        echo "O Resultado é: $result";
        break;

    default: # adicionado
        echo "Sem resultado";
}
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>front_da_calculadora</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div>
        <table class="result">
            <th>

            </th>
        </table>
    </div>
    <form>
        <table>
            <tr>
                <td>
                    <input type="button" id="7" name="n_7" value="7">
                </td>
                <td>
                    <input type="button" id="8" name="n_8" value="8">
                </td>
                <td>
                    <input type="button" id="9" name="n_9" value="9">
                </td>
                <td>
                    <input type="button" id="somar" name="somar" value="+">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" id="4" name="n_4" value="4">
                </td>
                 <td>
                     <input type="button" id="5" name="n_5" value="5">
                </td>
                <td>
                    <input type="button" id="6" name="n_6" value="6">
                </td>
                <td>
                    <input type="button" id="subtrair" name="subtrair" value="- ">
                </td>
            </tr>

            <tr>
                 <td>
                    <input type="button" id="1" name="n_1" value="1">
                 </td>
                <td>
                    <input type="button" id="2" name="n_2" value="2">
                </td>
                <td>
                    <input type="button" id="3" name="n_3" value="3">
                </td>
                <td>
                    <input type="button" id="multi" name="multiplicar" value="x">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" id="0" name="n_0" value="0">
                </td>
                <td>
                    <input type="reset" id="limpar" name="limpar" value="c">
                </td>
                <td>
                    <input type="submit" id="igual" name="igual" value="=">
                </td>
                <td>
                    <input type="button" id="dividir" name="dividir" value="÷">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>