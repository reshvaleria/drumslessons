<!DOCTYPE html>
<html lang="ru">

<head>
  <title></title>
  <link rel="stylesheet" href="styles/style.css">
  <meta name="viewport" content="width=device-width">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Pacifico" rel="stylesheet">
  <meta charset="utf-8">
</head>

<body>
  <header class="main-header" id="top">
    <span class="title">Хочешь стать барабанщиком?</span>
    <h1>Уроки игры <br> на барабанах</h1>
  </header>

  <div class="primary-content t-border">
      <h2>Место проведения занятий</h2>
      <div class="group intro">
          <div class="basic">
              <p>Занятия проводятся по адресу: м.Семёновская, ул. Вольная 25 на репетиционной базе Дисконт Studio.<br>
                  К Вашим услугам всегда бесплатный Wi-Fi, горячий свежесваренный зерновой кофе.</p>
          </div>
          <div class="pro">
              <img src="img/test.jpg" alt="Студия" class="profile-image">
          </div>
      </div>
      <h2>Преподаватель</h2>
      <div class="group intro">
          <div class="basic">
              <p>Сергей Решетников. Тут должно быть написано какой он крутой. Oн играет в кораблях и научит вас ебашить как Колиас. Ну короче я в барабанах не шарю, он вам сам все расскажет. Тут просто должен быть параграф текста, который бы соответсвовал
          картинке. Вот и все!</p>
          </div>
      <div class="pro">
        <img src="img/teacher.jpg" alt="Сергей Решетников" class="profile-image">
      </div>
      </div>
      <h2>Стоимость занятий</h2>
      <div class="group intro">
          <div class="basic">
              <p>Продолжительность занятия 60 мин. Занятия проводятся раз в неделю.</p>
              <p>Стоимость первого пробного занятия: 700 руб.</p>
              <p>Стоимость последующих занятий: 1200 руб.</p>
          </div>
          <div class="pro">
              <img src="img/test.jpg" alt="Студия" class="profile-image">
          </div>
      </div>
      <div class="signin" id="signin">
        <h2>Запись on-line</h2>
          <p>Для записи на первое пробное занятие заполните форму ниже и вам перезвонят.</p>
          <form action="send.php" method="post">
              <input type="text" name="fio" placeholder="Укажите ФИО" required>
              <input type="text" name="phone" placeholder="Номер телефона" required>
              <input type="text" name="email" placeholder="Укажите e-mail" required>
              <input type="submit" value="Отправить">
          </form>
      </div>
      <a class="callout" href="#programs"><br>Перейти к программам обучения</a>
  </div>

    <div class="secondary-content t-border group" id="programs">
        <div class="programs"><h2>Программы обучения</h2></div>
      <div class="basic">
        <h3>Basic</h3>
        <p>Базовая программа обучения рассчитана на полное освоение (в рамках данной программы) Вами искусства игры на ударной установке, начиная от постановки рук и изучения нотной грамоты и заканчивая игрой в различных музыкальных направлениях.</p>
        <ol>
          <li>Введение. Постановка рук за инструментом </li>
          <li>Звукоизвлечение </li>
          <li>Изучение нотной грамоты </li>
          <li>Развитие чувства ритма </li>
          <li>Изучение рудиментов </li>
          <li>Работа с минусом (трек минус один) </li>
          <li>Изучение различных музыкальных направлений: </li>
          <ul>
            <li> Rock </li>
            <li> Funk </li>
            <li> R&B, HipHop </li>
            <li> Blues</li>
            <li> Latino </li>
            <li> Jazz</li>
          </ul>

        </ol>
      </div>

      <div class="pro">
        <h3>Pro</h3>
        <p>
          Индивидуально-техническая программа обучения рассчитана на музыкантов, желающих овладеть какой-либо определенной техникой игры на музыкальном инструменте и/или музыкальным направлением.</p>
        <ol>
          <li> Обучение отдельным элементам техники игры на ударной установке.
            По вашему выбору проводится обучение одному или нескольким ниже перечисленным элементам:</li>
          <ul>
            <li> Переложение рудиментов, заполнение на ударной установке.</li>
            <li> Координация. Независимость конечностей, различные приёмы звукоизвлечения.</li>
            <li> Сложные размеры.</li>
            <li> Изучение технических аспектов двойной педали (кардан).</li>
            <li> Работа с минусом (трек минус один).</li>
          </ul>
          <li> Обучение приемам игры на ударной установке в определённом музыкальном стиле.
            По Вашему выбору проводится обучение в рамках одного или нескольких ниже перечисленных музыкальных направлений:</li>
          <ul>
            <li>Rock</li>
            <li>Funk</li>
            <li>R&B</li>
            <li>Hip Hop</li>
            <li>Blues</li>
            <li>Latino</li>
            <li>Jazz</li>
          </ul>
        </ol>
      </div>
    </div><!-- End .secondary-content -->

    <footer class="main-footer">
      <p>Мы <a href="https://vk.com/drumschool11" target="_blank">ВКонтакте</a>.</p>
        <a href="#signin">Перейти к заявке обратной связи &raquo;</br></a>
        <a href="#top">Вернуться к началу страницы &raquo;</a>
    </footer>
</body>

</html>