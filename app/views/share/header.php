<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hàng</title>

    <!-- Sử dụng Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=".../app/css/styles.css">
    <!-- Kết nối với thư viện Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header class="text-white text-center " style="display:flex;background-color:#198754;padding: 0 124px;">

        <img src="https://i.imgur.com/gdOMBrm.jpeg" style="height: 120px;margin: 20px;width: 10%;"/>
        <div style="display: flex;width: 90%;
    margin-bottom: 25px;">
        <form action="/php/product/search" method="GET" class="form-inline" style="display: flex;">
            <input type="text" name="keyword" class="form-control" placeholder="Search ..."
                style="width: 750px; margin: 50px 0 50px 50px;">
            <button type="submit" class="btn btn-light" style="margin: 50px 50px 50px 0;"><i
                    class="fas fa-search"></i></button>
        </form>
            <a class="nav-link text-white" href="/php/shoppingcart" style="margin: 50px 0;">
                <i class="fas fa-shopping-cart" style="    font-size: 22px;
    margin-top: 8px;"></i>
            </a>
        </div>
    </header>

    <!-- Menu điều hướng sử dụng Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark"
        style="background-color:#198754;margin-top: -30px;padding-bottom: 0;">
        <div class="container">
            <a class="navbar-brand" href="/php">Trang Chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="/php">Sản Phẩm</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                  
                    

                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="shoppingcart/orderHistory">Đơn đã đặt</a>
                    </li>

                   
                    <li class="nav-item">
                    <?php

include_once 'app/views/share/auth.php'
    ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <!-- Danh sách sản phẩm -->
            <div class="col-md-9">