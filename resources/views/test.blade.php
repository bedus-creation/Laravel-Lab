<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <form action="/posts" method="post" class="bg-white p-4">
                    @csrf
                    <dynamic-form></dynamic-form>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>
