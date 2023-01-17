<?php include "inc/header.php"; ?>
<?php include "inc/slider.php"; ?>


 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

      <div class="section group">

        <?php
           $getFPd=$pro->getFeaturePro();
             if ($getFPd) {
               while ($result=$getFPd->fetch_assoc()) {
        ?>
     <div class="grid_1_of_4 images_1_of_4">
        <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image'] ?>" height="150px" alt="" /></a>
        <h2><?php echo $result['productName']; ?> </h2>
        
        <p><span class="price"><?php echo $result['price']; ?></span></p>
          <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
     </div>

    <?php }} ?>


   </div>

        <!-- ======new product===    -->
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
        <?php
           $getNewPd=$pro->getNewPro();
             if ($getNewPd) {
               while ($result=$getNewPd->fetch_assoc()) {
        ?>
				<div class="grid_1_of_4 images_1_of_4">
					  <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image'] ?>" height="150px" alt="" /></a>
					 <h2><?php echo $result['productName']; ?> </h2>
					<p><span class="price"><?php echo $result['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>

        <div class="grid_1_of_4 images_1_of_4">
					  <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image'] ?>" height="150px" alt="" /></a>
					 <h2><?php echo $result['productName']; ?> </h2>
					<p><span class="price"><?php echo $result['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
        

      <?php }} ?>
			</div>

      
    </div>
    
 </div>
 

<?php include "inc/footer.php"; ?>
