<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontPageHotel</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Background animasi */
        #animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            background-size: 300% 300%;
            animation: gradientAnimation 8s ease infinite;
            z-index: -1;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Container */
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }

        h1 {
            margin-bottom: 10px;
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 15px 0;
        }

        .icons i {
            font-size: 24px;
            color: #007BFF;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .icons i:hover {
            transform: scale(1.2);
        }

        /* Tombol */
        .button-container {
            margin-top: 20px;
        }

        .button-container button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px 30px;
            margin: 10px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button-container button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button-container button:active {
            background-color: #003f7f;
        }

        .button-container button.register {
            background-color: #28a745;
        }

        .button-container button.register:hover {
            background-color: #218838;
        }

        .button-container button.register:active {
            background-color: #1e7e34;
        }
    </style>



</head>
<body>
    <!-- Background animasi -->
    <div id="animated-background"></div>

    <!-- Kontainer utama -->
    <div class="container">
        <!-- Gambar Profil -->
        <img src="/UAS_IHWAN/logo/hotel.png" alt="default">
        
        <h1>SELAMAT DATANG</h1>
        <p>Di hotel renggali gayo highlind takengon.</p>
        
  
        <!-- Tombol Login dan Register -->
        <div class="button-container">
            <form action="login.php" method="post" style="display: inline;">
                <button type="submit">Login</button>
            </form>
            <form action="akun/formakun.php" method="get" style="display: inline;">
                <button type="submit" class="register">Register</button>
            </form>
        </div>
    </div>

    <!-- Tambahkan Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
