
	var celan=$('#celan'),//选择侧栏
		mask=$('#mask'),
		celancaidan=$('#celancaidan');

	function showcelan()
		{
			mask.fadeIn();
			celan.animate({'right':0});
		}

	celancaidan.on('click',showcelan)
	mask.on('click',hidecelan)

	function hidecelan(){
		mask.fadeOut();
		celan.css('right',-celan.width());
	}
	//返回顶部交互效果代码
	var back=$('#back');
	back.on('click',backto)
	function backto(){
		$('html','body').animate({
			scrollTop:0	
		},800)
	}
	/*
	//当返回顶部之后，按钮就不需要了，所以需要让它消失
	$(window).on('scroll',function()
	{
		if($(window).scrollTop>$(window).height())
		{
			back.fadeIn();
		}
		else{
			back.fadeOut();
		}
	})
	//每次页面刷新，返回顶部首先是不显示的
	$(window).trigger('acroll');//这样返回顶部的那个按钮一开始就是没有的了
	*/
