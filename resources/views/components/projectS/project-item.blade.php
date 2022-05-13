@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','project_sample')->sortBy('weight');
@endphp

@foreach($data as $x)
    <div class='item'>
        <div class='bg'>
            <img
                src="{{$x->path}}"
                class="img-fluid"
                alt="Imageteam"
            />
        </div>
        <div class='desc'>
            <div class='tag'>{{$x->title}}</div>
            <div class='name'>{{$x->description}}</div>
        </div>
{{--        <div class='icon'>--}}
{{--            <a href="project-detail.html">--}}
{{--                View Project--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
@endforeach
