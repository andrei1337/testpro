@extends('inc.layout')
@section('content')
      <div class = "content">
      <a href = "/players/create" class = "button btn btn-success">Add Player</a>

        <table id="players_id" class="display cell-border">
            <thead>
              <tr>
                <th>Name</th>
                <th>Salary</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </thead>
            
            <tbody>
            </tbody>
        </table>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
            $(document).ready( function () {
              var table = $('#players_id').DataTable(
                  {
                      "ajax":{
                          "url":"http://tema4api/players",
                          "dataSrc":""
                              },
                      "columns": [
                          { "data": "name" },
                          { "data": "salary" },
                          { "data" : "id",
                            "render": function ( data, type, row, meta ) {
                            return '<a class="btn btn-info delete-btn" data-id="'+ data +'">Delete</a>';
                          },
                        },

                        { "data" : "id",
                            "render": function ( data, type, row, meta ) {
                            return '<a class="btn btn-danger update-btn" data-id="'+ data +'">Update</a>';
                          },
                        },
                      ],
                      "lengthMenu": [[5, 10, -1], [5, 10, "All"]]
                  }
              );

                $('body #players_id').on('click', '.delete-btn', function(){
                var elementId = $(this).attr('data-id');

                $.ajax({
                    url: "http://tema4api/players/delete/" + elementId,
                    contentType:'application/json',
                    type: 'DELETE',
                    success: function(){
                        table.ajax.reload();
                    }
                });
            });
        });

        
            $('body #players_id').on('click', '.update-btn', function(){
                var elementId = $(this).attr('data-id');
                var url = "http://tema4laravel/players/update?id=" + elementId; 
                window.location.href = url;         
            });
    </script>
@endsection