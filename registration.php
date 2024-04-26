<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./assets/js/search.js"> </script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
   
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
         
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/plant.png" height="50">
            </a>
           

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    </li>
                    
                </ul>

            </div>
            
        </div>
    </nav>
   
    <div class="container-fluid mb-5">
        <p class="h1 mt-2">Registration</p>
        <p class="mt-2">You can Register here</p>
        <div class="card mt-2">
            <div class="card-header" style="text-align : center;">Register Now </div>
            <div class="card-body">

            <form action="./model/save.php/" method="POST">

                <!-- Alert --> 
                 <?php
                if (isset($_GET { 'success'})){
                    ?>
                    
                        <div class="alert alert-success">
                            <b>Successfully Registered : </b>Congrats !!!.. Thank You!!!
                        </div>
                        
                        <hr>
                        <?php
                } elseif (isset($_GET { 'invalid'})) {
                    ?>
                        <div class="alert alert-danger">
                            <b>Existed ID </b>. please try another ID ...Thank You!!
                        </div>
                        <hr>
                        <?php
                }
                ?> 

                <div class="row">
                    
                        <div class="col-md-4">
                            <label>ID : <b class="text-danger"></b>Any type of ID</label>
                            <input name="inp_ID" required type="text" placeholder="Enter Any ID..." class="form-control mt-2">
                        </div>
                      
                        <div class="col-md-4">
                            <label>First Name : <b class="text-danger"></b></label>
                            <input name="in_FName" required type="text" placeholder="Enter first name here..." class="form-control mt-2">
                        </div>
                      
                        <div class="col-md-4">
                            <label>Last Name : <b class="text-danger"></b></label>
                            <input name="inp_FName" required type="text" placeholder="Enter Last name here..." class="form-control mt-2">
                        </div>
                        
                        <div class="col-md-4">
                            <label>Middle Name : <b class="text-danger"></b></label>
                            <input name="inp_MName" required type="text" placeholder="Enter Middle name here..." class="form-control mt-2">
                        </div>
                        <div class="col-md-4">
                            <label>Contact # : <b class="text-danger"></b></label>
                            <input name="inp_Contact_Num" required type="text" placeholder="Enter Contact Number here..." class="form-control mt-2">
                        </div>

                         <!-- Gender -->
                    <div class="col-md-4 ">
                        <label>Gender <b class="text-danger"></b></label>
                        <select name="inp_Gender" required class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <!-- Gender -->

                        
                        <div class="col-md-6">
                            <label>Address : <b class="text-danger"></b></label>
                            <input name="inp_Address" required type="text" placeholder="Enter Address here..." class="form-control mt-2">
                        </div>
                       
                        
                        <div class="col-md-6">
                            <label>Gmail: <b class="text-danger"></b></label>
                            <input name="inp_Gmail" required type="text" placeholder="Enter Gmail here..." class="form-control mt-2">
                        </div>
                        
                        <?php
                include "./config/database.php";

                ?>
                    <!-- Address -->
                    <div class="row mt-3">
                    <div class="col-md-12">
                    <hr>
                    </div>
                    <div class="col-md-3">
                        <label>Region :<b class="text-danger">*</b></label>
                        <select name="inp_region" id="inp_region" onchange="display_province(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT REGION--</option>
                    <?php
                     $sql = "SELECT * FROM ph_region";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                 // output data of each row
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row["regCode"] ?>"><?= $row ["regDesc"] ?></option>
                    <?php
                  }
                     } else {
                     echo "0 results";
                     }
                     $conn->close();
                     ?>   
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>PROVINCE : <b class="text-danger">*</b></label>
                        <select name="inp_province" id="inp_province" onchange="display_citymun(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT PROVINCE--</option>
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>Municipality : <b class="text-danger">*</b></label>
                        <select name="inp_citymun" id="inp_citymun" onchange="display_brgy(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT MUNICIPALITY--</option>
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>Baranggay : <b class="text-danger">*</b></label>
                        <select name="inp_brgy" id="inp_brgy" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT BARANGGAY--</option>
                    </select>

                    </div>
                        
                </div>
            </form>
                <div class="card-footer">

            <button class="btn btn-success">
            Register Now!!
            </button>


</div>
                

               

</body>
<script>
    function display_province(regCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'region', 'past_Code' : regCode }, 
    success: function(response){
        $('#inp_province').html(response); 
    }
    });
    }

    function display_citymun(provCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'province', 'past_Code' : provCode }, 
    success: function(response){
        $('#inp_citymun').html(response); 
    }
    });
    }

    function display_brgy(citymunCode){

$.ajax({

url: './model/address.php', 
type: 'POST', 
data: { 'type' : 'citymun', 'past_Code' : citymunCode }, 
success: function(response){
    $('#inp_brgy').html(response); 
}
});
}

</script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


</html>