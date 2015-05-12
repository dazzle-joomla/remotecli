<?php

/**
 * @package   AkeebaRemote
 * @copyright Copyright (c)2009-2014 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 * @version   $Id$
 */
class RemoteExceptionUpdateinfo extends RemoteException
{
	public function __construct($message = null)
	{
		$this->code = 111;
		if (empty($message))
		{
			$message = 'Could not get update information';
		}
		parent::__construct($message);
	}
}