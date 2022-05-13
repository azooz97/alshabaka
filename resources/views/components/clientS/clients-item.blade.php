@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','partners')->sortBy('weight');
    $first=array_key_first(reset($data));
    $size=sizeof($data)+$first;
@endphp

@for($i=$first;$i<$size ;$i+=3)
    <div class='item'>
        <img
            src="{{$data[$i]->path}}"
            class="img-fluid"
            alt="Imageteam"
        />
        @if($i+1>=$size)
            @continue
        @endif
        <img
            src="{{$data[$i+1]->path}}"
            class="img-fluid"
            alt="Imageteam"
        />
        @if($i+2>=$size)
            @continue
        @endif
        <img
            src="{{$data[$i+2]->path}}"
            class="img-fluid"
            alt="Imageteam"
        />
    </div>
@endfor
