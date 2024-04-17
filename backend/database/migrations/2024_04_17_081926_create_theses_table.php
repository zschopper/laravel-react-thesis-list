<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('repo');
            $table->string('page');
            $table->string('members');
            $table->timestamps();
        });

        \App\Models\Thesis::create([
            'title' => 'Doga 1',
            'repo' => 'http://github.com/zschopper/repo1',
            'page' => 'http://zschopper.github.io/repo1',
            'members' => 'András,Béla,Cili',
        ]);
        \App\Models\Thesis::create([
            'title' => 'Doga 2',
            'repo' => 'http://github.com/zschopper/repo2',
            'page' => 'http://zschopper.github.io/repo2',
            'members' => 'Dániel,Erika,Fanni',
        ]);
        \App\Models\Thesis::create([
            'title' => 'Doga 3',
            'repo' => 'http://github.com/zschopper/repo3',
            'page' => 'http://zschopper.github.io/repo3',
            'members' => 'Gergő,Hugó,Imola',
        ]);
        \App\Models\Thesis::create([
            'title' => 'Doga 4',
            'repo' => 'http://github.com/zschopper/repo4',
            'page' => 'http://zschopper.github.io/repo4',
            'members' => 'Janka,Károly',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theses');
    }
};
