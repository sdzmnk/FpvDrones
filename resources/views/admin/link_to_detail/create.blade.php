@extends('layouts.admin_layout')

@section('title', 'Додати посилання на деталь')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Додати посилання на деталь</h1>
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
                    <form action="{{ route('link_to_detail.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <input type="text" name="description" class="form-control" id="description"
                                    placeholder="Введіть опис" >
                            </div>

                            <div class="form-group">
                                <label for="link">Посилання</label>
                                <input type="text" name="link" class="form-control" id="link"
                                    placeholder="Введіть посилання" required>
                            </div>

                            <div class="form-group">
                                <label>Оберіть деталь</label>
                                <select name="detail_id" class="form-control" >
                                    @foreach ($details as $detail)
                                        <option value = "{{ $detail['id']}}" >{{ $detail['id']}} -  {{$detail['name'] }} </option>
                                    @endforeach
                                </select>
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
