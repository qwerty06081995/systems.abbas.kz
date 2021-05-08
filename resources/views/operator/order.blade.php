@extends('layouts.operator')

@section('operator-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление заявку</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('abo.operator.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление заявку</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- form start -->
                <form action="{{route('abo.operator.order.saveOrder')}}" method="get">

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Данные отправителя</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fullNameFrom" class="col-sm-2 col-form-label">Ф.И.О</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="fullNameFrom" id="fullNameFrom" placeholder="Ф.И.О">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="companyFrom" class="col-sm-2 col-form-label">Компания</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="companyFrom" class="form-control" id="companyFrom" placeholder="Имя компании">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cityFrom" class="col-sm-2 col-form-label">Город</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cityFrom" class="form-control" id="cityFrom" placeholder="Город">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="addressFrom" class="col-sm-2 col-form-label">Адрес</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="addressFrom" class="form-control" id="addressFrom" placeholder="Адрес">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phoneFrom" class="col-sm-2 col-form-label">Телефон</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phoneFrom" class="form-control" id="phoneFrom" placeholder="Телефон">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-md-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Данные получателя</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fullNameTo" class="col-sm-2 col-form-label">Ф.И.О</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="fullNameTo" id="fullNameTo" placeholder="Ф.И.О">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="companyTo" class="col-sm-2 col-form-label">Компания</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="companyTo" class="form-control" id="companyTo" placeholder="Имя компании">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cityTo" class="col-sm-2 col-form-label">Город</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cityTo" class="form-control" id="cityTo" placeholder="Город">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="addressTo" class="col-sm-2 col-form-label">Адрес</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="addressTo" class="form-control" id="addressTo" placeholder="Адрес">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phoneTo" class="col-sm-2 col-form-label">Телефон</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phoneTo" class="form-control" id="phoneTo" placeholder="Телефон">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
{{--        Order добавление            --}}
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Детали накладной</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Тип отправлений</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="type" value="1">
                                                            <label class="form-check-label">Документы</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="type" value="2">
                                                            <label class="form-check-label">Посылка</label>
                                                        </div>
{{--                                                        <div class="form-check">--}}
{{--                                                            <input class="form-check-input" type="radio" name="radio1">--}}
{{--                                                            <label class="form-check-label">Radio disabled</label>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Срочность</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="speed" value="1">
                                                            <label class="form-check-label">Экспресс</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="speed" value="2">
                                                            <label class="form-check-label">Стандарт</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="speed" value="3">
                                                            <label class="form-check-label">Авто</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Оплата</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payment" value="1">
                                                            <label class="form-check-label">Отправителем</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payment" value="2">
                                                            <label class="form-check-label">Получателем</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payment" value="3">
                                                            <label class="form-check-label">Третьей стороной</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Способ оплаты</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="paymentType" value="1">
                                                            <label class="form-check-label">По счету</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="paymentType" value="2">
                                                            <label class="form-check-label">Наличными</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="paymentType" value="3">
                                                            <label class="form-check-label">Терминалом</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-md-6"></div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Дополнительно</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Примечания</label>
                                                <textarea class="form-control" name="description" rows="3" placeholder="Введите примечания ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Код заявки</label>
                                                <input type="text" name="code" class="form-control" placeholder="Введите код ...">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" value="Добавить">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
