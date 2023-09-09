
<?php include('assets/layouts/header.php') ?>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="background-image: url(assets/images/slider.webp);">
                <h2 class="mt-4 ms-5 mt-5">Year end sale</h2>
                <h1 class="mt-4 ms-5">Get 70% off For All <br>Design Books</h1>
                <p class="mt-4 ms-5">Donec sodales sagittis magna.SedMaecenas nec odio et ante tincidunt tempus.Donec
                    <br>vitae sapien ut libero venenatis faucibus.Nullam quis ante.
                </p>
                <button class="bg-danger text-light border-0 p-2 pe-4 ps-4 mt-4 ms-5">Shop Now</button>
                <div style="margin-top: 250px;"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #6767670c;">
        <div class="row ms-5">
            <div class="col-sm-4 mt-5 mb-5 d-flex">
                <img src="assets/images/icon-4.png" class="mt-3" alt="" width="60px" height="40px">
                <h3 class="ms-3">FREE SHIPPING <br> <span class="fs-5">Order over $100</span></h3>
            </div>
            <div class="col-sm-4 mt-5 mb-5 d-flex">
                <img src="assets/images/icon-3.png" class="mt-3" alt="" width="60px" height="40px">
                <h3 class="ms-3">SECURITY PAYMENT <br> <span class="fs-5">100% Secure payment</span></h3>
            </div>
            <div class="col-sm-4 mt-5 mb-5 d-flex">
                <img src="assets/images/icon-2.png" class="mt-3" alt="" width="60px" height="40px">
                <h3 class="ms-3">BEST PRICE <br> <span class="fs-5">Guaranteed Price</span></h3>
            </div>
        </div>
    </div>
    <h1 class="text-center">New ARRIVALS </h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center mt-5">
                <button class="text-dark bg-danger border-0 p-3 pt-4 pb-4 shadow p-3 mb-5 bg-body rounded">ALL</button>
                <button class="text-dark bg-danger border-0 ms-3 pt-4 pb-4 shadow p-3 mb-5 bg-body rounded">COOK
                    BOOK</button>
                <button
                    class="text-dark bg-danger border-0 ms-3 pt-4 pb-4 shadow p-3 mb-5 bg-body rounded">History</button>
                <button
                    class="text-dark bg-danger border-0 ms-3 pt-4 pb-4 shadow p-3 mb-5 bg-body rounded">Fantasy</button>
                <button
                    class="text-dark bg-danger border-0 ms-3 pt-4 pb-4 shadow p-3 mb-5 bg-body rounded">Romance</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="gridRow">
               <div class="col-12 col-md- 6 col-lg-3 text-center ">
                <a href="Details Pages/Details4.htm">
                    <img src="assets/images/1.png" alt="">
                </a>
                <h3>MICHAEL ALICE</h3>
                <h4>Last Time We Broke Up</h4>
                <h3>$500.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('MICHAEL ALICE \n Last Time We Broke  Up \n $500.00 \n Quantity')">ADD TO CARD</button>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <a href="Details Pages/Details1.htm">
                    <img src="assets/images/Screenshot 2023-05-03 102328.png" alt="">
                </a>
                <h3>ADAM BAID</h3>
                <h4>Vistit in the North</h4>
                <h3>$410.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('ADAM BAID \n Vistit in the North\n $410.00 \n Quantity')">ADD TO CARD</button>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <a href="Details Pages/Details2.htm">
                    <img src="assets/images/Screenshot 2023-05-03 102430.png" alt="">
                </a>
                <h3>JOHN ERIK</h3>
                <h4>The Stadium by Night</h4>
                <h3>$320.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('JOHN ERIK \n The Stadium by Night \n $320.00 \nQuantity')">ADD TO CARD</button>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <a href="Details Pages/Details3.htm">
                    <img src="assets/images/Screenshot 2023-05-03 102510.png" alt="">
                </a>
                <h3>ALICE JAMES</h3>
                <h4>When The Stars Align</h4>
                <h3>$500.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('ALICE JAMES \n  When The Stars Align \n $300.00 \n Quantity')">ADD TO CARD</button>
                </a>
            </div>
        </div>
    </div> 
    <div class="container-fluid mt-5">
    <div class="row" id="demo">
    <div class="col-12 col-md-6 col-lg-3 text-center">
     <a href="Details Pages/Details4.htm">
                    <img src="assets/images/1.png" alt="">
                </a>
                <h3>MICHAEL ALICE</h3>
                <h4>Last Time We Broke Up</h4>
                <h3>$500.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('MICHAEL ALICE \n Last Time We Broke  Up \n $500.00 \n Quantity')">ADD TO CARD</button>
                </a> 
    </div>
    <div class="col-12 col-md-6 col-lg-3 text-center ">
     <a href="Details Pages/Details5.htm">
                    <img src="assets/images/2.png" alt="">
                </a>
                <h3>DONALD WILLIAM</h3>
                <h4>Donate a Book</h4>
                <h3>$100.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('DONALD WILLIAM \n Donate a Books\n $100.00 \n Quantity')">ADD TO CARD</button>
                </a> 
    </div>
    <div class="col-12 col-md-6 col-lg-3 text-center">
     <a href="Details Pages/Details6.html"> 
                    <img src="assets/images/3.png" alt="">
                </a>
                <h3>MICHAEL ALICE</h3>
                <h4>BOOKS For a Causes</h4>
                <h3>$110.00 </h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mb-3 mt-3" onclick="addToCart('MICHAEL ALICE \n Books For a Cuse \n$110.00\nQuantity')">ADD TO CARD</button>
                </a> 
    </div> 
    <div class="col-12 col-md-6 col-lg-3 text-center">
    <a href="Details Pages/Details7.htm">
                    <img src="assets/images/4.png" alt="">
                </a>
                <h3>ALICE JAMES</h3>
                <h4>Home Made Meals</h4>
                <h3>$310.00</h3>
                <form action="/action_page.php" class="d-flex justify-content-center">
                    <p class="mt-2">Quantity:</p>
                    <input type="number" id="points" name="points" step="1" class="p-0 w-25 my-2 ms-2">
                </form>
                <a href="table.htm">
                    <button class="border-0 bg-danger text-light p-2 mt-3" onclick="addToCart('ALICE JAMES \n Home Made Meals \n$310.00 \n Quantity')">ADD TO CARD</button>
                </a>
    </div>

        </div>
    </div>

<?php include('assets/layouts/footer.php') ?>
