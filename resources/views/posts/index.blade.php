@extends('layouts.app')


@section('design')
<style>
.container .panel{
  padding-left:50px;
  padding-top:50px;
  padding-right:50px;
  padding-bottom:50px;
}


</style>
@endsection

@section('content')
<div class="container my-5 py-5 px-5">
        <div class="row justify-content-center">
           <div class="col-sm-7 bg-dark">
                <div class="panel">
                    <form action="{{  route('posts.index') }}" method="post">
                          @csrf
                         <textarea class="form-control" name="body" id="body" placeholder="Write a comment..." rows="4"> 
                         </textarea>
                         @error('body')
                          <h6 style="color:red"> {{ $message }}</h6>
                          @enderror
                         <br>
                        <button type="submit" class="btn btn-info pull-right">Post</button> 
                      </form>
                     <br>
                    
                 @if ($posts->count())
                    @foreach ($posts as $post)
                      <div style="margin-top:10px">
                        <a href="" style="color:white; text-decoration:none"><b> {{ $post->user->name }} </b></a>
                        <span style="color:grey"> {{ $post->created_at->diffForHumans() }}</span>
                        
                        <p style="color:white">
                          <tr>
                           <td>{{ $post->body }}</td>
                          </tr>
                         </p>
                      </div>
                     @endforeach
                     
                 @else
                    
                    <h6 style="color:white"> There is no posts</h6>
                 @endif  
                 
                 {{ $posts->links() }}
                </div>
              
               
                
           </div>
         </div>
         
  
</div>

@endsection