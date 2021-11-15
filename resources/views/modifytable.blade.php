
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        

<h2><font color="yellow">Delete a Column</h2>
<form action="columndrop" method="get">
<font color="red">Table Name: <input type="text" name="table"><br>
Column Name: <input type="text" name="column"><br>
<input type="submit">
</form>


<h2><font color="yellow">Rename a Column</h2>
<form action="columnrename" method="get">
<font color="red">Table Name: <input type="text" name="table"><br>
Column Name: <input type="text" name="column"><br>
New Column Name: <input type="text" name="column2"><br>
New Column Type: <input type="text" name="type"><br>
<input type="submit">
</form>


<h2><font color="yellow">Modify a Column</h2>
<form action="columnmodify" method="get">
<font color="red">Table Name: <input type="text" name="table"><br>
Column Name: <input type="text" name="column"><br>
New Column Type: <input type="text" name="type"><br>
<input type="submit">
</form>


    </body>
</html>