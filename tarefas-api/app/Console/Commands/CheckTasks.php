<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Task;
use App\Jobs\NotifyTaskJob;

class CheckTasks extends Command
{
    protected $signature = 'check:tasks';
    protected $description = 'Verifica tarefas e despacha notificações';

    public function handle()
    {
        $tasks = Task::where('scheduled_to', '<=', now())
                     ->where('is_notified', false)
                     ->get();

        foreach ($tasks as $task) {
            NotifyTaskJob::dispatch($task);
        }

        $this->info('Verificação concluída: ' . $tasks->count() . ' tarefas processadas.');
    }
}

