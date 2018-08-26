@extends('admin.layout.dashboard')


@section('contentpages')

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">CMC Riyadh</h3>
      </div>


    <form role="form" action="{{ route('history.store')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
        
              <div class="col-md-6">
                <h4>Add English Content</h4>
                    {{-- english --}}    
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                            <label for="editor11" class="">Content</label>
                            <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="content" rows="1" cols="" name="content"></textarea>
                            </div>
                        <!-- /.box -->
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="col-md-6" dir="rtl">
                {{-- arabic --}}
                <h4>إضافه المحتوي العربي</h4>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="box-body">
                            <label for="editor11" class="">المحتوي</label>
                            <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="content" rows="1" cols="" name="ArContent"></textarea>
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="box-body">
                    <label for="exampleInputFile">Slider Image</label>
                    <input type="file" id="exampleInputFile" name="image" >

                    <p class="help-block">Slider image must be 1100px * 900px</p>
                  </div>
                  </div>

                  
                  <div class="box-footer text-center">
                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                  </div>
        </form>

      </div>
     </div>
    </div>
 
  

  @endsection