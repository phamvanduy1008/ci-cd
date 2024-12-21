<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "Mã PHP"?>
    </title>
    <!-- Link icon web -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Link font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- Link grid -->
    <link rel="stylesheet" href="/assets/css/grid.css" />
    <!-- Link style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Link responsive header -->
    <link rel="stylesheet" href="/assets/responsive/header.css" />
  </head>
  <body id="top">
<?php echo "Mã PHP";?>
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
                <a href="#"><i class="fa-solid fa-house"></i>Giới thiệu</a>
              </li>
              <li>
                <a href="product.php"
                  ><i class="fa-brands fa-servicestack"></i>Về sản phẩm</a
                >
              </li>
              <li>
                <a href="exchange.php"
                  ><i class="fa-solid fa-tree"></i>Nhận cây trồng</a
                >
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
            <span id="index_sp"></span>
          </a>
        </button>
      </div>
      <!-- Content -->
      <div id="content" class="grid">
        <div id="slider" class="row">
          
          <div class="col l-8 m-12 c-0">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slider__container row">
                    <div class="col l-5 m-5">
                      <div class="slider__img" style="height: 100%">
                        <img
                          src="assets/img/[removal.ai]_848e6927-bf2a-46f1-a67f-ab630bf755e9.png"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col l-7 m-7">
                      <div class="slider__content">
                        <p class="slider__content-title">
                          <span>Môi Trường Hôm Nay</span> - Cuộc Sống Ngày Mai
                        </p>
                        <p class="slider__content-phara">
                          Một hành động nhỏ của bạn có thể giết chết thiên
                          nhiên, nhưng cũng có thể cứu lấy thiên nhiên
                        </p>
                        <p class="slider__content-message">
                          Hãy hành động đừng lưỡng lự
                        </p>
                        <a href="product.php" class="slider__content-btn"
                          >Đặt mua ngay</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider__container">
                    <div class="slider__img" style="height: 100%">
                      <img
                        src="assets/img/[removal.ai]_tmp-647dc797907f7.png"
                        alt=""
                      />
                    </div>
                    <div class="slider__content">
                      <p class="slider__content-title">
                        <span>Bảo Vệ Môi Trường</span> - Xây Trái Đất Xanh
                      </p>
                      <p class="slider__content-phara">
                        Cùng chung tay bảo vệ môi trường vì tương lai của thế
                        giới, hãy giữ lấy màu xanh và làm sạch môi trường
                      </p>
                      <p class="slider__content-message">
                        Hãy hành động đừng lưỡng lự
                      </p>
                      <a href="product.php" class="slider__content-btn"
                        >Đặt mua ngay</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Gio Hang -->
          <div class="col l-4 m-12 c-12">
            <div id="package">
              <div class="package__item">
                <div class="package__logo">
                  <i class="fa-solid fa-money-bill"></i>
                </div>
                <div class="package__info">
                  <h2 class="package__info-titlle">Số điểm tích luỹ</h2>
                  <p class="package__info-quantity">400</p>
                </div>
              </div>
              <div class="package__item">
                <div class="package__logo">
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="package__info">
                  <h2 class="package__info-titlle">Sản phẩm hiện có</h2>
                  <p class="package__info-quantity">23</p>
                </div>
              </div>
              <div class="package__item">
                <div class="package__logo">
                  <i class="fa-brands fa-pagelines"></i>
                </div>
                <div class="package__info">
                  <h2 class="package__info-titlle">Số cây nhận được</h2>
                  <p class="package__info-quantity">8</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        

        <div id="benefit" class="grid">
          <div class="row">
            <div class="col l-5 m-0 c-0">
              <div class="benefit__img">
                <img src="/assets/img/moreOrganic.jpg" alt="" />
              </div>
            </div>
            <div class="col l-7 m-12 c-12">
              <div class="benefit__info">
                <h1>Về sản phẩm</h1>
                <p>
                  Sản phẩm hầu hết đều là những vật dụng mang tính bảo vệ và an
                  toàn đối với môi trường và sức khoẻ con người.
                </p>
                <ul class="benefit__list">
                  <li>
                    <i class="fa-solid fa-check"></i>An toàn cho người dùng
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>Sản phẩm có thể dùng lại
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>Sản xuất 100% từ thiên
                    nhiên
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>Thân thiện với môi trường
                  </li>
                </ul>
                <div class="benefit__btn">
                  <a href="product.php">Tìm hiểu thêm</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="feature" class="grid">
          <div class="row">
            <div class="col l-3 m-12 c-12">
              <div class="feature__item">
                <div class="feature__item-icon">
                  <i class="fa-solid fa-clover"></i>
                </div>
                <h1>Bảo vệ rừng</h1>
                <p class="feature__item-phara">
                  Những năm gần đây, diện tích rừng tự nhiên ở Việt Nam 
                </p>
                <a
                  href="https://accgroup.vn/cac-bien-phap-bao-ve-rung-tot-nhat/"
                  style="
                    color: #40c057;
                    font-size: 1.6rem;
                    text-decoration: none;
                    cursor: pointer;
                  "
                  >Tham khảo ngay</a
                >
              </div>
            </div>
            <div class="col l-3 m-12 c-12">
              <div class="feature__item">
                <div class="feature__item-icon">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <h1>Bảo vệ nước</h1>
                <p class="feature__item-phara">
                  Những năm gần đây, ô nhiễm nguồn nước đang là một trong những
                  thách thức môi trường lớn nhất đối với Việt Nam.
                </p>
                <a
                  href="https://www.prudential.com.vn/vi/blog-nhip-song-khoe/bao-ve-nguon-nuoc-tu-nhung-hanh-dong-nho-moi-ngay/"
                  style="
                    color: #40c057;
                    font-size: 1.6rem;
                    text-decoration: none;
                    cursor: pointer;
                  "
                  >Tham khảo ngay</a
                >
              </div>
            </div>
            <div class="col l-3 m-12 c-12">
              <div class="feature__item">
                <div class="feature__item-icon">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <h1>Bảo vệ nước</h1>
                <p class="feature__item-phara">
                  Những năm gần đây, ô nhiễm nguồn nước đang là một trong những
                  thách thức môi trường lớn nhất đối với Việt Nam.
                </p>
                <a
                  href="https://www.prudential.com.vn/vi/blog-nhip-song-khoe/bao-ve-nguon-nuoc-tu-nhung-hanh-dong-nho-moi-ngay/"
                  style="
                    color: #40c057;
                    font-size: 1.6rem;
                    text-decoration: none;
                    cursor: pointer;
                  "
                  >Tham khảo ngay</a
                >
              </div>
            </div>
            <div class="col l-3">
              <div class="feature__item">
                <div class="feature__item-icon">
                  <i class="fa-solid fa-recycle"></i>
                </div>
                <h1>Tái sử dụng</h1>
                <p class="feature__item-phara">
                  Bây giờ, chúng ta có thể góp phần bảo
                </p>
                <a
                  href="https://pjscoffeevietnam.com/vi/san-pham-tai-su-dung-giai-phap-toi-uu-bao-ve-moi-truong/"
                  style="
                    color: #40c057;
                    font-size: 1.6rem;
                    text-decoration: none;
                    cursor: pointer;
                  "
                  >Tham khảo ngay</a
                >
              </div>
            </div>
          </div>
        </div>

        <div id="reason" class="grid">
          <h1>Tại sao nên chọn những sản phẩm này</h1>
          <p class="reason__phara">
            Khi ta tái chế một sản phẩm có nghĩa là ta đã sử dụng nó được nhiều
            lần, đầu tiên là sẽ tiết kiệm được tiền phải bỏ ra mua một sản phẩm
            mới, rộng hơn là tiết kiệm được nguyên liệu, vật liệu và năng lượng
            cho một dây truyền sản xuất ra một sản phẩm mới, rộng hơn nữa là
            giảm được khí thải, rác thải vào môi trường…
          </p>

          <div class="reason__container row">
            <div class="col l-7 m-12 c-12">
              <div class="reason__video">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/FBgEZPZnN6E"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
            <div class="col l-5 m-12 c-12">
              <div class="reason__content">
                <div class="reason__content-list">
                  <div class="reason__content-item">
                    <i class="fa-solid fa-arrows-rotate"></i>
                    <h2>Có tính ứng dụng cao</h2>
                    <p>
                      Nhựa tái chế mang đến tính ứng dụng cao, chế biến thành
                      rất nhiều sản phẩm vô cùng hữu ích cho người dùng.
                    </p>
                  </div>
                  <div class="reason__content-item">
                    <i class="fa-solid fa-turn-down"></i>
                    <h2>Giảm lượng chất thải</h2>
                    <p>
                      Hàng năm lượng chất thải ra môi trường vô cùng nhiều và
                      đáng báo động. Ô nhiễm môi trường gây ra biết bao nhiêu
                      hậu quả đau lòng.
                    </p>
                  </div>
                </div>
                <div class="reason__content-list">
                  <div class="reason__content-item">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h2>Tiết kiệm</h2>
                    <p>
                      Nếu bạn mua các đồ dùng tái sinh, chúng sẽ ít tốn kém hơn
                      giúp bạn tiết kiệm chi phí hiệu quả. Nhất là đối với các
                      gia đình đông người.
                    </p>
                  </div>
                  <div class="reason__content-item">
                    <i class="fa-solid fa-handshake-simple"></i>
                    <h2>Tạo việc làm</h2>
                    <p>
                      Tái chế cũng cần nhân lực để thu gom để phân loại, để xử
                      lý, có nghĩa là tạo ra công việc cho không ít người.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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

    <!-- Swiper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>

    <!-- Header sticky -->
    <script>
      window.addEventListener("scroll", function () {
        var header = this.document.querySelector("#header__responsive");
        header.classList.toggle("sticky", this.window.scrollY > 0);
      });
      function setItem() {
        var count = 0;
        for (let i = 1; i <= 30; i++) {
          var x = localStorage.getItem(i);
          if (x > 0) count += parseInt(x);
        }
        document.getElementById("index_sp").innerHTML = count;
      }

      setItem();
    </script>

    <!--Javascript Header responsive navbar -->
    <script src="/assets/javascript/navbar.js"></script>
  </body>
</html>
