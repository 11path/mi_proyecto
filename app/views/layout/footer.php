<footer class="footer" id="footer">
    <nav class="nav nav--footer">
        <h2 class="footer_title">EL FARO TU DIARIO ONLINE</h2> 
    </nav>       
    <section class="form-container">
        <h2>Regístrate</h2>
        <p>elige tu plan en la caja de mensajes</p>
        <?php if (isset($message)) : ?>
            <p class="form-message"><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="post" action="" autocomplete="off" id="registrationForm">
                    <div class="form-group">
                        <div class="form-content">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Nombre" required>
                            <span class="validation-message" id="nameValidation"></span>
                        </div>
                        <div class="form-content">
                            <label for="email">Correo</label>
                            <input type="email" id="email" name="email" placeholder="Correo" required>
                            <span class="validation-message" id="emailValidation"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-content">
                            <label for="direction">Dirección</label>
                            <input type="text" id="direction" name="direction" placeholder="Dirección" required>
                            <span class="validation-message" id="directionValidation"></span>
                        </div>
                        <div class="form-content">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                            <span class="validation-message" id="phoneValidation"></span>
                        </div>
                    </div>
                    <div class="form-content">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Indica el plan a contratar" required></textarea>
                        <span class="validation-message" id="messageValidation"></span>
                    </div>
                    <input class="btn" type="submit" name="contact" value="Enviar Mensaje">
                </form>
    </section> 
    <section class="footer_container container">
        <nav class="nav nav--footer">
            <form class="footer_form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <h2 class="footer_newsletter">Suscríbete a la newsletter</h2>
                <div class="footer_inputs">
                    <input type="email" placeholder="Email:" class="footer_input" name="_replyto">
                    <input type="submit" value="Regístrate" class="footer_submit">
                </div>
            </form>
        </nav>
    </section> 
    <section class="footer_copy container">
        <div class="footer_social">
            <a href="#" class="footer_icons"><img src="/mi_proyecto/public/images/facebook.svg" class="footer_img"></a>
            <a href="#" class="footer_icons"><img src="/mi_proyecto/public/images/instagram.svg" class="footer_img"></a>
            <a href="#" class="footer_icons"><img src="/mi_proyecto/public/images/twitter.svg" class="footer_img"></a>
        </div>
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" class="footer_btn">Inicio</button>
        <h3 class="footer_copyright">Derechos reservados &copy; Jaime Sepulveda</h3>
    </section>
    </section>
            <ul class="nav_link nav_link--footer">
                <li class="nav_items">
                    <a href="?page=about" class="nav_links">Acerca de</a>
                </li>
                <li class="nav_items">
                    <a href="?page=contact" class="nav_links">Contacto</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Blog</a>
                </li>
            </ul>
        </nav>
    </section>
</footer>
<script src="/mi_proyecto/public/js/slider.js" defer></script>
</body>
</html>
