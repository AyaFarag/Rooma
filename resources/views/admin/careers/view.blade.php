@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Careers</h3>
    

    
                </div>
                <!-- /.box-header -->
    
    
    
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>#ID</th>
                      <th>Description</th>
                      <th>Paragraph</th>
                      <th>Email</th>
                      <th>Action</th>
                      
                    </thead>
                    
                    <tr>
                      <tbody>
                      <td>{{$careers->id}}</td>
                      <td>{!!$careers->paragraph1!!}</td>
                      <td id=''>{!! strip_tags($careers->paragraph2)!!}</td>
                      <td id=''>{!! strip_tags($careers->email)!!}</td>
                      
                      
    
                      
                      <td>
                        <a href="{{route('careers.edit', $careers->id)}}" class="btn btn-success">Edit</a> <br/>

                          &nbsp
                          <form action="{{route('careers.destroy', $careers->id)}}" method="POST" >
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