@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','services')->sortBy('weight');
@endphp

@foreach($data as $x)
    <div class="col-md-4">
        <div class="servcices">
            <div class="bgimg">
                <img src="{{$x->path}}" alt="#"/>
            </div>
            <div class="content">
                <div class="icon">
                    <img src="assests/images/icons/{{$loop->iteration.'.png'}}" alt="#"/>
                </div>
                <div class="heading">
                    {{$x->title}}
                </div>
                <div class="textdetail autoheight">{{$x->description}}</div>
                <div class="btn-content mt-3">
                    <span class="shine"></span>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
