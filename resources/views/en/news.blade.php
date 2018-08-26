<div class="backimg w-100 py-4 d-inline-block" id="news">
  <section class="news w-100 p-0 m-0">
      <h1 class="text-center m-0 pb-4 difStyle">{{ trans('language.Our News') }}</h1>
      <div class="row m-0 p-0 align-items-center" style="overflow-x:hidden;">
          <div class="your-class w-100 p-0 m-0">
                @foreach($news as $news)
              <div>
                  <div class="slick-slide-img"><img class="w-100" src="{{ asset('uploads/news/'.$news->image)}}"/></div>
                  <div class="slick-content position-relative w-100">
                      <h4 class="font-weight-bold">{!!$news->title!!}</h4>
                      <div class="font-weight-normal">{!! $news->content!!}</div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>


    
