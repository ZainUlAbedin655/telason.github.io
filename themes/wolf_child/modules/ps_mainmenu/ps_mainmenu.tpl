{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}" style="direction: ltr;">
        {foreach from=$nodes item=node}
            <li class="{$node.type}{if $node.current} current {/if} {if $depth === 2} collapse-in {/if}" id="{$node.page_identifier}" >
            {assign var=_counter value=$_counter+1}
              <a
                class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}"
                href="{$node.url}" data-depth="{$depth}"
                {if $node.open_in_new_window} target="_blank" {/if}
              >
              {$node.label}
              </a>
                {if $node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                  {if $depth >= 2}
                  <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar1{$node.page_identifier}">
                  <i class="material-icons add" style="font-size: 15px;">&#xE145;</i>
                  <i class="material-icons remove" style="font-size: 15px;{if $depth == 2}display: none{/if}">&#xE15B;</i>
                  </div>
                  {/if}
                {/if}
              <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse"{else} class="collapse sub-menu-collapse {if $depth === 2} in {/if}"{/if} id="exCollapsingNavbar1{$node.page_identifier}">
                {if $node.children|count}
                  {menu nodes=$node.children depth=$node.depth parent=$node}
                {/if}
        				<div class="menu-banners">       
                  {foreach from=$node.image_urls item=image_url}
          				<div class="menu-banner">
          						<div class="menu-banners-inner">
          							<img src="{$image_url}" alt="" style="" />
          						</div>
          				</div>
  				          {/foreach}
  				      </div>
              </div>
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}
<div class="menu pst-top-menu col-md-12 col-lg-12  js-top-menu position-static hidden-md-down" id="_desktop_top_menu">	
    	{menu nodes=$menu.children}			
    <div class="clearfix"></div>	
</div>