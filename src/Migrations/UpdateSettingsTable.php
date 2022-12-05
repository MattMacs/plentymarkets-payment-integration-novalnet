<?php
/**
 * This file is used for update the table name
 *
 * @author       Novalnet AG
 * @copyright(C) Novalnet
 * @license      https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 */
namespace Novalnet\Migrations;

use Novalnet\Models\TransactionLog;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

/**
 * Class UpdateSettingsTable
 *
 * @package Novalnet\Migrations
 */
class UpdateSettingsTable
{
    /**
     * Create transaction log table
     *
     * @param Migrate $migrate
     */
    public function run(Migrate $migrate)
    {
        $migrate->updateTable(Settings::class);
    }
}
