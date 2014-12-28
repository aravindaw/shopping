<?php
require_once "connection.php";
$results

?>
<html>
<head>
    <title>
        Hello
    </title>
</head>
<body>
<div>
    <?php
    while ($row = mysql_fetch_assoc($results))
    ?>
    <table>

        <td>
            <tr>
                test1
                <?php echo $row ['ID'] ?>
            </tr>
        </td>
    </table>
</div>
</body>
<html>