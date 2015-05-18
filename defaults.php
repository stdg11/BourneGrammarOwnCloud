 <?php
    /**
    * See lib/private/defaults.php for a list of possible defaults
    */
 class OC_Theme {
    public function getName() {
		/* short name, used when referring to the software
		* @return string
		*/
		return 'FileBox';
    }
	public function getTitle() {
		/* can be a longer name, for titles
		* @return string
		*/
		return 'FileBox gives you wings! ';
    }
    public function getEntity() {
		/* e.g. company name, used for footers and copyright notices
		* @return string
		*/
		return 'Bourne Grammar School';
    }    
    public function getSlogan() {
		/* e.g. Strapline, used for footers and copyright notices
		* @return string
		*/
		return 'providing half-baked examples since 2015';
    }
    public function getBaseUrl() {
		/**
		* get base URL for the organisation behind your ownCloud instance
		* @return string
		*/
		return 'http://www.bourne-grammar.lincs.sch.uk';
    }
}

