@extends('Partials.admin')
@section('title','Kuisioner')
@section('main')
<div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Data Kuisioner</h3>
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
          <a href="#">Kuisioner</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('kuisioner.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle me-2"></i>Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-bordered table-hover"
              >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kuisioner</th>
                    <th>Kategori</th>
                    <th>Opsi 1</th>
                    <th>Opsi 2</th>
                    <th>Opsi 3</th>
                    <th>Opsi 4</th>
                    <th>Opsi 5</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{!! $item->pertanyaan !!}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->opsi1 }}</td>
                    <td>{{ $item->opsi2 }}</td>
                    <td>{{ $item->opsi3 }}</td>
                    <td>{{ $item->opsi4 }}</td>
                    <td>{{ $item->opsi5 }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('kuisioner.edit', $item->id) }}" class="btn btn-primary btn-sm"
                            title="Edit"><i class="far fa-edit"></i></a>
                        <form action="{{ route('kuisioner.destroy', $item->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit"><i
                                    class="far fa-trash-alt "></i></button>
                        </form>
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
