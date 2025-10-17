@extends('layout.default')
@section('content')

<main class="flex-shrink-0 mt-5"> 
    <div class="container">
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
            <p>Hello</p>
            <div class="my-3 p-3 bg-body rounded shadow-sm"> 
              <h6 class="border-bottom pb-2 mb-0">Suggestions</h6> 
              @foreach ($tasks as $task)
                <div class="d-flex text-body-secondary pt-3"> 
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 12l14 0" />
                <path d="M13 18l6 -6" />
                <path d="M13 6l6 6" />
              </svg> 
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100"> 
                <div class="d-flex justify-content-between"> 
                  <strong class="text-gray-dark">{{$task->title}} | {{$task->deadline}} </strong>
                   <a href="{{route('task.status.update',$task->id)}}" class="btn btn-success">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                  </a> 
                  <a href="{{route('task.delete',$task->id)}}" class="btn btn-danger">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-trash-x">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16zm-9.489 5.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" />
                      <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" />
                    </svg>
                  </a> 
                  </div> 
                  <span class="d-block">{{$task->description}}</span> 
                </div> 
              </div> 
              @endforeach
                 <small class="d-block text-end mt-3"> 
                {{ $tasks->links('pagination::bootstrap-5') }}
                </small>
               </div>
    </div> 
</main>

@endsection