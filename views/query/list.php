<?php
include "../../header.php";
include "../../Controller/DashboardController.php";

User::redirectIfNotLoggedIn();

$dashboard = new DashboardController();
$data = $_SESSION['with'];
if ($data == null)
    $dashboard->selectData();

$_SESSION['with'] = null;
?>
<div>
<table>
    <thead>
    <th>Data Found </th>

    <?php foreach ($data as $datas) :?>
        <?= "<tr> $datas </tr>"; ?>
    <?php endforeach; ?>
</table>
</div>
<?php include "../../footer.php"; ?>
