<!DOCTYPE html>
<html>
<head>
    <title>CARMAX</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-default" style="width: 100%">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <img src="assets/images/ferrari-logo.png" style="height: 50px;"><a class="navbar-brand" href="index.php" target="_blank">CARMAX</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="member.php">Customer Home</a></li>
                <li><a href="update_customer_data.php" data-toggle="tooltip"
                data-placement="bottom" title="Update Member Information">Update Profile</a></li>
                <li><a href="customer_profile.php" data-toggle="tooltip" dataplacement="bottom"
                title="View details">View Profile</a></li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
                
                 
            </div>
          </div>
        </nav>

</body>
</html>
