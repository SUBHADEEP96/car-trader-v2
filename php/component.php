<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"home.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
  <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                            </h6>
                            
                            <h5>
                                <span class=\"price\"><i class=\"fa fa-inr\" aria-hidden=\"true\"></i> $productprice</span>
                            </h5>

                            <button type=\"submit\" class=\" my-3\" name=\"add\">Add To Garage <i class=\"fa fa-car\" aria-hidden=\"true\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: CarTrader.com</small>
                                <h5 class=\"pt-2\"> <i class=\"fa fa-inr\" aria-hidden=\"true\"></i> $productprice</h5>
                                <button type=\"submit\" class=\"\">Save for Later</button>
                                <button type=\"submit\" class=\" mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















