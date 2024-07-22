@extends('Partials.admin')
@section('title','Kuisioner')
@push('trix')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>
@endpush
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
          <a href="#">Kuisioner</a>
        </li>
        <li class="separator">
          <i class="icon-arrow-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Edit Kuisioner</a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title d-flex justify-content-between">
            <div class="text-left">Edit Kuisioner</div>
            <div class="text-right"><a href="{{ route('kuisioner.index') }}" class=" btn btn-danger text-light btn-sm"> <i class="fas fa-arrow-left me-2"></i> Kembali</a></div>
            </div>
          </div>
          <form action="{{ route('kuisioner.update',$find->id) }}" method="post">
            @method('put')
            @csrf
          <div class="card-body">
            <div class="mb-3">
                <input id="x" type="hidden" name="pertanyaan" value="{!! $find->pertanyaan !!}">
                <trix-editor input="x"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach(['Kemudahan Dalam Pelayanan', 'Keterampilan Komunikasi', 'Keterampilan Klinis', 'Empati Atau Perhatian', 'Ketersediaan Atau Responsif'] as $option)
                    <option value="{{ $option }}"
                    {{ $find->kategori == $option ? 'selected' : '' }}>
                    {{ $option }}
                </option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="opsi1" class="form-label">Opsi 1</label>
                <input type="text" class="form-control" id="opsi1" name="opsi1" value="{{ $find->opsi1 }}">
            </div>
            <div class="mb-3">
                <label for="opsi2" class="form-label">Opsi 2</label>
                <input type="text" class="form-control" id="opsi2" name="opsi2" value="{{ $find->opsi2 }}">
            </div>
            <div class="mb-3">
                <label for="opsi3" class="form-label">Opsi 3</label>
                <input type="text" class="form-control" id="opsi3" name="opsi3" value="{{ $find->opsi3 }}">
            </div>
            <div class="mb-3">
                <label for="opsi4" class="form-label">Opsi 4</label>
                <input type="text" class="form-control" id="opsi4" name="opsi4" value="{{ $find->opsi4 }}">
            </div>
            <div class="mb-3">
                <label for="opsi5" class="form-label">Opsi 5</label>
                <input type="text" class="form-control" id="opsi5" name="opsi5" value="{{ $find->opsi5 }}">
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
