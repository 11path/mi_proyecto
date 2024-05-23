<?php include __DIR__ . '/../layout/header.php'; ?>
    <div class="form-container">
        <h2>Suscríbete a un Plan</h2>
        <?php if (isset($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="post" action="" autocomplete="off">
            <div class="form-group">
                <div class="form-content">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre" required>
                </div>
                <div class="form-content">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Correo" required>
                </div>
                <div class="form-content">
                    <label for="plan">Plan</label>
                    <select id="plan" name="plan" required>
                        <option value="Free">Free</option>
                        <option value="El Mejor">$30/mes</option>
                        <option value="Premium">$40/mes</option>
                    </select>
                </div>
            </div>
            <input class="btn" type="submit" name="subscribe" value="Suscribirse">
        </form>
    </div>
<?php include __DIR__ . '/../layout/footer.php'; ?>
