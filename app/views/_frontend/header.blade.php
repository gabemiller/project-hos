<header class="main-header">
    <h1 class="main-header__logo">
        <a href="/">Erzsébet Hospice Alapítvány Miskolc</a>
    </h1>
    <p class="main-header__slogen">
        1994-től a daganatos betegek szolgálatában.
    </p>
</header>

<button class="main-nav-button">
    Menü
    <span class="line"></span>
</button>

<nav class="main-nav">
    <ul>
        @include('_frontend.menu', array('items' => $mainMenu->roots()))
    </ul>
</nav>

