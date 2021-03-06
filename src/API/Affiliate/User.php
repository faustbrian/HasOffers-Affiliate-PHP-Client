<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\HasOffers\Affiliate\API\Affiliate;

use Plients\HasOffers\Affiliate\API\AbstractAPI;
use Plients\Http\HttpResponse;

class User extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'AffiliateUser';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getContext(array $parameters = []): HttpResponse
    {
        return $this->get('getContext', $parameters);
    }

    public function setPermissions(array $parameters = []): HttpResponse
    {
        return $this->get('setPermissions', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }
}
