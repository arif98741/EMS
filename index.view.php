<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        form {
            border: 2px solid red;
            border-radius: 5px;
        }

        input[type=text],
        input[type=pass] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid green;
            border-radius: 5px;
            box-sizing: border-box;

        }

        button {
            background-color: rgb(230, 198, 20);
            color: rgb(76, 0, 255);
            margin: 10px 0;
            border: 2px solid green;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;




        }
    </style>

</head>

<body>
    
    <h2>Click the Button for login</h2>
    <button>Login</button>
    <div class="container">
        <form>
            <label for="uname">
                <b>UserName</b>
            </label>
            <input type="text" placeholder="Enter UserName" required>
            <label for="pass">
                <b>PassWord</b>
            </label>
            <input type="pass" placeholder="Enter PassWord" required>
            <label>
                <input type="radio" name="level" value="Admin">Admin</label>
            <label>
                <input type="radio" name="level" value="Employee">Employee</label>

            <button type="submit">LOGIN</button>
            <label>
                <input type="checkbox" name="remember"> Remeber Me
            </label>
    </div>
    <div>
        <button type="button">CANCEL</button>
        <span>Forgot
            <a href="#">password</a>
        </span>
    </div>



    </form>
</body>

</html>