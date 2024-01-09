@extends('layouts.main')

@section('title', 'VALWeb')

@section('content')
{{-- SGlav BLog --}}

<div class="modalThanks" id="modalThanks">
  <div class="modalThanksContent">
    <div class="modalThanksText txt">
      <span>Спасибо Вам Большое, за заявку!</span>
      Я свяжусь с Вами, как только смогу ;)
    </div>
  </div>
</div>
@if($addApp == 3)
  <script>
  let modalThanks = document.getElementById('modalThanks')
  function addModalThanks() {
    modalThanks.classList.add("active");
  }
  
  function rewmoveModalThanks() {
    modalThanks.classList.remove("active");
  }

  setTimeout(addModalThanks, 1000);
  setTimeout(rewmoveModalThanks, 4000);
  </script>
@endif
<div class="modal" id="modal">
  <div class="modalContent">
    <div class="modalCloseHeader">
      <div class="modalClose" id="modalClose"></div>
    </div>
    <div class="modalContentWrapper ">
      <div class="modalTitle txt"><span>Оставьте вашу заявку</span>, и я свяжусь с вами, так быстро, как только смогу ;)</div>
      @if($addApp == 1) 
        <div class="modalError txt">Пожалуйста, введит необходимые данные!</div>
      @elseif($addApp == 2)
        <div class="modalError txt">Пожалуйста, введит необходимые данные!</div>
      @endif
      <form class="modalForm" action="addApplications" method="POST">
        @csrf
           <div class="input-container @if($addApp == 1) red @endif ic1">
              <input id="name" class="input" type="text" name="name" placeholder=" " />
              <div class="cut"></div>
              <label for="name" class="placeholder">Ваше имя*</label>
            </div>
            <div class="input-container @if($addApp == 2) red @endif ic2">
              <input id="tel" class="input" name="phone" type="tel" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="tel" class="placeholder">Ваш Телефон*</label>
            </div>
            <div class="input-container ic2">
              <input id="email" class="input" name="email" type="text" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="email" class="placeholder">Ваш Email (не обязательно)</label>
            </div>
             <div class="input-container ic2 tArea">
              <textarea id="lastname" class="input" name="text" type="text" placeholder=" "></textarea>
              <div class="cut"></div>
              <label for="lastname" class="placeholder">Текст сообщения</label>
            </div>
            <input id="text" class="input" name="check" type="text" value="{{$addApp}}" style="display: none;" />
          <div class="buttons">
            <button type="submit" class="blob-btn">
              Отправить
              <span class="blob-btn__inner">
                <span class="blob-btn__blobs">
                  <span class="blob-btn__blob"></span>
                  <span class="blob-btn__blob"></span>
                  <span class="blob-btn__blob"></span>
                  <span class="blob-btn__blob"></span>
                </span>
              </span>
            </button>
            <br/>
            
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                  <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                </filter>
              </defs>
            </svg>
          </div>
      </form>
    </div>
  </div>
</div>
<section class="titleBlog" id="main">
    <div class="container">
        <div class="info">
            <div class="infoLeft">
                <div class="infoContent">
                    <div class="infoTitle wow animate__animated animate__fadeInUp txt">
                        Веб разработчик,
                        которого вы искали 
                        для 
                          <div class="carouselInfoWrapper">
                            <div class="carouselInfoText" style="--s: 3">
                              <span>своего бизнеса!</span>
                              <span>своего сайта!</span>
                              <span>своего проекта!</span>
                              {{-- Return --}}
                              <span>своего бизнеса!</span>
                            </div>
                          </div>
                    </div> 
                    <div class="infoText wow animate__animated animate__fadeInUp  txt">
                      Нетривиальные креативные решения. Динамический и 
                      привлекательный дизайн, который подчеркивает 
                      <span>уникальность вашего бренда.</span>
                    </div>
                    <div class="buttons wow animate__animated animate__fadeInLeft">
                        <button class="blob-btn" id="openModal">
                          Связаться
                          <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                            </span>
                          </span>
                        </button>
                        <br/>
                      
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                          <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                          </filter>
                        </defs>
                      </svg>
                  </div>
              </div>
            </div>
            <div class="infoRight wow animate__animated animate__fadeInRight">
              <div class="infoEllipse">
                <div class="infoEllipseWrapperImg">
                  <img class="infoEllipseImg" src="./assets/images/val.jpg" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
    {{-- <img class="svgTitle" src="./assets/images/glav.svg" alt=""> --}}
</section>
<section class="topBlog">
  <div class="container">
    <div class="advantages">
      <div class="advantagesTitle wow animate__animated animate__fadeInUp txt">
        <span class="titleSpanOne">VAL</span>Web - лучший выбор для 
        вашего <span class="titleSpanTwo">Маркетинга</span>
      </div>
      <div class="advantagesRow">
        <div class="advantagesCol wow animate__animated animate__fadeInUp">
          <div class="advantagesImg">
            <img src="./assets/images/advantages/code.svg" alt="">
          </div>
          <div class="advantagesTitleTwo txt">
            Делаем работу качественно!
          </div>
          <div class="advantagesText txt">
            Вам не нужно искать маркетолога, 
            копирайтера, дизайнера, верстальщика 
            и программиста. Так как Я являюсь 
            FULLSTACK - разработчиком, Я уже 
            объединяю все направления. 
          </div>
        </div>

         <div class="advantagesCol wow animate__animated animate__fadeInUp">
          <div class="advantagesImg">
            <img src="./assets/images/advantages/color.svg" alt="">
          </div>
          <div class="advantagesTitleTwo txt">
            Мой сайты всегда актуальны
          </div>
          <div class="advantagesText txt">
            Я постоянно тренирую свою 
            насмотренность и слежу 
            за современными тенденциями.
          </div>
        </div>

         <div class="advantagesCol wow animate__animated animate__fadeInUp">
          <div class="advantagesImg">
            <img src="./assets/images/advantages/time.svg" alt="">
          </div>
          <div class="advantagesTitleTwo txt">
            Быстрые сроки
          </div>
          <div class="advantagesText txt">
            Я всегда озвучиваю реальные сроки 
            работы. За все время существования 
            у меня ни разу не было задержек и 
            опозданий. Работа в срок - нмой 
            важный рабочий принцип.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="freeBlog" id="about">
  <div class="container">
    <div class="about">
      <div class="aboutLeft wow animate__animated animate__fadeInLeft">
        <div class="aboutEllipse">
            <div class="aboutEllipseWrapperImg">
              <img class="aboutEllipseImg" src="./assets/images/valabout.jpg" alt=""/>
            </div>
        </div>
      </div>
      <div class="aboutRight">
        <div class="aboutTilte wow animate__animated animate__fadeInUp txt">
          Кобелев Валерий <br>
          Михайлович
        </div>
        <div class="aboutInfo txt wow animate__animated animate__fadeInRight">
          FullStack - Веб разработчик
        </div>
        <div class="aboutText txt wow animate__animated animate__fadeInRight">
          <p>
            Привет! Меня зовут Валерий и я являюсь FullStack - веб разработчиком.
            Мне 20 лет, начал изучать программирование с 16 лет, работал в 
            нескольких IT-компаниях, а так же работаю на врилансе!
          </p>
          <p>
            Больше всего я люблю выделяться, веть это самое главное и
            привлекательное в жизни, обожаю когда мой сайты выделяются
            своей уникальной изюминкой! Так что, если ты ищешь СУПЕР ПУПЕР
            Разработчика, то ты по адресу! :)
          </p>
          <p>
            Как говориться прогресс не стойт на месте, именно по этому я каждый 
            день совершенствуюсь и развиваюсь, если вы тоже не стоите на месте, 
            и постоянно в движений, то мы с вами явно поладим!
          </p>
          <p>
            Важным аспектом моей работы является прозрачность и постоянное 
            общение с клиентами. Я стремлюсь понять ваши ожидания, предлагая 
            качественные консультации и рекомендации на каждом этапе проекта. 
            Ваше удовлетворение и успех важны для меня!
          </p>
          <p >
            Самое важно это реклама, как для вас, так и для меня, я люблю себя 
            рекламировать, YouTube, TikTok, Instagram, VK и Telegram, если вы 
            покупаете у меня создание сайта, вы автоматически попадаете ко мне 
            в рекламу, так что, для вас и для меня это выгодно, мне контент, а вам 
            реклама, выгодная сделка! :)
          </p>

           <div class="buttons btnAbout wow animate__animated animate__fadeInRight">
                <button class="blob-btn" id="openModal">
                  Написать
                  <span class="blob-btn__inner">
                    <span class="blob-btn__blobs">
                      <span class="blob-btn__blob"></span>
                      <span class="blob-btn__blob"></span>
                      <span class="blob-btn__blob"></span>
                      <span class="blob-btn__blob"></span>
                    </span>
                  </span>
                </button>
                <br/>
              
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                  <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                  </filter>
                </defs>
              </svg>
          </div>

        </div>
      </div>
    </div>
    
  </div>
  <div class="cardWrapper">
    <div class="conatainer">
      <div class="cardInfo">
        <div class="cardRow">
          <div class="cardCol wow animate__animated animate__fadeInUp">
            <div class="cardImg">
              <img src="./assets/images/cards/brother.svg" alt="">
            </div>
            <div class="cardText txt">
              При повторном заказе 
              сайта, действует 
              скидка 10%!
            </div>
          </div>

          <div class="cardCol wow animate__animated animate__fadeInUp">
            <div class="cardImg">
              <img src="./assets/images/cards/happy.svg" alt="">
            </div>
            <div class="cardText txt">
              Так же в праздники,
              есть много бонусов и
              скидок)
            </div>
          </div>

          <div class="cardCol wow animate__animated animate__fadeInUp">
            <div class="cardImg">
              <img src="./assets/images/cards/money.svg" alt="">
            </div>
            <div class="cardText txt">
              По частичная оплата,
              вы можете платить не 
              сразу, а частями.
            </div>
          </div>

          <div class="cardCol wow animate__animated animate__fadeInUp" id="openModal">
            <div class="cardImg">
              <img class="animationCardImg" src="./assets/images/cards/card.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fiveBlog" id="cases">
  <div class="container">
    <div class="fiveCases">
      <div class="fiveCasesTitle txt wow animate__animated animate__fadeInUp">
        <span>Мой кейсы</span> говорят о 
        качестве моей работы!)
      </div>
      <div class="fiveCasesRow">

        <div class="fiveCasesCol fiveCasesCol_1 wow animate__animated animate__fadeInUp">
          <a href="https://schoolcoloristic.ru/" target="_blank">
            <div class="fiveImg">
              <img src="./assets/images/cases/SchoolColoristics.jpg" alt="">
            </div>
            <div class="fiveContent">
              <div class="fiveText">
                <div class="caseTitle txt">
                  ScholColoristics
                </div>
                <div class="caseTupe txt">
                  Лендинг
                </div>
              </div>
              <div class="caseBtn">
                <div class="caseBtnArrow"></div>
              </div>
            </div>
          </a>
          <div class="fiveCasesCol wow animate__animated animate__fadeInUp">
            <a href="https://www.figma.com/file/0NVQheMx3z0ffxaeQfuOta/%D0%A1%D0%B0%D0%B9%D1%82-IT-%D0%9A%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8?type=design&node-id=0%3A1&mode=dev" target="_blank">
              <div class="fiveImg">
                <img src="./assets/images/cases/logo.jpg" alt="">
              </div>
              <div class="fiveContent">
                <div class="fiveText">
                  <div class="caseTitle txt">
                    Logo (Figma)
                  </div>
                  <div class="caseTupe txt">
                    Корпоративный сайт
                  </div>
                </div>
                <div class="caseBtn">
                  <div class="caseBtnArrow"></div>
                </div>
              </div>
            </a>
          </div>
        </div>

        

       
          <div class="fiveCasesCol wow animate__animated animate__fadeInUp">
            <a href="https://noproblem.ru/" target="_blank">
              <div class="fiveImg">
                <img src="./assets/images/cases/noproblem.jpg" alt="">
              </div>
              <div class="fiveContent">
                <div class="fiveText">
                  <div class="caseTitle txt">
                    Noproblem
                  </div>
                  <div class="caseTupe txt">
                    Корпоративный сайт
                  </div>
                </div>
                <div class="caseBtn">
                  <div class="caseBtnArrow"></div>
                </div>
              </div>
            </a>
          <div class="fiveCasesCol wow animate__animated animate__fadeInUp">
            <a href="https://www.figma.com/file/wZeJhB914Po1YqZVmXQ69f/%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0-%E2%84%96-7?type=design&node-id=0%3A1&mode=design&t=MeSAZeWYNhGK2fhw-1" target="_blank">
              <div class="fiveImg">
                <img src="./assets/images/cases/School.jpg" alt="">
              </div>
              <div class="fiveContent">
                <div class="fiveText">
                  <div class="caseTitle txt">
                    School7 (Figma)
                  </div>
                  <div class="caseTupe txt">
                    Корпоративный сайт
                  </div>
                </div>
                <div class="caseBtn">
                  <div class="caseBtnArrow"></div>
                </div>
              </div>
            </a>
          </div>
        </div>

    

      </div>
    </div>
  </div>
</section>
<section class="sixBlog" id="services">
  <div class="container">
    <div class="services">
      <div class="servicesRow">
        <div class="servicesRowServ wow animate__animated animate__fadeInLeft" id="aside1"> 
          <div class="servicesTitle txt">
            Мой услуги!
          </div>
          <div class="servicesCol">
            <div class="servicesInfoText txt">
              Каждый сайт решает ряд задач. От сложности, 
              времени и уровня их исполнения зависит стоимость проекта.
            </div>
            <div class="servicesInfoText txt">
              Поэтому указан нижний порог цен. Чтобы оценить примерный объём работ, 
              заполните <span>заявку</span> или просто <span>напишите мне</span>
            </div>
          </div>
        </div>
        <div class="servicesCol" id="article">
          <div class="servicesColTypes">

            <div class="servicesColType  wow animate__animated animate__fadeInRight">
              <div class="servicesColTypeTitle txt">
                Лэндинг
              </div>
              <div class="servicesColTypeContent">
                <div class="servicesColText txt">
                  Аудит, анализ конкурентов <br>
                  Структура сайта на 6 блоков<br>
                  Работа с текстом<br>
                  Стильный дизайн<br>
                  Оптимизированная верстка<br>
                  Адаптив под 3 точки перестроения<br>
                  Пошаговая анимация<br>
                  Подключение форм, домена<br>
                  Поддержка в течение 1 месяца<br>
                  Инструкция по работе с админкой<br>
                  Дополнительный блок 100$<br>
                </div>
                <div class="servicesColPrices">
                  <div class="servicesColPrice txt">
                    850$
                  </div>
                  <div class="servicesColPriceRus txt">
                    (76 235,06 руб.)
                  </div>
                  <div class="servicesColPriceDate txt">
                    от 14 дней
                  </div>
                </div>
              </div>
            </div>

              <div class="servicesColType  wow animate__animated animate__fadeInRight">
              <div class="servicesColTypeTitle txt">
                Корпоративный сайт
              </div>
              <div class="servicesColTypeContent">
                <div class="servicesColText txt">
                  Аудит, анализ конкурентов<br>
                  Структура сайта на 5 страниц<br>
                  Работа с текстом<br>
                  Стильный дизайн<br>
                  Оптимизированная верстка<br>
                  Адаптив под 3 точки перестроения<br>
                  Пошаговая анимация<br>
                  Подключение форм, домена<br>
                  Поддержка в течение 1 месяца<br>
                  Инструкция по работе с админкой<br>
                  Дополнительная страница 100$<br>
                </div>
                <div class="servicesColPrices">
                  <div class="servicesColPrice txt">
                    999$
                  </div>
                  <div class="servicesColPriceRus txt">
                    (89 598,61 руб.)
                  </div>
                  <div class="servicesColPriceDate txt">
                    от 20 дней
                  </div>
                </div>
              </div>
            </div>


              <div class="servicesColType wow animate__animated animate__fadeInRight">
              <div class="servicesColTypeTitle txt">
                Многостраничный
              </div>
              <div class="servicesColTypeContent">
                <div class="servicesColText txt">
                  Аудит, анализ конкурентов <br>
                  Структура сайта на 5 страниц<br>
                  Работа с текстом<br>
                  Стильный дизайн<br>
                  Оптимизированная верстка<br>
                  Адаптив под 5 точек перестроения<br>
                  Пошаговая анимация<br>
                  Подключение форм, домена<br>
                  Поддержка в течение 1 месяца<br>
                  Инструкция по работе с админкой<br>
                  Дополнительная страница 150$<br>
                </div>
                <div class="servicesColPrices">
                  <div class="servicesColPrice txt">
                    1150$
                  </div>
                  <div class="servicesColPriceRus txt">
                    (103 141,55 руб.)
                  </div>
                  <div class="servicesColPriceDate txt">
                    от 20 дней
                  </div>
                </div>
              </div>
            </div>

              <div class="servicesColType wow animate__animated animate__fadeInRight">
              <div class="servicesColTypeTitle txt">
                Интернет-магазин
              </div>
              <div class="servicesColTypeContent">
                <div class="servicesColText txt">
                  Аудит, анализ конкурентов <br>
                  Структура сайта на 5 страниц<br>
                  Подключение корзины, оплаты<br>
                  Подключение каталога товаров<br>
                  Работа с текстом<br>
                  Стильный дизайн<br>
                  Оптимизированная верстка<br>
                  Адаптив под 5 точек перестроения<br>
                  Пошаговая анимация<br>
                  Подключение всех форм, домена<br>
                  Поддержка в течение 1 месяца<br>
                  Инструкция по работе с админкой<br>
                  Дополнительная страница 150$<br>
                </div>
                <div class="servicesColPrices">
                  <div class="servicesColPrice txt">
                    1700$
                  </div>
                  <div class="servicesColPriceRus txt">
                    (103 141,55 руб.)
                  </div>
                  <div class="servicesColPriceDate txt">
                    от 25 дней
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sevenBlog">
  <div class="container">
    <div class="questions">
      <div class="questionsTitle txt wow animate__animated animate__fadeInUp">
        Частые вопросы!?
      </div>
      <div class="questionsRow">

        <div class="questionsCol wow animate__animated animate__fadeInLeft">
          <div class="questionsColHeader" id="questionHeader1">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                1
              </div>
              <div class="questionsColTitle">
                Какой сайт мне выбрать?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn1"></div>
          </div>
          <div class="questionsColFooter txt" id="questionText1">
            <p>Выбор сайта зависит от ваших целей и характера вашего бизнеса.</p>
            Я помогу выбрать оптимальный вариант именно для вас и сэкономим время.
          </div>
        </div>


         <div class="questionsCol wow animate__animated animate__fadeInRight">
          <div class="questionsColHeader" id="questionHeader2">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                2
              </div>
              <div class="questionsColTitle">
                Почему такие цены?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn2"></div>
          </div>
          <div class="questionsColFooter txt" id="questionText2">
            Стоимость сайта всегда зависит от его качества. Я разрабатываю не только уникальный дизайн, но и программный код.
            Код позволяет создавать не шаблонные сайты. Мой сайты быстро работают, не требуют лишней поддержки, имеют неограниченный функционал и принадлежат только вам, а не платформам.
          </div>
        </div>

         <div class="questionsCol wow animate__animated animate__fadeInLeft">
          <div class="questionsColHeader" id="questionHeader3">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                3
              </div>
              <div class="questionsColTitle">
                Чем уникален мой дизайн?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn3"></div>
          </div>
          <div class="questionsColFooter txt" id="questionText3">
            <p>Я легко сочетаю желания клиента, характер его бизнеса и функционал сайта. Я создаем не просто красивое сочетание цветов, 
            а внедряем инновационные идеи и подходы, привлекающие клиентов. </p> 
            Мой дизайн — это соответствие между личным брендом и вашим продуктом, адаптируемый под вашу целевую аудиторию.
            Я помогу выделится на рынке и сделать ваш сайт запоминающимся.
          </div>
        </div>


         <div class="questionsCol wow animate__animated animate__fadeInRight">
          <div class="questionsColHeader" id="questionHeader4">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                4
              </div>
              <div class="questionsColTitle">
               Что такое чистый код?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn4"></div>
          </div>
          <div class="questionsColFooter txt" id="questionText4">
            <p>Сайт на «чистом коде» — не привязан к платформе и принадлежит только вам. </p>

            <p>Такой сайт долговечный, он не требует лишней поддержки, а с развитием вашего бизнеса легко поддается корректировке.</p>

           <p> Сайт на «чистом коде» по-настоящему безопасный, в него уже добавлены необходимые элементы защиты.</p>

            Так же такой сайт соответствует общепризнанным нормам, обеспечивая высокую эффективность работы.
          </div>
        </div>

         <div class="questionsCol wow animate__animated animate__fadeInLeft">
          <div class="questionsColHeader" id="questionHeader5">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                5
              </div>
              <div class="questionsColTitle">
                Как по оплате?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn5"></div>
          </div>
          <div class="questionsColFooter txt" id="questionText5">
            <p>Я помогу подобрать необходимый тариф, а оплата производится по договору на счет карты или ИП. </p>
            Возможен вариант через СБП или через P2P.
          </div>
        </div>

         <div class="questionsCol wow animate__animated animate__fadeInRight">
          <div class="questionsColHeader" id="questionHeader6">
            <div class="questionsColContent">
              <div class="questionsColNum txt">
                6
              </div>
              <div class="questionsColTitle">
                Почему я не беру все проекты?
              </div>
            </div>
            <div class="questionsColBtn" id="questionBtn6"></div>
          </div>
          <div class="questionsColFooter txt"  id="questionText6">
            Я стремлюсь выбирать проекты, которые соответствуют мой экспертизе, доступны по 
            ресурсам и времени, соответствуют мойм ценностям и финансовым ожиданиям, а также имеют умеренные риски и сложности. 
            Это позволяет мне обеспечивать высокое качество работы и удовлетворение моих клиентов.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="eightBlog" id="contacts">
  <div class="container">
    <div class="connection">
      <div class="connectionTitle txt wow animate__animated animate__fadeInUp">
        Быстрая связь со мной!)
      </div>
      <div class="connectionImg">
        <img src="./assets/images/links/user.png" alt="">
      </div>
      <div class="connectionLinks">

        <a href="https://t.me/ValeraKob002" target="_blank">
          <div class="connectinoLink wow animate__animated animate__fadeInUp">
            <div class="connectinoLinkImg">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"></path></g></svg>
            </div>
            <div class="connectinoLinkText txt">
              Telegram
            </div>
          </div>
        </a>

        <a href="https://wa.me/79600004612" target="_blank">
          <div class="connectinoLink wow animate__animated animate__fadeInUp">
            <div class="connectinoLinkImg">
                <svg fill="#000000" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path></g></svg>
            </div>
            <div class="connectinoLinkText txt">
              WhatsApp
            </div>
          </div>
        </a>

        <a href="https://vk.com/m_r_v_a_l" target="_blank">
          <div class="connectinoLink wow animate__animated animate__fadeInUp">
            <div class="connectinoLinkImg">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4493 5.94799C23.6161 5.40154 23.4493 5 22.6553 5H20.0297C19.3621 5 19.0543 5.34687 18.8874 5.72936C18.8874 5.72936 17.5521 8.92607 15.6606 11.0025C15.0487 11.6036 14.7705 11.7949 14.4367 11.7949C14.2698 11.7949 14.0194 11.6036 14.0194 11.0572V5.94799C14.0194 5.29225 13.8345 5 13.2781 5H9.15213C8.73494 5 8.48403 5.30434 8.48403 5.59278C8.48403 6.21441 9.42974 6.35777 9.52722 8.10641V11.9042C9.52722 12.7368 9.37413 12.8878 9.04032 12.8878C8.15023 12.8878 5.98507 9.67682 4.70093 6.00261C4.44927 5.28847 4.19686 5 3.52583 5H0.900218C0.150044 5 0 5.34687 0 5.72936C0 6.41244 0.890141 9.80039 4.14464 14.2812C6.31429 17.3412 9.37118 19 12.1528 19C13.8218 19 14.0283 18.6316 14.0283 17.997V15.6842C14.0283 14.9474 14.1864 14.8003 14.7149 14.8003C15.1043 14.8003 15.7719 14.9916 17.3296 16.467C19.1099 18.2156 19.4034 19 20.4047 19H23.0304C23.7805 19 24.1556 18.6316 23.9392 17.9045C23.7024 17.1799 22.8525 16.1286 21.7247 14.8823C21.1127 14.1719 20.1947 13.4069 19.9165 13.0243C19.5271 12.5326 19.6384 12.314 19.9165 11.8769C19.9165 11.8769 23.1155 7.45067 23.4493 5.94799Z" fill="#000000"></path> </g></svg>
            </div>
            <div class="connectinoLinkText txt">
              Вконтакте
            </div>
          </div>
        </a>
        <a href="https://msng.link/o?79600004612=vi" target="_blank">
          <div class="connectinoLink wow animate__animated animate__fadeInUp">
            <div class="connectinoLinkImg">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13 4C12.4477 4 12 4.44772 12 5C12 5.55228 12.4477 6 13 6C14.2728 6 15.2557 6.41989 15.9179 7.08211C16.5801 7.74433 17 8.72725 17 10C17 10.5523 17.4477 11 18 11C18.5523 11 19 10.5523 19 10C19 8.27275 18.4199 6.75567 17.3321 5.66789C16.2443 4.58011 14.7272 4 13 4Z" fill="#0F0F0F"></path> <path d="M5.014 8.00613C5.12827 7.1024 6.30277 5.87414 7.23488 6.01043L7.23339 6.00894C8.01251 6.15699 8.65217 7.32965 9.07373 8.10246C9.14298 8.22942 9.20635 8.34559 9.26349 8.44465C9.55041 8.95402 9.3641 9.4701 9.09655 9.68787C9.06561 9.7128 9.03317 9.73855 8.9998 9.76504C8.64376 10.0477 8.18114 10.4149 8.28943 10.7834C8.5 11.5 11 14 12.2296 14.7107C12.6061 14.9283 12.8988 14.5057 13.1495 14.1438C13.2087 14.0583 13.2656 13.9762 13.3207 13.9067C13.5301 13.6271 14.0466 13.46 14.5548 13.736C15.3138 14.178 16.0288 14.6917 16.69 15.27C17.0202 15.546 17.0977 15.9539 16.8689 16.385C16.4659 17.1443 15.3003 18.1456 14.4542 17.9421C12.9764 17.5868 7 15.27 5.08033 8.55801C4.97981 8.26236 4.99645 8.13792 5.01088 8.02991L5.014 8.00613Z" fill="#0F0F0F"></path> <path d="M13 7C12.4477 7 12 7.44772 12 8C12 8.55228 12.4477 9 13 9C13.1748 9 13.4332 9.09745 13.6679 9.33211C13.9025 9.56676 14 9.82523 14 10C14 10.5523 14.4477 11 15 11C15.5523 11 16 10.5523 16 10C16 9.17477 15.5975 8.43324 15.0821 7.91789C14.5668 7.40255 13.8252 7 13 7Z" fill="#0F0F0F"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M7.51742 23.8312C7.54587 23.8469 7.57508 23.8612 7.60492 23.874C8.14762 24.1074 8.81755 23.5863 10.1574 22.5442L11.5 21.5C14.1884 21.589 16.514 21.2362 18.312 20.6071C20.3227 19.9035 21.9036 18.3226 22.6072 16.3119C23.5768 13.541 23.5768 8.45883 22.6072 5.68794C21.9036 3.67722 20.3227 2.0963 18.312 1.39271C15.1103 0.272407 8.82999 0.293306 5.68806 1.39271C3.67733 2.0963 2.09642 3.67722 1.39283 5.68794C0.423255 8.45883 0.423255 13.541 1.39283 16.3119C2.09642 18.3226 3.67733 19.9035 5.68806 20.6071C6.08252 20.7451 6.52371 20.8965 7 21C7 22.6974 7 23.5461 7.51742 23.8312ZM9 20.9107V19.7909C9 19.5557 8.836 19.3524 8.60597 19.3032C7.84407 19.1403 7.08676 18.9776 6.34862 18.7193C4.91238 18.2168 3.78316 17.0875 3.2806 15.6513C2.89871 14.5599 2.66565 12.8453 2.66565 10.9999C2.66565 9.15453 2.89871 7.43987 3.2806 6.3485C3.78316 4.91227 4.91238 3.78304 6.34862 3.28048C7.61625 2.83692 9.71713 2.56282 11.9798 2.56032C14.2422 2.55782 16.3561 2.82723 17.6514 3.28048C19.0876 3.78304 20.2169 4.91227 20.7194 6.3485C21.1013 7.43987 21.3344 9.15453 21.3344 10.9999C21.3344 12.8453 21.1013 14.5599 20.7194 15.6513C20.2169 17.0875 19.0876 18.2168 17.6514 18.7193C15.5197 19.4652 13.259 19.549 11.0239 19.4828C10.9071 19.4794 10.7926 19.5165 10.7004 19.5882L9 20.9107Z" fill="#0F0F0F"></path> </g></svg>
            </div>
            <div class="connectinoLinkText txt">
              Viber
            </div>
          </div>
        </a>
        <a href="https://www.youtube.com/@MrVAL-id7eo" target="_blank">
          <div class="connectinoLink wow animate__animated animate__fadeInUp">
            <div class="connectinoLinkImg">
            <svg fill="#000000" viewBox="0 -4 32 32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M30.722,20.579 C30.137,21.894 28.628,23.085 27.211,23.348 C27.066,23.375 23.603,24.000 16.010,24.000 L15.990,24.000 C8.398,24.000 4.932,23.375 4.788,23.349 C3.371,23.085 1.861,21.894 1.275,20.578 C1.223,20.461 0.001,17.647 0.001,12.000 C0.001,6.353 1.223,3.538 1.275,3.421 C1.861,2.105 3.371,0.915 4.788,0.652 C4.932,0.625 8.398,-0.000 15.990,-0.000 C23.603,-0.000 27.066,0.625 27.210,0.651 C28.628,0.915 30.137,2.105 30.723,3.420 C30.775,3.538 32.000,6.353 32.000,12.000 C32.000,17.647 30.775,20.461 30.722,20.579 ZM28.893,4.230 C28.581,3.529 27.603,2.759 26.845,2.618 C26.813,2.612 23.386,2.000 16.010,2.000 C8.615,2.000 5.185,2.612 5.152,2.618 C4.394,2.759 3.417,3.529 3.104,4.234 C3.094,4.255 2.002,6.829 2.002,12.000 C2.002,17.170 3.094,19.744 3.106,19.770 C3.417,20.471 4.394,21.241 5.153,21.382 C5.185,21.388 8.615,22.000 15.990,22.000 L16.010,22.000 C23.386,22.000 26.813,21.388 26.846,21.382 C27.604,21.241 28.581,20.471 28.894,19.766 C28.904,19.744 29.998,17.170 29.998,12.000 C29.998,6.830 28.904,4.255 28.893,4.230 ZM13.541,17.846 C13.379,17.949 13.193,18.000 13.008,18.000 C12.842,18.000 12.676,17.959 12.525,17.875 C12.206,17.699 12.008,17.364 12.008,17.000 L12.008,7.000 C12.008,6.637 12.204,6.303 12.521,6.127 C12.838,5.950 13.227,5.958 13.534,6.149 L21.553,11.105 C21.846,11.286 22.026,11.606 22.027,11.951 C22.028,12.296 21.852,12.618 21.560,12.801 L13.541,17.846 ZM14.009,8.794 L14.009,15.189 L19.137,11.963 L14.009,8.794 Z"></path> </g></svg>
            </div>
            <div class="connectinoLinkText txt">
              YouTube
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- EndGlav Blog -->
@endsection
