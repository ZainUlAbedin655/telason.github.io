
<!--start med_contactable -->
<script type="text/javascript">
$(function(){ldelim}
	$('#med_contactable').contactable({ldelim}
		url: '{$module_dir}mail.php?id_lang={$cart->id_lang}',
		name: '{l s='Name' mod='med_contactable' js=1}',
		email: '{l s='Email' mod='med_contactable' js=1}',
		message : '{l s='Message' mod='med_contactable' js=1}',
		subject : '{l s='A Feedback Message From:' mod='med_contactable' js=1} '+location.href,
		submit : '{l s='SEND' mod='med_contactable' js=1}',
		recievedMsg : '{l s='Thank you for your message' mod='med_contactable' js=1}',
		notRecievedMsg : '{l s='Sorry but your message could not be sent, try again later' mod='med_contactable' js=1}',
		disclaimer: '{l s='Please feel free to get in touch, we value your feedback' mod='med_contactable' js=1}',
	{rdelim});
{rdelim});
</script>
<div id="med_contactable"></div>
<!--end med_contactable -->