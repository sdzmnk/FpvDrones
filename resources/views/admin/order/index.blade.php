@extends('layouts.admin_layout')

@section('title', 'Всі замовлення')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Всі замовлення</h1>
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

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Таблиця з замовленнями</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Користувач ID</th>
                  <th>Дата</th>
                  <th class="no-export">Дія</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order['id'] }}</td>
                        <td>
                            @if ($order->user) <!-- Перевіряємо, чи існує користувач -->
                            {{ $order->user_id }} - {{ $order->user->email }}
                            @else
                                Користувач не знайдений <!-- Якщо користувача не знайдено -->
                            @endif
                        </td>
                        <td>{{ $order['date'] }}</td>

                        <td class="no-export">
                            <a class="btn btn-info btn-sm" href="{{ route('order.edit', $order['id']) }}">
                                <i class="fas fa-pencil-alt"></i> Редагувати
                            </a>
                            <form action="{{ route('order.destroy', $order['id']) }}" method="POST"
                                style="display: inline-block;">
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

                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Користувач ID</th>
                    <th>Дата</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.card-body -->

          </div>
@endsection



