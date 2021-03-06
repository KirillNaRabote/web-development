<!DOCTYPE html>
<html lang="ru"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>first page</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
	<link href="css/form_style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <img src="images/logo.svg" alt="">
    <nav class="align_nav">
      <ul class="align_list navigation">
        <li class="inline">Что будет на курсе?</li>
        <li class="inline">Вопросы</li>
        <li class="inline">Автор</li>
      </ul>
      <button class="button button_small">Записаться на курс</button>
    </nav>
  </header>
  <main>
    <section class="main">
      <div class="main__info-align">
        <h1 class="main_title">Не <span class="pink">делай</span> это</h1>
        <p class="main__text">Онлайн-курс для творческих людей о том, как управлять своим временем</p>
        <button class="button button_long main__button">Записаться на курс</button>
      </div>
      <img class="main__image" src="images/mavrodi.png" alt="">
    </section>

    <section class="purposes">
        <div class="purposes__align">
          <img class="purposes__image_size-align" src="images/time.png" alt="">
          <h6 class="purposes__clock">Для тех, у кого слишком много идей и слишком мало времени</h6>
        </div>
        <div class="purposes__align purposes__align_notebook">
          <img class="purposes__image_size-align" src="images/notebook.png" alt="">
          <h6 class="purposes__notebook">Метод «списка не дел», который позволит успевать и реализовывать</h6>
        </div>
        <div class="purposes__align">
          <img class="purposes__image_size-align" src="images/target.png" alt="">
          <h6 class="purposes__targer">Курс научит творческих людей сосредоточиваться</h6>
        </div>
    </section>

    <section class="motivation">
      <div class="motivation__parts">
        <img class="finance_img" src="images/finances.png" alt="">
        <div class="motivation__parts_align">
          <h3 class="motivation__parts_head-content">Ты не успеешь</h3>
          <p class="motivation__parts_text-content">
            Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей.
            Как прибавить суткам часы, рассмотрим в нашем курсе.
          </p>
        </div>
      </div>
      <div class="motivation__parts motivation__align">
        <div>
          <h3 class="motivation__parts_head-content">Опять дедлайн</h3>
          <p class="motivation__parts_text-content">В мире, где столько всего интересного, когда же успевать жить?</p>
        </div>
        <img class="mind_blowing_img" src="images/mindBlowing.png" alt="">
      </div>
    </section>

    <section class="feature">
      <div class="feature__size">
        <h3 class="course_features">На курсе ты <span class="pink">сможешь</span></h3>
        <div class="feature__line">
          
            <div class="feature__card feature__text">
              <div class="feature__block">
                <img src="images/one.png" alt="">
                <p class="feature__text_align">Понять, что нужно делать, а что делать не стоит.</p>
              </div>
            </div>
  
            <div class=" feature__card feature__text">
              <div class="feature__block">
                <img src="images/two.png" alt="">
                <p class="feature__text_align">Перестать себя искусственно ограничивать.</p>
              </div>
            </div>
  
            <div class="feature__card feature__text">
              <div class="feature__block">
                <img src="images/three.png" alt="">
                <p class="feature__text_align">Определить сильные стороны 
                  и начать использовать слабые.</p>
              </div>
            </div>
         
            <div class="feature__card feature__text">
              <div class="feature__block">
                <img src="images/four.png" alt="">
                <p class="feature__text_align">Научиться достигать любой цели в 3 понятных шага.</p>
              </div>
            </div>
  
            <div class="feature__card feature__text">
              <div class="feature__block">
                <img src="images/five.png" alt="">
                <p class="feature__text_align">Сотрудничать эффективнои с правильными людьми.</p>
              </div> 
            </div>
  
            <div class="feature__card feature__text">
              <div class="feature__block">
                <img src="images/six.png" alt="">
                <p class="feature__text_align_special">Оптимизировать общение с клиентами и проведение совещаний.</p>
              </div>
            </div>
        </div>
      </div>
    </section>
	  <section class="page__form">
	    <?php
	    include 'form.php';
		  ?>
	  </section>
  </main>
  <footer class="footer">
    <p class="footer__text">Don`t <span class="pink">do</span> it</p>
  </footer>
</body>
</html> 