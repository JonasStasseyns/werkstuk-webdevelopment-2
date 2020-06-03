<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{Route('donate.prepare')}}" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="first">
    <input type="text" name="last_name" placeholder="last">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="sum" placeholder="sum">
    <input type="submit" value="donate">
</form>
</body>
</html>
