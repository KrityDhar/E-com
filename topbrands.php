<?php include 'inc/header.php'; ?>



 <div class="main">
    
     <div class="span_3_of_1">
					<h2></h2>
					<ul>

            <?php
             $getCat=$cat->getAllCat();
             if ($getCat) {
                 while ($result=$getCat->fetch_assoc()) {

             ?>
				      <li><a href="productbycat.php?catId=<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></a></li>
            <?php }} ?>
    			</ul>

      </div>
 	
 	
	</div>
   <?php include 'inc/footer.php'; ?>
