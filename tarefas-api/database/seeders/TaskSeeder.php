<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $tarefas = [
            [
                'title' => 'Enviar relatório semanal',
                'description' => 'Elaborar e enviar o relatório de desempenho da semana para a gerência até o final do dia.'
            ],
            [
                'title' => 'Reunião com a equipe de vendas',
                'description' => 'Discutir metas mensais, revisar desempenho da semana e alinhar estratégias de prospecção.'
            ],
            [
                'title' => 'Agendar manutenção do sistema',
                'description' => 'Verificar disponibilidade da equipe técnica e agendar manutenção preventiva dos servidores.'
            ],
            [
                'title' => 'Atualizar cadastro de clientes',
                'description' => 'Revisar e atualizar dados de clientes inativos ou com informações desatualizadas no sistema.'
            ],
            [
                'title' => 'Verificar pendências financeiras',
                'description' => 'Analisar contas a pagar e a receber, garantindo que não haja atrasos ou inadimplência.'
            ],
            [
                'title' => 'Preparar apresentação do projeto',
                'description' => 'Criar slides para apresentação do status do projeto ao cliente, incluindo resultados e próximos passos.'
            ],
            [
                'title' => 'Responder e-mails pendentes',
                'description' => 'Organizar a caixa de entrada e responder e-mails importantes acumulados durante a semana.'
            ],
            [
                'title' => 'Publicar post no blog da empresa',
                'description' => 'Revisar o conteúdo, formatar no CMS e programar a publicação do artigo semanal da empresa.'
            ],
            [
                'title' => 'Solicitar materiais ao fornecedor',
                'description' => 'Checar estoque, levantar necessidades e solicitar os insumos necessários com urgência.'
            ],
            [
                'title' => 'Realizar backup dos dados',
                'description' => 'Efetuar o backup completo dos arquivos e banco de dados e validar a integridade das cópias.'
            ],
        ];

        foreach ($tarefas as $tarefa) {
            Task::create([
                'title' => $tarefa['title'],
                'description' => $tarefa['description'],
                'scheduled_to' => $faker->dateTimeBetween('-1 day', '+2 days'),
                'is_notified' => false,
            ]);
        }
    }
}
