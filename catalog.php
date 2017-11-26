



<?php 
include("data.php");
include("functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}

include("header.php"); ?>

<div class="section catalog page">
    
    <div class="wrapper">
    
        <h1><?php if($section !=null){
    echo "<a href ='catalog.php'> Full catelog</a> &gt;";
    
} echo $pageTitle; ?></h1>
        
        <ul class="items">
            <?php
           
            $catagories= array_category($catalog,$section);
            foreach($catagories as $id){
                echo get_item_html($id,$catalog[$id]);
            }
            
            
            
            ?>
        </ul>
    
    </div>
</div>

<?php include("footer.php"); ?>
    
 