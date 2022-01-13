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
        'ifEnrolled'
    ];

    //Eloquent relations
    public function user() 
    {
        return $this->belongsToMany(User::class);
    }

    static function ifEnrolled($events, $myeventuser) 
    {
        foreach ($events as $event) {
            foreach ($myeventuser as $myevent){

                if ($event->id === $myevent->id){
                    $event->ifEnrolled = "1";
                }
            }    
        }
        return ($events);
    }

    static function totalEnrollees($events) 
    {
        $events=Event::withCount('user')->get();
        return $events;
    }

    static function eventVacancy($event) 
    {
        $totalusers = Event::totalEnrollees($event);

        foreach ($totalusers as $item) {

            if ($item->id === $event->id) {                
                $totalusers = $item->user_count;
                return $totalusers;
            }
        }
    }

    static function checkEnrollment($user, $event) 
    {
        foreach ($user->event as $inscriptionEvent) {

            if ($event->id === $inscriptionEvent->id) {
                $inscription = true;
                return $inscription;
            }
        }
        return false;
    }

  
}
