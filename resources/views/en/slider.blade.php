<section class="slideshow w-100 d-inline-block m-0 p-0" id="slideshow">
  <div class="row m-0 p-0">
      <div id="carousel" class="carousel slide w-100" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                    @foreach($sliders as $key => $slider)
                    <li data-target="#carousel" data-slide-to="{{ $loop->index }}" class="cyrcle {{ $loop->first ? 'active' : '' }}">
                    </li>
                    @endforeach
                </ol>
          <div class="carousel-inner">
                @foreach($sliders as $slider)
              <div class="carousel-item {{ $loop->first ? ' active' : '' }}"><img class="d-block img-fluid w-100" src="{{ asset('uploads/sliders/'.$slider->image) }}">
                  <div class="carousel-caption row align-items-center">
                @if(App::isLocale('en'))
                      <h3 class="text-left" style="color: #ffffff">{!! $slider->title !!}</h3>
                      <div class="clearfix w-100"></div>
                      <div class="text-left darkColor" style="overflow: hidden">{!! $slider->content !!}</div>
                      
                @else
                      <h3 class="text-right" style="color: #ffffff">{!! $slider->title !!}</h3>
                      <div class="clearfix w-100"></div>
                      <div class="text-right darkColor" style="overflow: hidden"><div>{!! $slider->content !!}</div></div>
                      
                @endif
                  </div>
              </div>
              @endforeach
              </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span
                  class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
          </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span
              class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      </div>
      <!--<div class="scrolling-down position-absolute m-auto text-center"><a href="#about"><img class="h-100 w-100" src="images/arrow.png"/></a></div> !-->
  </div>
</section>