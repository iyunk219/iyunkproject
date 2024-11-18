<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
        
        .register-container {
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
            color: #555; /* Warna label */
        } 
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box; /* Menjaga ukuran input */
        }

        button {
            width: 100%;
            background-color: #007bff; /* Warna tombol */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Ukuran font tombol */
        }

        button:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
        }

        .message {
            color: green; /* Warna pesan sukses */
            text-align: center;
            margin-top: 15px; /* Jarak atas untuk pesan */
        }

        .error {
            color: red; /* Warna pesan kesalahan */
            text-align: center;
            margin-top: 5px; /* Jarak atas untuk pesan kesalahan */
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>Daftar Akun</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required placeholder="Masukkan Email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required placeholder="Masukkan Password">

        <!-- Role diatur secara otomatis sebagai 'user' -->
        <input type="hidden" name="role" id="role" value="user">

        <button type="submit">Daftar</button>
    </form>

    @if(session('message'))
        <div class="message">{{ session('message') }}</div>
    @endif

    <!-- Tempat untuk menampilkan pesan kesalahan -->
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
    @endif
</div>

<script src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('form').submit(function(event){
            "use strict";
            var valid = true,
                message = '';

            $('.error').remove(); // Menghapus pesan kesalahan sebelumnya
            $('form input').each(function() {
                var $this = $(this);
                if(!$this.val()) {
                    var inputName = $this.attr('name');
                    valid = false;
                    message += 'Please enter your ' + inputName + '\n';
                    $(this).after('<div class="error">'+message+'</div>'); // Menampilkan pesan kesalahan di bawah input
                }
            });

            if(!valid) {
                event.preventDefault(); // Mencegah pengiriman form jika tidak valid
            }
        });
    });
</script>
</body>
</html>