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
          <a href="#">Tambah Alternatif</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title d-flex justify-content-between">
            <div class="text-left">Tambah Alternatif</div>
            <div class="text-right"><a href="{{ route('alternatif.index') }}" class=" btn btn-danger text-light btn-sm"> <i class="fas fa-arrow-left me-2"></i> Kembali</a></div>
            </div>
          </div>
          <form action="{{ route('alternatif.store') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip">
            </div>
            <div class="mb-3">
                <label for="golongan" class="form-label">Golongan</label>
                <select name="golongan" id="golongan" class="form-control border" required>
                    <option value="">Pilih Golongan</option>
                    <option value="I/A">I/A</option>
                    <option value="I/B">I/B</option>
                    <option value="I/C">I/C</option>
                    <option value="I/D">I/D</option>
                    <option value="II/A">II/A</option>
                    <option value="II/B">II/B</option>
                    <option value="II/C">II/C</option>
                    <option value="II/D">II/D</option>
                    <option value="III/A">III/A</option>
                    <option value="III/B">III/B</option>
                    <option value="III/C">III/C</option>
                    <option value="III/D">III/D</option>
                    <option value="IV/A">IV/A</option>
                    <option value="IV/B">IV/B</option>
                    <option value="IV/C">IV/C</option>
                    <option value="IV/D">IV/D</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
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
