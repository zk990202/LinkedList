<html>
<body>

<form action="{{url('/R_insert')}}" method="get">
    插入的节点：<br/>
    <input type="text" name="index">
    <br/>
    插入的数据：<br/>
    <input type="text" name="data">
    <input type="submit" value="Submit">
</form>
<a href={{ url('/') }}>首页</a>

</body>
</html>