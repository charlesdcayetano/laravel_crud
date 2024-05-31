<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Crud App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user/create') ? 'active' : '' }}" href="/user/create">Add User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gender') ? 'active' : '' }}" href="/gender">Gender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
