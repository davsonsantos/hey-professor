<?php

use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseCount, assertDatabaseHas, post};

it('should be able to create a question bigger than 255 caracters', function () {

    //Arrange - Preparar
    $user = User::factory()->create();

    actingAs($user);

    //Action - Agir
    $request = post('/questions/create', [
        'question' => str_repeat('*', 260) . '?',
    ]);

    //Assets - verificar
    $request->assertRedirect(route('dashboard'));

    assertDatabaseCount('questions', 1);

    assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);

});

it('should check if ends with the question marker ?', function () {

    //Arrange - Preparar
    $user = User::factory()->create();

    actingAs($user);

    //Action - Agir
    $request = post(route("questions.store"), [
        'question' => str_repeat('*', 10),
    ]);

    //Assets - verificar
    $request->assertSessionHasErrors(['question' => 'The question must end with the question marker ?']);

    assertDatabaseCount('questions', 0);

});

it('should have at least 10 caracters', function () {

    //Arrange - Preparar
    $user = User::factory()->create();

    actingAs($user);

    //Action - Agir
    $request = post(route("questions.store"), [
        'question' => str_repeat('*', 8) . '?',
    ]);

    //Assets - verificar
    $request->assertSessionHasErrors(['question' => __('validation.min.string', ['min' => 10, 'attribute' => 'question'])]);

    assertDatabaseCount('questions', 0);

    // assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);

});
