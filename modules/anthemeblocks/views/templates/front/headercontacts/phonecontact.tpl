<div class="header-contact-item phone-contact">
	{if $an_staticblock->getImageLink() != ''}
	<div class="contact-img">
		<img src="{$an_staticblock->getImageLink()}" alt="{$an_staticblock->title|escape:'htmlall':'UTF-8'}">
	</div>
	{/if}
	<div class="contact-text">
		<a href="tel:{$an_staticblock->title|escape:'htmlall':'UTF-8'}" class="contact-title">{$an_staticblock->title|escape:'htmlall':'UTF-8'}</a>
	</div>
</div>