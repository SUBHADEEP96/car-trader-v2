
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="home.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fa fa-fighter-jet" aria-hidden="true"></i> CarTrader.com
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto">
			
			</div>
			
			
			<!---account---->
			<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Subhadeep
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>
 logout</a>
        </div>
      </li>
			</ul>
			<!---account ends here---->
			
            <div class="navbar-nav">
			    <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-car" aria-hidden="true"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
		
            </div>
        </div>

    </nav>
</header>






