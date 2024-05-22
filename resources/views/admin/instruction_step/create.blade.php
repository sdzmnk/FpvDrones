@extends('layouts.admin_layout')

@section('title', 'Додати крок для інструкції')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Додати крок для інструкції</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="{{ route('instruction_step.store') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="link">Назва</label>
                                <input type="text"  name="name" class="form-control"
                                    id="name" >
                            </div>

                        <div class="form-group">
                            <label for="description">Текст</label>
                            <input type="text"  name="description" class="form-control"
                                id="description" >
                        </div>

                        <div class="form-group">
                            <label>Оберіть інструкцію(загальну)</label>
                            <select name="instruction_id" class="form-control" >
                                @foreach ($instructions as $instruction)
                                    <option value="{{ $instruction['id']}}">{{ $instruction['id']}} -  {{$instruction['name'] }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="feature_image">Зображення для кроку</label>
                            <img src="" alt="" class="img-uploaded" style="display: block ">
                        <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                        <a href="" class="popup_selector" data-inputid="feature_image">Обрати</a>
                        </div>
                        </div>
                </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Додати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
  <!-- /.content -->

@endsection
