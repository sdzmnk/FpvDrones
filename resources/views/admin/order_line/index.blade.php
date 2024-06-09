@extends('layouts.admin_layout')

@section('title', 'Всі деталі замовлень')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Всі деталі замовлень</h1>
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
              <h3 class="card-title">Таблиця з деталями замовлень</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Замовлення ID</th>
                  <th>Деталь ID</th>
                  <th>Кількість деталей</th>
                  <th class="no-export">Дія</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($orderLines as $orderLine)
                    <tr>
                        <td>{{ $orderLine['id'] }}</td>
                        <td>{{$orderLine['order_id'] }}</td>
                        <td>{{$orderLine['detail_id']  . ' - ' . $orderLine->detail->name}}</td>
                        <td>{{ $orderLine['quantity_of_detail'] }}</td>

                        <td class="no-export">
                            <a class="btn btn-info btn-sm" href="{{ route('order_line.edit', $orderLine['id']) }}">
                                <i class="fas fa-pencil-alt"></i> Редагувати
                            </a>
                            <form action="{{ route('order_line.destroy', $orderLine['id']) }}" method="POST"
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
                  <th>Замовлення ID</th>
                  <th>Деталь ID</th>
                  <th>Кількість деталей</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.card-body -->

          </div>
@endsection



