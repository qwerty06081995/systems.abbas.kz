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
                <form action="">
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
                        <div class="col-12 col-md-6">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Тип отправление</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" name="customRadio2" checked="">
                                            <label for="customRadio4" class="custom-control-label">Custom Radio with custom color</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio5" name="customRadio2">
                                            <label for="customRadio5" class="custom-control-label">Custom Radio with custom color outline</label>
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
                </form>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
