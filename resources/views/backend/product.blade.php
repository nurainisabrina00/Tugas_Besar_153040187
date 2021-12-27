@extends('backend/template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                <div class="col-md-10">
                <h3 class="card-title">Product</h3>
              </div>
                <div class="col-md-2">
                  <a class="btn btn-default" href="{{route('product.create')}}"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center" >Gambar</th>
                      <th class="text-center" >Nama</th>
                      <th class="text-center" >Deskripsi</th>
                      <th class="text-center" >Kategori</th>
                      <th class="text-center" style="width: 140px">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @php
                    $no=1;
                    foreach($product as $row):
                    @endphp
                      <tr>
                        <td>{{ $no }}</td>
                        <td>
                          @php
                          foreach($gambar as $item):
                          if($item->id_product == $row->id_product):
                          @endphp
                          <img src="{{ asset('storage/upload/'.$item->nama_file) }}" width="100px" height="100px" />
                          @php
                          endif;
                          endforeach;
                          @endphp
                        </td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->deskripsi }}</td>
                        <td>{{ $row->id_kategori }}</td>
                        <td>
                          <form action="{{ route('product.destroy',$row->id_product) }}" method="POST">
                            <a class="btn btn-default" href="{{ route('product.edit',$row->id_product) }}"><i class="fas fa-edit"></i></a> &nbsp;
                            @csrf
                            @method('DELETE')
         
                            <button type="submit" class="btn btn-default" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    @php
                    $no++;
                    endforeach;
                    @endphp

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right style="width: 3px !important; height: 2px !important;">
                    
                    {!! $product->appends(Request::all())->links() !!}
<!--                 
-->                </ul><!--
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@stop