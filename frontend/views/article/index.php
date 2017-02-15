<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9">
                <div class="posts-wrap">
                    <?php foreach ($models as $row): ?>
                        <?php $url = '/article/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                        <div class="postWrapper">
                            <div class="col-sm-5">
                            <div class="post-image">
                                <img style="width: 97%;" src="/uploads/images/articles/<?= $row['image']; ?>" alt=""/>
                            </div>
                        </div>
                            <div class="postTitle">
                                <h2><a href="<?= $url; ?>"><?= $row['title']; ?></a></h2>
                            </div>
                            <div class="postContent">
                                <p><?= $row['short_description']; ?></p>
                                <a class="smartwave-blog-read-more" href="<?= $url; ?>">Читать дальше ></a>
                            </div>
                            <div class="postDetails">
                                <span><i class="icon-calendar"></i><?= date('d.m.Y', strtotime($row['date'])); ?></span>                            
                            </div>
                        </div>
                    <?php endforeach; ?>
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