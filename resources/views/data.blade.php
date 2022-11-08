<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="{{asset('css/datatable.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.3.0-beta.1/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
</head>
<body>
    <button id="dd" class="edit btn btn-primary btn-sm openMenu">excel</button>
    {{g()}}{{a(10)->description}}
    @foreach($userData as $data)
    <div class="modal fade" id="editModal{{$data->id}}" role="dialog" aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog modal-lg">
           <div class="modal-content w3-square">
              <div class="modal-header">
                 <h5 class="modal-title text-blue">Add Data</h5>
                 <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                 <div class="w3-container col-md-12" style="background-color: #fff;">
                    <form class="form-horizontal" method="post" action="{{route('editData')}}" role="form" enctype="multipart/form-data" style="background-color: #fff;">
                       {{ csrf_field() }}
                       <div class="table-responsive">
                       <table class="table-all align-items-center col-sm-12" style="width: 93%; margin-left: 5%;">
                          <tr colspan="2">
                             <td class="w3-mobile" style="width: 50%;">
                                <div class="form-group">
                                   <label for="company-name" class="col-sm-10 control-label" style="text-align: left;">Title<font color="red" size="2">*</font></label>
                                   <div class="w3-mobile">
                                      <input type="text" name="title" value="{{$data->title}}" id="title" placeholder="Title" class="form-control col-sm-10" required="required" autofocus>
                                   </div>
                                </div>
                             </td>

                             <td class="w3-mobile">
                                <div class="form-group">
                                   <label for="company-type" class="col-sm-10 control-label" style="text-align: left;">Description<font color="red" size="2">*</font></label>
                                   <div class="w3-mobile">
                                    <input type="text" name="description"  value="{{$data->description}} "id="title" placeholder="description" class="form-control col-sm-10" required="required" autofocus>

                                   </div>
                                </div>
                             </td>
                          </tr>

                          <tr>
                             <td colspan="2">
                                <div class="form-group">
                                   <div class="col-sm-6">
                                      <span class="help-block pull-right">( <font color="red" size="3">*</font> ) Required fields</span>
                                   </div>
                                </div>
                             </td>
                          </tr>
                       </table>
                    </div>
                       <div class="modal-footer">
                        <input type="hidden" name="userid" value="{{$data->id}}" />
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary py-2 px-4" />
                          <button type="button" class="btn btn-primary py-2 px-4" data-dismiss="modal">Close</button>
                       </div>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
@endforeach    <nav>
     <div class="logo">Anuj</div>
    <div class="openMenu"><i class="fas fa-bars"></i></div>
    <ul class="mainMenu">
    <li><a href="javacript:void()">anuj</a></li>
    <li><a href="javacript:void()">anuj</a></li>
    <li><a href="javacript:void()">anuj</a></li>
    <li><a href="javacript:void()">anuj</a></li>
    <div class="closeMenu"><i class="fas fa-times-circle"></i></div>
    <span class="icons">
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-instagram-square"></i>
    </span>
</ul>
</nav>

    <div class="container-fluid">

        <h1>learn learn learn ......</h1>
        <table class="table table-bordered data-table" id="ts">
            <thead>
                <tr>

                    <th>title</th>
                    <th>description</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog modal-lg">
           <div class="modal-content w3-square">
              <div class="modal-header">
                 <h5 class="modal-title text-blue">Add Data</h5>
                 <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                 <div class="w3-container col-md-12" style="background-color: #fff;">
                    <form class="form-horizontal" method="post" action="{{route('addData')}}" role="form" enctype="multipart/form-data" style="background-color: #fff;">
                       {{ csrf_field() }}
                       <div class="table-responsive">
                       <table class="table-all align-items-center col-sm-12" style="width: 93%; margin-left: 5%;">
                          <tr colspan="2">
                             <td class="w3-mobile" style="width: 50%;">
                                <div class="form-group">
                                   <label for="company-name" class="col-sm-10 control-label" style="text-align: left;">Title<font color="red" size="2">*</font></label>
                                   <div class="w3-mobile">
                                      <input type="text" name="title" id="title" placeholder="Title" class="form-control col-sm-10" required="required" autofocus>
                                   </div>
                                </div>
                             </td>

                             <td class="w3-mobile">
                                <div class="form-group">
                                   <label for="company-type" class="col-sm-10 control-label" style="text-align: left;">Description<font color="red" size="2">*</font></label>
                                   <div class="w3-mobile">
                                    <input type="text" name="description" id="title" placeholder="description" class="form-control col-sm-10" required="required" autofocus>

                                   </div>
                                </div>
                             </td>
                          </tr>

                          <tr>
                             <td colspan="2">
                                <div class="form-group">
                                   <div class="col-sm-6">
                                      <span class="help-block pull-right">( <font color="red" size="3">*</font> ) Required fields</span>
                                   </div>
                                </div>
                             </td>
                          </tr>
                       </table>
                    </div>
                       <div class="modal-footer">
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary py-2 px-4" />
                          <button type="button" class="btn btn-primary py-2 px-4" data-dismiss="modal">Close</button>
                       </div>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <script type="text/javascript">
        $(function () {

          var table = $('.data-table').DataTable({


         "dom": 'lBfrtip',

              processing: true,
              serverSide: true,


              "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ],
              ajax: "{{ route('users.index') }}",


              columns: [

                  {data: 'title', name: 'title'},
                  {data: 'description', name: 'description'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]

          });

        });

      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
      function delete_data(id){

        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {

  if (result.isConfirmed) {
    $.ajax({
        url: "{{URL::to('/delete-data')}}/" + id,
        datatype: "JSON",
        type: "Get",
        success: function(data) {
            // console.log(data);
            window.location.reload();

        }
    });


    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});



}




// $.ajax({
//         url: "{{URL::to('/admin/review/delete-review')}}/" + id,
//         datatype: "JSON",
//         type: "Get",
//         success: function(data) {
//             // location.reload();
//         }
//     });
// const mainMenu = document.getElementsByClassName(mainMenu);
// const closeMenu = document.getElementsByClassName(closeMenu);
// const openMenu = document.getElementsByClassName(openMenu);


// openMenu.addEventListener('click', show);
// closeMenu.addEventListener('click', close);

//  function show(){
// alert('kk');
//      mainMenu.style.display='flex';
//      mainMenu.style.top='0';
//  }
//  function close(){
//      alert('ll');
//      mainMenu.style.top='-100%';

//  }

</script>

</body>
</html>
