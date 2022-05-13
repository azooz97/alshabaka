@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','benefits')->sortBy('weight');
@endphp

@foreach($data as $x)
    <div class="col-md-6 mb-3">
        <div class="detailcontent py-0 mt-4">
            <div class="icon">
                <img src="{{$x->path}}" alt="icon"/>
            </div>
            <div class="h3 py-2 mt-2">{{$x->title}}</div>
            <div class="textdetail">{{$x->description}}</div>
        </div>
    </div>
@endforeach
