<div class="header-contact-item mail-contact">
	{if $an_staticblock->getImageLink() != ''}
	<div class="contact-img">
		<img src="{$an_staticblock->getImageLink()}" alt="{$an_staticblock->title|escape:'htmlall':'UTF-8'}">
	</div>
	{/if}
	<div class="contact-text">
		<a href="mailto:{$an_staticblock->title|escape:'htmlall':'UTF-8'}" class="contact-title">{l s='Email us' mod='anthemeblocks'}:<span>{$an_staticblock->title|escape:'htmlall':'UTF-8'}</span></a>
	</div>
</div>