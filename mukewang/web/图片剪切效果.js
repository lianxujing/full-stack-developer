//获取元素相对于屏幕左边的距离 利用offsetleft属性
function getposition(node){
	var left=node.offsetLeft;
	var parent=node.offsetParent();
	while(parent !=null){
		left+=parent.offsetLeft;
		parent=parent.offsetParent;
	}
	return left;
}