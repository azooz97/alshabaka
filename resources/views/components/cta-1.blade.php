@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','cta-1')->sortBy('weight');
    $data =reset($data);
    $index=array_key_first($data);
@endphp

@if(!empty($data))
    <section class="p-5 bgblack" aria-label="cta">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 centered">
                    <div class="detail">
                        <h3>{{$data[$index]->title}}</h3>
                        <p class="m-0">{{$data[$index]->description}}</p>
                    </div>
                </div>
                <div class="col-md-4 centered">
                    <div class="btn-content my-4">
                        <span class="shine"></span>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
