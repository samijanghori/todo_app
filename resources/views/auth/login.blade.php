@extends('layout.auth')

@section('style')
<style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
@endsection
</style>
@section('content')
<main class="form-signin w-100 m-auto"> 
    <form method="post" action="{{route('login.post')}}"> 
      @csrf
        <img class="mb-4" src="{{asset('assets\img\1.svg')}}" alt="" width="72" height="57"> 
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

         <div class="form-floating"> 
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> 
          <label for="floatingInput">Email address</label>
           @error('email')
                <span class="text-danger" >{{ $message }}</span>
            @enderror
         </div> 

         <div class="form-floating"> 
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"> 
          <label for="floatingPassword">Password</label> 
          @error('password')
                <span class="text-danger" >{{ $message }}</span>
            @enderror
        </div> 

        <div class="form-check text-start my-3"> 
            <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"> 
            <label class="form-check-label" for="checkDefault">Remember me</label> 
        </div> 
@if (session('success'))
            <div class="alert alert-success" >
              {{session('success')}}
            </div>
        @endif
           @if (session('error'))
            <div class="alert alert-danger" >
              {{session('error')}}
            </div>
        @endif
<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button> 
<a href="{{route('register')}}">don't have an accout?(create account)</a>
<p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p> 
</form> 
</main>
    
@endsection