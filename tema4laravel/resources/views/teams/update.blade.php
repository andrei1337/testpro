@extends ('inc.layout')
@section ('content')
    <div class = "container">
        <form id = "form">
            <h1>Update Team</h1>
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
            $('#form').on('submit', function(e){
                e.preventDefault();
                var url_string = window.location.href;
                var url = new URL(url_string);
                var id = url.searchParams.get("id");
                var formData = $("#form").serialize();

                $.ajax({
                    type: "PUT",
                    url: "http://tema4api/teams/update/" + id,
                    data: formData,
                    success: function(data){ 
                        window.location = "http://tema4laravel/teams/"
                    },
                });
            });
        </script>
@endsection