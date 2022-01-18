<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PostLike;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img',
        'text',
        'date_time',
        'users_max'
    ];

    //Eloquent relations
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function totalEnrollees()
    {
        return $this->user()->count();
       /* $events = Event::withCount('user')->get();
        return $events;*/
    }

    public function vacancy()
    {
        return $this->users_max - $this->totalEnrollees();
    }

    public function isFull()
    {
        if($this->vacancy() == 0){
            return true;
        } return false;
    }

    static function eventVacancy($event)
    {
        /* 
        $usercount = Event::totalEnrollees($event);
        foreach ($usercount as item) {
            $usercount = $item->user_count;
            return $usercount;
        }
        */
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
