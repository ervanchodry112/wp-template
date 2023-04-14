	jQuery(function ($)
	{
		$('input[name="PROBLEM_PDDIKTI[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="PROBLEM_PDDIKTI[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="PROBLEM_PDDIKTI[]"][type="radio"]').prop('checked', false);
				}
			}
		});
		$('input[name="General_Problem[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="General_Problem[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="General_Problem[]"][type="radio"]').prop('checked', false);
				}
			}
		});
		$('input[name="Finansial[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Finansial[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Finansial[]"][type="radio"]').prop('checked', false);
				}
			}
		});
		$('input[name="Kontrol_Aturan_Akademik[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Kontrol_Aturan_Akademik[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Kontrol_Aturan_Akademik[]"][type="radio"]').prop('checked', false);
				}
			}
		});		
		$('input[name="Akreditasi[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Akreditasi[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Akreditasi[]"][type="radio"]').prop('checked', false);
				}
			}
		});	
		$('input[name="Infrastruktur[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Infrastruktur[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Infrastruktur[]"][type="radio"]').prop('checked', false);
				}
			}
		});	
		$('input[name="Sistem_Branch_2[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Sistem_Branch_2[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="Sistem_Branch_2[]"][type="radio"]').prop('checked', false);
				}
			}
		});	
		$('input[name="SDM[]"]').on('change', function()
		{
			if ($(this).attr('type') == 'radio' ) 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="SDM[]"][type="checkbox"]').prop('checked', false);
				}
			}
			else 
			{
				if ( $(this).prop('checked') ) 
				{
					$('input[name="SDM[]"][type="radio"]').prop('checked', false);
				}
			}
		});	
	});