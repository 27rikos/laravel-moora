<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Gaya kustom dapat ditambahkan di sini */
        body {
            background-color: #f8f9fa;
        }

        .thanks-section {
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="thanks-section">
                    <h1>Terima Kasih Telah Mengisi Kuisioner!</h1>
                    <p class="lead">Pendapat Anda sangat berharga bagi kami.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
