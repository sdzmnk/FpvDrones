@extends('layouts.admin_layout')

@section('title', 'Редагування кроку')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагування кроку: {{ $instructionStep['name'] }}</h1>
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
                        <form action="{{ route('instruction_step.update', $instructionStep['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Назва</label>
                                    <input type="text" class="form-control" name = "name" id="name" value="{{ $instructionStep['name'] }}"></input>
                                </div>

                                <div class="form-group">
                                    <label for="description">Текст</label>
                                    <textarea name = "description" class="editor"> {{ $instructionStep['description'] }}</textarea>
                                </div>



                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Оберіть інструкцію(загальну)</label>
                                        <select name="instruction_id" class="form-control" >
                                            @foreach ($instructions as $instruction)
                                                <option value="{{ $instruction['id'] }}" @if ($instruction['id'] == $instructionStep['instruction_id']) selected
                                            @endif>{{ $instruction['id'] }} - {{ $instruction['name'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Зображення для кроку</label>
                                    <img src="/{{ $instructionStep['img'] }}" alt="" class="img-uploaded" style="display: block ">
                                    <input type="text" value="{{ $instructionStep['img'] }}" name="img" class="form-control"
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
