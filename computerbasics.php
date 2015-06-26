<!doctype html>
<html class="no-js" lang="en">

<?php $pageTitle="Course Modules" ; include( "inc/head.php"); ?>

<body>
<?php include( "inc/header.php"); ?>
     <div class="row panel">
        <div id="reveal">
            <!-- Triggers the modals -->
            <a href="#" data-reveal-id="vidModal" class="radius button medium-6 columns">Mouse Basics&hellip;</a>
            <a href="#" data-reveal-id="vid2Modal" class="radius button medium-6 columns">Keyboard Basics&hellip;</a>
            <a href="#" data-reveal-id="#" class="radius button medium-6 columns">Mouse Games Coming Soon&hellip;</a>
            <a href="#" data-reveal-id="#" class="radius button medium-6 columns">Keyboard Games Coming Soon&hellip;</a>

        </div>
    </div>
         <!-- Begin Video Modal -->
    <div class="main-modal">
    <div id="vidModal" class="reveal-modal row" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
        <h3>Mouse Tutorial - Play</h3>
        <div class="flex-video widescreen">
            <iframe src="http://www.gcflearnfree.org/computers/mousetutorial/play" frameborder="0" allowfullscreen></iframe>
        </div>
        <a class="close-reveal-modal">&#215;</a>
    </div>
     <div id="vid2Modal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
        <h3>Keyboard Tutorial - Play</h3>
        <div class="flex-video widescreen">
            <iframe src="http://www.gcflearnfree.org/typing/play" frameborder="0" allowfullscreen></iframe>
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



