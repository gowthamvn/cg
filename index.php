DOCTYPE html>
<html lang="en">
<head>
<!-- Le styles -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</head>
<body>
 <nav class="navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <h2>Employee details</h2>
    </div>
  </div>
</nav>
 <br><br><br><br>


<div class="container">
    <div id="content">
        <ul id="tabs" class="nav nav-pills nav-justified " data-tabs="tabs">
            <li class="active"><a href="#enter_details" data-toggle="tab">Enter details</a></li>
            <li><a href="#tab2" data-toggle="tab">tab2</a></li>
            <li><a href="#tab3" data-toggle="tab">Generate pdf</a></li>
        </ul>
    <div id="my-tab-content" class="tab-content">
       <div class="tab-pane active" id="enter_details">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            
                      <form action="index.php" method="post">
                                <br>
                                <input type="number" class="form-control" id="b_salary" placeholder="Basic Salary" required/>
                                <br>
                                <label >Allowances</label>

                                <div class="row">
                                        <div class="col-md-6">
                                        <input type="number" class="form-control" id="b_salary" placeholder="House Rent Allowance"/><br>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="number" class="form-control" id="b_salary" placeholder="Performance Incentive"/><br>
                                        </div>
                                </div>
                                <input type="number" class="form-control" id="b_salary" placeholder="Travel Allowance"/><br>
                                <label >Supplementary</label>
                                <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" id="b_salary" placeholder="Network Card"/><br><br>
                                            <input type="number" class="form-control" id="Total Take Home" placeholder="Total Take Home"/><br>
                                            <input type="number" class="form-control" id="Total CTC" placeholder="Total CTC"/><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" id="b_salary" placeholder="Mobile Bill Allowance"/><br><br>
                                            <input type="number" class="form-control" id="Annual Incentive" placeholder="Annual Incentive"/><br>
                                            <input type="number" class="form-control" id="No of day worked" placeholder="No of day worked"/><br>
                                        </div>
                                </div>
                                <input type="number" class="form-control" id="Final Take Home Salary" placeholder="Final Take Home Salary"/><br>
                                <center>
                                      <button type="submit" class="btn btn-default">Submit</button>
                                </center>
                              <br><br>
                        </form>
                    </div>      
            </div>
            <div class="col-md-3"></div>
            </div>
        <div class="tab-pane" id="tab2">
            <h1>tab2</h1>
            
        </div>
        <div class="tab-pane" id="tab3">
            <h1>tab3</h1>
            
        </div>
    </div>
</div>
 
 
<script type="text/javascript">
jQuery(document).ready(function ($) {
$('#tabs').tab();
});
</script>
</div> <!-- container -->
 
 
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html> 