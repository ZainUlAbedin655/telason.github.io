<div class="static-banner">
  {if $an_staticblock->link!=''}
  <a href="{$an_staticblock->link}">
    {/if}
    
    {if $an_staticblock->getImageLink() !=''}
      <img src="{$an_staticblock->getImageLink()}" alt="{$an_staticblock->title|escape:'htmlall':'UTF-8'}">
    {/if}

  {if $an_staticblock->link!=''}
  </a>
  {/if}
</div>