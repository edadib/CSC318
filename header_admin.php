<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
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
                <li class="active"><a href="admin.php">Admin Home</a></li>
                <li><a href="add_member.php" data-toggle="tooltip"
                data-placement="bottom" title="Update Member Information">Add Member</a></li>
                <li><a href="add_stock.php" data-toggle="tooltip"
                data-placement="bottom" title="Update Member Information">Add Stock</a></li>
                <li><a href="view_users.php" data-toggle="tooltip" dataplacement="bottom"
                title="View details">View Staff</a></li>
                <li><a href="view_cars.php" data-toggle="tooltip" dataplacement="bottom"
                title="View details">View Stock</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
                
                 
            </div>
          </div>
        </nav>

</body>
</html>
