<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    <body>
    <form action="/api/item" method = "POST">
        <input type="text" name= "text"> 
        <input type="text" name= "body">
        <button type="submit"> Submit</button> 
    </form>     
    </body>
 </html>      