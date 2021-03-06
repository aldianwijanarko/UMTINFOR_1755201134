@extends('layout.main')

<!-- Main Content -->
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah Data Mahasiswa</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/" class="text-decoration-none">Dashboard</a></div>
          <div class="breadcrumb-item">Tambah Data Mahasiswa</div>
        </div>
      </div>

      <div class="section-body">

        <div class="row">
          <div class="col-12 col-md-6 col-lg-8 mx-auto">

            <div class="card">
              <div class="card-header">
                <h4>Lengkapi semua data untuk inpu data mahasiswa baru!</h4>
              </div>
            <form action="{{url('/student')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group row">
                    <label for="nim" class="col-sm-3 col-form-label">Nim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" placeholder="Masukan Nim">
                      @error('nim')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama">
                      @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukan Email">
                      @error('email')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Masukan Jurusan">
                      @error('jurusan')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                </div>
              </div>
              <div class="card-footer row pt-0">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary px-4">Simpan</button>
                      <a href="/student" type="submit" class="btn btn-dark ml-3 px-4">Batal</a>
                  </div>
              </div>
             </form>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

      