<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>KAWAII STORE</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&display=swap');
:root {
    --white: white;
    --body: gray;
    --dark: #333;
    --border-color: rgba(0, 0, 0, 0.10);
    --border-width: 1px;
    --border-radius: 30px;
}       
body {
            font-family: "Barlow", sans-serif;
            line-height: 1.8;
            color: var(--body);
        }
        h1,h2,h3,h4,h5,h6 {
          font-weight: 800;
          color: var(--dark);

        }
        a {
            color: var(--body);
            text-decoration: none;
            transition: all 0.43s ease;
            font-weight: 700;
        }
      a:hover {
          color: var(--dark);
        }
      img {
        width: 100%;
       }
       section{
        padding-top: 170px;
        padding: 170px;
       }
.navbar{
    position: absolute;
    width: 100%;
    padding-top: 16px;
    padding-bottom: 16px;
    z-index: 9999;
}
.navbar-brand{
    font-size: 28px;
    text-transform: uppercase;
}
.navbar .navbar-nav .nav-link {
    text-transform: uppercase;
    font-size: 14px;
}
@media (max-width: 992px) {
    .navbar {
        background-color: var(--dark);
    }
}
      #hero {
        background: url('banner1.png');
        min-height: 100vh;
        background-position: center;
        background-size: cover;
        }
#hero h1,
#hero p {
    color: var(--white);
}
#hero h1 {
    font-weight: 900;
}
#hero p {
    font-size: 18px;
    max-width: 450px;
}
.btn {
    padding: 20px 44px;
    border-width: 2px;
    border-radius: 100px;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
}
.intro{
  margin-bottom: 60px;
}
.intro .hr-line {
  width: 60px;
  height: 4px;
  background-color: var(--dark);
  display: inline-block;
}
.intro h1 {
  font-weight: 900;
  text-transform: uppercase;
  margin-top: 16px;
  margin-bottom: 16px;
}
.intro p {
  width: 500px;
}
.intro.intro-dark h1,
.intro.intro-dark p {
  color: white;
}
.intro.intro-dark .hr-line{
  background-color: white;
}
.service{
  border: var(--border-width) solid var(--border-color);
  border-radius: var(--border-radius);
  display: flex;
  padding: 32px;
  margin-bottom: 20px;
}
.service .icon {
  width: 100px;
  height: 100px;
  background-color: var(--dark);
  display: flex;
  flex: none;
  align-items: center;
  justify-content: center;
  font-size: 34px;
  color: white;
  border-radius: var(--border-radius);
  margin-right: 16px;
}
.link-arrow {
  text-transform: uppercase;
  display: flex;
  align-items: center;
}
.link-arrow.link-white {
  color: var(--body);
}
.link-arrow.link-white:hover {
    color: white;
}
/*work */
#products {
  background-color: var(--dark);
}
.project h3 {
  color: white;
  margin-top: 24px;
}
.project .image-wrapper {
  overflow: hidden;
  border-radius: var(--border-radius);
}
.project .image-wrapper img {
  border-radius: var(--border-radius);
  transform: scale(1.1);
  transition: all 0.4s ease;
}
.project:hover .image-wrapper img {
  transform: scale(1);
}





    </style>
</head>
<body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="home">KAWAII STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-lg-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutus">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#products">Products</a>
        </li>
      </ul>
      <a class="iconprof"  href="login"><lord-icon
    src="https://cdn.lordicon.com/kthelypq.json"
    trigger="hover"
    colors="primary:#ffffff"
    style="width:50px;height:50px;">
</lord-icon> </lord-icon></a>

    </div>
  </div>
</nav>
@yield('content')













</body>
</html>