<?php
session_start();
if(!isset($_SESSION['firstname'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Coding</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./js/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <?php
        include_once "header.php";
        include_once "section.php";
    ?>
    <section id="header">
    <!-- Container for Foodgrains product -->
    <div class="container-fluid mb-5 mt-5">
        <div class="row">
            <h2 class="product-heading"> Foodgrains & Cooking Essentials</h2>
            <!-- Cards 1 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center img-fluid">
                        <img src="images/foodgrains  (1).jpg" alt="" class="img-fluid ">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>60AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 1 ends here -->

            <!-- Cards 2 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/foodgrains  (2).jpg" alt="" class="img-fluid" >
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 2 ends here -->

            <!-- Cards 3 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/foodgrains  (3).jpg" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 3 ends here -->

            <!-- Cards 4 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/foodgrains  (4).jpg" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 4 ends here -->

            <!-- Cards 5 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/foodgrains  (5).jpg" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 5 ends here -->

                <!-- Cards 6 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/foodgrains (6).jpg" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 6 ends here -->
            </div>
    </div>
    <!-- Container for Foodgrains product ends -->

    <!-- Container for Fruits product -->
    <div class="container-fluid mb-5 mt-5">
        <div class="row">
            <h2 class="product-heading"> Fruits & Vegetables </h2>
            <!-- Cards 1 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center img-fluid">
                        <img src="images/Fruits/1.jpg" alt="" class="img-fluid ">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>60AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 1 ends here -->

            <!-- Cards 2 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/Fruits/1 (2).jpg"" alt="" class="img-fluid" >
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 2 ends here -->

            <!-- Cards 3 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/Fruits/1 (3).jpg"" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 3 ends here -->

            <!-- Cards 4 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/Fruits/1 (4).jpg" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 4 ends here -->

            <!-- Cards 5 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/Fruits/1 (5).jpg"" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 5 ends here -->

                <!-- Cards 6 -->
            <div class="col-lg-2 col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-1 text-center">
                        <img src="images/Fruits/1 (6).jpg"" alt="" class="img-fluid">
                        <h5>Ben</h5>
                        <div class="mt-3 info">
                            <span class="text1 d-block">dasdjfl kdfja ldjlkdfjld</span>
                            <span class="text1 ">cvbncjdy kyt</span>
                        </div>
                        <div class="cost mt-3 text-dark">
                            <span>660AFG</span>
                            <div class="star mt-3 align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Button for cards -->
                    <div class="p-3 addCard text-center text-white cursor">
                        <span class="text-uppercase">Add to Cart</span>
                    </div>
                </div>
            </div>
            <!-- card 6 ends here -->
            </div>
    </div>
    <!-- Container for Fruits product ends -->

        
            <div class="container-fluid">
                <h2>Categories</h2>
                <div class="tools row">
                    <div class="col-lg-4 col-md-4">
                        <a href=""><img src="images/new/1.jpg" alt=""></a> 
                        <a href=""> <img src="images/new/2.jpg" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href=""> <img src="images/new/3.jpg" alt="" style="height: 100%;"></a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href=""><img src="images/new/4.jpg" alt=""></a>
                        <a href=""><img src="images/new/5.jpg" alt=""></a> 
                    </div>
                </div>
            </div>
        </div>   
    </section>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>