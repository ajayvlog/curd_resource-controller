<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>

	@error('approve')
                <center>
                    <p class="text-danger"> {{ $message }} </p>
                </center>
                @enderror
                @error('approveemail')
                <center>
                    <p class="text-danger"> {{ $message }} </p>
                </center>
                @enderror

                
<form action="chk_login" method="post">
	@csrf
<input type="text" name="user_name">  @error('user_name')
                        <small class="form-control-feedback has-danger"> {{ $message }} </small>
                        @enderror
<input type="password" name="password">  @error('password')
                        <small class="form-control-feedback has-danger"> {{ $message }} </small>
                        @enderror
<input type="submit" name="submit">	
</form>


</body>
</html>