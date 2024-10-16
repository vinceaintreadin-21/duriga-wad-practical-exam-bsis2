<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function getAllTransactions(){
       $transactions = Transaction::all();

       return view('all-transactions', ['transactions' => $transactions]);
    }

    public function getOneTransaction(Request $request){
        $transaction = Transaction::find($request->id);

        if(!$transaction){
            return redirect()->route('getAllTrasactions')->with('error', 'Transaction Not Found');
        }

        return view('one-transaction', ['transaction' => $transaction]);
    }

    public function createTransaction(){
        return view('create-transaction');
    }

    public function storeTransaction(Request $request){
        $validated = $request->validate([
            'transaction_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:10',
            'total_amount' => 'required|integer|max:10000',
            'transaction_number' => 'required|string|max:255'
        ]);

        $transactions = new Transaction();
        $transactions->transaction_name = $validated['transaction_name'];
        $transactions->description = $validated['description'];
        $transactions->status = $validated['status'];
        $transactions->total_amount = $validated['total_amount'];
        $transactions->transaction_number = $validated['transaction_number'];
        $transactions->save();

        return redirect()->route('getAllTransactions')->with('success', 'Transaction Completed');
    }

        public function editTransaction(Request $request){
        $transaction = Transaction::find($request->id);

        if(!$transaction){
            return redirect()->route('getAllTrasactions')->with('error', 'Transaction Not Found');
        }

        return view('edit-transaction', ['transaction' => $transaction]);
    }

    public function updateTransaction(Request $request){
        $validated = $request->validate([
            'transaction_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:10',
            'total_amount' => 'required|integer|max:10000',
            'transaction_number' => 'required|string|max:255'
        ]);


        $transaction = Transaction::find($request->id);

        if(!$transaction){
            return redirect()->route('getAllTrasactions')->with('error', 'Transaction Not Found');
        }

        $transaction->transaction_name = $validated['transaction_name'];
        $transaction->description = $validated['description'];
        $transaction->status = $validated['status'];
        $transaction->total_amount = $validated['total_amount'];
        $transaction->transaction_number = $validated['transaction_number'];
        $transaction->save();

        return redirect()->route('getAllTransactions')->with('success', 'Transaction Completed');

    }

    public function deleteTransaction(Request $request){
        $transaction = Transaction::find($request->id);

        if($transaction){
            $transaction->delete();
        }

        return redirect()->route('getAllTransactions', ['transaction' => $transaction->id])->with('success', 'Successfully Deleted');
    }
}
