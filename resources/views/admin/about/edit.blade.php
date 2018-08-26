@extends('admin.layout.dashboard')



@section('contentpages')
  <div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit About</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('about.update', $about->id)}}" method="POST" >
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH" />  
            {{-- english --}}
        <div class="col-md-6">
            <h4>Edit English Content</h4>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body">
                            <label for="editor1" class="">Content</label>
                            <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="content">{{$about->content}}</textarea>
                            </div>
                        <!-- /.box -->
                    </div>
                </div>
                </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor11" class="">Title</label>
                        <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="Title" rows="1" cols="" name="title">{{$about->title}}</textarea>
                        </div>
                    <!-- /.box -->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor1" class="">Description</label>
                        <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="description" rows="1" cols="" name="description">{{$about->description}}</textarea>
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
                            <label for="editor1" class="">المحتوي</label>
                            <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="content" rows="1" cols="" name="ArContent">{{$about->getTranslation('content', 'ar')}}</textarea>
                            </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
                
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box-body">
                        <label for="editor11" class="">العنوان</label>
                        <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="Title" rows="1" cols="" name="ArTitle">{{$about->getTranslation('title', 'ar')}}</textarea>
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
                        <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="description" rows="1" cols="" name="ArDescription">{{$about->getTranslation('description', 'ar')}}</textarea>
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
