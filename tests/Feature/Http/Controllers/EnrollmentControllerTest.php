<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EnrollmentController
 */
class EnrollmentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function bill_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $enrollment = factory(\App\Models\Enrollment::class)->create();

        $response = $this->get('enrollment/{enrollment}/bill');

        $response->assertOk();
        $response->assertViewIs('carts.show');
        $response->assertViewHas('enrollments');
        $response->assertViewHas('fees');
        $response->assertViewHas('books');
        $response->assertViewHas('availableBooks');
        $response->assertViewHas('availableFees');
        $response->assertViewHas('availableDiscounts');
        $response->assertViewHas('contactData');
        $response->assertViewHas('availablePaymentMethods');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('storeEnrollment'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(to("/enrollment/{$enrollment_id}/show"));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EnrollmentController::class,
            'store',
            \App\Http\Requests\EnrollmentCreateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $enrollment = factory(\App\Models\Enrollment::class)->create();

        $response = $this->post(route('changeCourse', [$enrollment]), [
            // TODO: send request data
        ]);

        $response->assertRedirect("enrollment/{$enrollment->id}/show");

        // TODO: perform additional assertions
    }

    // test cases...
}
