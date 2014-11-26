<?php
namespace YellowTree\ytviewhelpers\ViewHelpers\Format;

/*
 * This script belongs to the TYPO3 Flow package "TYPO3.Fluid". * * It is free software; you can redistribute it and/or modify it under * the terms of the GNU Lesser General Public License, either version 3 * of the License, or (at your option) any later version. * * The TYPO3 project - inspiring people to share! *
 */

class JsonViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	protected $escapingInterceptorEnabled = FALSE;
	
	/**
	 * 
	 * @param string $value
	 * @param boolean $forceObject
	 * @return string
	 */
	public function render($value = NULL, $forceObject = FALSE) {
		/*
		if ($value === NULL) {
			$value = $this->renderChildren ();
		}
		*/
		$options = JSON_HEX_TAG;
		if ($forceObject !== FALSE) {
			$options = $options | JSON_FORCE_OBJECT;
		}
		return json_encode ( $value, $options );
	}
}