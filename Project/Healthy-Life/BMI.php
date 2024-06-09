
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="Images/logo.png" rel="icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="BMIstyle.css">
    <title>BMI Calculator</title>
</head>


<body>
    
    <div class="container">
        <div class="box">
          <h1>BMI Calculator</h1>
          <div class="content">

            <div class="input">
                <label for="height">Age</label>
                <input type="text" class="text-input" id="age" autocomplete="off" required/>
            </div>

            <div class="gender">

                <label class="container">
                    <input type="radio" name="radio" id="m"><p class="text">Male</p>
                    <span class="checkmark"></span>
                  </label>

                <label class="container">
                    <input type="radio" name="radio" id="f" ><p class="text">Female</p>
                      <span class="checkmark"></span>
                    </label>

            </div>

            <div class="containerHW">
            <div class="inputH">
              <label for="height">Height(Cm)</label>
              <input type="number" id="height" required>
            </div>

            <div class="inputW">
              <label for="weight">Weight(Kg)</label>
              <input type="number" id="weight" required>
            </div>
            </div>

            <button class="calculate" id="submit" onclick="calculate();">Calculate BMI</button>
          </div>
          <div class="result">
            <p>Your BMI is</p>
            <div id="result">00.00</div>
            <p class="comment"></p>
          </div>
          <div class="footer"><a class="footer-text" target="_blank" href="https://healthylife.net/">Healthy Life</a></div>
        </div>
      </div>


      
    
    <div id="myModal" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modalText"></p>
    </div>
</div>

  
<script src="js/scriptBMI.js"></script>

</body>
</html>