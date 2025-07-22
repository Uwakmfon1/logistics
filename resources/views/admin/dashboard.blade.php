<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Welcome to the Admin Dashboard. This is a placeholder</h2>
   
    <form action="{{route('admin.logout')}}" method="POST">
        @csrf
        <input type="submit" value="logout" style="background: purple;color:white;font-size:30px;">
        {{-- <a type="submit" style="background: purple;color:white;font-size:30px;">Logout</a> --}}
    </form>

</body>
</html>