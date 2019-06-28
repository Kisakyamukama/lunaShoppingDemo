<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luna Customer Order Details</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
</head>
<body class="container ">
<h2 class="text-center ">Luna Order Status</h2>
<p class="ord-succ text-success text-center">Your order has been placed successfully.</p>
<hr>

<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-6 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $order['name']; ?></p>
        <p><?php echo $order['email']; ?></p>
        <p><?php echo $order['phone']; ?></p>
        <p><?php echo $order['address']; ?></p>
    </div>
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['id']; ?></p>
        <p><b>Total</b> <?php echo $order['grand_total'].' UGX'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-2">
            <div class="img" style="height: 75px; width: 75px;">
                <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                <img src="<?php echo $imageURL; ?>" width="75"/>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b><?php echo $item["name"]; ?></b></p>
            <p><?php echo $item["price"].' UGX'; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-2">
            <p><b><?php echo $item["sub_total"].' UGX'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
    <hr>
    <p class="btn btn-success">Print order details</p>
    <a class="btn btn-info" href="<?php echo base_url('index.php/products/'); ?>" >  Make another order</a>
</div>
    
</body>
</html>