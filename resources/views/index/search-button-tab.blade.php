<div class="col-md-4">
    <ul class="tests_tabs_title">
        @if(count($rows['test_category']))
            @foreach($rows['test_category'] as $k=>$item)
                <li class="{{$k==0 ? 'active' : ''}}" ><a data-toggle="tab" href="#menu{{$item['id']}}">{{$item[$title]}}</a></li>
            @endforeach
        @endif
    </ul>
</div>
<div class="col-md-8">
    <div class="tab-content">
        @if(count($rows['test_category']))
            @foreach($rows['test_category'] as $k=>$i)
                <div id="menu{{$i['id']}}" class="tab-pane fade in {{$k==0 ? 'active' : ''}}">
                    @foreach($rows['test'] as $item)
                        @if($item->category_id == $i->id)
                            <div class="row tab_rows">
                                <div class="col-md-10">
                                    <h3>{{$item[$title]}}</h3>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$item['price']}} ₸</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
</div>