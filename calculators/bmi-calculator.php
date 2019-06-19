<?php
    include "header.php";
?>
<div class="container ">
    <div class="row">
        <div class="col-md-6 ">
            <div class="jumbotron bmi-calculator text-light">
                <h3 class="text-center">BMI calculator</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="height">Height :</label>
                        <input type="number" name="" id="height" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight :</label>
                        <input type="number" name="" id="weight" class="form-control">
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
            <br>
                <p>
                    <strong>BMI :</strong> 
                    BMI stands for Body Mass Index. It is the measurement of individual's
                    corpulence and leanness based on their weight and height. It is used to categorize whether 
                    an individual is obese ,normalweight, underweight or overweight.
                </p>  
                  
                <p>
                    <strong> BMI calculator : </strong>
                    This calculator can be used to calculate Body Mass index(BMI) status based on inputs as Age , 
                    Gender ,Height and weight. Its units of measurements are kg/m<sup>2</sup>.
                </p>   
                 
            </div>
        </div>
    </div>
</div>
<?php 
    include "footer.php";
?>