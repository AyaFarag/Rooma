@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Twitter Link</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('twitter.store')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                  <div class="box-body">
                      <label for="editor1" class="">Twitter page link</label>
                      <textarea id="editor1" type="text" class="form-control" placeholder="Add page link" rows="3" cols="6" name="link"></textarea>
                      </div>
                  <!-- /.box -->
               </div>
            </div>
          </div>
          <!-- /.box-body -->



          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <th>#ID</th>
              <th>Link</th>                
              <th>Action</th> 
            </thead>
            <tr>
            <tbody>
                <td>{{$twitter->id}}</td>
                <td >{{$twitter->twitter_link}}</td>
                <td>
                <a href="{{route('twitter.edit', $twitter->id)}}" class="btn btn-success">Edit</a> <br/> &nbsp
                  <form action="{{route('twitter.destroy', $twitter->id)}}" method="POST" >
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
      <!-- /.box -->

      @endsection