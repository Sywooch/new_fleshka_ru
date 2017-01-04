<h2 class="filter-title" style="margin-top:40px;">
    <span class="content">
        <strong>Статьи</strong>
    </span>
</h2>
<div id="latest_news" class="owl-top-narrow">
    <div class="recent-posts">
        <div class="owl-carousel">
            <?php foreach ($rows as $row): ?>
            <?php $url = '/article/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="post-image">
                                <img src="/uploads/images/articles/<?= $row['image']; ?>" alt=""/>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="post-date">
                                <span class="day"><?= date('d', strtotime($row['date'])); ?></span>
                                <span class="month"><?= date('Y-m', strtotime($row['date'])); ?></span>
                            </div>
                            <div class="postTitle">
                                <h2><a href="<?= $url; ?>" ><?= $row['title']; ?></a></h2>
                            </div>
                            <div class="postContent"><p><?= $row['short_description']; ?></p></div>
                            <a class="readmore" href="<?= $url; ?>">Читать дальше ></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>