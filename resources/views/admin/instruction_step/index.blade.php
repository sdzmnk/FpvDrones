@extends('layouts.admin_layout')

@section('title', 'Всі кроки інструкцій')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Всі кроки інструкцій</h1>
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
              <h3 class="card-title">Таблиця з кроками інструкцій</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Назва</th>
                  <th>Інструкція ID</th>
                  <th class="no-export">Дія</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($instructionSteps as $instructionStep)
                    <tr>
                        <td>{{ $instructionStep['id'] }}</td>
                        <td>{{$instructionStep['name'] }}</td>
                        <td>{{ $instructionStep['instruction_id']. "-". $instructionStep->instruction->name}}</td>

                        <td class="no-export">
                            <a class="btn btn-info btn-sm" href="{{ route('instruction_step.edit', $instructionStep['id']) }}">
                                <i class="fas fa-pencil-alt"></i> Редагувати
                            </a>
                            <form action="{{ route('instruction_step.destroy', $instructionStep['id']) }}" method="POST"
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
                    <th>Назва</th>
                    <th>Інструкція ID</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.card-body -->

          </div>
@endsection



