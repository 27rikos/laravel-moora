@extends('Partials.admin')
@section('title','Bobot')
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
          <a href="#">Bobot</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Edit Bobot</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title d-flex justify-content-between">
            <div class="text-left">Edit Bobot</div>
            <div class="text-right"><a href="{{ route('bobot.index') }}" class=" btn btn-danger text-light btn-sm"> <i class="fas fa-arrow-left me-2"></i> Kembali</a></div>
            </div>
          </div>
          <form action="{{ route('bobot.update',$find->id) }}" method="post">
            @method('put')
            @csrf
          <div class="card-body">
            <div class="mb-3">
                <label for="w1" class="form-label">Kemudahan Dalam Pelayanan</label>
                <input type="text" class="form-control" id="w1" name="w1" value="{{ $find->w1 }}">
            </div>
            <div class="mb-3">
                <label for="w2" class="form-label">Keterampilan Komunikasi</label>
                <input type="text" class="form-control" id="w2" name="w2" value="{{ $find->w2 }}">
            </div>
            <div class="mb-3">
                <label for="w3" class="form-label">Keterampilan Klinis</label>
                <input type="text" class="form-control" id="w3" name="w3" value="{{ $find->w3 }}">
            </div>
            <div class="mb-3">
                <label for="w4" class="form-label">Empati Atau Perhatian</label>
                <input type="text" class="form-control" id="w4" name="w4" value="{{ $find->w4 }}">
            </div>
            <div class="mb-3">
                <label for="w5" class="form-label">Ketersediaan Atau Responsif </label>
                <input type="text" class="form-control" id="w5" name="w5" value="{{ $find->w5 }}">
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
