<?php
/**
 * @version $Id$
 *
 * @package SW KBirthday Module
 *
 * @Copyright (C) 2010 Schultschik Websolution All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.schultschik.de
 **/
// Dont allow direct linking

defined('_JEXEC') or die();

class ModSWKbirthdayHelperDefault extends ModSWKbirthdayHelper
{
    /**
     * adds the link for the connect param
     * @since 1.7.3
     * @param  $user pass-by-reference
     * @return void
     */
    private function getUserLink(& $user)
    {
        $user['link'] = KunenaFactory::getUser($user['userid'])->getName();
    }
}