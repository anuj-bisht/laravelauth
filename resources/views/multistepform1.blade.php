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
    <link href="{{asset('css/multistepform1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
</body>
<div class="container box">
    <br/>
    <form action="post" id="register_form">
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a  class="nav-link active_tab1"  style="border:1px solid #ccc" id="list_login_details">Login Details</a>
    </li>
    <li class="nav-item">
        <a  class="nav-link inactive_tab1"  style="border:1px solid #ccc" id="list_personal_details">Personal Details</a>
    </li>
    <li class="nav-item">
        <a  class="nav-link inactive_tab1"  style="border:1px solid #ccc" id="list_contact_details">Contact Details</a>
    </li>

</ul>
<div class="tab-content" style="margin-top:16px;">
<div class="tab-pane active" id="login_details">
    <div class="panel panel-default">
    <div class="panel-heading">Login Details</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="">Enter Email Address</label>
            <input type="text" name="email" id="email" class="form-control" />
            <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="">Enter Password</label>
            <input type="password" name="password" id="password" class="form-control" />
            <span id="error-password" class="text-danger"></span>
        </div>
        <br/>
        <div align="center">
            <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br/>
    </div>
</div>
</div>
<div class="tab-pane fade" id="personal_details">
    <div class=" panel panel-default">
        <div class="panel-heading">Fill Personal Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="">Enter First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" />
                <span id="error_first_name" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="">Enter Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" />
                <span id="error_last_name" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="male" checked>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female" checked>Female
                </label>
            </div>
            <br/>
            <div align="center">
                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
            </div>
            <div >
                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
            </div>
            <br/>
        </div>
    </div>
</div>



<div class="tab-pane fade" id="contact_details">
    <div class="panel panel-default">
        <div class="panel-heading">Fill Contact Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="">Enter Address</label>
                <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
                <span id="error_address" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="">Enter Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" />
                <span id="error_last_name" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="">Enter Mobile No.</label>
                <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                <span id="error_mobile_no" class="text-danger"></span>
            </div>
            <br/>
            <div align="center">
                <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
            </div>
            <div >
                <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-info btn-lg">Register</button>
            </div>
            <br/>
        </div>
    </div>
</div>
</div>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#btn_login_details').click(function(){
        var error_email='';
        var error_password="";
        var filter=
        /^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if($.trim($('#email').val()).length==0)
        {
            error_email="Email is Required";
            $('#error_email').text('error_email');
            $('#error_email').addClass('has-error');

        }
        // else{
        //       if(!filter.test($('#email').val()))
        //       {
        //         error_email="Invalid Email";
        //     $('#error_email').text('error_email');
        //     $('#email').addClass('has-error');
        //       }
        //       else{
        //         error_email="";
        //     $('#error_email').text('error_email');
        //     $('#email').removeClass('has-error');
        //       }
        // }
        if($.trim($('#password').val()).length==0)
        {
            error_password="Password is required";
            $('#error_password').text('error_password');
            $('#password').addClass('has-error');
        }else{
            error_password="";
            $('#error_password').text('error_password');
            $('#password').removeClass('has-error');
        }
        if(error_email !='' || error_password != ''){
return false;
        }
        else{
            $('#list_login_details').removeClass('active active_tab1');
            $('#list_login_details').removeAttr('href data-toggle');
            $('#login_details').removeClass('active ');
            $('#list_login_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').removeClass('fade');

            $('#personal_details').addClass('active in');



        }
    });
    $('#previous_btn_personal_details').click(function(){
        $('#list_personal_details').removeClass('active active_tab1')
        $('#list_personal_details').removeAttr('href data-toggle');
        $('#personal_details').removeClass('active in');
        $('#list_personal_details').addClass('inactive_tab1');
        $('#list_login_details').removeClass('inactive_tab1');
        $('#list_login_details').addClass('active_tab1 active');
        $('#list_login_details').attr('href', '#login_details');
        $('#list_login_details').attr('data-toggle', 'tab');
        $('#login_details').removeClass('fade');

        $('#login_details').addClass('active in');
    });

 $('#btn_personal_details').click(function(){
         var error_first_name='';
         var error_last_name='';
  if($.trim($('#first_name').val()).length==0){
      error_first_name='First name is required';
      $('#error_first_name').text('error_first_name');
      $('#first_name').addClass('has-error');
        }
        else{
            error_first_name="";
            $('#error_first_name').text('error_password');
            $('#first_name').removeClass('has-error');
        }
        if($.trim($('#last_name').val()).length==0){
      error_last_name='last name is required';
      $('#error_last_name').text('error_last_name');
      $('#last_name').addClass('has-error');
        }
        else{
            error_last_name="";
            $('#error_last_name').text('error_password');
            $('#last_name').removeClass('has-error');
        }
        if(error_first_name !='' || error_last_name !=''){
            return false
        }
        else{
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active ');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_contact_details').removeClass('inactive_tab1');
            $('#list_contact_details').addClass('active_tab1 active');
            $('#list_contact_details').attr('href', '#contact_details');
            $('#list_contact_details').attr('data-toggle', 'tab');
            $('#contact_details').removeClass('fade');

            $('#contact_details').addClass('active in');
        }



 });
 $('#previous_btn_contact_details').click(function(){
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active ');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#contact_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').removeClass('fade');

            $('#personal_details').addClass('active in');
 });
$('#btn_contact_details').click(function(){
var error_address='';
var error_mobile_no='';
var mobile_validation=/^\d{10}$/;
if($.trim($('#address').val()).length==0)
{
    error_address='Address is required';
      $('#error_address').text('error_address');
      $('#address').addClass('has-error');
}
else{
    error_address='';
      $('#error_address').text('error_address');
      $('#address').addClass('has-error');
}

if($.trim($('#mobile_no').val()).length==0)
{
    error_mobile_no='Mobile Number Is required';
      $('#error_mobile_no').text('error_mobile_no');
      $('#mobile_no').addClass('has-error');
}else{
    if(!mobile_validation.test($('#mobile_no').val()))
    {
        error_mobile_no='Invalid Mobile Number';
      $('#error_mobile_no').text('error_mobile_no');
      $('#mobile_no').addClass('has-error');
    }else{
        error_mobile_no='';
      $('#error_mobile_no').text('error_mobile_no');
      $('#mobile_no').removeClass('has-error');
    }
}
if(error_address !='' || error_mobile_no !='')
{
    return false;
}
else{
    $('#btn_contact_details').attr('disabled', 'disabled');
    $(document).css('cursor', 'progress');
    $('#register_form').submit();
    alert('your data is submitted');
}
});

    </script>

</html>
