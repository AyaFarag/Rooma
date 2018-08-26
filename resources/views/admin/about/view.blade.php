@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> About us</h3>
    
    
                </div>
                <!-- /.box-header -->
    
    
    
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>#ID</th>
                      <th>Content</th>
                      <th>Title</th>
                      <th>Description</th>
                      
                      <th>Action</th>
                      
                    </thead>
                    
                    <tr>
                        <tbody>
                      <td>{{$about->id}}</td>
                      <td >{!! strip_tags($about->content)!!}</td>
                      <td>{!!$about->title!!}</td>
                      <td id=''>{!! strip_tags($about->description)!!}</td>
                      
    
                      
                      <td>
                        <a href="{{route('about.edit', $about->id)}}" class="btn btn-success">Edit</a> <br/>

                          &nbsp
                          <form action="{{route('about.destroy', $about->id)}}" method="POST" >
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="btn btn-danger">Delete</button>
                          </form>
                    </td>
                      
                    </tbody>
                    </tr>
                   
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
          </div>


@endsection