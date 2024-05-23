<?php include __DIR__ . '/../layout/header.php'; ?>

    <div class="form-container">
        <h2>Regístrate</h2>
        <p>elige tu plan en la caja de mensajes</p>
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
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
    </div>
    <script>
     document.getElementById('registrationForm').addEventListener('input', function (event) {
         var input = event.target;
         var messageElement = document.getElementById(input.id + 'Validation');
    
       if (!input.validity.valid) {
           messageElement.textContent = 'Este campo es obligatorio.';
        } else {
        messageElement.textContent = '';
        }
     });
    </script>
<?php include __DIR__ . '/../layout/footer.php'; ?>
