<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panel_Addons_Messaging extends Auth_Controller {

    public function action_index()
    {
        $this->template->title = __('Messaging');

        if($this->request->post())
        {
            Model_Config::set_value('general', 'messaging', Core::post('is_active') ?? 0);

            Alert::set(Alert::SUCCESS, __('Configuration updated'));

            $this->redirect(Route::url('oc-panel/addons', ['controller' => 'messaging']));
        }

        return $this->template->content = View::factory('oc-panel/pages/addons/messaging/index', [
            'is_active' => (bool) Core::config('general.messaging')
        ]);
    }
}
