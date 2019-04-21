<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet" >
    <title>ФКП</title>
  </head>

  <body>
    <div class="row" style="background-image: url(images/bsuir2.png)">
      <div class="flex-center position-ref full-height">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}" class="topline">Профиль</a>
                      @else
                          <a href="{{ route('login') }}" class="topline">Вход</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="topline">Регистрация</a>
                          @endif
                      @endauth
                  </div>
              @endif

      </div>
      <div class="content">
        <div class="rowTitle white toLeft">
          Факультет компьютерного проектирования
        </div>
        <img class="logo" src="images/fcad.png" alt="">
        <div class="menu">
          <ul>
            <li>
              <a href="" class="menuElem">Деканат</a>
              <a href="#dek" class="menuElem">Люди</a>
              <a href="/gaids" class="menuElem">Гайды</a>
            </li>
            <li><a href="#spec" class="menuElem">Специальности</a></li>
            <li><a href="/post" class="menuElem">Студент студенту</a></li>
            <li><a href="/prepods" class="menuElem">Преподаватели</a></li>
            <li><a href="/studactiv" class="menuElem">Студактив</a></li>
          </ul>
        </div>
        <div class="social">
          <a href="https://www.instagram.com/instafcad"><img src="images/instagram.png" alt="Instagram"></a>
          <a href="https://vk.com/bsuir_fcad"><img src="images/vk.png" alt="VK"></a>
        </div>
      </div>
    </div>
    <div class="row" style="background-image: url(images/desktop.jpg)">
        <div class="content" id="spec">
        <div class="rowTitle">
          Специальности ФКП
        </div>
        <div class="specials">
          <ul>
            <li>
              <a href="https://vk.com/@bsuir_fcad-isitvbm" style="background-image: url(images/crown.png)">ИСиТ БМ</a>
              <a href="https://vk.com/@bsuir_fcad-isitvopb" style="background-image: url(images/like.png)">ИСиТ ОПБ</a>
              <a href="https://vk.com/@bsuir_fcad-ipoit" style="background-image: url(images/like.png)">ИПОИТ</a>
            </li>
            <li>
              <a href="https://vk.com/@bsuir_fcad-pms" style="background-image: url(images/like.png)">ПМС</a>
              <a href="https://vk.com/@bsuir_fcad-pippues" style="background-image: url(images/like.png)">ПиППУЭС</a>
              <a href="https://vk.com/@bsuir_fcad-esb" style="background-image: url(images/like.png)">ЭСБ</a>
            </li>
            <li>
              <a href="https://vk.com/@bsuir_fcad-pueos" style="background-image: url(images/like.png)">ПУЭОС</a>
              <a href="https://vk.com/@bsuir_fcad-mede" style="background-image: url(images/like.png)">МедЭ</a>
              <a href="https://vk.com/@bsuir_fcad-mikpres" style="background-image: url(images/like.png)">МиКПРЭС</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row" style="background-image: url(images/books.jpg)">
      <div class="content" id="dek">
        <div class="rowTitle white">
          Деканат
        </div>
        <div class="persons">
          <a href="/lihachevskyi" class="person">
            <div class="photo" style="background-image: url(images/lihachevskiy.jpg)"></div>
            <div class="name">
              <span>Лихачевский</span> Дмитрий Викторович
            </div>
          </a>
          <a href="/kotuhov" class="person">
            <div class="photo" style="background-image: url(images/kotuhov.jpg)"></div>
            <div class="name">
              <span>Котухов</span> Алексей Валерьевич
            </div>
          </a>
          <a href="/krakasevich" class="person">
            <div class="photo" style="background-image: url(images/krakasevich.jpg)"></div>
            <div class="name">
              <span>Кракасевич</span> Сергей Викторович
            </div>
          </a>
          <a href="/shatalova" class="person">
            <div class="photo" style="background-image: url(images/shatalova.jpg)"></div>
            <div class="name">
              <span>Шаталова</span> Виктория Викторовна
            </div>
          </a>
          <a href="/bogomaz" class="person">
            <div class="photo" style="background-image: url(images/bogomaz.jpg)"></div>
            <div class="name">
              <span>Богомаз</span> Нина Васильевна
            </div>
          </a>
          <a href="/mariyali" class="person">
            <div class="photo" style="background-image: url(images/lee.jpg)"></div>
            <div class="name">
              <span>Ли</span> Мария Олеговна
            </div>
          </a>
          <a href="/ganakova" class="person">
            <div class="photo" style="background-image: url(images/ganakova.jpg)"></div>
            <div class="name">
              <span>Ганакова</span> Екатерина Викторовна
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="footer">
      Created by Elizaveta Alexandrova & Kryscina Zabela
    </div>
  </body>

  </html>
