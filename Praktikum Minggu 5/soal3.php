<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function prime_check($number){
        for ($j=0; $j < 50; $j++){
            $num = $number[$j];
            $count=0;  
            for ( $i=1; $i <= $num; $i++)  {  
                
                if (($num % $i)==0)  {  
                    $count++;  
                }  
            }  
            if ($count < 3)  {  
                if ($num!=47){
                    echo "$num, "; 
                }
                else{
                    echo "$num"; 
                }
            }
            else{
            }
        }
    }
    $number = array();  
    for ($i=1;$i <=50; $i++){
        array_push($number,$i);
    }
    prime_check($number)
    
    
    ?>
</body>
</html>