<?php
/**
 * Pimcore
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @category   Pimcore
 * @package    User
 * @copyright  Copyright (c) 2009-2016 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace Pimcore\Model\User;

use Pimcore\Model;

class Service
{

    /**
     * Mapping between database types and pimcore class names
     * @static
     * @param $type
     * @return string
     */
    public static function getClassNameForType($type)
    {
        switch ($type) {
            case "user": return "\\Pimcore\\Model\\User";
            case "userfolder": return "\\Pimcore\\Model\\User\\Folder";
            case "role": return "\\Pimcore\\Model\\User\\Role";
            case "rolefolder": return "\\Pimcore\\Model\\User\\Role\\Folder";
        }
    }
}
