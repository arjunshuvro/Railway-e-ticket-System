<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>E-ticket - @yield('title') </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.0/examples/cover/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark" data-new-gr-c-s-check-loaded="14.1008.0" data-gr-ext-installed="">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0"><a href="http://127.0.0.1:8000/panel">E-Ticket</a></h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">   </a>
          @guest
          @if (Route::has('login'))
          @endif

          @if (Route::has('register'))
          @endif
          @else
          <a class="nav-link" href="#">  {{ Auth::user()->name }} </a>
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
          @endguest
        </nav>
      </div>
    </header>


    <main class="px-3">
      @yield('content')
    </main>

    <footer class="mt-auto text-white-50">
      <p>E-ticket</a>, by <a href="https://www.facebook.com/arjunshuvro" class="text-white">@Arjun</a>.</p>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $("#route_id").on('change', function() {
      let options = "<option selected>Select Train</option>";
      $.get(window.location.origin + '/panel/route/' + $("#route_id").val() + '/trains', function(data) {
        if (data.status) {
          let trains = data.trains;
          trains.forEach((train) => {
            options += '<option value="' + train.id + '">' + train.name + '</option>'
          })
        }
        $("#train_id").html(options);
      });
    });
    $("#train_id").on('change', function() {
      let ticketoptions = "<option selected>Select Tickets</option>";
      $.get(window.location.origin + '/panel/train/' + $("#train_id").val() + '/tickets', function(data) {
        if (data.status) {
          console.log()
          let tickets = data.tickets;
          tickets.forEach((ticket) => {
            //ticketoptions += `<option value="{$ticket.id}">{$ticket.name}</option>`
            ticketoptions += '<option value="' + ticket.id + '">' + ticket.class + " " + ticket.time + '</option>'
          })
        }
        $("#ticket_id").html(ticketoptions);
      });
    })
  </script>
</body>

</html>