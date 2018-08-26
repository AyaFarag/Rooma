<div class="backimg w-100 pt-4 pb-5 d-inline-block" id="about">
  <section class="about mb-0">

      <div class="row m-0 align-items-center">
          <div class="col-md-12 p-0 m-0">
              <h1 class="text-center pb-4 mb-0 difStyle font-weight-normal"><strong
                      class="font-weight-bold">{{ trans('language.About Rana Medical Services') }}</strong></h1>
              <img src="images/about.png"
                   class="position-absolute w-100 h-100"/>
              <div class="col-md-12 w-50 aboutBlock mx-auto">
                  <div class="lead text-center">{!! $about->content !!}<br>
                  </div>
                  <div class="pi-draggable font-weight-bold text-center h4">{!! $about->title !!}</div>
                  <div class="lead pi-draggable text-center">{!! $about->description !!} </div>
              </div>
          </div>
      </div>
  </section>
</div>