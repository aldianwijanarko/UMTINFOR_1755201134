@extends('layout.main')

<!-- Main Content -->
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data User</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Data User</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          No
                        </th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $usr)
                          <tr>
                            <td class="pl-4">
                              {{$loop->iteration}}
                            </td>
                            <td>{{$usr->name}}</td>
                            <td>{{$usr->email}}</td>
                            <td>{{$usr->roles}}</td>
                            <td class="text-center">
                                <a href="/student/{/edit" class="btn btn-success"><i class="far fa-fw fa-edit"></i></a>
                                <form action="/student/" method="POST" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" onclick="return confirm('Tetap menghapus data ini?')" class="btn btn-danger"><i class="far fa-fw fa-trash-alt"></i></button>
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
    </section>
  </div>
@endsection

      