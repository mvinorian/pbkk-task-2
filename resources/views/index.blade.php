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
  <div class="w-full h-screen flex flex-col justify-center items-center font-poppins bg-white">
    <main class="max-w-xl w-full py-12">
      <form method="POST" action="/" class="space-y-10" enctype="multipart/form-data">
        @csrf
        <h1 class="w-full text-center font-extrabold text-5xl text-teal">This is a Simple Form</h1>

        <div class="space-y-6">
          <div class="space-y-1.5">
            <label for="email" class="block font-semibold text-teal">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email" class="w-full block px-3 py-2.5 rounded-md bg-beige placeholder:text-mint-hover text-teal" />
            @error('email')
            <p class="text-red-400">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1.5">
            <label for="password" class="block font-semibold text-teal">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" class="w-full block px-3 py-2.5 rounded-md bg-beige placeholder:text-mint-hover text-teal" />
            @error('password')
            <p class="text-red-400">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1.5">
            <label for="name" class="block font-semibold text-teal">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter name" class="w-full block px-3 py-2.5 rounded-md bg-beige placeholder:text-mint-hover text-teal" />
            @error('name')
            <p class="text-red-400">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1.5">
            <label for="float" class="block font-semibold text-teal">2.50 < x < 99.99</label>
            <input type="text" id="float" name="float" placeholder="Enter float" class="w-full block px-3 py-2.5 rounded-md bg-beige placeholder:text-mint-hover text-teal" />
            @error('float')
            <p class="text-red-400">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1.5">
            <label for="image" class="block font-semibold text-teal">Image</label>
            <input type="file" id="image" name="image" accept="image/*" class="w-full block px-3 py-2.5 rounded-md bg-beige text-mint-hover" />
            @error('image')
            <p class="text-red-400">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="w-full block px-6 py-2.5 rounded-md bg-teal ring-2 ring-inset ring-teal-hover text-white font-semibold">Submit</button>
        </div>
      </form>
    </main>
  </div>
</body>

</html>