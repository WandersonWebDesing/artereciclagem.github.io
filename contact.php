<?php include 'header.php'; ?>

<section id="contact" class="content-section">
    <div class="container">
        <h2>Contato</h2>
        <form action="send_message.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <h3>Informações de Contato</h3>
        <p>Email: contato@artereciclagem.com</p>
        <p>Redes Sociais: <a href="https://facebook.com/artereciclagem">Facebook</a> | <a href="https://instagram.com/artereciclagem">Instagram</a></p>
    </div>
</section>

<?php include 'footer.php'; ?>
