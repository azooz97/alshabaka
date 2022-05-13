@php
    use App\Models\Element;
    $data = Element::all()->where('component','=','header-slider')->sortBy('weight');
@endphp

@foreach($data as $x)
    <li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
        <img src="{{$x->path}}" alt="" data-start="0" data-bgposition="center center"
             data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100"
             data-bgpositionend="center center"/>
        <div class="tp-caption slide-big-heading sft"
             data-x="center"
             data-y="250"
             data-speed="800"
             data-start="400"
             data-easing="easeInOutExpo"
             data-endspeed="450">
            {{$x->title}}
        </div>

        <div class="tp-caption slide-sub-heading sft"
             data-x="center"
             data-y="330"
             data-speed="1000"
             data-start="800"
             data-easing="easeOutExpo"
             data-endspeed="400">
            {{$x->description}}
        </div>

        <div class="tp-caption btn-slider sfb"
             data-x="center"
             data-y="400"
             data-speed="400"
             data-start="800"
             data-easing="easeInOutExpo">
            <span class="shine"></span><a href="#">More Detail</a>
        </div>
    </li>
@endforeach

