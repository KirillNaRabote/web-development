<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="css/reset.css" rel="stylesheet">
	<link href="css/search_form.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title>SearchForm</title>
</head>
<body>
  <main>
    <section class="page__form">
	    <form action="search_script.php" method="post">
		    <label><input type="email" placeholder="Email" name="email" class="form__email"></label>
		    <input type="submit" value="Получить данные" name="submit" class="form__submit">
	    </form>
    </section>
  </main>
</body>
</html>
