<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .register-card {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: var(--primary-white);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .register-card h2 {
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

        .register-card a {
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
    <div class="register-card text-center">
        <h2>Register Admin</h2>
        <!-- Display validation errors if any -->
        

        <form method="POST" action="{{ route('register-controller') }}">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username"
                    value="{{ old('username') }}" required>
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"
                    required>
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
            <div class="mt-3">
                <a href="{{ route('login-page') }}" class="btn btn-outline-primary w-100">Back to Login</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>


</html>