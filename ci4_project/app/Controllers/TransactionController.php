<?php namespace App\Controllers;

use App\Models\TransactionHModel;

class TransactionController extends BaseController
{
    public function index()
    {
        // Get user's current balance
        $userId = session()->get('user_id'); // Replace with actual user ID
        $transactionModel = new TransactionHModel();
        $transactions = $transactionModel->getTransactionsByUserId($userId);

        return view('Update_view', ['transactions' => $transactions]);
    }
}