<ul class="menu">
    <li class="act">
        <a href="/">
            <span>Главная</span>
        </a>
    </li>
    <li class="menu-item menu-item-has-children menu-parent-item  " >
        <a href="/category">Каталог</a>
        <?php if (!$mobile): ?>
            <div class="nav-sublist-dropdown" style="display: none;">
                <div class="container">
                <?php endif; ?>        
                <ul>
                    <?php foreach ($rows as $row): ?>
                        <?php $url = '/category/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                        <li class="menu-item">
                            <a class="level1" href="<?= $url; ?>"><span><?= $row['title']; ?></span></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if (!$mobile): ?>
                </div>
            </div>
        <?php endif; ?>
    </li>
    <li class="menu-item">
        <a href="/article">Статьи</a>
    </li>
    <li class="menu-item">
        <a href="/page/metody-naneseniya-logotipa">Методы нанесения логотипа</a>
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
</ul>