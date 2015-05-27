<!doctype html>
<html class="no-js" lang="en">

<?php
     $pageTitle = "Course Modules"; 
    include("inc/head.php"); ?>
<body class="animsition">
    <?php include("inc/header.php"); ?>
      <div>
        <div id="reveal">
            <!-- Triggers the modals -->
            <a href="#" data-reveal-id="vidModal" class="radius button medium-6 columns">Computer Basics Video&hellip;</a>
            <a href="#" data-reveal-id="vid2Modal" class="radius button medium-6 columns">Operating Systems Video&hellip;</a>
            <a href="#" data-reveal-id="courseModal" class="radius button medium-6 columns">Placement Holder&hellip;</a>
            <a href="#" data-reveal-id="listPrint" class="radius button medium-6 columns">Placement Holder&hellip;</a>

        </div>
    </div>
    <div class="main-modal">
         <!-- Begin Video Modal -->
        <div id="vidModal" class="reveal-modal" data-reveal>
            <h3>What is a computer?</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/7cXEOWAStq4?feature=player_embedded" allowfullscreen></iframe>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
         <div id="vid2Modal" class="reveal-modal" data-reveal>
            <h3>Operating Systems</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/pTdSs8kQqSA?feature=player_embedded" allowfullscreen></iframe>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- Reveal Modals end -->
  </div>
<?php 
    include("inc/footer.php");
    include("inc/script.php");
?>  
</body> 
</html>
    
