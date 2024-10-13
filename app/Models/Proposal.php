<?php

namespace App\Models;

use Database\Factories\ProposalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /** @use HasFactory<ProposalFactory> */
    use HasFactory;

  protected $fillable = [
    'email',
    'hours',
  ];


}
