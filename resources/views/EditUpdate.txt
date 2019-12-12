<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <br>
            <h2>User Add</h2>
            <br>
             <form action="{{$isEdit ? route('user.update',$dbuser->id) : route('user.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                                <label for="name">Name:</label>
                        <input type="text" name="name" value="{{$dbuser->name ?? null}}" class="form-control">
                        <span>{{$errors->first('name') ?? null}}</span><br>
                              </div>
                              <div class="form-group">
                                    <label for="email">Email address:</label><br>
                              <input type="email" name="email" value="{{$dbuser->email ?? null}}" class="form-control">
                              <span>{{$errors->first('email') ?? null}}</span><br>
                                  </div>
                                  <div class="form-group">
                                        <label for="pass">Password:</label>
                                  <input type="password" name="pass" class="form-control">
                                  <span>{{$errors->first('pass') ?? null}}</span>
                                      </div>
                                    <input type="submit" value="Submit" class="btn btn-default">
                </form>
        </div>
    </div>
</div>
</body>
</html>
