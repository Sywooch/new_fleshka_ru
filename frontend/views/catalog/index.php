<?php use app\components\CController; ?>
<div class="main-container col2-left-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9 f-right">                
                <div class="category-products">
                    <ul class="products-grid  columns4">                        
                        <?php foreach ($rows as $row): ?>
                            <?php $url = CController::haveChildren($row['id']) ? '/catalog/' . $row['id'] : '/category/' . CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                            <li class="item">
                                <div class="item-area">
                                    <div class="product-image-area">                                    
                                        <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>" class="product-image">
                                            <img src="<?= isset($row['image']) && !empty($row['image']) ? '/uploads/images/' . $row['image'] : '/images/no-image.png'; ?>" alt="<?php echo $row['title']; ?>">
                                        </a>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="<?= $url; ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></h2>                                        
                                        <div class="actions">
                                            <a href="<?= $url; ?>" class="addtocart"><span>&nbsp;Подробнее...</span></a>                                        
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>                    
                </div>
            </div>                      
        </div>
    </div>
</div>
<style>
    @media (min-width: 768px) {
        .col-sm-9 {
            width: 100%;
        }
    }
    .category-products .products-grid.columns4 li.item {
        width: 24%;
        display: inline-block;
        float: none;
    }

</style>