<ul class="nav" id="side-menu">
    <li>
        <a href="{{route('carousel.index')}}" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Слайдер
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="{{route('service.index')}}" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Услуги
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="{{route('reasons.index')}}" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Причины вызова
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="{{route('faq.index')}}" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Вопросы и ответы
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="{{route('review.index')}}" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Отзывы
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">Страницы<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Анализ</span><span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li> <a href="{{route('test-category.index')}}"><i class=" fa-fw">T</i><span class="hide-menu">Категория</span></a> </li>
                    <li> <a href="{{route('test.index')}}"><i class=" fa-fw">T</i><span class="hide-menu">Список анализов</span></a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Лор</span><span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li> <a href="{{route('lor-content.index')}}"><i class=" fa-fw">T</i><span class="hide-menu">Манипуляция</span></a> </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="/system/application" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Заказы
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
    <li>
        <a href="/system/users" class="waves-effect">
            <i class="mdi mdi-view-carousel fa-fw"></i>
            <span class="hide-menu">Пользователи
                <span class="fa arrow"></span>
            </span>
        </a>
    </li>
</ul>