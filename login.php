<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            /*box-sizing: border-box;*/
        }

        body {
            background-color: rgb(0, 133, 102, 0.27);
            overflow-y: hidden;
            height: 100vh;
        }

        .form,
        form,
        form div,
        .flex {
            display: flex;
            flex-direction: column;
        }

        .form {
            width: max-content;
            padding: 3% 5%;
            border-radius: 5px;
            /* border: 2px solid #008565;*/
            background-color: rgba(248, 248, 248, 0.995);
        }

        img {
            height: 43vh;
        }

        #main {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            align-content: flex-start;

        }

        .inline {
            display: inline;
        }


        #info div input {
            border: none;
            /*border-bottom: 2px solid black !important;*/
            padding-bottom: 5px;
            margin-bottom: 5px;

        }

        input {
            font-size: large;
            padding: 5px 0px 5px 5px;
        }

        input:enabled {
            border: none;
        }

        .btn {
            width: 50%;
            margin: 3% auto;
            padding: 4%;
            border-radius: 35px;
            background-color: #008565;
            color: white;
            font-size: medium;
        }

        h1 {
            font-size: 32.36px;
            text-align: center;
            color: #008565;

        }

        div label,
        p {
            font-size: 20px;
        }

        #info div {
            margin-top: 2%;
            width: inherit;
        }

        .toast {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["error"])) { // to get the responce and store it to a variable 
        $error = $_GET["error"];
    }
    ?>
    <div id="main">
        <img src="logo.png">

        <div class="form">
            <h1>Sign in </h1>
            <form action="function/auth.php" method="POST" name="login">

                <div id="info">

                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="" tabindex="4" required />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" tabindex="5" required />
                    </div>
                    <input class="btn" type="submit" tabindex="7"/>

                    <div class="inline">
                        <p class="inline">Don't have Account </p>
                        <a href="index.php">Sign up</a>
                    </div>

                </div>
            </form>
            <div class="toast" id="toast">
                Email or Password is Incorrect
            </div>
            <?php
            if (isset($error) == 1) { //this php script is to show a toste when server return an incorrect password error 
                echo "<script> 
                const showToastButton = document.getElementById('show-toast');
                const toast = document.getElementById('toast');
                
                    toast.style.display = 'block';
                    setTimeout(() => {
                        toast.style.display = 'none';
                    }, 3000); // Hide the toast after 3 seconds
                
                </script>";
            }
            ?>

        </div>
    </div>
    <script src="index.js"></script>


</body>

</html>