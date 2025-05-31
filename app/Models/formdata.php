<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formdata extends Model
{
    protected $fillable = ['name', 'email', 'company', 'location', 'purpose', 'details'];
    protected $table = 'form_submissions';
        public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    protected $schema = 'public';

public function up(){

    Schema::create('formdata', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('company');
        $table->string('location');
    });
}
}
