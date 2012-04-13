$(function() {
	ezaccelerator.init();
});

var ezaccelerator = function() {
	var _ActionRemoveInVarnishButton;
	function _init() {
		$('.viewdetailedresult').live('click', function() {
			$(this).parent().find('.termresultdetails').toggle('slow');
			return false;
		});
		
		$(".varnish-controls-tabs ul a").click(function(){
			$(this).parents(".varnish-controls-tabs").find("ul li").removeClass('selected');
			$(this).parents(".varnish-controls-tabs").find(".tabs-content > div").removeClass('selected').addClass('hide');
			var id = $(this).parent('li').attr('id');
			$(".varnish-controls-tabs ul li[id='"+id+"']").addClass('selected');
			$(".varnish-controls-tabs .tabs-content > div[id='"+id+"-content']").addClass('selected').removeClass('hide');
			return false;
		});
		
		
		var nodeId = $("input[name='ContentNodeID']").val();
		_ActionRemoveInVarnishButton =  $("input[name='ActionRemoveInVarnish']");
		_ActionRemoveInVarnishButton.live('click',function(){
			_ActionRemoveInVarnish(nodeId);
		});

		var destAjax = $("div.content-view-full div.controlbar form div.button-left>div.block");
		if (destAjax.size()>0) {
				jQuery.ez("removeinvarnish::buttons::"+nodeId,null,function(data){
						destAjax.append(data.content);
                    });
                }
	}
	function _ActionRemoveInVarnish(node_id) {
		_ActionRemoveInVarnishButton.val("Vidage en cours...");
		jQuery.ez("removeinvarnish::node::"+node_id,null,function(data){
			$("#maincontent-design").prepend(data.content);
			$(".ezaccelerator-ajax_result").show("slow");
			_ActionRemoveInVarnishButton.attr('disabled','disabled').removeClass('button').addClass("button-disabled").val("Vidage effectué");
		});
	}
	return {init:_init};
}();