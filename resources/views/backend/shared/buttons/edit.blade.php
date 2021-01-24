<form action="{{route($routeName.'.edit',[$parameter => $row->id])}}" method="POST" style ='float: left;margin-left:20px'>
    @csrf
    <input name="_method" type="hidden" value="GET">
    <button type="submit"class="btn btn-primary">Edit</button>
</form>