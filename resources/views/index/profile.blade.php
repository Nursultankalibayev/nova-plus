@extends('index.layouts.app')
@section('title')
Профиль
@stop
@section('content')
    @if(count( $rows['profile']))
        <section class="personal_account">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="left_ul">
                        <li class="active"><i class="personal"></i> <a data-toggle="tab" href="#personal">Личная информация</a></li>
                        <li><i class="first-aid-kit"></i><a data-toggle="tab" href="#first-aid-kit">Вызвать врача</a></li>
                        <li><i class="article"></i><a data-toggle="tab" href="#article">Оставить отзыв</a></li>
                        <li><i class="question"></i><a data-toggle="tab" href="#question">Задать вопрос</a></li>
                        <li><i class="log-out"></i><a  href="{{route('logout')}}">Выйти</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div id="personal" class="tab-pane fade in active">
                            <ul class="right_ul">
                                <li><i class="personal"></i><input id="personal" type="text" placeholder="Имя и фамилия" value="{{ $rows['profile']['name']}}"></li>
                                <li><i class="phone"></i><input id="phone" type="text" data-mask="+7(999)9999999" placeholder="Ваш номер телефона" value="{{ $rows['profile']['phone']}}"></li>
                                <li><i class="calendar"></i><input id="calendar" type="date" placeholder="Дата вашего рождения (ДД.ММ.ГГГГ)" value="{{$rows['profile']['birthday']}}"></li>
                                <li><i class="home"></i><input id="home" type="text" placeholder="Ваш адрес" value="{{$rows['profile']['address']}}"></li>
                            </ul>
                            <button type="button" class="personal_save">Сохранить</button>
                        </div>
                        <div id="first-aid-kit" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title active">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/therapist-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    Терапевт</a>
                                </div>
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/otolaryngologist-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    ЛОР</a>
                                </div>
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/neurologist-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    Невропатолог</a>
                                </div>
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/analyzes-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    Анализы</a>
                                </div>
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/analyzes-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    Процедуры</a>
                                </div>
                                <div class="col-md-3 items_personal_account">
                                    <a href="javascript:void(0);" class="title">
                                        <div class="first-aid-kit_item">
                                            <div class="img">
                                                <img src="/assets/images/massage-icon-3-x.png" alt="">
                                            </div>
                                        </div>
                                    Массаж</a>
                                </div>
                            </div>
                            <button type="button" data-action="Терапевт" id="call_doctor" class="first-aid-kit_save">Сделать вызов</button>
                        </div>
                        <div id="article" class="tab-pane fade">
                            <ul class="right_ul">
                                <li><input type="text" class="email" placeholder="Ваш e-mail"></li>
                                <li><input type="text" class="article" placeholder="Ваш отзыв"></li>
                            </ul>
                            <button type="button" class="article_save">Сохранить</button>
                        </div>
                        <div id="question" class="tab-pane fade">
                            <ul class="right_ul">
                                <li><input type="email" name="email" class="email" placeholder="Ваш e-mail"></li>
                                <li>
                                    <input type="text" name="query" class="query" placeholder="Ваш вопрос">
                                </li>
                            </ul>
                            <button type="button" class="question_save">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
           $('.personal_save').on('click',function () {
               console.log('success');
              var name = $(this).parent().find('#personal').val();
              var phone = $(this).parent().find('#phone').val();
              var birthday = $(this).parent().find('#calendar').val();
              var address = $(this).parent().find('#home').val();
              var data ={'name':name,'phone':phone,'birthday':birthday,'address':address};
              $.post('{{route('profile_request_save')}}',{_token:'{{csrf_token()}}',data:data},function (response) {
                 if(response.success){
                     $.toast({
                         heading: '{{trans('app.success')}}',
                         text : response.success,
                         position: 'top-right',
                         loaderBg: '#ff6849',
                         icon: 'success',
                         hideAfter: 3500
                     });
                 }else{
                     $.toast({
                         heading: '{{trans('app.success')}}',
                         text : response.error,
                         position: 'top-right',
                         loaderBg: '#ff6849',
                         icon: 'error',
                         hideAfter: 3500
                     });
                 }
              })
           });
        });
    </script>
    <script>
        $('.title').on('click',function(){
            $('.title').removeClass('active');
            $(this).addClass('active');
        });
        $('.question_save').click(function () {
            var object = $(this);
            var email = $(this).parent().find('.email').val();
            var query = $(this).parent().find('.query').val();
            if(isValidEmailAddress(email) && isValidQueryText(query)){
                $.post('{{route('profileQuestionSave')}}', {_token:'{{csrf_token()}}',email:email,query:query},function (response) {
                    if (response.success) {
                        object.parent().find('.email').val('');
                        object.parent().find('.query').val('');
                        $.toast({
                            heading: '{{trans('app.success')}}',
                            text: response.success,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500
                        });
                    }
                });
            }else {
                $.toast({
                    heading: '{{trans('app.success')}}',
                    text : 'Заполните правильными данными',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            }
        });
        $('.article_save').click(function () {
            var object = $(this);
            var email = $(this).parent().find('.email').val();
            var review = $(this).parent().find('.article').val();
            if(isValidEmailAddress(email) && isValidQueryText(review)){
                $.post('{{route('profileArticleSave')}}', {_token:'{{csrf_token()}}',email:email,review:review},function (response) {
                    if (response.success) {
                        object.parent().find('.email').val('');
                        object.parent().find('.article').val('');
                        $.toast({
                            heading: '{{trans('app.success')}}',
                            text: response.success,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500
                        });
                    }
                });
            }else {
                $.toast({
                    heading: '{{trans('app.success')}}',
                    text : 'Заполните правильными данными',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            }
        });

        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }

        function isValidQueryText(text) {
            if(text.length > 0)
                return true;
            else
                return false;
        }
        $('.title').click(function () {
            var text = $(this).text().trim();
            $('#call_doctor').attr('data-action',text);
        });

        $('#first-aid-kit').on('click','#call_doctor',function () {
            window.location.href="/call?text="+$(this).attr('data-action');
            console.log($(this).attr('data-action'));
        });
    </script>
@endpush