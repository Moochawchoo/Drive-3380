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
      <?php require '../login/misc/pullnav.php'; ?>
        <div class="container">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2><?php echo $title;?></h2>
                <form id="profileForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6">
                              <label class="label label-default">Vehicle information:</label>
                              <br/>
                              <label for="carMake" class="label label-default">Vehicle Make</label>
                              <input type="text" class="form-control" name="carMake" id="carMake" placeholder="Enter Vehicle Manufacturer here" value="<?php echo $usr['carMake']; ?>">
                              <label for="carModel" class="label label-default">Vehicle Model</label>
                              <input type="text" class="form-control" name="carModel" id="carModel" placeholder="Enter Vehicle Model here" value="<?php echo $usr['carModel']; ?>">
                              <br/> </div>
                          <div class="col-sm-6">
                              <label class="label label-default">Vehicle information:</label>
                              <br/>
                              <label for="carYear" class="label label-default">Vehicle Year</label>
                              <input type="text" class="form-control" name="carYear" id="carYear" placeholder="Enter Year of Release here" value="<?php echo $usr['carYear']; ?>">
                              <label for="carColor" class="label label-default">Vehicle Color</label>
                              <input type="text" class="form-control" name="carColor" id="carModel" placeholder="Enter Vehicle Color here" value="<?php echo $usr['carColor']; ?>">
                              <br/> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>
