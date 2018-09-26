<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <br>
                @if(count($errors)>0)
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @endif
                <div class="col-md-offset-4 col-md-4">
                    <form action="" method="post" id="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="email">
                        </div>
                        @captcha
                        <div class="form-group">
                            <input class="btn btn-success" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
$(document).ready(function () {
//    $('#form').submit();
});
    </script>
</html>
