<div id="_desktop_user_info">
    <ul class="expand-more">

  <li>

    {if $logged}

    <a

        class="account"

        href="{$my_account_url}"

        title="{l s='View my customer account' d='Shop.Theme.Global'}"

        rel="nofollow"

      >

        <i class="material-icons logged">&#xE7FF;</i>

        <span class="user-name">{$customerName}</span>

      </a>

      <a

        class="logout"

        href="{$logout_url}"

        rel="nofollow"

      >

        <!-- <i class="fa fa-sign-out" aria-hidden="true"></i> -->

        {l s='Sign out' d='Shop.Theme.Global'}

      </a>      

    {else}

      <a

        href="{$my_account_url}"

        title="{l s='Log in to your customer account' d='Shop.Theme.Global'}"

        rel="nofollow"

      >

       <!-- <i class="fa fa-sign-in" aria-hidden="true"></i> -->

        <span class="sign-in">{l s='Sign in' d='Shop.Theme.Global'}</span>

      </a>

    {/if}

  </li>

  {hook h='displayTopLanguage'}

  {hook h='displayTopCurrency'}

  </ul>
  <!-- <div class="pst_userinfotitle"><span class="user-info-icon">{l s='My Account' d='Shop.Theme.Global'}</span></div> -->

  <div class="user-info">

  

  </div>

  

</div>
