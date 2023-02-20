{extends file='parent:index.tpl'}

{block name='hook_home'}
  	{hook h='displayHome'}
    <div class="extras">
        <h2 class="hidden">Nos extras</h2>
        <ul>
            <li>
                <div>
                    <!--<img src="{$urls.img_url}returns.svg" alt="Retours" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Retours</span> sous 10 jours</h3>
                </div>
            </li>
            <li>
                <div>
                   <!--<img src="{$urls.img_url}delivery.svg" alt="Livraisons" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Livraisons</span> par Bpost</h3>
                </div>
            </li>
            <li>
                <div>
                    <!--<img src="{$urls.img_url}drive-in.svg" alt="Retraits" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Retraits</span> en magasin</h3>
                </div>
            </li>
            <li>
                <div>
                    <!--<img src="{$urls.img_url}secure.svg" alt="Paiements sécurisés" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Paiements</span> sécurisés</h3>
                </div>
            </li>
        </ul>
    </div>
    <div class="intro">
        <div class="intro_images"
             data-aos="fade-right"
             data-aos-delay="50"
             data-aos-duration="1000">
            <div class="intro_first-image">
                <img src="{$urls.img_url}kel-miss-aline-2.jpg" alt="Kel'miss, notre magasin à La Calamine" height="400" width="500">
            </div>
            <div class="intro_back-image"></div>
            <div class="intro_second-image">
                <img src="{$urls.img_url}kel-miss-aline.jpg" alt="Bienvenue chez Kelmiss à La Calamine" height="500" width="375">
            </div>
        </div>
        <div class="intro__content"
             data-aos="fade-left"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2>KEL'MISS, votre <span class="color">magasin de prêt-à-porter</span> dans votre région</h2>
            <div>
                <p>Depuis début d'année 2020, le centre esthétique de Kel'Miss s'est agrandi et vous propose depuis cela son magasin de prêt-à-porter à <b>La Calamine</b>. Ce magasin vous propose des <b>vêtements, chaussures et accessoires</b> pour toutes les tailles et pour tous les goûts.</p>
                <p>Pour pouvoir faire votre shopping chez Kel'Miss sans sortir de chez vous, nous avons le plaisir de vous accueillir sur notre <b>boutique en ligne</b>.</p>
            </div>
            <a href="http://localhost/kelmiss-prestashop/fr/3-vetements" class="cta cta_first-color cta_hover"  title="Découvrir nos vêtements">Découvrir nos vétements</a>
        </div>
    </div>
{/block}