<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Matthieu Gallien <matthieu_gallien@yahoo.fr>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Elisa\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'elisa';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
