<html>
<body>
<h1>链表为</h1>
@forelse($print as $prints)
    <h3>{{$prints->name}}</h3>
@empty
    <h3>空</h3>
@endforelse
<a href={{ url('/') }}>首页</a>
</body>
</html>