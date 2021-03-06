<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ejemplo de web del curso Modern PHP">
  
  <title>
      @yield('browsertitle','ModernPHP')
  </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/styles.css">

    
  @yield('css')

</head>

<body>

  @include('topnav')
  @yield('oustidecontainer')

  <div class="container">

      <div class="row">
          <br><br>
          @include('errormessage')
      </div>

      <div class="row">
          <div class="col-md-12 push-down">
              @yield('content')
          </div>
      </div>

  </div>

<footer class="footer">
  <div class="row footer-background">
      <div class="col-md-3 margin-left-5px">
          <div class="padding-left-8px">
              <h4>Contact Us</h4>
              123 Main St.<br>
              Unionville, PA<br>
              76543<br>
              +1 (555) 555-1212
          </div>
      </div>
      <div class="col-md-6">
      </div>
      <div class="col-md-3">
          <img src="/assets/map-small.png" class="pull-right">
      </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  @if ((Acme\Auth\LoggedIn::user()) && (Acme\Auth\LoggedIn::user()->access_level == 2))
        <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.4.5/ckeditor.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
  @endif

  @yield('bottomjs')
  @include('admin.admin-js')

</body>

</html>
