@extends('layout.default')
@section('content')
<div class="d-flex align-items-center" >  
  <div class="container card shadow-sm" style="max-width: 500px; margin-top : 100px;">
    <div class="fs-3 fw-bold text-center" >Add new task</div>
    <form action="" class="p-3" method="post" action="{{route('task.add.post')}}">
      @csrf
        <div class="mb-3">
          <input name="title" type="text" class="form-control"  >
        </div>
        <div class="mb-2">
            <input class="form-control" type="datetime-local" name="deadline">
        </div>
         <div class="mb-3">
          <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <button class="btn btn-success" >Submit</button>
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
    </form>
</div>
</div>
@endsection