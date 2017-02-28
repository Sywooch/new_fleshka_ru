<?php if (!empty($breadCrumbs)): ?>
    <div class="top-container">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 a-left">
                        <ul>                            
                            <li class="home">
                                <a href="/" title="Главная">Главная</a>
                                <span class="breadcrumbs-split"><i class="icon-right-open"></i></span>
                            </li>
                            <?php foreach ($breadCrumbs as $key => $breadCrumb): ?>
                                <?php if ($key + 1 == $count): ?>
                                    <li class="category298"><strong><?= strip_tags($breadCrumb['title']); ?></strong></li>                
                                <?php else: ?>
                                    <li>
                                        <a href="/<?= $breadCrumb['url']; ?>"><?= strip_tags($breadCrumb['title']); ?></a>
                                        <span class="breadcrumbs-split"><i class="icon-right-open"></i></span>
                                    </li>                
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>