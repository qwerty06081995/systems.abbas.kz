@extends('layouts.courier')

@section('courier-content')
<style>
    .orders_item{
        display: flex;

    }
    .orders_item span{
        display: block;
    }
    .orders_item .text-success{
        width: 44%;
    }
    .orders_item .orders_value{
        width: 50%;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Панель управления</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Панель управления</li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Заявки</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">Новые заявки</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0" style="height: 300px;">
                                            <table class="table table-head-fixed table-hover text-nowrap">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Данные отправителя</th>
                                                    <th>Детали заявки</th>
                                                    <th>Адрес Отправителя</th>
                                                    <th>Статус</th>
                                                    <th>Курьер</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($orders) && isset($orders))
                                                    @php $order_id = 0; @endphp
                                                    @foreach($orders as $order)
                                                        <tr>
                                                            <td>@php
                                                                $order_id = $order->id;
                                                                    echo $order->id;
                                                                @endphp</td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Имя: </span>
                                                                    <span class="orders_value">@php echo $order->from_name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Компания: </span>
                                                                    <span class="orders_value">@php echo $order->from_company; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Телефон: </span>
                                                                    <span class="orders_value">@php echo $order->from_phone; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Тип: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentType::where('id', $order->type)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Скорость: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentSpeed::where('id', $order->speed)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Оплата: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentPayment::where('id', $order->payment)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Способ оплаты: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentPaymentType::where('id', $order->payment_type)->get()[0]->name; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Адрес: </span>
                                                                    <span class="orders_value">@php echo $order->from_city.", \n".$order->from_address; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-danger">@php echo $order->status;@endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-danger">
                                                                        @if($order->courier_id == 0)
                                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-primary3">
                                                                                Назначить курьер
                                                                            </button>
                                                                        @else
                                                                            @php echo \App\Models\User::where('id', $order->courier_id)->get()[0]->name;@endphp
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Курьер назначен</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0" style="height: 300px;">
                                            <table class="table table-head-fixed table-hover text-nowrap">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Данные отправителя</th>
                                                    <th>Детали заявки</th>
                                                    <th>Адрес Отправителя</th>
                                                    <th>Статус</th>
                                                    <th>Курьер</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($orders2) && isset($orders2))
                                                    @foreach($orders2 as $order)
                                                        <tr>
                                                            <td>@php echo $order->id; @endphp</td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Имя: </span>
                                                                    <span class="orders_value">@php echo $order->from_name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Компания: </span>
                                                                    <span class="orders_value">@php echo $order->from_company; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Телефон: </span>
                                                                    <span class="orders_value">@php echo $order->from_phone; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Тип: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentType::where('id', $order->type)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Скорость: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentSpeed::where('id', $order->speed)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Оплата: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentPayment::where('id', $order->payment)->get()[0]->name; @endphp</span>
                                                                </div>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Способ оплаты: </span>
                                                                    <span class="orders_value">@php echo \App\Models\ShipmentPaymentType::where('id', $order->payment_type)->get()[0]->name; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-success">Адрес: </span>
                                                                    <span class="orders_value">@php echo $order->from_city.", \n".$order->from_address; @endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-danger">@php echo $order->status;@endphp</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="orders_item">
                                                                    <span class="text-danger">
                                                                        @if($order->courier_id == 0)
                                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-primary3">
                                                                                Назначить курьер
                                                                            </button>
                                                                        @else
                                                                            @php echo \App\Models\User::where('id', $order->courier_id)->get()[0]->name;@endphp
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">

                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-primary3">
        <div class="modal-dialog">
            <div class="modal-content bg-gradient-warning">
                <div class="modal-header">
                    <h4 class="modal-title">Курьер</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="{{route('abo.courier.enterCourier')}}" method="get">
                    <input type="hidden" name="order_id" value="@php echo $order_id; @endphp">
                    <div class="modal-body">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Назначить курьера</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEmail4" class="col-form-label">Выберите курьера</label>
                                    <div>
                                        <select name="courier" class="form-control" id="inputEmail4">
                                        @if(isset($couriers) && !empty($couriers))
                                            @foreach($couriers as $courier)
                                                <option value="@php echo $courier->id; @endphp">
                                                    @php echo $courier->name; @endphp
                                                </option>
                                            @endforeach
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
</div>

@endsection
