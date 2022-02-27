<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <style>
      .JudulWebsite {
        padding-top: 2rem;
        background-color: rgba(0, 149, 199, 0.192);
      }
    </style>

    <title>{{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 149, 199, 0.575)">
      <div class="container">
        <a class="navbar-brand" href="/">
          Tutorial Web
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/courses">Courses</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Log In / Register </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/login">Log In</a></li>
                <li><a class="dropdown-item" href="/register">Register</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="JudulWebsite text-center">
      <h1 class="display-4">Tutorial Web</h1>
      <p class="lead">Website untuk berlatih mengenai Programing<br /></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,0L0,320L102.9,320L102.9,0L205.7,0L205.7,128L308.6,128L308.6,128L411.4,128L411.4,64L514.3,64L514.3,160L617.1,160L617.1,224L720,224L720,224L822.9,224L822.9,160L925.7,160L925.7,224L1028.6,224L1028.6,32L1131.4,32L1131.4,96L1234.3,96L1234.3,0L1337.1,0L1337.1,64L1440,64L1440,320L1337.1,320L1337.1,320L1234.3,320L1234.3,320L1131.4,320L1131.4,320L1028.6,320L1028.6,320L925.7,320L925.7,320L822.9,320L822.9,320L720,320L720,320L617.1,320L617.1,320L514.3,320L514.3,320L411.4,320L411.4,320L308.6,320L308.6,320L205.7,320L205.7,320L102.9,320L102.9,320L0,320L0,320Z"
        ></path>
      </svg>
    </div>

    <div class="JudulWebsite text-center" style="background-color: white;"> 
      <h1 class="display-4" style="text-align: center">About Website</h1>
      <P class="container mt-4" style="text-align: left;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores soluta debitis, reiciendis id unde quam dolore laudantium tempore possimus quod illum nihil, officiis vel harum, voluptas fugiat quasi tempora natus.</P>
      <P class="container mt-4" style="text-align: left;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores soluta debitis, reiciendis id unde quam dolore laudantium tempore possimus quod illum nihil, officiis vel harum, voluptas fugiat quasi tempora natus.</P>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgba(0, 149, 199, 0.192)" fill-opacity="1" d="M0,128L0,288L160,288L160,160L320,160L320,224L480,224L480,256L640,256L640,128L800,128L800,160L960,160L960,256L1120,256L1120,128L1280,128L1280,288L1440,288L1440,320L1280,320L1280,320L1120,320L1120,320L960,320L960,320L800,320L800,320L640,320L640,320L480,320L480,320L320,320L320,320L160,320L160,320L0,320L0,320Z"></path></svg>
      </div>

    <div class="pt-1 pb-1" style="background-color: rgba(0, 149, 199, 0.192); text-align: center;">
      <p></p>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
