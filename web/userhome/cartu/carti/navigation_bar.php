
<div class="container shareCont">          
    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>                 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                                
                </button>
                <a href='index.php?id=<?php echo$id?>' class='navbar-brand' role='button'>
                    <img class="img-responsive" alt="Brand" src="images/logo.jpg">
                </a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
				<li> 
				 <div class='shopping_cart_info_holder'>
        <div class="col-xs-12">
            <a href="#" class="shopping_cart_info" title="Shopping cart item total">             
                <i class='glyphicon glyphicon-shopping-cart' style='color:#008cba; font-size:25px;top:15px;'></i>            
                <span id='items_in_shopping_cart' style='color:#ff5500; font-size:22px;'>
                    <?php 
                        /* If there are items in the basket display total of items, else display 'empty'*/
                        if(isset($_SESSION["items"])){   
                            if(count($_SESSION["items"]) > 0){
                                echo count($_SESSION["items"]);
                            }else{
                                echo "empty";
                            }
                        }else{
                            echo "0";
                        }
                    ?>
                </span>
            </a>
        </div>
    </div>
				</li>

                    <?php
                        /*  Display Menus from MySQL Database
                        *   Change 
                        **/
                        foreach($database->findMenuItem() as $menuItem){
    echo "<li class='active'><a id='{$menuItem['menuName']}' href=index.php?menu=".$menuItem["menuName"]."&id=".$_GET['id']."
                            >" . $menuItem['menuName']."</a></li>";
                        } 
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			<div class="shopping_cart_holder">
        <a href="#" class="close_shopping_cart_holder" >Close Cart</a>
        <h2>Shopping Cart</h2>
        <div id="shopping_cart_output">
        </div>
    </div>
    
    <!--    Display Item here-->
    <div class="item_display_holder"></div>

    <!-- Display info about cart update in the middle of the screen -->
    <div id='cart_update_info'></div>
        </nav>
</div>