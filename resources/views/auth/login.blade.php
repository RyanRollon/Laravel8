@extends('layouts.app')



@section('design')
<style>
 .login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.ryan{
    margin-top: 15px;
    margin-left: 90px;
}

</style>
@endsection

@section('content')

    <div class="login-form">
      @if(session('status'))
          {{ session('status') }}
      @endif



     <form action="{{  route('login') }}" method="post">
        @csrf
        <h2 class="text-center">LOGIN</h2>       
        <div class="form-group" style="padding-top:15px">
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
            @error('email')
            <h6 style="color:red"> {{ $message }}</h6>
          @enderror
        </div>
        
        <div class="form-group" style="padding-top:15px">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
            @error('password')
            <h6 style="color:red"> {{ $message }}</h6>
          @enderror
        </div>

        <div class="form-check" style="padding-top:15px; margin-left:60px">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block ryan">Login</button>
        </div>
      </form> 
    </div>
 
@endsection
