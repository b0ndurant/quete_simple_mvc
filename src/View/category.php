<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple MVC</title>

    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="icon" href="/assets/images/favicon.png">
</head>

<body>
    <section>
        <h1>Catégories</h1>
            <ul>
            <?php foreach ($categories as $category) : ?>
                <li><?= $category['name'] ?><a href="/category/<?= $category['id'] ?>"> (voir la categorie)</a></li>
            <?php endforeach ?>
            </ul>
        <p><a href="/">retourner a la liste des items</a></p>
    </section>
</body>
</html>
