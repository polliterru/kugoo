<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link type="image/favicon" href="./img/favicon.ico" rel="shortcut icon">
  <title>Kugoo</title>
</head>

<body>

  <header>
    <nav class="navbar">
      <div class="header-nav-wrapper">
        <div class="container header-nav-wrapper-container">
          <div class="header-nav-menu-wrapper">
            <ul class="header-nav js-header-nav">
              <li class="header-nav-item">
                <a href="#promo-block" class="header-nav-link">Сервис</a>
              </li>
              <li class="header-nav-item">
                <a href="#promo-block-2" class="header-nav-link">Сотрудничество</a>
              </li>
              <li class="header-nav-item">
                <a href="#cta-section" class="header-nav-link">Заказать звонок</a>
              </li>
              <li class="header-nav-close js-header-nav-close">
                <svg class="burger-close">
                  <use href="./img/sprite.svg#burger_close"></use>
                </svg>
              </li>
            </ul>
            <div class="header-nav-social">
              <a href="#!" class="header-nav-social-link">
                <svg class="nav-social-icon">
                  <use href="./img/sprite.svg#viber"></use>
                </svg>
              </a>
              <a href="#!" class="header-nav-social-link">
                <svg class="nav-social-icon">
                  <use href="./img/sprite.svg#whatsapp"></use>
                </svg>
              </a>
              <a href="#!" class="header-nav-social-link">
                <svg class="nav-social-icon">
                  <use href="./img/sprite.svg#telegram"></use>
                </svg>
              </a>
            </div>

          </div>
          <div class="header-phone">
            <a href="tel:+78005055461" class="header-phone-link">+7 (800) 505-54-61</a>
          </div>
          <div class="burger-menu js-burger-menu">
            <svg class="burger-icon">
              <use href="./img/sprite.svg#burger_menu"></use>
            </svg>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="search">
          <a href="#!" class="logo-link">
            <h2 class="title logo">KUGOO</h2>
          </a>
          <button class="button search-button">
            <svg class="button-burger-icon">
              <use href="./img/sprite.svg#burger"></use>
            </svg>
            Каталог
          </button>
          <form class="search-form">
            <div class="search-wrapper">
              <input type="text" name="search" placeholder="Искать самокат KUGO">
              <button type="submit" class="button button-search">
                <svg class="search-icon">
                  <use href="./img/sprite.svg#search"></use>
                </svg>
              </button>
            </div>
          </form>
          <ul class="control-block">
            <li class="control-block-item">
              <a href="#!" class="control-block-link">
                <svg class="control-block-icon">
                  <use href="./img/sprite.svg#scales"></use>
                </svg>
              </a>
            </li>
            <li class="control-block-item">
              <a href="#!" class="control-block-link">
                <svg class="control-block-icon">
                  <use href="./img/sprite.svg#heart"></use>
                </svg>
              </a>
            </li>
            <li class="control-block-item">
              <a href="#!" class="control-block-link">
                <svg class="control-block-icon">
                  <use href="./img/sprite.svg#shopping-cart"></use>
                </svg>
                <p class="control-block-text">Корзина</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="section main" id="main">
    <div class="main-img">
      <div class="container">
        <div class="main-content">
          <div class="main-content-text-block">
            <div class="adress">
              <svg class="adress-icon">
                <use href="./img/sprite.svg#pin"></use>
              </svg>
              <p class="adress-info-text">Восточно-Кругликовская улица, 86</p>
              <p class="time-info-text">Вт - Сб 10:00 - 20:00</p>
            </div>
          </div>
          <h1 class="title title-color-light title-main">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
          <p class="main-text">в Москве без ограничения по времени</p>
          <ul class="main-content-elements">
            <li class="main-content-element">
              <div class="main-element-icon-wrapper">
                <svg class="main-element-icon">
                  <use href="./img/sprite.svg#scooter"></use>
                </svg>
              </div>
              <p class="main-content-element-text">Поймете, какая модель вам подходит</p>
            </li>
            <li class="main-content-element">
              <div class="main-element-icon-wrapper">
                <svg class="main-element-icon">
                  <use href="./img/sprite.svg#energy"></use>
                </svg>
              </div>
              <p class="main-content-element-text">Проверите лучшие самокаты в деле</p>
            </li>
          </ul>
          <button class="button-light main-button js-open-modal" data-modal-class="modal">Записаться</button>
        </div>
      </div>
    </div>
  </section>

  <section class="section promo-block" id="promo-block">
    <div class="container">
      <div class="promo-block-wrapper">
        <h2 class="title promo-block-title">Определите максимально подходящую вам модель не&nbsp;теоретически, а на практике</h2>
        <div class="promo-block-description">
          <h3 class="title-size-M">Тест-драйв поможет:</h3>
          <ul class="promo-block-list">
            <li class="promo-block-list-item">
              <svg class="promo-block-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Понять подходит ли вам конкретная модель;
            </li>
            <li class="promo-block-list-item">
              <svg class="promo-block-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Испытать самокат в «реальной жизни»;
            </li>
            <li class="promo-block-list-item">
              <svg class="promo-block-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Оценить удобство хранения и эксплуатации;
            </li>
            <li class="promo-block-list-item">
              <svg class="promo-block-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Узнать реальные характеристики и возможности модели.
            </li>
          </ul>
          <picture class="promo-block1-img">
            <source type="image/webp" srcset="img/promo-block1.webp">
            <source type="image/png" srcset="img/promo-block1.png">
            <img src="./img/promo-block1.png" alt="Картинка промо блок">
          </picture>
        </div>

      </div>
    </div>
  </section>

  <section class="section promo-block-2" id="promo-block-2">
    <div class="container promo-block-content">
      <div class="promo-block-2-wrapper">
        <h2 class="title promo-block-2-title">Научим правильной и&nbsp;безопасной езде в городе вас или вашего ребенка</h2>
        <div class="promo-block-2-description">
          <h3 class="title-size-M">На обучении специалист расскажет:</h3>
          <ul class="promo-block-2-list">
            <li class="promo-block-2-list-item">
              <svg class="promo-block-2-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Как подготовить самокат к поездке;
            </li>
            <li class="promo-block-2-list-item">
              <svg class="promo-block-2-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Как «завести» самокат;
            </li>
            <li class="promo-block-2-list-item">
              <svg class="promo-block-2-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Как вести себя во время поездки и обезопасить себя и окружающих;
            </li>
            <li class="promo-block-2-list-item">
              <svg class="promo-block-2-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Как складывать и раскладывать электросамокат;
            </li>
            <li class="promo-block-2-list-item">
              <svg class="promo-block-2-icon">
                <use href="./img/sprite.svg#check"></use>
              </svg>
              Как ухаживать за своим девайсом.
            </li>
          </ul>
        </div>
      </div>
      <picture class="promo-block-2-img">
        <source type="image/webp" srcset="img/promo-block2.webp">
        <source type="image/png" srcset="img/promo-block2.png">
        <img src="./img/promo-block2.png" alt="Картинка промо блок">
      </picture>
    </div>
  </section>

  <section class="section product">
    <div class="container">
      <h2 class="title product-title">Сейчас для тест-драйва и обучения доступны следующие модели</h2>
      <div class="product-cards-wrapper">
        <div class="product-card">
          <picture class="product-card-img">
            <source type="image/webp" srcset="img/scooter.webp">
            <source type="image/png" srcset="img/scooter.png">
            <img src="./img/scooter.png" alt="Картинка промо блок">
          </picture>
          <div class="product-card-top">
            <p class="marker marker-hit">ХИТ</p>
            <svg class="product-card-icon">
              <use href="./img/sprite.svg#scales"></use>
            </svg>
          </div>
          <div class="product-card-footer">
            <div class="product-card-description">
              <h2 class="title title-size-M product-card-title">Kugoo Kirin M4</h2>
            </div>
            <ul class="product-card-feature">
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#accumulator"></use>
                </svg>
                2000 mAh
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#power"></use>
                </svg>
                1,2 л.с.
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#speedometer"></use>
                </svg>
                60 км/ч
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#timer"></use>
                </svg>
                5 часов
              </li>
            </ul>
            <div class="price-block">
              <div class="price">
                <p class="price-old">39 900 ₽</p>
                <p class="price-new">29 900 ₽</p>
              </div>
              <div class="price-block-icons">
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#shopping"></use>
                  </svg>
                </a>
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
            </div>
            <button class="button product-button">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="product-card">
          <picture class="product-card-img">
            <source type="image/webp" srcset="img/scooter.webp">
            <source type="image/png" srcset="img/scooter.png">
            <img src="./img/scooter.png" alt="Картинка промо блок">
          </picture>
          <div class="product-card-top">
            <p class="marker marker-new">Новинка</p>
            <svg class="product-card-icon">
              <use href="./img/sprite.svg#scales"></use>
            </svg>
          </div>
          <div class="product-card-footer">
            <div class="product-card-description">
              <h2 class="title title-size-M product-card-title">Kugoo Kirin M4</h2>
            </div>
            <ul class="product-card-feature">
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#accumulator"></use>
                </svg>
                2000 mAh
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#power"></use>
                </svg>
                1,2 л.с.
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#speedometer"></use>
                </svg>
                60 км/ч
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#timer"></use>
                </svg>
                5 часов
              </li>
            </ul>
            <div class="price-block">
              <div class="price">
                <p class="price-old">39 900 ₽</p>
                <p class="price-new">29 900 ₽</p>
              </div>
              <div class="price-block-icons">
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#shopping"></use>
                  </svg>
                </a>
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
            </div>
            <button class="button product-button">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="product-card">
          <picture class="product-card-img">
            <source type="image/webp" srcset="img/scooter.webp">
            <source type="image/png" srcset="img/scooter.png">
            <img src="./img/scooter.png" alt="Картинка промо блок">
          </picture>
          <div class="product-card-top">
            <p class="marker marker-hit">ХИТ</p>
            <svg class="product-card-icon">
              <use href="./img/sprite.svg#scales"></use>
            </svg>
          </div>
          <div class="product-card-footer">
            <div class="product-card-description">
              <h2 class="title title-size-M product-card-title">Kugoo Kirin M4</h2>
            </div>
            <ul class="product-card-feature">
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#accumulator"></use>
                </svg>
                2000 mAh
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#power"></use>
                </svg>
                1,2 л.с.
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#speedometer"></use>
                </svg>
                60 км/ч
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#timer"></use>
                </svg>
                5 часов
              </li>
            </ul>
            <div class="price-block">
              <div class="price">
                <p class="price-old">39 900 ₽</p>
                <p class="price-new">29 900 ₽</p>
              </div>
              <div class="price-block-icons">
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#shopping"></use>
                  </svg>
                </a>
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
            </div>
            <button class="button product-button">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="product-card">
          <picture class="product-card-img">
            <source type="image/webp" srcset="img/scooter.webp">
            <source type="image/png" srcset="img/scooter.png">
            <img src="./img/scooter.png" alt="Картинка промо блок">
          </picture>
          <div class="product-card-top">
            <p class="marker marker-new">Новинка</p>
            <svg class="product-card-icon">
              <use href="./img/sprite.svg#scales"></use>
            </svg>
          </div>
          <div class="product-card-footer">
            <div class="product-card-description">
              <h2 class="title title-size-M product-card-title">Kugoo Kirin M4</h2>
            </div>
            <ul class="product-card-feature">
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#accumulator"></use>
                </svg>
                2000 mAh
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#power"></use>
                </svg>
                1,2 л.с.
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#speedometer"></use>
                </svg>
                60 км/ч
              </li>
              <li class="product-card-feature-item">
                <svg class="product-card-feature-icon">
                  <use href="./img/sprite.svg#timer"></use>
                </svg>
                5 часов
              </li>
            </ul>
            <div class="price-block">
              <div class="price">
                <p class="price-old">39 900 ₽</p>
                <p class="price-new">29 900 ₽</p>
              </div>
              <div class="price-block-icons">
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#shopping"></use>
                  </svg>
                </a>
                <a href="#!" class="price-block-icon-link">
                  <svg class="price-block-icon">
                    <use href="./img/sprite.svg#heart"></use>
                  </svg>
                </a>
              </div>
            </div>
            <button class="button product-button">Записаться на тест-драйв</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section cta-section" id="cta-section">
    <div class="cta-bg">
      <div class="container cta">
        <picture class="cta-img">
          <source type="image/webp" srcset="img/woman.webp">
          <source type="image/png" srcset="img/woman.png">
          <img src="./img/woman.png" alt="cta">
        </picture>
        <div class="cta-content">
          <h2 class="title cta-title">Нет нужной модели, которую хотите протестировать?</h2>
          <p class="cta-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
          <form action="handler.php" method="POST" class="cta-form">
            <div class="cta-form-row">
              <div class="input-group">
                <input
                  id="user-phone"
                  class="input-user-phone"
                  name="userphone"
                  type="tel"
                  placeholder="+7 (___) __ - __ - __"
                />
              </div>
              <button type="submit" class="button cta-button">Оставить заявку на тест-драйв</button>
            </div>

            <div class="checkboxes-item">
              <label class="checkbox-label">
                <input type="checkbox" class="checkbox-input" name="agreement"/>
                <span class="checkbox-checkmark"></span>
                <span class="checkbox-body">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <span class="politic-link">политикой конфиденциальности</span></span>
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="section cta-email">
    <div class="cta-email-bg">
      <div class="container">
        <div class="cta-email-wrapper">
          <h2 class="title-size-M cta-email-text">
            Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
          </h2>
          <form class="cta-email-form" action="handler.php" method="POST">
            <div class="cta-email-form-wrapper">
              <input id="user-email" type="email" class="input-email" name="email" placeholder="Введите Ваш email">
            </div>
            <button class="button-light cta-email-button">Подписаться</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-bg">
      <div class="container">
        <div class="footer-top">
          <div class="footer-top-list-content">
            <div class="footer-top-list-wrapper">
              <h3 class="title-size-S footer-top-title">Каталог товаров</h3>
              <ul class="footer-top-list-catalog">
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Электросамокаты</a>
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Электроскутеры</a>
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Электровелосипеды</a>
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Электровелосипеды</a>
                </li>
              </ul>
            </div>
            <div class="footer-top-list-wrapper">
              <h3 class="title-size-S footer-top-title">Покупателям</h3>
              <ul class="footer-top-list-buyer">
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Сервисный центр</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Доставка и оплата</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Рассрочка</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Тест-драйв</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Блог</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Сотрудничество</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Контакты</a>  
                </li>
                <li class="footer-top-item">
                  <a class="footer-top-item-link" href="#!">Акции</a>  
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-top-list-wrapper">
            <h3 class="title-size-S footer-top-title">Контакты</h3>
            <div class="footer-top-contact-wrapper">
              <div class="footer-top-contact">
                <span class="footer-phone-description">Call-центр</span>
                <a href="tel:+78005055461" class="footer-phone">+7 (800) 505-54-61</a>
                <p class="footer-phone-time">Пн-Вс 10:00 - 20:00</p>
              </div>
              <div class="footer-top-contact">
                <span class="footer-phone-description">Сервисный центр</span>
                <a href="tel:+74993507692" class="footer-phone">+7 (499) 350-76-92</a>
                <p class="footer-phone-time">Пн-Вс 10:00 - 20:00</p>
              </div>
            </div>
          </div>
          <a href="#!" class="footer-call-link">Заказать звонок</a>
        </div>
        <div class="footer-social">
          <div class="footer-social-wrapper">
            <a href="#main" class="logo-link">
              <h2 class="title footer-logo">Kugoo</h2>
            </a>
            <div class="footer-social-store">
              <picture class="store-icon">
                <source type="image/webp" srcset="img/Badge-google.webp">
                <source type="image/png" srcset="img/Badge-google.png">
                <img src="./img/Badge-google.png" alt="cta">
              </picture>
              <picture class="store-icon">
                <source type="image/webp" srcset="img/Badge-apple.webp">
                <source type="image/png" srcset="img/Badge-apple.png">
                <img src="./img/Badge-apple.png" alt="cta">
              </picture>
            </div>
          </div>
          <ul class="footer-social-list">
            <li class="footer-social-item">
              <a href="#!" class="footer-social-link">
                <svg class="footer-social-icon">
                  <use href="./img/sprite.svg#vk"></use>
                </svg>
                <div class="footer-social-text-wrapper">
                  <p class="footer-social-text">Вконтакте</p>
                  <span>3 300</span>
                </div>
              </a>
            </li>
            <li class="footer-social-item">
              <a href="#!" class="footer-social-link">
                <svg class="footer-social-icon">
                  <use href="./img/sprite.svg#youtube"></use>
                </svg>
                <div class="footer-social-text-wrapper">
                  <p class="footer-social-text">YouTube</p>
                  <span>3 603</span>
                </div>
              </a>
            </li>
            <li class="footer-social-item">
              <a href="#!" class="footer-social-link">
                <svg class="footer-social-icon">
                  <use href="./img/sprite.svg#telegram"></use>
                </svg>
                <div class="footer-social-text-wrapper">
                  <p class="footer-social-text">Telegram</p>
                  <span>432</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-bottom">
          <ul class="footer-bottom-info-block">
            <li class="footer-bottom-info-block-item">
              <a href="#!" class="footer-bottom-info-block-link">Реквизиты</a>
            </li>
            <li class="footer-bottom-info-block-item">
              <a href="#!" class="footer-bottom-info-block-link">Политика конфиденциальности</a>
            </li>
          </ul>
          <div class="footer-bottom-program-block-wrapper">
            <ul class="footer-bottom-program-block">
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-google-pay">
                  <use href="./img/sprite.svg#GooglePay"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-apple-pay">
                  <use href="./img/sprite.svg#ApplePay"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-visa">
                  <use href="./img/sprite.svg#visa"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-mastercard">
                  <use href="./img/sprite.svg#Mastercard"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-maestro">
                  <use href="./img/sprite.svg#Maestro"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-webmoney">
                  <use href="./img/sprite.svg#Webmoney"></use>
                </svg>
              </li>
              <li class="footer-bottom-program-block-icons-item">
                <svg class="icon-qiwi">
                  <use href="./img/sprite.svg#Qiwi"></use>
                </svg>
              </li>
            </ul>
            <div class="chat-wrapper">
              <p class="chat-text">Online чат:</p>
              <ul class="chat">
                <li class="chat-item">
                  <a href="#!" class="chat-link">
                    <svg class="icon-chat">
                      <use href="./img/sprite.svg#viber"></use>
                    </svg>
                  </a>
                </li>
                <li class="chat-item">
                  <a href="#!" class="chat-link">
                    <svg class="icon-chat">
                      <use href="./img/sprite.svg#whatsapp"></use>
                    </svg>
                  </a>
                </li>
                <li class="chat-item">
                  <a href="#!" class="chat-link">
                    <svg class="icon-chat">
                      <use href="./img/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal">
    <div class="modal-overlay js-close-modal"></div>
    <div class="modal-dialog">
      <div class="modal-content">
        <h2 class="title modal-title">Запишитесь на&nbsp;тест-драйв электросамоката</h2>
        <p class="modal-text">и подберите модель для себя</p>
        <p class="modal-cta">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="modal-form-wrapper">
            <label class="input-group-label" >Как с вами удобнее связаться?</label>
            <input
              type="tel"
              id="modal-user-phone"
              name="userphone"
              class="modal-input-user-phone"
              placeholder="+7 (___) __ - __ - __"
            />
          </div>
          <button type="submit" class="button modal-button">Оформить предзаказ</button>

          <div class="checkboxes-item modal-checkbox-item">
            <label class="checkbox-label">
              <input type="checkbox" class="checkbox-input" name="agreement"/>
              <span class="checkbox-checkmark modal-checkbox-checkmark"></span>
              <span class="checkbox-body">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <span class="modal-politic-link">политикой конфиденциальности</span></span>
            </label>
          </div>
        </form>
      </div>
      <picture class="modal-img">
        <source type="image/webp" srcset="img/mogal-img.webp">
        <source type="image/png" srcset="img/mogal-img.png">
        <img src="./img/mogal-img.png" alt="девушка на скутере">
      </picture>
      <button class="modal-close-button js-close-modal">
        <svg>
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
    </div>
  </div>

  <div class="modal modal-success">
    <div class="modal-overlay js-close-modal"></div>
    <div class="modal-dialog">
      <div class="modal-content">
        <h2 class="title modal-title">Ваша заявка отправлена!</h2>
        <p class="modal-cta">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
      </div>
      <picture class="modal-img">
        <source type="image/webp" srcset="img/mogal-img.webp">
        <source type="image/png" srcset="img/mogal-img.png">
        <img src="./img/mogal-img.png" alt="девушка на скутере">
      </picture>
      <button class="modal-close-button js-close-modal">
        <svg>
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
    </div>
  </div>

  <div class="modal modal-politic">
    <div class="modal-overlay js-close-modal-politic"></div>
    <div class="modal-dialog">
      <div class="modal-content">
        <h2 class="title title-size-M">Политика конфиденциальности</h2>
        <br>
        <p>Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Они буквоград знаках букв проектах, вскоре жизни лучше ему города маленькая парадигматическая предложения текст себя моей своих правилами встретил снова, своего вопрос прямо языком он все инициал, одна строчка? Но заманивший, диких агентство он свою рукописи безопасную великий ведущими текст, до заглавных. Толку продолжил родного коварный выйти переулка текст бросил это, снова все сих грустный от всех оксмокс пор. Живет, они. Над снова о бросил заманивший меня живет залетают толку парадигматическая жизни, которое взгляд lorem текста, текстов рукопись не по всей рыбными дороге, назад правилами! Текстами знаках текста грустный переписывается, коварных страну.</p>
      </div>
      <button class="modal-close-button js-close-modal-politic">
        <svg>
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
    </div>
  </div>

  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>