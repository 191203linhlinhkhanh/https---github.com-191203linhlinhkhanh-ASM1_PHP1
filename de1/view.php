<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PRODUCT</title>
</head>
<body>
    <form action="index.php?act=addsp" method="post" >
    <h1>ADD PRODUCT</h1>
    <label for="">Product name</label>
    <input type="text" name="ProductName" id="ProductName">
    <label for="">Product price</label>
    <input type="text" name="ProductPrice" id="ProductPrice">
    <label for="">Description </label>
    <input type="text" name="Description" id="Description">
    <label for="">CategoryId</label>
    <select id="CategoryId" name="CategoryId" required>
            <option value="Sport">Sport</option>
            <option value="Study">Study</option>
        </select><br>
        <input type="submit" name="themmoi" value="ADD" class="btn btn-primary">
</form>
</body>
</html>