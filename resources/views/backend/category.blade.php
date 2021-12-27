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
                        <li class="breadcrumb-item active">Category</li>
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
                                    <h3 class="card-title">Category</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-default" href="{{route('category.create')}}"><i class="fas fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center" style="width: 130px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $no=1;
                                        foreach($data_category as $row):
                                        @endphp

                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $row->nama }}</td>

                                            <td>
                                               
                                                <form action="{{ route('category.destroy',$row->id_kategori) }}" method="POST">
                                                    <a class="btn btn-default" href="{{ route('category.edit',$row->id_kategori) }}"><i class="fas fa-edit"></i></a> &nbsp;
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
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@stop