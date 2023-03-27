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

    function numberTowords(float $number)
    {
       $number_after_decimal = round($number - ($i = floor($number)), 2) * 100;
       $amt_hundred = null;
       $count_length = strlen($i);
       $x = 0;
       $string = array();
       $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
         3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
         7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
         10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
         13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
         16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
         19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
         40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
         70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');

        while($x < $count_length ) {
            $get_divider = ($x == 2) ? 10 : 100;
            $number = floor($i % $get_divider);
            $num = floor($i / $get_divider);
            $x += $get_divider == 10 ? 1 : 2;
          
            if ($number) {
                $add_plural = (($counter = count($string)) && $number > 9) ? 's' : null;
                $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
                $string [] = ($number < 21) ? $change_words[$number].' '. $add_plural.' 
                '.$amt_hundred:$change_words[floor($number / 10) * 10].' '.$change_words[$number % 10]. ' 
                '.$add_plural.' '.$amt_hundred;
            }else $string[] = null;
       }
       
       $implode_to_Rupees = implode('', array_reverse($string));
       return ($implode_to_Rupees ? $implode_to_Rupees . '' : '');
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
            background-color:".generate_color()."'><p style='font-size:1.25em; background-color:#FFFFFF; color:#000000;'>".numberTowords($i)."</p>";
           
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


