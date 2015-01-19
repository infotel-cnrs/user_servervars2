<?php
/**
 * ownCloud - 
 *
 * @author Marc DeXeT
 * @copyright 2014 DSI CNRS https://www.dsi.cnrs.fr
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\User_Servervars2\Custom;
use OCA\User_Servervars2\Lib\CustomConfig;

class FooBarTokensConfig extends CustomConfig {

	var $data = array(
		'tokens_provider_id' => 'provider',
		'tokens_user_id' => 'foo@bar',
		'tokens_display_name' => 'Foo BAR',
		'tokens_email' => 'foo@bar.org',
		'tokens_groups' => array('ou' => array('FooOU'), 'o' => array('barORG')));
}