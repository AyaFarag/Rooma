@extends('admin.layout.dashboard')

  
@section('contentpages')

<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
  
        <div class="box-header with-border">
          <h3 class="box-title">Contacts</h3>
        </div>
        <form role="form" action="{{ route('contactus.update', $contactus->id)}}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PATCH" />
            <div class="col-md-6">
              {{-- english --}}
            <h4>Edit English Content </h4>
            <div class="form-group">
              <div class="row">
                  <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor1" class="">Address</label>
                        <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="address" rows="1" cols="" name="address">{{$contactus->address}}</textarea>
                    </div>
                  </div>
                </div>
            </div>
              
            <div class="form-group">
              <div class="row">
                  <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor" class="">Phone</label>
                        <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="phone" rows="1" cols="" name="phone">{{$contactus->phone}}</textarea>
                        </div>
                  
                  </div>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="row">
                  <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor1111" class="">Fax</label>
                        <textarea id="editor1111" type="text" class=" ckeditor form-control" placeholder="fax" rows="1" cols="" name="fax">{{$contactus->fax}}</textarea>
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
                    <label for="editor1" class="">العنوان</label>
                    <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="address" rows="1" cols="" name="ArAddress">{{$contactus->getTranslation('address', 'ar')}}</textarea>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </div>
            {{--    --}}
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                    <label for="editor" class="">الجوال</label>
                    <textarea id="editor" type="text" class=" ckeditor form-control" placeholder="phone" rows="1" cols="" name="Arphone">{{$contactus->getTranslation('phone', 'ar')}}</textarea>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </div>
            {{--    --}}
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                    <label for="editor1111" class="">الفاكس</label>
                    <textarea id="editor1111" type="text" class=" ckeditor form-control" placeholder="fax" rows="1" cols="" name="Arfax">{{$contactus->getTranslation('fax', 'ar')}}</textarea>
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </div>
          </div>
  
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info btn-lg">Save</button>
          </div>
        </form> 
  
      </div>
    </div>  
  </div>

@endsection

   