@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Sliders</h3>
    
                </div>
                <!-- /.box-header -->
    
    
    
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>#ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
    
                      <th>Action</th>
                      
                    </thead>
                    @foreach($slider as $slider)
                    <tr>
                      <tbody>
                      <td>{{$slider->id}}</td>
                      <td>
                        <div>{!!$slider->title!!}</div>
                        <div>{!!$slider->getTranslation('title', 'ar')!!}</div>

                      </td>
                      <td id=''>
                        <div>{!! $slider->content!!}</div>
                        <div>{!! $slider->getTranslation('content', 'ar')!!}</div>

                      </td>
                      <td ><img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/sliders/'. $slider->image) }}" alt="Card image cap" /></td>
                      
    
                      
                      <td>
                        <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-success">Edit</a> <br/>

                          &nbsp
                          <form action="{{route('slider.destroy', $slider->id)}}" method="POST" >
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="btn btn-danger">Delete</button>
                          </form>
                    </td>
                      
                    </tbody>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          </div>


@endsection