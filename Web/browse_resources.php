<?php
/**
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/
 
define('ROOT_DIR', '../');
$pageDepth = 0;
global $pageDepth;
require_once(ROOT_DIR . 'Pages/BrowseResourcesPage.php');
require_once(ROOT_DIR . 'Presenters/BrowseResourcesPresenter.php');


$plugins_dir = 'plugins/';
global $plugins_dir;

//require_once(ROOT_DIR . 'Pages/Admin/ManageResourcesPage.php');
//require_once(ROOT_DIR . 'Presenters/Admin/ManageResourcesPresenter.php');

$page = new BrowseResourcesPage();
$page->PageLoad();

?>