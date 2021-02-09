<form action="{{ route('mixed.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
         <input type="text" name="id" value="{{$data->id}}">
		 <input type="text" name="name" value="{{$data->name}}">
		  @error('name')
                        <small class="form-control-feedback has-danger"> {{ $message }} </small>
                        @enderror
		<input type="submit" name="submit">
	</form>