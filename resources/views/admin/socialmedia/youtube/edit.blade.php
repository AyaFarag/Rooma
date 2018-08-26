@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Youtube</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('youtube.update', $youtube->id)}}" method="POST" >
            {{ csrf_field() }}
          <div class="box-body">
              <div class="form-group">
                  <div class="row">
                      <div class="col-md-8">
                        <div class="box-body">
                            <label for="editor1" class="">Edit Link</label>
                            <input type="hidden" name="_method" value="PATCH" />
                            <textarea id="editor1" type="text" class=" form-control" placeholder="content" rows="1" cols="" name="link">{{$youtube->youtube_link}}</textarea>
                            </div>
                        <!-- /.box -->
                     </div>
                  </div>
                </div>
            {{--    --}}
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

      @endsection