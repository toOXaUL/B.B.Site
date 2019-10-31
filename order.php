<!DOCTYPE html>
<html lang = "ru">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "css/order.css?version=2" type = "text/css">
  <link rel = "stylesheet" href = "css/media-queries/media-queries-order.css" type = "text/css">
  <link rel = "shortcut icon" href = "assets/images/favicon.png" type = "image/png">
  <title>keimtav - студія розробки</title>
</head>
<body>
  <header>
    <div class = "header-block">
      <nav class = "menu">
        <ul class = "ul-nav">
          <li class = "li-nav"><a href="index.php">Головна</a></li>
          <li class = "li-nav"><a href = "service.php">Послуги</a></li>
          <li class = "li-nav"><a href = "order.php">Замовити</a></li>
          <li class = "li-nav"><a href = "about.php">Про нас</a></li>
        </ul>
      </nav>
      <div class = "logo">
        <img src = "assets/images/logotype.png" alt = "Логотип студії">
      </div>
      <div id = "header-text">
        <span>keimtav studio</span>
      </div>
      <div class = "topline">
      </div>
    </div>
  </header>
  <main>
    <section>
      <div class = "back-image-block">
        <div class = "header-text-about">
          <span>Замовлення:</span>
        </div>
      </div>
      <div class = "about-block">
        <div class = "about-line">
        </div>
        <div class = "form-block">
          <form action = "" method = "post">
            <label>Ваше ім'я:</label>
            <input type = "text" name = "input-name" placeholder = "Ім'я" required>
            <br><br>
            <label>Ваш E-mail:</label>
            <input type = "text" name = "input-email" placeholder = "E-mail" required>
            <br><br>
            <label>Номер телефону:</label>
            <input type = "text" name = "input-phone" placeholder = "Номер телефону" required maxlength = "13">
            <br><br>
            <label>Тип послуги:</label>
            <select name = "service-type">
              <option value = "Веб-розробка">Веб-розробка</option>
              <option value = "Мобільні додатки">Мобільні додатки</option>
              <option value = "Десктоп-розробка">Десктоп-розробка</option>
            </select>
            <label>Побажання:</label>
            <textarea></textarea>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer>
  </footer>
</body>
</html>
