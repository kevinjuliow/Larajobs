<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <form method="GET" action="./coba1" class="w-full m-auto">
    <div class="w-40">
      <label>Masukkan IPK</label>
      <input type="number" name="ipk" class="bg-gray-100">
    </div>
    <button type="submit" class="bg-red-800 rounded-5 w-20 text-white">
      Submit
    </button>
  </form>


</body>
</html>