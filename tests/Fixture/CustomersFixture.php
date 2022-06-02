<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'FistName' => 'Lorem ipsum dolor ',
                'LastName' => 'Lorem ipsum dolor ',
                'Phone' => 1,
                'Address' => 'Lorem ipsum dolor ',
                'Description' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
