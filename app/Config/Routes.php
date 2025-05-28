<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Dashboard::index');

// one time only
$routes->get('/setup', 'Setup::index');
$routes->post('/setup/update', 'Setup::postSetupUpdate');

// main operation
$routes->get('/home', 'Home::index');

$routes->get('/player', 'Player::index');
$routes->get('/player/add', 'Player::pagePlayerAdd');
$routes->post('/player/create', 'Player::postPlayerCreate');
$routes->get('/player/edit/(:num)', 'Player::pagePlayerEdit/$1');
$routes->post('/player/update', 'Player::postPlayerUpdate');
$routes->post('/player/delete', 'Player::postPlayerDelete');

$routes->get('/organization', 'Organization::index');
$routes->get('/organization/add', 'Organization::pageOrganizationAdd');
$routes->post('/organization/create', 'Organization::postOrganizationCreate');
$routes->get('/organization/edit/(:num)', 'Organization::pageOrganizationEdit/$1');
$routes->post('/organization/update', 'Organization::postOrganizationUpdate');
$routes->post('/organization/delete', 'Organization::postOrganizationDelete');

$routes->get('/team', 'Team::index');
$routes->get('/team/org', 'Team::pageTeamOrg'); // select org before going to pageTeamAdd
$routes->get('/team/org/(:num)/add', 'Team::pageTeamAdd/$1');
$routes->post('/team/create', 'Team::postTeamCreate');
$routes->get('/team/edit/(:num)', 'Team::pageTeamEdit/$1');
$routes->post('/team/update', 'Team::postTeamUpdate');
$routes->post('/team/delete', 'Team::postTeamDelete');