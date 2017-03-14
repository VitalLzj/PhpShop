<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>变量修饰器</h2>
<p>
    当前时间是：{$time}
</p>
<p>
    当前时间是：{$smarty.now|date_format:'%Y-%m-%d %T'}
</p>
<p>{$poem} 截取八位 {$poem|truncate:8}  </p>
</body>
</html>