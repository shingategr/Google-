<?php
include('header.php');
include_once 'gpConfig.php';
include('checkGoogleUser.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login with Google using PHP</title>
</head>
<body>
<div>
<br><br><br>
<div class="cleafix"></div>
<div class="container">
<div class="alert alert-info">
    <strong>Hi..</strong> Login with Google using PHP
</div>
       <div class="alert alert-warning">
        <a href="https://drive.google.com/open?id=0BxmTZPVcu72fQ1FyMFNjd1gwMlU" class="btn btn-xs btn-warning pull-right" target="blank();">Click</a>
        <strong> Code download link-</strong>
    </div>
     <br><br>  
 </div>
<div class="container">
  <div class="row">
    <div class="col-md-6">    
      <div class="panel panel-default">
            <div class="panel-body">
            <?php  if(!empty($userData)){ ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2><?php echo ucfirst($userData['first_name']).' '.ucfirst($userData['last_name']);?></h2>
                            <p><strong>Email: </strong> <?php echo $userData['email'];?> </p>
                            <p><strong>Gender: </strong><?php echo (!empty($userData['gender'])?$userData['gender']:'-');?></p>
                             <p>
                                <strong>Locale: </strong><?php echo (!empty($userData['locale'])?ucfirst($userData['locale']):'-');?>
                             </p> 
                             <p>
                                <strong>Logged in with: </strong>Google
                             </p>                      
                          <p>Logout from <a href="logout.php">logout</p>
                        </div><!--/col--> 
                        <div class="col-xs-12 col-sm-4 text-center">
                                    <?php
                                        $img='';
                                        $img='<img src="'.$userData['picture'].'" alt="" class="center-block img-circle img-responsive">';
                                        echo $img; 
                                    ?>
                                <ul class="list-inline ratings text-center" title="Ratings">
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                                </ul>
                        </div><!--/col-->                         
                    </div>
                    <!--/row-->
                        <?php } else {
                            $authUrl = $gClient->createAuthUrl();
                           echo $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'">
                            <img src="images/glogin.png" alt=""/></a>';
                        }
                        ?>
                        </div>
          </div>
          <!--/panel-->
    </div>
  </div>
</div>
</div>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php include('footer.php');?>