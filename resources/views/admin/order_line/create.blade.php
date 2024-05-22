@extends('layouts.admin_layout')

@section('title', 'Додати деталі замовлення')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Додати деталі замовлення</h1>
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
                    <form action="{{ route('order_line.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Оберіть замовлення</label>
                                <select name="order_id" class="form-control" >
                                    @foreach ($orders as $order)
                                        <option value = "{{ $order['id']}}" >{{ $order->id}} -  {{$order->user->email}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Оберіть деталь</label>
                                <select name="detail_id" class="form-control" >
                                    @foreach ($details as $detail)
                                        <option value = "{{ $detail['id']}}" >{{ $detail['id']}} -  {{$detail['name'] }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="quantity_of_detail">К-сть деталей</label>
                                <input type="number" name="quantity_of_detail" class="form-control" id="quantity_of_detail"
                                    placeholder="Введіть К-сть деталей" required>
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
