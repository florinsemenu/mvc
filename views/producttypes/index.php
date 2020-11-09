<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>

<body>
    <h1>Lista de productos</h1>

    <table>
        <thead>
            <th>Nombre</th>
        </thead>


        <tbody>
            <?php foreach ($producttypes as $product) { ?>
                <tr>
                    <td><?= $product->name ?></td>
                    <td><a href="/ProductType/show/<?= $product->id ?>">  Ver </a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>