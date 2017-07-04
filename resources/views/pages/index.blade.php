
@extends('main')

@section('title' , 'Home')

@section('content')

<!-- Custom Css Files -->
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">


<div class="container">
    <div class="row">
    <div class="col-md-2">
    <div class="form-group">
            <form action="#">
                <textarea name="" id="Task" cols="120" rows="1" placeholder="Add a Task ..."></textarea>
                <abutton class="btn btn-primary" type="button" onclick="toDoApp()">Add Task</button> 
            </form>
            </div>
            
       
       <h2>Task List</h2>
       <div id ="toDoApp">
      
    
    </div>
        
            <!-- List of available Task -->
        
        </div>

    </div>
</div>

<!-- To Do App Scripts -->
 <script src="{{ URL::asset('js/toDoApp.js') }}"></script>
@endsection