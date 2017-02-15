<ul class="menu">
    <li class="act">
        <a href="/">
            <span>Главная</span>
        </a>
    </li>
    <li class="menu-item menu-item-has-children menu-parent-item" >
        <a href="/catalog">Каталог</a>
        <?php if (!$mobile): ?>
            <div class="nav-sublist-dropdown" style="display: none;">
                <div class="container">
                <?php endif; ?>        
                <?= $menu; ?>
                <?php if (!$mobile): ?>
                </div>
            </div>
        <?php endif; ?>
    </li>
    <li class="menu-item">
        <a href="/article">Новости</a>
    </li>
    <li class="menu-item">
        <a href="/page/metody-naneseniya-logotipa">Нанесения</a>
    </li>
    <li class="menu-item">
        <a href="/page/usloviya-prodazhi">Условия продажи</a>
    </li>
    <li class="menu-item">
        <a href="/page/dostavka-po-rossii-i-sng">Доставка по России и СНГ</a>
    </li>
    <li class="menu-item">
        <a href="/page/garantiya">Гарантия</a>
    </li>
    <li class="menu-item">
        <a href="/page/nashi-klienty">Наши клиенты</a>
    </li>
</ul>
