@extends('admin.layout.dashboard')


@section('contentpages')

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Careers</h3>
            </div>
            
            <form role="form" action="{{ route('careers.store')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <div class="col-md-6">
                  {{-- english --}}
                  <h4>Add English Content </h4>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="box-body">
                                  <label for="editor1" class="">Description</label>
                                  <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="description"></textarea>
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
                                  <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="paragraph"></textarea>
                                  </div>
                              <!-- /.box -->
                           </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6" dir="rtl">
                        {{-- arabic --}}
                        <h4>إضافة بانر عربي</h4>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="box-body">
                                  <label for="editor1" class="">الوصف</label>
                                  <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArDescription"></textarea>
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
                                  <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArParagraph"></textarea>
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
                                      <input id="editor1111" type="text" class="form-control" placeholder="email"  name="email"/>
                                      </div>
                                  <!-- /.box -->
                                </div>
                              </div>
                          </div>
                    <div class="col-md-12">
                          <div class="box-footer text-center">
                            <button type="submit" class="btn btn-info btn-lg">Submit</button>
                          </div>                          
                      </div>
                      </div>
                      </div>
                   </form>
              </div>
          </div>
      </div>
                    
                    @endsection
                    
                    
                    
                    
                    