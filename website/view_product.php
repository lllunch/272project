<?php include_once 'header.php' ?>
<?php if(!empty($_SERVER['QUERY_STRING'])): ?>
    <div class="w3-content w3-padding" style="max-width:1564px">
      <div class="w3-container w3-padding-32" id="p1">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo $_GET['name']?></h3>
      </div>
      <div class="w3-container w3-padding-32" align="center">
            <?php
              echo '<img src="marketplace/' . $_GET['id'] . '.jpeg" height="500" width="900">'
              // <a href="marketplace/' . _GET['id'] . 'project1.php" class="w3-hover-text-lime">UI/UX design</a></div>'
            ?>
      </div>
    </div>
<?php endif; ?>
