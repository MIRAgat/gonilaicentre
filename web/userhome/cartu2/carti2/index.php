<?php 
    /* Get header */
    require_once("header.php");
?>
<body>
         
    <?php
        /* Get Navigation Bar */
        require_once('navigation_bar.php');
        /* Get Carousel/slider */
        require_once("carousel.php");
    ?>
    
   

    <!-- Holds shopping cart info with selected items -->
    

    <?php    
        /* FETCH ITEMS ACCORDING TO CATEGORIES CHOSEN BY USER */
        if(isset($_GET['menu'])){
            $menuCategory = $_GET['menu'];        
            /* If you want to display all items click on ShareMyWeb Logo */
            if($menuCategory =="main"){
                $items = $database->find_by_query("SELECT * FROM shopping_items2");    
            /* Categories accordingly */
            }else{            
                $items = $database->find_by_query("SELECT * FROM shopping_items2 WHERE category='{$menuCategory}'");    
            }
        }else{
            $items = $database->find_by_query("SELECT * FROM shopping_items2");    
        }
    ?>  
    
    <div class='container' style='padding:10px;'>
    <!--Display Items in the List -->
        <ul class="list_of_items">
            <?php foreach($items as $item) { ?>
                <div class="col-xs-12 col-sm-4">    
                    <li>  
<style>
						
						#size { width:253px;
						height:199px;
						
						
						}
						
						</style>					
                        <form class="item_form">                            
                            <div class='item_disp_img_holder'>                                            
                                <img class="item_disp_image" id="size" src="images/<?php echo $item["item_image"]; ?>" item_id="<?php echo $item["item_id"]; ?>" alt="<?php echo $item["item_name"]; ?>">
                                <div class='item_title_holder' >
    <span class='item_disp_title'><?php echo $item["item_name"]; ?></span>
                                </div>
                            </div>                    
                            <div style='width:235px; text-align:center; margin:0 auto;'>
                                <span style='font-size:25px;'><?php echo "RM".$item["item_price"]; ?></span>
                            </div>
                            <div class="item_disp_values">
                                <div>Cleaner needed:
                                    <select name="item_qty">
                                        <?php
                                            // Choose itemquantity
                                            $maxQty=5;
                                            for($i=1;$i<=$maxQty;$i++){
                                                echo "<option value='{$i}'>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                
                                <input name="item_id" type="hidden" value="<?php echo $item["item_id"]; ?>">
                                <button class='add_item_to_cart' type="submit">Add Item</button>
                            </div>
                        </form>
                    </li>
                </div>
            <?php } ?>
        </ul>
    </div>
     <div class="push"></div>
    
<!--  Get footer-->
    <?php
        require_once("footer.php");
    ?>