<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .login-container {
            width: 350px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        } 
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838; 
        }

        .error-message {
            color: red; 
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Silakan Masuk</h2>
    <form action="{{ route('authenticate') }}" method="POST" id="login-form">
        @csrf
        <label for="username">Email:</label>
        <input type="text" name="email" id="email" required placeholder="Masukkan Email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required placeholder="Masukkan Password">

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ url('/login') }}">Daftar di sini</a></p>

    @if(session('error'))
        <div class="error-message">{{ session('error') }}</div>  
    @endif
</div>

</body>
</html>
