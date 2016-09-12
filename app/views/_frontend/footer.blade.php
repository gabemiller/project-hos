<footer class="main-footer">
    <nav class="main-footer__menu">
        <ul>
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
        </ul>
    </nav>
    <h1 class="main-footer__logo">
        Erzsébet Hospice Alapítvány Miskolc
    </h1>
    <div class="main-footer__credits">
        <a href="http://divide.hu">
            Divide.hu
        </a>
    </div>
</footer>