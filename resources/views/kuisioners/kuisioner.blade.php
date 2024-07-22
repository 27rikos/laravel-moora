<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kuisioner</title>
    <!-- Bootstrap CSS -->
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Montserrat";
        }
        .container {
            max-width: 800px;
        }
        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }
        .form-check-label {
            cursor: pointer;
        }
        h4 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .question-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h4 class="section-title">Kuisioner Kenyamanan Dalam Pelayanan</h4>
    <form action="{{ route('save-quiz') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama">Nama Lengkap Anda</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap Anda">
            </div>
            <div class="col-md-6">
                <label for="umur">Umur Anda</label>
                <input type="number" class="form-control" name="umur" placeholder="Masukkan umur Anda">
            </div>
        </div>
        <div class="mb-3">
            <label for="alternatif">Pilih Pegawai</label>
            <select name="alternatif" class="form-control" id="alternatif">
                <option value="">Pilih Pegawai</option>
                @foreach ($alternatif as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="question-group">
            <h4>Kemudahan dalam Pelayanan</h4>
            @foreach($data1 as $kuisioner)
            <div class="mb-3">
                <label class="form-label">{!! $kuisioner->pertanyaan !!}</label>
                @for ($i = 1; $i <= 5; $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jawaban[{{ $kuisioner->id }}]" id="jawaban{{ $kuisioner->id }}{{ chr(96 + $i) }}" value="{{ $i }}">
                    <label class="form-check-label" for="jawaban{{ $kuisioner->id }}{{ chr(96 + $i) }}">{{ $kuisioner['opsi' . $i] }}</label>
                </div>
                @endfor
            </div>
            @endforeach
        </div>
        <div class="question-group">
            <h4>Keterampilan Komunikasi</h4>
            @foreach($data2 as $kuisioner1)
            <div class="mb-3">
                <label class="form-label">{!! $kuisioner1->pertanyaan !!}</label>
                @for ($i = 1; $i <= 5; $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jawaban1[{{ $kuisioner1->id }}]" id="jawaban1{{ $kuisioner1->id }}{{ chr(96 + $i) }}" value="{{ $i }}">
                    <label class="form-check-label" for="jawaban1{{ $kuisioner1->id }}{{ chr(96 + $i) }}">{{ $kuisioner1['opsi' . $i] }}</label>
                </div>
                @endfor
            </div>
            @endforeach
        </div>
        <div class="question-group">
            <h4>Keterampilan Klinis</h4>
            @foreach($data3 as $kuisioner2)
            <div class="mb-3">
                <label class="form-label">{!! $kuisioner2->pertanyaan !!}</label>
                @for ($i = 1; $i <= 5; $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jawaban2[{{ $kuisioner2->id }}]" id="jawaban2{{ $kuisioner2->id }}{{ chr(96 + $i) }}" value="{{ $i }}">
                    <label class="form-check-label" for="jawaban2{{ $kuisioner2->id }}{{ chr(96 + $i) }}">{{ $kuisioner2['opsi' . $i] }}</label>
                </div>
                @endfor
            </div>
            @endforeach
        </div>
        <div class="question-group">
            <h4>Empati atau Perhatian</h4>
            @foreach($data4 as $kuisioner3)
            <div class="mb-3">
                <label class="form-label">{!! $kuisioner3->pertanyaan !!}</label>
                @for ($i = 1; $i <= 5; $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jawaban3[{{ $kuisioner3->id }}]" id="jawaban3{{ $kuisioner3->id }}{{ chr(96 + $i) }}" value="{{ $i }}">
                    <label class="form-check-label" for="jawaban3{{ $kuisioner3->id }}{{ chr(96 + $i) }}">{{ $kuisioner3['opsi' . $i] }}</label>
                </div>
                @endfor
            </div>
            @endforeach
        </div>
        <div class="question-group">
            <h4>Ketersediaan atau Responsif</h4>
            @foreach($data5 as $kuisioner4)
            <div class="mb-3">
                <label class="form-label">{!! $kuisioner4->pertanyaan !!}</label>
                @for ($i = 1; $i <= 5; $i++)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jawaban4[{{ $kuisioner4->id }}]" id="jawaban4{{ $kuisioner4->id }}{{ chr(96 + $i) }}" value="{{ $i }}">
                    <label class="form-check-label" for="jawaban4{{ $kuisioner4->id }}{{ chr(96 + $i) }}">{{ $kuisioner4['opsi' . $i] }}</label>
                </div>
                @endfor
            </div>
            @endforeach
        </div>
        <div class="text-left mb-4">
            <button type="submit" class="btn btn-primary rounded-pill w-25">Submit</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
