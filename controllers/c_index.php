<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
		# If the user is not logged in, direct them to do so
		if ($this->user)
		{
			$this->template->content = View::instance('v_index_index');
		}
		else
		{
			$this->template->content = View::instance('v_index_not');
		}
			
			
		# Now set the <title> tag
			$this->template->title = APP_NAME;
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/

	    # Get and print the current timestamp
    	#	echo Time::now();
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
