<?php
/**
 * Dashboard Controller
 *
 * Class for Dashboard, you can add more methods in here =:D
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AdminAppController', 'Admin.Controller');

class EventController extends AdminAppController
{    /**
     * admin_index
     *
     * @return void
     */
    public function admin_index()
    {
        $this->set('title_for_layout', __d('admin', 'Dashboard'));
    }

    /**
     * admin_Add
     *
     * @return void
     */
    public function admin_add()
    {

    }

    /**
     * admin_edit
     *
     * @param $id Group id
     * @return void
     */
    public function admin_edit($id = null)
    {

    }

    /**
     * admin_delete
     *
     * @param  $id Group id
     *
     * @return void
     */
    public function admin_delete($id = null)
    {

    }
}
?>