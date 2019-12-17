{$param['count'] = count($an_staticblock->getChildrenBlocks())}
<div class="advantages-box ">
				<div class="advantages-type-1">
					    {foreach from=$an_staticblock->getChildrenBlocks() item=block}
					      {$block->getContent($param) nofilter}
					    {/foreach}
				    </div>
</div>

