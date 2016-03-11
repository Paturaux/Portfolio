<body>
    <?php include_once './views/header.php'; ?>
    <section id="contact">
        <article>
            <form method="post" action="contact::sendMessage()">
                <input id="name" class="input" type="text" name="name" placeholder="Nom"/><br/>
                <input id="address" class="input" type="email" name="address" placeholder="Adresse mail"/><br/>
                <input id="subject" class="input" type="text" name="subject" placeholder="Objet" autocomplete="off"/><br/>
                <textarea name="message" autocomplete="off" placeholder="Message.."></textarea><br/>
                <input type="submit"/>
            </form>
        </article>
    </section>
    <?php include_once './views/footer.php'; ?>
</body>
<script>