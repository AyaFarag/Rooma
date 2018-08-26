@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> History</h3>

    
                </div>
                <!-- /.box-header -->
    
    
    
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>#ID</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Action</th>
                    </thead>
                    
                    <tr>
                      <tbody>
                      <td>{{$history->id}}</td>
                      <td>{!!$history->content!!}</td>
                      <td ><img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/history/'. $history->image) }}" alt="Card image cap" /></td>
                      
    
                      
                      <td>
                        <a href="{{route('history.edit', $history->id)}}" class="btn btn-success">Edit</a> <br/>
                          &nbsp
                          <form action="{{route('history.destroy', $history->id)}}" method="POST" >
                                {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                     </tbody>
                  </tr>
              </table>
          </div>
      </div>
      <!-- /.box-body -->
   </div>
    
    <!-- /.box -->
    
</div>
</div>


@endsection