<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <div class="text-center">

    <br>
<h1>{{ date('Y-m-d')}} </h1>

<br>
<div>
        <div class="row">
         <div class="col-md-12">

@foreach($errors->all() as $error)

         <div class="alert alert-danger" role="alert">
             {{$error}}
         </div>

@endforeach

<form method="post" action="/saveTask">
{{csrf_field()}}

<input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
   </br>


    <input type="submit" class="btn btn-primary" value="SAVE" >
    

</form>
    <table class="table table">
      <th></th>
      <th></th>
      <th></th>
      <th></th>


    @foreach($tasks as $task)
            <tr>
                <td>
                    <input type="hidden" name="id" value="{{$task->id}}"/>
                </td>

                <td>
                @if(!$task->iscompleted)
                    <a href="/markascompleted/{{$task->id}}" class="btn btn-outline-light"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-square" fill="red" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
</svg> </a>
                @else
             <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-outline-light"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-exclamation-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
</svg></a>
             @endif
                </td>

                <td>
                    {{$task->task}}
                </td>
              
                <td>
                    <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                </td>

            </tr>
              
    @endforeach

     
            </div>
        </div>

        
    </div> 

    
    <a href = 'delete/{{ $task->id }}'>Delete</a>
    </div> 