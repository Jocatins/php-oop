<?php 

// Static properties and methods can be accessed 
//via the class directly and not via the instance of the class
    class Weather {
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenheit($c){
            return $c * 9 / 5 + 32;

        }
        public static function determineTempCondition($f){
            if ($f < 40){
                return self::$tempConditions[0];
            }else if ($f < 70 ){
                return self::$tempConditions[1];
            }else{
                return self::$tempConditions[2];
            }
        }
    }

   // print_r(Weather::$tempConditions);
    //echo Weather::celsiusToFarenheit(10);
    echo Weather::determineTempCondition(78);


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>