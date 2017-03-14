<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>您的IQ为</p>{$IQ}
<p>您适合学习
    {if $IQ >= 100}
        乾坤大挪移
    {else}
        葵花宝典
    {/if}
</p>

</body>
</html>