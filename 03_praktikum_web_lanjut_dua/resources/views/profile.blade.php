@extends('app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Profil</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="content">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 20px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ $profile -> nama }}</h4>
            <p class="text-muted mb-4">{{ $profile -> nim }} <span class="mx-2">|</span>{{ $profile -> no_telepon }}</a></p>
            <div class="mb-4 pb-2">
          
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">Jurusan</p>
                <p class="text-muted mb-0">{{ $profile -> jurusan }}</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">Prodi</p>
                <p class="text-muted mb-0">{{ $profile -> prodi }}</p>
              </div>
              <div>
                <p class="mb-2 h5">Kelas</p>
                <p class="text-muted mb-0">{{ $profile -> kelas }}</p>
              </div>
  </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection