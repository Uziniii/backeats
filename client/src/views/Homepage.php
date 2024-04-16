
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Back'eats</title>
    <link href="src/css/style.css" rel="stylesheet" />
</head>
<body>
<header>
    <nav>
        <img class="backeats-logo" src="" alt="Back'eats logo">
        <ul>
            <li class="nav__item"><a href="#about-us">Qui sommes nous ?</a></li>
            <li class="nav__item"><a href="#contact">Nous contacter</a></li>
            <li class="nav__item"><a href="#">Espace restaurateur</a></li>
        </ul>
    </nav>
    <div title="herobanner" class="herobanner">
        <div class="herobanner__text">
            <h1>Vitesse et satisfaction assurées avec nos bornes de fast-food !</h1>
            <p>Réinventons ensemble le fast-food, une bouchée à la fois !</p>
        </div>
        <form class="herobanner__form-btn" action="#" method="POST">
            <input class="herobanner__form-btn__btn" type="submit" value="Espace restaurateur">
        </form>
    </div>
</header>
<main>
    <section class="about-us" id="about-us">
        <article class="about-us__article">
            <img class="about-us__article__img" src="./src/img/about-us-1.jpg" alt="Picture of a order kiosk">
            <div class='about-us__article__text'>
                <h2 class="about-us__article__text__title">Lorem ipsum</h2>
                <p class="about-us__article__text__place-info">Lorem ipsum</p>        
                <p class="about-us__article__text__paragraph">Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpasint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.</p>
            </div>
        </article>
        <article class="about-us__article">
            <img class="about-us__article__img" src="./src/img/about-us-2.jpg" alt="Picture of a order kiosk">
            <div class='about-us__article__text'>
                <h2 class="about-us__article__text__title">Lorem ipsum</h2>
                <p class="about-us__article__text__place-info">Lorem ipsum</p>
                <p class="about-us__article__text__paragraph">Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpasint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.</p>
            </div>
        </article>
            </section>
    <section class="partnership">
        <div class="paternership__text-container">
            <h2>Ils nous font confiance</h2>
            <p>Lorem ipsum</p>
        </div>
        <div class="paternership__logo-container">
            <?php
            foreach (new DirectoryIterator('src/img/partenership_logo') as $file) { // display dynamicly logo from a given path folder
                if ($file->isDot()) continue;
                $fileName = pathinfo($file->getPathname(), PATHINFO_FILENAME);
                echo('<img class="partner-logo" src="' . $file->getPathname() . '" alt="' . $fileName . '">');
                    }
            ?>
        </div>
    </section>
    <section class="contact">
        <div class="contact__form">
            <form action="#" method="post">
                <input type="text" id="surname" name="surname" placeholder="Nom" required>
                <input type="text" id="name" name="name" placeholder="Prénom" required>
                <input type="email" id="email" name="email" placeholder="Adresse mail" required>
                <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>
    <section class="map">
        <div class="map__img"></div>
    </section>
</main>
<footer></footer>
</body>
</html>

