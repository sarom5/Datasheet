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
 * @version Generated by ModuleStudio 0.6.0 (http://modulestudio.de) at Thu Mar 21 11:00:37 CET 2013.
 */

/**
 * Event handler implementation class for user-related events.
 */
class Datasheete_Listener_User extends Datasheete_Listener_Base_User
{
    /**
     * Listener for the `user.gettheme` event.
     *
     * Called during UserUtil::getTheme() and is used to filter the results.
     * Receives arg['type'] with the type of result to be filtered
     * and the $themeName in the $event->data which can be modified.
     * Must $event->stop() if handler performs filter.
     *
     * @param Zikula_Event $event The event instance.
     */
    public static function getTheme(Zikula_Event $event)
    {
        parent::getTheme($event);
    }
    
    /**
     * Listener for the `user.account.create` event.
     *
     * Occurs after a user account is created. All handlers are notified.
     * It does not apply to creation of a pending registration.
     * The full user record created is available as the subject.
     * This is a storage-level event, not a UI event. It should not be used for UI-level actions such as redirects.
     * The subject of the event is set to the user record that was created.
     *
     * @param Zikula_Event $event The event instance.
     */
    public static function create(Zikula_Event $event)
    {
        parent::create($event);
    }
    
    /**
     * Listener for the `user.account.update` event.
     *
     * Occurs after a user is updated. All handlers are notified.
     * The full updated user record is available as the subject.
     * This is a storage-level event, not a UI event. It should not be used for UI-level actions such as redirects.
     * The subject of the event is set to the user record, with the updated values.
     *
     * @param Zikula_Event $event The event instance.
     */
    public static function update(Zikula_Event $event)
    {
        parent::update($event);
    }
    
    /**
     * Listener for the `user.account.delete` event.
     *
     * Occurs after a user is deleted from the system.
     * All handlers are notified.
     * The full user record deleted is available as the subject.
     * This is a storage-level event, not a UI event. It should not be used for UI-level actions such as redirects.
     * The subject of the event is set to the user record that is being deleted.
     *
     * @param Zikula_Event $event The event instance.
     */
    public static function delete(Zikula_Event $event)
    {
        parent::delete($event);
    }
}
