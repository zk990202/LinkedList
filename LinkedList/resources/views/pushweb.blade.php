<html>
<body>

<form action="{{url('/R_push')}}" method="get">
    输入要压入链表末尾的数据<br/>
    <input type="text" name="data">
    <input type="submit" value="Submit">
</form>
<a href={{ url('/') }}>首页</a>
</body>
</html>