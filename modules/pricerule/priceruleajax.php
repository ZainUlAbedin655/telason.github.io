<?php 
$result = array();
if(isset($_POST['currentCombination']) && (!empty($_POST['currentCombination']) || $_POST['currentCombination'] >= 0 )){
	include_once('../../config/config.inc.php');
	include_once('../../init.php');
	include_once('pricerule.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
        $pricerule = new pricerule;  // correct
        $combination_id = 0;
		    $id_product = $_POST['id_product'];
        if(isset($_POST) && !empty($_POST)){
            if(isset($_POST['currentCombination']) && !empty($_POST['currentCombination'])){
                $combination_id = $_POST['currentCombination'];
            }
        }        
        $product            = new Product($id_product);
        $currencies         = Currency::getCurrencies(false, true, true);

        $combinations       = $pricerule->getCombinations($product);
        $combinations_tmp   = $combinations;//$this->getCombinations($product,true);
        $price_rules_tmp    = json_decode($pricerule->getCustomField($id_product,$combination_id));
        $price_rules        = $price_rules_tmp;
        $all_price_rule     = array();
        if(!empty($price_rules)){
            foreach($price_rules as $key => $rule){
                if(!empty($combinations_tmp)){
                  foreach($combinations_tmp as $key2 => $tmp_combination){
                      if($combination_id <= 0){
                          if($rule->combination == $tmp_combination['id']){
                              $all_price_rule[] = $rule;
                          }
                      }else{
                          if($rule->combination == $tmp_combination['id'] && $rule->combination == $combination_id){
                              $all_price_rule[] = $rule;
                          }
                      }
                  }
                }else{
                  // looks like product is simple product or product without combinations
                  $all_price_rule[] = $rule;
                }
            }
        }
        $result = array('id_product' => $id_product);
        $html = getRulesHtml($all_price_rule,$combinations_tmp,$currencies,$id_product);
        $result['html'] = $html;   
}else{
	$result['error'] = 'FAIL:: something has went wrong:: error';
}
echo json_encode($result);
function getRulesHtml($price_rule,$combinations,$currencies,$id_product){
    $html = '';
    foreach($price_rule as $key => $value){
        $html .= '<div class="rule-item-row row row-data" data-product="'.$id_product.'" data-item="'.$value->combination.'">';
            $html .= '<div class="rule-item min-qty-item">';
               $html .= '<div class="form-group">';
                  $html .= '<div class="input-group">';
                     $html .= '<input type="hidden" name="specific_price_id[]" value="'.$value->specific_price_id.'">';
                        $html .= '<label>';
                             $html .= '<div class="input-group-append">';
                                $html .= '<span class="input-group-text"><b class="editable-field" db-field="min_quantity">'.$value->min_quantity.'</b> Unit(s)</span>';
                             $html .= '</div>';
                        $html .= '</label>';
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="rule-item discount-type-item">';
               $html .= '<fieldset class="form-group">';
                  $html .= '<label>';
                    if($value->discount_type =='amount'){
                        $html .= '€';
                    }
                    if($value->discount_type =='percentage'){
                        $html .= '%';
                    }
                  $html .= '</label>';
               $html .= '</fieldset>';
            $html .= '</div>';
            $html .= '<div class="rule-item price-item">';
               $html .= '<div class="form-group">';
                  $html .= '<div class="input-group">';
                     $html .= '<label class="editable-field" db-field="reduction_rule_price">'.$value->reduction_rule_price.'</label>';
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="rule-item reduction-item">';
               $html .= '<div class="form-group">';
                  $html .= '<div class="input-group">';
                     $html .= '<label class="editable-field" db-field="rule_price">'.$value->rule_price.'</label>';
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="rule-item delivery-item">';
               $html .= '<div class="form-group">';
                  $html .= '<div class="input-group">';
                     $html .= ' <label class="editable-field" db-field="delivery_time">'.$value->delivery_time.'</label>';
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="rule-item currency-item">';
               $html .= '<fieldset class="form-group">';
                    $html .= '<label>';
                       foreach($currencies as $currency_value){
                            if( $currency_value['id_currency'] == $value->currency){
                               $html .= $currency_value['name'];
                            }
                        }
                   $html .= '</label>';
               $html .= '</fieldset>';
            $html .= '</div>';
            $html .= '<div class="rule-item combination-item">';
               $html .= '<fieldset class="form-group">';
                  $html .= '<label>';
                        foreach($combinations as $combination_value){
                           if($combination_value['id'] == $value->combination){
                              $html .= $combination_value['name'];
                           }
                        }
                  $html .= '</label>';
               $html .= '</fieldset>';
            $html .= '</div>';
            $html .= '<div class="rule-item edit-item">';
               $html .= '<a  class="btn tooltip-link edit-row" data-id="'.$value->specific_price_id.'"><i class="material-icons">edit</i></a>';
            $html .= '</div>';
            $html .= '<div class="rule-item delete-item">';
               $html .= '<a  class="btn tooltip-link remove-row" data-id="'.$value->specific_price_id.'"><i class="material-icons">delete</i></a>';
            $html .= '</div>';
         $html .= '</div>';
        $html .= '</div>';
    }
    return $html;
}