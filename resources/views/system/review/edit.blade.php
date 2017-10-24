@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Отзывы | Изменение</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Отзывы</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                @if(count($rows['review']))
                                    <form action="{{route('review.update',$rows['review']->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-12">Email *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="email" class="form-control" value="{{$rows['review']->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Отзыв *</label>
                                            <div class="col-md-12">
                                                <textarea name="review" id="" class="form-control" rows="5">{{$rows['review']->review}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Ответ </label>
                                            <div class="col-md-12">
                                                <textarea name="answer" id="" class="form-control" rows="5">{{$rows['review']->answer}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <input id="checkbox0" name="is_site" {{$rows['review']->is_site == 1 ? 'checked' : ''}} type="checkbox">
                                                    <label for="checkbox0">Опубликовать </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Ответить</button>
                                        <button type="button" onclick="window.location.href='{{URL::previous()}}';" class="btn btn-inverse waves-effect waves-light">Отмена</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script src="/js/jasny-bootstrap.js"></script>

    @if(count($errors))
        @foreach ($errors->all() as $error)
            <script>
                $.toast({
                    heading: '{{trans('app.error_when_filling')}}',
                    text : '{{$error}}',
                    position: 'bottom-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            </script>
        @endforeach
    @endif
@endpush