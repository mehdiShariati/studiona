<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\PickComment;
use App\Rabbit\RabbitSender;

class FetchCommentsFromInstagramApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


        protected $cmpicker;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(PickComment $picker)
    {
        $this->cmpicker=$picker;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $picker=$this->cmpicker;

        $picker->update(["status"=>"InProgress"]);
        $sender=new RabbitSender();
        $data=['post_id'=>$picker->post_id,'total_cm'=>$picker->comment_count];
        $obj=json_encode($data,JSON_PRETTY_PRINT);
        $sender->send($obj);

    }
}
