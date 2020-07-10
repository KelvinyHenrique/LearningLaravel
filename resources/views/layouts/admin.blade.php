<!Doctype html >

<html>
    <head>
      <title>@yield('title') - Laravel 6</title>
    </head>

    <body>
        <header>
            <h1>Header</h1>
        </header>
        <hr/>
        <section>
           @yield('content')
        </section>
        <hr/>
        <footer>
            Rodapé
        </footer>
    </body>

</html>
