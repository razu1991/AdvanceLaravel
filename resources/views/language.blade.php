<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">@lang('header.Welcome',['name'=>'MyWebsite'])</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">@lang('header.Contact')</a></li>
                    <li><a href="#">{{ trans_choice('header.Item',1) }}</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h3>Basic Navbar Example</h3>
            <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
        </div>

    </body>
</html>