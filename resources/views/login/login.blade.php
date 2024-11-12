<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); width: 400px;">
        <h4 style="text-align: center; font-size: 24px;">Silahkan Login {{Session::get('username')}}</h4>              
        @if(session('message'))
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 5px;">
                <b>Maaf Anda Gagal Login!</b> {{session('message')}}
            </div>
        @endif              
        <form action="{{url('/login')}}" method="POST">
            @csrf
            <div style="margin-bottom: 25px;">
                <label for="username" style="display: block; margin-bottom: 10px; font-size: 18px;">Username:</label>
                <input type="text" id="username" name="username" required style="width: 100%; padding: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" placeholder="Masukkan Username">
            </div>
            <div style="margin-bottom: 25px;">
                <label for="password" style="display: block; margin-bottom: 10px; font-size: 18px;">Password:</label>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" placeholder="Masukkan Password">
            </div>
            <button type="submit" style="width: 100%; padding: 15px; background-color: #5cb85c; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 18px;">Login</button>
        </form>
    </div>
</body>
</html>