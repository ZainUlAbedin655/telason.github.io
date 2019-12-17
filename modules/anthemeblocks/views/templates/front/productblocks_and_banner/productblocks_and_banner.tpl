<div class="product_banner_block">
	<div class="items-block">
	{foreach from=$an_staticblock->getChildrenBlocks() item=block}
		{$block->getContent() nofilter}
	{/foreach}
	</div>
</div>