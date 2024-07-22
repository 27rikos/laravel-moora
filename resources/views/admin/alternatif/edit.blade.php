@extends('Partials.admin')
@section('title','Alternatif')
@section('main')
<div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Forms</h3>
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
          <a href="#">Alternatif</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Edit Alternatif</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title d-flex justify-content-between">
            <div class="text-left">Edit Alternatif</div>
            <div class="text-right"><a href="{{ route('alternatif.index') }}" class=" btn btn-danger text-light btn-sm"> <i class="fas fa-arrow-left me-2"></i> Kembali</a></div>
            </div>
          </div>
          <form action="{{ route('alternatif.update',$find->id) }}" method="post">
            @method('put')
            @csrf
          <div class="card-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $find->nama }}">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" value="{{ $find->nip }}">
            </div>
            <div class="mb-3">
                <label for="golongan" class="form-label">Golongan</label>
                <select name="golongan" id="golongan" class="form-control border" value="{{ $find->golongan }}">
                    @foreach (['I/A', 'I/B', 'I/C', 'I/D', 'II/A', 'II/B', 'II/C', 'II/D', 'III/A', 'III/B', 'III/C', 'III/D', 'IV/A', 'IV/B', 'IV/C', 'IV/D'] as $option)
                    <option value="{{ $option }}"
                        {{ $find->golongan == $option ? 'selected' : '' }}>
                        {{ $option }}
                    </option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $find->jabatan }}">
            </div>
          </div>
          <div class="card-action">
            <button class="btn btn-success">Submit</button>
            <button class="btn btn-danger">Cancel</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
