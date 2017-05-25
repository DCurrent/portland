<?php
	
	namespace data;

	interface iObservationSource
	{
		// Accessors.
		function get_observation();
		function get_solution();
		function get_status();
		function get_result();
				
		// Mutators.
		function set_observation($value);
		function set_solution($value);
		function set_status($value);
		function set_result($value);
	}	
	
	class ObservationSource extends Common implements iObservationSource
	{
		protected
			$observation 	= NULL,
			$result			= NULL,
			$solution		= NULL,
			$status			= NULL;
			
		public function get_observation()
		{
			return $this->observation;
		}
		
		public function get_result()
		{
			return $this->result;
		}
		
		public function get_solution()
		{
			return $this->solution;
		}
		
		public function get_status()
		{
			return $this->status;
		}
	
		// Mutators		
		public function set_observation($value)
		{
			$this->observation = $value;
		}
		
		public function set_result($value)
		{
			$this->result = $value;
		}

		public function set_solution($value)
		{
			$this->solution = $value;
		}
		
		public function set_status($value)
		{
			$this->status = $value;
		}
	}
?>
