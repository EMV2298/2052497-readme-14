<main class="page__main page__main--messages">
    <h1 class="visually-hidden">Личные сообщения</h1>
    <section class="messages tabs">
        <h2 class="visually-hidden">Сообщения</h2>
        <div class="messages__contacts">
            <ul class="messages__contacts-list tabs__list">
                <? foreach ($penpals as $penpal) :; ?>
                    <li class="messages__contacts-item">
                        <a class="messages__contacts-tab <?= $get_penpal_id === $penpal['id'] ? "messages__contacts-tab--active" : ""; ?> tabs__item tabs__item--active" href="?penpal=<?= $penpal['id']; ?>">
                            <div class="messages__avatar-wrapper">
                                <img class="messages__avatar" src="<?= htmlspecialchars($penpal['avatar']); ?>" alt="Аватар пользователя">
                            </div>
                            <div class="messages__info">
                                <span class="messages__contact-name">
                                    <?= htmlspecialchars($penpal['username']); ?>
                                </span>
                                <div class="messages__preview">
                                    <p class="messages__preview-text">
                                        <?= htmlspecialchars($penpal['content']); ?>
                                    </p>
                                    <time class="messages__preview-time" datetime="2019-05-01T14:40">
                                        <?= convert_date_toeasy_form($penpal['dt_add']); ?> назад
                                    </time>
                                </div>
                            </div>
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="messages__chat">
            <div class="messages__chat-wrapper">
                <ul class="messages__list tabs__content tabs__content--active">
                    <?php foreach ($messages as $message) :; ?>
                        <?php if ($message['user_id'] === $user['id']) :; ?>
                            <li class="messages__item messages__item--my">
                                <div class="messages__info-wrapper">
                                    <div class="messages__item-avatar">
                                        <a class="messages__author-link messages__avatar" href="#">
                                            <img class="messages__avatar" src="<?= htmlspecialchars($message['avatar']); ?>" alt="Аватар пользователя">
                                        </a>
                                    </div>
                                    <div class="messages__item-info">
                                        <a class="messages__author" href="#">
                                        <?= htmlspecialchars($message['username']); ?>
                                        </a>
                                        <time class="messages__time" datetime="2019-05-01T14:39">
                                        <?= convert_date_toeasy_form($message['dt_add']); ?> назад
                                        </time>
                                    </div>
                                </div>
                                <p class="messages__text">
                                <?= htmlspecialchars($message['content']); ?>
                                </p>
                            </li>
                        <?php else :; ?>
                            <li class="messages__item">
                                <div class="messages__info-wrapper">
                                    <div class="messages__item-avatar">
                                        <a class="messages__author-link messages__avatar" href="#">
                                            <img class="messages__avatar" src="<?= htmlspecialchars($message['avatar']); ?>" alt="Аватар пользователя">
                                        </a>
                                    </div>
                                    <div class="messages__item-info">
                                        <a class="messages__author" href="#">
                                        <?= htmlspecialchars($message['username']); ?>
                                        </a>
                                        <time class="messages__time" datetime="2019-05-01T14:40">
                                        <?= convert_date_toeasy_form($message['dt_add']); ?> назад
                                        </time>
                                    </div>
                                </div>
                                <p class="messages__text">
                                <?= htmlspecialchars($message['content']); ?>
                                </p>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <ul class="messages__list tabs__content">
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link messages__avatar" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:40">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item messages__item--my">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link messages__avatar" href="#">
                                    <img class="messages__avatar" src="img/userpic-medium.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Антон Глуханько
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                </ul>

                <ul class="messages__list tabs__content">
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:40">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item messages__item--my">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-medium.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Антон Глуханько
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                </ul>

                <ul class="messages__list tabs__content">
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:40">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item messages__item--my">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-medium.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Антон Глуханько
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                    <li class="messages__item">
                        <div class="messages__info-wrapper">
                            <div class="messages__item-avatar">
                                <a class="messages__author-link" href="#">
                                    <img class="messages__avatar" src="img/userpic-larisa-small.jpg" alt="Аватар пользователя">
                                </a>
                            </div>
                            <div class="messages__item-info">
                                <a class="messages__author" href="#">
                                    Лариса Роговая
                                </a>
                                <time class="messages__time" datetime="2019-05-01T14:39">
                                    1 ч назад
                                </time>
                            </div>
                        </div>
                        <p class="messages__text">
                            Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="comments">
                <form class="comments__form form" action="" method="post">
                    <input type="hidden" name="user_id" value="<?=$get_penpal_id;?>"/>
                    <div class="comments__my-avatar">
                        <img class="comments__picture" src="<?=htmlspecialchars($user['avatar']);?>" alt="Аватар пользователя">
                    </div>
                    <div class="form__input-section <?= isset($has_errors['message']) ? 'form__input-section--error' : ''; ?>">
                        <textarea class="comments__textarea form__textarea form__input" placeholder="Ваше сообщение" name="new_message"><?=htmlspecialchars(filter_input(INPUT_POST, 'new_message'));?></textarea>
                        <label class="visually-hidden">Ваше сообщение</label>
                        <button class="form__error-button button" type="button">!</button>
                        <div class="form__error-text">
                            <h3 class="form__error-title">Ошибка валидации</h3>
                            <p class="form__error-desc"><?=$has_errors['message'];?></p>
                        </div>
                    </div>
                    <button class="comments__submit button button--green" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </section>
</main>