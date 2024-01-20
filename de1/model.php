<?php
function loadAll_sp()
{
    $sql = "SELECT * FROM toyproduct order by productId desc";
    $list = pdo_query($sql);
    return $list;
}
function add_sp($ProductName,$ProductPrice,$Description,$CategoryId){
$sql= "INSERT INTO toyproduct(ProductName,ProductPrice,'Description',CategoryId)
VALUES ('$ProductName', '$ProductPrice','$Description','$CategoryId');";

}

?>