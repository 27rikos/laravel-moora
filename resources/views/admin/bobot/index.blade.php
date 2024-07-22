@extends('Partials.admin')
@section('title','Bobot')
@section('main')
<div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Data Bobot</h3>
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
          <a href="#">bobot</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('bobot.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle me-2"></i>Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Kemudahan Dalam Pelayanan</th>
                    <th>Keterampilan Komunikasi</th>
                    <th>Keterampilan Klinis</th>
                    <th>Empati Atau Perhatian</th>
                    <th>Ketersediaan Atau Responsif</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->w1 }}</td>
                    <td>{{ $item->w2 }}</td>
                    <td>{{ $item->w3 }}</td>
                    <td>{{ $item->w4 }}</td>
                    <td>{{ $item->w5 }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('bobot.edit', $item->id) }}" class="btn btn-primary btn-sm"
                            title="Edit"><i class="far fa-edit"></i></a>
                    </td>
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
