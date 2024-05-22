@extends('layouts.admin_layout')

@section('title', 'Додати користувача')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Додати користувача</h1>
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
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Ім'я</label>
                                <input type="text" name="name" class="form-control" id="name"
                                placeholder="Введіть Ім'я" >
                            </div>

                            <div class="form-group">
                                <label for="surname">Прізвище</label>
                                <input type="text" name="surname" class="form-control" id="surname"
                                placeholder="Введіть Прізвище" >
                            </div>

                            <div class="form-group">
                                <label for="email">Пошта</label>
                                <input type="text" name="email" class="form-control" id="email"
                                placeholder="Введіть Пошту" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Номер телефону</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number"
                                placeholder="Введіть Номер телефону" >
                            </div>

                            <div class="form-group">
                                <label for="country">Країна</label>
                                <input type="text" name="country" class="form-control" id="country"
                                placeholder="Введіть Країну">
                            </div>

                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="text" name="password" class="form-control" id="password" placeholder="Введіть Пароль" required>
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
