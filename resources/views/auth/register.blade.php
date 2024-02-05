<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <title>Pendaftaran</title>
    <style>
        body {
            background: linear-gradient(45deg, #f3f3f3, #e0e0e0);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes gradient {
            0%, 100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        section {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: auto;
            background-color: #fff;
        }

        h2 {
            color: #333;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        form {
            padding: 20px;
        }

        .form-outline {
            margin-bottom: 1.5rem;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
            margin-top: 1rem;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: #fff;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <section>
        <h2 class="fw-bold text-uppercase">Form Pendaftaran</h2>

        <form method="post">
            @csrf

            <div class="form-outline">
                <label class="form-label" for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>

            <div class="form-outline">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <button class="btn btn-primary btn-lg" type="submit">Daftar</button>
            <a href="/" class="btn btn-secondary btn-lg">Kembali</a>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>