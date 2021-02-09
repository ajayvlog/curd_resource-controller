<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form action="mixed" method="post">
		@csrf
		<input type="text" name="name">
		 @error('name')
                        <small class="form-control-feedback has-danger"> {{ $message }} </small>
                        @enderror
		<input type="submit" name="submit">
	</form>


	 @if(session()->has('message'))

                      <h6>
                            {{Session::get('message')}}
                     </h6>
 

                       @endif


<table>
	<tr>
	<th>s.no</th>
	<th>name</th>
	<th>show</th>
	<th>delete</th>
	<th>edit</th>
	</tr>

  @foreach($d as $key => $v)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$v->name}}</td>
		<td><a class="btn btn-small btn-success" href="mixed/{{$v->id}}" >Show</a></td>

	  <td>  

<td>
                    <form action="{{ route('mixed.destroy', $v->id) }}" method="POST">

                  
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: 12px black solid; background-color:green;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>

                <td><a href="mixed/{{$v->id}}/edit">edit</a></td>
	  </td>
	</tr>
 @endforeach
</table>

</body>
</html>