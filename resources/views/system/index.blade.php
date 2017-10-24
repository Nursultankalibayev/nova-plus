@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Статистика сайта</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Администрация</a></li>
                <li class="active">Статистика</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Услуги</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['service']) ? $rows['service'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Картинка(слайдер)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{isset($rows['carousel']) ? $rows['carousel'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Причины вызова</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{isset($rows['reasons']) ? $rows['reasons'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Воп и отв (Опубли)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">{{isset($rows['faq_site']) ? $rows['faq_site'] : '0'}}</span></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Воп и отв (Архив)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['faq_archive']) ? $rows['faq_archive'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Воп и отв (Архив)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['faq_archive']) ? $rows['faq_archive'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Отзывы (Опубли)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['review_site']) ? $rows['review_site'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Отзывы (Архив)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['review_archive']) ? $rows['review_archive'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Заказы (Новый)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['application_site']) ? $rows['application_site'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Заказ (Архив)</h3>
                <ul class="list-inline two-part">
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{isset($rows['application_archive']) ? $rows['application_archive'] : '0'}}</span></li>
                </ul>
            </div>
        </div>
    </div>
@endsection