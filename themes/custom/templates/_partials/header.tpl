{extends file='parent:_partials/header.tpl'}

{block name='header_nav'}
	<div class="header-content">
	    {if $page.page_name == 'index'}
          <h1>
            <a href="http://localhost/kelmiss-prestashop/fr/" title="Home" class="header-logo">
                <img src="{$urls.img_url}kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120" itemprop="logo">
            </a>
          </h1>
        {else}
            <a href="http://localhost/kelmiss-prestashop/fr/" title="Home">
                <img src="{$urls.img_url}kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120" itemprop="logo">
            </a>
        {/if}
	    <div class="header_search-form" id="searchForm">
      		{hook h='displayTop'}
	    </div>
	    <div class="personal_links">
      		{hook h='displayNav2'}
	    </div>
	</div>
{/block}

{block name='header_top'}
	<div class="header_menu">
  		{hook h='displayNav'}
    </div>
{/block}