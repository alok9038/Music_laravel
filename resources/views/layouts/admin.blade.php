<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    <script src="{{ asset("js/font.js") }}" crossorigin="anonymous"></script>
    {{-- <script src="https://kit.fontawesome.com/24429d851b.js" crossorigin="anonymous"></script> --}}
    <title>Music : Feel thee </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color: #0c0f12;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-flex"> <span><div class="me-2">ADMIN </div> </span>
                <svg viewBox="0 0 120.511 22.794" width="149.511" height="29.794">
                    <defs>
                    <style>
                        .cls-1 {
                        fill: #f7f5f5;
                        }
                
                        .cls-2 {
                        fill: #fa3235;
                        }
                    </style>
                    </defs>
                    <g id="Wynklogo-Horiz-big" transform="matrix(1, 0, 0, 1, -121.015999, -1069.938965)">
                    <g id="Horiz-long-colour-trans" transform="translate(121.016 1069.939)">
                        <path id="MUSIC" class="cls-1" d="M 25.804 9.663 L 25.804 18.571 C 25.826 18.77 25.752 18.967 25.604 19.102 C 25.447 19.209 25.259 19.261 25.069 19.25 C 24.882 19.262 24.696 19.21 24.542 19.102 C 24.401 18.963 24.332 18.767 24.355 18.571 L 24.355 7.836 C 24.327 7.574 24.425 7.315 24.618 7.136 C 25.053 6.882 25.589 6.869 26.036 7.101 C 26.198 7.232 26.322 7.405 26.393 7.601 L 30.367 17.327 L 34.341 7.601 C 34.411 7.407 34.531 7.234 34.689 7.101 C 35.121 6.869 35.644 6.882 36.064 7.136 C 36.247 7.32 36.337 7.577 36.31 7.836 L 36.31 18.571 C 36.333 18.767 36.264 18.963 36.123 19.102 C 35.969 19.209 35.784 19.262 35.597 19.25 C 35.407 19.261 35.219 19.209 35.062 19.102 C 34.915 18.967 34.84 18.77 34.862 18.571 L 34.862 9.648 L 31.194 18.521 C 31.127 18.683 31.022 18.826 30.888 18.939 C 30.55 19.171 30.105 19.171 29.767 18.939 C 29.633 18.826 29.528 18.683 29.461 18.521 Z M 46.964 7.645 C 46.942 7.438 47.016 7.233 47.164 7.088 C 47.325 6.974 47.519 6.919 47.716 6.931 C 47.915 6.92 48.112 6.975 48.276 7.088 C 48.426 7.232 48.501 7.438 48.476 7.645 L 48.476 14.726 C 48.484 15.374 48.38 16.018 48.17 16.631 C 47.98 17.183 47.673 17.687 47.27 18.11 C 46.854 18.535 46.35 18.865 45.793 19.076 C 45.142 19.319 44.45 19.437 43.755 19.424 C 43.063 19.438 42.374 19.319 41.726 19.076 C 41.173 18.863 40.672 18.534 40.257 18.11 C 39.854 17.687 39.547 17.183 39.357 16.631 C 39.147 16.018 39.043 15.374 39.051 14.726 L 39.051 7.648 C 39.027 7.441 39.101 7.235 39.251 7.091 C 39.415 6.978 39.612 6.923 39.811 6.934 C 40.008 6.922 40.202 6.977 40.363 7.091 C 40.511 7.236 40.585 7.441 40.563 7.648 L 40.563 14.608 C 40.489 15.553 40.795 16.489 41.412 17.208 C 42.773 18.356 44.764 18.356 46.125 17.208 C 46.737 16.486 47.04 15.552 46.966 14.608 Z M 56.355 12.586 C 57.175 12.791 57.923 13.215 58.52 13.813 C 59.004 14.402 59.25 15.151 59.208 15.913 C 59.223 16.459 59.109 17.001 58.877 17.496 C 58.668 17.924 58.367 18.3 57.994 18.596 C 57.616 18.891 57.183 19.107 56.72 19.231 C 56.236 19.365 55.736 19.432 55.234 19.431 C 54.408 19.435 53.586 19.311 52.797 19.066 C 52.038 18.832 51.355 18.4 50.819 17.813 C 50.701 17.698 50.612 17.558 50.556 17.404 C 50.53 17.306 50.516 17.205 50.514 17.104 C 50.521 16.908 50.614 16.725 50.769 16.604 C 50.91 16.465 51.098 16.385 51.295 16.378 C 51.393 16.387 51.487 16.421 51.567 16.478 C 51.646 16.536 51.72 16.599 51.788 16.669 C 52.234 17.169 52.785 17.564 53.401 17.826 C 53.978 18.035 54.588 18.137 55.201 18.126 C 55.838 18.152 56.466 17.972 56.993 17.613 C 57.464 17.262 57.727 16.699 57.693 16.113 C 57.72 15.604 57.535 15.106 57.183 14.738 C 56.698 14.325 56.122 14.032 55.502 13.885 L 54.024 13.45 C 53.151 13.244 52.343 12.826 51.672 12.232 C 51.131 11.655 50.852 10.881 50.899 10.092 C 50.884 9.568 51.01 9.05 51.264 8.592 C 51.501 8.181 51.826 7.828 52.215 7.557 C 52.607 7.284 53.044 7.081 53.506 6.957 C 53.962 6.831 54.433 6.767 54.906 6.765 C 55.658 6.759 56.404 6.895 57.106 7.165 C 57.797 7.436 58.4 7.894 58.847 8.487 C 58.923 8.589 58.986 8.7 59.034 8.818 C 59.067 8.907 59.085 9.001 59.085 9.096 C 59.089 9.283 59.008 9.463 58.864 9.583 C 58.735 9.703 58.566 9.771 58.389 9.774 C 58.279 9.775 58.171 9.748 58.075 9.696 C 57.952 9.622 57.841 9.531 57.744 9.426 C 57.383 8.993 56.938 8.638 56.436 8.382 C 55.95 8.164 55.422 8.057 54.89 8.069 C 54.58 8.068 54.272 8.109 53.973 8.191 C 53.691 8.266 53.424 8.39 53.183 8.556 C 52.952 8.717 52.76 8.928 52.622 9.174 C 52.477 9.437 52.404 9.734 52.41 10.035 C 52.407 10.239 52.439 10.442 52.503 10.635 C 52.573 10.827 52.683 11.002 52.826 11.148 C 53.011 11.334 53.227 11.487 53.463 11.601 C 53.791 11.762 54.132 11.896 54.482 12.001 Z M 61.467 7.645 C 61.445 7.438 61.519 7.233 61.667 7.088 C 62.004 6.881 62.43 6.881 62.767 7.088 C 62.915 7.233 62.989 7.438 62.967 7.645 L 62.967 18.536 C 62.989 18.742 62.915 18.948 62.767 19.093 C 62.43 19.3 62.004 19.3 61.667 19.093 C 61.519 18.948 61.445 18.742 61.467 18.536 Z M 74.067 15.945 C 74.144 15.793 74.246 15.655 74.367 15.536 C 74.468 15.447 74.598 15.401 74.732 15.406 C 74.91 15.411 75.085 15.459 75.241 15.545 C 75.429 15.648 75.536 15.854 75.513 16.067 C 75.495 16.36 75.404 16.644 75.25 16.894 C 75.088 17.193 74.897 17.476 74.681 17.738 C 74.602 17.831 74.463 17.973 74.265 18.164 C 74.029 18.383 73.766 18.573 73.484 18.729 C 73.121 18.932 72.736 19.095 72.338 19.216 C 71.842 19.363 71.327 19.433 70.81 19.425 C 70.025 19.436 69.247 19.281 68.526 18.972 C 67.855 18.681 67.255 18.247 66.768 17.702 C 66.262 17.123 65.878 16.448 65.639 15.718 C 65.107 14.016 65.107 12.192 65.639 10.49 C 65.878 9.755 66.262 9.075 66.768 8.49 C 67.253 7.94 67.853 7.503 68.526 7.211 C 69.247 6.902 70.025 6.747 70.81 6.758 C 71.309 6.751 71.806 6.815 72.287 6.95 C 72.668 7.059 73.037 7.207 73.387 7.394 C 73.656 7.537 73.907 7.712 74.134 7.916 C 74.327 8.096 74.468 8.238 74.559 8.342 C 74.777 8.607 74.973 8.889 75.145 9.186 C 75.308 9.432 75.405 9.717 75.425 10.012 C 75.447 10.227 75.336 10.434 75.145 10.534 C 74.985 10.62 74.808 10.667 74.627 10.673 C 74.493 10.678 74.362 10.631 74.262 10.542 C 74.154 10.439 74.065 10.319 73.999 10.186 C 73.865 9.941 73.711 9.707 73.54 9.486 C 73.353 9.242 73.136 9.023 72.895 8.834 C 72.628 8.627 72.33 8.462 72.012 8.347 C 71.632 8.21 71.231 8.143 70.827 8.148 C 70.237 8.136 69.653 8.26 69.12 8.513 C 68.632 8.753 68.205 9.101 67.872 9.531 C 67.517 9.998 67.257 10.53 67.108 11.097 C 66.768 12.409 66.768 13.785 67.108 15.097 C 67.257 15.664 67.517 16.196 67.872 16.663 C 68.205 17.093 68.632 17.441 69.12 17.681 C 69.653 17.933 70.237 18.058 70.827 18.046 C 71.273 18.057 71.717 17.983 72.135 17.828 C 72.761 17.59 73.296 17.16 73.664 16.601 C 73.82 16.36 73.954 16.142 74.067 15.948 Z" style="stroke-linejoin: bevel; paint-order: stroke; stroke-linecap: round;"></path>
                        <g id="wynk-logo" transform="translate(0 0)">
                        <g id="Group_469" data-name="Group 469">
                            <path id="Fill-4" class="cls-2" d="M169.137,1134.4l-.12,1.095a8.184,8.184,0,1,1-5.5-2.146,8.074,8.074,0,0,1,2.486.392l.1-.9a9.246,9.246,0,0,0-2.624-.378,9.11,9.11,0,0,0-9.156,9.084,9.3,9.3,0,0,0,9.192,9.116,9.172,9.172,0,0,0,9.124-9.116,9.029,9.029,0,0,0-3.5-7.146" transform="translate(-152.036 -1127.864)"></path>
                            <path id="Fill-6" class="cls-2" d="M202.678,1170.387l-.2,1.774a5.436,5.436,0,0,1,.516,2.3,5.7,5.7,0,0,1-5.618,5.613,5.638,5.638,0,0,1-5.618-5.613,5.7,5.7,0,0,1,5.618-5.613,5.441,5.441,0,0,1,2.2.466l.13-1.147a6.468,6.468,0,0,0-2.327-.435,6.678,6.678,0,1,0,6.716,6.665,6.563,6.563,0,0,0-1.417-4.011" transform="translate(-185.923 -1160.721)"></path>
                            <path id="Fill-1" class="cls-2" d="M121.844,1110.482a10.6,10.6,0,0,1,10.521-10.634h.1v-.737h-.1a11.371,11.371,0,0,0-11.349,11.371Z" transform="translate(-121.016 -1097.111)"></path>
                            <path id="Fill-8" class="cls-2" d="M251.152,1069.939l-1.3,11.572a4.1,4.1,0,0,0-3.623-.654,2.652,2.652,0,0,0-2.164,2.453A3.14,3.14,0,0,0,247,1086.2c2.912.388,3.674-1.4,3.792-2.018.155-.6.874-7.273.874-7.273l.388-3.656a4.777,4.777,0,0,1,3.027.888,2.448,2.448,0,0,1,.432,2.646c-.142.415-.475.812-.057.681a2.758,2.758,0,0,0,1.193-1.692,3.128,3.128,0,0,0-1.3-2.814c-.194-.194-1.848-1.179-2.126-1.456a2.05,2.05,0,0,1-.689-1.327Z" transform="translate(-235.632 -1069.939)"></path>
                        </g>
                        </g>
                    </g>
                    </g>
              </svg>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post" class="nav-link">
                        @csrf
                        <button type="submit" class="nav-link bg-transparent border-0"><i class="fas fa-power-off text-danger"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar-expand-lg navbar p-0 navbar-dark bg-dark fixed-top" style="top: 72px;">
        <div class="container p-0">
            <ul class="navbar-nav p-0" id="pills-tab" role="tablist">
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-light">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('admin.genre') }}" class="nav-link text-light">Genre</a></li>
                <li class="nav-item"><a href="{{ route('admin.artist') }}" class="nav-link text-light">Artist</a></li>
                <li class="nav-item"><a href="{{ route('admin.album') }}" class="nav-link text-light">Album</a></li>
                <li class="nav-item"><a href="{{ route('admin.song') }}" class="nav-link text-light">Song</a></li>
              </ul>
        </div>
    </nav>
    @yield('content')


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>