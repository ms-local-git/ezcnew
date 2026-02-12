<?php

namespace App\Controllers;


class Sidebar extends BaseController
{

	public function toggle_sidebar()
{
	dd('ds5695656');
    if ($this->request->getMethod() === 'post') {
        $hide = $this->request->getPost('hide_sidebar') ? 1 : 0;
        $_SESSION['hide_sidebar'] = $hide;
    }

    return redirect()->back();
}

}
