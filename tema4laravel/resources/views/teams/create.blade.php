@extends('inc.layout')
@section('content')
    <div class = "container">
        <h1>Add Team</h1>
        <form id = "form">
            <div class="form-group">
                <label>Team Name</label>
                <input type="text" class="form-control" id = "name" placeholder="Enter Team Name" name="name">
            </div>
            <div class="form-group">
                <label>Team Location</label>
                <input type="text" class="form-control" id = "teamlocation" placeholder="Enter Team Location" name="teamLocation">
            </div>
            <input type = "submit" value = "Submit" class = "btn btn-primary" id = "submitBtn">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    $(function(){
            $('#submitBtn').on('click', function(e){
                console.log($("#form").serialize());
                $.ajaxSetup({
                    header:$('meta[name="_token"]').attr('content')
                })
                e.preventDefault(e);

                    $.ajax({

                    type:"POST",
                    url:'http://tema4api/teams/create',
                    data: $("#form").serialize(),
                    success: function(data){
                        window.location = "http://tema4laravel/teams/"
                    },
                    error: function(data){

                    }
                })
            });
        });
  </script>
@endsection