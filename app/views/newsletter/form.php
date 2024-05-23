<?php include __DIR__ . '/../layout/header.php'; ?>
    <div class="form-container">
        <h2>Suscríbete a nuestra Newsletter</h2>
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="post" action="" autocomplete="off">
            <div class="form-content">
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" placeholder="Correo" required>
            </div>
            <input class="btn" type="submit" name="subscribe" value="Suscribirse">
        </form>
    </div>
<?php include __DIR__ . '/../layout/footer.php'; ?>
