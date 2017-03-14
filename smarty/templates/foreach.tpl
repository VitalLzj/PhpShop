<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h2>Foreach遍历</h2>
<ul>
    {foreach $array as $key => $value}
        <li>{$key}==={$value}</li>
    {/foreach}
</ul>
<h2>Foreach二维数组遍历</h2>
<table width="600px" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>nickname</th>
        <th>weapon</th>
    </tr>

    {foreach $hero as $key => $value}
        <tr {if $value@first }class="first"{/if}>
            <td>{$value.id}</td>
            <td>{$value.name}</td>
            <td>{$value.nickname}</td>
            <td>{$value.weapon}</td>
        </tr>
    {/foreach}

</table>
</body>
</html>