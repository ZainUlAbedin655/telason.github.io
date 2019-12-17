$(document).ready(function() {
  var reload = false; //used whether to reload the page or not. set to true on addition of a new row
  $("#add_more_rule").click(function(e) {
    e.preventDefault(); // if not included the form's save action is called every time a new row is added
    var currencies_loop = "";
    var combination_loop = "";
    var obj = JSON.parse(currencies);// parsing json encoded rows passed from tab-body.tpl
    var combination_obj = JSON.parse(combinations);
    var add_product_id = $(this).attr('data-id_product');

     //loop through object to make option tags in select clause for combination and currency
    for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
            currencies_loop +="<option value='"+obj[key]['id_currency']+"'>"+obj[key]['name']+"</option>";
        }
    }
    for (var key_comb in combination_obj) {
        if (combination_obj.hasOwnProperty(key_comb)) {
          combination_loop +="<option value='"+combination_obj[key_comb]['id']+"'>"+combination_obj[key_comb]['name']+"</option>";
        }
    }
    //row variable contains a template for new row addition 
    var row = `<div class="rule-item-row row row-data" data-product="`+add_product_id+`" data-item="">
        <div class="rule-item min-qty-item">
          <div class="form-group">
            <div class="input-group">
              <input type="number" name="min_quantity" class="form-control" value="1" min="1">
              <div class="input-group-append">
                <span class="input-group-text">Unit(s)</span>
              </div>
            </div>
          </div>
        </div>
         <div class="rule-item discount-type-item">
      <fieldset class="form-group">
        <select name="discount_type" class="custom-select">
          <option value="amount" >€</option>
          <option value="percentage">%</option>
        </select>
      </fieldset>
    </div>
        <div class="rule-item price-item">
          <div class="form-group">  
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Price</span>
              </div>
              <input type="number"  name="price" class="form-control" value="0" min="0">
            </div>
          </div>
        </div>
        <div class="rule-item reduction-item">
          <div class="form-group">  
            <div class="input-group">
              <input type="number"  name="rule_price" class="form-control" value="0" min="0">
            </div>
          </div>
        </div>
        <div class="rule-item delivery-item">
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="delivery_time" class="form-control" value="">
            </div>
          </div>
        </div>
        <div class="rule-item currency-item">
          <fieldset class="form-group">
            <select name="rule_currency" class="custom-select">
              <option value="">Select Currency</option>
            `+currencies_loop+`
            </select>
          </fieldset>
        </div>
        <div class="rule-item combination-item">
          <fieldset class="form-group">
            <select name="combination" class="custom-select">
            <option value="0">Select Combination</option>
            `+combination_loop+`
            </select></fieldset></div><div class="rule-item add-item"><a class="btn tooltip-link add-row"><i class="material-icons">save</i></a></div><div class="rule-item delete-item"><a class="btn tooltip-link remove-row"><i class="material-icons">delete</i></a></div></div>
            `;
          $("#rule_row_container").append(row);
          reload = true;
    });
    $('form#form.product-page button[type="submit"]').on('click',function(e){
      //check if module tab has activated class 
      if($('#tab_hooks a').hasClass('active') && reload){
        // refresh page --because at the time of this code no solution could be found for refreshing list view
        window.setTimeout(function(){location.reload()},10000)
      }
    });
    $('#rule_row_container').on('click', '.editable-field', function (event){
        $(this).attr('contenteditable',true);
        $(this).addClass('editnow');
    });
    $('#rule_row_container').on('focusout', '.editable-field', function (event){
       $(this).attr('contenteditable',false);
       $(this).removeClass('editnow');
    });
    $('#rule_row_container').on('keyup change', '.rule-item.price-item input', function (event){
       var add_product_price = $('#rule_row_container').attr('data-product-price');
       var rule_price = $(this).val();
       var itemrow = $(this).parents('.rule-item-row');
       var newcombinationid = itemrow.find('.combination-item').find('select').val();
       itemrow.attr('data-item',newcombinationid);
       var ruleDate = {}
       ruleDate['min_quantity']   = itemrow.find('.min-qty-item').find('input').val();
       ruleDate['discount_type']  = itemrow.find('.discount-type-item').find('select').val();
       ruleDate['rule_price']     = itemrow.find('.reduction-item').find('input').val();
       ruleDate['delivery_time']  = itemrow.find('.delivery-item').find('input').val();
       ruleDate['rule_currency']  = itemrow.find('.currency-item').find('select').val();
       ruleDate['combination']    = newcombinationid;
       var price_for_type = add_product_price;
       if(ruleDate['discount_type'] == "percentage"){
          var tempPrice = add_product_price - rule_price;
          price_for_type = ((tempPrice/add_product_price)*100);
        }else{
          price_for_type = add_product_price - rule_price;
        }
        itemrow.find('.reduction-item').find('input').val(price_for_type);
    });
});