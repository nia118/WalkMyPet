<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('asset/images/bg_2.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #6c757d;
            box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.2);
        }

        .btn {
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background-color: #5a6268;
            color: #f8f9fa;
        }

        .text-primary {
            color: #6c757d !important;
        }

        a.text-primary:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="max-width: 400px; width: 100%;">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Register</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    </div>
                    @error('name')
                    <small class="text-danger mt-1 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="username">
                    </div>
                    @error('email')
                    <small class="text-danger mt-1 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="new-password">
                    </div>
                    @error('password')
                    <small class="text-danger mt-1 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-enter your password" required autocomplete="new-password">
                    </div>
                    @error('password_confirmation')
                    <small class="text-danger mt-1 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-lg">Register</button>
                </div>

                <div class="text-center">
                    <p>Already registered? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
