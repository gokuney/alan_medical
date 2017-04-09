<?php require_once('./controller.php'); ?>
<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<!-- Datepicker -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" />

  <!-- jQ -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
  
  <!-- Mustache JS -->
  <script src="./dist/js/mustache.min.js" type="text/javascript"></script>

  <!-- Addon JS -->
  <script type="text/javascript" src="./backstretch.js"></script>
  <script type="text/javascript" src="./dist/js/timer.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

  <!-- Custon CSS -->

  <style>
  
  body{
    /*background-color:#3090C7!important;*/
    /*background-color:#3090C7!important;*/
  }


  table td {
    padding:5px;

  }

  .ddown{
    background-color: #fff;
  }
  
  .remove-row {
    background-color: #fff;
    border-radius: 100%;
    height: 28px;
    margin-left: -30px;
    margin-top: 7px;
    position: absolute;
    text-align: center;
    width: 28px;
}

.add-row {
    background-color: #fff;
    text-align: center;
    margin:5px;
}

    .form-wrapper{
      background: rgba(52,73,92);
      padding:10px;
      color:#fff;
      border:5px solid #eaeaea;
      transition: all 0.3s linear;
    }
    .form-wrapper:hover{
      background: rgba(52,73,92,1);
      border-radius: 20px;
    }
    .login-wrapper{
      text-align: center;
      color:#fff;
    }

    .login-wrapper h2{
    color:#002E62;
    }
  </style>

  <!-- Flat UI -->
  <link rel="stylesheet" href="./dist/css/flat-ui.min.css" />
  <script src="./dist/js/flat-ui.min.js"></script>

</head>
<body>


<div class="row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand hidden-xs" href="#"> Telligen Health Care Quality Measure System &emsp;| </a>
              <a class="navbar-brand visible-xs" href="#">T.H.C.Q.M.S.</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                
                <?php if( isset($_SESSION['id']) ){ ?>
                  <?php if( $_SESSION['userdata']['type'] == 1 ): ?>
                    <!-- <li><a href="./index.php">Login <span class="navbar-unread">1</span></a></li> -->
                    <li><a href="#"> Hi, <?php echo $_SESSION['userdata']['full_name']; ?> </a></li>
                    <li><a href="./upload.php">Upload</a></li>
                    <li><a href="./browse.php">Reports</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                  <?php else: ?>
                    <!-- <li><a href="./index.php">Login <span class="navbar-unread">1</span></a></li> -->
                    <li><a href="#"> Hi, <?php echo $_SESSION['userdata']['full_name']; ?> </a></li>
                    <li><a href="./upload.php">Upload</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                  <?php endif; ?>
                <?php } ?>

                <!-- <li><a href="#fakelink">About</a></li> -->
               </ul>
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" placeholder="Search" type="search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div>


<p>
  <center> <img src="./dist/img/logo.jpg" alt="" width="200px"> </center>
</p>



<?php if( isset($_SESSION['id']) ): ?>
<script>
  window.idle = 0;
  window.shown = false;
  window.timer = new Timer();
  $(function(){

    $(document).on('mousemove, click, keydown, keypress, keyup' , function(){
      idle = 0;
      shown = false;
      timer.stop();
      $('#timeout').modal('hide');

    });



    //wait for 20 seconds for inactivity 
    setInterval(function(){

      idle = idle+1;

      if( (idle > 60) && ( !shown ) ){

        $('#timeout').modal('show');
        shown = true;

        timer.start({countdown: true, startValues: {seconds: 300}});
$('#startValuesAndTargetExample .values').html(timer.getTimeValues().toString());
timer.addEventListener('secondsUpdated', function (e) {
    $('#startValuesAndTargetExample .values').html(timer.getTimeValues().toString());
    $('#startValuesAndTargetExample .progress_bar').html($('#startValuesAndTargetExample .progress_bar').html() + '.');
});
timer.addEventListener('targetAchieved', function (e) {
    //$('#startValuesAndTargetExample .progress_bar').html('COMPLETE!!');
    window.location.href = './logout.php';
});


      }


    },1000);



  });

</script>


<div id="timeout" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id=""> Idle Timeout </h4>
      </div>
      <div class="modal-body" id="browseModalBody">
        <!-- You will be logged out shortly if no activity is done on the portal. -->
        
        <div id="startValuesAndTargetExample">
          Your session will expire in <span class="values"></span>. Press any key to prevent automatic logout.
        </div>


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php endif; ?>