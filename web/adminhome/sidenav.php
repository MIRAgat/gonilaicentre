
<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
<div class="sidebar-wrapper">
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?> 
            <div class="logo">
                <a href="#" class="simple-text">
                    Record System
                </a>
            </div>

            <ul class="nav">
			
			 <li class="<?= ($activePage == 'profile') ? 'active':''; ?>">
                    <a href="profile.php">
                        <i class="pe-7s-graph"></i>
                        <p>Profile</p>
                    </a>
                </li>
			
                <li class="<?= ($activePage == 'listboard') ? 'active':''; ?>">
                    <a href="listboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Listboard</p>
                    </a>
                </li>
				
				
				<li class="<?= ($activePage == 'vaccines') ? 'active':''; ?>">
                    <a href="vaccines.php">
                        <i class="pe-7s-note2"></i>
                        <p>Vaccines list</p>
                    </a>
                </li>
					
               
                <li class="<?= ($activePage == 'table') ? 'active':''; ?>">
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
				
				
				
				
                <li class="<?= ($activePage == 'typography') ? 'active':''; ?>">
                    <a href="typography.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li class="<?= ($activePage == 'icons') ? 'active':''; ?>">
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li class="<?= ($activePage == 'maps') ? 'active':''; ?>">
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li class="<?= ($activePage == 'notifications') ? 'active':''; ?>">
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				
            </ul>
    	</div>
		</div>