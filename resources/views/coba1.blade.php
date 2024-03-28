<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @php
      if(isset($_GET['ipk'])) {
        $ipk = $_GET['ipk'];
        echo 'IPK Anda ' . $ipk . '<br>';
        echo ($ipk < 2.75) ? 'Predikat Anda : Tidak dapat predikat' :
             (($ipk >= 2.76 && $ipk <= 3) ? 'Predikat Anda : Memuaskan' :
             (($ipk > 3 && $ipk <= 3.5) ? 'Predikat Anda : Sangat Memuaskan' :
             (($ipk > 3.5 && $ipk <= 4) ? 'Predikat Anda : Dengan pujian' : 'IPK tidak valid')));
      };
  @endphp
</body>
</html>