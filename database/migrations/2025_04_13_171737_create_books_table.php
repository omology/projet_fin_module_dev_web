<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {


        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('title');
            $table->text('description');
            $table->string('ISBN');
            $table->string('authorName');
            $table->float('price');
            $table->string('adress');
            $table->bigInteger('like')->default(0);
            $table->bigInteger('dislike')->default(0);
            $table->float('rating')->default(0);
            $table->string('imgPath');
            $table->enum("category",Book::$categories)->default('other');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
