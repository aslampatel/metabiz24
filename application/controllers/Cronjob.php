<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Cronjob extends CI_Controller
{
    public $user = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Generalmodel');
    }
   
    public function income()
    {
        $user = $this->Generalmodel->show_data_id('user_register', '', '', 'get', '');
        $rank_income = $this->Generalmodel->show_data_id('rank_income', '', '', 'get', '');
        $club_income = $this->Generalmodel->show_data_id('club_income', '', '', 'get', '');
        // prx($rank_income[1]->amount);
        foreach ($user as $key => $value) {
            $totalTems = totalTeams($value->id, 0);
            // prx($totalTems);
            $rankPoint = 0;
            $clubPoint = 0;
            if ($value->rank == 1) {
                $totalRank = count($this->Generalmodel->show_data_id('user_register', 1, 'rank', 'get', ''));
                $rankPoint = $rank_income[0]->amount * $totalTems;
                $clubPoint = $club_income[0]->amount * $totalTems / $totalRank;
            }
            if ($value->rank == 2) {
                $totalRank = count($this->Generalmodel->show_data_id('user_register', 2, 'rank', 'get', ''));
                $rankPoint = $rank_income[1]->amount * $totalTems;
                $clubPoint = $club_income[1]->amount * $totalTems / $totalRank;
            }
            if ($value->rank == 3) {
                $totalRank = count($this->Generalmodel->show_data_id('user_register', 3, 'rank', 'get', ''));
                $rankPoint = $rank_income[2]->amount * $totalTems;
                $clubPoint = $club_income[2]->amount * $totalTems / $totalRank;
            }
            if ($value->rank == 4) {
                $totalRank = count($this->Generalmodel->show_data_id('user_register', 4, 'rank', 'get', ''));
                $rankPoint = $rank_income[3]->amount * $totalTems;
                $clubPoint = $club_income[3]->amount * $totalTems / $totalRank;
            }
            if ($value->rank == 5) {
                $totalRank = count($this->Generalmodel->show_data_id('user_register', 5, 'rank', 'get', ''));
                $rankPoint = $rank_income[4]->amount * $totalTems;
                $clubPoint = $club_income[4]->amount * $totalTems / $totalRank;
            }

            if ($rankPoint != 0) {

                $data = array(
                    'user_id' => $value->id,
                    'amount' => $rankPoint,
                    'type' => 'Credit',
                    'transaction_type' => 'Rank',
                    'note' => 'Rank Income',
                    'date' => date('Y-m-d h:i:s')
                );
                // pr($data);
                $Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
                $rankData = array(
                    'register_user' => $value->id,
                    'referral_user' => $value->ref_user,
                    'amount' => $rankPoint,
                    'type' => 'Debit',
                    // 'note' => 'DIRECT REFERRAL POINT',
                    'date' => date('Y-m-d h:i:s')
                );
                $Ins = $this->Generalmodel->show_data_id('rank_fund', '', '', 'insert', $rankData);
            }
            if ($clubPoint != 0) {
                $data = array(
                    'user_id' => $value->id,
                    'amount' => $clubPoint,
                    'type' => 'Credit',
                    'transaction_type' => 'Club',
                    'note' => 'Club Income',
                    'action' => 1,
                    'date' => date('Y-m-d h:i:s')
                );
                $Ins = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
                $clubData = array(
                    'register_user' => $value->id,
                    'referral_user' => $value->ref_user,
                    'amount' => $clubPoint,
                    'type' => 'Debit',
                    // 'note' => 'DIRECT REFERRAL POINT',
                    'date' => date('Y-m-d h:i:s')
                );
                $Ins = $this->Generalmodel->show_data_id('club_fund', '', '', 'insert', $clubData);
            }

        }

    }

    function reactive()
    {
        $user = $this->Generalmodel->show_data_id('user_register', 'Active', 'status', 'get', '');
        foreach ($user as $value) {
            if (!empty($value->account_active_date)) {
                $date = $value->account_active_date;
                $original_date = DateTime::createFromFormat('Y-m-d H:i:s', $date);

                if ($original_date === false) {
                    $new_date = '';
                } else {
                    $original_date->add(new DateInterval('P25D'));
                    $new_date = $original_date->format('d-m-Y');
                }

                // Get the current date
                $current_date = date("d-m-Y");
                // echo $current_date;
                $date1 = $new_date;
                $date2 = $current_date;

                // Convert dates to timestamps
                $timestamp1 = strtotime($date1);
                $timestamp2 = strtotime($date2);

                // Check the difference in seconds
                $difference = $timestamp2 - $timestamp1;

                // Compare the difference
                // if ($difference > 0) {
                //     echo "$date2 is greater than $date1";
                // } elseif ($difference < 0) {
                //     echo "$date1 is greater than $date2";
                // } else {
                //     echo "Both dates are equal";
                // }
                // Check if the new date is less than the current date and is not empty
                if ($difference > 0) {
                    $Ins = $this->Generalmodel->show_data_id('wallet', $value->id, 'user_id', 'update', ['action'=>0]);
                    // echo "11";
                    $DebitsTotal = $this->Generalmodel->get_total_2('amount', 'wallet', 'user_id', $value->id, 'type', 'Debit');
                    $CreditsTotal = $this->Generalmodel->get_total_2('amount', 'wallet', 'user_id', $value->id, 'type', 'Credit');
                    $wallet_bal = ($CreditsTotal[0]->amount - $DebitsTotal[0]->amount);

                    // Check if the wallet balance is greater than or equal to 1000
                    if ($wallet_bal >= 1000) {
                        echo $value->id . "<br>";
                        $data = array(
                            'user_id' => $value->id,
                            'amount' => 500,
                            'type' => 'Debit',
                            'transaction_type' => 'Reactive',
                            'note' => 'Account Reactive Charge',
                            'date' => date('Y-m-d h:i:s')
                        );
                        $walletInsert = $this->Generalmodel->show_data_id('wallet', '', '', 'insert', $data);
                        $query = $this->Generalmodel->show_data_id('user_register', $value->id, 'id', 'update', ['account_status' => 'Active', 'account_active_date' => date('Y-m-d h:i:s')]);
                    }
                } else {
                    // echo "dd<br>";
                    $query = $this->Generalmodel->show_data_id('user_register', $value->id, 'id', 'update', ['account_status' => 'Inactive']);

                }
            }
        }
    }

    



}
?>