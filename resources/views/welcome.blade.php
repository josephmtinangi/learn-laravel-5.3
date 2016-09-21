<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body>
  
        <div class="container">
            @foreach($users->chunk(4) as $userSet)
                <div class="row">
                    @foreach($userSet as $user)
                        <div class="col-xs-12 col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#">{{ $user->name }}</a> <br>
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @unless($loop->remaining)
                        <div class="col-xs-12 col-sm-3 text-center">
                            <button type="button" class="btn btn-primary btn-lg">Add</button>
                        </div>
                    @endunless                    
                </div>
            @endforeach
        </div>

    </body>
</html>
