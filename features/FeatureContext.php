<?php
/**
 * FeatureContext.
 * 
 * @author    James Buncle <jbuncle@hotmail.com>
 */

namespace Dada\Behat;

use Behat\MinkExtension\Context\MinkContext;

/**
 * FeatureContext.
 * 
 * Defines application features from the specific context.
 * 
 * @author    James Buncle <jbuncle@hotmail.com>
 */
class FeatureContext extends MinkContext
{

	/**
	 * Initializes context.
	 *
	 * Every scenario gets its own context instance.
	 * You can also pass arbitrary arguments to the
	 * context constructor through behat.yml.
	 */
	public function __construct()
	{
		
	}

}
