@extends('layouts.admin_layout')

@section('title', 'Редагування дрону')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагування дрону: {{ $drone['name'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('drone.update', $drone['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Назва</label>
                                    <input type="text" name="name"  class="form-control" id="name"
                                       value="{{ $drone->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Опис</label>
                                    <input type="text" name="description"  class="form-control" id="html"
                                    value="{{ $drone->description }}" >
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Зображення дрону</label>
                                    <img src="/{{ $drone['img'] }}" alt="" class="img-uploaded" style="display: block ">
                                    <input type="text" value="{{ $drone['img'] }}" name="img" class="form-control"
                                        id="feature_image" name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Обрати</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Оновити</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
