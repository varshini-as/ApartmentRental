<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><html>
    <head>
        <title>Apartment Renting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="design.css style.css">
    </head>
    <body class="special">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">RentalLife</a>
                </div>
                <ul class="nav navbar-nav float-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Property Services</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            
            <form name="maintenanceform" action="maintenance_process.php" method="post" class="form-horizontal">
                <label class="control-label col-sm-2">Owner ID:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="oid" required>
    </div>
                <br>
                <br>
                <br>
                    <label class="control-label col-sm-2">Flat ID:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="flatid" required>
    </div>
                    <br>
                    <br>
                    <br>
                    <label class="control-label col-sm-2">Services:</label>
                    <div>
                                <select name="services" style="height: 25px;">
                                    <option value="800">Electrical Repairs - 800</option>
                                    <option value="1200">Plumbing - 1200</option>
                                    <option value="1000">Regular maintenance - 1000</option>
                                    <option value="2500">Pest Control - 2500</option>
                                </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <center>
                        <input type="submit" class="btn btn-info" value="SUBMIT">
                    </center>
                </form>
            
        </div>
        <footer>
            <center>
                <h6>Copyright © RentalLife | All rights reserved. | Contact Us: +91 9000 9000</h6>
            </center>
        </footer>
    </body>
</html>
