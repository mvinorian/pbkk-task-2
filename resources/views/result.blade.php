<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Simple Form Page</title>
</head>

<body>
  <div class="w-full min-h-screen flex flex-col justify-center items-center font-poppins bg-white">
    <main class="max-w-xl w-full py-12 space-y-10">
      <h1 class="w-full text-center font-extrabold text-5xl text-teal">Results</h1>
      
      <div class="space-y-6">
        @foreach ($results as $key => $result)
          <div class="space-y-1.5">
            <p class="font-semibold text-teal">{{ ucwords($key) }}</p>
            <p class="w-full block px-3 py-2.5 rounded-md bg-beige text-mint-hover">{{ $result }}</p>

            @if ($key == 'image')
              <img src="{{ asset('storage/images/'.$result) }}" alt="">
            @endif
          </div>
        @endforeach

        @if (session('status'))
            <p class="w-full text-center px-3 py-2.5 rounded-md bg-mint text-white">{{ session('status') }}</p>
        @endif
      </div>
    </main>
  </div>
</body>
</html>