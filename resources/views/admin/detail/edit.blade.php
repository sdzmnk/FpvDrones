@extends('layouts.admin_layout')

@section('title', 'Редагування посилання')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагування деталі: {{ $detail['name'] }}</h1>
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
                        <form action="{{ route('detail.update', $detail['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Назва</label>
                                    <input type="text" value="{{ $detail['name'] }}" name="name" class="form-control" id="name"
                                        placeholder="Введіть назву" required>
                                </div>
                                <div class="form-group">
                                    <label for="model">Модель</label>
                                    <input type="text" value="{{ $detail['model'] }}" name="model" class="form-control" id="model"
                                        placeholder="Введіть модель" required>
                                </div>

                                <div class="form-group">
                                    <label for="producer">Виробник</label>
                                    <input type="text" name="producer" value="{{ $detail['producer'] }}" class="form-control" id="producer"
                                        placeholder="Введіть виробника" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Опис</label>
                                    <input type="text" name="description" value="{{ $detail['description'] }}" class="form-control" id="description"
                                        placeholder="Введіть опис">
                                </div>
                                <div class="form-group">
                                    <label for="min_price">Мінімальна ціна</label>
                                    <input type="number" name="min_price" value="{{ $detail['min_price'] }}" class="form-control" id="min_price"
                                        placeholder="Введіть мін.ціну" required>
                                </div>
                                <div class="form-group">
                                    <label for="max_price">Максимальна ціна</label>
                                    <input type="number" name="max_price" value="{{ $detail['max_price'] }}" class="form-control" id="max_price"
                                        placeholder="Введіть макс.ціну" required>
                                </div>
                                <div class="form-group">
                                    <label for="need">Потрібна к-сть</label>
                                    <input type="number" name="need" value="{{ $detail['need'] }}" class="form-control" id="need"
                                        placeholder="Введіть к-сть" required>
                                </div>
                                <div class="form-group">
                                    <label for="collected">Зібрано</label>
                                    <input type="number" name="collected" value="{{ $detail['collected'] }}" class="form-control" id="collected"
                                        placeholder="Введіть к-сть" required>
                                </div>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Оберіть посилання</label>
                                    <select name="link_to_detail_id" value="{{ $detail['link_to_detail_id'] }}" class="form-control" required>
                                        @foreach ($linksToDetail as $linkToDetail)
                                            <option value="{{ $linkToDetail['id'] }}">{{ $linkToDetail['description'] }}</option>
                                        @endforeach
                                    </select>
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
