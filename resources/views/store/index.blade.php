@extends('layouts.store')

@section('store-content')
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
            <div class="row mb-3">
                <div class="col-md-12">
                    <a href="" class="btn btn-success">Новое сборное</a>

                </div>

            </div>
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
                                                    <th>Код</th>
                                                    <th>Данные отправителя</th>
                                                    <th>Детали заявки</th>
                                                    <th>Адрес Отправителя</th>
                                                    <th>Статус</th>
                                                    <th>Курьер</th>
                                                    <th>Действие</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($orders4) && isset($orders4))
                                                    @foreach($orders4 as $order)
                                                        <tr>
                                                            <td>@php
                                                                    echo $order->order_code;
                                                                @endphp
                                                            </td>
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
                                                                    <span class="text-success">Способ </br>оплаты: </span>
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
                                                                        @php echo \App\Models\User::where('id', $order->courier_id)->get()[0]->name;@endphp
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $order_code = $order->order_code;
                                                                @endphp
                                                                <a href="{{route('abo.store.check', compact('order_code'))}}" class="btn btn-success btn-sm">Сверить</a>
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
</div>

@endsection
