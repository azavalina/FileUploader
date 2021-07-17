<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!-- Styles -->
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/upload.js') }}"></script>

<body>
    <h1><strong>File upload</strong></h1>

    <form method="post" action="{{ route('postStore') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title"><strong>Text</strong></label>
            <input type="text" name="text" id="text" class="form-controll"/>
        </div>
        <div class="form-group file-area">
            <label for="images">Images <span>Your images should be at least 400x300 wide</span></label>
            <input type="file" name="media" id="media" required="required" />
        </div>
        <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
        </div>
        <div class="form-group">
            <button type="submit">Upload images</button>
        </div>

    </form>

    <a href="/posts/display" class="back-to-article" target="_blank">main view</a>
</body>
</html>