@extends('admin.layout.dashboard')



@section('contentpages')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Careers</h3>
        </div>
        
        <form role="form" action="{{ route('careers.update', $careers->id)}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PATCH" />
          <div class="col-md-6">
              {{-- english --}}
              <h4>Edit English Content </h4>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="box-body">
                              <label for="editor1" class="">Description</label>
                              <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="desc">{{$careers->paragraph1}}</textarea>
                              </div>
                          <!-- /.box -->
                       </div>
                    </div>
                  </div>
        
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="box-body">
                              <label for="editor" class="">Paragraph</label>
                              <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="parag">{{$careers->paragraph2}}</textarea>
                              </div>
                          <!-- /.box -->
                       </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6" dir="rtl">
                    {{-- arabic --}}
                    <h4>تعديل المحتوي العربي</h4>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="box-body">
                              <label for="editor1" class="">الوصف</label>
                              <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArDesc">{{$careers->getTranslation('paragraph1', 'ar')}}</textarea>
                            </div>
                            <!-- /.box -->
                          </div>
                        </div>
                      </div>
                 
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="">
                              <label for="editor" class="">المحتوي</label>
                              <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArParag">{{$careers->getTranslation('paragraph2', 'ar')}}</textarea>
                            </div>
                            <!-- /.box -->
                          </div>
                        </div>
                      </div>

                    </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="box-body">
                                  <label for="editor1111" class="">Email</label>
                                  <input id="editor1111" type="text" class="form-control" placeholder="email"  name="email"/ value="{{$careers->email}}">
                                  </div>
                              <!-- /.box -->
                            </div>
                          </div>
                      </div>
                <div class="col-md-12">
                      <div class="box-footer text-center">
                        <button type="submit" class="btn btn-info btn-lg">Save</button>
                      </div>                          
                  </div>
                  </div>
                  </div>
               </form>
          </div>
      </div>
  </div>

@endsection

  