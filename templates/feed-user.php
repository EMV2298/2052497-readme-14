<main class="page__main page__main--feed">
    <div class="container">
        <h1 class="page__title page__title--feed">Моя лента</h1>
    </div>
    <div class="page__main-wrapper container">
        <section class="feed">
            <h2 class="visually-hidden">Лента</h2>
            <div class="feed__main-wrapper">
                <div class="feed__wrapper">
                    <?php foreach ($posts as $post):;?>
                    <article class="feed__post post post-photo">
                        <header class="post__header post__author">
                            <a class="post__author-link" href="profile.php?user=<?=htmlspecialchars($post['user_id']);?>" title="Автор">
                                <div class="post__avatar-wrapper">
                                    <img class="user__picture" src="<?=htmlspecialchars($post['avatar']);?>" alt="Аватар пользователя" width="60" height="60">
                                </div>
                                <div class="post__info">
                                    <b class="post__author-name"><?=htmlspecialchars($post['username']);?></b>
                                    <span class="post__time"><?=convert_date_toeasy_form($post['dt_add']);?> назад</span>
                                </div>
                            </a>
                        </header>                        
                        <?php if ($post['type'] === 'photo'):;?>
                        <div class="post__main">
                            <h2><a href="#"><?=htmlspecialchars($post['header']);?></a></h2>
                            <div class="post-photo__image-wrapper">
                                <img src="<?=htmlspecialchars($post['photo_content']);?>" alt="Фото от пользователя" width="760" height="396">
                            </div>
                        </div>                        
                        <?php elseif ($post['type'] === 'text'):;?>
                        <div class="post__main">
                            <h2><a href="#"><?=htmlspecialchars($post['header']);?></a></h2>
                            <p>
                            <?=htmlspecialchars($post['text_content']);?>
                            </p>
                            <a class="post-text__more-link" href="#">Читать далее</a>
                        </div>
                        <?php elseif ($post['type'] === 'quote'):;?>
                        <div class="post__main">
                            <blockquote>
                                <p>
                                <?=htmlspecialchars($post['text_content']);?>
                                </p>
                                <cite><?=$post['quote_author'];?></cite>
                            </blockquote>
                        </div>
                        <?php elseif ($post['type'] === 'video'):;?>
                        <div class="post__main">
                            <div class="post-video__block">
                                <div class="post-video__preview">
                                    <img src="img/coast.jpg" alt="Превью к видео" width="760" height="396">
                                </div>
                                <div class="post-video__control">
                                    <button class="post-video__play post-video__play--paused button button--video" type="button"><span class="visually-hidden">Запустить видео</span></button>
                                    <div class="post-video__scale-wrapper">
                                        <div class="post-video__scale">
                                            <div class="post-video__bar">
                                                <div class="post-video__toggle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="post-video__fullscreen post-video__fullscreen--inactive button button--video" type="button"><span class="visually-hidden">Полноэкранный режим</span></button>
                                </div>
                                <button class="post-video__play-big button" type="button">
                                    <svg class="post-video__play-big-icon" width="27" height="28">
                                        <use xlink:href="#icon-video-play-big"></use>
                                    </svg>
                                    <span class="visually-hidden">Запустить проигрыватель</span>
                                </button>
                            </div>
                        </div>
                        <?php elseif ($post['type'] === 'link'):;?>
                        <div class="post__main">
                            <div class="post-link__wrapper">
                                <a class="post-link__external" href="<?=htmlspecialchars($post['link_content']);?>" title="Перейти по ссылке">
                                    <div class="post-link__icon-wrapper">
                                        <img src="img/logo-vita.jpg" alt="Иконка">
                                    </div>
                                    <div class="post-link__info">
                                        <h3><?=htmlspecialchars($post['header']);?></h3>
                                        <span><?=$post['link_content'];?></span>
                                    </div>
                                    <svg class="post-link__arrow" width="11" height="16">
                                        <use xlink:href="#icon-arrow-right-ad"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php endif;?>
                        <footer class="post__footer post__indicators">
                            <div class="post__buttons">
                                <a class="post__indicator post__indicator--likes button" href="#" title="Лайк">
                                    <svg class="post__indicator-icon" width="20" height="17">
                                        <use xlink:href="#icon-heart"></use>
                                    </svg>
                                    <svg class="post__indicator-icon post__indicator-icon--like-active" width="20" height="17">
                                        <use xlink:href="#icon-heart-active"></use>
                                    </svg>
                                    <span><?=$post['likes_count']?></span>
                                    <span class="visually-hidden">количество лайков</span>
                                </a>
                                <a class="post__indicator post__indicator--comments button" href="#" title="Комментарии">
                                    <svg class="post__indicator-icon" width="19" height="17">
                                        <use xlink:href="#icon-comment"></use>
                                    </svg>
                                    <span><?=$post['comments_count']?></span>
                                    <span class="visually-hidden">количество комментариев</span>
                                </a>
                                <a class="post__indicator post__indicator--repost button" href="#" title="Репост">
                                    <svg class="post__indicator-icon" width="19" height="17">
                                        <use xlink:href="#icon-repost"></use>
                                    </svg>
                                    <span>5</span>
                                    <span class="visually-hidden">количество репостов</span>
                                </a>
                            </div>
                        </footer>
                    </article>
                    <?php endforeach;?>
                </div>
            </div>
            <ul class="feed__filters filters">
                <li class="feed__filters-item filters__item">
                    <a class="filters__button <?= empty($get_type_id) ? "filters__button--active" : ""; ?>" href="?">
                        <span>Все</span>
                    </a>
                </li>
                <?php foreach ($types as $type) : ?>
                    <li class="feed__filters-item filters__item">
                        <a class="filters__button filters__button--<?=htmlspecialchars($type['type']); ?> button <?= $type['id'] == $get_type_id ? "filters__button--active" : ""; ?>" href="?type=<?= $type['id']; ?>">
                            <span class="visually-hidden"><?= $type['name']; ?></span>
                            <svg class="filters__icon" width="22" height="18">
                                <use xlink:href="#icon-filter-<?=htmlspecialchars($type['type']); ?>"></use>
                            </svg>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <aside class="promo">
            <article class="promo__block promo__block--barbershop">
                <h2 class="visually-hidden">Рекламный блок</h2>
                <p class="promo__text">
                    Все еще сидишь на окладе в офисе? Открой свой барбершоп по нашей франшизе!
                </p>
                <a class="promo__link" href="#">
                    Подробнее
                </a>
            </article>
            <article class="promo__block promo__block--technomart">
                <h2 class="visually-hidden">Рекламный блок</h2>
                <p class="promo__text">
                    Товары будущего уже сегодня в онлайн-сторе Техномарт!
                </p>
                <a class="promo__link" href="#">
                    Перейти в магазин
                </a>
            </article>
            <article class="promo__block">
                <h2 class="visually-hidden">Рекламный блок</h2>
                <p class="promo__text">
                    Здесь<br> могла быть<br> ваша реклама
                </p>
                <a class="promo__link" href="#">
                    Разместить
                </a>
            </article>
        </aside>
    </div>
</main>