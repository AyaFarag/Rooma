@extends('admin.layout.dashboard')


@section('contentpages')

<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">News</h3>
        </div>
        
        <form role="form" action="{{ route('news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PATCH" />
          <div class="col-md-6">
              {{-- english --}}
                <h4>Edit English Content</h4>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                            <label for="editor11" class="">Title</label>
                            <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="Title" rows="1" cols="" name="title">{{$news->title}}</textarea>
                            </div>
                        <!-- /.box -->
                     </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                            <label for="editor1" class="">Content</label>
                            <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="content">{{$news->content}}</textarea>
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
                          <label for="editor11" class="">العنوان</label>
                          <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="Title" rows="1" cols="" name="ArTitle">{{$news->getTranslation('title', 'ar')}}</textarea>
                          </div>
                      <!-- /.box -->
                   </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                      <div class="box-body">
                          <label for="editor1" class="">الوصف</label>
                          <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArContent">{{$news->getTranslation('content', 'ar')}}</textarea>
                          </div>
                      <!-- /.box -->
                   </div>
                </div>
              </div>
            </div>
  
              <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" id="exampleInputFile" name="image" >
  
                    <p class="help-block">Image must be 1100px * 900px</p>

                    <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/news/'. $news->image) }}" alt="Card image cap" />
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
