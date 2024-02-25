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
            margin: auto;
            width: max-content;
            padding: 3% 5%;
            border-radius: 5px;
            /* border: 2px solid #008565;*/
            background-color: rgba(248, 248, 248, 0.995);
            margin-top: 5vh;
            margin-bottom: 2vh;
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
    </style>
</head>

<body>
    <div class="form">
        <img src="images/lo.svg" height=60px>
        <h1>Sign up </h1>
        <form action="home.php" method="POST" onsubmit="return check()">

            <div id="info">
                <div class="flex">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="" tabindex="1" required />
                </div>

                <div class="flex">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="" tabindex="2" required />
                </div>
                <div>
                    <label for="number">Phone Number</label>
                    <input type="text" id="number" minlength=10 name="number" tabindex="3" required />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="" tabindex="4" required />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="" tabindex="5" required />
                </div>

                <div class="inline">
                    <input type="checkbox" id="check" name="check" required tabindex="6" />
                    <label for="check">I Agree to the companys term and conditions </label>
                </div>

                <input class="btn" type="submit" tabindex="7"/>

                <div class="inline">
                    <p class="inline">Already have an account ?</p>
                    <a href="login.php">Sign in</a>
                </div>

            </div>
        </form>
    </div>
    <script>

const pass = document.getElementById("password");
const num = document.getElementById("number");

function check() {
    alert("function");
    if (num.value == 1) {
        alert("Enter a valid phone number ");
        num.style.borderblockColor = "red";
        return false;
    }
    return true;
}

pass.addEventListener("focusin", () => {
    pass.type = "text";
})

pass.addEventListener("focusout", () => {
    pass.type = "password";
})
const echeck = () => {
    var email = document.getElementById('email').value;
    let val = document.forms["login"]["email"].value;

}
    </script>
</body>

</html>