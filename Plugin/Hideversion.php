<?php
namespace Magenteiro\Hideversion\Plugin;

/**
 * Class Hideversion
 *
 * @author    Ricardo Martins <ricardo@magenteiro.com>
 * @copyright 2020 Magenteiro
 * @package   Magenteiro\Hideversion\Plugin
 */
class Hideversion
{
    public function afterExecute(\Magento\Version\Controller\Index\Index $subject, $result)
    {
        $subject->getResponse()->setBody(
            'Sim, é Magento. E isso é tudo que você precisa saber.'
        );
    }
}
