@extends('layouts/app')
@section('content')
<form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Tambah Data Surat Masuk dan Keluar </h6>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="Tujuan_Surat">Alamat Tujuan </label> 
            <input type="text" name="Tujuan_Surat" id="Tujuan_Surat" value="{{old('id')}}" required>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group  col-md-6">
            <label for="Asal_Surat">Asal Surat</label>
            <input type="text" name="Asal_Surat" id="Asal_Surat" required>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="Tanggal_Surat">Tanggal Surat</label>
            <input type="date" name="Tanggal_Surat" id="Tanggal_Surat" required>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="Nomor_Surat">Nomor Surat</label>
            <input type="text" name="Nomor_Surat" id="Nomor_Surat" required>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="Perihal">Perihal Surat</label>
            <input type="text" name="Perihal" id="Perihal" required>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="Jenis_Surat">Jenis Surat</label>
          <select name="Jenis_Surat" id="Jenis_Surat" required>
            <option value="Masuk">Masuk</option>
            <option value="Keluar">Keluar</option>
          </select>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
            <label for="foto">Foto Surat</label>
            <input type="file" class="form-control-file" accept="image/*" name="foto" id="foto" required>
            </div>
          </div>

          <div class="card-footer">
          <button class="btn btn-primary mb-3" type="submit" >Simpan</button>

          </div>
        </div>
      </div>
    </div>





</form>

@endsection