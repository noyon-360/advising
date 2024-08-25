<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('colors.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, var(--light-blue), var(--primary-blue));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: var(--primary-white);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .login-card .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid var(--primary-blue);
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            overflow: hidden;
            background-color: transparent;
        }

        .avatar img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .login-card h2 {
            color: var(--primary-blue);
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid var(--primary-blue);
            border-radius: 50px;
            padding: 10px 15px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--dark-red);
            box-shadow: none;
        }

        .form-check-label {
            color: var(--primary-blue);
            font-size: 14px;
        }

        .login-card a {
            color: var(--primary-blue);
            font-weight: bold;
            font-size: 14px;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--dark-red);
            border-color: var(--dark-red);
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="login-card text-center">
        <div class="avatar">
            <img src="{{ asset('Assets/pau_logo_png.png') }}" alt="Logo" class="img-fluid">
        </div>
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="ID" name="username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password", name="password" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('register-page') }}" class="text-decoration-none">Create Account</a>

                <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>