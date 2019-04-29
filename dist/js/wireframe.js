var btn_wireframe             = document.getElementById('btn-wireframe');
var btn_wireframe_fill        = document.getElementById('btn-wireframe-fill');
var btn_wireframe_fill_border = document.getElementById('btn-wireframe-fill-border');
var btn_wireframe_clean       = document.getElementById('btn-wireframe-clean');
var body                      = document.getElementsByTagName('body')[0];

btn_wireframe.addEventListener('click',function(e)
{
	e.preventDefault();
	body.setAttribute('id', 'wireframe');
	body.classList.remove('border');
	
	
});
btn_wireframe_fill.addEventListener('click',function(e)
{
	e.preventDefault();
	body.setAttribute('id', 'wireframe-fill');
	body.classList.remove('border');
	
});
btn_wireframe_fill_border.addEventListener('click',function(e)
{
	e.preventDefault();
	body.setAttribute('id', 'wireframe-fill');
	body.classList.add('border');
	
});
btn_wireframe_clean.addEventListener('click',function(e)
{
	e.preventDefault();
	body.removeAttribute('id');
	body.classList.remove('border');
	
});