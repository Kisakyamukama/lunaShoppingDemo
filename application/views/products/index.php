<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luna Courier Shopping cart demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
</head>
<body class="container">
            
    <div class="jumbotron container">
    <h1>Welcome to <i>Luna e-shopping</i></h1>
	
    </div>
    <div class="container">
        <!-- Cart info -->
            <a href="<?php echo base_url('index.php/cart'); ?>" class="cart-link" title="View Cart">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <i class="fas fa-shopping-cart"></i>
                <span>(<?php echo $this->cart->total_items(); ?>)</span>
            </a>

            <!-- List all products -->
            <div class="row">
                <div class="col-lg-12">
                <?php if(!empty($products)){ foreach($products as $row){ ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('assets/images/'.$row['image']); ?>" />
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $row['price']; ?> UGX</h4>
                                <h4><?php echo $row['name']; ?></h4>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                            <div class="atc">
                                <a href="<?php echo base_url('index.php/products/addToCart/'.$row['id']); ?>" class="btn btn-success">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } }else{ ?>
                    <p>Product(s) not found...</p>
                <?php } ?>
                </div>
            </div>


    </div>
</body>
</html>