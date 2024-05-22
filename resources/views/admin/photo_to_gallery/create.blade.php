@extends('layouts.admin_layout')

@section('title', 'Додати фото у галерею')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Додати фото у галерею</h1>
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
                    <form action="{{ route('photo_to_gallery.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <input type="text" name="description" class="form-control" id="description"
                                    placeholder="Введіть опис" >
                            </div>

                            <div class="form-group">
                                <label>Оберіть галерею</label>
                                <select name="gallery_id" class="form-control" >
                                    @foreach ($galleries as $gallery)
                                        <option value = "{{ $gallery['id']}}" >{{ $gallery['id']}} -  {{$gallery['name'] }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Зображення</label>
                                <img src="" alt="" class="img-uploaded" style="display: block ">
                            <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                            <a href="" class="popup_selector" data-inputid="feature_image">Обрати</a>
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
