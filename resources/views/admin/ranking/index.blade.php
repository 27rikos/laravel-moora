@extends('Partials.admin')
@section('title','Ranking')
@section('main')
<div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Data Ranking</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="#">
            <i class="icon-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Ranking</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('export') }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf me-2"></i>PDF</a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Ranking</th>
                    <th>Nama Pegawai</th>
                    <th>Nilai</th>
                  </tr>`
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['rank'] }}</td>
                        <td>{{ $item['alternatif'] }}</td>
                        <td>{{ number_format($item['nilai_moora'], 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
