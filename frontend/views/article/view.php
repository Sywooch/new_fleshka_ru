<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9">
                <div class="postWrapper">                    
                    <div class="postTitle">
                        <h1><?= $model['title']; ?></h1>
<!--                        <div class="postDetails">
                            <span><i class="icon-calendar"></i><?= date('Y-m-d', strtotime($model['description'])); ?></span>
                        </div>-->
                    </div>
                    <div class="postContent">
                        <?= $model['description']; ?>
                    </div>
                    <div class="post-share">
                        <div class="post-image">
                            <img style="width: 97%;" src="/uploads/images/articles/<?= $model['image']; ?>" alt=""/>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>