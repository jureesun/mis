<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->  
<?php
$title = "Home | SLGTI";
 include_once("config.php"); 
 include_once("head.php"); 
 include_once("menu.php"); 
 ?>
<!--END DON'T CHANGE THE ORDER--> 

<!--BLOCK#2 START YOUR CODE HERE -->
<div class="row shadow  p-3 mt-1 bg-info text-white">
    <div class="col-sm-12 col-md-4 col-lg-9">
        <h1 class="text-center">EAT GOOD FEEL GOOD</h1>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-3">
        <div class="btn-group dropright">
            <button class="btn btn-info btn-lg" type="button">DAYS</button>
            <button type="button" class="btn btn-lg btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <button class="dropdown-item" type="button">MONDAY</button>
                <button class="dropdown-item" type="button">TUESDAY</button>
                <button class="dropdown-item" type="button">WEDNESDAY</button>
                <button class="dropdown-item" type="button">THURSDAY</button>
                <button class="dropdown-item" type="button">FRIDAY</button>
                <button class="dropdown-item" type="button">SATURDAY</button>
                <button class="dropdown-item" type="button">SUNDAY</button>
            </div>
        </div>
    </div>
</div>

 <!-- FOOD MENU DESIGN    -->
        <div class="row pl-3 pt-4">
            <em><h2 class="display-5">Morning Fare</h2></em>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 container">           
                <div class="card" style="max-width: 30rem; height: 13rem;">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top ml-3" src="img/154.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="display-5 mt-3"><p>Rotti  1 Pc<br> 20/=</p></h4>  
                                <a href="#" class="btn btn-info w-75">Add</a>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 container">           
                <div class="card" style="max-width: 30rem; height: 13rem;">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top ml-3"src="img/154.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                            <h4 class="display-5 mt-3"><p>Rotti  1 Pc<br> 20/=</p></h4>  
                                <a href="#" class="btn btn-info w-75">Add</a>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 container">           
                <div class="card" style="max-width: 30rem; height: 13rem;">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top ml-3"src="img/154.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                            <h4 class="display-5 mt-3"><p>Rotti  1 Pc<br> 20/=</p></h4>  
                                <a href="#" class="btn btn-info w-75">Add</a>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 container">           
                <div class="card" style="max-width: 30rem; height: 13rem;">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top ml-3"src="img/154.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                            <h4 class="display-5 mt-3"><p>Rotti  1 Pc<br> 20/=</p></h4>  
                                <a href="#" class="btn btn-info w-75">Add</a>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
<!-- ORDE CART DESIGN  -->
  
    <div class="row pt-5">
        <div class="col-sm-12 col-md-4 col-lg-8 container">  
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th><p class="h5">ITEM ID</p></th>
                        <th><p class="h5">ITEM NAME</p></th>
                        <th><p class="h5">QTY</p></th>
                        <th><p class="h5">AMOUNT</p></th>
                    </tr>
                 </thead>
                <tbody class="table-borderless">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div class="col-sm-12 col-md-4 col-lg-3 container">
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6 col-md-10 col-lg-10 container">
                        <p class="h2">FOOD CART</p>
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-2 container">
                        <img src="img/FOOD.png" height="35" class="float-right" alt="Error">
                    </div>
                </div>
            </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <p>Order ID</p>
                        </div>
                        <div class="col">
                            <p>1</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <p>Total</p>
                        </div>
                        <div class="col">
                            <p>1000</p>
                        </div>
                    </div>

                    <div class="row">
                        <a href="OrderView" button type="button" class="btn btn-success w-100" role="button" aria-pressed="true" >Order</button></a>
                    </div>
                    
                </div>
            </div>      
        </div>
    </div>


   
<!--END OF YOUR COD-->

<!--BLOCK#3 START DON'T CHANGE THE ORDER-->   
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->  
