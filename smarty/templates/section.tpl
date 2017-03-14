<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h2>Section</h2>

<ul>
    {section name='item' loop=$arr}
        <li>{$arr[item]}</li>
    {/section}
</ul>

</body>
</html>