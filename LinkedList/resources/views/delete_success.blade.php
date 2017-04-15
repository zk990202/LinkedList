<html>
<body>
@if($index <= $max)
    <h1>删除成功</h1>
@else
    <h1>非法操作</h1>
@endif
<div class="links">
    <a href={{ url('/') }}>首页</a>
</div>
</body>
</html>