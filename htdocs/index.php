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
            $sql -> closeCursor();
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

                $sql -> closeCursor();
            ?>
        </table>

        <!-- Exercice 4 -->
        <h2> Client whit fidelity card </h2>
        <table>
            <tr>
                <td> Lastname </td>
                <td> Firstname </td>
                <td> Fidelity Card number </td>
            </tr>
            <?php
                $sql = $pdo -> query('select * from clients where cardNumber');
                while ($rows = $sql -> fetch()){
                    echo
                    '<tr> <td>' . $rows['lastName'] . '</td>
                    <td>' . $rows['firstName'] . '</td>
                    <td>' . $rows['cardNumber'] . '</td> </tr>';
                }

                $sql -> closeCursor();
            ?>
        </table>

        <!--Exercice 5 -->
                <h2> order by asc </h2>
            <?php
            $sql = $pdo -> query("select * from clients where lastName LIKE 'M%'   order by lastName asc");
            while ($rows = $sql -> fetch()){
                echo
                '<p> Nom : ' . $rows['lastName'] . '</p>
                <p> Prenom : ' . $rows['firstName'] . '</p>';
            }

            $sql -> closeCursor();
            ?>

        <!-- exercice 6 -->
            <h2> Spectacles </h2>
            <table>
                <tr>
                    <th> Spectacle </th>
                    <th> Artiste </th>
                    <th> Date </th>
                    <th> Heure </th>
                </tr>

                <?php
        $sql = $pdo -> query("select title, performer, date, startTime from shows");
        while ($rows = $sql -> fetch()){
            echo
            '<tr> 
            <td>' . $rows['title'] . '</td>
            <td>' . $rows['performer'] . '</td>
            <td>' . $rows['date'] . '</td>
            <td>' . $rows['startTime'] . '</td> </tr>';
        }
        ?>
            </table>
    </body>
    </html>