<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>FFF.COM</title>
</head>

<body>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 500;
            color: #fff;
            max-width: 100%;
            background-image: url("images/backgrouns.jpeg");
            background-color: #cccccc;
        }
        
        .imag {
            height: 1500px;
        }
        
        h2 {
            font-size: 20px;
            font-weight: 600;
        }
        
        h3 {
            font-size: 17px;
            font-weight: 600;
        }
        
        .content {
            z-index: -1;
        }
        
        * {
            box-sizing: border-box
        }
        /* style the container */
        
        .container {
            display: block;
            position: relative;
            width: 530px;
            height: 679px;
            margin: auto;
            margin-top: 180px;
            box-shadow: 1px 5px 10px 1px #333;
            overflow: hidden;
            background-color: rgba(2, 2, 2, 0.644);
        }
        /* style inputs and link buttons */
        
        input,
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }
        
        input:hover,
        .btn:hover {
            opacity: 1;
        }
        /* add appropriate colors to fb, twitter and google buttons */
        /* style the submit button */
        
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Two-column layout */
        
        .col {
            width: 85%;
            margin: auto;
            padding: 0 50px;
            margin-top: 6px;
        }
        
        .row {
            margin-top: 25%;
        }
        
        .row1 {
            text-align: center;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: inline-block;
        }
        /* text inside the vertical line */
        /* hide some text on medium and large screens */
        
        .hide-md-lg {
            display: none;
        }
        /* bottom container */
        
        .bottom-container {
            text-align: center;
            background-color: #666;
            border-radius: 0px 0px 4px 4px;
        }
        /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
        
        @media only screen and (max-width: 450px) {
            .container {
                max-width: 90%;
                margin-top: 90px;
                height: 90%;
            }
            .col {
                width: 100%;
                margin: auto;
                padding: 0 20px;
                margin-top: 6px;
            }
            .row {
                margin-top: 10%;
            }
            h2 {
                font-size: 16px;
            }
        }
    </style>

    <div class="content">
        <div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <br> <br>
                    <h2 style="text-align:center; color:rgb(255, 255, 255)">This will only take a second</h2>
                    <div class="col">
                        <input type="text" name="Email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Sign up">
                    </div>

                    <div class="row1">
                        <div class="col">
                            <a href="register.html" style="color:white" class="btn">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


</body>

</html>