<header>
    <a href="<?= HOST; ?>">
        <img id="logo" src="ressources/img/logo.png" title="florian paturaux - d&eacute;veloppeur"/>
    </a>
    <nav>
        <ul>
            <li><a id="home" class="<?= PAGE == 'home' ? 'active' : ''; ?>" href="<?= HOST; ?>home.html">Home</a></li>
            <li><a id="projets" class="<?= PAGE == 'projects' ? 'active' : ''; ?>" href="<?= HOST; ?>projet.html">Projets</a></li>
            <li><a id="contact" class="<?= PAGE == 'contact' ? 'active' : ''; ?>" href="<?= HOST; ?>contact.html">Contact</a></li>
            <li><a id="reseaux" href="#">R&eacute;seaux</a></li>
        </ul>
    </nav>

</header>