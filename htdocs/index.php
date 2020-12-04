    <?php
    require_once 'connect.php';
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD1</title>
    </head>
    <body>
            <!--Exercice 1 && 3-->
        <h2> client </h2>
        <table>
            <tr>
                <td> Lastname </td>
                <td> Firstname </td>
            </tr>

            <?php
                $sql = $pdo -> query('select * from clients limit 0,20');
            while ($rows = $sql -> fetch()){
                echo
                '<tr> <td>' . $rows['lastName'] . '</td>
                <td>' . $rows['firstName'] . '<td>';
            }
            ?>
            </table>
            <!-- Exercice 2 -->
        <h2> Show Types </h2>
        <table>
            <tr>
                <td> Types </td>
            <?php>
                $sql = $pdo -> query('select * from showTypes');
                while ($rows = $sql -> fetch()){
                    echo
                    '<tr> <td>' . $rows['type'] . '</td> </tr>';
                }
            ?>
        </table>
    </body>
    </html>