<div class="query-list">
    <ul class="analysis-search">
        @if(count($rows['test']))
            @foreach($rows['test'] as $item)
                <li class="analysis-sch" data-id="{{$item['id']}}">
                    {{$item[$title]}}
                </li>
            @endforeach
        @else
            <span style="padding-left: 20px; color:#9b9b9b;">По вашему запросу ничего не найдено</span>
        @endif
    </ul>
</div>