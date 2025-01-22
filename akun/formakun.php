<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        body {
            background-color: #f0f8ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .register-container {
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            width: 80%;
            max-width: 900px;
        }

        .register-left {
            background: linear-gradient(to bottom right, #007bff, #0056b3);
            color: #fff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .register-left h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .register-left p {
            font-size: 1rem;
            text-align: center;
            margin-top: 10px;
        }

        .register-right {
            padding: 40px;
            flex: 1;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            border-radius: 5px;
        }

        .back-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="register-container">
    <div class="register-left">
    <h1>SELAMAT DATANG</h1>
    <p>Di hotel renggali gayo highlind takengon.</p>
    </div>
    <div class="register-right">
        <a href="javascript:history.back()" class="btn btn-secondary btn-sm back-btn">Kembali</a>
        <h3 class="text-center mb-4">Buat Akun</h3>
        <form action="proses.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Akun</button>
        </form>
    </div>
</div>
<script src="../js/bootstrap.js"></script>
</body>
</html>
