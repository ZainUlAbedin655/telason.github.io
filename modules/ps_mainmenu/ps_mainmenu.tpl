{function name="menu" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
      <ul data-depth="{$depth}" style="direction: ltr;">
        {foreach from=$nodes item=node}
          <li class="{$node.type}{if $node.current} current{/if}">
            <a href="{$node.url}" {if $node.open_in_new_window} target="_blank" {/if}>{$node.label}</a>
            <div>
              {menu nodes=$node.children depth=$node.depth}
              {if $node.image_urls|count}
                <div class="menu-images-container">
                  {foreach from=$node.image_urls item=image_url}
                  {if type($var) == "array"} 
                      <img src="{$image_url[0]}">
                  {elseif type($var) == "string"} 
                      <img src="{$image_url}">
                  {/if} 
                  {/foreach}
                </div>
              {/if}
            </div>
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}

<div class="menu">
    {menu nodes=$menu.children}
</div>
