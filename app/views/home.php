<?php include __DIR__ . '/layout/header.php'; ?>


<main>
    <section class="container about">
        <h2 class="subtitle">Secciones de noticias</h2>
        <p class="about_paragraph">Todos tus temas de interés</p>
        <div class="about_main">
            <article class="about_icons">
                <img src="/mi_proyecto/public/images/bx-news.svg" class="about_icon">
                <h3 class="about_title">Actualidad</h3>
                <p class="about_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic officiis exercitationem tenetur.</p>
            </article>
            <article class="about_icons">
                <img src="/mi_proyecto/public/images/bx-football.svg" class="about_icon">
                <h3 class="about_title">Deportes</h3>
                <p class="about_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic officiis exercitationem tenetur.</p>
            </article>
            <article class="about_icons">
                <img src="/mi_proyecto/public/images/bx-money-withdraw.svg" class="about_icon">
                <h3 class="about_title">Negocios</h3>
                <p class="about_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus hic officiis exercitationem tenetur.</p>
            </article>
        </div>
    </section>

    <section class="news">
        <div class="news_container container">
            <img src="/mi_proyecto/public/images/leftarrow.svg" class="news_arrow" id="before">
            <section class="news_body news_body--show" data-id="1">
                <div class="news_texts">
                    <h2 class="subtitle">Último Minuto <span class="news_course">Actualidad</span></h2>
                    <p class="news_review">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus excepturi aperiam doloribus?</p>
                </div>
                <figure class="news_picture">
                    <img src="/mi_proyecto/public/images/actualidad.jpg" class="news_img">
                </figure>
            </section>
            <section class="news_body" data-id="2">
                <div class="news_texts">
                    <h2 class="subtitle">Último Minuto <span class="news_course">Deportes</span></h2>
                    <p class="news_review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae debitis accusantium maiores est?</p>
                </div>
                <figure class="news_picture">
                    <img src="/mi_proyecto/public/images/deportes.jpg" class="news_img">
                </figure>
            </section>
            <section class="news_body" data-id="3">
                <div class="news_texts">
                    <h2 class="subtitle">Último Minuto <span class="news_course">Negocios</span></h2>
                    <p class="news_review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quibusdam quae vero!</p>
                </div>
                <figure class="news_picture">
                    <img src="/mi_proyecto/public/images/negocios.jpg" class="news_img">
                </figure>
            </section>
            <img src="/mi_proyecto/public/images/rightarrow.svg" class="news_arrow" id="next">
        </div>
    </section>

    <section class="knowledge">
        <div class="knowledge_container container">
            <div class="knowledge_texts">
                <h2 class="subtitle">Actualidad</h2>
                <h3>Dictan prisión preventiva a exdirector de la Policía de Investigaciones</h3>
                <div>
                    <img src="https://assets.eldesconcierto.cl/2024/03/Sergio-Munoz.jpg" alt="imagen referencial" style="width:600px; height: auto;">
                </div>
                <p class="knowledge_paragraph">El Cuarto Juzgado de Garantía de Santiago de Chile ordenó este martes que Sergio Muñoz Yáñez, exdirector de la Policía de Investigaciones (PDI), quede bajo prisión preventiva en el proceso penal en su contra por el presunto delito de filtración de información confidencial, informó el Poder Judicial chileno.</p>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PKKPH9LOW6w?si=6TimJknyuTr9Fem_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="knowledge_texts">
                <h2 class="subtitle">Deportes</h2>
                <h3>TC11: Las esperanzas de podio de Neuville se desvanecen</h3>
                <div>
                    <img src="https://wrc.enhance.diagnal.com/resources/images/eyJrZXkiOiJodHRwczovL2VuaGFuY2Utc3RvcmFnZS1zdGFjay1wcm9kLXdyY21lZGlhZmlsZXN0b3JhZ2UtZzN6MmhnM3Vyd2ZmLnMzLmFtYXpvbmF3cy5jb20vNjI4MTM0NmUtODVmZi00MzE0LThlZDUtMzlmM2M2NDBlNzQ1XzMwMDMyNGhtc2duZXV2aWxsZS0xLmpwZyIsInRpbWVzdGFtcCI6IjIwMjQtMDMtMzBUMTI6MTg6MjguMTk3WiIsImVkaXRzIjp7ImV4dHJhY3QiOnsibGVmdCI6MCwidG9wIjowLCJ3aWR0aCI6MTkyMCwiaGVpZ2h0IjoxMDgwfSwicmVzaXplIjp7IndpZHRoIjo5NjAsImhlaWdodCI6NTQwfSwianBlZyI6eyJxdWFsaXR5IjoxMDB9fX0=/6281346e-85ff-4314-8ed5-39f3c640e745_300324hmsgneuville-1.jpg" alt="imagen referencial" style="width:600px; height: auto;">
                </div>
                <p class="knowledge_paragraph">El Safari Rallye de Kenia sigue mostrando su dureza al Campeonato del Mundo de Rallyes de la FIA. En el tramo 11 en Soysambu, el aspirante al podio Thierry Neuville se ha ido al traste.</p>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yw4ENAtd8Pw?si=7KIVqmarjdj-jSsn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="price container">
        <h2 class="subtitle">Obtén el plan perfecto para aprender</h2>
        <div class="price_table">
            <div class="price_element">
                <p class="price_name">No pagues nada</p>
                <h3 class="price_price">Free</h3>
                <div class="price_items">
                    <p class="price_features">noticias</p>
                    <p class="price_features">videos</p>
                    <p class="price_features">correos</p>
                </div>
                <a href="#footer" class="price_cta">Regístrate</a>
            </div>
            <div class="price_element price_element--best">
                <p class="price_name">El mejor</p>
                <h3 class="price_price">$30/mes</h3>
                <div class="price_items">
                    <p class="price_features">noticias de último minuto</p>
                    <p class="price_features">videos</p>
                    <p class="price_features">podcast</p>
                </div>
                <a href="#footer" class="price_cta">Regístrate</a>
            </div>
            <div class="price_element">
                <p class="price_name">Premium</p>
                <h3 class="price_price">$40/mes</h3>
                <div class="price_items">
                    <p class="price_features">lo último</p>
                    <p class="price_features">videos exclusivos</p>
                    <p class="price_features">podcast y descargas</p>
                </div>
                <a href="#footer" class="price_cta">Regístrate</a>
            </div>
        </div>
    </section>
    
</main>


<script src="/mi_proyecto/public/js/slider.js" defer></script>
<?php include __DIR__ . '/layout/footer.php'; ?>
