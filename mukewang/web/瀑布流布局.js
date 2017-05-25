window.onload=function(){
	waterfall('main','box');


}
function waterfall(parent,box){
	//将main下的所有class为box的元素取出来
	var oparent=document.getElementById(parent);
	getbyclass(oparent,box);

}
//根据class获取元素
function getbyclass(parent,classname){
	var boxarr=new arry(),
}