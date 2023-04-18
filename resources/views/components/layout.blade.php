<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="{{ URL::asset('css/general.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/aside.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/modal.css') }}" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Twitter-clone</title>
  </head>

<body class="mb-48">

    <header>
      @include('partials._navigation')
    </header>

<div class="content-container">
    <main>
      @yield('main')
    </main>
</div>

    <aside>
      @include('partials._aside')
    </aside>



    <script src="{{ URL::asset('js/header.js') }} "></script>
    <script src="{{ URL::asset('js/sidebar.js') }} "></script>
    <script src="{{ URL::asset('js/create_tweet.js') }} "></script>
    <script src="{{ URL::asset('js/icons_handler.js') }} "></script>
    <script src="{{ URL::asset('js/modal.js') }} "></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
