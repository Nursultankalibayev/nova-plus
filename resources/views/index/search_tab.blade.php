<div class="col-md-4">
    <ul class="tests_tabs_title">
        @if(count($rows['test_category']))
            <li class="active" ><a data-toggle="tab" href="#menu{{$rows['test_category']['id']}}">{{$rows['test_category'][$title]}}</a></li>
        @endif
    </ul>
</div>
<div class="col-md-8">
    <div class="tab-content">
        @if(count($rows['test_category']) && count($rows['test']))
            <div id="menu{{$rows['test_category']['id']}}" class="tab-pane fade in active">
                <div class="row tab_rows">
                    <div class="col-md-10">
                        <h3>{{$rows['test'][$title]}}</h3>
                    </div>
                    <div class="col-md-2">
                        <p>{{$rows['test']['price']}} ₸</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>