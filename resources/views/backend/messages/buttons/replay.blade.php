
<form action="{{route($routeName.'.replay',[$parameter => $row])}}" method="POST" style="float: right;
    margin-left:20px;margin-right">
       
       @csrf
       <input type="hidden" name="_method" value="GET">
       <button type="submit" class="btn  btn-primary">Replay</button>
   </form>