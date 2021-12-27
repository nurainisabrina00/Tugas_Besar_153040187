@extends('backend/template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 
			    @if ($errors->any())
			        <div class="alert alert-danger">
			            <strong>Whoops!</strong> There were some problems with your input.<br><br>
			            <ul>
			                @foreach ($errors->all() as $error)
			                    <li>{{ $error }}</li>
			                @endforeach
			            </ul>
			        </div>
			    @endif

				<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
			    @csrf
                <div class="card-body">
                  <div class="form-group">
                      <label class="font-weight-bold">GAMBAR 1</label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar[]">
                  
                      <!-- error message untuk title -->
                      @error('gambar')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label class="font-weight-bold">GAMBAR 2</label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar[]">
                  
                      <!-- error message untuk title -->
                      @error('gambar')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
   
                  <div class="form-group">
                    <label>Judul</label>
                    <input name="judul" type="text" class="form-control" placeholder="judul">
                  </div>
                  <div class="form-group">
                    <label>Penulis</label>
                    <input name="penulis" type="text" class="form-control" placeholder="penulis">
                  </div>
                    <div class="form-group">
                    <label>Tahun Penerbit</label>
                    <input name="tahun_penerbit" type="text" class="form-control" placeholder="tahun_penerbit">
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <input name="isi" type="text" class="form-control" placeholder="isi">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop