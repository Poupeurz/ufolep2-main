<?php

class MatchIndividuel extends Model
{
    public $table = "match_individuel";
    protected $fillable = ['JR', 'JV', 'date', 'lieu', 'idTournoi', 'forfait'];
}
