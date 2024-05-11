@extends('layouts.admin_layout')

@section('title', 'Редагування тексту')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагування тексту: {{ $content['html'] }}</h1>
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
                        <form action="{{ route('content.update', $content['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="html">html</label>
                                    <input type="text" name="html" value = "{{ $content['html'] }}" class="form-control" id="html"
                                        placeholder="Введіть локацію html" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Опис</label>
                                    <input type="text" name="description" value = "{{ $content['description'] }}" class="form-control" id="html"
                                        placeholder="Введіть опис" required>
                                </div>
                                <div class="form-group">
                                    <label for="text">Текст</label>
                                    <textarea name = "text" class="editor"> {{ $content['text'] }}</textarea>
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
