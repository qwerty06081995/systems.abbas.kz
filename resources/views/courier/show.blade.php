@extends('layouts.courier')

@section('courier-content')
    <style>
        .modal-dialog{
            max-width:570px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Курьеры</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('abo.courier.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Курьеры</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        @if(isset($_GET['success']) && $_GET['success'] == 1)
            <div id="toastsContainerTopRight" class="toasts-top-right fixed">
                <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="mr-auto">Успешно добавлен!!!</strong>
                        <small></small>
                        <button data-dismiss="toast" type="button" id="success-close" class="ml-2 mb-1 close" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="toast-body">Ваш заявка успкшно добавлено</div>
                </div>
            </div>
        @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Маршруты</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                        <i class=" fa fa-plus"></i>
                                        Добавить
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th style="width: 50px">#</th>
                                        <th>Имя маршрута</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=0; @endphp
                                    @if(isset($routes) && !empty($routes))
                                        @foreach($routes as $route)
                                            @php $i++; @endphp
                                            <tr>
                                                <td>@php echo $i."."; @endphp</td>
                                                <td>
                                                    @php echo $route->route_name; @endphp
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Курьеры</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-primary2">
                                        <i class=" fa fa-plus"></i>
                                        Добавить
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th style="width: 50px">#</th>
                                        <th>Имя</th>
                                        <th>Логин</th>
                                        <th>Маршрут</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=0; @endphp
                                    @if(isset($couriers) && !empty($couriers))
                                        @foreach($couriers as $courier)
                                            @php $i++; @endphp
                                            <tr>
                                                <td>@php echo $i."."; @endphp</td>
                                                <td>
                                                    @php echo $courier->name; @endphp
                                                </td>
                                                <td>
                                                    @php echo $courier->code_name; @endphp
                                                </td>
                                                <td>
                                                    @php
                                                        $route1 = \App\Models\Routes::where('id', $courier->routes)
                                                            ->get()->first();
                                                        echo $route1->route_name; @endphp
                                                </td>
                                                <th>
                                                    @if($route1 != null)
                                                        <span class="badge bg-danger">Занят</span>
                                                    @else
                                                        <span class="badge bg-success">Свободен</span>
                                                    @endif
                                                </th>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
        <div class="modal fade" id="modal-primary2">
            <div class="modal-dialog">
                <div class="modal-content bg-gradient-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Курьер</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('abo.courier.courierForm')}}" method="get">
                    <div class="modal-body">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Добавить курьера</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Логин</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="Введите логин">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail4" class="col-sm-2 col-form-label">Имя</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="courier_name" class="form-control" id="inputEmail4" placeholder="Введите имя">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="courier_password" class="form-control" id="inputPassword3" placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword4" class="col-sm-2 col-form-label">Маршрут</label>
                                    <div class="col-sm-10">
                                        <select type="text" name="courier_route" class="form-control" id="inputPassword4">
                                            @if(count($routes) != 0)

                                                @foreach($routes as $route)
                                                    <option value="@php echo $route->id; @endphp">
                                                        @php echo $route->route_name; @endphp
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value="0">Добавьте маршрута</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-outline-light">Добавить</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="modal-primary">
            <div class="modal-dialog">
                <div class="modal-content bg-gradient-primary">
                    <div class="modal-header">
                        <h4 class="modal-title">Курьер</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('abo.courier.routesForm')}}" method="get">
                        <div class="modal-body">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Добавить маршрут</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="route_name" class="col-form-label">Имя маршрута</label>
                                        <div>
                                            <input type="text" name="route_name" class="form-control" id="route_name" placeholder="Введите имя">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-outline-light">Добавить</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

@endsection
