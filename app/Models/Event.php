<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'img',
        'text',
        'date_time',
        'users_max',
    ];

    //Eloquent relations
    public function user() 
    {
        return $this->belongsToMany(User::class);
    }
    
    static function totalEnrollees($events) 
    {
        $events = Event::withCount('user')->get();
        return $events;
    }

    static function eventVacancy($event) 
    {
        $usercount = Event::totalEnrollees($event);
        foreach ($usercount as $item) {
            if ($item->id === $event->id) {                
                $usercount = $item->user_count; 
                return $usercount;
            }
        }
    }

    static function checkEnrollment($user, $event) 
    {
        foreach ($user->event as $inscriptionEvent) {
            if ($event->id === $inscriptionEvent->id) {
                $inscription = true;
                var_dump($inscription);
                return $inscription;
               
            }
        }
        return false;
    }
    

}
