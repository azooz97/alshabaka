@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','gallery')->sortBy('weight');
@endphp

@foreach($data as $x)
    <a class="w-gallery no-border" href="{{$x->path}}">
        <img src="{{$x->path}}" alt="" class="w-gallery-image">
        <div class="content-gallery">
            <span class="ti-zoom-in"></span>
        </div>
    </a>
@endforeach
