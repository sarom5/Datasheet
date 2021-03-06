<?php
/**
 * Datasheete.
 *
 * @copyright Sascha Rösler (SR)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package Datasheete
 * @author Sascha Rösler <i-loko@t-online.de>.
 * @link http://github.com/sarom5
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.6.0 (http://modulestudio.de) at Thu Mar 21 11:00:38 CET 2013.
 */

/**
 * Cache api base class.
 */
class Datasheete_Api_Base_Cache extends Zikula_AbstractApi
{
    /**
     * Clear cache for given item. Can be called from other modules to clear an item cache.
     *
     * @param $args['ot']   the treated object type
     * @param $args['item'] the actual object
     */
    public function clearItemCache(array $args = array())
    {
        if (!isset($args['ot']) || !isset($args['item'])) {
            return;
        }
    
        $objectType = $args['ot'];
        $item = $args['item'];
    
        $controllerHelper = new Datasheete_Util_Controller($this->serviceManager);
        $utilArgs = array('api' => 'cache', 'action' => 'clearItemCache');
        if (!in_array($objectType, $controllerHelper->getObjectTypes('controllerAction', $utilArgs))) {
            return;
        }
    
        if ($item && !is_array($item) && !is_object($item)) {
            $item = ModUtil::apiFunc($this->name, 'selection', 'getEntity', array('ot' => $objectType, 'id' => $item, 'useJoins' => false, 'slimMode' => true));
        }
    
        if (!$item) {
            return;
        }
    
    
        // Clear View_cache
        $cacheIds = array();
    
        $view = Zikula_View::getInstance('Datasheete');
        foreach ($cacheIds as $cacheId) {
            $view->clear_cache(null, $cacheId);
        }
    
    
        // Clear Theme_cache
        $cacheIds = array();
        $cacheIds[] = 'homepage'; // for homepage (can be assigned in the Settings module)
        $theme = Zikula_View_Theme::getInstance();
        $theme->clear_cacheid_allthemes($cacheIds);
    }
}
