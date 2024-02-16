<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ИдёмВКино</title>
  @vite(['resources/css/client_styles.css'])
  @vite(['resources/css/normalize.css'])
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>

<body>
  <header class="page-header">
    <h1 class="page-header__title">Идём<span>в</span>кино</h1>
  </header>
  
  <main>
    <section class="ticket">

        <header class="tichet__check">
            <h2 class="ticket__check-title">Электронный билет</h2>
        </header>

        <div class="ticket__info-wrapper">
            <p class="ticket__info">На фильм: <span class="ticket__details ticket__title">{{ $movie_title }}</span></p>
            <p class="ticket__info">Ряд/Место: <span class="ticket__details ticket__chairs">{{ $places }}</span></p>
            <p class="ticket__info">В зале: <span class="ticket__details ticket__hall">{{ $hall_name }}</span></p>
            <p class="ticket__info">Начало сеанса: <span class="ticket__details ticket__start">{{ $start_time }}</span></p>

            <p class="ticket__info-qr">{{ $qr }}</p>

            <p class="ticket__hint">Покажите QR-код нашему контроллеру для подтверждения бронирования.</p>
            <p class="ticket__hint">Приятного просмотра!</p>
        </div>
    </section>
  </main>

<div class="block__link-main">
  <a class="link-main" href="{{ route('index') }}">На главную</a>
</div>
  
</body>
</html>