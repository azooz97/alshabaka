@php
    $files = File::allFiles(public_path('img/ourclients'));
    $size =sizeof($files);
@endphp

@for($i=0;$i<$size ;$i+=3)
    <div class='item'>
        <img
            src="img/ourclients/{{$files[$i]->getfilename()}}"
            class="img-fluid"
            alt="Imageteam"
        />
        @if($i+1>=$size)
            @continue
        @endif
        <img
            src="img/ourclients/{{$files[$i+1]->getfilename()}}"
            class="img-fluid"
            alt="Imageteam"
        />
        @if($i+2>=$size)
            @continue
        @endif
        <img
            src="img/ourclients/{{$files[$i+2]->getfilename()}}"
            class="img-fluid"
            alt="Imageteam"
        />
    </div>
@endfor
