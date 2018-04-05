<?php

namespace Illuminate\Contracts\Broadcasting;

<<<<<<< HEAD
=======
use Illuminate\Broadcasting\Channel;

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return Channel|Channel[]
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function broadcastOn();
}
