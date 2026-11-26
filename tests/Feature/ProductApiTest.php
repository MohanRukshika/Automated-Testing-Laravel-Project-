<?php

test('returns the product list as JSON', function (): void {
    $response = $this->get('/api/products');

    $response->assertOk()
        ->assertExactJson([
            ['id' => 2, 'name' => 'Office chair'],
        ]);
});
