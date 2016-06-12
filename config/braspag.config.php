<?php

/**
 * Braspag PHP SDK
 *
 * @link https://github.com/JotJunior/BraspagPhpSdk for the canonical source repository
 * @copyright Copyright (c) 2016 JotJunior
 *
 * This file is part of Braspag-PHP-SDK.
 *
 * Braspag PHP SDK is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Braspag-PHP-SDK is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Braspag-PHP-SDK. If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'apiUri' => 'https://apisandbox.braspag.com.br/v2',
    'apiQueryUri' => 'https://apiquerysandbox.braspag.com.br/v2',
    'currency' => 'BRL',
    'country' => 'BRA',
    'interest' => 'ByMerchant',
    'capture' => true,
    'authenticate' => false,
    'sequence' => 'AuthorizeFirst',
    'sequenceCriteria' => 'OnSuccess',
    'merchantId' => '00000000-0000-0000-0000-000000000000',
    'merchantKey' => '0000000000000000000000000000000000000000',
];

