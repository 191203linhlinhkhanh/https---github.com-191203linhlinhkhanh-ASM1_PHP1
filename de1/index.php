
<?php
include 'pdo.php';
include 'model.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'listsp':
            $list_sp= loadAll_sp();
            include "view.php";
            break;
case 'addsp':
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $ProductName = $_POST["ProductName"];
                $ProductPrice = $_POST["ProductPrice"];
                $Description  = $_POST["Description "];
                $CategoryId = $_POST["CategoryId"];
                add_sp($ProductName,$ProductPrice,$Description,$CategoryId);
            }
                
            $list_sp= loadAll_sp();
            include "view.php";
            break;
        }
    }
            ?>