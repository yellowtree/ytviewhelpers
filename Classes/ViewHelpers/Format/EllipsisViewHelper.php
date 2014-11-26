<?php
namespace YellowTree\ytviewhelpers\ViewHelpers\Format;

/***************************************************************
*  Copyright notice
*
*  (c) 2014 Yellow Tree, <b.pick@yellowtree.de>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class EllipsisViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	
	/**
	 * Render
	 *
	 * @param int 		$chars 		Number of characters
	 * @param \string 	$ellipsis	Default : &#133;
	 * @return string Formatted date
	 */
	public function render($chars, $ellipsis = null) {
		$text = $this->renderChildren();
		
		if (is_null($ellipsis))
			$ellipsis = '&#133;';
		
		if (mb_strlen($text) > $chars) {
			$text = mb_substr($text, 0, $chars - 3) . $ellipsis;
		}
		return $text;
	}
}
	
