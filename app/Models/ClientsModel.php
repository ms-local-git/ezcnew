<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'account_no';
    // protected $returnType = 'array';
    protected $returnType = 'object';


    protected $allowedFields = [
        'account_no','branch','client_group','status','name','attention','caller_person',
        'phone1','phone2','emer_phone','fax','street','city','state','zip','country',
        'emer_name','job_color','service_type_required','website','email','login_id','password',
        'invoice_email','is_wh_sr','remarks','remarks_2','doj','opening_balance_date',
        'opening_balance','credit_limit','special_discount',
        'int_rate_30','int_rate_60','int_rate_90','priority',
        'referencer_required','billing_method','quality_window',
        'p_coverpage','p_long','p_ref_sum','p_ticket',
        'ae_job','a_email_job','af_del_time','a_email_del',
        'ae_pickup_image','ae_email_icupdate','ae_pod','a_email_pod',
        'af_sent_ch','a_email_ch','brd_time_select','brd_a_email_time',
        'af_job','a_fax_job','a_fax_del','af_pod','a_fax_pod','a_fax_ch',
        'brd_time','a_email_time','web_alert','auto_alert','is_job_deadline',
        'airport1','airport_miles1','airport2','airport_miles2',
        'airport3','airport_miles3','sales_person1','sales_person2',
        'sales_person3','sales_person4','cc_accept','cc_auto_pay',
        'card_name','card_no','card_address','card_city','card_state','card_zip','card_phone'
    ];

    public function insertClient(array $data): int
    {

        // dd($data);
        $this->insert($data);
        return $this->insertID();
    }

    public function updateByAccountNo(int $accountNo, array $data): bool
    {
        return $this->where('account_no', $accountNo)->set($data)->update();
    }

    public function getByAccountNo(int $accountNo)
{
    return $this->where('account_no', $accountNo)->first();
}

}
