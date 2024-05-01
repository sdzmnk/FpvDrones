@extends('layouts.admin_layout')

@section('title', 'Всі посилання')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Всі посилання</h1>
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
            <div class="card">
                <div class="card-body p-0">

                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th>Назва</th>
                                <th>Модель</th>
                                <th>Виробник</th>
                                <th>Опис</th>
                                <th>Мінімальна ціна</th>
                                <th>Максимальна ціна</th>
                                <th>Потрібна к-сть</th>
                                <th>Зібрано</th>
                                <th>Посилання ID</th>

                                <th style="width: 30%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                            <tr>
                                <td>{{ $detail['id'] }}</td>
                                <td>{{ $detail['name'] }}</td>
                                <td>{{ $detail['model'] }}</td>
                                <td>{{ $detail['producer'] }}</td>
                                <td>{{ $detail['description'] }}</td>
                                <td>{{ $detail['min_price'] }}</td>
                                <td>{{ $detail['max_price'] }}</td>
                                <td>{{ $detail['need'] }}</td>
                                <td>{{ $detail['collected'] }}</td>
                                <td>{{ $detail['link_to_detail_id'] }}</td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('detail.edit', $detail['id']) }}">
                                        <i class="fas fa-pencil-alt"></i> Редагувати
                                    </a>
                                    <form action="{{ route('detail.destroy', $detail['id']) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash"></i> Видалити
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection



