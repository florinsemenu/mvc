<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <h1>Detalle de producto <?= $product->id ?></h1>
    <ul>
        <li>
            Producto: <?= $product->name ?>
        </li>
    </ul>
</body>
</html>