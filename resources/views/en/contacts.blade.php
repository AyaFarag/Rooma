<div class="backimg w-100 d-inline-block" id="contact">
  <section class="contact">
      <!-- <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-capitalize p-3">Rana Medical Services Company <br>
              Head office</h1>
          </div>
        </div>
      </div> !-->
      <div class="col-md-12 p-0">
          <div class="location-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.2925617401324!2d46.6193889!3d24.819666699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ5JzEwLjgiTiA0NsKwMzcnMDkuOCJF!5e0!3m2!1sen!2seg!4v1524406615035"
                      width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
      <div class="footer-details">
          <div class="row m-0 w90 m-auto py-3">
              <div class="col-lg-4 col-md-6 align-self-center align-items-center">
                  <ul class="navbar-nav h-100 text-left">
                      <li class="nav-item align-items-center"><a class="nav-link align-items-center d-flex h-100"
                                                                 href="#">{{ trans('language.Home') }}</a></li>
                      <li class="nav-item align-items-center"><a class="nav-link align-items-center d-flex h-100"
                                                                 href="#about">{{ trans('language.About') }}</a></li>
                      <li class="nav-item align-items-center"><a class="nav-link align-items-center d-flex h-100"
                                                                 href="#cmc">{{ trans('language.CMC Riyadh') }}</a></li>
                      <li class="nav-item align-items-center"><a class="nav-link align-items-center d-flex h-100"
                                                                 href="#news">{{ trans('language.News') }}</a></li>
                      <li class="nav-item align-items-center"><a class="nav-link align-items-center d-flex h-100"
                                                                 href="#careers">{{ trans('language.Careers') }}</a></li>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-6 align-self-center align-items-center">
                  <div class="lead contact-information py-1 text-left">{{ trans('language.Head Office') }} :&ensp;&ensp;{!! $contacts->address!!}</div>
                  <div class="lead contact-information text-left">{{ trans('language.Telephone') }} :&ensp;&ensp;&ensp;{!! $contacts->phone!!}</div>
                  <div class="lead contact-information py-1 text-left">{{ trans('language.Fax') }} :&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;{!! $contacts->fax !!}</div>
              </div>