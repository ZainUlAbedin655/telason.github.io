<div class="about_us">
    <div class="about_us-content">
      <h2 class="about_us-title">{$an_staticblock->title|escape:'htmlall':'UTF-8'}</h2>
      {$an_staticblock->content nofilter}
      <a href="{$an_staticblock->link}" class="btn btn-primary">{l s='Read more' mod='anthemeblocks'}</a>
    </div>
    {if $an_staticblock->getImageLink() != ''}
    <div class="about_us_img">
    	<img src="{$an_staticblock->getImageLink()}" alt="">
    </div>
    {/if}
</div>
