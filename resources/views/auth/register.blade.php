<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('register')}}" method="POST">
        @csrf 
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <input type="submit" value="Submit">
    </form>
</body>
</html>