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
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?>
                <li><?= $item['title'] ?><a href="/item/<?= $item['id'] ?>"> (voir l'item)</a></li>
            <?php endforeach ?>
            </ul>
        <p><a href="/categories">voir les categories</a></p>
    </section>
</body>
</html>
