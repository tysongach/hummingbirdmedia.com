<?php 

class kirbytextExtended extends kirbytext {
  
  function __construct($text, $markdown=true) {
    
    parent::__construct($text, $markdown);
    
    // define custom tags
		$this->addTags('figure');

		// define custom attributes
		$this->addAttributes('caption', 'align');
                
  }


	// define a function for each new tag you specify
	function figure($params) {

    global $site;

    $page   = ($this->obj) ? $this->obj : $site->pages()->active();
    $image  = $page->images()->find($params['figure']);

    // set the thumbnail width depending on which alignment is set
    if($params['align'] == 'full') {
			$width = '1000';
		} else {
			$width = '500';
		}

		// try to fetch the caption from the alt text if not specified
		if(empty($params['caption'])) $params['caption'] = @$params['alt'];

		// try to fetch the alt text from the caption if not specified
		if(empty($params['alt'])) $params['alt'] = @$params['caption'];

		// html output
		if(!empty($params['align'])) {
			$html = '<figure class="align' . $params['align'] . '">';
		} else {
			$html = '<figure>';
		}

    $html .= '<a href="' . $image->url() . '" class="thumb"><img src="' . thumb($image, array('width' => $width, 'crop' => false), false) . '" alt="' . $params['alt'] . '" /></a>';

		// only add a caption if one is available
		if(!empty($params['caption'])) {
			$html .= '<figcaption>' . $params['caption'] . '</figcaption>';
		}

	$html .= '</figure>';

	return $html;

	}
}