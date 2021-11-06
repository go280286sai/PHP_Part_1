<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>NIX Education</title>
</head>
<body>
<?php
include "header.php";
?>
<main><selection>
            <table border="2px">
                <tr>
                    <td> <?php
                            for ($i = 1; $i <= 10; $i++) {
                                for ($j = 1; $j <= 1; $j++) {

                                    $str1 = "{$i} x {$j} = " . ($i * $j);
                                    $str=(string)($str1);
                                    $font=str_replace('1', "<font color='red'>1</font>", $str);
                                    $font=str_replace('2', "<font color='green'>2</font>", $font);
                                    $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                    $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                    echo $font;
                                    echo "<br>";
                                }
                            }
                            ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 2; $j <= 2; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 3; $j <= 3; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 4; $j <= 4; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 5; $j <= 5; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 6; $j <= 6; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 7; $j <= 7; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 8; $j <= 8; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 9; $j <= 9; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 10; $j <= 10; $j++) {

                                $str1 = "{$i} x {$j} = " . ($i * $j);
                                $str=(string)($str1);
                                $font=str_replace('1', "<font color='red'>1</font>", $str);
                                $font=str_replace('2', "<font color='green'>2</font>", $font);
                                $font=str_replace('3', "<font color='yellow'>3</font>", $font);
                                $font=str_replace('4', "<font color='blue'>4</font>", $font);
                                echo $font;
                                echo "<br>";
                            }
                        }
                        ?></td>
                </tr>
            </table>
        </selection></main>
<?php
include "footer.php";
?>
</body>

</html>