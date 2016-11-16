<?php

/*
* This file is part of MailTemplateEditor plugin
*
* Copyright(c) 2000-2016 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\MailTemplateEditor;

use Eccube\Application;
use Eccube\Event\EventArgs;

class MailTemplateEditorEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function onMailCustomerConfirm(EventArgs $event)
    {
    }

    public function onMailCustomerComplete(EventArgs $event)
    {
    }

    public function onMailCustomerWithdraw(EventArgs $event)
    {
    }

    public function onMailContact(EventArgs $event)
    {
    }

    public function onMailOrder(EventArgs $event)
    {
    }

    public function onMailAdminCustomerConfirm(EventArgs $event)
    {
    }

    public function onMailAdminOrder(EventArgs $event)
    {
    }

    public function onMailPasswordReset(EventArgs $event)
    {
    }

    public function onMailPasswordResetComplete(EventArgs $event)
    {
    }

}
