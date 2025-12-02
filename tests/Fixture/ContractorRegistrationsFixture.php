<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContractorRegistrationsFixture
 */
class ContractorRegistrationsFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor sit amet',
                'specialised_in' => 'Lorem ipsum dolor sit amet',
                'contractor_id' => 1,
            ],
        ];
        parent::init();
    }
}
