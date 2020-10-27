<!--navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="/">
        <i class="fa fa-magic" aria-hidden="true"></i>
        TechFolk Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" target="_blank">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">Contact US</a>
            </li>
            <li class="nav-item">
                @yield('authAdmin')
            </li>

        </ul>
    </div>
</nav><!--end navbar-->
