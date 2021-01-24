
<form action="{{route($routeName.'.destroy',[$parameter => $row])}}" method="POST" style="float: left;
 margin-left:20px;margin-right:-50px">
    
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <button type="submit" class="btn  btn-danger">Delete</button>
</form>