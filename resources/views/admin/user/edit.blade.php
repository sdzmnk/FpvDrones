@extends('layouts.admin_layout')

@section('title', 'Редагування користувача')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагування користувача: {{ $user['email'] }}</h1>
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
                        <form action="{{ route('user.update', $user['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Ім'я</label>
                                    <input type="text"  value="{{ $user['name'] }}" name="name" class="form-control" id="name" >
                                </div>

                                <div class="form-group">
                                    <label for="surname">Прізвище</label>
                                    <input type="text" value="{{ $user['surname'] }}" name="surname" class="form-control" id="surname" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Пошта</label>
                                    <input type="text" value="{{ $user['email'] }}" name="email" class="form-control" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">Номер телефону</label>
                                    <input type="text" value="{{ $user['phone_number'] }}" name="phone_number" class="form-control" id="phone_number" >
                                </div>

                                <div class="form-group">
                                    <label for="country">Країна</label>
                                    <input type="text" value="{{ $user['country'] }}" name="country" class="form-control" id="country">
                                </div>

                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="text" name="password" class="form-control" id="password" >
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
