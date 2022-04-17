@php
    $files = File::allFiles(public_path('img/gallery/small'));
    $size =sizeof($files);
@endphp

@for($i=0;$i<$size ;$i++)

    <a class="w-gallery no-border" href="img/gallery/full/{{$files[$i]->getfilename()}}">
        <img src="img/gallery/small/{{$files[$i]->getfilename()}}" alt="" class="w-gallery-image">
        <div class="content-gallery">
            <span class="ti-plus"></span>
        </div>
    </a>

@endfor
