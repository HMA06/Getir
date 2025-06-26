<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background: linear-gradient(to right, #1e1e2f, #12121c);
            font-family: 'Segoe UI', sans-serif;
            color: #f0f0f0;
            padding: 30px;
            margin: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2em;
            color: #fff;
        }

        .header p {
            color: #ccc;
            font-size: 1em;
        }



        .product {
            background: #222;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            padding: 20px;
            width: 220px;
            flex: 0 0 auto;
            text-align: center;
            transition: transform 0.3s;
        }
        .product:hover {
            transform: translateY(-5px);
        }
        .product img {
            border-radius: 10px;
            width: 100%;
            height: 140px;
            object-fit: cover;
        }

        .product h2 {
            margin: 10px 0;
            font-size: 16px;
        }
        .price {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .price del {
            color: #999;
            margin-right: 5px;
        }
        .button-group {
            text-align: center;
            margin-top: 40px;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 12px 28px;
            margin: 10px;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    
</body>
</html>

<body>
    <div class="header">
        <h1>🛍️ Ürün Listesi</h1>
        <p>En güncel kampanyalı ürünler burada!</p>
    </div>


        <div class="carousel-container" id="products">
            <!-- المنتجات من PHP -->
        </div>
    </div>

    <div class="button-group">
        <a href="http://localhost/php_course/matjr/products_sql.php?" class="btn">🍎 Meyveler</a>
        <a href="http://localhost/php_course/matjr/sebzeler.php?" class="btn"> Sebzeler</a>
    </div>
</body>
