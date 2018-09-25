@extends ('inc.layout')
@section ('content')
    <div class = "container">
        <form id = "form">
            <h1>Update Player</h1>
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
            $('#form').on('submit', function(e){
                e.preventDefault();
                var url_string = window.location.href;
                var url = new URL(url_string);
                var id = url.searchParams.get("id");
                var formData = $("#form").serialize();

                $.ajax({
                    type: "PUT",
                    url: "http://tema4api/players/update/" + id,
                    data: formData,
                    success: function(data){ 
                        window.location = "http://tema4laravel/players/"
                    },
                });
            });
        </script>
@endsection