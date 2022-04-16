@php
    $files = File::allFiles(public_path('img/projects'));
    $size =sizeof($files);
@endphp

@for($i=0;$i<$size ;$i++)
    <div class='item'>
        <div class='bg'>
            <img
                src="img/projects/{{$files[$i]->getfilename()}}"
                class="img-fluid"
                alt="Imageteam"
            />
        </div>
        <div class='desc'>
            <div class='tag'>Interior</div>
            <div class='name'>Entertainment Unit</div>
        </div>
{{--        <div class='icon'>--}}
{{--            <a href="project-detail.html">--}}
{{--                View Project--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
@endfor
