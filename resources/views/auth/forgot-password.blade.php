<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }

        .card-title {
            margin-bottom: 1.5rem;
        }

        .form-label {
            margin-bottom: 0.3rem;
        }

        .form-control {
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #6c757d;
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.2);
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

        .text-muted {
            color: #6c757d !important;
        }

        a.text-primary {
            color: #6c757d;
        }

        a.text-primary:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="text-center">
            <h3 class="fw-bold card-title">Forgot Password</h3>
            <p class="text-muted">
                Forgot your password? No problem. Just let us know your email address, and we will email you a password reset link that will allow you to choose a new one.
            </p>
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group" style="margin-top: 0.3rem;">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                </div>
                @error('email')
                <small class="text-danger mt-1 d-block">{{ $message }}</small>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-lg">Send Password Reset Link</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
