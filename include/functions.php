<?php

class functions {

	public $filename = '';
	public $mess = '';
	private $temp = '';
	private $date_f = '';
	private $time_f = '';
	private $newPath = '';
	
	public function div_delete($param, $body) {

		foreach($param as $element)
		{
			$body = str_ireplace($element, '', $body);
		}
		return $body;	
	}	

	public function block_replace($value, $r_text, $body, $opt) {						
		
		switch($opt)
		{
			case 'blk':
				foreach($value as $element)
				{
					$body = str_ireplace($element, $r_text, $body);
				}
				break;
		
			case 'in':	
				foreach($value as $element)
				{
					$body = str_ireplace($element->innertext, $r_text, $body);
				}
				break;

			case 'out':	
				foreach($value as $element)
				{
					$body = str_ireplace($element->outertext, $r_text, $body);
				}
				break;
		}
		
		return $body;			
	}
	
	public function speaker_text($value, $uid, $r_text, $body) {						
		
		foreach($value as $element)
		{
			if(stristr($element, $uid, false))
			{
				// The below statement isolates the 'span' tag with its unique id and replaces the text 
				// with the one added by the user. The replaced text is stored in a temporary variable!
				$this->temp = str_ireplace($element->innertext, $r_text, $element->outertext);
				
				// Time to modify the source html and return the results! 
				$body = str_ireplace($element->outertext, $this->temp, $body);
			}
		}
		return $body;			
	}
	
	public function modify_url($value, $r_text, $body) {
		foreach($value as $element)
		{
			$this->temp = $element->outertext;
			$element->href = $r_text;
			$body = str_ireplace($this->temp, $element->outertext, $body);
		}
		
		return $body;
	}

	public function modify_img($value, $r_src, $r_alt, $r_title, $body, $section) {
		foreach($value as $element)
		{
			switch($section)
			{
				case 'logo':
					$this->newPath = $this->file_upload($r_src, 'images/upload/logo/');
					break;
					
				case 'banner':
					$this->newPath = $this->file_upload($r_src, 'images/upload/banner/');
					break;

				case 'speakers':
					$this->newPath = $this->file_upload($r_src, 'images/upload/speakers/');
					break;

				case 'venue':
					$this->newPath = $this->file_upload($r_src, 'images/upload/venue/');
					break;

				case 'event':
					$this->newPath = $this->file_upload($r_src, 'images/upload/event/');
					break;					
			}
			
			$this->temp = $element->outertext;
			$element->src = trim($this->newPath);
			$element->alt = trim($r_alt);
			$element->title = trim($r_title);
			$body = str_ireplace($this->temp, $element->outertext, $body);
		}
		
		return $body;
	}
	
	public function file_html($content) {
	
	    // Filename in write mode.
    	if (!$handle = fopen($this->filename, 'w')) {
        	echo "Cannot open file ($this->filename)";
         	return "fof";
	    }
		else
		{
			// Let's make sure the file exists and is writable first.
			if (is_writable($this->filename)) {

	    		// Write $somecontent to our opened file.
		    	if (fwrite($handle, $content) === FALSE) {
    		    	echo "Cannot write to file ($this->filename)";
	        		return "fwf";
		    	}

			} else {
    			return "nw";
			}

			return "fws";
    		fclose($handle);
		}
	}
	
	public function date_adapter($dt) {
		$this->date_f = strtotime(trim($dt));
		$this->date_f = date('l j F Y', $this->date_f);
		
		return $this->date_f;	
	}

	public function time_adapter($tm_s, $ampm_s, $tm_e, $ampm_e) {
		$this->time_f = trim($tm_s).' '.$ampm_s.' - '.trim($tm_e).' '.$ampm_e;
		
		return $this->time_f;	
	}
		
	private function file_upload($fln, $path) {
		
		if (isset($fln) && ($fln['error'] == UPLOAD_ERR_OK)) {
			$this->newPath = $path . basename($fln['name']);

			if (move_uploaded_file($fln['tmp_name'], $this->newPath)) {
				return $this->base_url().$this->newPath; 
			} 
			else 
			{
				echo "Couldn't move file to $this->newPath";
				return false;
			}
		} 
		else 
		{
			echo "No valid file uploaded.";
		}
		
	}
	
    private function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }


}

?>