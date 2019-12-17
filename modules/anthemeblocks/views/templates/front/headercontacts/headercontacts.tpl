<div id="_desktop_anthemecontact" class="header-contacts">
	{foreach from=$an_staticblock->getChildrenBlocks() item=block}
		{$block->getContent() nofilter}
	{/foreach}
</div>