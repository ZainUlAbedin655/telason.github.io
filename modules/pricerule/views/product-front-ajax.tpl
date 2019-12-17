{if $combinations|@count gt 0 }
<section class="part-number product-front-ajax-tpl">
  <h3 style="font-weight:bold;">Part Number</h3>
  <div class="box-container" >
  <div class="box" style="width: 100%;">
    <input type="text" readonly="" name="reference" value="{$product_reference}" class="part-number-input">
    {for $attributeGroups=0 to count($combinations)-1}
     <input type="text" readonly="" name="partnumber[{$attributeGroups}]" class="partnumber-input" value="">
    {/for}
  </div> 
  </div>
</section>
{/if}
 {if $product.attachments}
 <div class="panel-group" id="accordion" style="margin-top: 8px;">
  <div class="panel panel-default">
    <div class="panel-heading datasheets">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <h4>Technical Datasheets</h4>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body" style="padding: 2px 10px;">
        <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Global'}</h3>
         {foreach from=$product.attachments item=attachment}
              <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}"><i class="fa fa-file-pdf-o" style="font-size:18px; color:red"></i>{$attachment.name}</a>  |
         {/foreach}
      </div>
    </div>
  </div>
</div>
{/if} 

<a class="btn btn-primary" style="width:100%; margin-top:16px; font-size:15px; font-weight:600;" href="https://telason.com/30-free-sample?id=1">Pricing Request</a>


<script type="text/javascript">
  /*if(typeof createPartNumber != undefined){*/
    createPartNumber();
  /*}*/
  if(typeof $ != undefined){
    if($('#product-availability').length > 0 && $('section.part-number').length > 0){
      var availability = $('#product-availability').html();
      $('#product-availability').remove();
      $('section.part-number').append('<div id="product-availability">'+availability+'</div>');
    }
  }
</script>
</div><!--product-additional-info-->
