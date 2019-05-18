var customize_dev              = document.getElementById('customize-dev');
var customize_min              = document.getElementById('customize-min');
var dev_min                    = '';
var input_dev_min              = document.getElementById('dev-min');
var transition_c               = document.getElementById('transition-c');
var transition_ease_c          = document.getElementById('transition-ease-c');
var transition_time_c          = document.getElementById('transition-time-c');
var transition_ease_c_input    = document.getElementById('transition-ease-c-input');
var transition_time_c_input    = document.getElementById('transition-time-c-input');


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
transition_c.addEventListener('keyup',function()
{
	var val = this.value;
	if(val != "1")
	{
		transition_ease_c.classList.add('display-none');
		transition_time_c.classList.add('display-none');
		transition_ease_c_input.value = '0';
		transition_time_c_input.value = '0'
	}
	if(val === "1" || val === "")
	{
		transition_ease_c.classList.remove('display-none');
		transition_time_c.classList.remove('display-none');
		transition_ease_c_input.value = '';
		transition_time_c_input.value = ''
		
	}
});
