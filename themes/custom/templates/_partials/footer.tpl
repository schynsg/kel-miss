{extends file='parent:_partials/footer.tpl'}

{block name='hook_footer_before'}
{/block}

{block name='hook_footer'}
    <footer>
        <div>
            <div class="footer_left">
                <h2 class="hidden">Nos coordonées</h2>
                <a href="http://localhost/kelmiss-prestashop/fr/" title="Home">
                    <img src="{$urls.img_url}kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120">
                </a>
                <p>Rue Haute 8, 4720 La Calamine</p>
                <ul class="contact_links">
                    <li>
                        <a href="0032475970005" title="Nous téléphoner" itemprop="telephone">
                            <img src="{$urls.img_url}phone.svg" alt="Téléphone" height="40" width="40">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/KelMissBeauty/" title="Notre page Facebook">
                            <img src="{$urls.img_url}facebook.svg" alt="Facebook" height="40" width="40">
                        </a>
                    </li>
                    <li>
                        <a href="mailto:aline.geelen@yahoo.fr" title="Nous contacter par mail">
                            <img src="{$urls.img_url}mail.svg" alt="Mail" height="40" width="40">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_right">
                <h2>Horaire</h2>
                <p itemprop="openingHours">Ouvert tous les jours</p>
            </div>
            <div class="footer_bottom">
                <p class="copyright"><span itemprop="name">KEL'MISS</span> | Copyright 2021 | <a href="http://localhost/kelmiss-prestashop/fr/content/2-mentions-legales" title="Nos mentions légales" target="_blank">Mentions légales</a></p>
                <p class="created-by">Créé par <a href="http://www.goran-schyns.com/" title="Site web de Goran Schyns">Goran Schyns</a></p>
            </div>
        </div>
    </footer>
{/block}

{block name='hook_footer_after'}
{/block}

{block name='copyright_link'}
<span  itemprop="name">KEL'MISS</span> | Copyright 2021 | <a href="http://localhost/kelmiss-prestashop/fr/content/2-mentions-legales" title="Nos mentions légales" target="_blank">Mentions légales</a> <span class="created_by">Créé par <a href="http://www.goran-schyns.com/" title="Site web de Goran Schyns">Goran Schyns</a></span>
{/block}