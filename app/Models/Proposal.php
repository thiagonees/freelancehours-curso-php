<?php

namespace App\Models;

use Database\Factories\ProposalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Proposal extends Model
{
  /** @use HasFactory<ProposalFactory> */
  use HasFactory, Notifiable;

  protected $fillable = [
    'email',
    'hours',
    'position_status',
  ];
}
