@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Contacts</h3>
    
                </div>
                <!-- /.box-header -->
    
    
    
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>#ID</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Fax</th>
                      <th>Action</th>
                      
                    </thead>
                    
                    <tr>
                      <tbody>
                      <td>{{$contactus->id}}</td>
                      <td>{!!$contactus->address!!}</td>
                      <td id=''>{!! strip_tags($contactus->phone)!!}</td>
                      <td id=''>{!! strip_tags($contactus->fax)!!}</td>
                      <td>
                        <a href="{{route('contactus.edit', $contactus->id)}}" class="btn btn-success">Edit</a> <br/>

                          &nbsp
                          <form action="{{route('contactus.destroy', $contactus->id)}}" method="POST" >
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