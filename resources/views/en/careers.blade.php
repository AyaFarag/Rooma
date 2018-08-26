

<sections class="backimg w-100 pb-0 d-inline-block" id="careers">
    <section class="careers mt-0">
        <h1 class="text-center pt-3 pb-0 m-0"><strong>{{ trans('language.Careers') }}</strong></h1>
        <div class="col-12 m-0 text-center career-container px-5">
            <p class="lead pi-draggable text-center text-dark text-capitalize w-50 my-0 mx-auto pb-4 pt-4">{!! $careers->paragraph1!!}</p> 
                <p>{!! $careers->paragraph2 !!}</p>
            <a class="btn btn-primary text-center mx-auto mb-4" href="#" draggable="true">{!! $careers->email !!}</a>
        </div>
    </section>
</sections>