<?php 
require('backend/ideabox.core.php');
$ideabox=new ideabox();
$topIdeas=$ideabox->getTopIdeas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Idea Box</title>
    <!-- css files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
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
        <div class="row">
            <!-- filter section -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
                <div class="panel panel-custom">
                      <div class="panel-heading">
                            <h3 class="panel-title">Idea Box!</h3>
                      </div>
                      <div class="panel-body">
                           Ideas selected by <span id="idea-selection"> default (Time)</span>
                      </div>
                </div>
                
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="">Filter by</label>
                        <div class="col-sm-8">
                        <select name="" id="" class="form-control" disabled>
                            <option value="">Time</option>
                            <option value="">Relevance</option>
                        </select>
                        </div>
                    </div>
                 </form>  
            </div>
             <!-- filter section -->
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <form action="" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="search" class="form-control" placeholder="filter by name">
                            </div>  
                        </div>
                </form>

                <?php
                if($topIdeas){
                    echo '<div class="list-group">';
                    for($ideanum=0;$ideanum<sizeof($topIdeas);$ideanum++){
                        echo '<a href="idea.php?idea='.$topIdeas[$ideanum].'"class="list-group-item ">'.$topIdeas[$ideanum].'</a>';
                    }
                    echo '</div>';
                }
                else{
                    echo '<div class="well-custom idea-theme">Could not get top ideas</div>';
                }
            ?>
                
            </div>
            
            
       
        </div>
    </section>
     <!-- end of main container -->
</body>
</html>