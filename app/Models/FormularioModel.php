<?php

namespace estoque\Models;

use Illuminate\Database\Eloquent\Model;

class FormularioModel extends Model
{
    protected $table = "formulario";
    protected $guarded = ["created_at", "updated_at", "id"];
    protected $fillable = ["nome", "email", "preferencia_musical", "sexo", "senha"];
    protected $timestamp = true;
    protected $casts = ["preferencia_musical"=>"array"];
}
