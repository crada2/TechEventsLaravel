<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmacion</title>
    <style type="text/css">
        p {
            font-family: 'Google Sans', Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
            font-size: 1.2em;
            font-weight: 400;
            text-align: center;
        }

        img{
            display:block;
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            font-family: 'Google Sans', Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
            font-size: 1.4rem;
            font-variant-ligatures: no-contextual;
            color: #202124;
            font-weight: 400;
            text-align: center;
        }

        a{
        padding: 13px 27px 13px 27px;
        font-family: 'Google Sans', Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
        width: 20%;
        font-size: 1.1em;
        color: #ffffff;
        text-decoration: none;
        background-color: #481253;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        text-align: center;
        margin-left: 50%;
        transform: translateX(-50%);
        }
    </style>

</head>
<body>

    <img src="https://image.pngaaa.com/624/2171624-middle.png" width="80" height="80">
    <h1>Welcome to Crada courses!</h1>

    <p>Congratulations {{ $username }}, you have been subscribed to {{ $title }}!
    <p>This is gona be celebrated on the next {{ $date }} </p>
    <br>
    <a href="{{ route('home') }}">Start Course</a>

</body>
</html>
