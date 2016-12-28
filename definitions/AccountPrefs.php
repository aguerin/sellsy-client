<?php

/**
 * Sellsy Client.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to richarddeloge@gmail.com so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 *
 * @author      Richard Déloge <richarddeloge@gmail.com>
 *
 * @version     0.8.0
 */
namespace Teknoo\Sellsy\Definitions;

use Teknoo\Sellsy\Client\ClientInterface;
use Teknoo\Sellsy\Collection\Collection;
use Teknoo\Sellsy\Collection\CollectionInterface;
use Teknoo\Sellsy\Collection\DefinitionInterface;
use Teknoo\Sellsy\Method\Method;

class AccountPrefs implements DefinitionInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ClientInterface $client): CollectionInterface
    {
        $collection = new Collection($client, 'AccountPrefs');

        $collection->registerMethod(new Method($collection, 'getCorpInfos'));
        $collection->registerMethod(new Method($collection, 'updateCorpInfos'));
        $collection->registerMethod(new Method($collection, 'getAddressList'));
        $collection->registerMethod(new Method($collection, 'getAddress'));
        $collection->registerMethod(new Method($collection, 'createAddress'));
        $collection->registerMethod(new Method($collection, 'updateAddress'));
        $collection->registerMethod(new Method($collection, 'deleteAddress'));
        $collection->registerMethod(new Method($collection, 'getStaffInfos'));
        $collection->registerMethod(new Method($collection, 'updateStaffInfos'));
        $collection->registerMethod(new Method($collection, 'getAbo'));
        $collection->registerMethod(new Method($collection, 'getLogoPublicLink'));
        $collection->registerMethod(new Method($collection, 'updateLogo'));
        $collection->registerMethod(new Method($collection, 'deleteLogo'));
        $collection->registerMethod(new Method($collection, 'getCurrencies'));
        $collection->registerMethod(new Method($collection, 'getCurrency'));
        $collection->registerMethod(new Method($collection, 'setCurrency'));
        $collection->registerMethod(new Method($collection, 'setLanguage'));
        $collection->registerMethod(new Method($collection, 'setNumberFormat'));
        $collection->registerMethod(new Method($collection, 'updateDefaultPayMediums'));

        return $collection;
    }
}