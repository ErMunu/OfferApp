
<nav>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="top">
    <div class="container">
        <a href="/" class="navbar-brand">Offers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/">All Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create/offer">Create Offers</a>
                </li>

            </ul>

        </div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">

            <li class="nav-item">
                <h4>Welcome <?= strtoupper($_SESSION['username']) ?></h4>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>

        </ul>
        <div>

        </div>
    </div>
</div>


<div class="clearfix"></div>
</nav>