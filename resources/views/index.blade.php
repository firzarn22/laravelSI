<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mug & Plate</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
  <!-- HEADER -->
  <header>
    <div class="logo">Mug & Plate</div>
    <nav>
      <a href="index.html">Home</a>
      <a href="ours.html">Ours</a>
      <a href="blog.html">Blog</a>
      <a href="about.html">About Us</a>
    </nav>

    <div class="right-icons">
     <a href="cart.html" class="cart">🛒</a>


      <!-- BELUM LOGIN -->
      <details class="user-menu not-logged">
        <summary class="user-icon">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Icon">
        </summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="/html/login.html" class="btn primary">Sign in</a>
          <div class="btn-row">
            <a href="#" class="btn"><span>👜</span> Orders</a>
            <a href="#" class="btn require-login"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>

      <!-- SUDAH LOGIN -->
      <details class="user-menu logged">
        <summary class="user-initial"></summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="#" class="btn primary sign-out">Sign out</a>
          <div class="btn-row">
            <a href="orderhistory.html" class="btn"><span>👜</span> Orders</a>
            <a href="profile.html" class="btn"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-text">
      <h1>Make <span>Every Sip</span> a Little Prettier</h1>
      <p>Explore our adorable mugs and plates to brighten your day!</p>
      <div class="hero-promo">
        <h3>Limited Sale</h3>
        <p>Get your favorite sets now ✨</p>
      </div>
    </div>
    <div class="hero-image">
      <img src="/images/YOW.jpg" alt="Mug & Plate">
    </div>
  </section>

  <!-- BEST SELLING PRODUCTS -->
  <section class="products">
    <h2>Best Selling Products</h2>
    <div class="product-list">
      <div class="product">
        <img src="/images/7.png" alt="Valentina">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="/images/28.png" alt="Chanel 5">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="/images/6.png" alt="Miss Dior">
        <button>Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- QUALITY SECTION -->
  <section class="quality">
    <div class="quality-text">
      <h2>Elegant simplicity in every piece</h2>
      <p>
        Discover mugs and plates made with care — minimal, beautiful,
        and built to last for your everyday enjoyment.
      </p>
      <a href="blog.html">
        <button>Explore More</button>
      </a>
    </div>
    <div class="quality-images">
      <img src="/images/YOW2.jpg" alt="OURS PLATES">
      <img src="/images/YOW3.jpg" alt="OURS MUGS">
    </div>
  </section>

  <!-- ANOTHER PRODUCT SECTION -->
  <section class="products">
    <h2>Best Selling Products</h2>
    <div class="product-list">
      <div class="product">
        <img src="/images/3.png" alt="Valentina">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="/images/25.png" alt="Chanel 5">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="/images/2.png" alt="Miss Dior">
        <button>Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 Mug & Plate. All rights reserved.</p>
  </footer>

  <!-- SCRIPT LOGIN LOGIC -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const notLoggedMenu = document.querySelector(".user-menu.not-logged");
      const loggedMenu = document.querySelector(".user-menu.logged");
      const userInitial = document.querySelector(".user-initial");

      const isLoggedIn = localStorage.getItem("isLoggedIn") === "true";
      const userEmail = localStorage.getItem("userEmail");

      if (isLoggedIn && userEmail) {
        // Sudah login
        notLoggedMenu.style.display = "none";
        loggedMenu.style.display = "inline-block";
        const initial = userEmail.charAt(0).toUpperCase();
        userInitial.textContent = initial;
      } else {
        // Belum login
        notLoggedMenu.style.display = "inline-block";
        loggedMenu.style.display = "none";
      }

      // Klik Profile waktu belum login
      const requireLoginBtns = document.querySelectorAll(".require-login");
      requireLoginBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          alert("You need to sign in first to access your profile.");
          window.location.href = "/html/login.html";
        });
      });

      // Tombol Sign Out
      const signOutBtn = loggedMenu.querySelector(".sign-out");
      signOutBtn.addEventListener("click", (e) => {
        e.preventDefault();
        localStorage.removeItem("isLoggedIn");
        localStorage.removeItem("role");
        localStorage.removeItem("userEmail");
        window.location.href = "/index.html";
      });
    });
  </script>
</body>
</html>
