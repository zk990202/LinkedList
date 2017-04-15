<html>
<body>
@forelse($data as $datum)
    <h1>链表末尾的数据为{{$datum->name}},且将其成功删除</h1>
@empty
    <h1>链表已空</h1>
@endforelse
<div class="links">
    <a href={{ url('/') }}>首页</a>
</div>
</body>
</html>