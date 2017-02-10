<div class="main-container col2-left-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-12">
                <div class="page-title">
                    <h1>Search results for 'nyx'</h1>
                </div>
                <div class="category-products">
                    <ul class="products-grid  columns4">
                        <?php foreach ($rows as $row): ?>
                            <?php $url = '/fleshka/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                            <li class="item">
                                <div class="item-area">
                                    <div class="product-image-area">
                                        <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>"
                                           class="product-image">
                                            <img src="<?= isset($row['image']) ? '/uploads/images/' . $row['image'] : '/images/no-image.png'; ?>"
                                                 alt="<?php echo $row['title']; ?>">
                                        </a>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name">
                                            <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>">
                                                <?php echo $row['title']; ?> #<?php echo $row['old_id']; ?>
                                            </a>
                                        </h2>

                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price" id="product-price-2">
                                                        <?php if (!empty($row['price'])): ?>от <?php echo $row['price']; ?> Руб.<?php else: ?>&nbsp;<?php endif; ?>
                                                    </span>
                                            </p>
                                        </div>

                                        <div class="actions">
                                            <a href="<?= $url; ?>" class="addtocart"><i class="icon-cart"></i><span>&nbsp;Купить</span></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="toolbar-bottom">
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="pager">
                                    <div class="pages">
                                        <?php
                                        echo \yii\widgets\LinkPager::widget([
                                            'pagination' => $pagination,
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>