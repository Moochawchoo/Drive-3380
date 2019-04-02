<?php
$title="Driver Registration";
$userrole="Rider";
include "../login/misc/pagehead.php";
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
    #content{
        position: relative;
        text-align: center;
        float: left;
        font-size: 18;
    }
    #contentwrap{
        position: relative;
        float: center;
    }
    #footer{
	    bottom: 0;
	    right: 0;
	    left: 0;
	    position: absolute;
	    width: 100%;
	    text-align: center;
	    font-size: 11px;
    }
    .btn-primary{
      border: none;
      border-radius: 3px;
      background-color: #B88A1D;
    }
    .btn-primary:hover{
      background-color: #E2B448;
    }
    html, body{
        font-family: 'Roboto';
    }
</style>
    <?php require "../login/misc/pullnav.php"; ?>
</head>
<body>
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">Driver Registration</p>
    </h1>
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form id="profileForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                              <label class="label label-default">Vehicle information:</label>
                              <br/>
                              <label for="carMake" class="label label-default">Vehicle Make</label>
                              <input type="text" class="form-control" name="carMake" id="carMake" placeholder="Vehicle Manufacturer" value="<?php echo $usr['carMake']; ?>">
                              <label for="carModel" class="label label-default">Vehicle Model</label>
                              <input type="text" class="form-control" name="carModel" id="carModel" placeholder="Vehicle Model" value="<?php echo $usr['carModel']; ?>">
                              <br/> </div>
                          <div class="col-md-6">
                              <br/>
                              <label for="carYear" class="label label-default">Vehicle Year</label>
                              <input type="text" class="form-control" name="carYear" id="carYear" placeholder="Year of Release" value="<?php echo $usr['carYear']; ?>">
                              <label for="carColor" class="label label-default">Vehicle Color</label>
                              <input type="text" class="form-control" name="carColor" id="carColor" placeholder="Vehicle Color" value="<?php echo $usr['carColor']; ?>">
                              <br/> <br/></div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <label class="label label-default">Driver information:</label>
                              <br/>
                              <label for="firstname" class="label label-default">First Name</label>
                              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $usr['FirstName']; ?>">
                              <label for="lastname" class="label label-default">Last Name</label>
                              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $usr['LastName']; ?>">
                              </div>
                          <div class="col-md-6">
                              <br/>
                              <label for="driverID" class="label label-default">License ID number</label>
                              <input type="text" class="form-control" name="driverID" id="driverID" placeholder="ID#" value="<?php echo $usr['driverID']; ?>">
                              <label for="maxDistance" class="label label-default">What's the maximum distance you'd drive for a fare? (in miles)</label>
                              <input type="text" class="form-control" name="maxDistance" id="maxDistance" placeholder="Max Distance" value="<?php echo $usr['maxDistance']; ?>">
                              <br/> </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="message"></div>
                                <button type="submit" class="btn-primary" id="submitbtn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>
