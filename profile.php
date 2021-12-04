<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'DBConnection.php';
if(isset($_POST['submit'])){
    
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $user_sql = "SELECT OMAIL,password FROM owner WHERE OMAIL='$user' AND password='$pass';";
    $user_res = $conn->query($user_sql);
    if(mysqli_num_rows($user_res) > 0){
        $user_row = $user_res->fetch_assoc();
        $user_sql = $user_row['OMAIL'];
        $pass_sql = $user_row['password'];
        if($user == $user_sql && $pass == $pass_sql){
            session_start();
            $_SESSION["username"] = $_POST['username'];
        }
        else{
            header("Location: incorrect_pass.php");
        }
    }
    else{
        //echo "Account doesn't exist!";
        header("Location: incorrect_pass.php");
    }
    
}

if(!isset($_SESSION['username'])){
    echo 'not logged in';
}
else{
$user = $_SESSION['username'];
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "apartmentmanagement";
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);
   
$sql = "SELECT OID,ONAME,CITY,PHONE FROM owner WHERE OMAIL='$user'" ;
$retval = $conn->query($sql);

?>
<html>
   <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#myModal").modal('show');
        });
        function showPopup(id){
        $(document).ready($(id).modal('show'));
        };
        function updateText(id){
            document.getElementById(id).disabled = false;
        }
        </script>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Successfully logged in!</h4>
                        <h4>Connection made to Apartment database.</h4>
                    </div>
                </div>
            </div>
        </div>
         <div id="addFlat" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Add a new flat</b></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Please fill out the flat details.</p>
                        <form method="post" action="flat_process.php">
                            <label>Owner ID</label>
                            <div>
                                <input type="number" name="oid" class="form-control">
                            </div>
                            <br>
                            <label>Floor:</label>
                            <div>
                                 <input type="number" name="floor" class="form-control" placeholder="Floor" min="1" max="10">
                            </div>
                            <br>
                            <label>Flat Type:</label>
                            <div>
                                <select name="flat_type" style="height: 25px;">
                                    <option value="1BHK">1 BHK</option>
                                    <option value="2BHK">2 BHK</option>
                                    <option value="3BHK">3 BHK</option>
                                    <option value="Penthouse">Penthouse</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="deletetenant" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Delete existing tenant details</b></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Please enter your owner ID and the tenant's unique ID.</p>
                        <form method="post" action="delete_tenant.php">
                            <label>Owner ID</label>
                            <div>
                                <input type="number" name="oid" class="form-control">
                            </div>
                            <br>
                            <label>Tenant ID:</label>
                            <div>
                                 <input type="number" name="tid" class="form-control">
                            </div>
                            <br>
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="updatetenant" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b>Update existing tenant details</b></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Please enter your owner ID and the tenant's unique ID.</p>
                        <form method="post" action="update_tenant.php">
                            <label>Tenant ID:</label>
                            <div>
                                 <input type="number" name="tid" class="form-control">
                            </div>
                            <p>Select the fields you want to update.</p>
                            <br>
                            <input type="text" id="name" placeholder="name" name="name" class="form-control">
                            <br>
                            <input type="number" id="rent" placeholder="rent" name="rent" class="form-control">
                            <br>
                            <input type="number" id="deposit" placeholder="deposit" name="deposit" class="form-control">
                            <br>
                            <input type="number" id="number" placeholder="number" name="number" class="form-control">
                            <br>
                            <input type="text" id="mail" placeholder="mail" name="mail" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="maintenance.php">Property Services</a></li>
                </ul>
                <ul class="nav navbar-nav" style="float: right;">
                    <li><a href="logout_process.php">Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="profile-box">
                <div class="row">
                    <div class="column">
                        <img src="images/profilepic.png" alt="Profile Picture" align="left">
                    </div>
                    <div class="column" style="float: left; margin-left: 15px;">
                        <h3><?php echo $_SESSION["username"] ?></h3>
                        <h4><?php if(mysqli_num_rows($retval) > 0){                      
                                $row1 = $retval->fetch_assoc();
                                $oid = $row1['OID'];
                                echo "
                                      OID: $oid <br>
                                      City: {$row1['CITY']} <br>
                                      Contact: {$row1['PHONE']} <br>";
                        }
                                // Fetch all values in a loop
                        ?></h4>
                        <script>
                            function filter() {
                            // Declare variables
                                var input, filter, table, tr, td, i, txtValue;
                                input = document.getElementById("search");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("Flat Type");
                                tr = table.getElementsByTagName("tr");

                            // Loop through all table rows, and hide those who don't match the search query
                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[2];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }
                            }
                        </script>
                        <div class="btn-group">
                            <button onclick="location.href='http://localhost/MiniProject/add_tenant.php'" class="btn btn-info" style="margin-right: 10px;">Add new tenant</button>
                            <button onclick="showPopup('#addFlat')" class="btn btn-info" style="margin-right: 10px;">Add individual flat details</button>
                            <button onclick="showPopup('#deletetenant')" class="btn btn-info" style="margin-right: 10px;">Delete existing tenant details</button><br>
                            <button onclick="showPopup('#updatetenant')" class="btn btn-info" style="margin-top: 10px; margin-right: 10px;">Update existing tenant details</button>
                            <button onclick="location.href='http://localhost/MiniProject/maintenance_info.php'" class="btn btn-info" style="margin-top: 10px;">View maintenance receipts</button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <table class="table table-hover" id="property">
                    <tr class="header">
                        <th>Flat ID</th>
                        <th>Register No</th>
                        <th>Flat Type</th>
                        <th>Tenant ID</th>
                        <th>Tenant's Name</th>
                        <th>Deposit</th>
                        <th>Rent</th>
                        <th>Agreement Date</th>
                    </tr>
                        <!-- Fetch rows from database -->
                        <?php
                         $agreement_sql = "SELECT * FROM RENTED_APT";
                         $agreement_retval = $conn->query($agreement_sql);
                        while($agreement_row = $agreement_retval->fetch_assoc()){
                        ?>
                    <tr>
                        
                        <td><?php echo "{$agreement_row['FLAT_ID']}"; ?></td>
                        <td><?php echo "{$agreement_row['REG_NO']}"; ?></td>
                         <td><?php echo "{$agreement_row['FLAT_TYPE']}"; ?></td>
                        <td><?php echo "{$agreement_row['TID']}"; ?></td>
                        <td><?php echo "{$agreement_row['TNAME']}"; ?></td>
                        <td><?php echo "{$agreement_row['DEPOSIT']}"; ?></td>
                        <td><?php echo "{$agreement_row['RENT_AMT']}"; ?></td>
                        <td><?php echo "{$agreement_row['AGREE_DATE']}"; ?></td>
                         <?php } ?>
                    </tr>
                        
                </table>
               <!-- <center>
                    <form action="logout_process.php" method="post">
                        <input type="submit" class="btn btn-primary" value="Log Out">
                    </form>
                </center>-->
            </div>  
        </div>
        <footer>
            <center>
                <h6>Copyright © RentalLife | All rights reserved. | Contact Us: +91 9000 9000</h6>
            </center>
        </footer>
</html>
<?php } ?>