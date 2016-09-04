<?php 
    require('backend/ideabox.core.php');
    $ideaBox=new ideaBox();
    $FAQS=array();
    $ideaBox->getFAQ($FAQS);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IdeaBox</title>
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
   <section class="container">
       <?php
        if(sizeof($FAQS)==0)
        {
            echo '<div class="well-custom idea-theme">No FAQs available</div>';
        }
        else{
            echo '<div class="list-group faq-questions">';

            for($faqnum=0;$faqnum<sizeof($FAQS);$faqnum++){
                echo ' <div href="#" class="list-group-item">';
                echo ' <h4 class="list-group-item-heading">'.$FAQS[$faqnum]['question'].'</h4>';
                echo ' <p class="list-group-item-text">'.$FAQS[$faqnum]['answer'].'</p>';
                echo "</div>";
            }

            echo "</div>";
        }
        ?>
   </section>
     <!-- end of main container -->
</body>
</html>