<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Loadbalancer\Integration\WhmcsModule;

/** Load Balancer: MetaData. */
function yourresellingloadbalancer_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Load Balancer', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Load Balancer: ConfigOptions. */
function yourresellingloadbalancer_ConfigOptions(): array
{
    return WhmcsModule::configOptions('loadbalancer');
}

/** Load Balancer: CreateAccount. */
function yourresellingloadbalancer_CreateAccount(array $params): string
{
    return WhmcsModule::run('loadbalancer', 'create', $params);
}

/** Load Balancer: TestConnection. */
function yourresellingloadbalancer_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Load Balancer: ClientArea. */
function yourresellingloadbalancer_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('loadbalancer', $params);
}

/** Load Balancer: AdminCustomButtonArray. */
function yourresellingloadbalancer_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('loadbalancer');
}

/** Load Balancer: RefreshStatus. */
function yourresellingloadbalancer_RefreshStatus(array $params): string
{
    return WhmcsModule::run('loadbalancer', 'refresh', $params);
}

/** Load Balancer: TerminateAccount. */
function yourresellingloadbalancer_TerminateAccount(array $params): string
{
    return WhmcsModule::run('loadbalancer', 'termination', $params);
}
