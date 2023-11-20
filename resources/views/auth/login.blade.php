<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <center>
<form action="{{ url('user_login') }}" method="post" class="col-lg-3 col-xl-3" style="margin-top: 20vh;">
@csrf
@if(Session::has('fail'))
  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
  @endif
<div class="mb-3" >
    <label for="number" class="form-label">მობილურის ნომერი</label>
    <input type="text" class="form-control" name="number" id="number" value="{{ old('number') }}">
    @if($errors->has('number'))
      <span class="text-danger">{{ $errors->first('number') }}</span>
    @endif
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">პაროლი</label>
    <input type="password" class="form-control" name="password" id="password">
    @if($errors->has('password'))
      <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
  </div>

  <button type="submit" class="btn btn-primary">Submit</button><br>

</form>
</center>

</body>
</html>