<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="/resources/css/general.css" />
    <link rel="stylesheet" href="/resources/css/header.css" />
    <link rel="stylesheet" href="/resources./styles/sidebar.css" />
    <link rel="stylesheet" href="/resources/css./styles/main.css" />
    <link rel="stylesheet" href="/resources/css./styles/aside.css" />
    <link rel="stylesheet" href="/resources/css./styles/footer.css" />
    <link rel="stylesheet" href="/resources/css/modal.css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
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

</body>
</html>
