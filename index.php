<!DOCTYPE html>
<html lang="en">
<?php
    include './includes/connection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="dayiewport" content="width=device-width, initial-scale=1.0">
    <title>Anand Fitness club</title>
    <link rel="stylesheet" href="./includes/style.css">
    <style>
        body {
            margin:0px;
            display: flex;
            align-items: center;
            flex-direction: column;
            font-family: sans-serif;
            background: linear-gradient(to bottom, #102130, #141A1F) no-repeat ;
            color:#fff;
            font-size: 1rem;
            height: 100vh;
        }
    </style>
</head>

<body>
<?php
                if(array_key_exists('1', $_POST)) {
                    echo "
                    <script>alert('hello');</script>
                    ";
                }


    ?>

    <img id="logo" src="./images/logo.svg" alt="logo">
    <form method='POST' id="form">
        <table >
            <tr>
                <td>Monday</td>
                <td><label for="Chest">Chest</label></td>
                <td class="checkboxContainer"><input type="checkbox" onclick="formSubmit()" id="1" name="Monday" class = "button" disabled ></td>
                
            </tr>
            <tr>
                <td>Tuesday</td>
                <td><label for="Back + shoulder">Back + shoulder</label></td>
                <td class="checkboxContainer"><input type="checkbox" onclick="formSubmit()" id="2" name="Tuesday" class = "button" disabled></td>
                
            </tr>
            <tr>
                <td>Wednesday</td>
                <td><label for="Abs">Abs</label></td>
                <td class="checkboxContainer"><input type="checkbox" onclick="formSubmit()" id="3" name="Wednesday" class = "button" disabled></td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td><label for="Biceps and Triceps">Biceps and Triceps</label></td>
                <td class="checkboxContainer"><input type="checkbox" onclick="formSubmit()" id="4" name="Thursday" class = "button" disabled></td>
            </tr>
            <tr>
                <td>Friday</td>
                <td><label for="Legs">Legs</label></td>
                <td class="checkboxContainer"><input type="checkbox" onclick="formSubmit()" id="5" name="Friday" class = "button" disabled></td>
            </tr>

        </table>
        
    </form>

    <script>

        let date = new Date();
        document.getElementById(date.getDay()).disabled=false;
         function formSubmit(){
            document.getElementById('form').submit();
         }
    </script>

    <script>
        let 
        if()

    </script>

         <?php
            if(isset($_POST['Monday']) || isset($_POST['Tuesday']) || isset($_POST['Wednesday']) || isset($_POST['Thursday']) || isset($_POST['Friday'])){
                // echo "
                // <script>alert('RUNNING');</script>
                // ";

                
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                {
                    //$query = "INSERT INTO `workout_data`(`id`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `streak`) VALUES ('','','','','','','')";
                }
                else
                {?>
                  <form id='login'>
                    <div id="cancelLogin">❌</div>
                    <img src="./images/lock.svg" alt="lock svg">
                    <div>
                    <input type="password" class='formInput' name="anandPass">
                    <input type="password" class='formInput' name="gopalPass">
                    </div>
                </form>
                <?php
                }
                

            }
            
         ?>
</body>

</html>