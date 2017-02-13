<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Hello world</title>
    <base href="http://<?= $_SERVER['SERVER_NAME'] ?><?= dirname($_SERVER['PHP_SELF']) ?>/"/>
</head>
<body>

<h1>Hellow world</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

    <? foreach ($result as $app): ?>
        <tr>
            <td><?= $app['id'] ?></td>
            <td>
                <a href="src/get/<?= $app['id'] ?>"><?= $app['name'] ?></a>
            </td>
        </tr>
    <? endforeach ?>
</table>

</body>
</html>