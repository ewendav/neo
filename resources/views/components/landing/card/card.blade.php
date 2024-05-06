
@if($collection !== '')
    <a class="landing-card {{$collection}}"
       x-data="{ isActive: false }"
       x-bind:class="{ 'toggle': isActive }"
       x-on:click="isActive = !isActive;"
       wire:navigate
       href="{{route('shop',[
                    'collectionName' => $collection
                    ])}}">

        <div class="landing-card-left">
            <div class="landing-card-up">
                <img class="landing-card-button" src="{{asset('imgs/landing/button.png')}}" alt="">
                <p>Collection</p>
            </div>

            <div>
                <p class="landing-card-title">{{ucfirst($collection)}}</p>
                <p class="landing-card-description">{!! html_entity_decode($description) !!}</p>
            </div>
        </div>

        <div class="landing-card-right">
            <div class="landing-card-up">
                @switch($collection)
                    @case('couture')
                        <img class="landing-card-image image{{$collection}}" src="{{asset('imgs/landing/sewing machine.png')}}" alt="">
                        @break
                    @case('durable')
                        <img class="landing-card-image image{{$collection}}" src="{{asset('imgs/landing/RECYCLE.png')}}" alt="">
                        @break
                    @case('tricot')
                        <img class="landing-card-image image{{$collection}}" src="{{asset('imgs/landing/knot.png')}}" alt="">
                        @break
                @endswitch
            </div>

            <div class="landing-card-down">
                <svg
                    class="card-arrow"
                    width="116.44312mm"
                    height="116.44313mm"
                    viewBox="0 0 116.44312 116.44313"
                    version="1.1"
                    id="svg5"
                    xml:space="preserve"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:svg="http://www.w3.org/2000/svg"><sodipodi:namedview
                        id="namedview7"
                        showgrid="false" /><defs
                        id="defs2" /><g
                        id="g138"
                        transform="matrix(0.26458333,0,0,0.26458334,-5.0620426e-6,0)">
                        <path
                            id="autour_fleche_1_"
                            class="card-arrow-outside"
                            d="M 220.00003,0 C 98.40028,0 3.0757874e-5,98.59985 3.0757874e-5,220.0996 c 0,121.49976 98.599857242126,220.1 220.099609242126,220 121.49976,0 220.00001,-98.59985 220.00001,-220.09961 C 440.09965,98.500242 341.49979,0 220.00003,0 Z" /><path
                            class="card-arrow-outside"
                            id="autour_fleche_1_-5"
                            d="M 0,220.1 C 0,98.6 98.4,0 220,0 c 121.5,0 220.1,98.5 220.1,220 0,121.5 -98.5,220.1 -220,220.1 C 98.6,440.2 0,341.6 0,220.1 Z m 259.7,-20 c -44.1,0 -88.3,-0.1 -132.4,0 -15.7,0 -25.5,15.5 -18.4,29 3.9,7.5 10.4,10.9 18.8,10.9 32.6,0 65.3,0 97.9,0 11.5,0 23,0 34.5,0 1.6,0 3.2,0 6.1,0 -2,2.2 -3.1,3.5 -4.3,4.8 -10.1,10.4 -20.3,20.7 -30.2,31.3 -11,11.8 -5.7,29.7 9.8,33.4 7.1,1.7 13.4,-0.3 18.3,-5.4 22.8,-23.4 45.5,-46.8 68.1,-70.4 7.6,-7.9 7.4,-19.5 -0.3,-27.5 -22.4,-23.3 -44.9,-46.5 -67.4,-69.7 -8.1,-8.3 -20.1,-8.5 -28.2,-0.7 -7.9,7.5 -8.2,19.9 -0.3,28.3 9.9,10.6 20.1,20.8 30.2,31.3 1.1,1.2 2.2,2.4 4.4,4.8 -3.1,-0.1 -4.8,-0.1 -6.6,-0.1 z"
                            style="display:inline" />
                        <path
                            id="fleche_1_-7"
                            class="card-arrow-inside"
                            d="m 266.4,200.1 c -3.2,0 -4.9,0 -6.7,0 -44.1,0 -88.3,-0.1 -132.4,0 -15.7,0 -25.5,15.5 -18.4,29 3.9,7.5 10.4,10.9 18.8,10.9 32.6,0 65.3,0 97.9,0 11.5,0 23,0 34.5,0 1.6,0 3.2,0 6.1,0 -2,2.2 -3.1,3.5 -4.3,4.8 -10.1,10.4 -20.3,20.7 -30.2,31.3 -11,11.8 -5.7,29.7 9.8,33.4 7.1,1.7 13.4,-0.3 18.3,-5.4 22.8,-23.4 45.5,-46.8 68.1,-70.4 7.6,-7.9 7.4,-19.5 -0.3,-27.5 -22.4,-23.3 -44.9,-46.5 -67.4,-69.7 -8.1,-8.3 -20.1,-8.5 -28.2,-0.7 -7.9,7.5 -8.2,19.9 -0.3,28.3 9.9,10.6 20.1,20.8 30.2,31.3 1.2,1.1 2.3,2.3 4.5,4.7 z m 0,0 c -3.2,0 -4.9,0 -6.7,0 -44.1,0 -88.3,-0.1 -132.4,0 -15.7,0 -25.5,15.5 -18.4,29 3.9,7.5 10.4,10.9 18.8,10.9 32.6,0 65.3,0 97.9,0 11.5,0 23,0 34.5,0 1.6,0 3.2,0 6.1,0 -2,2.2 -3.1,3.5 -4.3,4.8 -10.1,10.4 -20.3,20.7 -30.2,31.3 -11,11.8 -5.7,29.7 9.8,33.4 7.1,1.7 13.4,-0.3 18.3,-5.4 22.8,-23.4 45.5,-46.8 68.1,-70.4 7.6,-7.9 7.4,-19.5 -0.3,-27.5 -22.4,-23.3 -44.9,-46.5 -67.4,-69.7 -8.1,-8.3 -20.1,-8.5 -28.2,-0.7 -7.9,7.5 -8.2,19.9 -0.3,28.3 9.9,10.6 20.1,20.8 30.2,31.3 1.2,1.1 2.3,2.3 4.5,4.7 z"
                            inkscape:label="fleche_above" />
                    </g></svg>
            </div>
        </div>

    </a>

@else
    <div class="landing-card">
        <div class="landing-logo-container">
            <img class="landing-logo" src="{{asset('imgs/logo.png')}}" alt="">
        </div>
    </div>
@endif

@vite('resources/views/components/landing/card/card.css')
