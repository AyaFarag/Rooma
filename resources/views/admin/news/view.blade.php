@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> News </h3>
    

    
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
                    @foreach($news as $news)
                    <tr>
                      <tbody>
                      <td>{{$news->id}}</td>
                      <td>
                        <div>{!!$news->title!!}</div>
                        <div>{!!$news->getTranslation('title', 'ar');!!}</div>
                      
                      </td>
                      <td id=''>
                        <div>{!! $news->content!!}</div>
                        <span>{!!$news->getTranslation('content', 'ar')!!}</span>
                      </td>
                      <td ><img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/news/'. $news->image) }}" alt="Card image cap" /></td>
                      <td>
                        <a href="{{route('news.edit', $news->id)}}" class="btn btn-success">Edit</a> <br/>

                          &nbsp
                          <form action="{{route('news.destroy', $news->id)}}" method="POST" >
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