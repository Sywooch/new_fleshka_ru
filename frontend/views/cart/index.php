<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">	
            <div class="cart">
                <div class="page-title title-buttons">
                    <h1>Корзина</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="cart-table-wrap">
                            <form id="cart-form" action="/cart/checkout" method="post">
                                <fieldset>
                                    <table id="shopping-cart-table" class="data-table cart-table">
                                        <thead>
                                            <tr class="first last">
                                                <th rowspan="1">&nbsp;</th>
                                                <th rowspan="1">&nbsp;</th>
                                                <th rowspan="1"><span class="nobr">Название товара</span></th>                                                
                                                <th rowspan="1">Qty</th>
                                                <th class="last" colspan="1">Итог</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            <?php 
                                            //echo '<pre>';print_r($products['rows']);exit;
                                            if(!empty($products['rows'])) {
                                                foreach ($products['rows'] as $product): if (empty($product)) break; ?>                                                
                                                <tr class="first last odd">
                                                    <td class="action-td"><a href="#" data-id="<?= $product['id']; ?>" title="Удалить" class="btn-remove btn-remove2"></a></td>
                                                    <td class="pr-img-td">
                                                        <input type="hidden" name="products[]" value="<?= $product['id']; ?>">
                                                        <?php foreach ($product['colors']['rows'] as $color) {echo '<input type="hidden" name="colors[' . $product['id'] . '][]" value="' . $color['id']. '">';} ?>
                                                        <a href="/fleshka/<?= app\components\CController::ru2lat($product['name']) . '-' . $product['id']; ?>" title="<?= $product['name']; ?>" class="product-image">
                                                            <img src="<?= isset($product['img']) ? $product['img'] : '/images/no-image.png'; ?>" width="80" height="80" alt="<?= $product['name']; ?>">
                                                        </a>
                                                    </td>
                                                    <td class="product-name-td">
                                                        <h2 class="product-name">
                                                            <a href="/fleshka/<?= app\components\CController::ru2lat($product['name']) . '-' . $product['id']; ?>"><?= $product['name']; ?></a>
                                                        </h2>
                                                    </td>                                                    
                                                    <td>
                                                        <?php $total = 0; foreach ($product['prices']['rows'] as $price): ?>
                                                        <?php $total += ($price['count'] * $price['price']); ?>
                                                            <div class="qty-holder">
                                                                <?= $price['vol'] . 'Гб.'; ?>
                                                                <a href="javascript:void(0)" class="table_qty_dec">-</a>
                                                                <input name="prices[<?= $product['id']; ?>][<?= $price['id']; ?>]" value="<?= $price['count']; ?>" size="4" class="input-text qty" maxlength="12">
                                                                <a href="javascript:void(0)" class="table_qty_inc">+</a>                                                            
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td class="td-total last">
                                                        <span class="cart-price">
                                                            <span class="price"><?= $total ?> Руб.</span>                            
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach;} else {echo '<tr class="first last odd"><td>Ваша корзина пуста, пожалуйста добавьте товары</td></tr>';} ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="first last">
                                                <td colspan="50" class="a-right last">
                                                    <button type="button" title="Continue Shopping" class="button btn-continue" onclick="window.history.back();"><span><span>« вернуться к покупкам</span></span></button>                                                    
                                                    <button type="submit" class="button btn-empty"><span><span>Оформить заказ</span></span></button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="cart-collaterals">
                            <div class="totals">
                                <h2>В корзине:</h2>
                                <div>
                                    <table id="shopping-cart-totals-table">
                                        <colgroup><col>
                                            <col width="1">
                                        </colgroup><tfoot>
                                            <tr>
                                                <td style="" class="a-right" colspan="1">
                                                    <strong>Товары</strong>
                                                </td>
                                                <td style="" class="a-right">
                                                    <strong><span id="products-total" class="price"></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td style="" class="a-right" colspan="1">
                                                    Общая сумма    
                                                </td>
                                                <td style="" class="a-right">
                                                    <span id="pr-total" class="price"></span>    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout-types">
                                        <li>    
                                            <button onclick="js:jQuery('#cart-form').submit()" type="button" title="Оформить заказ" class="button btn-proceed-checkout btn-checkout">
                                                <span><span>Оформить заказ</span></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>