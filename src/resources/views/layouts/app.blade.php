<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pigly</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/weight_logs">
        Pigly
      </a>
      <a class="header_goal" href="/weight_logs/goal_setting">目標体重設定</a>
      <form class="form" action="/logout" method="post">
        @csrf
        <button class="header_logout">ログアウト</button>
      </form>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
