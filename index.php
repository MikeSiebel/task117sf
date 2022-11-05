<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>T&C tables</title>
</head>

<body>
    <h1>Старт в PHP</h1>
    <h2>Задание 1. Таблица истинности PHP</h2>
    <?php
    //variables
    $A = 0;
    $B = 0;
    $r = 0;
    ?>

    <table id="tab1" class="tab">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>!A</td>
            <td>A || B</td>
            <td>A && B</td>
            <td>A xor B</td>
        </tr>
        <tr>
            <td><?= $a = $A ?></td>
            <td><?= $b = $B ?></td>
            <td><?= $r  = !$a ?></td>
            <td><?= (int)$r = ($a || $b) ?></td>
            <td><?= (int)$r = ($a && $b) ?></td>
            <td><?= (int)$r = ($a xor $b) ?></td>
        </tr>
        <tr>
            <td><?= $a = $A ?></td>
            <td><?= $b = !$B ?></td>
            <td><?= (int)$r  = !$a ?></td>
            <td><?= (int)$r = ($a || $b) ?></td>
            <td><?= (int)$r = ($a && $b) ?></td>
            <td><?= (int)$r = ($a xor $b) ?></td>
        </tr>
        <tr>
            <td><?= $a = !$A ?></td>
            <td><?= $b = $B ?></td>
            <td><?= (int)$r  = !$a ?></td>
            <td><?= (int)$r = ($a || $b) ?></td>
            <td><?= (int)$r = ($a && $b) ?></td>
            <td><?= (int)$r = ($a xor $b) ?></td>
        </tr>
        <tr>
            <td><?= $a = !$A ?></td>
            <td><?= $b = !$B ?></td>
            <td><?= (int)$r  = !$a ?></td>
            <td><?= (int)$r = ($a || $b) ?></td>
            <td><?= (int)$r = ($a && $b) ?></td>
            <td><?= (int)$r = ($a xor $b) ?></td>
        </tr>
    </table>

    <h2>Задание 2. Таблица сравнения</h2>
    <h3>2.1 Гибкое сравнение в PHP</h3>
    <?php
    //variables
    $x1 = true;
    $x2 = false;
    $x3 = 1;
    $x4 = 0;
    $x5 = -1;
    $x6 = "1";
    $x7 = null;
    $x8 = "php";
    $y1 = true;
    $y2 = false;
    $y3 = 1;
    $y4 = 0;
    $y5 = -1;
    $y6 = "1";
    $y7 = null;
    $y8 = "php";
    ?>
    <table id=tab21 class=tab>
        <tr>
            <td></td>
            <td>true</td>
            <td>false</td>
            <td>1</td>
            <td>0</td>
            <td>-1</td>
            <td>"1"</td>
            <td>null</td>
            <td>"php"</td>
        </tr>
        <tr>
            <td>true</td>
            <td><?= (int)$r = ($x1==$y1) ?></td>
            <td><?= (int)$r = ($x2==$y1) ?></td>
            <td><?= (int)$r = ($x3==$y1) ?></td>
            <td><?= (int)$r = ($x4==$y1) ?></td>
            <td><?= (int)$r = ($x5==$y1) ?></td>
            <td><?= (int)$r = ($x6==$y1) ?></td>
            <td><?= (int)$r = ($x7==$y1) ?></td>
            <td><?= (int)$r = ($x8==$y1) ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td><?= (int)$r = ($x1==$y2) ?></td>
            <td><?= (int)$r = ($x2==$y2) ?></td>
            <td><?= (int)$r = ($x3==$y2) ?></td>
            <td><?= (int)$r = ($x4==$y2) ?></td>
            <td><?= (int)$r = ($x5==$y2) ?></td>
            <td><?= (int)$r = ($x6==$y2) ?></td>
            <td><?= (int)$r = ($x7==$y2) ?></td>
            <td><?= (int)$r = ($x8==$y2) ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= (int)$r = ($x1==$y3) ?></td>
            <td><?= (int)$r = ($x2==$y3) ?></td>
            <td><?= (int)$r = ($x3==$y3) ?></td>
            <td><?= (int)$r = ($x4==$y3) ?></td>
            <td><?= (int)$r = ($x5==$y3) ?></td>
            <td><?= (int)$r = ($x6==$y3) ?></td>
            <td><?= (int)$r = ($x7==$y3) ?></td>
            <td><?= (int)$r = ($x8==$y3) ?></td>
        </tr>
        <tr>
            <td>0</td>
            <td><?= (int)$r = ($x1==$y4) ?></td>
            <td><?= (int)$r = ($x2==$y4) ?></td>
            <td><?= (int)$r = ($x3==$y4) ?></td>
            <td><?= (int)$r = ($x4==$y4) ?></td>
            <td><?= (int)$r = ($x5==$y4) ?></td>
            <td><?= (int)$r = ($x6==$y4) ?></td>
            <td><?= (int)$r = ($x7==$y4) ?></td>
            <td><?= (int)$r = ($x8==$y4) ?></td>
        </tr>
        <tr>
            <td>-1</td>
            <td><?= (int)$r = ($x1==$y5) ?></td>
            <td><?= (int)$r = ($x2==$y5) ?></td>
            <td><?= (int)$r = ($x3==$y5) ?></td>
            <td><?= (int)$r = ($x4==$y5) ?></td>
            <td><?= (int)$r = ($x5==$y5) ?></td>
            <td><?= (int)$r = ($x6==$y5) ?></td>
            <td><?= (int)$r = ($x7==$y5) ?></td>
            <td><?= (int)$r = ($x8==$y5) ?></td>
        </tr>
        <tr>
            <td>"1"</td>
            <td><?= (int)$r = ($x1==$y6) ?></td>
            <td><?= (int)$r = ($x2==$y6) ?></td>
            <td><?= (int)$r = ($x3==$y6) ?></td>
            <td><?= (int)$r = ($x4==$y6) ?></td>
            <td><?= (int)$r = ($x5==$y6) ?></td>
            <td><?= (int)$r = ($x6==$y6) ?></td>
            <td><?= (int)$r = ($x7==$y6) ?></td>
            <td><?= (int)$r = ($x8==$y6) ?></td>
        </tr>
        <tr>
            <td>null</td>
            <td><?= (int)$r = ($x1==$y7) ?></td>
            <td><?= (int)$r = ($x2==$y7) ?></td>
            <td><?= (int)$r = ($x3==$y7) ?></td>
            <td><?= (int)$r = ($x4==$y7) ?></td>
            <td><?= (int)$r = ($x5==$y7) ?></td>
            <td><?= (int)$r = ($x6==$y7) ?></td>
            <td><?= (int)$r = ($x7==$y7) ?></td>
            <td><?= (int)$r = ($x8==$y7) ?></td>
        </tr>
        <tr>
            <td>"php"</td>
            <td><?= (int)$r = ($x1==$y8) ?></td>
            <td><?= (int)$r = ($x2==$y8) ?></td>
            <td><?= (int)$r = ($x3==$y8) ?></td>
            <td><?= (int)$r = ($x4==$y8) ?></td>
            <td><?= (int)$r = ($x5==$y8) ?></td>
            <td><?= (int)$r = ($x6==$y8) ?></td>
            <td><?= (int)$r = ($x7==$y8) ?></td>
            <td><?= (int)$r = ($x8==$y8) ?></td>
        </tr>
    </table>

    <h3>2.2 Жёсткое сравнение в PHP</h3>
    <table id=tab22 class=tab>
    <tr>
            <td></td>
            <td>true</td>
            <td>false</td>
            <td>1</td>
            <td>0</td>
            <td>-1</td>
            <td>"1"</td>
            <td>null</td>
            <td>"php"</td>
        </tr>
        <tr>
            <td>true</td>
            <td><?= (int)$r = ($x1===$y1) ?></td>
            <td><?= (int)$r = ($x2===$y1) ?></td>
            <td><?= (int)$r = ($x3===$y1) ?></td>
            <td><?= (int)$r = ($x4===$y1) ?></td>
            <td><?= (int)$r = ($x5===$y1) ?></td>
            <td><?= (int)$r = ($x6===$y1) ?></td>
            <td><?= (int)$r = ($x7===$y1) ?></td>
            <td><?= (int)$r = ($x8===$y1) ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td><?= (int)$r = ($x1===$y2) ?></td>
            <td><?= (int)$r = ($x2===$y2) ?></td>
            <td><?= (int)$r = ($x3===$y2) ?></td>
            <td><?= (int)$r = ($x4===$y2) ?></td>
            <td><?= (int)$r = ($x5===$y2) ?></td>
            <td><?= (int)$r = ($x6===$y2) ?></td>
            <td><?= (int)$r = ($x7===$y2) ?></td>
            <td><?= (int)$r = ($x8===$y2) ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?= (int)$r = ($x1===$y3) ?></td>
            <td><?= (int)$r = ($x2===$y3) ?></td>
            <td><?= (int)$r = ($x3===$y3) ?></td>
            <td><?= (int)$r = ($x4===$y3) ?></td>
            <td><?= (int)$r = ($x5===$y3) ?></td>
            <td><?= (int)$r = ($x6===$y3) ?></td>
            <td><?= (int)$r = ($x7===$y3) ?></td>
            <td><?= (int)$r = ($x8===$y3) ?></td>
        </tr>
        <tr>
            <td>0</td>
            <td><?= (int)$r = ($x1===$y4) ?></td>
            <td><?= (int)$r = ($x2===$y4) ?></td>
            <td><?= (int)$r = ($x3===$y4) ?></td>
            <td><?= (int)$r = ($x4===$y4) ?></td>
            <td><?= (int)$r = ($x5===$y4) ?></td>
            <td><?= (int)$r = ($x6===$y4) ?></td>
            <td><?= (int)$r = ($x7===$y4) ?></td>
            <td><?= (int)$r = ($x8===$y4) ?></td>
        </tr>
        <tr>
            <td>-1</td>
            <td><?= (int)$r = ($x1===$y5) ?></td>
            <td><?= (int)$r = ($x2===$y5) ?></td>
            <td><?= (int)$r = ($x3===$y5) ?></td>
            <td><?= (int)$r = ($x4===$y5) ?></td>
            <td><?= (int)$r = ($x5===$y5) ?></td>
            <td><?= (int)$r = ($x6===$y5) ?></td>
            <td><?= (int)$r = ($x7===$y5) ?></td>
            <td><?= (int)$r = ($x8===$y5) ?></td>
        </tr>
        <tr>
            <td>"1"</td>
            <td><?= (int)$r = ($x1===$y6) ?></td>
            <td><?= (int)$r = ($x2===$y6) ?></td>
            <td><?= (int)$r = ($x3===$y6) ?></td>
            <td><?= (int)$r = ($x4===$y6) ?></td>
            <td><?= (int)$r = ($x5===$y6) ?></td>
            <td><?= (int)$r = ($x6===$y6) ?></td>
            <td><?= (int)$r = ($x7===$y6) ?></td>
            <td><?= (int)$r = ($x8===$y6) ?></td>
        </tr>
        <tr>
            <td>null</td>
            <td><?= (int)$r = ($x1===$y7) ?></td>
            <td><?= (int)$r = ($x2===$y7) ?></td>
            <td><?= (int)$r = ($x3===$y7) ?></td>
            <td><?= (int)$r = ($x4===$y7) ?></td>
            <td><?= (int)$r = ($x5===$y7) ?></td>
            <td><?= (int)$r = ($x6===$y7) ?></td>
            <td><?= (int)$r = ($x7===$y7) ?></td>
            <td><?= (int)$r = ($x8===$y7) ?></td>
        </tr>
        <tr>
            <td>"php"</td>
            <td><?= (int)$r = ($x1===$y8) ?></td>
            <td><?= (int)$r = ($x2===$y8) ?></td>
            <td><?= (int)$r = ($x3===$y8) ?></td>
            <td><?= (int)$r = ($x4===$y8) ?></td>
            <td><?= (int)$r = ($x5===$y8) ?></td>
            <td><?= (int)$r = ($x6===$y8) ?></td>
            <td><?= (int)$r = ($x7===$y8) ?></td>
            <td><?= (int)$r = ($x8===$y8) ?></td>
        </tr>
    </table>

    <h3>Вывод:</h3>
    <p class="conclusion">
    В первом задании создана таблица истинности для логических операторов И, ИЛИ, Исключающее ИЛИ, 	Отрицание.
    </p>
    <p class="conclusion">
    В втором задании показано отличие операторов жёсткого (строгого) сравнения с помощью === и гибкого сравнения (нестрогого) с помощью ==. При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значения после преобразования типов и совпадение значений является достаточным для получения true на выходе. При жестком сравнении только одновременное совпадение и типов переменных и их значений приводит к true.
    </p>
   

</body>

</html>