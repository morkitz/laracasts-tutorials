<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Fonts -->
        <!--<link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>

      @include('flash')

      <!-- Bootstrap container class -->
      <div class="container">
         @if (empty($people))
            No people exist.
         @else
            The following people exist:
         @endif
            @foreach ($people as $person)
            <li>{{ $person }}</li>
         @endforeach
      </div>

    </body>
</html>
