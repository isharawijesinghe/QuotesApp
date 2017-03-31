@extends('layouts.master')
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@section('title')
    home
@endsection

@section('content')
   <div class="centered">
       @foreach($actions as $action)
<a href="{{route('niceaction',['action'=>lcfirst($action->name)])}}">{{$action->name}}</a>
           @endforeach

       <br>

       @if(count($errors)>0)
           <div>
               <ul>
                   @foreach($errors->all() as $error)
                      <li> {{$error}}</li>
                       @endforeach
               </ul>
           </div>
       @endif
       <form action="{{ route('add') }}" method="post">
           <label>Name of Action</label>
           <input type="text" name="name" id="name">
           <label>Niceness :</label>
           <input type="text" name="niceness" id="niceness">
           <button type="submit" onclick="send(event)">Do a nice action</button>
           <input type="hidden" value="{{Session::token()}}" name="_token">
       </form>
       <br> <br> <br>
       <ul>
           @foreach($logged_actions as $logged_action)
               <li>{{$logged_action->nice_action->name  }}
               @foreach($logged_action->nice_action->categories as $category)
                   {{$category->name}}
                   @endforeach

               </li>
               @endforeach


       </ul>

       {!! $logged_actions->links() !!}

       <script type="text/javascript">
           function send(event) {
event.preventDefault();
               $.ajax({
                   type:"POST",
                   url:"{{route('add')}}",
                   data:{name: $("#name").val(),niceness: $('#niceness').val(),_token: '{{Session::token()}}'}

               });
           }
       </script>
   </div>

@endsection