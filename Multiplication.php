<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="styles.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1 class="custom"><strong>Multiplication Chart</strong></h1>
    <form method="post">
        <label><strong>Start Number:</strong></label> 
        <input type="text" name="number">
        <label><strong>End Number:</strong></label> 
        <input type="text" name="endnumber">
        <input type="submit" value="Multiply"><br><br>
    </form>
    
    <?php
    
    function random_color_part()
    {
        return str_pad(dechex(mt_rand(0,255)),2,'0',STR_PAD_LEFT);
    }

    function generate_color(){
        return "#".random_color_part().random_color_part().random_color_part();
    }
   
    if($_POST)
    {
        $num=$_POST["number"];
        $endnumber=$_POST["endnumber"];

        echo "<div class ='container'>";
        echo "<div class = 'row'>";
        for($i=$num; $i<=$endnumber; $i++)
        {
            echo "<div class='col-1' style= 'padding:10px; margin:10px; width:150px;
            color:#FFFFFF; font-weight: bold; font-size: 0.975em; font-family: Times New Roman; text-align: center;
            background-color:".generate_color()."'>";
            for($num=1; $num<=12; $num++)
            {   
                echo "$i". " * "."$num"." = ".$num*$i." ";
                echo "<br>";
            }
            echo "</div>";
        } 
        echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>


