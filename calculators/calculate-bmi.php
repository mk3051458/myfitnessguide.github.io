<?php 
    $weight = $_REQUEST['weight'];
    $weight_units = $_REQUEST['weight-units'];
    $height = $_REQUEST['height'];
    $height_units = $_REQUEST['height-units'];
    $bmi = 0;
    if($weight_units === "kg"){
        if($height_units === "inch"){
            $height = $height * 0.0254;
            $bmi = round( ( ($weight)/( $height * $height) ) , 1 );
            header("location:bmi-calculator.php?bmi=$bmi");
        }
        else{
            $bmi = round( ( ($weight)/( $height * $height) ) , 1 );
            header("location:bmi-calculator.php?bmi=$bmi");
        }
    }
    else{
       $weight = $weight * 0.453592;
       if($height_units === "inch"){
            $height = $height * 0.0254;
            $bmi = round( ( ($weight)/( $height * $height) ) , 1 );
            header("location:bmi-calculator.php?bmi=$bmi");
        }
        else{
            $bmi = round( ( ($weight)/( $height * $height) ) , 1 );
            header("location:bmi-calculator.php?bmi=$bmi");
        }
    }
   
?>