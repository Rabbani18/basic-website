



<?php 
include("data.php");
include("functions.php");

    $pageTitle="media library";
    $section ="null";
   
    include("header.php");?>


	
		<div class="section catalog random">

			<div class="wrapper">
                	

				<h2>May we suggest something?</h2>

								<ul class="items">
	  <?php
           
            $random=array_rand($catalog,4);
            foreach($random as $id){
                echo get_item_html($id,$catalog[$id]);
            }
            
            
            
            ?>
                                    </ul>

			</div>

		</div>

	</div><!--end content-->


	<?php include ("footer.php");?>

</body>
</html>