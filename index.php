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

    default:
        echo "Sem resultado";
}
if (isset($_POST['num'])) {
    if (!isset($_SESSION['num1'])) {
        $_SESSION['num1'] = $_POST['num'];
    } else {
        $_SESSION['num2'] = $_POST['num'];
    }

if (isset($_POST['operator'])) {
    $_SESSION['operator'] = $_POST['operator'];
}

if (isset($_POST['equal'])) {
    if ($_SESSION['operator'] == '+'){
     $_SESSION['result'] = $_SESSION['num1'] + $_SESSION['num2'];
    }
}

if (isset($_POST['equal'])) {
    if ($_SESSION['operator'] == '-'){
        $_SESSION['result'] = $_SESSION['num1'] - $_SESSION['num2'];
    }
}

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == 'x'){
            $_SESSION['result'] = $_SESSION['num1'] * $_SESSION['num2'];
        }
    }

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == '/'){
            $_SESSION['result'] = $_SESSION['num1'] / $_SESSION['num2'];
        }
    }

if (isset($_POST['equal'])) {
    echo ['rsult'];
}

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
                <input type="button" name="num" value="7">
            </td>
            <td>
                <input type="button" name="num" value="8">
            </td>
            <td>
                <input type="button" name="num" value="9">
            </td>
            <td>
                <input type="button" name="operator" value="+">
            </td>
        </tr>

        <tr>
            <td>
                <input type="button" name="num" value="4">
            </td>
            <td>
                <input type="button" name="num" value="5">
            </td>
            <td>
                <input type="button" name="num" value="6">
            </td>
            <td>
                <input type="button" name="operator" value="-">
            </td>
        </tr>

        <tr>
            <td>
                <input type="button" name="num" value="1">
            </td>
            <td>
                <input type="button" name="num" value="2">
            </td>
            <td>
                <input type="button" name="num" value="3">
            </td>
            <td>
                <input type="button" name="operator" value="x">
            </td>
        </tr>

        <tr>
            <td>
                <input type="button" name="num" value="0">
            </td>
            <td>
                <input type="reset" name="limpar" value="c">
            </td>
            <td>
                <input type="submit" name="equal" value="=">
            </td>
            <td>
                <input type="button" name="operator" value="/">
            </td>
        </tr>
    </table>
</form>

</body>
</html>