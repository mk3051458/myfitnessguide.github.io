<?php
    include "header.php";
   
?>
<div class="container " style="margin-top : 110px;">
    
    <?php 
        if(isset($_REQUEST['bmi'])){
            $bmi = $_REQUEST['bmi'];
            $category = "";
            if($bmi < 18.5){
                $category = "Underweight";
            }
            elseif( ($bmi >=18.5) && ($bmi < 24.9)){
                $category = "Normal Weight";
            }
            elseif( ($bmi >=25) && ($bmi < 29.9) ){
                $category = "Overweight";
            }
            elseif( ($bmi >30) ){
                $category = "Obesity";
            }
    ?>
            <div class="row " style="margin-top : 90px">
                <div class="col-md-12">
                    <div class="bmi text-light text-center">
                        <h5> Your BMI is <?php echo $bmi;?> ( <?php echo $category;?> ) </h5>
                    </div>
                </div>
               
            </div>
            
        <?php    
        }
        ?>
    <div class="row">
        <div class="col-md-6 ">
            <div class="jumbotron bmi-calculator text-light">
                <h3 class="text-center">BMI calculator</h3>
                <form action="calculate-bmi.php" method="POST">
                    <div class="form-group">
                        <label for="height">Height :</label>
                        <div class="row flex-nowrap">
                            <input type="text" name="height" id="height" min="1"  class="form-control col-md-9">
                            <select name="height-units" id="height-units" class="custom-select col-md-3">
                                <option value="inch">inch</option>
                                <option value="m">metres</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight :</label>
                        <div class="row flex-nowrap">
                            <input type="text" name="weight" id="weight" class="form-control col-md-9">
                            <select name="weight-units" id="eight-units" class="custom-select col-md-3">
                                <option value="kg">kg</option>
                                <option value="pound">pound</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Age">Age : </label>
                        <input type="number" name="" id="" class="form-control col-md-12">
                    </div>
                    <div class="form-group">
                    <label for="">Gender : </label><br>
                    
                    
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="male">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <!-- <input type="submit" name="submit" value="Get BMI" class="btn btn-primary"> -->
                        <input type="submit" name="submit" value="Get BMI" class="btn btn-info">
                        <!-- <input type="submit" name="submit" value="Get BMI" class="btn btn-success">
                        <input type="submit" name="submit" value="Get BMI" class="btn btn-warning">
                        <input type="submit" name="submit" value="Get BMI" class="btn btn-dark">
                        <input type="submit" name="submit" value="Get BMI" class="btn btn-light"> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 text-light">
            <div class="jumbotron bmi-description">
            <h3 class="text-center">BMI calculator</h3>
            
                <p>
                    <strong>BMI :</strong> <br>
                    BMI stands for Body Mass Index. It is the measurement of individual's
                    corpulence and leanness based on their weight and height. It is used to categorize whether 
                    an individual is obese ,normalweight, underweight or overweight.
                </p>  
                  
                <p>
                    <strong> BMI calculator : </strong><br>
                    This calculator can be used to calculate Body Mass index(BMI) status based on inputs as Age , 
                    Gender ,Height and weight. Its units of measurements are kg/m<sup>2</sup>.
                </p>   
                 <p>
                     <strong>BMI categories :</strong><br>
                     Underweight = (< 18.5)<br>
                     Normal weight = (18.5 - 24.9) <br>
                     Overweight = ( 25 - 29.9 ) <br>
                     Obesity = ( 30 or greater)
                 </p>
            </div>
        </div>
    </div>
</div>
<?php 
    include "footer.php";
?>