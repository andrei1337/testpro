@extends('inc.layout')
@section('content')
    <div class = "container">
        <form id = "form">
            <h1>Create Player</h1>
            <div class="form-group">
                <label>Player Name</label>
                <input type="text" class="form-control" id = "name" placeholder="Enter Player Name" name="name">
            </div>
            <div class="form-group">
                <label>Player Salary</label>
                <input type="text" class="form-control" id = "salary" placeholder="Enter Player Salary" name="salary">
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
                    url:'http://tema4api/players/create',
                    data: $("#form").serialize(),
                    success: function(data){
                        window.location = "http://tema4laravel/players/"
                    },
                    error: function(data){

                    }
                })
            });
        });
  </script>
@endsection