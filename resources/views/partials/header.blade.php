<!-- ---------------------------------- -->
<!-- Start Vertical Layout Header -->
<!-- ---------------------------------- -->
<nav class="navbar navbar-expand-lg p-0">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a
        class="nav-link sidebartoggler nav-icon-hover ms-n3"
        id="headerCollapse"
        href="javascript:void(0)"
      >
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="nav-item d-none d-lg-block">
      <a
        class="nav-link nav-icon-hover"
        href="javascript:void(0)"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
      >
        <i class="ti ti-search"></i>
      </a>
    </li>
  </ul>

  {{-- <ul class="navbar-nav quick-links d-none d-lg-flex">
    <!-- ------------------------------- -->
    <!-- start apps Dropdown -->
    <!-- ------------------------------- -->
    <li class="nav-item dropdown hover-dd d-none d-lg-block">
      <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
        Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
      </a>
      <div
        class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0"
      >
        @include("partials.header-components.dd-apps")
      </div>
    </li>
    <!-- ------------------------------- -->
    <!-- end apps Dropdown -->
    <!-- ------------------------------- -->
    <li class="nav-item dropdown-hover d-none d-lg-block">
      <a class="nav-link" href="">Chat</a>
    </li>
    <li class="nav-item dropdown-hover d-none d-lg-block">
      <a class="nav-link" href="">Calendar</a>
    </li>
    <li class="nav-item dropdown-hover d-none d-lg-block">
      <a class="nav-link" href="">Email</a>
    </li>
  </ul> --}}

  <div class="d-block d-lg-none">
    <img src="{{ asset('assets/dashboard/images/logos/dark-logo.svg') }}" width="180" alt="" />
  </div>
  <a
    class="navbar-toggler nav-icon-hover p-0 border-0"
    href="javascript:void(0)"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="p-2">
      <i class="ti ti-dots fs-7"></i>
    </span>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between">
      <a
        href="javascript:void(0)"
        class="nav-link d-flex d-lg-none align-items-center justify-content-center"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobilenavbar"
        aria-controls="offcanvasWithBothOptions"
      >
        <i class="ti ti-align-justified fs-7"></i>
      </a>
      <ul
        class="navbar-nav flex-row ms-auto align-items-center justify-content-center"
      >
        <!-- ------------------------------- -->
        <!-- start language Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="{{ asset('assets/dashboard/images/svgs/icon-flag-en.svg') }}"
              alt=""
              width="20px"
              height="20px"
              class="rounded-circle object-fit-cover round-20"
            />
          </a>
          <div
            class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            <div class="message-body">
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="{{ asset('assets/dashboard/images/svgs/icon-flag-en.svg') }}"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">English (UK)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="{{ asset('assets/dashboard/images/svgs/icon-flag-cn.svg') }}"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">中国人 (Chinese)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="{{ asset('assets/dashboard/images/svgs/icon-flag-fr.svg') }}"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">français (French)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="{{ asset('assets/dashboard/images/svgs/icon-flag-sa.svg') }}"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">عربي (Arabic)</p>
              </a>
            </div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end language Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start shopping cart Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item">
          <a
            class="nav-link position-relative nav-icon-hover"
            href="javascript:void(0)"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
            <i class="ti ti-basket"></i>
            <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
          </a>
        </li>
        <!-- ------------------------------- -->
        <!-- end shopping cart Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start notification Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            @include("partials.header-components.dd-notification")
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end notification Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start profile Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a
            class="nav-link pe-0"
            href="javascript:void(0)"
            id="drop1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div class="d-flex align-items-center">
              <div class="user-profile-img">
                <img
                  src="{{ asset('assets/dashboard/images/profile/user-1.jpg') }}"
                  class="rounded-circle"
                  width="35"
                  height="35"
                  alt=""
                />
              </div>
            </div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop1"
          >
            @include("partials.header-components.dd-profile")
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end profile Dropdown -->
        <!-- ------------------------------- -->
      </ul>
    </div>
  </div>
</nav>
<!-- ---------------------------------- -->
<!-- End Vertical Layout Header -->
<!-- ---------------------------------- -->

<!-- ------------------------------- -->
<!-- apps Dropdown in Small screen -->
<!-- ------------------------------- -->
@include("partials.header-components.dd-apps-mobile")