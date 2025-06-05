<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Andersen Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="bg-light">

  <div class="content-wrapper">

    @include('includes.notification')

    @if(Route::current()->getName() != 'form.edit')
      @include('includes.create')
      @include('includes.list')
    @else
      @include('includes.edit')
    @endif

  </div>
  <script src="{{asset('assets/js/notification.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>