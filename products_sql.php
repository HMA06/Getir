<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Product Slider</title>
<style>
    body {
        background: linear-gradient(to right, #1e1e2f, #12121c);
        font-family: 'Segoe UI', sans-serif;
        color: #f0f0f0;
        padding: 30px;
        margin: 0;
        }


    h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }

    .carousel-wrapper {
        position: relative;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    .carousel-container {
        overflow-x: auto;
        white-space: nowrap;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        padding: 20px 40px;
        scroll-behavior: smooth;

        scrollbar-width: none; 
        -ms-overflow-style: none;
    }

    .carousel-container::-webkit-scrollbar {
        display: none;
    }

    .product {
        height: 320px;
        display: inline-block;
        width: 200px;
        margin: 20px;
        border: 1px solid #333;
        padding: 15px;
        text-align: center;
        border-radius: 15px;
        background-color:hsl(199, 49.10%, 22.40%);
        color: #fff;
        scroll-snap-align: start;
        transition: transform 0.3s ease;
    }

    .product:hover {
        transform: scale(1.05);
        border-color: #555;
    }

    .product img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .product h2 {
        font-size: 14px;
        margin: 10px 0;
        word-wrap: break-word;
    }

    .price del {
        color: #888;
        margin-right: 5px;
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        color: white;
        font-size: 28px;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
    }

    .arrow.left {
        left: -10px;
    }

    .arrow.right {
        right: -10px;
    }

    .btn-wrapper {
        text-align: center;
        margin-top: 30px;
    }

    .btn {
        display: inline-block;
        margin: 10px;
        padding: 15px 30px;
        background-color: #007bff;
        color: white;
        font-size: 1.1em;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

    <h2><em>Meyve Ürün Listesine Hoş Geldiniz</em></h2>

    <div class="carousel-wrapper">
        <button class="arrow left" onclick="document.getElementById('products').scrollBy({left: -220, behavior: 'smooth'});">&#10094;</button>
        <button class="arrow right" onclick="document.getElementById('products').scrollBy({left: 220, behavior: 'smooth'});">&#10095;</button>

        <div class="carousel-container" id="products">
            <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "course_ecommerce";

                $conn = new mysqli($host, $username, $password, $dbname);
                $sql = "SELECT * FROM products";
                $result = $conn -> query($sql);

                while($row = $result -> fetch_assoc()) {
            ?>
            <div class="product">
                <img src="images/<?php echo $row["image"]; ?>" alt="Product Image">
                <h2><?php echo $row["name"]; ?></h2>
                <div class="price">
                    <?php if($row["active_offer"] == 1){ ?>
                        <del><?php echo $row["price"]; ?> TL</del>
                        <?php echo $row["offer_price"]; ?> TL
                    <?php } else { ?>
                        <?php echo $row["price"]; ?> TL
                    <?php } ?>
                </div>
                <p><?php echo $row["qty"]; ?> Adet</p>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="btn-wrapper">
        <a href="http://localhost/php_course/matjr/sebzeler.php?" class="btn"> Sebzeler (Vegetables)</a>
        <a href="http://localhost/php_course/matjr/products.php?#" class="btn">Ana Sayfa</a>
    </div>

</body>
</html>
