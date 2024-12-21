<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SaveNat</title>
    <!-- Link icon web -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Link fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Link grid -->
    <link rel="stylesheet" href="/assets/css/grid.css" />
    <!-- Link css -->
    <link rel="stylesheet" href="/assets/css/exchange.css" />
    <!-- Link responsive header -->
    <link rel="stylesheet" href="/assets/responsive/header.css" />
  </head>
  <body>
    <body id="top">
      <div class="loader"></div>
      <div id="main" class="grid wide">
        <!-- Header -->
        <div id="header" class="modal">
          <div class="header__element">
            <div class="header__close js-close">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="header__logo">
              <a href="">
                <img src="/assets/img/logo.png" alt="" />
                <!-- Save Nature -->
                <span>SaveNat</span>
              </a>
            </div>

            <nav class="header__nav">
              <ul class="header__nav-list">
                <li>
                  <a href="index.php"
                    ><i class="fa-solid fa-house"></i>Giới thiệu</a
                  >
                </li>
                <li>
                  <a href="product.php"
                    ><i class="fa-brands fa-servicestack"></i>Về sản phẩm</a
                  >
                </li>
                <li>
                  <a href="#"><i class="fa-solid fa-tree"></i>Nhận cây trồng</a>
                </li>
                <li>
                  <a href="pay.php"
                    ><i class="fa-solid fa-bag-shopping"></i>Thanh toán</a
                  >
                </li>
              </ul>

              <div class="header__nav-log">
                <a href="login.php"
                  >Đăng nhập
                  <i class="fa-solid fa-person-walking-arrow-loop-left"></i
                ></a>
              </div>
            </nav>
          </div>
        </div>

        <!-- Header for PC low, Tablet and Moblie -->
        <div id="header__responsive">
          <div class="header__responsive-btn js-btn-navbar">
            <i class="fa-solid fa-bars"></i>
          </div>
          <div class="header__responsive-img">
            <img src="/assets/img/logo.png" alt="" />
            <span>SaveNat</span>
          </div>
          <button class="header__responsive-package">
            <a href="pay.php" style="color: black">
              <i class="fa-solid fa-cart-shopping"></i>
              <span id="exchange_sp"></span>
            </a>
          </button>
        </div>

        <!-- Content -->
        <div id="content" class="grid">
          <div id="exchange">
            <div class="exchange__container">
              <div class="exchange__info">
                <div class="exchange__info-tittle">Nhận cây trồng</div>
                <div class="exchange__info-phara">
                  Bạn có thể dùng số điểm đã tích luỹ khi mua sản phẩm để nhận
                  lại những cây trồng dưới đây!
                </div>
                <div class="exchange__info-next">
                  <a href="#exchange__tree">Nhận cây ngay</a>
                </div>
              </div>
            </div>

            <div id="exchange__tree">
              <div class="exchange__tree-tittle">
                Mua sản phẩm đổi cây trồng
              </div>
              <div
                class="row"
                id="list-tree"
                style="justify-content: center"
              ></div>
            </div>
          </div>
          <!-- Footer -->
          <div id="footer">
            <div class="footer__col1">
              <div class="footer__fhead">
                <i class="fa-solid fa-leaf"></i>
                <span>savenature</span>
              </div>
              <div class="footer__connect">
                <i class="fa-brands fa-twitter"></i
                ><i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
              </div>
              <button>Liên lạc</button>
            </div>
            <div class="footer__col2">
              <div class="footer__link">
                <a href="#">Careers</a>
                <a href="#">How it works</a>
                <a href="#">Our mision</a>
                <a href="#">Your impact</a>
              </div>
              <div class="footer__link">
                <a href="#">FAQs</a>
                <a href="#">Get the app</a>
                <a href="#">Contact us</a>
                <a href="#">Privacy policy</a>
              </div>
            </div>
            <div class="footer__col3">
              <h2>Hành động nhỏ. Thay đổi lớn</h2>
              <p class="footer__makeby">Powered by <a href="#">hoang.ly</a></p>
              <div class="footer__info">
                <p>
                  Trường Đại học Công nghệ Thông tin & Truyền Thông Việt - Hàn,
                  Đại học Đà Nẵng
                </p>
                <p>
                  Địa chỉ: 470 Đường Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà
                  Nẵng
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Scrool to top -->
      <div id="scrolltop">
        <a href="#top" class="top-button">
          <i class="fa-solid fa-arrow-up-long"></i>
        </a>
      </div>

      <!-- Javascript scroll to top -->
      <script>
        const scrollTop = document.getElementById("scrolltop");
        window.onload = () => {
          scrollTop.style.visibility = "hidden";
          scrollTop.style.opacity = 0;
        };

        window.onscroll = () => {
          if (window.scrollY > 200) {
            scrollTop.style.visibility = "visible";
            scrollTop.style.opacity = 1;
          } else {
            scrollTop.style.visibility = "hidden";
            scrollTop.style.opacity = 0;
          }
        };
      </script>

      <!-- Javascript loader -->
      <script>
        window.addEventListener("load", () => {
          const loader = document.querySelector(".loader");

          loader.classList.add("loader--hidden");

          loader.addEventListener("transitionend", () => {
            document.body.removeChild(document.querySelector(".loader"));
          });
        });
      </script>

      <!-- Header sticky -->
      <script>
        window.addEventListener("scroll", function () {
          var header = this.document.querySelector("#header__responsive");
          header.classList.toggle("sticky", this.window.scrollY > 0);
        });
      </script>

      <!-- Javascript Header responsive navbar -->
      <script src="/assets/javascript/navbar.js"></script>

      <!-- Javascript tree -->
      <script src="/assets/javascript/exchange.js"></script>
    </body>
  </body>
</html>
