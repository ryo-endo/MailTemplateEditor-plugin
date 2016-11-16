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

namespace Plugin\MailTemplateEditor\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{

    /**
     * MailTemplateEditor用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $form = $app['form.factory']->createBuilder('mailtemplateeditor_config')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();

                // add code...
        }

        return $app->render('MailTemplateEditor/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
