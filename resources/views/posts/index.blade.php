@extends('layouts.app')



@section('design')
<style>
.comment-wrapper{
  padding-left:100px;
  padding-right:100px;
  
}


</style>
@endsection

@section('content')
<div class="container my-5 py-3 px-5">
        <div class="comment-wrapper">
                <div class="panel">
                    <textarea class="form-control" placeholder="Write a comment..." rows="4"></textarea>
                    <br>
                    <button type="button" class="btn btn-info pull-right">Post</button> 
                </div>
        </div>
  
</div>
@endsection