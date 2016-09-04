<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Idea Box</title>
    <!-- css files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- font files -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
    <!-- header section-->
    <div class="container">
        <h1 id="banner">
            <span class="icon fa fa-cube"></span> IdeaBox
        </h1>
        <hr>    
    </div>
    <!--end of header section -->
    <!-- main container -->
    <section class="container" >
         <!-- landing banner  -->
        <div class="jumbotron landing-banner rad-0">
            <div class="container">
                <h1>Welcome to the IdeaBox!</h1>
                <p>A place where you can manage , get and contribute ideas</p>
            </div>
        </div>
         <!--end landing banner  -->
        <div class="row">
            <!--loader and server report-->
            <div class="col-sm-5">
                <div id="loader" class="col-sm-12 hidden">
                    <div class="loader "></div>
                    <div id="status" class="comStatus">Updating ideaBox's database</div>
                </div>
                <div class="server-section col-sm-12 hidden">  
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <span id="server-status"></span>
                        </div>
                    </div>
                    <button id="react-btn" type="button" class="btn  pull-right btn-custom">Add another</button>
                     
                </div>
                  <!-- idea form -->
                <form id="idea-form"   class="form-horizontal" role="form">
                        <div class="form-group"> <!-- firstname -->
                            <label for="firstname" class="control-label col-sm-3 ">Firstname</label>
                            <div class="col-sm-9"><input id="oFname" type="text" class="form-control" ></div>
                        </div>
                        <div class="form-group"> <!-- surname -->
                            <label for="surname" class="control-label col-sm-3 ">Surname</label>
                            <div class="col-sm-9"><input id="oSname" type="text" class="form-control" ></div>
                        </div>
                        <div class="form-group"> <!-- idea name -->
                            <label for="ideaname" class="control-label col-sm-3 ">Idea Name</label>
                            <div class="col-sm-9"><input id="ideaname" type="text" class="form-control" ></div>
                        </div>
                        <div class="form-group"> <!-- accessibility -->
                            <label for="accessibility" class="control-label col-sm-3 ">Accessibility</label>
                            <div class="col-sm-9" >
                                <select name="accessibility" id="accessibility-level" class="form-control" >
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="protected">Protected</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> <!-- description -->
                            <label for="description" class="control-label col-sm-3 ">Description</label>
                            <div class="col-sm-9"><textarea id="description" class="form-control" rows="5" placeholder="A short overview of what your idea is all about"></textarea></div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button id="idea-btn" type="button" class="pull-right btn btn-custom">Contribute</button>
                            </div>
                            
                        </div>
                </form>
                
                
           </div>
            <!--eo  idea form -->
            <!-- ideabox widgets -->
           <div class="col-sm-7 widgets">      
              <a class="widget col-sm-3" data-toggle="modal" data-target="#account-form" data-backdrop=false>
                  Account
              </a>
               <a class="widget col-sm-3" href="ideas.php">
                  Ideas
              </a>
               <a class="widget col-sm-3" href="faq.php">
                  Faq
              </a>
               
           </div>
           <!-- eo ideabox widgets -->
        </div>
    </section>
     <!-- end of main container -->


    <!-- login form -->
    
    <div class="modal fade custom-modal" id="account-form">
        <div class="modal-dialog ">
            <div class="modal-content rad-0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Account</h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#sign-in" data-toggle="tab">Sign in</a></li>
                        <li><a href="#sign-up" data-toggle="tab">Sign up</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="sign-in">
                                   <br/>
                                     <form action="" method="POST" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="username" class="control-label col-sm-3">username / email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="passowrd" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary pull-right">Sign in</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="tab-pane  fade" id="sign-up">
                            <br/>
                            <form action="" method="POST" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="username" class="control-label col-sm-3">username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="passowrd" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-2" class="col-sm-3 control-label">re-enter Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary pull-right">Sign up</button>
                                        </div>
                                    </div>
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
              
            </div>
        </div>
    </div>
                

     <!-- script files : Jquery, bootstap && index.js -->
     <script src="js/jquery-2.1.3.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/index.js"></script>
</body>
</html>