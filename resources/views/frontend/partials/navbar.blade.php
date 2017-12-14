<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="/" style="font-family: 'Armata', sans-serif;">spectize</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ action('CpuController@index') }}">
                        <i class="flaticon-chip"></i> CPUs
                    </a>
                    <a class="dropdown-item" href="{{ action('GpuController@index') }}">
                        <i class="flaticon-video-card"></i> GPUs
                    </a>
                    <a class="dropdown-item disabled" href="javascript:void()">
                        <i class="flaticon-macbook"></i> Laptops (Coming Soon)
                    </a>
                    <a class="dropdown-item disabled" href="javascript:void()">
                        <i class="flaticon-iphone"></i> Smartphones (Coming Soon)
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>