<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h1 class="custom">Multiplication Chart</h1>
        <div class="container">
            <div class="item-one">
            <span class="text-one"><strong>One</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("1 * " . $count . " = " . $count * 1);
                        echo("<br>");
                    }
                ?>
            </div> 
            <div class="item-two">
            <span class="text-two"><strong>Two</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("2 * " . $count . " = " . $count * 2);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-three">
            <span class="text-three"><strong>Three</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("3 * " . $count . " = " . $count * 3);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-four">
            <span class="text-four"><strong>Four</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("4 * " . $count . " = " . $count * 4);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-five">
            <span class="text-five"><strong>Five</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("5 * " . $count . " = " . $count * 5);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-six">
            <span class="text-six"><strong>Six</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("6 * " . $count . " = " . $count * 6);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-seven">
            <span class="text-seven"><strong>Seven</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("7 * " . $count . " = " . $count * 7);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-eight">
            <span class="text-eight"><strong>Eight</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("8 * " . $count . " = " . $count * 8);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-nine">
            <span class="text-nine"><strong>Nine</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("9 * " . $count . " = " . $count * 9);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-ten">
            <span class="text-ten"><strong>Ten</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("10 * " . $count . " = " . $count * 10);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-eleven">
            <span class="text-eleven"><strong>Eleven</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("11 * " . $count . " = " . $count * 11);
                        echo("<br>");
                    }
                ?>
            </div>
            <div class="item-tweleve">
            <span class="text-tweleve"><strong>Tweleve</strong></span><br>
                <?php
                    for($count=1;$count<=12;$count++)
                    {
                        echo ("12 * " . $count . " = " . $count * 12);
                        echo("<br>");
                    }
                ?>
            </div>
        </div>
</body>
</html>