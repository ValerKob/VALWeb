@extends('layouts.main')

@section('title', 'Home')

@section('content')
{{-- SGlav BLog --}}
<section class="titleBlog" id="main">
    <div class="container">
        <div class="info">
            <div class="infoLeft">
                <div class="infoContent">
                    <div class="infoTitle txt">
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
                    <div class="infoText txt">
                      Нетривиальные креативные решения. Динамический и 
                      привлекательный дизайн, который подчеркивает 
                      <span>уникальность вашего бренда.</span>
                    </div>
                    <div class="buttons">
                        <button class="blob-btn">
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
            <div class="infoRight">
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
      <div class="advantagesTitle txt">
        <span class="titleSpanOne">VAL</span>Web - лучший выбор для 
        вашего <span class="titleSpanTwo">Маркетинга</span>
      </div>
      <div class="advantagesRow">
        <div class="advantagesCol">
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

         <div class="advantagesCol">
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

         <div class="advantagesCol">
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
      <div class="aboutLeft">
        <div class="aboutEllipse">
            <div class="aboutEllipseWrapperImg">
              <img class="aboutEllipseImg" src="./assets/images/valabout.jpg" alt="">
            </div>
        </div>
      </div>
      <div class="aboutRight">
        <div class="aboutTilte txt">
          Кобелев Валерий <br>
          Михайлович
        </div>
        <div class="aboutInfo txt">
          FullStack - Веб разработчик
        </div>
        <div class="aboutText txt">
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

           <div class="buttons btnAbout">
                <button class="blob-btn">
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
          <div class="cardCol">
            <div class="cardImg">
              <img src="./assets/images/cards/brother.svg" alt="">
            </div>
            <div class="cardText txt">
              При повторном заказе 
              сайта, действует 
              скидка 10%!
            </div>
          </div>

          <div class="cardCol">
            <div class="cardImg">
              <img src="./assets/images/cards/happy.svg" alt="">
            </div>
            <div class="cardText txt">
              Так же в праздники,
              есть много бонусов и
              скидок)
            </div>
          </div>

          <div class="cardCol">
            <div class="cardImg">
              <img src="./assets/images/cards/money.svg" alt="">
            </div>
            <div class="cardText txt">
              По частичная оплата,
              вы можете платить не 
              сразу, а частями.
            </div>
          </div>

          <div class="cardCol ">
            <div class="cardImg">
              <img class="animationCardImg" src="./assets/images/cards/card.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fiveBlog">
  <div class="container">
    <div class="fiveCases">
      <div class="fiveCasesTitle txt">
        <span>Мой кейсы</span> говорят о 
        качестве моей работы!)
      </div>
      <div class="fiveCasesRow">

        <div class="fiveCasesCol fiveCasesCol-1">
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
        </div>

        <div class="fiveCasesCol">
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
        </div>

        <div class="fiveCasesCol fiveCasesCol-3">
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

        <div class="fiveCasesCol">
          <a href="https://schoolcoloristic.ru/" target="_blank">
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
</section>
{{-- EGlav Blog --}}
@endsection