<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientsCardModel extends Model
{
    protected $table      = 'clients_card_info';
    protected $primaryKey = 'id';
    // protected $returnType = 'array';
     protected $returnType = 'object';


    protected $allowedFields = [
        'client_id',
        'card_type',
        'card_no',
        'card_exp_month',
        'card_exp_year',
        'card_cvv2_code'
    ];

    public function insertCards(int $clientId, array $cards): void
    {
        $rows = [];
        foreach ($cards as $card) {
            $cardNo = isset($card['card_no']) ? trim((string) $card['card_no']) : '';
            if ($cardNo === '') {
                continue;
            }

            $rows[] = [
                'client_id'      => $clientId,
                'card_type'      => $card['card_type'] ?? null,
                'card_no'        => $cardNo,
                'card_exp_month' => $card['card_exp_month'] ?? null,
                'card_exp_year'  => $card['card_exp_year'] ?? null,
                'card_cvv2_code' => $card['card_cvv2_code'] ?? null,
            ];
        }

        if (empty($rows)) {
            return;
        }

        $this->db->table($this->table)->insertBatch($rows);
    }

     public function replaceCards(int $clientId, array $cards): void
    {
        $builder = $this->db->table($this->table);
        $builder->where('client_id', $clientId)->delete();

        $rows = [];
        foreach ($cards as $card) {
            $cardNo = isset($card['card_no']) ? trim((string) $card['card_no']) : '';
            if ($cardNo === '') {
                continue;
            }

            $rows[] = [
                'client_id'      => $clientId,
                'card_type'      => $card['card_type'] ?? null,
                'card_no'        => $cardNo,
                'card_exp_month' => $card['card_exp_month'] ?? null,
                'card_exp_year'  => $card['card_exp_year'] ?? null,
                'card_cvv2_code' => $card['card_cvv2_code'] ?? null,
            ];
        }

        if (empty($rows)) {
            return;
        }

        $builder->insertBatch($rows);
    }

    public function getByClientId(int $clientId): array
{
    return $this->where('client_id', $clientId)->findAll();
}

}
