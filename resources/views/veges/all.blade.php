@extends('layouts.adminhome')
@section('page_title','Veges - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Veges</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{URL::to('vege/add')}}" class="btn btn-primary mb-2">Add <i class="fa fa-plus"></i> </a>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th style="width: 15px">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($veges as $vege)
                                        
                                        <tr>
                                            <td>{{$vege->vege_id}}</td>
                                            <td>{{$vege->name}}</td>
                                            <td>{{$vege->price}}</td>
                                            <
                                            <td></td>
                                            <td>
                                    <a href="{{URL::to('vege/edit/' .$vege->vege_id)}}"><i class="fa fa-edit"></i></a>
                                    <a href="{{URL::to('vege/delete/' .$vege->vege_id)}}"><i class="fa fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush
