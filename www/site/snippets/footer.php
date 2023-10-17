<footer class="footer bg-primary flex flex-wrap justify-between px-20 pt-12 pb-8">
    <div class="abonnez_vous">
        Abonnez-vous à notre lettre d’informations :
            <input type="text" class="w-72 bg-primary b-0 border-b focus:outline-none"/>
    </div>
    <div class="social_media">

    </div>
    <div class="mentions_legales">
        <a href="<?= url('mentionsLegales') ?>" class="hover:text-white">Mentions légales</a>
    </div>
    <div class="administration">
        <a href="<?= $site->panel()->url() ?>" class="hover:text-white">Administration</a>
    </div>

</footer>

</body>

</html>