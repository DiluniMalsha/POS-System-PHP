<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:36 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <title>Pos System/Order/Add new order</title>
    <style>
        #itemForm{
            position: absolute;
            top: 70%;
            left: 0;
        }

        #itemTable{
            position: absolute;
            top: 70%;
            left: 52%;
        }

        .lbl{
            font-size: 25px;
            font-family: 'Oswald', sans-serif;
        }
        #customerForm{
            position: absolute;
            top: 30%;
            left: 40%;
        }
        #orderForm{
            position: absolute;
            top: 30%;
            left: 0;
        }
        form{
            margin: 1%!important;
        }
        #btnProceed{
            position: absolute;
            left: 70%;
            top: 135%;
            width: 150px;
        }
        #btnClear{
            position: absolute;
            left: 85%;
            top: 135%;
            width: 150px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"  style="font-size: 25px">
        <img src="images/POS.png" width="75px">
        POS SYSTEM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer-View.php">Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Item-View.php">Item</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Order-View.php">Order <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<a href="Order-View.php">
    <button type="button" class="btn btn-outline-secondary" style="margin: 10px">
        <i class="fas fa-arrow-circle-left"></i>
        View Orders
    </button>
</a>

<label class="btn-primary" style="padding: 5px;border: 2px solid white; width: 100%">NEW ORDER</label>

<form style="width: 39%" id="orderForm">

    <label class="btn-secondary" style="padding: 5px; width: 100%">ORDER DETAILS</label>

    <div class="form-group row">
        <label for="inputOrderID" class="col-sm-2 col-form-label">Order ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputOrderID" placeholder="Ord-00123">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDate" placeholder="01/01/2019">
        </div>
    </div>
</form>
<form style="width: 59%" id="customerForm">
    <label class="btn-secondary" style="padding: 5px;border: 2px solid white; width: 100%">CUSTOMER DETAILS</label>

    <div class="form-group row">
        <label for="inputCustomerID" class="col-sm-2 col-form-label">Customer ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCustomerID" placeholder="C00123">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
    </div>
</form>

<label class="btn-secondary" style="position: absolute;top: 65%;margin-left: 1%; padding: 5px;border: 2px solid white; width: 99%">ITEM DETAILS</label>
<form style="margin: 1%;width: 50%" id="itemForm">


    <div class="form-group row">
        <label for="inputItemCode" class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputItemCode" placeholder="I-00123">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputItemName" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputItemName" placeholder="Item Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAvailableQty" class="col-sm-2 col-form-label">Available Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputAvailableQty" placeholder="100">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputUnitPrice" class="col-sm-2 col-form-label">Unit Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUnitPrice" placeholder="Rs.1000.00">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputQty" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputQty" placeholder="10">
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-primary" style="margin-left: 90%">
            Add
        </button>
    </div>
</form>
<table class="table table-hover"style="margin: 1%;width: 46%" id="itemTable">
    <thead class="thead-light">
    <tr>

        <th scope="col">ITEM CODE</th>
        <th scope="col">ITEM NAME</th>
        <th scope="col">UNIT PRICE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">TOTAL</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">I-001</th>
        <td>School Bag</td>
        <td>Rs.12000.00</td>
        <td>01</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">I-001</th>
        <td>School Bag</td>
        <td>Rs.12000.00</td>
        <td>01</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr>
        <th scope="row">I-001</th>
        <td>School Bag</td>
        <td>Rs.12000.00</td>
        <td>01</td>
        <td>Rs.12000.00</td>
    </tr>
    <tr style="color: red">
        <td colspan="4" style="text-align: right">
            <b>Total</b>
        </td>
        <td><b>Rs.36000.00</b></td>
    </tr>
    </tbody>
</table>

<div class="container" style="position: absolute; top: 125%; margin: 10px">
    <div class="row">
        <div class="col-lg-4">
            <label class="lbl">Total : Rs.</label>
            <input type="text">
        </div>
        <div class="col-lg-4">
            <label class="lbl">Discount : Rs.</label>
            <input type="text">
        </div>
        <div class="col-lg-4">
            <label class="lbl">Sub Total : Rs.</label>
            <input type="text">
        </div>
    </div>
</div>

<button type="button" class="btn-lg  btn-primary" id="btnProceed">Proceed</button>
<button type="button" class="btn-lg btn-warning" id="btnClear">Clear</button>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
