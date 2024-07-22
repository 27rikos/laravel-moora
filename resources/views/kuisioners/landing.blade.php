<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuisioner Pelayanan</title>
    <!-- Bootstrap 4 CSS -->
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
       href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap"
       rel="stylesheet"
     />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: "Montserrat";
            background-color: #f8f9fa;
        }
        .hero {
            background: url('{{ asset('iconfoto.jpg') }}') no-repeat center center/cover;
            color: white;
            padding: 150px 0;
            text-align: center;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .about, .contact {
            padding: 60px 0;
        }
        .footer {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-light {
            border-radius: 20px;
        }
        .feature-box {
            transition: transform 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Kuisioner Pelayanan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <h1 class="display-4">Selamat Datang di Kuisioner Pelayanan</h1>
        <p class="lead">Bantu kami meningkatkan pelayanan dengan mengisi kuisioner ini.</p>
        <a href="#about" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Tentang Kuisioner</h2>
                <p>Kuisioner ini bertujuan untuk mengumpulkan umpan balik dari pelanggan mengenai kualitas pelayanan yang kami berikan. Pendapat Anda sangat berharga bagi kami dalam usaha untuk terus memperbaiki layanan.</p>
                <p>Kuisioner ini terdiri dari beberapa pertanyaan mengenai berbagai aspek pelayanan. Mohon luangkan waktu Anda untuk menjawab dengan jujur.</p>
                <a href="{{ route('kuisioner') }}" class="btn btn-primary my-3">Isi Kuisioner</a>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500" alt="Survey Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="about bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-box p-4 bg-white shadow rounded">
                    <i class="fas fa-clipboard-list fa-3x mb-3 text-primary"></i>
                    <h4>Respon Cepat</h4>
                    <p>Kami segera menanggapi masukan yang diberikan untuk perbaikan layanan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box p-4 bg-white shadow rounded">
                    <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                    <h4>Pelayanan Terbaik</h4>
                    <p>Kami berkomitmen memberikan pelayanan terbaik kepada setiap pelanggan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box p-4 bg-white shadow rounded">
                    <i class="fas fa-thumbs-up fa-3x mb-3 text-primary"></i>
                    <h4>Umpan Balik Positif</h4>
                    <p>Umpan balik Anda membantu kami untuk terus berkembang dan melayani lebih baik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Kuisioner Pelayanan. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap 4 JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
