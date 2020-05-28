<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlaBait
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body>
  <div id="main" class="is-main">
    <header id="header" class="is-header">
      <nav id="topnav" class="is-header__topnav navbar navbar-dark navbar-expand-lg">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul style="margin-left:0em;" class="navbar-nav mr-auto justify-center text-center">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="https://yandex.ru/maps/-/CCQsqPFZdB">
                  <i class="fas fa-map-marker-alt"></i>
                  <span>
										<?php echo get_field("company_address", 26);?>
                  </span>
                </a>
              </li>
              <li class="nav-item" style="margin-left: 110px;">
                <a class="nav-link waves-effect waves-light" href="mailto:<?php echo get_field("company_email", 26);?>">
                  <i class="far fa-envelope"></i>
                  <span>
                    <?php echo get_field("company_email", 26);?>
                  </span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav mx-auto nav-flex-icons" style="margin-top: 0;">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="<?php echo get_permalink(26)?>">
                  <i class="fas fa-search is-main__header-search-i" style="display: inline-block;"></i>
                  <span style="text-decoration: underline;">
                    Поиск по сайту
                  </span>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons is-main__header-soc" style="margin-top: 0;">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                  Наши соц. сети
                </a>
              </li>
							<?php while ( have_rows('company_social', 26) ) : the_row(); ?>
							<li class="nav-item">
								<a class="nav-link waves-effect waves-light" href="<?php the_sub_field('link'); ?>">
									<i class="fab fa-<?php the_sub_field('icon'); ?> is-main__header-soc-i1"></i>
								</a>
							</li>
									<li class="wow slideInUp"><?php the_sub_field('tekst'); ?></li>
							<?php endwhile; ?>
            </ul>
            </div>
          </div>
        </nav>
      <div style="border-top:2px solid rgba(255, 255, 255, 0.1);"></div>
      <div class="container is-main__header-logo">
          <div class="row" style="padding: 16px 2px;">
            <div class="col-md-6 ">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand align-middle is-header__logo">
                  <svg width="177" height="56" viewBox="0 0 177 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M68.6672 35.2368L75.2949 20.5955H76.8331L83.4607 35.2368H81.6934L79.9915 31.3955H72.0792L70.3569 35.2368H68.6672ZM72.7174 29.9227H79.3451L76.0435 22.51L72.7174 29.9227Z" fill="white"/>
                    <path d="M86.9668 35.4045C86.3163 35.4045 85.6862 35.2859 85.0767 35.0527L85.408 33.7232C85.7149 33.8623 86.1404 33.9318 86.6967 33.9318C86.9749 33.9318 87.2204 33.8868 87.4454 33.7968C87.6663 33.7068 87.9282 33.4573 88.235 33.0482C88.5377 32.6391 88.7873 32.0786 88.9837 31.3668C89.176 30.655 89.3478 29.6077 89.491 28.2291C89.6383 26.8504 89.7078 25.2223 89.7078 23.3364V20.6977H99.1174V35.2368H97.4769V22.195H91.287V23.7741C91.287 25.7418 91.2093 27.4436 91.0497 28.8836C90.8901 30.3236 90.6815 31.4568 90.4278 32.2791C90.1701 33.1014 89.8469 33.7559 89.4501 34.2427C89.0573 34.7295 88.6687 35.0404 88.2882 35.1877C87.9077 35.335 87.4659 35.4045 86.9668 35.4045Z" fill="white"/>
                    <path d="M101.069 35.2368L107.696 20.5955H109.235L115.862 35.2368H114.095L112.393 31.3955H104.481L102.758 35.2368H101.069ZM105.119 29.9227H111.747L108.445 22.51L105.119 29.9227Z" fill="white"/>
                    <path d="M121.263 23.3445V25.93H125.186C126.839 25.93 128.124 26.3432 129.036 27.1695C129.948 27.9959 130.402 29.1168 130.402 30.5282C130.402 32.0254 129.915 33.1873 128.938 34.0054C127.964 34.8236 126.606 35.2368 124.867 35.2368H117.998V20.3991H129.384V23.3445H121.263ZM124.847 28.6464H121.263V32.2914H124.867C126.381 32.2914 127.138 31.6614 127.138 30.4054C127.134 29.2314 126.373 28.6464 124.847 28.6464Z" fill="white"/>
                    <path d="M131.396 35.2368L137.758 20.2927H140.769L147.131 35.2368H143.719L142.361 31.9068H136.085L134.727 35.2368H131.396ZM137.247 29.0268H141.191L139.219 24.2159L137.247 29.0268Z" fill="white"/>
                    <path d="M162.203 20.3991V35.2409H158.979V25.5086L152.494 35.2368H149.422V20.3991H152.646V30.1273L159.175 20.395H162.203V20.3991ZM158.271 18.4273C157.641 18.9918 156.839 19.2741 155.865 19.2741C154.892 19.2741 154.086 18.9918 153.46 18.4273C152.83 17.8627 152.445 17.0691 152.306 16.0545L154.192 15.715C154.487 16.66 155.047 17.1345 155.865 17.1345C156.684 17.1345 157.244 16.66 157.539 15.715L159.425 16.0545C159.281 17.0691 158.897 17.8627 158.271 18.4273Z" fill="white"/>
                    <path d="M169.219 35.2368V23.41H164.702V20.3991H177V23.41H172.483V35.2409H169.219V35.2368Z" fill="white"/>
                    <path d="M8 42.5L22.9572 15.1177H25.7474V42.5" stroke="white" stroke-width="3"/>
                    <path d="M9.5 29.44H42.03C45.2456 29.44 47.8517 32.0459 47.8517 35.2614C47.8517 38.4768 45.2456 41.0827 42.03 41.0827H31.434V15.1177H41.9605" stroke="white" stroke-width="3" stroke-linecap="square"/>
                    <path d="M50.5937 1.40909H5.40918C3.20004 1.40909 1.40918 3.19994 1.40918 5.40908V50.5909C1.40918 52.8001 3.20004 54.5909 5.40918 54.5909H50.5938C52.8029 54.5909 54.5938 52.8001 54.5938 50.5909V5.40909C54.5938 3.19995 52.8029 1.40909 50.5937 1.40909Z" stroke="white" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                    <span style="max-width:195px;" class="is-header__logo-text align-bottom">
                      Центр автоматизации <br>молочных и агропромышленных <br>предприятий
                    </span>
                </a>
              </div>
            <div class="col-md-6">
              <span class="navbar-nav ml-auto is-header__btns">
                <a href="!#" class="btn ml-auto is-header__btn">
                  <span>
                    <svg width="11" height="16" viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <ellipse cx="5.48029" cy="4.14559" rx="3.13141" ry="3.14559" stroke="white" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M1 15.1793V12.8652C1 11.7606 1.89543 10.8652 3 10.8652H8C9.10457 10.8652 10 11.7606 10 12.8652V15.1793" stroke="white" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                  </span>
                  <span>
                    Наши контакты
                  </span>
                </a>
                <a href="!#" class="btn ml-auto is-header__btn">
                  <span>
                    <svg width="36" height="38" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_d)">
                      <path d="M11.3329 12.1427L12.0324 10.9633C12.6808 9.87012 14.171 9.65107 15.1065 10.5114L15.9806 11.3154C16.6764 11.9552 16.8292 12.9947 16.347 13.8077L16.1151 14.1987C15.762 14.913 14.9242 15.373 16.4681 16.9397C17.4476 17.9336 18.4326 18.5756 19.1313 18.9122C19.655 19.1644 20.2105 18.9356 20.5751 18.483C21.2555 17.6386 22.4995 17.5243 23.3222 18.2307L24.1469 18.9388C25.1051 19.7615 25.0702 21.2556 24.0746 22.0328L22.1499 23.5351C21.9314 23.7056 21.6793 23.8375 21.4022 23.8413C20.2571 23.8571 17.7875 23.1645 14.4206 20.2035C10.8211 17.0381 10.8307 14.2315 11.1092 12.7202C11.1469 12.5155 11.2267 12.3218 11.3329 12.1427Z" stroke="white" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M21 12.8416L20.2885 13.0788C20.3906 13.385 20.6772 13.5916 21 13.5916V12.8416ZM25.5857 8.3101C25.8444 7.98666 25.792 7.51469 25.4685 7.25593C25.1451 6.99717 24.6731 7.04962 24.4143 7.37306L25.5857 8.3101ZM20.7115 9.60441C20.5805 9.21145 20.1558 8.99908 19.7628 9.13007C19.3699 9.26106 19.1575 9.6858 19.2885 10.0788L20.7115 9.60441ZM24 13.5916C24.4142 13.5916 24.75 13.2558 24.75 12.8416C24.75 12.4274 24.4142 12.0916 24 12.0916V13.5916ZM21.5857 13.3101L25.5857 8.3101L24.4143 7.37306L20.4143 12.3731L21.5857 13.3101ZM21.7115 12.6044L20.7115 9.60441L19.2885 10.0788L20.2885 13.0788L21.7115 12.6044ZM21 13.5916H24V12.0916H21V13.5916Z" fill="white" fill-opacity="0.5"/>
                      </g>
                      <defs>
                      <filter id="filter0_d" x="0.25" y="0.0915527" width="35.5" height="37.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset dy="3"/>
                      <feGaussianBlur stdDeviation="5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.0933333 0 0 0 0 0.183467 0 0 0 0 0.266667 0 0 0 0.3 0"/>
                      <feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                      </filter>
                      </defs>
                    </svg>
                  </span>
                  <span>
                    Заказать звонок
                  </span>
                </a>
              </span>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light is-header__navbar text-center" style="padding: 0;">
            <a class="navbar-brand d-lg-none ml-2" href="#">Меню</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
              aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="basicExampleNav">

              <ul class="navbar-nav mx-auto is-header__navbar-menu">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Главная
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    О компании
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Продукты 1С
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Продукты 1С и оборудование
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                      Услуги
                    </a>
                  <div class="dropdown-menu dropdown-primary"  aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Линия Консультаций 1С</a>
                    <a class="dropdown-item" href="#">1С в облаке</a>
                    <a class="dropdown-item" href="#">Аренда сервера</a>
                    <a style="z-index: 1001;" class="dropdown-item" href="#">Сопровождение 1С</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Кейсы и Антикейсы
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Партнеры
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link nav-link-last">
                    Поддержка
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </header>
