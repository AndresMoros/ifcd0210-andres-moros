<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays 5</title>
    <?php
    include 'data.php'
    ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="t_container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número</th>
                </tr>
            </thead>
            <tbody>
                <?= tbody_gen($contacts) ?>
            </tbody>
        </table>
        </div>
        <div class="t_container">
            <table class="data-table">
            <thead>
                <tr>
                    <th>Vendedor</th>
                    <th>Ventas</th>
                </tr>
            </thead>
            <tbody>
                <?= tbody_gen_format($sellers) ?>
            </tbody>
            </table>
        </div>
        <div class="stats_container">
            <table id="stats_table">
                <thead>
                    <tr>
                        <th>
                            Importe de ventas mayor
                        </th>
                        <th>
                            Importe de ventas menor
                        </th>
                        <th>
                            Promedio de ventas
                        </th>
                        <th>
                            Ventas totales
                        </th>
                        <th>
                            Vendedor destacado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= to_money(max($sellers)) ?>
                        </td>
                        <td>
                            <?= to_money(min($sellers)) ?>
                        </td>
                        <td>
                            <?= to_money(round(array_sum($sellers) / count($sellers), 2)) ?>
                        </td>
                        <td>
                            <?= to_money(array_sum($sellers)) ?>
                        </td>
                        <td>
                            <?= array_search(max($sellers), $sellers) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>