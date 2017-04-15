<html>
<body>

<form action="{{url('/R_delete')}}" method="get">
    输入要删除的节点<br/>
    <input type="text" name="index">
    <input type="submit" value="Submit">
</form>
<a href={{ url('/') }}>首页</a>
</body>
</html>