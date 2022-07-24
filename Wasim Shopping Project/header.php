<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Coding</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./js/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div class="title d-flex">
        <button href=""><img src="images/logo.png">
            <h1>Harirod Online Shopping</h1></button>
            
    </div>
    <div class="sticky-lg-top sticky-md-top sticky-sm-top" >
        <nav class="navbar navbar-expand-lg navbar-light bg-dark pt-2 pb-2">
            <div class="container">
                <a class="navbar-brand" href="">Categories</a>
                <div class="src-bar">
                <form class="d-flex" role="search" action="action_page.php">
                    <input type="text" placeholder="What do you need?" name="search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                </div>

            <button class="navbar-toggler bg-light " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
          
        
            <div class="collapse  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item active">
                <a class="nav-link" href="home.php">HOME</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="product.php">PRODUCTS</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>
    </div>
</body>
</html>