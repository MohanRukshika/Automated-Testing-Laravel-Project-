<?php

test('returns the product list as JSON', function (): void {
    $response = $this->get('/api/products');

    $response->assertOk()
        ->assertExactJson([
            ['id' => 1, 'name' => 'Office chair'],
        ]);
});
