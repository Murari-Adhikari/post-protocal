<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post protocal</title>
    <style>

        body{
            justify-content:center;
            align-item:center;
           
        }
        .formContainer{
            width:40%;
            position: absolute;
            left: 35%;
            /* justify-content:center;
            align-item:center; */
            border:1px solid black;
        }
        h1{
            text-align:center;
        }
        .gender{
            text-align:center;
           
            display:flex;
             justify-content:center;
            
            
        }
        .genderman{
            border:1px solid black;
            margin-right:40px;
            padding:3px 40px;
        }
        .genderwomen{
            border:1px solid black;
            margin-left:40px;
            padding:3px 40px;
        }
        .formContainer {
        width: 40%;
        position: absolute;
        left: 35%;
        border: 1px solid black;
    }

    #man:checked ~ .formContainer,
        #Women:checked ~ .formContainer {
            background-color: blue;
        }
        .details{
            padding:25px;
           
        }
        .address{
            margin-top:30px;
            
        }
        .loginreset{
            display:block;
            margin-top:20px;
            text-align:center;
           
        }
        #signin{
            /* display:block; */
          
            width:100%;
            padding: 15px;
            background-color:#483D8B;
            color:#fff;
        }
        #reset{
            /* display:block; */
            margin-top:5px;
            width:100%;
            padding: 15px;
            background-color:#800000;
            color:#fff;
        }


    </style>

</head>
<body>
    
     <form action="<?php ($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">

    <div class="formContainer"> 
        <h1>Sign In</h1>
        <div class="gender">
        <div class="genderman">
            <label for="man">Man</label>
        <input type = "radio" id="man" name="gender" value="man"
        > </div>
<div class="genderwomen">
        <label for="Women">women</label>
        <input type = "radio" id="Women" name="gender" value="Women">
    </div>
        </div>

        <div class="details">
                    <form>
                <fieldset>
                <legend> Last Name</legend>
                <input type= "text" id="lastname" name="lastname" required>
            </fieldset>
                <fieldset>
                <legend>First Name</legend>
                <input type= "text" id="firstname" name="firstname" required>

                </fieldset>
                <fieldset>
                <legend>Age</legend>
                <input type= "number" id="age" name="age" required>
            </fieldset>
                <fieldset>
                <legend>Login</legend>
                <input type= "text" id="login" name="login" required>

                </fieldset>
                <fieldset>
                <legend>Password</legend>
                <input type= "Password" id="Password" name="Password" required>
            </fieldset>
                <fieldset>
                <legend>Confirm Password</legend>
                <input type="password" id="confirmPassword" name="confirmPassword" required>


                </fieldset>
     </form>
                <div class="address">
                <select name="address" value="select your residence country">
                    <option >Select your resedence country</option>
                    <option value="country">Australia</option>
                    <option value="country">USA</option>
                    <option value="country">Canada</option>
                    <option value="country">South korea</option>
                    <option value="country"> uk</option>

                </select>

          </div>
          <div class="loginreset">
         
         <div> <input type="submit" id="signin" value="Sign In"></div> </br>
          <div><input type="submit" id="reset" value="Reset"></div>
                
           



        </div>


    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = ($_POST["firstname"]);
        $lastname = ($_POST)["lastname"];
        $age = ($_POST)["age"];
        $login = ($_POST)["login"]; 
        $password = ($_POST)["password"];
        $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : '';

        $gender = isset($_POST["gender"]) ? ($_POST["gender"]) : '';
        $address = isset($_POST["address"]) ? ($_POST["address"]) : '';

        echo "<p>your gender is:" . $gender . "</p>";
        echo "<p>your Last Name is:" .$lastname. "</p>";
        echo "<p>your First Name is :" .$firstname. "</p>";
        echo "<p>your Age is :" .$age. "</p>";
        echo "<p>your login id is :" .$login. "</p>";
        echo "<p> your password is sesret </p>";
       


    }
    ?>

    <script>
        function validateForm() {
            
            return true; 
        }
    </script>
    
</body>
</html>