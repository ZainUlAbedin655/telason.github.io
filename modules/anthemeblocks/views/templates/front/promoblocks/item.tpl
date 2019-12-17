<div class="product-banner">
{if $an_staticblock->link!=''}
  <a href="{$an_staticblock->link}">
    {/if}
  <img src="{$an_staticblock->getImageLink()}" alt="{$an_staticblock->title|escape:'htmlall':'UTF-8'}">
    <div class="banner-text-bl">
      <h3>
        {$an_staticblock->content nofilter}
      </h3>
      <h2>{$an_staticblock->title|escape:'htmlall':'UTF-8'}</h2>
      {if $an_staticblock->link!=''}
      <span class="btn btn-primary">{l s='Shop now' mod='anthemeblocks'}</span>
      {/if}
    </div>
    {if $an_staticblock->link!=''}
  </a>
  {/if}
</div>