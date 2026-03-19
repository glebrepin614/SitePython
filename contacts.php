<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PyLearn — Контакты</title>
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">Py<span>Learn</span></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span style="color:#fff;font-size:1.3rem">&#9776;</span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item"><a class="nav-link" href="courses.html">Курсы</a></li>
                <li class="nav-item"><a class="nav-link" href="teachers.html">Преподаватели</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">О нас</a></li>
                <li class="nav-item"><a class="nav-link" style="color:#fff !important" href="contacts.php">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header">
    <div class="container">
        <h1>Контакты</h1>
        <p>Свяжитесь с нами любым удобным способом</p>
    </div>
</div>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-4">
                <h2 class="fw-bold mb-4" style="font-size:1.4rem">Наши контакты</h2>
                <div class="d-flex flex-column gap-4">
                    <div class="contact-item">
                        <h6>Электронная почта</h6>
                        <p><a href="mailto:info@pylearn.ru" style="color:var(--blue);text-decoration:none">info@pylearn.ru</a></p>
                    </div>
                    <div class="contact-item">
                        <h6>Телефон</h6>
                        <p><a href="tel:+74951234567" style="color:var(--blue);text-decoration:none">+7 (495) 123-45-67</a></p>
                    </div>
                    <div class="contact-item">
                        <h6>Telegram</h6>
                        <p><a href="https://t.me/pylearn" target="_blank" style="color:var(--blue);text-decoration:none">@pylearn</a></p>
                    </div>
                    <div class="contact-item">
                        <h6>Режим работы</h6>
                        <p>Пн–Пт, 9:00–19:00<br>Отвечаем в течение одного рабочего дня</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="bg-white border rounded-3 p-4">
                    <h2 class="fw-bold mb-1" style="font-size:1.4rem">Форма обратной связи</h2>
                    <p class="text-muted mb-4" style="font-size:.9rem">Оставьте заявку, и мы свяжемся с вами.</p>
                    <?php if (!empty($_GET['sent'])): ?>
                        <div class="alert alert-success">Заявка отправлена. Мы свяжемся с вами в ближайшее время.</div>
                    <?php elseif (!empty($_GET['error'])): ?>
                        <div class="alert alert-danger">Не удалось сохранить заявку. Попробуйте ещё раз или напишите нам напрямую.</div>
                    <?php endif; ?>
                    <form action="php/TextF.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem">Имя <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Иван Иванов" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem">Телефон <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" placeholder="+7 (___) ___-__-__" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="example@mail.ru">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem">Возраст ребёнка</label>
                                <select name="age" class="form-select">
                                    <option value="" selected>Не указан</option>
                                    <option value="8-11">8–11 лет</option>
                                    <option value="12-14">12–14 лет</option>
                                    <option value="15-17">15–17 лет</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold" style="font-size:.9rem">Сообщение</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Вопрос, пожелание или комментарий..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-4 fw-bold">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<footer class="py-4">
    <div class="container">
        <div class="row align-items-center gy-2">
            <div class="col-md-4">
                <span class="footer-brand">PyLearn</span>
                <span class="ms-2">— школа Python для школьников</span>
            </div>
            <div class="col-md-4 text-md-center d-flex gap-3 justify-content-md-center flex-wrap">
                <a href="courses.php">Курсы</a>
                <a href="about.html">Преподаватели</a>
                <a href="contacts.php">Контакты</a>
            </div>
            <div class="col-md-4 text-md-end">© 2025 PyLearn</div>
        </div>
    </div>
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>