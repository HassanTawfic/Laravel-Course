<?php

namespace App\Jobs;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PruneOldPostsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

//    protected $blog;
    public function __construct()
    {
//        $this->blog=$blog;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Blog::where('created_at','<=',Carbon::now()->subYears(2)->toDateTimeString())->delete();

//        $blogs = Blog::all();
//        $now = ;
//        foreach ($blogs as $blog){
//        $creationDate = Carbon::parse($blog->created_at)->toDateString();
//        if ($creationDate->diffInYears($now)>2){
//            $blog->delete();
//        }
//        }
    }
}
