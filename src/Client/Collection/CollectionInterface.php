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
 * to contact@uni-alteri.com so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://agence.net.ua)
 *
 * @link        http://teknoo.it/sellsy-client Project website
 *
 * @license     http://teknoo.it/sellsy-client/license/mit         MIT License
 * @license     http://teknoo.it/sellsy-client/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 *
 * @version     0.8.0
 */

namespace UniAlteri\Sellsy\Client\Collection;

use UniAlteri\Sellsy\Client\Client;

/**
 * Interface CollectionInterface
 * Interface to implement class to create collection of methods, like on the Sellsy API.
 *
 * @copyright   Copyright (c) 2009-2015 Uni Alteri (http://agence.net.ua)
 *
 * @link        http://teknoo.it/sellsy-client Project website
 *
 * @license     http://teknoo.it/sellsy-client/license/mit         MIT License
 * @license     http://teknoo.it/sellsy-client/license/gpl-3.0     GPL v3 License
 * @author      Richard Déloge <r.deloge@uni-alteri.com>
 */
interface CollectionInterface
{
    /**
     * To update the client to use with this collection.
     *
     * @param Client $client
     *
     * @return $this
     */
    public function setClient(Client $client);

    /**
     * Return the current client.
     *
     * @return Client
     */
    public function getClient();

    /**
     * To update the name of this collection.
     *
     * @param string $collectionName
     *
     * @return $this
     */
    public function setCollectionName($collectionName);

    /**
     * Return the current collection name.
     *
     * @return string
     */
    public function getCollectionName();
}
