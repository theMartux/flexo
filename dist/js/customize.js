var customize_dev        = document.getElementById('customize-dev');
var customize_min        = document.getElementById('customize-min');
var dev_min              = '';
var input_dev_min        = document.getElementById('dev-min');

customize_dev.addEventListener('click',function(e)
{
	e.preventDefault();
	customize_dev.classList.add('checked');
	customize_min.classList.remove('checked');
	dev_min = 'dev';
	input_dev_min.value = (dev_min)
	
});
customize_min.addEventListener('click',function(e)
{
	e.preventDefault();
	customize_min.classList.add('checked');
	customize_dev.classList.remove('checked');
	dev_min = 'min';
	input_dev_min.value = (dev_min)
});
