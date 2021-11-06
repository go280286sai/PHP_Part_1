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
    <main>
        <selection>

        </selection>
        <selection>
            <table border="2px">
                <tr>
                    <td> <?php
                            for ($i = 1; $i <= 10; $i++) {
                                for ($j = 1; $j <= 1; $j++) {

                                    echo "{$i} x {$j} = " . ($i * $j);
                                    echo "<br>";
                                }
                            }
                            ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 2; $j <= 2; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 3; $j <= 3; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 4; $j <= 4; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 5; $j <= 5; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                </tr>
                <tr>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 6; $j <= 6; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 7; $j <= 7; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 8; $j <= 8; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 9; $j <= 9; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                    <td><?php
                        for ($i = 1; $i <= 10; $i++) {
                            for ($j = 10; $j <= 10; $j++) {

                                echo "{$i} x {$j} = " . ($i * $j);
                                echo "<br>";
                            }
                        }
                        ?></td>
                </tr>
            </table>
        </selection>
    </main>
    <?php
    include "footer.php";
    ?>
</body>

</html>