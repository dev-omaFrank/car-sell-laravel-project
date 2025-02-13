<x-app-layout>
  <div class="container navbar-content">
    <a href="/" class="logo-wrapper">
      <img src="/img/logoipsum-265.svg" alt="Logo" />
    </a>
    <button class="btn btn-default btn-navbar-toggle">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        style="width: 24px"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
        />
      </svg>
    </button>
    <div class="navbar-auth">
      <a href="/add_new.html" class="btn btn-add-new-car">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          style="width: 18px; margin-right: 4px"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
          />
        </svg>

        Add new Car
      </a>
      <div class="navbar-menu" tabindex="-1">
        <a href="javascript:void(0)" class="navbar-menu-handler">
          My Account
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            style="width: 20px"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="m19.5 8.25-7.5 7.5-7.5-7.5"
            />
          </svg>
        </a>
        <ul class="submenu">
          <li>
            <a href="my_cars.html">My Cars</a>
          </li>
          <li>
            <a href="watchlist.html">My Favourite Cars</a>
          </li>
          <li>
            <form action="#" method="post">
              <button>Logout</button>
            </form>
          </li>
        </ul>
      </div>
      <a href="/signup.html" class="btn btn-primary btn-signup">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          style="width: 18px; margin-right: 4px"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
          />
        </svg>

        Signup
      </a>
      <a href="/login.html" class="btn btn-login flex items-center">
        <svg
          style="width: 18px; fill: currentColor; margin-right: 4px"
          viewBox="0 0 1024 1024"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M426.666667 736V597.333333H128v-170.666666h298.666667V288L650.666667 512 426.666667 736M341.333333 85.333333h384a85.333333 85.333333 0 0 1 85.333334 85.333334v682.666666a85.333333 85.333333 0 0 1-85.333334 85.333334H341.333333a85.333333 85.333333 0 0 1-85.333333-85.333334v-170.666666h85.333333v170.666666h384V170.666667H341.333333v170.666666H256V170.666667a85.333333 85.333333 0 0 1 85.333333-85.333334z"
            fill=""
          />
        </svg>
        Login
      </a>
    </div>
  </div>
</header>
<!-- Home Slider -->
 <section class="hero-slider">
    <!-- Carousel wrapper -->
    <div class="hero-slides">
      <!-- Item 1 -->
      <div class="hero-slide">
        <div class="container">
          <div class="slide-content">
            <h1 class="hero-slider-title">
              Buy <strong>The Best Cars</strong> <br />
              in your region
            </h1>
            <div class="hero-slider-content">
              <p>
                Use powerful search tool to find your desired cars based on
                multiple search criteria: Maker, Model, Year, Price Range, Car
                Type, etc...
              </p>

              <button class="btn btn-hero-slider">Find the car</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="hero-slide">
        <div class="flex container">
          <div class="slide-content">
            <h2 class="hero-slider-title">
              Do you want to <br />
              <strong>sell your car?</strong>
            </h2>
            <div class="hero-slider-content">
              <p>
                Submit your car in our user friendly interface, describe it,
                upload photos and the perfect buyer will find it...
              </p>

              <button class="btn btn-hero-slider">Add Your Car</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
      <button type="button" class="hero-slide-prev">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M5 1 1 5l4 4"
          />
        </svg>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hero-slide-next">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m1 9 4-4-4-4"
          />
        </svg>
        <span class="sr-only">Next</span>
      </button>
    </div>
</section>
  <!--/ Home Slider -->

<main>
  <x-search-form action="/submit.html" method="post"/>
    <!-- New Cars -->
    <section>
      <div class="container">
        <h2>Latest Added Cars</h2>
        <div class="car-items-listing">
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
          <div class="car-item card">
            <a href="/view.html">
              <img
                src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                alt=""
                class="car-item-img rounded-t"
              />
            </a>
            <div class="p-medium">
              <div class="flex items-center justify-between">
                <small class="m-0 text-muted">New Jersey</small>
                <button class="btn-heart">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    style="width: 20px"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                  </svg>
                </button>
              </div>
              <h2 class="car-item-title">2016 - Lexus RX200t</h2>
              <p class="car-item-price">$25,000</p>
              <hr />
              <p class="m-0">
                <span class="car-item-badge">SUV</span>
                <span class="car-item-badge">Electric</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ New Cars -->
</main> 
</x-app-layout>

