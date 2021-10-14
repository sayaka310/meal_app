<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');

        $file = $this->faker->image();
        $fileName = basename($file);

        File::move($file, storage_path('app/public/images/posts/' . $fileName));

        return [
            'title' => $faker->word(),
            'user_id' => Arr::random(Arr::pluck(User::all(), 'id')),
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
            'body' => $faker->paragraph(),
            'image' => $fileName,
        ];
    }
}
